<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\ScreeningSched;

/* @var $this yii\web\View */
/* @var $model app\models\Talent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="talent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MANAGER_id')->textInput() ?>

    <?= $form->field($model, 'TALENT_ManagedStartDate')->textInput() ?>

    <?= $form->field($model, 'TALENT_ManagedEndDate')->textInput() ?>

    <?= $form->field($model, 'SCREENING_SCHED_id')->dropDownList(
			ArrayHelper::map(ScreeningSched::find()->all(), 'id', 'scr_date', 'scr_time'),
			['prompt'=>'Select screening schedule'])
			?>

    <?= $form->field($model, 'APPLICANT_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
