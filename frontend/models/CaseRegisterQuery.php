<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[CaseRegister]].
 *
 * @see CaseRegister
 */
class CaseRegisterQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return CaseRegister[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return CaseRegister|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
