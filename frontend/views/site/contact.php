<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Url;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;
use backend\models\SubMenu;
use yii\bootstrap4\ActiveForm;

$lang = Yii::$app->language;
$sub_menu = SubMenu::find()->where(['menu_id' => '4'])->all();
$this->title = Yii::t('app', "Bog'lanish");
?>

<style>
    form .form-group {
        margin-bottom: 20px;
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
<div class="col-lg-11 mx-auto py-5">
    <div class="row">
        <div class="col-lg-9 mb-3">
            <div class="page-content">
                <h4 class="page-title mb-5"><?=$this->title?></h4>
                <div class="col-lg-12 p-0">
                    <h5 class="mb-3"><i class="pe-3 fa-solid fa-map-location-dot"></i> <?=Yii::t('app', "Bizning manzil: Samarqand shahar, Mirzo Ulug'bek ko'chasi, 72-uy")?></h5>
                    <h5 class="mb-3"><i class="pe-3 fa-solid fa-location-dot"></i> <?=Yii::t('app', 'Mo\'ljal: Avtosalon "CHEVROLET"')?></h5>
                    <h5 class="mb-3"><i class="pe-3 fa-solid fa-bus"></i> <?=Yii::t('app', "Transport:")?> 72,66,64,52,51,45,44,3,22,6,27</h5>
                    <h5 class="mb-3"><i class="pe-3 fa-solid fa-envelope"></i> <?=Yii::t('app', "Bizning pochta:")?> sam.malaka@mail.ru</h5>
                    <h5 class="mb-3"><i class="pe-3 fa-solid fa-phone"></i> <?=Yii::t('app', "Telefon:")?> +998 66 233 68 42, +998 66 233 80 47</h5>
                </div>
                <div class="col-lg-12 p-0 mt-4">
                    <?
                    if(Yii::$app->session->hasFlash('success')) {
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?=Yii::$app->session->getFlash('success')?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?
                    }
                    elseif(Yii::$app->session->hasFlash('error')) {
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?=Yii::$app->session->getFlash('error')?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?
                    }
                    ?>
                    <h5 class="mb-3"><?=Yii::t('app', "Murojaat yuborish")?></h5>
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'email') ?>

                        <?= $form->field($model, 'phone') ?>

                        <?= $form->field($model, 'address') ?>

                        <?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>

                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]) ?>

                        <div class="form-group">
                            <?= Html::submitButton(Yii::t('app', "Yuborish"), ['class' => 'btn btn-primary mt-3', 'name' => 'contact-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>
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
