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
            'APP_LName',
            'APP_FName',
            'APP_MName',
            'APP_Gender',
            'APP_BDate',
            'APP_BlkOrAreaNo',
            'APP_Street',
            'APP_Brgy',
            'APP_City',
            'APP_ZipCode',
            'APP_ContactNo',
            'APP_EmailAdd:email',
            'APP_RegDate',
            'APP_RegTime',
            'APP_Talent',
            'SCREENING_SCHED_id',
        ],
    ]) ?>

</div>
