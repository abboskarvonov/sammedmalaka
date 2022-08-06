<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "gallereya".
 *
 * @property int $id
 * @property string $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property int|null $gallery_id
 * @property int $type
 * @property string $photo
 * @property string|null $link
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Gallereya extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallereya';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'type'], 'required'],
            [['gallery_id', 'type'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'photo', 'link', 'created_at', 'updated_at'], 'string', 'max' => 255],
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
            'gallery_id' => 'Gallery ID',
            'type' => 'Type',
            'photo' => 'Photo',
            'link' => 'Link',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
