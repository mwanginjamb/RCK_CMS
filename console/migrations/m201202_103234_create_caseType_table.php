<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%caseType}}`.
 */
class m201202_103234_create_caseType_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%caseType}}', [
            'id' => $this->primaryKey(),
            'type' => $this->string()->notNull(),
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
        $this->dropTable('{{%caseType}}');
    }
}
