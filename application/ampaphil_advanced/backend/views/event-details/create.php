<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EventDetails */

$this->title = 'Create Event Details';
$this->params['breadcrumbs'][] = ['label' => 'Event Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
