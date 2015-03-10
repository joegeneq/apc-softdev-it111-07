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
            'TALENT_Type',
            'TALENT_Specialization',
            [
                'attribute'=>'APPLICANT_id',
                'value'=>'aPPLICANT.APP_LName',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
