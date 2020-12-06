<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%intervention_attachment}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%intervention}}`
 */
class m201202_113428_create_intervention_attachment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%intervention_attachment}}', [
            'id' => $this->primaryKey(),
            'intervention_id' => $this->integer(),
            'filename' => $this->string(150),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);

        // creates index for column `intervention_id`
        $this->createIndex(
            '{{%idx-intervention_attachment-intervention_id}}',
            '{{%intervention_attachment}}',
            'intervention_id'
        );

        // add foreign key for table `{{%intervention}}`
        $this->addForeignKey(
            '{{%fk-intervention_attachment-intervention_id}}',
            '{{%intervention_attachment}}',
            'intervention_id',
            '{{%intervention}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%intervention}}`
        $this->dropForeignKey(
            '{{%fk-intervention_attachment-intervention_id}}',
            '{{%intervention_attachment}}'
        );

        // drops index for column `intervention_id`
        $this->dropIndex(
            '{{%idx-intervention_attachment-intervention_id}}',
            '{{%intervention_attachment}}'
        );

        $this->dropTable('{{%intervention_attachment}}');
    }
}
