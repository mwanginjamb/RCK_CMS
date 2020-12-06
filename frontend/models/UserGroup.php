<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "user_group".
 *
 * @property int $id
 * @property string|null $group
 * @property string $description
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property Refugee[] $refugees
 * @property UserProfile[] $userProfiles
 */
class UserGroup extends \yii\db\ActiveRecord
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
        return 'user_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'required'],
            [['description'], 'string'],
            [['created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['group'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group' => 'Group',
            'description' => 'Description',
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
        return $this->hasMany(Refugee::className(), ['user_group_id' => 'id']);
    }

    /**
     * Gets query for [[UserProfiles]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\UserProfileQuery
     */
    public function getUserProfiles()
    {
        return $this->hasMany(UserProfile::className(), ['user_group_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\UserGroupQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\UserGroupQuery(get_called_class());
    }
}
