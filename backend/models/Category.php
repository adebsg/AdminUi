<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property string $id_category
 * @property string $category_name
 * @property string $parent
 * @property string $id_cat_here
 * @property string $icon
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_name'], 'required'],
            [['parent'], 'integer'],
            [['icon'], 'string'],
            [['category_name'], 'string', 'max' => 30],
            [['id_cat_here'], 'string', 'max' => 255],
            
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
            //'id_category' => Yii::t('app', 'Id Category'),
            'category_name' => Yii::t('app', 'Category Name'),
            'parent' => Yii::t('app', 'Parent'),
            'id_cat_here' => Yii::t('app', 'Title'),
            'icon' => Yii::t('app', 'Icon'),
        ];
    }
}
