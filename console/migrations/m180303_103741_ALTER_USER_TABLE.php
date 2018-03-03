<?php

use yii\db\Migration;

/**
 * Class m180303_103741_ALTER_USER_TABLE
 */
class m180303_103741_ALTER_USER_TABLE extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('ALTER TABLE `user`   
          ADD COLUMN `type` TINYINT(5) NULL AFTER `updated_at`;
        ');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180303_103741_ALTER_USER_TABLE cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180303_103741_ALTER_USER_TABLE cannot be reverted.\n";

        return false;
    }
    */
}
