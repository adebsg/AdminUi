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
            [['id_category'], 'integer'],
            //field2 standar untuk semua model
            ['row_status','default','value'=>1,'when' => function($model){ return $model->isNewRecord;}],
            ['created_date','default','value'=> function ($model, $attribute) {return date('Y-m-d H:i:s');},'when' => function($model){ return $model->isNewRecord;}],
            ['created_by','default','value'=>\Yii::$app->user->identity->id,'when' => function($model){ return $model->isNewRecord;}],
            ['modified_date','default','value'=> function ($model, $attribute) {return date('Y-m-d H:i:s');},'when' => function($model){ return !$model->isNewRecord;}],
            ['modified_by','default','value'=>\Yii::$app->user->identity->id,'when' => function($model){ return !$model->isNewRecord;}],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'id' => Yii::t('app', 'ID'),
            'id_category' => Yii::t('app', 'Category Name'),
        ];
    }
}
