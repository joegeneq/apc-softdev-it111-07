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

    <?= $form->field($model, 'mgr_lname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mgr_fname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mgr_mname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mgr_gender')->dropDownList(['' => 'Select Gender',
                                                          'Male' => 'Male',
                                                          'Female' => 'Female'
                                                        ]) ?>

    <?= $form->field($model, 'mgr_bdate')->widget(
        DatePicker::className(), [
            // inline too, not bad
            'inline' => false, 
            // modify template for custom rendering
            //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>

    <?= $form->field($model, 'mgr_blkno')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'mgr_street')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mgr_brgy')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mgr_city')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mgr_zipcode')->textInput() ?>

    <?= $form->field($model, 'mgr_contactno')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'mgr_emailadd')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mgr_expertise')->dropDownList([ '' => 'Select Expertise',
                                                            'Dancing' => 'Dancing',
                                                            'Singing' => 'Singing',
                                                            'Band' => 'Band'
                                                            ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
