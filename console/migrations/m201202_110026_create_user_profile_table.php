<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_profile}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user_group}}`
 * - `{{%user}}`
 * - `{{%work_station}}`
 */
class m201202_110026_create_user_profile_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_profile}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(50)->notNull(),
            'middle_name' => $this->string(50),
            'last_name' => $this->string(50)->notNull(),
            'user_group_id' => $this->integer()->notNull(),
            'user_id' => $this->integer(),
            'image' => $this->string(150),
            'station' => $this->integer(),
            'cell_number' => $this->string(15),
            'email_address' => $this->string(50),
            'gender' => $this->integer(1)->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);

        // creates index for column `user_group_id`
        $this->createIndex(
            '{{%idx-user_profile-user_group_id}}',
            '{{%user_profile}}',
            'user_group_id'
        );

        // add foreign key for table `{{%user_group}}`
        $this->addForeignKey(
            '{{%fk-user_profile-user_group_id}}',
            '{{%user_profile}}',
            'user_group_id',
            '{{%user_group}}',
            'id',
            'CASCADE'
        );

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-user_profile-user_id}}',
            '{{%user_profile}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-user_profile-user_id}}',
            '{{%user_profile}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `station`
        $this->createIndex(
            '{{%idx-user_profile-station}}',
            '{{%user_profile}}',
            'station'
        );

        // add foreign key for table `{{%work_station}}`
        $this->addForeignKey(
            '{{%fk-user_profile-station}}',
            '{{%user_profile}}',
            'station',
            '{{%work_station}}',
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
            '{{%fk-user_profile-user_group_id}}',
            '{{%user_profile}}'
        );

        // drops index for column `user_group_id`
        $this->dropIndex(
            '{{%idx-user_profile-user_group_id}}',
            '{{%user_profile}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-user_profile-user_id}}',
            '{{%user_profile}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-user_profile-user_id}}',
            '{{%user_profile}}'
        );

        // drops foreign key for table `{{%work_station}}`
        $this->dropForeignKey(
            '{{%fk-user_profile-station}}',
            '{{%user_profile}}'
        );

        // drops index for column `station`
        $this->dropIndex(
            '{{%idx-user_profile-station}}',
            '{{%user_profile}}'
        );

        $this->dropTable('{{%user_profile}}');
    }
}
