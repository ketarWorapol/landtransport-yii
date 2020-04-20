<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%operator}}`.
 */
class m190601_154253_create_operator_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%operator}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%operator}}');
    }
}
