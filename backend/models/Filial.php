<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "filial".
 *
 * @property int $id
 * @property string $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string $director_uz
 * @property string|null $director_ru
 * @property string|null $director_en
 * @property string $address_uz
 * @property string|null $address_ru
 * @property string|null $address_en
 * @property string $phone
 * @property string $img
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Filial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'filial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'director_uz', 'address_uz', 'phone'], 'required'],
            [['name_uz', 'name_ru', 'name_en', 'director_uz', 'director_ru', 'director_en', 'img', 'email'], 'string', 'max' => 255],
            [['address_uz', 'address_ru', 'address_en'], 'string', 'max' => 400],
            [['phone'], 'string', 'max' => 25],
            [['created_at', 'updated_at'], 'string', 'max' => 30],
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
            'director_uz' => 'Director Uz',
            'director_ru' => 'Director Ru',
            'director_en' => 'Director En',
            'address_uz' => 'Address Uz',
            'address_ru' => 'Address Ru',
            'address_en' => 'Address En',
            'phone' => 'Phone',
            'img' => 'Img',
            'email' => 'Email',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
