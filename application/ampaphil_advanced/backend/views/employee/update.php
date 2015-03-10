<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */

$this->title = 'Update: ' . ' ' . $model->EMP_LName;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
<<<<<<< HEAD
$this->params['breadcrumbs'][] = ['label' => $model->EMP_LName, 'url' => ['view', 'id' => $model->id]];
=======
$this->params['breadcrumbs'][] = ['label' => $model->EMP_FName.' '.$model->EMP_LName, 'url' => ['view', 'id' => $model->id]];
>>>>>>> 9401475421100d98881a4181e57ca312b3bab88e
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="employee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
