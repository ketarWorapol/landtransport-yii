<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%operation}}`.
 */
class m190601_154420_create_operation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%operation}}', [
            'id' => $this->primaryKey(),
            'car_id' => $this->integer(),
            'operation_date' => $this->date(),
            'detail' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%operation}}');
    }
}
