<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Client */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CLIENT_LName')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'CLIENT_FName')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'CLIENT_MName')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'CLIENT_Company')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'CLIENT_CompanyBlkOrAreaNo')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'CLIENT_CompanyBrgy')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'CLIENT_ContactNo')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'CLIENT_CompanyCity')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'CLIENT_EmailAdd')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
