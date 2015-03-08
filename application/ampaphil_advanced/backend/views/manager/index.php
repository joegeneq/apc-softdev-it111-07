<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ManagerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Managers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manager-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Manager', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'mgr_lname',
            'mgr_fname',
            'mgr_mname',
            'mgr_gender',
            // 'mgr_bdate',
            // 'mgr_blockno',
            // 'mgr_street',
            // 'mgr_brgy',
            // 'mgr_city',
            // 'mgr_zipcode',
            // 'mgr_contactno',
            // 'mgr_emailadd:email',
            // 'mgr_expertise',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
