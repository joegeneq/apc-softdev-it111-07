<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <p>
    	This is just a sample page<br>
    	Members:<br>
    	Binag, Deborah<br>
    	Lino, Alyssa Jane<br>
    	Parian, Danica Faith
    </p>

    <code><?= __FILE__ ?></code>
</div>
