<?php

use yii\helpers\Url;
use backend\models\SubMenu;
use yii\helpers\StringHelper;

$lang = Yii::$app->language;
$sub_menu = SubMenu::find()->where(['menu_id' => '4'])->all();
$this->title = Yii::t('app', "Fotogaleriya");
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
    .img-photo {
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 5px;
        height: 200px;
        object-fit: cover;
        z-index: 1;
        transition: all .3s ease;
    }
    .img-title {
        position: absolute;
        bottom: 0px;
        left: 0px;
        right: 0;
        color: #fff;
        font-weight: 600;
        font-size: 1.2rem;
        z-index: 2;
        padding: 10px;
        transition: all .3s ease;
    }
    .linear {
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6));
        border-radius: 5px;
        transition: all .5s ease;
        z-index: 2;
    }
    a:hover .linear {
        background-image: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2));
    }
    a:hover .img-title {
        background: rgba(0,0,0,0.7);
    }
</style>
<div class="col-lg-11 mx-auto py-5">
    <div class="row">
        <div class="col-lg-9 mb-3">
            <div class="page-content">
                <h4 class="page-title mb-5"><?=$this->title?></h4>
                <div class="row">
                    <?
                    foreach($gallery as $key) {
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
                    <div class="col-lg-4 mb-3">
                        <a href="<?=Url::to(['site/galleryview', 'link' => $key->link])?>">
                            <div class="position-relative">
                                <div class="linear"></div>
                                <img src="<?=$key->photo?>" class="img-photo" alt="">
                                <h4 class="img-title"><?=StringHelper::truncate($name, 30, '...')?></h4>
                            </div>
                        </a>
                    </div>
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