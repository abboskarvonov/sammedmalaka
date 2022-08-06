<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use backend\models\SubMenu;
use backend\models\Menu;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SubMenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sub Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-menu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sub Menu', ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'menu_id',
            [
                'attribute' => 'menu_id',
                'value' => function($model) {
                    $menu = Menu::find()->where(['id' => $model->menu_id])->all();
                    foreach($menu as $key){}
                    return $key->name_uz;
                }
            ],
            //'link',
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SubMenu $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
