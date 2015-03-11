<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EventDetails */

$this->title = 'Update Event Details: ' . ' ' . $model->EVENT_Name;
$this->params['breadcrumbs'][] = ['label' => 'Event Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EVENT_Name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="event-details-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
