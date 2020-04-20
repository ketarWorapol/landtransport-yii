<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%billDetail}}`.
 */
class m190616_132533_create_billDetail_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%billDetail}}', [
            'billdetailID' => $this->primaryKey(),
            'billID'=>$this->integer(),
            'billNo'=>$this->integer(),
            'listID'=>$this->integer(),
            'listPrice'=>$this->float(),
        ]);
        
        $this->addForeignKey('FK_BILLDETAIL_BILL', '{{%billDetail}}', '[[billID]]', '{{%bill}}', '[[pk_an]]');
        //$this->addForeignKey('FK_BILLDETAIL_LIST', '{{%billDetail}}', '[[listID]]', '{{%list}}', '[[id]]');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%billDetail}}');
    }
}
