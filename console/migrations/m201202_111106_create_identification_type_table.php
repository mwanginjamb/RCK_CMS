<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%identification_type}}`.
 */
class m201202_111106_create_identification_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%identification_type}}', [
            'id' => $this->primaryKey(),
            'identification' => $this->string(150),
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
        $this->dropTable('{{%identification_type}}');
    }
}
