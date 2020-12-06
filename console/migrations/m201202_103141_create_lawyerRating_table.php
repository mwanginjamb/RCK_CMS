<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%lawyerRating}}`.
 */
class m201202_103141_create_lawyerRating_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%lawyerRating}}', [
            'id' => $this->primaryKey(),
            'rating' => $this->integer()->notNull(),
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
        $this->dropTable('{{%lawyerRating}}');
    }
}
