<?php

use yii\db\Migration;

/**
 * Class m180303_104005_USER_PROFILE
 */
class m180303_104005_USER_PROFILE extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('CREATE TABLE `user_profile`(  
          `id` INT(11) NOT NULL AUTO_INCREMENT,
          `user_id` INT(11) NOT NULL,
          `first_name` VARCHAR(256) NOT NULL,
          `last_name` VARCHAR(256) NOT NULL,
          `picture` VARCHAR(256),
          PRIMARY KEY (`id`)
        ) ENGINE=INNODB CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
        ');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180303_104005_USER_PROFILE cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180303_104005_USER_PROFILE cannot be reverted.\n";

        return false;
    }
    */
}
