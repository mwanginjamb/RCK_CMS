<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%identification_training_target}}`.
 */
class m201202_112355_create_identification_training_target_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%identification_training_target}}', [
            'id' => $this->primaryKey(),
            'target_description' => $this->string(150),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%identification_training_target}}');
    }
}
