<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\LoginForm;

$model = new LoginForm;

?>

<!-- Modal -->
<div id="myModalLogin" class="modal fade" role="dialog">
    <div class="container" style="margin-top:60px">
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title"><strong>Sign In </strong></h3></div>
                <div class="panel-body">
                    <?php $form = ActiveForm::begin([
                      'id' => 'login-form',
                      'action' => Yii::$app->urlManager->createUrl('site/login'),
                      'enableClientValidation' => true,
                      'enableAjaxValidation'   => true,
                    ]); ?>
                        
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                        
                        <?= $form->field($model, 'password')->passwordInput() ?>

                        <input type="hidden" name="func-type" value="login" />

                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button', 'id' => 'login-btn']) ?>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>