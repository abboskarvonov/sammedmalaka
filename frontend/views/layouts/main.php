<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Url;
use backend\models\Menu;
use backend\models\MultiMenu;
use yii\bootstrap4\Html;
use backend\models\SubMenu;
use frontend\assets\AppAsset;
use cinghie\multilanguage\widgets\MultiLanguageWidget;

$lang = Yii::$app->language;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" id="html">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- LightGallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.4.0/css/lightgallery.min.css" integrity="sha512-J3GvWzuXtDGv7Kmqhj1gbn/jM2i3G40XtSBcqGEQ7eLpP0izHygFgT0FMIVCWMVRZnz7u2rS6mhTtlQ3oJsr1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.4.0/css/lightgallery-bundle.min.css" integrity="sha512-91yJwfiGTCo9TM74ZzlAIAN4Eh5EWHpQJUfvo/XhpH6lzQtiRFkFRW1W+JSg4ch4XW3/xzh+dY4TOw/ILpavQA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php $this->head() ?>
    <style>
        .news-img {
            height: 180px;
            width: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Loader -->
<div class="loader">
        <div class="ring-large"></div>
        <div class="ring-small"></div>
        <div class="loader-img">
            <img src="/img/logo.jpg" alt="">
        </div>
        <div class="loader-text">
            <h2><?=Yii::t('app', "Respublika o`rta tibbiyot va farmaseft<br>xodimlar malakasini oshirish va<br>ularni ixtisoslashtirish markazi<br>Samarqand filiali")?></h2>
        </div>
    </div>
    <div class="header-fixed">
        <div class="container-fluid header">
            <div class="col-lg-11 col-md-12 mx-auto py-2">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-12 col-md-6">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-3 col-md-4">
                                <img src="/img/logo.jpg" class="img-logo" alt="">
                            </div>
                            <div class="col-lg-9 col-9 col-md-8"> 
                                <p class="logo-text pe-md-5 pe-sm-0"><?=Yii::t('app', "Respublika o`rta tibbiyot va farmaseft xodimlar malakasini oshirish va ularni ixtisoslashtirish markazi Samarqand filiali")?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-2"></div>
                    <div class="col-lg-2 col-md-4 col-sm-5 col-6">
                        <nav class="nav align-items-center justify-content-start justify-content-md-end">
                            <a href="tel:+998662336842" class="nav-link"><img class="maxsus-img" src="/img/icon/003-phone.png"
                                    alt=""> +998 (66) 233-68-42</a>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6 col-md-6">
                        <nav class="nav align-items-center justify-content-lg-end justify-content-end justify-content-sm-center justify-content-md-start">
                            <a href="#" class="nav-link maxsus" id="minusFont">A-</a>
                            <a href="#" class="nav-link maxsus" id="defaultFont">A</a>
                            <a href="#" class="nav-link maxsus" id="plusFont">A+</a>
                            <a href="#" class="nav-link" id="adjust"><img class="maxsus-img" src="/img/icon/contrast.png" alt=""></a>
                            <a href="#" class="nav-link" id="imgFunc"><img class="maxsus-img" src="/img/icon/006-image-gallery.png" id="imgNone"
                                    alt=""></a>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-sm-3 col-12 col-md-6">
                        <nav class="nav justify-content-end justify-content-sm-end">
                            <?=MultiLanguageWidget::widget([
                                'widget_type' => 'classic', // classic or selector
                                'image_type'  => 'rounded', // classic or rounded
                                'width'       => '27',
                                'addCurrentLang' => true, // add current lang
                                'calling_controller' => $this->context,
                                ]); 
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 bg-color">
            <div class="col-lg-11 mx-auto">
                <div id='main-menu' class='main-menu'>
                    <div class='container-menu'>
                        <nav class='navigation'>
                            <span class='hamburger-menu'>
                                <span class='burger-1'></span>
                                <span class='burger-2'></span>
                                <span class='burger-3'></span>
                            </span>
                            <ul class='core-menu'>
                                <?
                                $menu = Menu::find()->all();
                                foreach($menu as $key) {
                                    $type = $key->type;
                                    if($lang == 'uz') {
                                        $name = $key->name_uz;
                                    }
                                    if($lang == 'ru') {
                                        $name = $key->name_ru;
                                    }
                                    if($lang == 'en') {
                                        $name = $key->name_en;
                                    }
                                    if($type == '1'){
                                ?>
                                    <li>
                                        <a href='<?
                                            if($key->link == 'boshsahifa'){
                                                echo Url::home();
                                            }
                                            elseif($key->link == 'boglanish') {
                                                echo Url::to(['site/contact']);
                                            }
                                            elseif($key->link == 'hududiyfiliallar') {
                                                echo Url::to(['site/filial']);
                                            }
                                            else {
                                                echo Url::to(['site/pages', 'link' => $key->link]);
                                            }
                                            ?>'><?=$name?>
                                        </a>
                                    </li>
                                <?
                                    }
                                    elseif($type == '2'){
                                ?>
                                    <li><a href='#'><?=$name?><span class='toggle'></span></a>
                                        <ul class='dropdown'>
                                            <?
                                            $submenu = SubMenu::find()->where((['menu_id' => $key->id]))->all();
                                            foreach($submenu as $key) {
                                                if($lang == 'uz') {
                                                    $name = $key->name_uz;
                                                }
                                                if($lang == 'ru') {
                                                    $name = $key->name_ru;
                                                }
                                                if($lang == 'en') {
                                                    $name = $key->name_en;
                                                }
                                                if($key->type == 1) {
                                                ?>
                                                <li><a href='<?
                                                if($key->link == 'masofaviytalimplatformasi') {
                                                    echo "http://moodlesammalaka.uz/";
                                                }
                                                elseif($key->link == 'rahbariyat') {
                                                    echo Url::to(['site/rahbariyat']);
                                                }
                                                elseif($key->link == 'filialbolimlari') {
                                                    echo Url::to(['site/bolimlar']);
                                                }
                                                elseif($key->link == 'fotogaleriya') {
                                                    echo Url::to(['site/gallery']);
                                                }
                                                elseif($key->link == 'videogaleriya') {
                                                    echo Url::to(['site/video']);
                                                }
                                                else {
                                                    echo Url::to(['site/pages', 'link' => $key->link]);
                                                }
                                                ?>'><?=$name?></a></li>
                                                <?
                                                }
                                                elseif($type == 2){
                                                ?>
                                                <li><a href='#'><?=$name?><span class='toggle2'></span></a>
                                                    <ul class='dropdown2'>
                                                        <?
                                                        $multimenu = MultiMenu::find()->where(['sub_menu_id' => $key->id])->all();
                                                        foreach($multimenu as $key){
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
                                                        <li><a href='<?=Url::to(['site/multipage', 'link' => $key->link])?>'><?=$name?></a></li>
                                                        <?
                                                        }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <?
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                <?
                                    }
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="header-fixed">
        
        <div class="container-fluid bg-navbar py-1">
            <div class="col-lg-11 mx-auto">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <?
                                $menu = Menu::find()->all();
                                foreach($menu as $key) {
                                    $type = $key->type;
                                    if($lang == 'uz') {
                                        $name = $key->name_uz;
                                    }
                                    if($lang == 'ru') {
                                        $name = $key->name_ru;
                                    }
                                    if($lang == 'en') {
                                        $name = $key->name_en;
                                    }
                                    if($type == '1'){
                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="<?
                                        if($key->link == 'boshsahifa'){
                                            echo Url::home();
                                        }
                                        elseif($key->link == 'boglanish') {
                                            echo Url::to(['site/contact']);
                                        }
                                        elseif($key->link == 'hududiyfiliallar') {
                                            echo Url::to(['site/filial']);
                                        }
                                        else {
                                            echo Url::to(['site/pages', 'link' => $key->link]);
                                        }
                                        ?>"><?=$name?></a>
                                    </li>
                                    <?
                                    }
                                    elseif($type == '2'){
                                    ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?=$name?>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <?
                                            $submenu = SubMenu::find()->where((['menu_id' => $key->id]))->all();
                                            foreach($submenu as $key) {
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
                                            <li><a class="dropdown-item" href="<?
                                            if($key->link == 'masofaviytalimplatformasi') {
                                                echo "http://moodlesammalaka.uz/";
                                            }
                                            elseif($key->link == 'fotogaleriya') {
                                                echo Url::to(['site/gallery']);
                                            }
                                            elseif($key->link == 'videogaleriya') {
                                                echo Url::to(['site/video']);
                                            }
                                            else {
                                                echo Url::to(['site/pages', 'link' => $key->link]);
                                            }
                                            ?>"><?=$name?></a></li>
                                            <?
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <?
                                    }
                                ?>
                                
                                <?
                                }
                                ?>
                                
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div> -->
    <?=$content?>
    <div class="container-fluid footer py-5">
        <div class="col-lg-11 mx-auto">
            <div class="row">
                <div class="col-lg-4 pb-4">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-6 mx-auto mb-3">
                            <img src="/img/logo.jpg" style="border-radius: 50%;" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-7">
                            <h4 class="footer-logo-title"><?=Yii::t('app', "Respublika o`rta tibbiyot va farmaseft xodimlar malakasini oshirish va ularni ixtisoslashtirish markazi Samarqand filiali")?></h4>
                        </div>
                        <div class="col-lg-8 mx-auto">
                            <nav class="footer-social mt-4">
                                <a href="#" class="footer-social-link"><img style="width: 30px !important;" src="/img/icon/telegram.png" class="img-icon" alt=""></a>
                                <a href="#" class="footer-social-link"><img style="width: 30px !important;" src="/img/icon/facebook.png" alt="" class="img-icon"></a>
                                <a href="#" class="footer-social-link"><img style="width: 30px !important;" src="/img/icon/instagram.png" alt="" class="img-icon"></a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-white pb-4">
                    <p class="mb-2"><img src="/img/icon/map.png" alt="" class="img-icon"> <?=Yii::t('app', "Samarqad shahar Mirzo Ulug'bek ko'chasi 72-uy.")?></p>
                    <p class="mb-2"><img src="/img/icon/phone.png" alt="" class="img-icon"> +998 (66)233-68-42</p>
                    <p class="mb-2"><img src="/img/icon/002-printer.png" alt="" class="img-icon"> +998 (66)233-80-47</p>
                    <p class="mb-2"><img src="/img/icon/email.png" alt="" class="img-icon"> sam.malaka@mail.ru</p>
                </div>
                <div class="col-lg-4">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="100%" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=39.660418017444144,%2066.93979485545066&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://fmovies-online.net">fmovies</a><br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 250px;
                                    width: 100%;
                                }
                            </style><a href="https://www.embedgooglemap.net">add google map location to website</a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 250px;
                                    width: 100%;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scroll up -->
    <a href="#" class="scroll-up"><i class="fa-solid fa-angles-up"></i></a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.4.0/lightgallery.umd.min.js" integrity="sha512-e+39qUKXdaNAHHzMx+zHLald62YcdVqJpJGAqs6iIJ6RRWy5/9PKJr1eDAc3SuM/PTpguz9v2d83j6SFgnbTdg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        AOS.init();

        // 
        lightGallery(document.getElementById('gallery-hash-demo'));
    </script>                          
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
