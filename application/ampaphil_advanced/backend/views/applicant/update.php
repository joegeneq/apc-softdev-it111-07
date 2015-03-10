<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Applicant */

$this->title = 'Update Applicant: ' . ' ' . $model->APP_FName.' '.$model->APP_LName;
$this->params['breadcrumbs'][] = ['label' => 'Applicants', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->APP_FName.' '.$model->APP_LName, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="applicant-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
