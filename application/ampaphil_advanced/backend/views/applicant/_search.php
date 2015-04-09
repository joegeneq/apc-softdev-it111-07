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

    <?= $form->field($model, 'app_lname') ?>

    <?= $form->field($model, 'app_fname') ?>

    <?= $form->field($model, 'app_mname') ?>

    <?= $form->field($model, 'app_gender') ?>

    <?php // echo $form->field($model, 'app_bdate') ?>

    <?php // echo $form->field($model, 'app_blkno') ?>

    <?php // echo $form->field($model, 'app_street') ?>

    <?php // echo $form->field($model, 'app_brgy') ?>

    <?php // echo $form->field($model, 'app_city') ?>

    <?php // echo $form->field($model, 'app_zipcode') ?>

    <?php // echo $form->field($model, 'app_contactno') ?>

    <?php // echo $form->field($model, 'app_emailadd') ?>

    <?php // echo $form->field($model, 'app_regdate') ?>

    <?php // echo $form->field($model, 'app_regtime') ?>

    <?php // echo $form->field($model, 'app_talent') ?>

    <?php echo $form->field($model, 'app_status') ?>

    <?php // echo $form->field($model, 'screening_sched_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
