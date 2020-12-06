<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%work_station}}`.
 */
class m201202_104709_create_work_station_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%work_station}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
            'closest_camp' => $this->integer(),
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
        $this->dropTable('{{%work_station}}');
    }
}
