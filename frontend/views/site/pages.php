<?php

use yii\helpers\Url;
use backend\models\SubMenu;
use yii\helpers\StringHelper;

$sub_menu = SubMenu::find()->where(['menu_id' => '4'])->all();
$lang = Yii::$app->language;
foreach($title as $title){
    if($lang == 'uz') {
        $page_title = $title->name_uz;
    }
    if($lang == 'ru') {
        $page_title = $title->name_ru;
    }
    if($lang == 'en') {
        $page_title = $title->name_en;
    }
}
foreach($model as $model) {
    if($lang == 'uz') {
        $page_content = $model->content_uz;
    }
    if($lang == 'ru') {
        $page_content = $model->content_ru;
    }
    if($lang == 'en') {
        $page_content = $model->content_en;
    }
}
$this->title = $page_title;

?>

<style>
    .page-title {
        text-align: center;
        text-transform: uppercase;
        border-bottom: 2px solid #020096;
        font-weight: 600;
    }
    .page-content {
        border-radius: 10px;
        padding: 10px;
        box-shadow: 0 0 5px #020096;
        background-color: #fff;
    }
    .widget {
        background-color: #fff;
        box-shadow: 0 0 5px #020096;
        border-radius: 10px;
        padding: 10px;
    }
    .widget .nav .nav-link {
        color: #000;
    }
</style>

<div class="container-fluid breadCrumbTop">
</div>

<div class="container-fluid breadCrumb">
    <div class="col-lg-11 mx-auto">
        <h1 class="page-heading mb-5"><?=$this->title?></h1>
        <a href="<?=Url::home()?>" class="breadCrumb-item"><?=Yii::t('app', "Bosh sahifa")?></a><span> / </span><a href="#" class="breadCrumb-item"><?=$this->title?></a>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="col-lg-11 mx-auto">
        <div class="row">
            <div class="col-lg-9 mb-3">
                <div class="page-content">
                    <?
                    if($model->type == '1'){
                    ?>
                    <h4 class="page-title mb-5"><?=$this->title?></h4>
                    <?=$page_content?>
                    <?
                    }
                    elseif($model->type == '2') {
                    ?>
                    <h4 class="page-title mb-5"><?=$this->title?></h4>
                    <div class="row">
                    <?
                    $i = 50;
                    foreach($model as $key) {
                        if($lang == 'uz') {
                            $name = $key->name_uz;
                            $content = $key->content_uz;
                        }
                        if($lang == 'ru') {
                            $name = $key->name_ru;
                            $content = $key->content_ru;
                        }
                        if($lang == 'en') {
                            $name = $key->name_en;
                            $content = $key->content_en;
                        }
                    ?>
                        <div class="col-lg-12 mb-4" data-aos="fade-down" data-aos-delay="<?=$i+=5?>">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="<?=$key->img?>" class="img-thumbnail news-img" alt="">
                                </div>
                                <div class="col-lg-8">
                                    <a href="#" class="news-title"><?=$name?></a>
                                    <p class="date"><img src="/img/icon/004-calendar.png" class="icon-images" alt=""> <?=$key->created_at?></p>
                                    <p class="news-text"><?=StringHelper::truncate(strip_tags($content), 250, '...')?></p>
                                </div>
                            </div>
                        </div>
                    <?
                    }
                    ?>
                    </div>
                    <?
                    }
                    elseif($model->type == '3') {
                    ?>
                    <h4 class="page-title mb-5"><?=$this->title?></h4>
                    <?
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h4 class="page-title">Matbuot Xizmati</h4>
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
</div>