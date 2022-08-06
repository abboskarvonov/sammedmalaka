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
if($lang == 'uz') {
    $page_content = $p_key->content_uz;
}
if($lang == 'ru') {
    $page_content = $p_key->content_ru;
}
if($lang == 'en') {
    $page_content = $p_key->content_en;
}

$this->title = $page_title;

?>
<style>
    .update {
        padding: 100px 0;
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
                <?
                if($p_key->type == null || empty($p_key->type)){
                ?>
                <div class="page-content update">
                    <h2 class="text-center"><?=Yii::t('app', "Ma'lumotlar yangilanmoqda")?></h2>
                </div>
                <?
                }
                elseif($p_key->type == 1) {
                ?>
                <div class="page-content">
                    <h4 class="page-title mb-5"><?=$this->title?></h4>
                    <div class="row mb-4">
                        <div class="col-lg-9">
                            <?
                            if($p_key->img == null) {
                                echo $page_content;
                            }
                            else {
                            ?>
                            <img src="<?=$p_key->img?>" alt="" class="page-img">
                            <?
                            }
                            ?>
                        </div>
                        <div class="col-lg-3 mt-3 mt-md-0">
                            <?
                            $date = explode("-", $p_key->created_at);
                            $day = explode(" ", $date[2]);
                            ?>
                            <div class="date-blog">
                                <span class="day"><?=$day[0]?></span>
                                <span class="month"><?=$date[1]?></span>
                                <span class="year"><?=$date[0]?></span>
                            </div>
                            <div class="view-blog mt-4">
                                <span class="view"><?=$p_key->view?></span>
                            </div>
                            <h4 class="text-center mt-4"><?=Yii::t('app', "Ulashish")?></h4>
                            <div class="social">
                                <?= \ymaker\social\share\widgets\SocialShare::widget([
                                    'configurator'  => 'socialShare',
                                    'url'           => \yii\helpers\Url::to($_SERVER['REQUEST_URI'], true),
                                    'title'         => $this->title,
                                    'description'   => StringHelper::truncate($page_content, 250),
                                ]); 
                                ?>
                            </div>
                        </div>
                    </div>
                    <?
                    if($p_key->img == null) {
                        
                    }
                    else {
                        echo $page_content;
                    }
                    ?>
                </div>
                <?
                }
                elseif($p_key->type == 2) {
                ?>
                <div class="page-content">
                    <h4 class="page-title mb-5"><?=$this->title?></h4>
                    <div class="row">
                    <?
                    $i = 50;
                    foreach($pages as $key) {
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
                <?
                }
                ?>
                
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