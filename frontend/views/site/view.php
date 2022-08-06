<?php

use yii\helpers\Url;
use backend\models\SubMenu;
use yii\helpers\StringHelper;

$sub_menu = SubMenu::find()->where(['menu_id' => '4'])->all();
$lang = Yii::$app->language;
if($lang == 'uz') {
    $page_title = $model->name_uz;
    $page_content = $model->content_uz;
}
if($lang == 'ru') {
    $page_title = $model->name_ru;
    $page_content = $model->content_ru;
}
if($lang == 'en') {
    $page_title = $model->name_en;
    $page_content = $model->content_en;
}

$this->title = $page_title;

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
            <div class="col-lg-9 mb-3 col-md-9">
                <div class="page-content">
                    <h4 class="page-title mb-5"><?=$this->title?></h4>
                    <div class="row mb-4">
                        <div class="col-lg-9 col-md-8">
                            <img src="<?=$model->img?>" alt="" class="page-img">
                        </div>
                        <div class="col-lg-3 mt-3 mt-md-0 col-md-4">
                            <?
                            $date = explode("-", $model->created_at);
                            $day = explode(" ", $date[2]);
                            ?>
                            <div class="date-blog">
                                <span class="day"><?=$day[0]?></span>
                                <span class="month"><?=$date[1]?></span>
                                <span class="year"><?=$date[0]?></span>
                            </div>
                            <div class="view-blog mt-4">
                                <span class="view"><?=$model->view?></span>
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
                    <?=$page_content?>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
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