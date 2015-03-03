<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ManagerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manager-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'MGR_LName') ?>

    <?= $form->field($model, 'MGR_FName') ?>

    <?= $form->field($model, 'MGR_MName') ?>

    <?= $form->field($model, 'MGR_Gender') ?>

    <?php // echo $form->field($model, 'MGR_BDate') ?>

    <?php // echo $form->field($model, 'MGR_BlkOrAreaNo') ?>

    <?php // echo $form->field($model, 'MGR_Street') ?>

    <?php // echo $form->field($model, 'MGR_Brgy') ?>

    <?php // echo $form->field($model, 'MGR_City') ?>

    <?php // echo $form->field($model, 'MGR_ZipCode') ?>

    <?php // echo $form->field($model, 'MGR_ContactNo') ?>

    <?php // echo $form->field($model, 'MGR_EmailAdd') ?>

    <?php // echo $form->field($model, 'MGR_Expertise') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
