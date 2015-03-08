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
            'EVENT_Name',
            'EVENT_Location',
            'EVENT_Type',
            'EVENT_DateFrom',
            // 'EVENT_DateTo',
            // 'EVENT_TimeFrom',
            // 'EVENT_TimeTo',
            // 'EVENT_Status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
