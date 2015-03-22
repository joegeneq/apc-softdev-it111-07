<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//for widgets
use dosamigos\datepicker\DatePicker;
use kartik\time\TimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\EventDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'event_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'event_location')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'event_type')->dropDownList(['' => 'Select Event Type',
                                                          'Party' => 'Party',
                                                          'Reunion' => 'Reunion',
                                                          'Debut' => 'Debut',
                                                          'Wedding' => 'Wedding',
                                                          'Anniversary' => 'Anniversary',
                                                          'School Activities' => 'School Activities'
                                                        ]) ?>

    <?= $form->field($model, 'event_startdate')->widget(
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

    <?= $form->field($model, 'event_enddate')->widget(
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

    <?= $form->field($model, 'event_starttime')->widget(
        TimePicker::className(), [
            'name' => 'time',
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'secondStep' => 5
            ]
    ]);?>

    <?= $form->field($model, 'event_endtime')->widget(
        TimePicker::className(), [
            'name' => 'time',
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'secondStep' => 5
            ]
    ]);?>

    <?= $form->field($model, 'event_status')->textInput(['maxlength' => 20]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
