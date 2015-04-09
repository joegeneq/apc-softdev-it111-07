<?php

use yii\helpers\Html;
use yii\grid\GridView;
use model\Employee;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ScreeningSchedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Screening Schedule';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="screening-sched-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Screening Schedule', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'scr_date',
            'scr_time',
            [
                'attribute'=>'employee_id',
                'value'=>'employee.emp_lname',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
