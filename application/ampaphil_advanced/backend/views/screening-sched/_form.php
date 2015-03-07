<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ScreeningSched */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="screening-sched-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'scr_date')->textInput() ?>

    <?= $form->field($model, 'scr_time')->textInput() ?>

    <?= $form->field($model, 'app_status')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'employee_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
