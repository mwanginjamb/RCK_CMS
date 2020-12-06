<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "intervention".
 *
 * @property int $id
 * @property int $intervention_type_id
 * @property int|null $case_id
 * @property string|null $situation_description
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property InterventionType $interventionType
 * @property InterventionAttachment[] $interventionAttachments
 */
class Intervention extends \yii\db\ActiveRecord
{



    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            BlameableBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'intervention';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['intervention_type_id'], 'required'],
            [['intervention_type_id', 'case_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['situation_description'], 'string'],
            [['intervention_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => InterventionType::className(), 'targetAttribute' => ['intervention_type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'intervention_type_id' => 'Intervention Type',
            'case_id' => 'Case ID',
            'situation_description' => 'Situation Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[InterventionType]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\InterventionTypeQuery
     */
    public function getInterventionType()
    {
        return $this->hasOne(InterventionType::className(), ['id' => 'intervention_type_id']);
    }

    /**
     * Gets query for [[InterventionAttachments]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\InterventionAttachmentQuery
     */
    public function getInterventionAttachments()
    {
        return $this->hasMany(InterventionAttachment::className(), ['intervention_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\InterventionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\InterventionQuery(get_called_class());
    }
}
