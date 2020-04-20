<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%lease}}`.
 */
class m190601_154712_create_lease_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%lease}}', [
            'id' => $this->primaryKey(),
            'prefix'=>$this->string(5),
            'name'=>$this->string(200),
            'idcard'=>$this->string(20),
            'phone'=>$this->string(13),
            'address_id'=>$this->integer(),
            'ems_id'=>$this->integer(),
            'pdf'=>$this->string(200),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%lease}}');
    }
}
