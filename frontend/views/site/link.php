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

$this->title = $page_title;

?>

<div class="container-fluid breadCrumbTop">
</div>

<div class="container-fluid breadCrumb">
    <div class="col-lg-11 mx-auto">
        <a href="<?=Url::home()?>" class="breadCrumb-item"><?=Yii::t('app', "Bosh sahifa")?></a><span> / </span><a href="#" class="breadCrumb-item"><?=$this->title?></a>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="col-lg-11 mx-auto">
        <div class="row">
            <div class="col-lg-9 mb-3">
                <div class="page-content">
                    <h4 class="page-title mb-5"><?=$this->title?></h4>
                    <div class="row">
                    <?
                    $i = 50;
                    foreach($key as $key) {
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
                        <div class="col-lg-12 mb-4" data-aos="fade-down" data-aos-delay="<?=$i+=15?>">
                            <div class="row py-1">
                                <a href="<?=Url::to(['site/linkpage', 'link' => $key->link])?>" class="news-title"><?=$name?></a>
                            </div>
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
</div>