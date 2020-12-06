<?php

namespace app\models;

use frontend\models\Counties;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "refugee_camp".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $county
 * @property int|null $subcounty
 * @property string|null $locality_description
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property Refugee[] $refugees
 */
class RefugeeCamp extends \yii\db\ActiveRecord
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
        return 'refugee_camp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['county', 'subcounty', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['locality_description'], 'string'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'county' => 'County',
            'subcounty' => 'Subcounty',
            'locality_description' => 'Locality Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[Refugees]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\RefugeeQuery
     */
    public function getRefugees()
    {
        return $this->hasMany(Refugee::className(), ['camp' => 'id']);
    }

    public function getCountyname()
    {
        return $this->hasOne(\app\models\Counties::class,['CountyID' => 'county']);
    }

    public function getSubcountyname()
    {
        return $this->hasOne(Subcounties::className(),['SubCountyID' => 'subcounty']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\RefugeeCampQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\RefugeeCampQuery(get_called_class());
    }
}
