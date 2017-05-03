<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "role".
 *
 * @property integer $gid
 * @property string $name
 */
class Role extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gid', 'name'], 'required'],
            [['gid'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gid' => Yii::t('app', 'Gid'),
            'name' => Yii::t('app', 'Name'),
        ];
    }
}
