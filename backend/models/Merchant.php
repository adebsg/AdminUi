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
            //'id_merchant' => Yii::t('app', 'Id Merchant'),
            'merchant_name' => Yii::t('app', 'Merchant Name'),
        ];
    }
}
