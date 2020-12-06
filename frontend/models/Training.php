<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "training".
 *
 * @property int $id
 * @property string $_training_description
 * @property string $training_need
 * @property int|null $start_date
 * @property int|null $end_date
 * @property int|null $status
 * @property int|null $target
 * @property string $facilitator
 * @property string $venue
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class Training extends \yii\db\ActiveRecord
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
        return 'training';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['_training_description', 'training_need', 'facilitator', 'venue'], 'required'],
            [['training_need', 'facilitator'], 'string'],
            [['start_date', 'end_date', 'status', 'target', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['_training_description'], 'string', 'max' => 250],
            [['venue'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            '_training_description' => 'Training Description',
            'training_need' => 'Training Need',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'status' => 'Status',
            'target' => 'Target',
            'facilitator' => 'Facilitator',
            'venue' => 'Venue',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\TrainingQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\TrainingQuery(get_called_class());
    }
}
