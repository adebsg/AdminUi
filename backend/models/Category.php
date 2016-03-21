<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property string $id_category
 * @property string $category_name
 * @property string $category_id
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
            [['id_category', 'category_name'], 'required'],
            [['id_category', 'category_id'], 'integer'],
            [['category_name'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_category' => 'Id Category',
            'category_name' => 'Category Name',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * @inheritdoc
     * @return \frontend\Queries\CategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\Queries\CategoryQuery(get_called_class());
    }
}
