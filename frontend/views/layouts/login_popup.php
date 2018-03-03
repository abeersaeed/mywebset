<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\LoginForm;
use frontend\models\SignupForm;
use common\models\User;

$model = new LoginForm;
$signupModel = new SignupForm;
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
                      'method' => 'post'
                    ]); ?>
                        
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                        
                        <?= $form->field($model, 'password')->passwordInput() ?>

                        <input type="hidden" name="func-type" value="login" />

                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        <span class="pull-right"> 
                          <a data-toggle="modal" data-target="#myModalForgotpassword" href="javascript:void(0);" class="forget-password-btn">Forgot password</a> | <a class="signup-btn" data-toggle="modal" data-target="#myModalSignup" href="javascript:void(0);">Signup</a>
                        </span>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Signup form -->
<div id="myModalSignup" class="modal fade" role="dialog">
    <div class="container" style="margin-top:60px">
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title"><strong>Sign Up </strong></h3></div>
                <div class="panel-body">
                    <?php $form = ActiveForm::begin([
                      'id' => 'signup-form',
                      'action' => Yii::$app->urlManager->createUrl('site/signup'),
                      'enableClientValidation' => true,
                      'enableAjaxValidation'   => true,
                    ]); ?>
                        
                        <?= $form->field($signupModel, 'username')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($signupModel, 'email') ?>

                        <?= $form->field($signupModel, 'password')->passwordInput() ?>

                        <div class="form-group">
                            <label>Role</label>
                            <?= $form->field($signupModel, 'role')->DropDownList(User::getFrontendTypesArray(),["class" => "select3 form-control col-md-12"])->label(false) ?>
                        </div>

                        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>

                        <span class="pull-right"> 
                          <a data-toggle="modal" data-target="#myModalForgotpassword" href="javascript:void(0);" class="forget-password-btn">Forgot password</a> | <a class="login-btn" data-toggle="modal" data-target="#myModalLogin" href="javascript:void(0);">Login</a>
                        </span>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 

    $this->registerJs('
        $(document).on("click",".login-btn",function(){
            $("#myModalLogin").modal("show");
            $("#myModalSignup").modal("hide");
            $("#myModalForgotpassword").modal("hide");
        });

        $(document).on("click",".forget-password-btn",function(){
            $("#myModalLogin").modal("hide");
            $("#myModalSignup").modal("hide");
            $("#myModalForgotpassword").modal("show");
        });

        $(document).on("click",".signup-btn",function(){
            $("#myModalLogin").modal("hide");
            $("#myModalSignup").modal("show");
            $("#myModalForgotpassword").modal("hide");
        });

        $(".select3").select2({ width: "resolve" });
    ');
?>