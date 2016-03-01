<?php

namespace backend\Queries;

/**
 * This is the ActiveQuery class for [[\frontend\models\Category]].
 *
 * @see \frontend\models\Category
 */
class CategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \frontend\models\Category[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \frontend\models\Category|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}