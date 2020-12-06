<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%case_register}}`.
 */
class m201203_080430_create_case_register_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%case_register}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'accused_name' => $this->string(),
            'accussed_idno' => $this->string(),
            'complainant_name' => $this->string(),
            'court' => $this->string(),
            'representing_lawyer' => $this->integer(),
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
        $this->dropTable('{{%case_register}}');
    }
}
