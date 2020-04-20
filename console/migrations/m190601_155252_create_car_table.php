<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%car}}`.
 */
class m190601_155252_create_car_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%car}}', [
            'id' => $this->primaryKey(),
            'imp_date' => $this->string(50),
            'exp_date' => $this->string(50),
            'no' => $this->integer(),
            'operator_id' => $this->integer(),
            'category_id' => $this->integer(),
            'number' => $this->string(50),
            'prov' => $this->string(5),
            'vat' => $this->string(5),
            'status_id' => $this->integer(),
            'brand_id' => $this->integer(),
            'agent_id' => $this->integer(),
            'ownership_id' => $this->integer(),
            'lease_id' => $this->integer(),
            'cassis' => $this->string(30),
            'engine' => $this->string(30),
            'weight' => $this->integer(),
            'total_weight' => $this->integer(),
            'rate' => $this->integer(),
            'conclusion' => $this->integer(),
            'conclusion_detail' => $this->string(200),
            
            'created_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_at' => $this->integer(),            
            'updated_by' => $this->integer(),
            'carPDF' => $this->string(200),
            'carLastUpdate' => $this->string(100),
        ]);
        
        $this->addForeignKey('FK_CARS_OPERATOR', '{{%car}}', '[[operator_id]]', '{{%operator}}', '[[id]]');
        $this->addForeignKey('FK_ID_CATEGORY', '{{%car}}', '[[category_id]]', '{{%category}}', '[[id]]');
        $this->addForeignKey('FK_ID_STATUS', '{{%car}}', '[[status_id]]', '{{%status}}', '[[id]]');
        $this->addForeignKey('FK_ID_BRAND', '{{%car}}', '[[brand_id]]', '{{%brand}}', '[[id]]');
        $this->addForeignKey('FK_ID_AGENT', '{{%car}}', '[[agent_id]]', '{{%agent}}', '[[id]]');
        $this->addForeignKey('FK_ID_OWNERSHIP', '{{%car}}', '[[ownership_id]]', '{{%ownership}}', '[[id]]');     
	$this->addForeignKey('FK_ID_LEASE', '{{%car}}', '[[lease_id]]', '{{%lease}}', '[[id]]'); 
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%car}}');
    }
}
