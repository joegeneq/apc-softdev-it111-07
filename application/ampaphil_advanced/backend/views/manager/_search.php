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

    <?= $form->field($model, 'mgr_lname') ?>

    <?= $form->field($model, 'mgr_fname') ?>

    <?= $form->field($model, 'mgr_mname') ?>

    <?= $form->field($model, 'mgr_gender') ?>

    <?php // echo $form->field($model, 'mgr_bdate') ?>

    <?php // echo $form->field($model, 'mgr_blockno') ?>

    <?php // echo $form->field($model, 'mgr_street') ?>

    <?php // echo $form->field($model, 'mgr_brgy') ?>

    <?php // echo $form->field($model, 'mgr_city') ?>

    <?php // echo $form->field($model, 'mgr_zipcode') ?>

    <?php // echo $form->field($model, 'mgr_contactno') ?>

    <?php // echo $form->field($model, 'mgr_emailadd') ?>

    <?php // echo $form->field($model, 'mgr_expertise') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
