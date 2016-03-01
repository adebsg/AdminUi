<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "merchant".
 *
 * @property integer $id_merchant
 * @property string $merchant_name
 */
class Merchant extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'merchant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['merchant_name'], 'required'],
            [['merchant_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_merchant' => 'Id Merchant',
            'merchant_name' => 'Merchant Name',
        ];
    }

    /**
     * @inheritdoc
     * @return \frontend\Queries\MerchantQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \frontend\Queries\MerchantQuery(get_called_class());
    }
}
