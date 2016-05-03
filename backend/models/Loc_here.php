<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "loc_here".
 *
 * @property string $id
 * @property string $title
 * @property string $position
 * @property string $vicinity
 */
class Loc_here extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loc_here';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'title', 'position', 'vicinity'], 'string', 'max' => 255]
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
            'position' => Yii::t('app', 'Position'),
            'vicinity' => Yii::t('app', 'Vicinity'),
        ];
    }

    /**
     * @inheritdoc
     * @return \backend\Queries\Loc_hereQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\Queries\Loc_hereQuery(get_called_class());
    }
}
