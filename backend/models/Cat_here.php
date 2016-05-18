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
            [['id', 'title', 'type', 'system'], 'string', 'max' => 255],
            
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
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'icon' => Yii::t('app', 'Icon'),
            'type' => Yii::t('app', 'Type'),
            'href' => Yii::t('app', 'Href'),
            'system' => Yii::t('app', 'System'),
            'within' => Yii::t('app', 'Within'),
        ];
    }
}
