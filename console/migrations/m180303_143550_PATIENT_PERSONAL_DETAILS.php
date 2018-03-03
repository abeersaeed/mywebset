<?php

use yii\db\Migration;

/**
 * Class m180303_143550_PATIENT_PERSONAL_DETAILS
 */
class m180303_143550_PATIENT_PERSONAL_DETAILS extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('CREATE TABLE `patient_details`(  
          `id` INT(11) UNSIGNED NOT NULL,
          `user_id` INT(11) NOT NULL,
          `height` VARCHAR(256),
          `weight` VARCHAR(256),
          `bmi` VARCHAR(256),
          `date` VARCHAR(256),
          PRIMARY KEY (`id`),
          FOREIGN KEY (`user_id`) REFERENCES `user`(`id`) ON DELETE CASCADE
        ) ENGINE=INNODB CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
        ');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180303_143550_PATIENT_PERSONAL_DETAILS cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180303_143550_PATIENT_PERSONAL_DETAILS cannot be reverted.\n";

        return false;
    }
    */
}
