<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%defaultsetting}}`.
 */
class m190601_154454_create_defaultsetting_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%defaultsetting}}', [
            'id' => $this->primaryKey(),
            'default_attribute'=>$this->string(200),
            'default_value'=>$this->string(200),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%defaultsetting}}');
    }
}
