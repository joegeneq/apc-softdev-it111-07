<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Talent */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Talents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="talent-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'MANAGER_id' => $model->MANAGER_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'MANAGER_id' => $model->MANAGER_id], [
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
            'MANAGER_id',
            'TALENT_ManagedStartDate',
            'TALENT_ManagedEndDate',
            'SCREENING_SCHED_id',
            'APPLICANT_id',
        ],
    ]) ?>

</div>
