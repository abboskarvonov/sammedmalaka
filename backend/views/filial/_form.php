<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model backend\models\Filial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="filial-form">

    <?php $form = ActiveForm::begin(); ?>

    <?

    $content1 = 
    $form->field($model, 'name_uz')->textInput(['maxlength' => true]).
    $form->field($model, 'director_uz')->textInput(['maxlength' => true]).
    $form->field($model, 'address_uz')->textInput(['maxlength' => true]);

    $content2 = 
    $form->field($model, 'name_ru')->textInput(['maxlength' => true]).
    $form->field($model, 'director_ru')->textInput(['maxlength' => true]).
    $form->field($model, 'address_ru')->textInput(['maxlength' => true]);

    $content3 = 
    $form->field($model, 'name_en')->textInput(['maxlength' => true]).
    $form->field($model, 'director_en')->textInput(['maxlength' => true]).
    $form->field($model, 'address_en')->textInput(['maxlength' => true]);
    
    $items = [
        [
            'label'=>'<i class="fa fa-flag"></i> UZB',
            'content'=>$content1,
            'active'=>true
        ],
        [
            'label'=>'<i class="far fa-flag"></i> RU',
            'content'=>$content2,
        ],
        [
            'label'=>'<i class="fas fa-flag"></i> ENG',
            'content'=>$content3,
        ],
    ];

    echo TabsX::widget([
        'items'=>$items,
        'position'=>TabsX::POS_ABOVE,
        'encodeLabels'=>false
    ]);
    ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <? 
    if ($model->img == null ) {
        echo $form->field($model, 'img')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
        ]);
    }
    else {
        ?>
        <h3>Rasmlar yuklangan</h3>
        <?
    }
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
