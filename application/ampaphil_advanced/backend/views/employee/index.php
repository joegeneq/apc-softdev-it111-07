<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Employee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'EMP_LName',
            'EMP_FName',
            // 'EMP_MName',
            // 'EMP_Gender',
            // 'EMP_BDate',
            // 'EMP_BlkNo',
            // 'EMP_Street',
            // 'EMP_Brgy',
            // 'EMP_City',
            // 'EMP_ZipCode',
            'EMP_ContactNo',
            'EMP_EmailAdd:email',
            'EMP_Position',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
