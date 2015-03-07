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

    <?= $form->field($model, 'event_name') ?>

    <?= $form->field($model, 'event_location') ?>

    <?= $form->field($model, 'event_type') ?>

    <?= $form->field($model, 'event_datefrom') ?>

    <?php // echo $form->field($model, 'event_dateto') ?>

    <?php // echo $form->field($model, 'event_timefrom') ?>

    <?php // echo $form->field($model, 'event_timeto') ?>

    <?php // echo $form->field($model, 'transaction_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
