<?php

namespace frontend\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "case_register".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $accused_name
 * @property string|null $accussed_idno
 * @property string|null $complainant_name
 * @property string|null $court
 * @property int|null $representing_lawyer
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class CaseRegister extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'case_register';
    }

    public function behaviors()
    {
        return [
            BlameableBehavior::class,
            TimestampBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['representing_lawyer', 'created_at', 'updated_at', 'created_by', 'updated_by','case_type'], 'integer'],
            [['title', 'accused_name', 'accussed_idno', 'complainant_name', 'court'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'accused_name' => 'Accused Name',
            'accussed_idno' => 'Accussed Idno',
            'complainant_name' => 'Complainant Name',
            'court' => 'Court',
            'representing_lawyer' => 'Representing Lawyer',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CaseRegisterQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CaseRegisterQuery(get_called_class());
    }
}
