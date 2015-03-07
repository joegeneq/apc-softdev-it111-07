<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TalentLine */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="talent-line-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'talent_type')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'talent_specialization')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'applicant_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
