<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//for widgets
use dosamigos\datepicker\DatePicker;
use kartik\time\TimePicker;

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

    <?= $form->field($model, 'APP_BDate')->widget(
        DatePicker::className(), [
            // inline too, not bad
            'inline' => false, 
            // modify template for custom rendering
            //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>

    <?= $form->field($model, 'APP_BlkNo')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'APP_Street')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'APP_Brgy')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'APP_City')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'APP_ZipCode')->textInput() ?>

    <?= $form->field($model, 'APP_ContactNo')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'APP_EmailAdd')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'APP_RegDate')->widget(
        DatePicker::className(), [
            // inline too, not bad
            'inline' => false, 
            // modify template for custom rendering
            //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>

    <?= $form->field($model, 'APP_RegTime')->widget(
        TimePicker::className(), [
            'name' => 'time',
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'secondStep' => 5
            ]
    ]);?>

    <?= $form->field($model, 'APP_Talent')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'SCREENING_SCHED_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
