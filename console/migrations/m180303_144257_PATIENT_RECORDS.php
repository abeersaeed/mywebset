<?php

use yii\db\Migration;

/**
 * Class m180303_144257_PATIENT_RECORDS
 */
class m180303_144257_PATIENT_RECORDS extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('CREATE TABLE `patient_records`(  
          `id` INT(11) NOT NULL AUTO_INCREMENT,
          `user_id` INT(11) NOT NULL,
          `test_name` VARCHAR(500) NOT NULL,
          `test_date` VARCHAR(256),
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
        echo "m180303_144257_PATIENT_RECORDS cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180303_144257_PATIENT_RECORDS cannot be reverted.\n";

        return false;
    }
    */
}
