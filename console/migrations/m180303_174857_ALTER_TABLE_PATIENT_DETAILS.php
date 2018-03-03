<?php

use yii\db\Migration;

/**
 * Class m180303_174857_ALTER_TABLE_PATIENT_DETAILS
 */
class m180303_174857_ALTER_TABLE_PATIENT_DETAILS extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('
            ALTER TABLE `patient_details` 
            change `id` `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT
        ');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180303_174857_ALTER_TABLE_PATIENT_DETAILS cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180303_174857_ALTER_TABLE_PATIENT_DETAILS cannot be reverted.\n";

        return false;
    }
    */
}
