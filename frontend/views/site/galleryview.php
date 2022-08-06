<?php

use yii\helpers\Url;
use backend\models\SubMenu;

$lang = Yii::$app->language;
$sub_menu = SubMenu::find()->where(['menu_id' => '4'])->all();

foreach($title as $key) {
    if($lang == 'uz'){
        $name = $key->name_uz;
    }
    if($lang == 'ru'){
        $name = $key->name_ru;
    }
    if($lang == 'en'){
        $name = $key->name_en;
    }
}

$this->title = $name;
?>
<div class="container-fluid breadCrumbTop">
</div>

<div class="container-fluid breadCrumb">
    <div class="col-lg-11 mx-auto">
        <h1 class="page-heading mb-5"><?=$this->title?></h1>
        <a href="<?=Url::home()?>" class="breadCrumb-item"><?=Yii::t('app', "Bosh sahifa")?></a><span> / </span><a href="#" class="breadCrumb-item"><?=$this->title?></a>
    </div>
</div>
<style>
    .gallery-img {
        height: 200px;
        width: 100%;
        object-fit: cover;
        border: 1px solid #ccc;
        padding: 5px;
        border-radius: 5px;
        transition: all .3s ease;
    }
    .gallery-img:hover {
        box-shadow: 0 0 5px #000;
    }
    #gallery-hash-demo {
        display: flex;
        flex-wrap: wrap;
    }
    #gallery-hash-demo a {
        width: 33.33%;
        padding: 10px;
        display: inline-block;
    }
</style>
<div class="col-lg-11 mx-auto py-5">
    <div class="row">
        <div class="col-lg-9 mb-3">
            <div class="page-content">
                <h4 class="page-title mb-5"><?=$this->title?></h4>
                <div id="gallery-hash-demo">
                    <?
                    foreach($model as $model) {
                    ?>
                    <a href="<?=$model->photo?>">
                        <img class="gallery-img" src="<?=$model->photo?>" />
                    </a>
                    <?
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="widget">
                <h4 class="page-title"><?=Yii::t('app', "Matbuot Xizmati")?></h4>
                <nav class="nav flex-column">
                    <?
                    foreach($sub_menu as $key) {
                        if($lang == 'uz'){
                            $name = $key->name_uz;
                        }
                        if($lang == 'ru'){
                            $name = $key->name_ru;
                        }
                        if($lang == 'en'){
                            $name = $key->name_en;
                        }
                    ?>
                    <a href="<?=Url::to(['site/pages', 'link' => $key->link])?>" class="nav-link"><?=$name?></a>
                    <?
                    }
                    ?>
                </nav>
            </div>
        </div>
    </div>
</div>