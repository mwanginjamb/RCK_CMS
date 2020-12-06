<?php

namespace app\models\query;

/**
 * This is the ActiveQuery class for [[\app\models\Casestatus]].
 *
 * @see \app\models\Casestatus
 */
class CasestatusQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\models\Casestatus[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\Casestatus|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
