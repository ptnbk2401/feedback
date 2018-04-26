<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property int $id
 * @property string $email
 * @property string $content
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['email'], 'string', 'max' => 200],
            ['content', 'required','message'=>'Nhập vào nội dung phản hồi'],
            ['email', 'required','message'=>'Nhập vào Email'],
            ['email', 'email','message'=>'Nhập vào đúng định dạng Email'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'content' => 'Content',
        ];
    }
}
