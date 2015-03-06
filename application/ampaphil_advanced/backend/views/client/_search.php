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

    <?= $form->field($model, 'CLIENT_LName') ?>

    <?= $form->field($model, 'CLIENT_FName') ?>

    <?= $form->field($model, 'CLIENT_MName') ?>

    <?= $form->field($model, 'CLIENT_Company') ?>

    <?php // echo $form->field($model, 'CLIENT_CompanyBlkOrAreaNo') ?>

    <?php // echo $form->field($model, 'CLIENT_CompanyBrgy') ?>

    <?php // echo $form->field($model, 'CLIENT_ContactNo') ?>

    <?php // echo $form->field($model, 'CLIENT_CompanyCity') ?>

    <?php // echo $form->field($model, 'CLIENT_EmailAdd') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
