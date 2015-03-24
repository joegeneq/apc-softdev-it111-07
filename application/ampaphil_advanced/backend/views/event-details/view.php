<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EventDetails */

$this->title = $model->event_name;
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
            'event_name',
            'event_location',
            'event_type',
            'event_startdate',
            'event_enddate',
            'event_starttime',
            'event_endtime',
            'event_status',
        ],
    ]) ?>

</div>
