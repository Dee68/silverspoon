<?php

use yii\db\Migration;

class m170308_140432_create_category extends Migration
{
    public function up()
    {
     $this->createTable('category',[
        'id'=>$this->primaryKey(),
        'parent_id'=>$this->integer()->notNull(),
        'name'=>$this->string(100)->notNull()]);
     //create index for parent_id
     $this->createIndex(
        'idx-category-parent_id',
        'category',
        'parent_id');
     //add foreign key for parentCategory
     $this->addForeignKey(
        'fk-category-parent_id',
        'category',
        'parent_id',
        'parentCategory',
        'id',
        'CASCADE');
    }

    public function down()
    {
        //echo "m170308_140432_create_category cannot be reverted.\n";

        //return false;
        //drop foreign key for parentCategory table
        $this->dropForeignKey('fk-category-parent_id','category');
        //drop index for parent_id column
        $this->dropIndex('idx-category-parent_id','category');
        //drop category table
        $this->dropTable('category');
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
