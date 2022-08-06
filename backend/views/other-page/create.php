<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OtherPage */

$this->title = 'Create Other Page';
$this->params['breadcrumbs'][] = ['label' => 'Other Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="other-page-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
