<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TalentLineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Talent Lines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="talent-line-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Talent Line', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'talent_type',
            'talent_specialization',
            //'applicant_id',
            [
                'attribute' => 'applicant_id',
                'value' => 'applicant.app_lname'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
