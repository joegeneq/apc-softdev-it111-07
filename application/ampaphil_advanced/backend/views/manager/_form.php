<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Manager */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manager-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MGR_LName')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'MGR_FName')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'MGR_MName')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'MGR_Gender')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'MGR_BDate')->widget(
        DatePicker::className(), [
            // inline too, not bad
            'inline' => false, 
            // modify template for custom rendering
            //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-M-dd'
            ]
    ]);?>

    <?= $form->field($model, 'MGR_BlkNo')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'MGR_Street')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'MGR_Brgy')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'MGR_City')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'MGR_ZipCode')->textInput() ?>

    <?= $form->field($model, 'MGR_ContactNo')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'MGR_EmailAdd')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'MGR_Expertise')->dropDownList([ '' => 'Select Expertise',
                                                            'Dancing' => 'Dancing',
                                                            'Singing' => 'Singing',
                                                            'Band' => 'Band'
                                                            ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
