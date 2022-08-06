<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OtherPageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="other-page-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_uz') ?>

    <?= $form->field($model, 'name_ru') ?>

    <?= $form->field($model, 'name_en') ?>

    <?= $form->field($model, 'fish_uz') ?>

    <?php // echo $form->field($model, 'fish_ru') ?>

    <?php // echo $form->field($model, 'fish_en') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'qabul_uz') ?>

    <?php // echo $form->field($model, 'qabul_ru') ?>

    <?php // echo $form->field($model, 'qabul_en') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
