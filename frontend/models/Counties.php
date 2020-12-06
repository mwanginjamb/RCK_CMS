<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "counties".
 *
 * @property int $CountyID
 * @property string|null $CountyName
 * @property string|null $Notes
 * @property int|null $RegionID
 * @property string|null $CreatedDate
 * @property int|null $CreatedBy
 */
class Counties extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'counties';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Notes'], 'string'],
            [['RegionID', 'CreatedBy'], 'integer'],
            [['CreatedDate'], 'safe'],
            [['CountyName'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CountyID' => 'County ID',
            'CountyName' => 'County Name',
            'Notes' => 'Notes',
            'RegionID' => 'Region ID',
            'CreatedDate' => 'Created Date',
            'CreatedBy' => 'Created By',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\CountiesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\CountiesQuery(get_called_class());
    }
}
