<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "other_page".
 *
 * @property int $id
 * @property string $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string $fish_uz
 * @property string|null $fish_ru
 * @property string|null $fish_en
 * @property string $phone
 * @property string $email
 * @property string $qabul_uz
 * @property string|null $qabul_ru
 * @property string|null $qabul_en
 * @property int $type
 * @property string|null $img
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class OtherPage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'other_page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'fish_uz', 'phone', 'email', 'qabul_uz', 'type'], 'required'],
            [['type'], 'integer'],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 400],
            [['fish_uz', 'fish_ru', 'fish_en'], 'string', 'max' => 300],
            [['phone', 'created_at', 'updated_at'], 'string', 'max' => 50],
            [['email', 'qabul_uz', 'qabul_ru', 'qabul_en', 'img'], 'string', 'max' => 255],
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
            'fish_uz' => 'Fish Uz',
            'fish_ru' => 'Fish Ru',
            'fish_en' => 'Fish En',
            'phone' => 'Phone',
            'email' => 'Email',
            'qabul_uz' => 'Qabul Uz',
            'qabul_ru' => 'Qabul Ru',
            'qabul_en' => 'Qabul En',
            'type' => 'Type',
            'img' => 'Img',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
