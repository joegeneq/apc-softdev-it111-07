<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EventDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'event_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'event_location')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'event_type')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'event_datefrom')->textInput() ?>

    <?= $form->field($model, 'event_dateto')->textInput() ?>

    <?= $form->field($model, 'event_timefrom')->textInput() ?>

    <?= $form->field($model, 'event_timeto')->textInput() ?>

    <?= $form->field($model, 'transaction_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
