<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Client */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'client_lname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'client_fname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'client_mname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'client_company')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'client_companyclkno')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'client_companybrgy')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'client_contactno')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'client_companycity')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'client_emailadd')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
