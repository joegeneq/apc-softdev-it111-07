<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\EventDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EVENT_Name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'EVENT_Location')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'EVENT_Type')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'EVENT_DateFrom')->widget(
        DatePicker::className(), [
            // inline too, not bad
            'inline' => false, 
            // modify template for custom rendering
            //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-M-dd'
            ]
    ]);?>

    <?= $form->field($model, 'EVENT_DateTo')->widget(
        DatePicker::className(), [
            // inline too, not bad
            'inline' => false, 
            // modify template for custom rendering
            //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-M-dd'
            ]
    ]);?>

    <?= $form->field($model, 'EVENT_TimeFrom')->textInput() ?>

    <?= $form->field($model, 'EVENT_TimeTo')->textInput() ?>

    <?= $form->field($model, 'EVENT_Status')->dropDownList(['' => 'Select Status', 'Upcoming' => 'Upcoming', 'On Going' => 'On Going', 'Done' => 'Done']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
