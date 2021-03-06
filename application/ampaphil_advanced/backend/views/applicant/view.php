<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Applicant */

$this->title = $model->app_fname.' '.$model->app_lname;
$this->params['breadcrumbs'][] = ['label' => 'Applicants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicant-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

        <?php
        if (($model->app_status) == "Failed"){
        ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        
        <?php
        }

        if (($model->app_status) == "Passed"){  
            
        ?>
        <form method="POST" action="function/try.php?id=<?= $model->id; ?>">
        <button class="btn btn-success">Generate Talent</button>
        </form>
        <?php
        }
        ?>
        
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
            'app_blkno',
            'app_street',
            'app_brgy',
            'app_city',
            'app_zipcode',
            'app_contactno',
            'app_emailadd:email',
            'app_regdate',
            'app_regtime',
            'app_talent',
            'app_status',
            'screening_sched_id',
        ],
    ]) ?>
        <?= Html::a('Next', ['talent-line/create'], ['class' => 'btn btn-success']) ?>
</div>
