<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Region;

/* @var $this yii\web\View */
/* @var $model app\models\Province */
/* @var $form yii\widgets\ActiveForm */
/* 
<?php
    	$dataCategory=ArrayHelper::map(\basic\models\Region::find()->asArray()->all(), 'id', 'region_code');
    	echo $form->field($model, 'region_id')->dropDownList($dataCategory, 
             ['prompt'=>'-Choose a Region Id-',
              'onchange'=>'
                $.post( "'.Yii::$app->urlManager->createUrl('post/lists?id=').'"+$(this).val(), function( data ) {
                  $( "select#title" ).html( data );
                });
            ']); 
 
    $dataPost=ArrayHelper::map(\basic\models\Post::find()->asArray()->all(), 'id', 'title');
    echo $form->field($model, 'title')
        ->dropDownList(
            $dataPost,           
            ['id'=>'title']
        );
    ?>
*/
?>

<div class="province-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'province_code')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'province_description')->textInput(['maxlength' => 32]) ?>

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'region_id')->dropDownList(
        ArrayHelper::map(Region::find()->all(), 'id', 'region_code'),
        ['prompt'=>'Select Region'] ) 
         ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
