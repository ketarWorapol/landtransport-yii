<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%agent}}`.
 */
class m190601_154052_create_agent_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%agent}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(200),
            'phone' => $this->string(200), //before delete
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%agent}}');
    }
}
