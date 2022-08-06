<?php

use yii\helpers\Html;
use kartik\tabs\TabsX;
use backend\models\Menu;
use backend\models\MultiMenu;
use backend\models\Pages;
use kartik\file\FileInput;
use backend\models\SubMenu;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
/* @var $this yii\web\View */
/* @var $model backend\models\Pages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pages-form">

    <?php $form = ActiveForm::begin(); ?>

    <? 
    $content1=
    $form->field($model, 'name_uz')->textInput(['maxlength' => true]).
    $form->field($model, 'content_uz')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])
    ]);

    $content2=
    $form->field($model, 'name_ru')->textInput(['maxlength' => true]).
    $form->field($model, 'content_ru')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])
    ]); 
    
    $content3=
    $form->field($model, 'name_en')->textInput(['maxlength' => true]).
    $form->field($model, 'content_en')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])
    ]);

    $items = [
        [
            'label'=>'<i class="fa fa-flag"></i> UZB',
            'content'=>$content1,
            'active'=>true
        ],
        [
            'label'=>'<i class="far fa-flag"></i> RU',
            'content'=>$content2,
        ],
        [
            'label'=>'<i class="fas fa-flag"></i> ENG',
            'content'=>$content3,
        ],
    ];
    
    echo TabsX::widget([
        'items'=>$items,
        'position'=>TabsX::POS_ABOVE,
        'encodeLabels'=>false
    ]);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-lg">
                <? echo '<label class="control-label">'.Yii::t('app',"Menuni tanlang:").'</label>'; ?>
                    <?= $form->field($model, 'menu_id')->dropDownList(
                        Menu::dropdown(),
                            [
                                'label'=>'false',
                                'prompt' => Yii::t('app','Menuni tanlang'),
                                'id'=>'menu-id',
                                'class'=>'form-control',
                                                    'onchange' => '$.post("'.Yii::$app->urlManager->createUrl('pages/submenu?id=').'"+$(this).val(), function(data) { $("select#sub-menu-id").html(data); })'

                            ]
                        )->label(false);
                ?>
            </div>
            <div class="col-lg">
                <? echo '<label class="control-label">'.Yii::t('app',"Ichki menuni tanlang").'</label>'; ?>
                    <?= $form->field($model, 'sub_menu_id')->dropDownList(
                        SubMenu::dropdown(),
                            [
                                'label'=>'false',
                                'prompt' => Yii::t('app','Ichki menuni tanlang'),
                                'id'=>'sub-menu-id',
                                'class'=>'form-control',
                            ]
                        )->label(false);
                ?>
            </div>
            <div class="col-lg">
                <?= $form->field($model, 'type')->dropDownList(['1' => 'Default page', '2' => 'Blog page', '3' => 'Link page'], ['prompt' => 'Sahifa turini tanlang']) ?>
            </div>
            <div class="col-lg">
                <?= $form->field($model, 'link_page_id')->dropDownList(
                    ArrayHelper::map( Pages::find()->where(['type' => 3])->all(), 'id', 'name_uz'),
                    [
                        'prompt' => 'Link sahifani tanlang',
                    ]);
                ?>
            </div>
            <div class="col-lg">
                <?= $form->field($model, 'multi_menu')->dropDownList(
                    ArrayHelper::map( MultiMenu::find()->all(), 'id', 'name_uz'),
                    [
                        'prompt' => 'Link sahifani tanlang',
                    ]);
                ?>
            </div>
        </div>
    </div>

    

    <? 
        if (empty($model->img) || $model->img == '0') {
            echo $form->field($model, 'img')->widget(FileInput::classname(), [
                'options' => ['accept' => 'image/*'],
            ]);
        }
        else {
            ?>
            <h3 class="mt-4">Rasm yuklangan</h3>
            <?
        }
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
