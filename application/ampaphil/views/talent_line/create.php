<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TalentLine */

$this->title = 'Create Talent Line';
$this->params['breadcrumbs'][] = ['label' => 'Talent Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="talent-line-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
