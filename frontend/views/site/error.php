<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = $name;
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
            <div class="col-lg-6 mx-auto">
                <div class="page-content">
                    <h4 class="page-title mb-5"><?=$this->title?></h4>
                    <img src="/img/404.jpg" class="img-fluid" alt="">
                    <h4 class="text-center text-danger"><?= nl2br(Html::encode($message)) ?></h4>
                    <div class="col-lg-3 mx-auto">
                        <div class="d-grid mt-2">
                            <a href="<?=Url::home()?>" class="btn btn-primary"><?=Yii::t('app', "Bosh sahifa")?></a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-11 mx-auto">
    
</div>