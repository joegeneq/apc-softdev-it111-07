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

    <?= $form->field($model, 'emp_lname') ?>

    <?= $form->field($model, 'emp_fname') ?>

    <?= $form->field($model, 'emp_mname') ?>

    <?= $form->field($model, 'emp_gender') ?>

    <?php // echo $form->field($model, 'emp_bdate') ?>

    <?php // echo $form->field($model, 'emp_blkno') ?>

    <?php // echo $form->field($model, 'emp_street') ?>

    <?php // echo $form->field($model, 'emp_brgy') ?>

    <?php // echo $form->field($model, 'emp_city') ?>

    <?php // echo $form->field($model, 'emp_zipcode') ?>

    <?php // echo $form->field($model, 'emp_contactno') ?>

    <?php // echo $form->field($model, 'emp_emailadd') ?>

    <?php // echo $form->field($model, 'emp_position') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
