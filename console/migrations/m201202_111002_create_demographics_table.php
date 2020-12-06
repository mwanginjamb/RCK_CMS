<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%demographics}}`.
 */
class m201202_111002_create_demographics_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%demographics}}', [
            'id' => $this->primaryKey(),
            'demography' => $this->string(150),
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
        $this->dropTable('{{%demographics}}');
    }
}
