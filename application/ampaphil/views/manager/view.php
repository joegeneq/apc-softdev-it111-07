<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Manager */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Managers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manager-view">

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
            'MGR_LName',
            'MGR_FName',
            'MGR_MName',
            'MGR_Gender',
            'MGR_BDate',
            'MGR_BlkOrAreaNo',
            'MGR_Street',
            'MGR_Brgy',
            'MGR_City',
            'MGR_ZipCode',
            'MGR_ContactNo',
            'MGR_EmailAdd:email',
            'MGR_Expertise',
        ],
    ]) ?>

</div>
