<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $name
 * @property string $email_or_phone_number
 * @property string $subject
 * @property string $text
 * @property int $sent_at
 */
class Contact extends ActiveRecord
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

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['sent_at'],
                ],
            ],
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
            'sent_at' => 'Sent At',
            'verifyCode' => 'Verification Code',
        ];
    }
}
