<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Talent;
use app\models\Manager;
use app\models\EventDetails;
use app\models\Client;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Events */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'talent_id')->textInput() ?>

    <?= $form->field($model, 'manager_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Manager::find()->all(), 'id', 'mgr_lname'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select Lastname'],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ]);
    ?>

    <?= $form->field($model, 'event_details_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(EventDetails::find()->all(), 'id', 'event_name'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select Event Title'],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ]);
    ?>

    <?= $form->field($model, 'client_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Client::find()->all(), 'id', 'client_lname'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select Client Name'],
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
