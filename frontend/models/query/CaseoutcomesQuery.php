<?php

namespace app\models\query;

/**
 * This is the ActiveQuery class for [[\app\models\Caseoutcomes]].
 *
 * @see \app\models\Caseoutcomes
 */
class CaseoutcomesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\models\Caseoutcomes[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\Caseoutcomes|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
