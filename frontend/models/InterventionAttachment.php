<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "intervention_attachment".
 *
 * @property int $id
 * @property int|null $intervention_id
 * @property string|null $filename
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property string|null $mime
 *
 * @property Intervention $intervention
 */
class InterventionAttachment extends \yii\db\ActiveRecord
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
        return 'intervention_attachment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['intervention_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['filename'], 'string', 'max' => 150],
            [['mime'], 'string', 'max' => 255],
            [['intervention_id'], 'exist', 'skipOnError' => true, 'targetClass' => Intervention::className(), 'targetAttribute' => ['intervention_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'intervention_id' => 'Intervention ID',
            'filename' => 'Filename',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'mime' => 'Mime',
        ];
    }

    /**
     * Gets query for [[Intervention]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\InterventionQuery
     */
    public function getIntervention()
    {
        return $this->hasOne(Intervention::className(), ['id' => 'intervention_id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\InterventionAttachmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\InterventionAttachmentQuery(get_called_class());
    }
}
