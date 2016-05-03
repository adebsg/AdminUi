<?php

namespace backend\Queries;

/**
 * This is the ActiveQuery class for [[\backend\models\Profile_tag]].
 *
 * @see \backend\models\Profile_tag
 */
class Profile_tagQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \backend\models\Profile_tag[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\models\Profile_tag|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}