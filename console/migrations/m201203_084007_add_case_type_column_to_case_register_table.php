<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%case_register}}`.
 */
class m201203_084007_add_case_type_column_to_case_register_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%case_register}}', 'case_type', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%case_register}}', 'case_type');
    }
}
