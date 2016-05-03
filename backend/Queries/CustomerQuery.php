<?php

namespace backend\Queries;

/**
 * This is the ActiveQuery class for [[\backend\models\Customer]].
 *
 * @see \backend\models\Customer
 */
class CustomerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \backend\models\Customer[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\models\Customer|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}