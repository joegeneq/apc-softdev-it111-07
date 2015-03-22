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

    <?= $form->field($model, 'event_startdate')->textInput() ?>

    <?= $form->field($model, 'event_enddate')->textInput() ?>

    <?= $form->field($model, 'event_starttime')->textInput() ?>

    <?= $form->field($model, 'event_endtime')->textInput() ?>

    <?= $form->field($model, 'event_status')->textInput(['maxlength' => 20]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
