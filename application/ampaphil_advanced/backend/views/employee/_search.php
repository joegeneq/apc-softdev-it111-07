<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmployeeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'EMP_LName') ?>

    <?= $form->field($model, 'EMP_FName') ?>

    <?= $form->field($model, 'EMP_MName') ?>

    <?= $form->field($model, 'EMP_Gender') ?>

    <?php // echo $form->field($model, 'EMP_BDate') ?>

    <?php // echo $form->field($model, 'EMP_BlkNo') ?>

    <?php // echo $form->field($model, 'EMP_Street') ?>

    <?php // echo $form->field($model, 'EMP_Brgy') ?>

    <?php // echo $form->field($model, 'EMP_City') ?>

    <?php // echo $form->field($model, 'EMP_ZipCode') ?>

    <?php // echo $form->field($model, 'EMP_ContactNo') ?>

    <?php // echo $form->field($model, 'EMP_EmailAdd') ?>

    <?php // echo $form->field($model, 'EMP_Position') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
