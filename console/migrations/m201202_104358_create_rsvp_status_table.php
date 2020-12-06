<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rsvp_status}}`.
 */
class m201202_104358_create_rsvp_status_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rsvp_status}}', [
            'id' => $this->primaryKey(),
            'status' => $this->string(50),
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
        $this->dropTable('{{%rsvp_status}}');
    }
}
