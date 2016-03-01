<?php

namespace backend\Queries;

/**
 * This is the ActiveQuery class for [[\frontend\models\Location]].
 *
 * @see \frontend\models\Location
 */
class LocationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \frontend\models\Location[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \frontend\models\Location|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}