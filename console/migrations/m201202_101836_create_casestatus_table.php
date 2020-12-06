<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%casestatus}}`.
 */
class m201202_101836_create_casestatus_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%casestatus}}', [
            'id' => $this->primaryKey(),
            'status' => $this->string(150)->notNull(),
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
        $this->dropTable('{{%casestatus}}');
    }
}
