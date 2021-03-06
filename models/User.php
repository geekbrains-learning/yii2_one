<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $login
 * @property string $password
 * @property int $isUser 0-user, 1-admin
 * @property string $auth_key
 * @property string $access_token
 */
class User extends \yii\db\ActiveRecord
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
            [['auth_key', 'access_token'], 'string', 'max' => 32],
            [['auth_key'], 'unique'],
            [['access_token'], 'unique'],
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
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
        ];
    }
}
