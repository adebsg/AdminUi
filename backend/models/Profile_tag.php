<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "profile_tag".
 *
 * @property integer $id
 * @property integer $id_profile
 * @property integer $id_category
 * @property string $detail_tag
 */
class Profile_tag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile_tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_profile', 'id_category'], 'integer'],
            [['detail_tag'], 'string', 'max' => 500]
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
            'detail_tag' => Yii::t('app', 'Detail Tag'),
        ];
    }

    /**
     * @inheritdoc
     * @return \backend\Queries\Profile_tagQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\Queries\Profile_tagQuery(get_called_class());
    }
}
