<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%lawyer}}`.
 */
class m201202_211029_add_full_names_column_to_lawyer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%lawyer}}', 'full_names', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%lawyer}}', 'full_names');
    }
}
