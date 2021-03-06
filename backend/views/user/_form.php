<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username')->textInput() ?>
    <?= $form->field($user, 'first_name')->textInput() ?>
    <?= $form->field($user, 'last_name')->textInput() ?>
    <?= $form->field($model, 'email')->textInput() ?>
    <?= $form->field($model, 'password_hash')->passwordInput() ?>
    <?= $form->field($model, 'type')->dropDownList(
    	[
    		'1' => 'Admin',
    		'2' => 'Patient',
    		'3' => 'Doctor'
    	], 
    	['prompt'=>'Select Type'])
    ?>
    
    <?= $form->field($model, 'status')->dropDownList(
    	[
    		'0' => 'Deactive',
    		'10' => 'Active',
    	], 
    	['prompt'=>'Select Status'])
    ?>

    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
