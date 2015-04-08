<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Applicant;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\TalentLine */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="talent-line-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'talent_type')->dropDownList([ '' => 'Select Talent Type',
                                                            'Solo' => 'Solo',
                                                            'Duo' => 'Duo',
                                                            'Group' => 'Group'
                                                        ]) ?>

    <?= $form->field($model, 'talent_specialization')->dropDownList(['' => 'Select Talent Specialization',
                                                                     'Acapella' => 'Acapella (Singing)',
                                                                     'Acoustic' => 'Acoustic (Singing)',
                                                                     'Mellow' => 'Mellow (Singing)',
                                                                     'Rock' => 'Rock (Singing)',
                                                                     'RNB' => 'RNB (Singing)',
                                                                     'Pop' => 'Pop (Singing)',
                                                                     'Bass' => 'Bass (Band)',
                                                                     'Drums' => 'Drums (Band)',
                                                                     'Vocals' => 'Vocals (Band)',
                                                                     'Lead' => 'Lead (Band)',
                                                                     'Rhythm' => 'Rhythm(Band)',
                                                                     'Contemporary Dance' => 'Contemporary Dance',
                                                                     'Folk Dance' => 'Folk Dance',
                                                                     'Jazz Dance' => 'Jazz Dance'
                                                                    ]) ?>

    <?= $form->field($model, 'applicant_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Applicant::find()->all(), 'id','app_fname', 'app_lname'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select Lastname'],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
