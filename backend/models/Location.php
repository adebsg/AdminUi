<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property string $id_location
 * @property string $location_name
 * @property string $location_address
 * @property double $latitude
 * @property double $longitude
 * @property integer $category_id
 * @property string $phone
 * @property integer $isPromo
 * @property resource $photo
 * @property string $id_location_here
 * @property string $description
 * @property string $location_tag
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['latitude', 'longitude'], 'required'],
            [['latitude', 'longitude'], 'number'],
            [['category_id', 'isPromo'], 'integer'],
            ['isPromo','default','value'=>0],
            [['photo'], 'string'],
            [['location_name'], 'string', 'max' => 250],
            [['location_address'], 'string', 'max' => 500],
            [['phone'], 'string', 'max' => 20],
            [['id_location_here'], 'string', 'max' => 255],
            [['description', 'location_tag'], 'string', 'max' => 1000],
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
            //'id_location' => Yii::t('app', 'Id Location'),
            'location_name' => Yii::t('app', 'Location Name'),
            'location_address' => Yii::t('app', 'Location Address'),
            'latitude' => Yii::t('app', 'Latitude'),
            'longitude' => Yii::t('app', 'Longitude'),
            'category_id' => Yii::t('app', 'Category Name'),
            'phone' => Yii::t('app', 'Phone'),
            'isPromo' => Yii::t('app', 'Is Promo'),
            'photo' => Yii::t('app', 'Photo'),
            'id_location_here' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'location_tag' => Yii::t('app', 'Location Tag'),
        ];
    }
}
