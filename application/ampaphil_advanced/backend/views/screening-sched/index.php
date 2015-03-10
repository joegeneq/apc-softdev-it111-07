<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ScreeningSchedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Screening Scheds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="screening-sched-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Screening Sched', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'SCR_Date',
            'SCR_Time',
            'APP_Status',
            //'EMPLOYEE_id',
            [
                'attribute'=>'EMPLOYEE Last Name',
                'value'=>'eMPLOYEE.EMP_LName',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
