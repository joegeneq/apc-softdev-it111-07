<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Manager */

$this->title = $model->mgr_fname . " " . $model->mgr_lname;
$this->params['breadcrumbs'][] = ['label' => 'Managers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manager-view">

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
            'mgr_lname',
            'mgr_fname',
            'mgr_mname',
            'mgr_gender',
            'mgr_bdate',
            'mgr_blkno',
            'mgr_street',
            'mgr_brgy',
            'mgr_city',
            'mgr_zipcode',
            'mgr_contactno',
            'mgr_emailadd:email',
            'mgr_expertise',
        ],
    ]) ?>

</div>
