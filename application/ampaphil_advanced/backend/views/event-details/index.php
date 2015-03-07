<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Event Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Event Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'event_name',
            'event_location',
            'event_type',
            'event_datefrom',
            // 'event_dateto',
            // 'event_timefrom',
            // 'event_timeto',
            // 'transaction_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
