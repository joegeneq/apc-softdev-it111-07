<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ApplicantSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicant-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'APP_LName') ?>

    <?= $form->field($model, 'APP_FName') ?>

    <?= $form->field($model, 'APP_MName') ?>

    <?= $form->field($model, 'APP_Gender') ?>

    <?php // echo $form->field($model, 'APP_BDate') ?>

    <?php // echo $form->field($model, 'APP_BlkOrAreaNo') ?>

    <?php // echo $form->field($model, 'APP_Street') ?>

    <?php // echo $form->field($model, 'APP_Brgy') ?>

    <?php // echo $form->field($model, 'APP_City') ?>

    <?php // echo $form->field($model, 'APP_ZipCode') ?>

    <?php // echo $form->field($model, 'APP_ContactNo') ?>

    <?php // echo $form->field($model, 'APP_EmailAdd') ?>

    <?php // echo $form->field($model, 'APP_RegDate') ?>

    <?php // echo $form->field($model, 'APP_RegTime') ?>

    <?php // echo $form->field($model, 'APP_Talent') ?>

    <?php // echo $form->field($model, 'SCREENING_SCHED_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
