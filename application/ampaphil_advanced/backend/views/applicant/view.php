<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Applicant */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Applicants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicant-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'app_lname',
            'app_fname',
            'app_mname',
            'app_gender',
            'app_bdate',
            'app_blockno',
            'app_street',
            'app_brgy',
            'app_city',
            'app_zipcode',
            'app_contactno',
            'app_emailadd:email',
            'app_regdate',
            'app_regtime',
            'app_talent',
            'screening_sched_id',
        ],
    ]) ?>

</div>
