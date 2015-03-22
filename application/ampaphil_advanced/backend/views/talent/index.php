<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TalentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Talents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="talent-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Talent', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'manager_id',
            'talent_managedstartdate',
            'talent_managedenddate',
            'screening_sched_id',
            // 'applicant_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
