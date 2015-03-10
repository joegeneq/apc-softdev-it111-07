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

    <?= $form->field($model, 'EVENT_Name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'EVENT_Location')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'EVENT_Type')->dropDownList(['' => 'Select Event Type',
                                                          'Party' => 'Party',
                                                          'Reunion' => 'Reunion',
                                                          'Debut' => 'Debut',
                                                          'Wedding' => 'Wedding',
                                                          'Anniversary' => 'Anniversary',
                                                          'School Activities' => 'School Activities'
                                                        ]) ?>

    <?= $form->field($model, 'EVENT_DateFrom')->widget(
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

    <?= $form->field($model, 'EVENT_DateTo')->widget(
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

    <?= $form->field($model, 'EVENT_TimeFrom')->widget(
        TimePicker::className(), [
            'name' => 'time',
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'secondStep' => 5
            ]
    ]);?>

    <?= $form->field($model, 'EVENT_TimeTo')->widget(
        TimePicker::className(), [
            'name' => 'time',
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'secondStep' => 5
            ]
    ]);?>



    <?= $form->field($model, 'EVENT_Status')->dropDownList(['' => 'Select Status', 'Upcoming' => 'Upcoming', 'On Going' => 'On Going', 'Done' => 'Done']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
