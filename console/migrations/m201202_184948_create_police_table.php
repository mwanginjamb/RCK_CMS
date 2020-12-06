<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%police}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%policeStation}}`
 */
class m201202_184948_create_police_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%police}}', [
            'id' => $this->primaryKey(),
            'names' => $this->string(150)->notNull(),
            'station_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);

        // creates index for column `station_id`
        $this->createIndex(
            '{{%idx-police-station_id}}',
            '{{%police}}',
            'station_id'
        );

        // add foreign key for table `{{%policeStation}}`
        $this->addForeignKey(
            '{{%fk-police-station_id}}',
            '{{%police}}',
            'station_id',
            '{{%policeStation}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%policeStation}}`
        $this->dropForeignKey(
            '{{%fk-police-station_id}}',
            '{{%police}}'
        );

        // drops index for column `station_id`
        $this->dropIndex(
            '{{%idx-police-station_id}}',
            '{{%police}}'
        );

        $this->dropTable('{{%police}}');
    }
}
