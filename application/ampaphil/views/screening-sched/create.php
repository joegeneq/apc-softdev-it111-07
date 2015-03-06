<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ScreeningSched */

$this->title = 'Create Screening Sched';
$this->params['breadcrumbs'][] = ['label' => 'Screening Scheds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="screening-sched-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
