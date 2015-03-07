<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Applicant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'APP_LName')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'APP_FName')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'APP_MName')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'APP_Gender')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'APP_BDate')->textInput() ?>

    <?= $form->field($model, 'APP_BlkOrAreaNo')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'APP_Street')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'APP_Brgy')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'APP_City')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'APP_ZipCode')->textInput() ?>

    <?= $form->field($model, 'APP_ContactNo')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'APP_EmailAdd')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'APP_RegDate')->textInput() ?>

    <?= $form->field($model, 'APP_RegTime')->textInput() ?>

    <?= $form->field($model, 'APP_Talent')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'SCREENING_SCHED_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
