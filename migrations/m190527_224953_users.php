<?php

use yii\db\Migration;

/**
 * Class m190527_224953_users
 */
class m190527_224953_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute ("
        ALTER TABLE `users`
        RENAME COLUMN `login` TO `username`;"
    );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute ("
        ALTER TABLE `users`
        RENAME COLUMN `username` TO `login`;"
    );
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190527_224953_users cannot be reverted.\n";

        return false;
    }
    */
}
