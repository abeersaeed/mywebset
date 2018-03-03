<?php

use yii\db\Migration;

/**
 * Class m180303_142937_ALTER_USER_PROFILE
 */
class m180303_142937_ALTER_USER_PROFILE extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('ALTER TABLE `user_profile`   
          ADD COLUMN `gender` TINYINT(3) NULL AFTER `picture`,
          ADD COLUMN `dob` VARCHAR(256) NULL AFTER `gender`,
          ADD COLUMN `country` VARCHAR(256) NULL AFTER `dob`,
          ADD COLUMN `city` VARCHAR(256) NULL AFTER `country`,
          ADD COLUMN `zip_code` VARCHAR(256) NULL AFTER `city`
        ');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180303_142937_ALTER_USER_PROFILE cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180303_142937_ALTER_USER_PROFILE cannot be reverted.\n";

        return false;
    }
    */
}
