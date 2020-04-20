<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "operation".
 *
 * @property int $id
 * @property int $car_id
 * @property string $operation_date
 * @property string $detail
 */
class Operation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'operation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['car_id'], 'integer'],
            [['operation_date'], 'safe'],
            [['detail'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'car_id' => 'Car ID',
            'operation_date' => 'Operation Date',
            'detail' => 'Detail',
        ];
    }
}
