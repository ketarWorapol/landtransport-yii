<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bill}}`.
 */
class m190616_132528_create_bill_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bill}}', [
            'pk_an' => $this->primaryKey(),
            'billID'=>$this->integer(),
            'operID'=>$this->integer(),
            'billDate'=>$this->string(255),
            'cusID'=>$this->integer(),
            'cusType'=>$this->integer(),
            'cusName'=>$this->string(255),
            'carNumber'=>$this->string(255),
            'billAmount'=>$this->float(),
            'billStatus'=>$this->smallInteger(),
            'carNote'=>$this->string(255),
            'datePrice'=>$this->string(255),
            'dtEdit'=>$this->string(255),
            'edFrom'=>$this->string(255),
            'memID'=>$this->integer(),
        ]);

        //$this->addForeignKey('FK_CARS_OPERATOR', '{{%operator}}', '[[id]]', '{{%bill}}', '[[operID]]');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bill}}');
    }
}
