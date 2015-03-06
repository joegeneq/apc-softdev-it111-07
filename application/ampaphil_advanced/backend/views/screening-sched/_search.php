<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ScreeningSchedSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="screening-sched-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'SCR_Date') ?>

    <?= $form->field($model, 'SCR_Time') ?>

    <?= $form->field($model, 'APP_Status') ?>

    <?= $form->field($model, 'EMPLOYEE_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
