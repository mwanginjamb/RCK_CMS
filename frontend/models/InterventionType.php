<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "intervention_type".
 *
 * @property int $id
 * @property string $intervention_type
 * @property string|null $description
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property Intervention[] $interventions
 */
class InterventionType extends \yii\db\ActiveRecord
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
        return 'intervention_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['intervention_type'], 'required'],
            [['description'], 'string'],
            [['created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['intervention_type'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'intervention_type' => 'Intervention Type',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[Interventions]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\InterventionQuery
     */
    public function getInterventions()
    {
        return $this->hasMany(Intervention::className(), ['intervention_type_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\InterventionTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\InterventionTypeQuery(get_called_class());
    }
}
