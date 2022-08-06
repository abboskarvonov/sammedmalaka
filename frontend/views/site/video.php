<?php

use yii\helpers\Url;
use backend\models\SubMenu;
use yii\helpers\StringHelper;

$sub_menu = SubMenu::find()->where(['menu_id' => '4'])->all();
$lang = Yii::$app->language;


$this->title = Yii::t('app', "Videogaleriya");

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
    iframe {
        width: 100% !important;
        height: 200px !important;
    }
</style>

<div class="container-fluid py-5">
    <div class="col-lg-11 mx-auto">
        <div class="row">
            <div class="col-lg-9 mb-3">
                <div class="page-content">
                    <h4 class="page-title mb-5"><?=$this->title?></h4>
                    <div class="row">
                        <?
                        foreach($video as $key){
                            if($lang == 'uz') {
                                $page_title = $key->name_uz;
                            }
                            if($lang == 'ru') {
                                $page_title = $key->name_ru;
                            }
                            if($lang == 'en') {
                                $page_title = $key->name_en;
                            }
                        ?>
                        <div class="col-lg-4">
                            <div class="video">
                                <?=$key->video?>
                                <h5 class="video-title text-center"><?=StringHelper::truncate($page_title, 40, '...')?></h5>
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