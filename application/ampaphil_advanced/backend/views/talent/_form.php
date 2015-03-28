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

     <?= $form->field($model, 'manager_id')->dropDownList(
        ArrayHelper::map(Manager::find()->all(), 'id', 'mgr_lname'),
        ['prompt'=>'Select Lastname'] ) 
    ?>

    <?= $form->field($model, 'talent_managedstartdate')->widget(
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

    <?= $form->field($model, 'talent_managedenddate')->widget(
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

     <?= $form->field($model, 'screening_sched_id')->dropDownList(
        ArrayHelper::map(ScreeningSched::find()->all(), 'id', 'scr_time', 'scr_date'),
        ['prompt'=>'Select Schedule'] ) 
    ?>

    <?= $form->field($model, 'applicant_id')->dropDownList(
        ArrayHelper::map(Applicant::find()->all(), 'id', 'app_lname'),
        ['prompt'=>'Select Lastname'] ) 
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
