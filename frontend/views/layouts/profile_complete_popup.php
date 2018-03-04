<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\UserProfile;

$model = new UserProfile;
$check = false;

if(!Yii::$app->user->isGuest){
    if(empty(Yii::$app->user->identity->profile)){
        $check = true;
    }
}

?>

<?php if($check){ ?>
<!-- Modal -->
<div id="profileCompleteModal" class="modal fade" role="dialog">
    <div class="container" style="margin-top:60px">
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title"><strong>Profile Information</strong></h3></div>
                <div class="panel-body">
                    <?php $form = ActiveForm::begin([
                      'id' => 'profile-information-form',
                      'action' => Yii::$app->urlManager->createUrl('site/get-profile-information'),
                      'enableClientValidation' => true,
                      'enableAjaxValidation'   => true,
                    ]); ?>
                        
                        <?= $form->field($model, 'first_name')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'last_name')->textInput() ?>

                        <div class="form-group">
                            <label>Date of birth</label>
                            <?= $form->field($model, 'dob')->textInput(['class' => 'datepicker form-control'])->label(false) ?>
                        </div>

                        <div class="form-group">
                            <label>Select Gender</label>
                            <?= $form->field($model, 'gender')->DropDownList(UserProfile::getGenderArray(),['class' => 'select3 form-control'])->label(false) ?>
                        </div>

                        <?= $form->field($model, 'country')->textInput() ?>

                        <?= $form->field($model, 'city')->textInput() ?>

                        <?= $form->field($model, 'zip_code')->textInput() ?>

                        <?= Html::submitButton('Save', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    $this->registerJs("
        $('#profileCompleteModal').modal({
          show : 'true',
          backdrop: 'static',
          keyboard: false
        });

        $('.select3').select2();
        $('.datepicker').datepicker();
    ");
?>
<?php } ?>