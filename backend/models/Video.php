<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property int $id
 * @property string $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string $video
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'video'], 'required'],
            [['video'], 'string'],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 255],
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
            'video' => 'Video',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
