<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EventDetails */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Event Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-details-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'EVENT_Name',
            'EVENT_Location',
            'EVENT_Type',
            'EVENT_DateFrom',
            'EVENT_DateTo',
            'EVENT_TimeFrom',
            'EVENT_TimeTo',
            'EVENT_Status',
            'PAYMENTS_id',
        ],
    ]) ?>

</div>
