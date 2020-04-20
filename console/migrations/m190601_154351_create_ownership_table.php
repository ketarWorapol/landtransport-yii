<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ownership}}`.
 */
class m190601_154351_create_ownership_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ownership}}', [
            'id' => $this->primaryKey(),
            'prefix'=>$this->string(5),
            'name'=>$this->string(200),
            'idcard'=>$this->string(20),
            'phone'=>$this->string(13),
            'address_id'=>$this->integer(),
            'ems_id'=>$this->integer(),
            'pdf'=>$this->string(200),
            'addrs'=>$this->integer(), //wait delete;
            'ems'=>$this->integer(), //wait delete;
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ownership}}');
    }
}
