<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Employee;
use dosamigos\datepicker\DatePicker;
use kartik\time\TimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\ScreeningSched */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="screening-sched-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SCR_Date')->widget(
        DatePicker::className(), [
            'inline' => false,
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>

    <?= $form->field($model, 'SCR_Time')->widget(
        TimePicker::className(), [
            'name' => 'time',
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'secondStep' => 5
            ]
    ]);?>

    <?= $form->field($model, 'APP_Status')->dropDownList(['' => 'Select Status', 'For Screening' => 'For Screening', 'Passed' => 'Passed', 'Failed' => 'Failed']) ?>

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'EMPLOYEE_id')->dropDownList(
        ArrayHelper::map(Employee::find()->all(), 'id', 'EMP_LName'),
        ['prompt'=>'Select Lastname'] ) 
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
