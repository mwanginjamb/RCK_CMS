<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%intervention_type}}`.
 */
class m201202_101350_create_intervention_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%intervention_type}}', [
            'id' => $this->primaryKey(),
            'intervention_type' => $this->string(150)->notNull(),
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
        $this->dropTable('{{%intervention_type}}');
    }
}
