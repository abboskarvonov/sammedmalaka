<?php

use yii\helpers\Html;
use kartik\file\FileInput;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Gallereya;

/* @var $this yii\web\View */
/* @var $model backend\models\Gallereya */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallereya-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="container p-0">
        <div class="row">
            <div class="col-lg-4">
                <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-4">
                <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-4">
                <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-6">
                <?= $form->field($model, 'type')->dropDownList(['1' => 'Asosiy', '2' => 'Ichki'], ['prompt' => 'Galereya turi']) ?>
            </div>
            <div class="col-lg-6">
                <?= $form->field($model, 'gallery_id')->dropDownList(
                    ArrayHelper::map( Gallereya::find()->where(['type' => 1])->all(), 'id', 'name_uz'),
                    [
                        'prompt' => 'Galereya nomini tanlang',
                    ]);
                ?>
            </div>
        </div>
    </div>
    <? 
        if (empty($model->photo) || $model->photo == '0') {
            echo $form->field($model, 'photo')->widget(FileInput::classname(), [
                'options' => ['accept' => 'image/*'],
            ]);
        }
        else {
            ?>
            <h3 class="mt-4">Rasm yuklangan</h3>
            <?
        }
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
