<?php

namespace app\models\query;

/**
 * This is the ActiveQuery class for [[\app\models\Sublocations]].
 *
 * @see \app\models\Sublocations
 */
class SublocationsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\models\Sublocations[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\Sublocations|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
