<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Applicant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'app_lname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'app_fname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'app_mname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'app_gender')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'app_bdate')->textInput() ?>

    <?= $form->field($model, 'app_blockno')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'app_street')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'app_brgy')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'app_city')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'app_zipcode')->textInput() ?>

    <?= $form->field($model, 'app_contactno')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'app_emailadd')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'app_regdate')->textInput() ?>

    <?= $form->field($model, 'app_regtime')->textInput() ?>

    <?= $form->field($model, 'app_talent')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'screening_sched_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
