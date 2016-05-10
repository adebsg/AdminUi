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
            'id_profile' => Yii::t('app', 'Radius'),
            'id_category' => Yii::t('app', 'Category Name'),
            'id_profile_tag' => Yii::t('app', 'Detail Tag'),
        ];
    }
}
