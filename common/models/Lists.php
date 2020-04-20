<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lists".
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property int $rate
 */
class Lists extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lists';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'rate'], 'integer'],
            [['price'], 'number'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'rate' => 'Rate',
        ];
    }
}
