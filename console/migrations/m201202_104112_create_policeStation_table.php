<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%policeStation}}`.
 */
class m201202_104112_create_policeStation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%policeStation}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'location' => $this->string(150)->notNull(),
            'closest_camp' => $this->string(150),
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
        $this->dropTable('{{%policeStation}}');
    }
}
