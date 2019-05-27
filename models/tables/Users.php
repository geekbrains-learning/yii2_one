<?php

namespace app\models\tables;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $login
 * @property string $password
 * @property int $isUser 0-user, 1-admin
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login'], 'required'],
            [['isUser'], 'integer'],
            [['login'], 'string', 'max' => 25],
            [['password'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
            'isUser' => 'Is User',
        ];
    }

    public function createId() 
    {
        return $this->hasMany(Tasks::className(), ['creator_id' => 'id']);
    }

    public function responId() 
    {
        return $this->hasMany(Tasks::className(), ['responsible_id' => 'id']);
    }
}
