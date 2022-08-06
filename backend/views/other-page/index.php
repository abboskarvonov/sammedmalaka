<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use backend\models\OtherPage;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OtherPageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Other Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="other-page-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Other Page', ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'fish_uz',
            //'fish_ru',
            //'fish_en',
            //'phone',
            //'email:email',
            //'qabul_uz',
            //'qabul_ru',
            //'qabul_en',
            //'type',
            //'img',
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, OtherPage $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
