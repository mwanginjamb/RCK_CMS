<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Conflict]].
 *
 * @see Conflict
 */
class ConflictQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Conflict[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Conflict|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
