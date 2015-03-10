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

    <?= $form->field($model, 'TALENT_Type')->dropDownList([ '' => 'Select Talent Type',
                                                            'Band' => 'Band',
                                                            'Dancing' => 'Dancing',
                                                            'Singing' => 'Singing'
                                                        ]) ?>

    <?= $form->field($model, 'TALENT_Specialization')->dropDownList(['' => 'Select Talent Specialization',
                                                                     'Singing' => 'Singing',
                                                                     'Base' => 'Base (Band)',
                                                                     'Drums' => 'Drums (Band)',
                                                                     'Vocals' => 'Vocals (Band)',
                                                                     'Lead' => 'Lead (Band)',
                                                                     'Rhythm' => 'Rhythm(Band)',
                                                                     'Contemporary Dance' => 'Contemporary Dance',
                                                                     'Folk Dance' => 'Folk Dance',
                                                                     'Jazz Dance' => 'Jazz Dance'
                                                                    ]) ?>

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
