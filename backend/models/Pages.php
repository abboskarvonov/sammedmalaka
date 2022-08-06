<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string $content_uz
 * @property string|null $content_ru
 * @property string|null $content_en
 * @property int $type
 * @property string|null $img
 * @property string|null $view
 * @property string|null $link
 * @property int|null $menu_id
 * @property int|null $sub_menu_id
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'type'], 'required'],
            [['content_uz', 'content_ru', 'content_en'], 'string'],
            [['type', 'menu_id', 'multi_menu', 'sub_menu_id', 'link_page_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 300],
            [['img', 'link'], 'string', 'max' => 255],
            [['view'], 'string', 'max' => 20],
            [['created_at', 'updated_at'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Sahifa nomi Uz',
            'name_ru' => 'Sahifa nomi Ru',
            'name_en' => 'Sahifa nomi En',
            'content_uz' => 'Sahifa matni Uz',
            'content_ru' => 'Sahifa matni Ru',
            'content_en' => 'Sahifa matni En',
            'type' => 'Sahifa turi',
            'img' => 'Rasm',
            'view' => 'Ko\'rishlar soni',
            'link' => 'Sahifa manzili',
            'menu_id' => 'Menu',
            'link_page_id' => 'Sahifa ichidagi sahifalar',
            'sub_menu_id' => 'Ichki Menu',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
