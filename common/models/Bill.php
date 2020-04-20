<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bill".
 *
 * @property int $pk_an
 * @property int $billID
 * @property int $operID
 * @property string $billDate
 * @property int $cusID
 * @property int $cusType
 * @property string $cusName
 * @property string $carNumber
 * @property string $billAmount
 * @property int $billStatus
 * @property string $carNote
 * @property string $datePrice
 * @property string $dtEdit
 * @property string $edFrom
 * @property int $memID
 */
class Bill extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bill';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pk_an', 'billID'], 'required'],
            [['pk_an', 'billID', 'operID', 'cusID', 'cusType', 'billStatus', 'memID'], 'integer'],
            [['billAmount'], 'number'],
            [['billDate', 'cusName', 'carNumber', 'carNote'], 'string', 'max' => 255],
            [['datePrice'], 'string', 'max' => 40],
            [['dtEdit', 'edFrom'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pk_an' => 'Pk An',
            'billID' => 'Bill ID',
            'operID' => 'Oper ID',
            'billDate' => 'Bill Date',
            'cusID' => 'Cus ID',
            'cusType' => 'Cus Type',
            'cusName' => 'Cus Name',
            'carNumber' => 'Car Number',
            'billAmount' => 'Bill Amount',
            'billStatus' => 'Bill Status',
            'carNote' => 'Car Note',
            'datePrice' => 'Date Price',
            'dtEdit' => 'Dt Edit',
            'edFrom' => 'Ed From',
            'memID' => 'Mem ID',
        ];
    }
}
