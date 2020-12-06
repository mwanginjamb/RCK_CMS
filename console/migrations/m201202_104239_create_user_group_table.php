<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_group}}`.
 */
class m201202_104239_create_user_group_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_group}}', [
            'id' => $this->primaryKey(),
            'group' => $this->string(50),
            'description' => $this->text()->notNull(),
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
        $this->dropTable('{{%user_group}}');
    }
}
