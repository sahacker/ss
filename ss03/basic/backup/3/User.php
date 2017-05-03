<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property integer $status
 * @property integer $locked
 * @property integer $banned
 */
class User extends \yii\db\ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    const ROLE_USER = 1;
    const ROLE_MODER = 5;
    const ROLE_ADMIN = 10;

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
            [['status', 'locked', 'banned'], 'integer'],
            [['username', 'password'], 'string', 'max' => 32],
            [['email'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    public function getId()
    {
        return $this->getPrimaryKey();
    }
    public function validatePassword($password)
    { 
	if ($password=$this->password) { return TRUE; } else { return FALSE; };
//        return Yii::$app->security->validatePassword($password, $this->password);
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'status' => 'Status',
            'locked' => 'Locked',
            'banned' => 'Banned',
        ];
    }
}
