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
                        }
                        if($lang == 'ru') {
                            $name = $key->name_ru;
                        }
                        if($lang == 'en') {
                            $name = $key->name_en;
                        }
                    ?>
                        <div class="col-lg-4 mb-4" data-aos="fade-down" data-aos-delay="<?=$i+=15?>">
                            <div class="card" style="width: 100%;">
                                <img src="<?=$key->img?>" class="card-img-top" style="height: 180px; object-fit: cover;" alt="...">
                                <div class="card-body">
                                    <a href="<?=Url::to(['site/view', 'link' => $key->link])?>"><h5 class="text-center card-title"><?=$name?></h5></a>
                                </div>
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