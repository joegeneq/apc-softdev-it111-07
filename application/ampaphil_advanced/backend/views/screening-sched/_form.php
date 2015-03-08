<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Employee;

/* @var $this yii\web\View */
/* @var $model app\models\ScreeningSched */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="screening-sched-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SCR_Date')->textInput() ?>

    <?= $form->field($model, 'SCR_Time')->textInput() ?>

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
