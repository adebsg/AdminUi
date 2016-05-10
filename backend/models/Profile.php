<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property string $id
 * @property string $radius
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'radius'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'radius' => Yii::t('app', 'Radius'),
        ];
    }
}
