<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perm".
 *
 * @property integer $pid
 * @property integer $gid
 * @property string $name
 */
class Perm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perm';
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
            'pid' => Yii::t('app', 'Pid'),
            'gid' => Yii::t('app', 'Gid'),
            'name' => Yii::t('app', 'Name'),
        ];
    }
}
