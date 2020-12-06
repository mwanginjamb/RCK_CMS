<?php

namespace app\models;

use frontend\models\Gender;
use Yii;
use common\models\User;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "refugee".
 *
 * @property string|null $id
 * @property string $first_name
 * @property string|null $middle_name
 * @property string $last_name
 * @property int $user_group_id
 * @property int|null $user_id
 * @property string|null $image
 * @property int|null $camp
 * @property string|null $cell_number
 * @property string|null $email_address
 * @property int $gender
 * @property int|null $country_of_origin
 * @property int|null $demography_id
 * @property int|null $date_of_birth
 * @property int|null $id_type
 * @property int|null $conflict
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property RefugeeCamp $camp0
 * @property UserGroup $userGroup
 * @property User $user
 */
class Refugee extends \yii\db\ActiveRecord
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
        return 'refugee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'user_group_id', 'gender'], 'required'],
            [['user_group_id', 'user_id', 'camp', 'gender', 'country_of_origin', 'demography_id', 'id_type', 'conflict', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['id', 'first_name', 'middle_name', 'last_name', 'email_address'], 'string', 'max' => 50],
            [['image'], 'string', 'max' => 150],
            [['date_of_birth'], 'safe'],
            [['cell_number'], 'string', 'max' => 15],
            [['camp'], 'exist', 'skipOnError' => true, 'targetClass' => RefugeeCamp::className(), 'targetAttribute' => ['camp' => 'id']],
            [['user_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserGroup::className(), 'targetAttribute' => ['user_group_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'user_group_id' => 'User Group ID',
            'user_id' => 'User ID',
            'image' => 'Image',
            'camp' => 'Camp Name',
            'cell_number' => 'Cell Number',
            'email_address' => 'Email Address',
            'gender' => 'Gender',
            'country_of_origin' => 'Country Of Origin',
            'demography_id' => 'Demography ID',
            'date_of_birth' => 'Date Of Birth',
            'id_type' => 'Id Type',
            'conflict' => 'Conflict',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[Camp0]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\RefugeeCampQuery
     */
    public function getCamp0()
    {
        return $this->hasOne(RefugeeCamp::className(), ['id' => 'camp']);
    }

    /**
     * Gets query for [[UserGroup]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\UserGroupQuery
     */
    public function getUserGroup()
    {
        return $this->hasOne(UserGroup::className(), ['id' => 'user_group_id']);
    }

    public function getRcamp()
    {
        return $this->hasOne(RefugeeCamp::className(), ['id' => 'camp']);
    }

    public function getRgender()
    {
        return $this->hasOne(Gender::className(), ['id' => 'gender']);
    }

    public function getRcountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_of_origin']);
    }


    public function getRdemography()
    {
        return $this->hasOne(Demographics::className(), ['id' => 'demography_id']);
    }


    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\UserQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\RefugeeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\RefugeeQuery(get_called_class());
    }
}
