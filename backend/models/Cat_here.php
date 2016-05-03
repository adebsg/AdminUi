<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cat_here".
 *
 * @property string $id
 * @property string $title
 * @property string $icon
 * @property string $type
 * @property string $href
 * @property string $system
 * @property string $within
 */
class Cat_here extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_here';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['icon', 'href', 'within'], 'string'],
            [['id', 'title', 'type', 'system'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'icon' => Yii::t('app', 'Icon'),
            'type' => Yii::t('app', 'Type'),
            'href' => Yii::t('app', 'Href'),
            'system' => Yii::t('app', 'System'),
            'within' => Yii::t('app', 'Within'),
        ];
    }

    /**
     * @inheritdoc
     * @return \backend\Queries\Cat_hereQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\Queries\Cat_hereQuery(get_called_class());
    }
}
