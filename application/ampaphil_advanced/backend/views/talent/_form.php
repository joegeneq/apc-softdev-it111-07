<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Talent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="talent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'manager_id')->textInput() ?>

    <?= $form->field($model, 'talent_managedstartdate')->textInput() ?>

    <?= $form->field($model, 'talent_managedenddate')->textInput() ?>

    <?= $form->field($model, 'screening_sched_id')->textInput() ?>

    <?= $form->field($model, 'applicant_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
