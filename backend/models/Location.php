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
            [['photo'], 'string'],
            [['location_name'], 'string', 'max' => 250],
            [['location_address'], 'string', 'max' => 500],
            [['phone'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_location' => 'Id Location',
            'location_name' => 'Location Name',
            'location_address' => 'Location Address',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'category_id' => 'Category ID',
            'phone' => 'Phone',
            'isPromo' => 'Is Promo',
            'photo' => 'Photo',
        ];
    }

    /**
     * @inheritdoc
     * @return \frontend\Queries\LocationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \frontend\Queries\LocationQuery(get_called_class());
    }
}
