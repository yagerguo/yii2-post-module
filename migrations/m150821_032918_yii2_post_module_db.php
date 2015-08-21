<?php

use yii\db\Schema;
use yii\db\Migration;

class m150821_032918_yii2_post_module_db extends Migration {

    public function up() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%post}}', [
            'id' => Schema::TYPE_PK,
            'categoryId' => Schema::TYPE_INTEGER,
            'slug' => Schema::TYPE_STRING . '(200) DEFAULT ""',
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'status' => Schema::TYPE_INTEGER . '(1) unsigned NOT NULL DEFAULT "0"',
            'content' => Schema::TYPE_TEXT . ' NOT NULL',
            'createdAt' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updatedAt' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);
        
        $this->createTable('{{%post_category}}', [
            'id' => Schema::TYPE_PK,
            'slug' => Schema::TYPE_STRING . '(200) DEFAULT ""',
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'status' => Schema::TYPE_INTEGER . '(1) unsigned NOT NULL DEFAULT "0"',
        ], $tableOptions);

    }

    public function down() {
        $this->dropTable('{{%post}}');
        $this->dropTable('{{%post_category}}');
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
