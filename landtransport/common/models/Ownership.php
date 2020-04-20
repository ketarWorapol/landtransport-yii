<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ownership".
 *
 * @property int $id
 * @property string $prefix
 * @property string $name
 * @property string $idcard
 * @property string $phone
 * @property int $address_id
 * @property int $ems_id
 * @property string $pdf
 *
 * @property Car[] $cars
 */
class Ownership extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ownership';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address_id', 'ems_id'], 'integer'],
            [['prefix'], 'string', 'max' => 5],
            [['name', 'pdf'], 'string', 'max' => 200],
            [['idcard'], 'string', 'max' => 20],
            [['phone'], 'string', 'max' => 13],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prefix' => 'Prefix',
            'name' => 'Name',
            'idcard' => 'Idcard',
            'phone' => 'Phone',
            'address_id' => 'Address ID',
            'ems_id' => 'Ems ID',
            'pdf' => 'Pdf',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Car::className(), ['ownership_id' => 'id']);
    }
}
