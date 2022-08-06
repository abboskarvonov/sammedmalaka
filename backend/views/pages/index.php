<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Menu;
use backend\models\Pages;
use yii\grid\ActionColumn;
use backend\models\SubMenu;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pages', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_uz',
            'name_ru',
            'name_en',
            // 'content_uz:ntext',
            //'content_ru:ntext',
            //'content_en:ntext',
            //'type',
            [
                'attribute' => 'type',
                'value' => function($model){
                    if($model->type == 1){
                        $res = 'Oddiy sahifa';
                    }
                    if($model->type == 2){
                        $res = 'Blog sahifa';
                    }
                    if($model->type == 3){
                        $res = 'Sahifali sahifa';
                    }
                    return $res;
                }
            ],
            //'img',
            //'view',
            //'link',
            //'menu_id',
            [
                'attribute' => 'menu_id',
                'value' => function($model) {
                    $menu = Menu::find()->where(['id' => $model->menu_id])->all();
                    foreach($menu as $key){}
                    return $key->name_uz;
                }
            ],
            //'sub_menu_id',
            [
                'attribute' => 'sub_menu_id',
                'value' => function($model) {
                    $menu = SubMenu::find()->where(['id' => $model->sub_menu_id])->all();
                    foreach($menu as $key){}
                    return $key->name_uz;
                }
            ],
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pages $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
