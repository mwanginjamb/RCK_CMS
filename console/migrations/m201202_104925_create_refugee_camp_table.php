<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%refugee_camp}}`.
 */
class m201202_104925_create_refugee_camp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%refugee_camp}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
            'county' => $this->integer(),
            'subcounty' => $this->integer(),
            'locality_description' => $this->text(),
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
        $this->dropTable('{{%refugee_camp}}');
    }
}
