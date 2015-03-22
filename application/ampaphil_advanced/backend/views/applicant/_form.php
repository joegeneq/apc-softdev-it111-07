<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\ScreeningSched;
//for widgets
use dosamigos\datepicker\DatePicker;
use kartik\time\TimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Applicant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'app_lname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'app_fname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'app_mname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'app_gender')->dropDownList(['' => 'Select Gender',
                                                          'Male' => 'Male',
                                                          'Gay' => 'Gay',
                                                          'Female' => 'Female',
                                                          'Lesbian' => 'Lesbian'
                                                        ]) ?>

    <?= $form->field($model, 'app_bdate')->widget(
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

    <?= $form->field($model, 'app_blkno')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'app_street')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'app_brgy')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'app_city')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'app_zipcode')->textInput() ?>

    <?= $form->field($model, 'app_contactno')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'app_emailadd')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'app_regdate')->widget(
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

    <?= $form->field($model, 'app_regtime')->widget(
        TimePicker::className(), [
            'name' => 'time',
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'secondStep' => 5
            ]
    ]);?>

    <?= $form->field($model, 'app_talent')->dropDownList(['' => 'Select Talent',
                                                          'Dancing' => 'Dancing',
                                                          'Singing' => 'Singing',
                                                        ]) ?>

    <?= $form->field($model, 'screening_sched_id')->dropDownList(
        ArrayHelper::map(ScreeningSched::find()->all(), 'id', 'scr_time', 'scr_date'),
        ['prompt'=>'Select Screening Schedule'] ) 
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
