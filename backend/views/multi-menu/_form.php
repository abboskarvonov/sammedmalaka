<?php

use yii\helpers\Html;
use backend\models\SubMenu;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\MultiMenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="multi-menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_menu_id')->dropDownList(
        ArrayHelper::map( SubMenu::find()->all(), 'id', 'name_uz'),
        [
            'prompt' => 'Sub Menuni tanlang',
        ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
