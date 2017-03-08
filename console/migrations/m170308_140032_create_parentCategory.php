<?php

use yii\db\Migration;

class m170308_140032_create_parentCategory extends Migration
{
    public function up()
    {
     $this->createTable('parentCategory',[
        'id'=>$this->primaryKey(),
        'name'=>$this->string(100)->notNull()]);
    }

    public function down()
    {
        echo "m170308_140032_create_parentCategory cannot be reverted.\n";

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
