<?php

namespace backend\Queries;

/**
 * This is the ActiveQuery class for [[\backend\models\Loc_here_detail]].
 *
 * @see \backend\models\Loc_here_detail
 */
class Loc_here_detailQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \backend\models\Loc_here_detail[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\models\Loc_here_detail|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}