<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%lawyer}}`.
 */
class m201202_102955_create_lawyer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%lawyer}}', [
            'id' => $this->primaryKey(),
            'lskId' => $this->string(150)->notNull(),
            'cellNumber' => $this->string(15),
            'email' => $this->string(40)->notNull(),
            'website' => $this->string(80),
            'lawfirmName' => $this->string(150),
            'type' => $this->string(20),
            'rating' => $this->integer(),
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
        $this->dropTable('{{%lawyer}}');
    }
}
