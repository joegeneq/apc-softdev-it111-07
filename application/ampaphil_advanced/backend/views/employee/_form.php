<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EMP_LName')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'EMP_FName')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'EMP_MName')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'EMP_Gender')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'EMP_BDate')->textInput() ?>

    <?= $form->field($model, 'EMP_BlkNo')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'EMP_Street')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'EMP_Brgy')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'EMP_City')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'EMP_ZipCode')->textInput() ?>

    <?= $form->field($model, 'EMP_ContactNo')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'EMP_EmailAdd')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'EMP_Position')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
