<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ApplicantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Applicants';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicant-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Applicant', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Create Talent Line', ['talent-line/create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'app_lname',
            'app_fname',
            'app_mname',
            'app_gender',
            // 'app_bdate',
            // 'app_blkno',
            // 'app_street',
            // 'app_brgy',
            // 'app_city',
            // 'app_zipcode',
            // 'app_contactno',
            // 'app_emailadd:email',
            // 'app_regdate',
            // 'app_regtime',
            'app_talent',
            'screening_sched_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
