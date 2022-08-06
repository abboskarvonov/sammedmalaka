<?php

use yii\helpers\Html;
use kartik\tabs\TabsX;
use kartik\file\FileInput;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OtherPage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="other-page-form">

    <?php $form = ActiveForm::begin(); ?>

    <?
    $content1 = 
    $form->field($model, 'name_uz')->textInput(['maxlength' => true]).
    $form->field($model, 'fish_uz')->textInput(['maxlength' => true]).
    $form->field($model, 'qabul_uz')->textInput(['maxlength' => true]);

    $content2 = 
    $form->field($model, 'name_ru')->textInput(['maxlength' => true]).
    $form->field($model, 'fish_ru')->textInput(['maxlength' => true]).
    $form->field($model, 'qabul_ru')->textInput(['maxlength' => true]);

    $content3 = 
    $form->field($model, 'name_en')->textInput(['maxlength' => true]).
    $form->field($model, 'fish_en')->textInput(['maxlength' => true]).
    $form->field($model, 'qabul_en')->textInput(['maxlength' => true]);

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

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-4">
                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-4">
                <?= $form->field($model, 'type')->dropDownList(['1' => 'Rahbariyat', '2' => 'Filial bo\'limlari'], ['prompt' => 'Sahifa turini tanlang']) ?>
            </div>
            <div class="col-lg-12">
            <? 
                if (empty($model->img) || $model->img == '0') {
                    echo $form->field($model, 'img')->widget(FileInput::classname(), [
                        'options' => ['accept' => 'image/*'],
                    ]);
                }
                else {
                    ?>
                    <h3 class="mt-4">Rasm yuklangan</h3>
                    <?
                }
            ?>
            </div>
        </div>
    </div>


    

    

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
