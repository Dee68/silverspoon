<?php

use yii\db\Migration;

class m170308_101251_create_profile extends Migration
{
    public function up()
    {
      $this->createTable('profile',[
        'id'=>$this->primaryKey(),
        'user_id'=>$this->integer()->notNull(),
        'firstname'=>$this->string(100),
        'lastname'=>$this->string(100),
        'address'=>$this->text(),
        'avatar'=>$this->string(100)]);
      //create  index user_id
      $this->createIndex(
        'idx-profile-user_id',
        'profile',
        'user_id');
      //add foreign key for user table
      $this->addForeignKey(
        'fk-profile-user_id',
        'profile',
        'user_id',
        'user',
        'id',
        'CASCADE');
    }

    public function down()
    {
        echo "m170308_101251_create_profile cannot be reverted.\n";

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
