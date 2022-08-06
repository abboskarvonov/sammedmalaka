<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MultiMenu */

$this->title = 'Create Multi Menu';
$this->params['breadcrumbs'][] = ['label' => 'Multi Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="multi-menu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
