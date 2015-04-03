<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Applicant;
use app\models\Manager;
use app\models\ScreeningSched;

/* for widgets*/
use dosamigos\datepicker\DatePicker;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Talent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="talent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'manager_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Manager::find()->all(), 'id', 'mgr_lname'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select Lastname'],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ]);
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

    <?= $form->field($model, 'screening_sched_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(ScreeningSched::find()->all(), 'id', 'scr_time', 'scr_date'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select Schedule'],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ]);
    ?>

    <?= $form->field($model, 'applicant_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Applicant::find()->all(), 'id', 'app_lname'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select Lastname'],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
