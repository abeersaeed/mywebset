<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\PatientDetails;

$model = new PatientDetails;

?>

<!-- Modal -->
<div id="AddHealthRecordModal" class="modal fade" role="dialog">
    <div class="container" style="margin-top:60px">
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title"><strong>Add health Record</strong></h3></div>
                <div class="panel-body">
                    <?php $form = ActiveForm::begin([
                      'id' => 'health-information-form',
                      'action' => Yii::$app->urlManager->createUrl('site/set-patient-details'),
                      'enableClientValidation' => true,
                      'enableAjaxValidation'   => true,
                    ]); ?>
                        
                        <?= $form->field($model, 'height')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'weight')->textInput() ?>

                        <?= $form->field($model, 'bmi')->textInput() ?>

                        <div class="form-group">
                            <label>Test date</label>
                            <?= $form->field($model, 'date')->textInput(['class' => 'datepicker form-control'])->label(false) ?>
                        </div>

                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'submit-button']) ?>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    $this->registerJs("
        $(document).on('click','#add-new-health-record',function(){
            $('#AddHealthRecordModal').modal('show');
        });
        $('.datepicker').datepicker();
    ");
?>