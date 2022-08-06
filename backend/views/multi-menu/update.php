<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MultiMenu */

$this->title = 'Update Multi Menu: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Multi Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="multi-menu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
