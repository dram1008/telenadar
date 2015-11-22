<?php

use yii\db\Schema;
use yii\db\Migration;

class m151121_214132_product extends Migration
{
    public function up()
    {
        $this->execute('CREATE TABLE `tel_product` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `content` longtext,
  `date_insert` int DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `view_counter` int(11) DEFAULT NULL,
  `tree_node_id` int(11) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8');
    }

    public function down()
    {
        echo "m151121_214132_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
