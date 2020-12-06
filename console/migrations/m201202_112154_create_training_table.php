<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%training}}`.
 */
class m201202_112154_create_training_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%training}}', [
            'id' => $this->primaryKey(),
            '_training_description' => $this->string(250)->notNull(),
            'training_need' => $this->text()->notNull(),
            'start_date' => $this->integer(),
            'end_date' => $this->integer(),
            'status' => $this->integer()->defaultValue(1),
            'target' => $this->integer(),
            'facilitator' => $this->text()->notNull(),
            'venue' => $this->string()->notNull(),
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
        $this->dropTable('{{%training}}');
    }
}
