<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tag".
 *
 * @property integer $id
 * @property string $tag_name
 * @property string $category_id
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
            [['id', 'tag_name', 'category_id'], 'required'],
            [['id', 'category_id'], 'integer'],
            [['tag_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tag_name' => 'Tag Name',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * @inheritdoc
     * @return \frontend\Queries\TagQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \frontend\Queries\TagQuery(get_called_class());
    }
}
