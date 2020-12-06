<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%caseOutcomes}}`.
 */
class m201202_102118_create_caseOutcomes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%caseOutcomes}}', [
            'id' => $this->primaryKey(),
            'outcome' => $this->string(150)->notNull(),
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
        $this->dropTable('{{%caseOutcomes}}');
    }
}
