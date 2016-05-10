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
            //'id' => Yii::t('app', 'ID'),
            'id_profile' => Yii::t('app', 'Radius'),
            'id_category' => Yii::t('app', 'Category Name'),
            'detail_tag' => Yii::t('app', 'Detail Tag'),
        ];
    }
}
