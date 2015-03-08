<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EventDetailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-details-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'EVENT_Name') ?>

    <?= $form->field($model, 'EVENT_Location') ?>

    <?= $form->field($model, 'EVENT_Type') ?>

    <?= $form->field($model, 'EVENT_DateFrom') ?>

    <?php // echo $form->field($model, 'EVENT_DateTo') ?>

    <?php // echo $form->field($model, 'EVENT_TimeFrom') ?>

    <?php // echo $form->field($model, 'EVENT_TimeTo') ?>

    <?php // echo $form->field($model, 'EVENT_Status') ?>

    <?php // echo $form->field($model, 'PAYMENTS_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
