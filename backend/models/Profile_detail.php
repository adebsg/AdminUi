<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "profile_detail".
 *
 * @property string $id
 * @property string $id_profile
 * @property string $id_category
 * @property string $id_profile_tag
 */
class Profile_detail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_profile', 'id_category', 'id_profile_tag'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_profile' => Yii::t('app', 'Id Profile'),
            'id_category' => Yii::t('app', 'Id Category'),
            'id_profile_tag' => Yii::t('app', 'Id Profile Tag'),
        ];
    }

    /**
     * @inheritdoc
     * @return \backend\Queries\Profile_detailQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\Queries\Profile_detailQuery(get_called_class());
    }
}
