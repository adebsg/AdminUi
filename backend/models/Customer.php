<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $facebook_id
 * @property string $id_profile
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_profile'], 'integer'],
            [['username', 'password', 'email', 'facebook_id'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'email' => Yii::t('app', 'Email'),
            'facebook_id' => Yii::t('app', 'Facebook ID'),
            'id_profile' => Yii::t('app', 'Id Profile'),
        ];
    }

    /**
     * @inheritdoc
     * @return \backend\Queries\CustomerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\Queries\CustomerQuery(get_called_class());
    }
}
