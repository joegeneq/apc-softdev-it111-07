<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Employee;
//widgets
use dosamigos\datepicker\DatePicker;
use kartik\time\TimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\ScreeningSched */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="screening-sched-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'scr_date')->widget(
        DatePicker::className(), [
            'inline' => false,
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>

    <?= $form->field($model, 'scr_time')->widget(
        TimePicker::className(), [
            'name' => 'time',
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'secondStep' => 5
            ]
    ]);?>

    <?= $form->field($model, 'app_status')->dropDownList(['' => 'Select Status', 
                                                          'Screening' => 'Screening', 
                                                          'Passed' => 'Passed', 
                                                          'Failed' => 'Failed']
                                                        ) ?>

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'employee_id')->dropDownList(
        ArrayHelper::map(Employee::find()->all(), 'id', 'emp_lname'),
        ['prompt'=>'Select Lastname'] ) 
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
