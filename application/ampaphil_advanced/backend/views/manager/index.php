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
            'MGR_LName',
            'MGR_FName',
            'MGR_MName',
            'MGR_Gender',
            // 'MGR_BDate',
            // 'MGR_BlkNo',
            // 'MGR_Street',
            // 'MGR_Brgy',
            // 'MGR_City',
            // 'MGR_ZipCode',
            // 'MGR_ContactNo',
            // 'MGR_EmailAdd:email',
            // 'MGR_Expertise',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
