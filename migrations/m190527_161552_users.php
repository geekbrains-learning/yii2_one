<?php

use yii\db\Migration;

/**
 * Class m190527_161552_users
 */
class m190527_161552_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute ("
        CREATE TABLE IF NOT EXISTS `users` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `login` VARCHAR(25) NOT NULL,
            `password` VARCHAR(40),
            `isUser` INT NOT NULL DEFAULT 0 COMMENT '0-user, 1-admin')"
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute ("
        DROP TABLE IF EXISTS `users`;"
        );

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190527_161552_users cannot be reverted.\n";

        return false;
    }
    */
}
