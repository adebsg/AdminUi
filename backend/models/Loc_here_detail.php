<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "loc_here_detail".
 *
 * @property integer $id
 * @property string $id_category
 */
class Loc_here_detail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loc_here_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_category'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_category' => Yii::t('app', 'Id Category'),
        ];
    }

    /**
     * @inheritdoc
     * @return \backend\Queries\Loc_here_detailQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\Queries\Loc_here_detailQuery(get_called_class());
    }
}
