<?php

namespace app\models;

use Yii;
use common\models\User;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "user_profile".
 *
 * @property int $id
 * @property string $first_name
 * @property string|null $middle_name
 * @property string $last_name
 * @property int $user_group_id
 * @property int|null $user_id
 * @property string|null $image
 * @property int|null $station
 * @property string|null $cell_number
 * @property string|null $email_address
 * @property int $gender
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property WorkStation $station0
 * @property UserGroup $userGroup
 * @property User $user
 */
class UserProfile extends \yii\db\ActiveRecord
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
        return 'user_profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'user_group_id', 'gender'], 'required'],
            [['user_group_id', 'user_id', 'station', 'gender', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['first_name', 'middle_name', 'last_name', 'email_address'], 'string', 'max' => 50],
            [['image'], 'string', 'max' => 150],
            [['cell_number'], 'string', 'max' => 15],
            [['station'], 'exist', 'skipOnError' => true, 'targetClass' => WorkStation::className(), 'targetAttribute' => ['station' => 'id']],
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
            'station' => 'Station',
            'cell_number' => 'Cell Number',
            'email_address' => 'Email Address',
            'gender' => 'Gender',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[Station0]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\WorkStationQuery
     */
    public function getStation0()
    {
        return $this->hasOne(WorkStation::className(), ['id' => 'station']);
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
     * @return \app\models\query\UserProfileQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\UserProfileQuery(get_called_class());
    }
}
