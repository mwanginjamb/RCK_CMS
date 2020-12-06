<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%refugee}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user_group}}`
 * - `{{%user}}`
 * - `{{%refugee_camp}}`
 */
class m201202_110748_create_refugee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%refugee}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(50)->notNull(),
            'middle_name' => $this->string(50),
            'last_name' => $this->string(50)->notNull(),
            'user_group_id' => $this->integer()->notNull(),
            'user_id' => $this->integer(),
            'image' => $this->string(150),
            'camp' => $this->integer(),
            'cell_number' => $this->string(15),
            'email_address' => $this->string(50),
            'gender' => $this->integer(1)->notNull(),
            'country_of_origin' => $this->integer(),
            'demography_id' => $this->integer(),
            'date_of_birth' => $this->integer(),
            'id' => $this->string(50),
            'id_type' => $this->integer(),
            'conflict' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);

        // creates index for column `user_group_id`
        $this->createIndex(
            '{{%idx-refugee-user_group_id}}',
            '{{%refugee}}',
            'user_group_id'
        );

        // add foreign key for table `{{%user_group}}`
        $this->addForeignKey(
            '{{%fk-refugee-user_group_id}}',
            '{{%refugee}}',
            'user_group_id',
            '{{%user_group}}',
            'id',
            'CASCADE'
        );

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-refugee-user_id}}',
            '{{%refugee}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-refugee-user_id}}',
            '{{%refugee}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `camp`
        $this->createIndex(
            '{{%idx-refugee-camp}}',
            '{{%refugee}}',
            'camp'
        );

        // add foreign key for table `{{%refugee_camp}}`
        $this->addForeignKey(
            '{{%fk-refugee-camp}}',
            '{{%refugee}}',
            'camp',
            '{{%refugee_camp}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user_group}}`
        $this->dropForeignKey(
            '{{%fk-refugee-user_group_id}}',
            '{{%refugee}}'
        );

        // drops index for column `user_group_id`
        $this->dropIndex(
            '{{%idx-refugee-user_group_id}}',
            '{{%refugee}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-refugee-user_id}}',
            '{{%refugee}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-refugee-user_id}}',
            '{{%refugee}}'
        );

        // drops foreign key for table `{{%refugee_camp}}`
        $this->dropForeignKey(
            '{{%fk-refugee-camp}}',
            '{{%refugee}}'
        );

        // drops index for column `camp`
        $this->dropIndex(
            '{{%idx-refugee-camp}}',
            '{{%refugee}}'
        );

        $this->dropTable('{{%refugee}}');
    }
}
