<?php

namespace backend\Queries;

/**
 * This is the ActiveQuery class for [[\backend\models\Cat_here]].
 *
 * @see \backend\models\Cat_here
 */
class Cat_hereQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \backend\models\Cat_here[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\models\Cat_here|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}