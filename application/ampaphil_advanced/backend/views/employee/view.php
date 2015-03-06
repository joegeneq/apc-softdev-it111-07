<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-view">

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
            'EMP_LName',
            'EMP_FName',
            'EMP_MName',
            'EMP_Gender',
            'EMP_BDate',
            'EMP_BlkOrAreaNo',
            'EMP_Street',
            'EMP_Brgy',
            'EMP_City',
            'EMP_ZipCode',
            'EMP_ContactNo',
            'EMP_EmailAdd:email',
            'EMP_Position',
        ],
    ]) ?>

</div>
