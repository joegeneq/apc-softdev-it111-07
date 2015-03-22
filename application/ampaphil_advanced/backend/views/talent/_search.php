<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TalentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="talent-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'manager_id') ?>

    <?= $form->field($model, 'talent_managedstartdate') ?>

    <?= $form->field($model, 'talent_managedenddate') ?>

    <?= $form->field($model, 'screening_sched_id') ?>

    <?php // echo $form->field($model, 'applicant_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
