<?php

use yii\db\Migration;

/**
 * Class m180303_144754_ATTACHMENTS
 */
class m180303_144754_ATTACHMENTS extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('CREATE TABLE `record_attachments`(  
          `id` INT(11) NOT NULL AUTO_INCREMENT,
          `record_id` INT(11) NOT NULL,
          `file` VARCHAR(256) NOT NULL,
          PRIMARY KEY (`id`),
          FOREIGN KEY (`record_id`) REFERENCES `patient_records`(`id`) ON DELETE CASCADE
        ) ENGINE=INNODB CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
        ');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180303_144754_ATTACHMENTS cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180303_144754_ATTACHMENTS cannot be reverted.\n";

        return false;
    }
    */
}
