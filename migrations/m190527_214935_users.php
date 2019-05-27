<?php

use yii\db\Migration;

/**
 * Class m190527_214935_users
 */
class m190527_214935_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute ("
        ALTER TABLE `users` 
        ADD COLUMN `auth_key` varchar(32) UNIQUE  NULL AFTER `isUser`,            
        ADD COLUMN `access_token` varchar(32) UNIQUE NULL AFTER `auth_key`;"
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute ("
        ALTER TABLE `users`
        DROP COLUMN `auth_key`,
        DROP COLUMN `access_token`; "
        );

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190527_214935_users cannot be reverted.\n";

        return false;
    }
    */
}
