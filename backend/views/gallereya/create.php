<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Gallereya */

$this->title = 'Create Gallereya';
$this->params['breadcrumbs'][] = ['label' => 'Gallereyas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallereya-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
