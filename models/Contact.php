<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $name
 * @property string $email_or_phone_number
 * @property string $subject
 * @property string $text
 */
class Contact extends \yii\db\ActiveRecord
{
    public $verifyCode;
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
            [['name', 'email_or_phone_number', 'subject', 'text'], 'required'],
            [['text'], 'string'],
            [['name'], 'string', 'max' => 70],
            ['verifyCode', 'captcha'],
            [['email_or_phone_number', 'subject'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email_or_phone_number' => 'Email Or Phone Number',
            'subject' => 'Subject',
            'text' => 'Text',
            'verifyCode' => 'Verification Code',
        ];
    }
}
