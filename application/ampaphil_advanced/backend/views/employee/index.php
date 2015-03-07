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
            'emp_lname',
            'emp_fname',
            'emp_mname',
            'emp_gender',
            // 'emp_bdate',
            // 'emp_blockno',
            // 'emp_street',
            // 'emp_brgy',
            // 'emp_city',
            // 'emp_zipcode',
            // 'emp_contactno',
            // 'emp_emailadd:email',
            // 'emp_position',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
