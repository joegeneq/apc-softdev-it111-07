<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TalentLine */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Talent Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="talent-line-view">

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
            'talent_type',
            'talent_specialization',
            'applicant_id',
        ],
    ]) ?>
        <?= Html::a('Create Screening Schedule', ['screening-sched/create'], ['class' => 'btn btn-success']) ?>  
</div>
