<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use backend\models\Gallereya;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GallereyaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gallereyas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallereya-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Gallereya', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_uz',
            // 'name_ru',
            // 'name_en',
            // 'gallery_id',
            //'type',
            //'photo',
            //'link',
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Gallereya $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
