<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Payments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'payments_date')->textInput() ?>

    <?= $form->field($model, 'payments_time')->textInput() ?>

    <?= $form->field($model, 'payments_rate')->textInput() ?>

    <?= $form->field($model, 'talent_percentage')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'agency_percentage')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
