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
            [['tag_name'], 'string', 'max' => 255]
        ];
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
