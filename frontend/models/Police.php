<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "police".
 *
 * @property int $id
 * @property string $names
 * @property int|null $station_id
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property Policestation $station
 */
class Police extends \yii\db\ActiveRecord
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
        return 'police';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['names'], 'required'],
            [['station_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['names'], 'string', 'max' => 150],
            [['station_id'], 'exist', 'skipOnError' => true, 'targetClass' => Policestation::className(), 'targetAttribute' => ['station_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'names' => 'Names',
            'station_id' => 'Station ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[Station]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\PolicestationQuery
     */
    public function getStation()
    {
        return $this->hasOne(Policestation::className(), ['id' => 'station_id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\PoliceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\PoliceQuery(get_called_class());
    }
}
