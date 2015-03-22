<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'client_lname') ?>

    <?= $form->field($model, 'client_fname') ?>

    <?= $form->field($model, 'client_mname') ?>

    <?= $form->field($model, 'client_company') ?>

    <?php // echo $form->field($model, 'client_companyclkno') ?>

    <?php // echo $form->field($model, 'client_companybrgy') ?>

    <?php // echo $form->field($model, 'client_contactno') ?>

    <?php // echo $form->field($model, 'client_companycity') ?>

    <?php // echo $form->field($model, 'client_emailadd') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
