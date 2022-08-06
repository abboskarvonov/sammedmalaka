<?php

use yii\helpers\Url;
use backend\models\SubMenu;
use yii\helpers\StringHelper;
$sub_menu = SubMenu::find()->where(['menu_id' => '4'])->all();
$lang = Yii::$app->language;
$this->title = Yii::t('app', "Rahbariyat");

?>

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
                    <h4 class="page-title mb-5"><?=$this->title?></h4>
                    <div class="row">
                    <?
                    $i = 50;
                    foreach($model as $key) {
                        if($lang == 'uz') {
                            $name = $key->name_uz;
                            $fish = $key->fish_uz;
                            $qabul = $key->qabul_uz;
                        }
                        if($lang == 'ru') {
                            $name = $key->name_ru;
                            $fish = $key->fish_ru;
                            $qabul = $key->qabul_ru;
                        }
                        if($lang == 'en') {
                            $name = $key->name_en;
                            $fish = $key->fish_en;
                            $qabul = $key->qabul_en;
                        }
                    ?>
                        <div class="col-lg-12 mb-4" data-aos="fade-down" data-aos-delay="<?=$i+=5?>">
                            <div class="row">
                                <div class="col-lg-2">
                                    <img src="<?=$key->img?>" class="img-thumbnail" alt="">
                                </div>
                                <div class="col-lg-10">
                                    <h5 class="text-uppercase"><?=$name?></h5>
                                    <h4 class="text-uppercase mt-4"><b><?=$fish?></b></h4>
                                    <div class="row mt-4">
                                        <div class="col-lg-4">
                                            <p><b><?=Yii::t('app', "Telefon:")?></b></p>
                                            <p><?=$key->phone?></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p><b><?=Yii::t('app', "Elektron pochta:")?></b></p>
                                            <p><?=$key->email?></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p><b><?=Yii::t('app', "Qabul kunlari:")?></b></p>
                                            <p><?=$qabul?></p>
                                        </div>
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