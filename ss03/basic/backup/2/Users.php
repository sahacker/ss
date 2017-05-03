<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $uid
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $role
 * @property integer $locked
 * @property integer $banned
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email'], 'required'],
            [['role'], 'string'],
            [['locked', 'banned'], 'integer'],
            [['username', 'password'], 'string', 'max' => 32],
            [['email'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'role' => 'Role',
            'locked' => 'Locked',
            'banned' => 'Banned',
        ];
    }
}
