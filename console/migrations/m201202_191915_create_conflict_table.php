<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%conflict}}`.
 */
class m201202_191915_create_conflict_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%conflict}}', [
            'id' => $this->primaryKey(),
            'conflict' => $this->string(),
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
        $this->dropTable('{{%conflict}}');
    }
}
