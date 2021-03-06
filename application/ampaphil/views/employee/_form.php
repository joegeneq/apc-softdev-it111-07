<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emp_lname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'emp_fname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'emp_mname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'emp_gender')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'emp_bdate')->textInput() ?>

    <?= $form->field($model, 'emp_blockno')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'emp_street')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'emp_brgy')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'emp_city')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'emp_zipcode')->textInput() ?>

    <?= $form->field($model, 'emp_contactno')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'emp_emailadd')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'emp_position')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
