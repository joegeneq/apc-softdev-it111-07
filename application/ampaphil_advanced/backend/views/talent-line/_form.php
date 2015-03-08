<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Applicant;

/* @var $this yii\web\View */
/* @var $model app\models\TalentLine */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="talent-line-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TALENT_Type')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'TALENT_Specialization')->textInput(['maxlength' => 45]) ?>

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'APPLICANT_id')->dropDownList(
        ArrayHelper::map(Applicant::find()->all(), 'id', 'APP_LName'),
        ['prompt'=>'Select Lastname'] ) 
         ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
