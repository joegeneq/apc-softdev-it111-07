<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TalentLine */

$this->title = 'Update Talent Line: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Talent Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="talent-line-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
