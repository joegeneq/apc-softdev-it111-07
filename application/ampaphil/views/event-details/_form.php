<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EventDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EVENT_Name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'EVENT_Location')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'EVENT_Type')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'EVENT_DateFrom')->textInput() ?>

    <?= $form->field($model, 'EVENT_DateTo')->textInput() ?>

    <?= $form->field($model, 'EVENT_TimeFrom')->textInput() ?>

    <?= $form->field($model, 'EVENT_TimeTo')->textInput() ?>

    <?= $form->field($model, 'TRANSACTION_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
