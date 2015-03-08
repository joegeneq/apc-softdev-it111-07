<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Talent */

$this->title = 'Update Talent: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Talents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'manager_id' => $model->manager_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="talent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
