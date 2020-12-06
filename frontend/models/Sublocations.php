<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sublocations".
 *
 * @property int $SubLocationID
 * @property string|null $SubLocationName
 * @property int|null $LocationID
 * @property string|null $Notes
 * @property string $CreatedDate
 * @property int|null $CreatedBy
 * @property int $Deleted
 */
class Sublocations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sublocations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['LocationID', 'CreatedBy', 'Deleted'], 'integer'],
            [['Notes'], 'string'],
            [['CreatedDate'], 'safe'],
            [['SubLocationName'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'SubLocationID' => 'Sub Location ID',
            'SubLocationName' => 'Sub Location Name',
            'LocationID' => 'Location ID',
            'Notes' => 'Notes',
            'CreatedDate' => 'Created Date',
            'CreatedBy' => 'Created By',
            'Deleted' => 'Deleted',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\SublocationsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\SublocationsQuery(get_called_class());
    }
}
