<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Payments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PAYMENTS_Date')->widget(
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

    <?= $form->field($model, 'PAYMENTS_Time')->textInput() ?>

    <?= $form->field($model, 'Rate')->textInput() ?>

    <?= $form->field($model, 'TALENT_Percentage')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'AGENCY_Percentage')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'EVENT_DETAILS_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
