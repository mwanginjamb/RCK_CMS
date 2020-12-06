<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "lawyer".
 *
 * @property int $id
 * @property string $lskId
 * @property string|null $cellNumber
 * @property string $email
 * @property string|null $website
 * @property string|null $lawfirmName
 * @property string|null $type
 * @property int|null $rating
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class Lawyer extends \yii\db\ActiveRecord
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
        return 'lawyer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lskId', 'email'], 'required'],
            [['rating', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['lskId', 'lawfirmName'], 'string', 'max' => 150],
            [['cellNumber'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 40],
            [['website'], 'string', 'max' => 80],
            [['type'], 'string', 'max' => 20],
            [['lskId','email','website','cellNumber','lawfirmName','full_names'], 'unique'],
            [['email'], 'email'],
            [['website'], 'url'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lskId' => 'Lsk ID',
            'cellNumber' => 'Cell Number',
            'email' => 'Email',
            'website' => 'Website',
            'lawfirmName' => 'Lawfirm Name',
            'type' => 'Type',
            'rating' => 'Rating',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\LawyerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\LawyerQuery(get_called_class());
    }
}
