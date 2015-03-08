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
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'APP_LName',
            'APP_FName',
            'APP_MName',
            'APP_Gender',
            // 'APP_BDate',
            // 'APP_BlkNo',
            // 'APP_Street',
            // 'APP_Brgy',
            // 'APP_City',
            // 'APP_ZipCode',
            // 'APP_ContactNo',
            // 'APP_EmailAdd:email',
            // 'APP_RegDate',
            // 'APP_RegTime',
            // 'APP_Talent',
            // 'SCREENING_SCHED_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
