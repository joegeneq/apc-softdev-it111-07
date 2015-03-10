<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Applicant;
use app\models\Manager;
use app\models\ScreeningSched;

/* for widgets*/
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Talent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="talent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MANAGER_id')->dropDownList(
        ArrayHelper::map(Manager::find()->all(), 'id', 'MGR_LName'),
        ['prompt'=>'Select Lastname'] ) 
    ?>

    <?= $form->field($model, 'TALENT_ManagedStartDate')->widget(
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

    <?= $form->field($model, 'TALENT_ManagedEndDate')->widget(
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

     <?= $form->field($model, 'SCREENING_SCHED_id')->dropDownList(
        ArrayHelper::map(ScreeningSched::find()->all(), 'id', 'SCR_Time', 'SCR_Date'),
        ['prompt'=>'Select Schedule'] ) 
    ?>

    <?= $form->field($model, 'APPLICANT_id')->dropDownList(
        ArrayHelper::map(Applicant::find()->all(), 'id', 'APP_LName'),
        ['prompt'=>'Select Lastname'] ) 
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
