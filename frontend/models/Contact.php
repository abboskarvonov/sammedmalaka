<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $message
 * @property string $verifyCode
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'address', 'message', 'verifyCode'], 'required'],
            [['message'], 'string'],
            [['email'], 'email'],
            [['name', 'email', 'phone', 'address'], 'string', 'max' => 255],
            [['verifyCode'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => Yii::t('app', "F.I.SH."),
            'email' => Yii::t('app', "Elektron pochta"),
            'phone' => Yii::t('app', "Telefon raqam"),
            'address' => Yii::t('app', "Manzil"),
            'message' => Yii::t('app', "Murojaat"),
            'verifyCode' => 'Verify Code',
        ];
    }
}
