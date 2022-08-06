<?php

use yii\helpers\Url;
use backend\models\SubMenu;
use yii\helpers\StringHelper;

$sub_menu = SubMenu::find()->where(['menu_id' => '4'])->all();
$lang = Yii::$app->language;
$this->title = Yii::t('app', "Hududiy filiallar");

?>
<div class="container-fluid breadCrumbTop">
</div>

<div class="container-fluid breadCrumb">
    <div class="col-lg-11 mx-auto">
        <h1 class="page-heading mb-5"><?=$this->title?></h1>
        <a href="<?=Url::home()?>" class="breadCrumb-item"><?=Yii::t('app', "Bosh sahifa")?></a><span> / </span><a href="#" class="breadCrumb-item"><?=$this->title?></a>
    </div>
</div>
    <div class="container-fluid py-5 filial">
        <div class="col-lg-11 mx-auto">
            <div class="row">
                <div class="col-lg-9 mb-3">
                    <div class="page-content">
                        <h4 class="page-title mb-5"><?=$this->title?></h4>
                        <div class="row">
                            <?
                            $i = 50;
                            foreach($filial as $key) {
                                if($lang == 'uz') {
                                    $name = $key->name_uz;
                                    $director = $key->director_uz;
                                    $address = $key->address_uz;
                                }
                                if($lang == 'ru') {
                                    $name = $key->name_ru;
                                    $director = $key->director_ru;
                                    $address = $key->address_ru;
                                }
                                if($lang == 'en') {
                                    $name = $key->name_en;
                                    $director = $key->director_en;
                                    $address = $key->address_en;
                                }
                            ?>
                            <div class="col-lg-12" data-aos="fade-left" data-aos-delay="<?=$i+=50?>">
                                <div class="filial-item">
                                    <div class="dot"></div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img src="<?=$key->img?>" class="img-fluid filial-img" alt="">
                                        </div>
                                        <div class="col-lg-8">
                                            <h4 class="filial-title"><?=$name?></h4>
                                            <span class="filial-director"><img src="/img/icon/001-businessman.png" alt="" class="icon-filial"> <?=$director?></span>
                                            <span class="filial-address"><img src="/img/icon/002-placeholder.png" alt="" class="icon-filial"> <?=StringHelper::truncate($address, 180, '...')?></span>
                                            <span class="filial-phone"><img src="/img/icon/003-phone.png" alt="" class="icon-filial"> <?=$key->phone?></span>
                                            <span class="filial-email"><img src="/img/icon/004-gmail.png" alt="" class="icon-filial"> <?=$key->email?></span>
                                        </div>
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