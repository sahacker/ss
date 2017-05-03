<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $uid
 * @property string $username
 * @property string $passwd
 * @property string $token
 * @property string $authkey
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */

    public static function findByUsername($username) {
        $user = self::find()
            ->where([
                "username" => $username
            ])
            ->one();
        if (!count($user)) {
            return null;
        }
        return new static($user);
    }

    public function validatePassword($password)
    {
        return $this->passwd === $password;
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->uid;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function isAdmin()
    {
        return (($this->status == 1) or ($this->status == 2));
    }

    public function getAuthKey()
    {
        return $this->authkey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authkey === $authKey;
    }

    public function rules()
    {
        return [
            [['uid', 'username', 'passwd', 'token', 'authkey', 'email', 'created_at', 'updated_at'], 'required'],
            [['uid', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'passwd', 'token', 'authkey', 'email'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => Yii::t('app', 'Uid'),
            'username' => Yii::t('app', 'Username'),
            'passwd' => Yii::t('app', 'Passwd'),
            'token' => Yii::t('app', 'Token'),
            'authkey' => Yii::t('app', 'Authkey'),
            'email' => Yii::t('app', 'Email'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
