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
            [['id_cat_here'], 'string', 'max' => 255]
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
