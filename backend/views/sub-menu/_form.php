<?php

use yii\helpers\Html;
use backend\models\Menu;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\SubMenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sub-menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList(['1' => 'Default', '2' => 'Multi menu'], ['prompt' => 'Menu turi']) ?>

    <?= $form->field($model, 'menu_id')->dropDownList(
        ArrayHelper::map( Menu::find()->where(['type' => 2])->all(), 'id', 'name_uz'),
        [
            'prompt' => 'Menuni tanlang',
        ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
