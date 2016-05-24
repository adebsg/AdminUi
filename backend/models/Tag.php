<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tag".
 *
 * @property integer $id
 * @property string $tag_name
 * @property integer $id_category
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag';
    }
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_category'], 'integer'],
            [['tag_name'], 'string', 'max' => 255],
            //field2 standar untuk semua model
            ['row_status','default','value'=>1,'when' => function($model){ return $model->isNewRecord;}],
            ['created_date','default','value'=> function ($model, $attribute) {return date('Y-m-d H:i:s');},'when' => function($model){ return $model->isNewRecord;}],
            ['created_by','default','value'=>\Yii::$app->user->identity->id,'when' => function($model){ return $model->isNewRecord;}],
            ['modified_date','default','value'=> function ($model, $attribute) {return date('Y-m-d H:i:s');},'when' => function($model){ return !$model->isNewRecord;}],
            ['modified_by','default','value'=>\Yii::$app->user->identity->id,'when' => function($model){ return !$model->isNewRecord;}],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
    	return $this->hasOne(Category::className(), ['id_category' => 'id_category']);
    }
    
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'id' => Yii::t('app', 'ID'),
            'tag_name' => Yii::t('app', 'Tag Name'),
            'id_category' => Yii::t('app', 'Category Name'),
        ];
    }
}
