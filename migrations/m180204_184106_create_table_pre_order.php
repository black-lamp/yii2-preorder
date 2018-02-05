<?php

use yii\db\Migration;


/**
 * Class m180204_184106_create_table_pre_order
 */
class m180204_184106_create_table_pre_order extends Migration
{
    /**
     * @inheritdoc

     */
    public function safeUp()
    {
        $this->createTable('preorder', [
            'id' =>  $this->string(),
            'phone_number' => $this->integer(),
            'description' => $this->string(),
            'created_at'=> 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at'=>$this->timestamp()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        return $this->dropTable('preorder');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180204_184106_create_table_pre_order cannot be reverted.\n";

        return false;
    }
    */
}
