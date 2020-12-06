<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%intervention_attachment}}`.
 */
class m201202_120235_add_mime_column_to_intervention_attachment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%intervention_attachment}}', 'mime', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%intervention_attachment}}', 'mime');
    }
}
