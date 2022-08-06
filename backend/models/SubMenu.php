<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sub_menu".
 *
 * @property int $id
 * @property string $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property int $menu_id
 * @property string|null $link
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class SubMenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sub_menu';
    }

    public static function dropdown()
    {
        static  $dropdown;
        if ($dropdown === null) {
            $models = static ::find()->orderBy('id')->all();

            foreach ($models as $model) {
                $dropdown[$model->id] = $model->name_uz;
            }
        }
        return $dropdown;
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'menu_id'], 'required'],
            [['menu_id', 'type'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'link'], 'string', 'max' => 255],
            [['created_at', 'updated_at'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'menu_id' => 'Menu ID',
            'link' => 'Link',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
