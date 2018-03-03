<?php

use yii\db\Migration;

/**
 * Class m180303_114708_ALTER_USER_PROFILE
 */
class m180303_114708_ALTER_USER_PROFILE extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('ALTER TABLE `user_profile`  
          ADD FOREIGN KEY (`user_id`) REFERENCES `user`(`id`) ON DELETE CASCADE;
        ');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180303_114708_ALTER_USER_PROFILE cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180303_114708_ALTER_USER_PROFILE cannot be reverted.\n";

        return false;
    }
    */
}
