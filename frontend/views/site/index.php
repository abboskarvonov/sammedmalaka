<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\StringHelper;

$lang = Yii::$app->language;
$this->title = Yii::t('app', "Respublika o`rta tibbiyot va farmaseft xodimlar malakasini oshirish va ularni ixtisoslashtirish markazi Samarqand filiali");
?>
<style>
    
</style>
    <div class="video">
        <video src="/video/video.mp4" muted loop autoplay></video>
        <div class="swiper-shadow"></div>
        <div class="swiper-text-banner p-5">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <h1 class="swiper-text-title"><?=Yii::t('app', "Respublika o`rta tibbiyot va farmaseft xodimlar malakasini oshirish va ularni ixtisoslashtirish markazi Samarqand filiali")?></h1>
                </div>
                <div class="col-lg-4 col-md-5 d-none d-md-block">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">

                        </div>
                        <div class="col-lg-8 col-md-8">
                            <nav class="swiper-nav">
                                <a href="<?=Url::to(['site/pages', 'link' => 'elektronkutubxona'])?>" class="swiper-nav-link"><?=Yii::t('app', "Elektron kutubxona")?></a>
                                <a href="<?=Url::to(['site/pages', 'link' => 'rahbariyat'])?>" class="swiper-nav-link"><?=Yii::t('app', "Rahbariyat")?></a>
                                <a href="<?=Url::to(['site/pages', 'link' => 'filialbolimlari'])?>" class="swiper-nav-link"><?=Yii::t('app', "Filial bo'limlari")?></a>
                                <a href="<?=Url::to(['site/gallery'])?>" class="swiper-nav-link"><?=Yii::t('app', "Fotogaleriya")?></a>
                                <a href="<?=Url::to(['site/video'])?>" class="swiper-nav-link"><?=Yii::t('app', "Videogaleriya")?></a>
                                <a href="<?=Url::to(['site/contact'])?>" class="swiper-nav-link"><?=Yii::t('app', "Bog'lanish")?></a>
                            </nav>
                        </div>
                    </div>
                    
                </div>
            </div> 
        </div>
        <div class="arrow-bottom">
            <a href="#content" class="btn-bottom"><i class="fa-solid fa-angles-down"></i></a>
        </div>
    </div>
    <!-- <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="/img/slider/2.JPG" alt=""></div>
            <div class="swiper-slide"><img src="/img/slider/1.JPG" alt=""></div>
            <div class="swiper-slide"><img src="/img/slider/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="/img/slider/3.jpg" alt=""></div>
        </div>
        <div class="swiper-shadow"></div>
        <div class="swiper-text-banner p-5">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <h1 class="swiper-text-title"><?=Yii::t('app', "Respublika o`rta tibbiyot va farmaseft xodimlar malakasini oshirish va ularni ixtisoslashtirish markazi Samarqand filiali")?></h1>
                </div>
                <div class="col-lg-4 col-md-5 d-none d-md-block">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">

                        </div>
                        <div class="col-lg-8 col-md-8">
                            <nav class="swiper-nav">
                                <a href="<?=Url::to(['site/pages', 'link' => 'elektronkutubxona'])?>" class="swiper-nav-link"><?=Yii::t('app', "Elektron kutubxona")?></a>
                                <a href="<?=Url::to(['site/pages', 'link' => 'rahbariyat'])?>" class="swiper-nav-link"><?=Yii::t('app', "Rahbariyat")?></a>
                                <a href="<?=Url::to(['site/pages', 'link' => 'filialbolimlari'])?>" class="swiper-nav-link"><?=Yii::t('app', "Filial bo'limlari")?></a>
                                <a href="<?=Url::to(['site/gallery'])?>" class="swiper-nav-link"><?=Yii::t('app', "Fotogaleriya")?></a>
                                <a href="<?=Url::to(['site/video'])?>" class="swiper-nav-link"><?=Yii::t('app', "Videogaleriya")?></a>
                                <a href="<?=Url::to(['site/contact'])?>" class="swiper-nav-link"><?=Yii::t('app', "Bog'lanish")?></a>
                            </nav>
                        </div>
                    </div>
                    
                </div>
            </div> 
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
        <div class="arrow-bottom">
            <a href="#content" class="btn-bottom"><i class="fa-solid fa-angles-down"></i></a>
        </div>
    </div> -->
    <div class="container-fluid py-5 news" id="content">
        <div class="col-lg-11 mx-auto">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="section-title"><?=Yii::t('app', "Yangiliklar")?></h3>
                <a href="<?=Url::to(['site/pages', 'link' => 'yangiliklar'])?>" class="btn-section"><?=Yii::t('app', "barcha yangiliklar")?> <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="row">
                <?
                $i = 50;
                foreach($news as $key) {
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
                <div class="col-lg-6 mb-4" data-aos="fade-down" data-aos-delay="<?=$i+=50?>">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="<?=$key->img?>" class="img-thumbnail news-img" alt="">
                        </div>
                        <div class="col-lg-8">
                            <a href="<?=Url::to(['site/view', 'link' => $key->link])?>" class="news-title"><?=$name?></a>
                            <p class="date"><img src="/img/icon/004-calendar.png" class="icon-images" alt=""> <?=$key->created_at?></p>
                            <p class="news-text"><?=StringHelper::truncate(strip_tags($content), 150, '...')?></p>
                        </div>
                    </div>
                </div>
                <?
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="col-lg-11 mx-auto">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="section-title"><?=Yii::t('app', "Interaktiv xizmatlar")?></h3>
                <!-- <a href="#" class="btn-section">barcha xizmatlar<i class="fa-solid fa-arrow-right-long"></i></a> -->
            </div>
            <div class="row mt-4">
                <div class="col-lg mt-md-0 mt-4" data-aos="fade-right" data-aos-delay="500">
                    <div class="interactive-item">
                        <div class="interactive-title">
                            <h4><?=Yii::t('app', "Masofaviy ta'lim platformasi")?></h4>
                        </div>
                        <div class="interactive-dot"></div>
                        <div class="interactive-line"></div>
                        <div class="interactive-inner">
                            <a href="http://moodlesammalaka.uz/"><img src="/img/icon/005-digital-learning.png" alt="" class="icon-interactive"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg mt-md-0 mt-4" data-aos="fade-right" data-aos-delay="400">
                    <div class="interactive-item">
                        <div class="interactive-title">
                            <h4><?=Yii::t('app', "Elektron kutubxona")?></h4>
                        </div>
                        <div class="interactive-dot"></div>
                        <div class="interactive-line"></div>
                        <div class="interactive-inner">
                            <a href="<?=Url::to(['site/pages', 'link' => 'elektronkutubxona'])?>"><img src="/img/icon/006-online-education.png" alt="" class="icon-interactive"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg mt-md-0 mt-4" data-aos="fade-right" data-aos-delay="300">
                    <div class="interactive-item">
                        <div class="interactive-title">
                            <h4><?=Yii::t('app', "Filial rekvizitlari")?></h4>
                        </div>
                        <div class="interactive-dot"></div>
                        <div class="interactive-line"></div>
                        <div class="interactive-inner">
                            <a href="<?=Url::to(['site/pages', 'link' => 'filialrekvizitlari'])?>"><img src="/img/icon/007-requirement.png" alt="" class="icon-interactive"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg mt-md-0 mt-4" data-aos="fade-right" data-aos-delay="200">
                    <div class="interactive-item">
                        <div class="interactive-title">
                            <h4><?=Yii::t('app', "Kantrakt to'lov miqdori")?></h4>
                        </div>
                        <div class="interactive-dot"></div>
                        <div class="interactive-line"></div>
                        <div class="interactive-inner">
                            <a href="<?=Url::to(['site/pages', 'link' => 'kantrakttolovmiqdori'])?>"><img src="/img/icon/008-budget.png" alt="" class="icon-interactive"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg mt-md-0 mt-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="interactive-item">
                        <div class="interactive-title">
                            <h4><?=Yii::t('app', "Yillik qabul rejasi")?></h4>
                        </div>
                        <div class="interactive-dot"></div>
                        <div class="interactive-line"></div>
                        <div class="interactive-inner">
                            <a href="<?=Url::to(['site/pages', 'link' => 'yillikqabulreja'])?>"><img src="/img/icon/009-plan.png" alt="" class="icon-interactive"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid py-5 filial">
        <div class="col-lg-11 mx-auto">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="section-title"><?=Yii::t('app', "Hududiy filiallar")?></h3>
                <a href="<?=Url::to(['site/filial'])?>" class="btn-section"><?=Yii::t('app', "barcha filiallar")?> <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
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
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="<?=$i+=50?>">
                    <div class="filial-item">
                        <div class="dot"></div>
                        <div class="row">
                            <div class="col-lg-5">
                                <img src="<?=$key->img?>" class="img-fluid filial-img" alt="">
                            </div>
                            <div class="col-lg-7">
                                <h4 class="filial-title"><?=StringHelper::truncate($name, 22, '...')?></h4>
                                <span class="filial-director"><img src="/img/icon/001-businessman.png" alt="" class="icon-filial"> <?=$director?></span>
                                <span class="filial-address"><img src="/img/icon/002-placeholder.png" alt="" class="icon-filial"> <?=StringHelper::truncate($address, 80, '...')?></span>
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
    <div class="container-fluid files py-5">
        <div class="col-lg-11 mx-auto">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="section-title">hujjatlar</h3>
                <a href="#" class="btn-section">barcha hujjatlar <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="row">
                <div class="col-lg-3 mb-4" data-aos="fade-left" data-aos-delay="50">
                    <div class="files-item">
                        <a href="#">Hujjat nomi</a>
                        <span class="file-date">27/01/2022</span>
                        <img src="/img/documents.png" class="img-file" alt="">
                    </div>
                </div>
                <div class="col-lg-3 mb-4" data-aos="fade-left" data-aos-delay="100">
                    <div class="files-item">
                        <a href="#">Hujjat nomi</a>
                        <span class="file-date">27/01/2022</span>
                        <img src="/img/documents.png" class="img-file" alt="">
                    </div>
                </div>
                <div class="col-lg-3 mb-4" data-aos="fade-left" data-aos-delay="150">
                    <div class="files-item">
                        <a href="#">Hujjat nomi</a>
                        <span class="file-date">27/01/2022</span>
                        <img src="/img/documents.png" class="img-file" alt="">
                    </div>
                </div>
                <div class="col-lg-3 mb-4" data-aos="fade-left" data-aos-delay="200">
                    <div class="files-item">
                        <a href="#">Hujjat nomi</a>
                        <span class="file-date">27/01/2022</span>
                        <img src="/img/documents.png" class="img-file" alt="">
                    </div>
                </div>
                <div class="col-lg-3 mb-4" data-aos="fade-left" data-aos-delay="50">
                    <div class="files-item">
                        <a href="#">Hujjat nomi</a>
                        <span class="file-date">27/01/2022</span>
                        <img src="/img/documents.png" class="img-file" alt="">
                    </div>
                </div>
                <div class="col-lg-3 mb-4" data-aos="fade-left" data-aos-delay="100">
                    <div class="files-item">
                        <a href="#">Hujjat nomi</a>
                        <span class="file-date">27/01/2022</span>
                        <img src="/img/documents.png" class="img-file" alt="">
                    </div>
                </div>
                <div class="col-lg-3 mb-4" data-aos="fade-left" data-aos-delay="150">
                    <div class="files-item">
                        <a href="#">Hujjat nomi</a>
                        <span class="file-date">27/01/2022</span>
                        <img src="/img/documents.png" class="img-file" alt="">
                    </div>
                </div>
                <div class="col-lg-3 mb-4" data-aos="fade-left" data-aos-delay="200">
                    <div class="files-item">
                        <a href="#">Hujjat nomi</a>
                        <span class="file-date">27/01/2022</span>
                        <img src="/img/documents.png" class="img-file" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid link">
        <div class="col-lg-11 mx-auto py-5 position-relative">
            <h3 class="section-title"><?=Yii::t('app', "Foydali havolalar")?></h3>
            <div class="swiper linkSwiper">
                <div class="swiper-wrapper">
                    <?
                    foreach($links as $key) {
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
                    <div class="swiper-slide" data-aos="fade-up" data-aos-delay="50">
                        <a href="<?=$key->link?>" style="display: flex; align-items: center; height: 60px; padding-right: 10px">
                            <img src="<?=$key->img?>" alt="">
                            <h4 class="link-title"><?=$name?></h4>
                        </a>
                    </div>
                    <?
                    }
                    ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
