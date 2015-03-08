<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Manager */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manager-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mgr_lname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mgr_fname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mgr_mname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mgr_gender')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'mgr_bdate')->textInput() ?>

    <?= $form->field($model, 'mgr_blockno')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'mgr_street')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mgr_brgy')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mgr_city')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mgr_zipcode')->textInput() ?>

    <?= $form->field($model, 'mgr_contactno')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'mgr_emailadd')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mgr_expertise')->textInput(['maxlength' => 20]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
