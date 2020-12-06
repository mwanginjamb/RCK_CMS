<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%identification_training_status}}`.
 */
class m201202_112245_create_identification_training_status_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%identification_training_status}}', [
            'id' => $this->primaryKey(),
            'status' => $this->string(150),
            'description' => $this->text(),
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
        $this->dropTable('{{%identification_training_status}}');
    }
}
