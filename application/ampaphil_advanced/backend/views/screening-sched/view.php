<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use models\Applicant;

/* @var $this yii\web\View */
/* @var $model app\models\ScreeningSched */

$this->title = $model->scr_date. ', ' . $model->scr_time;
$this->params['breadcrumbs'][] = ['label' => 'Screening Scheds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="screening-sched-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <!--
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        -->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'scr_date',
            'scr_time',
            'employee.emp_lname',
            'employee.emp_fname'
        ],
    ]) ?>

</div>
