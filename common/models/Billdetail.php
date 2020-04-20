<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "billdetail".
 *
 * @property int $billdetailID
 * @property int $billID
 * @property int $billNo
 * @property int $listID
 * @property string $listPrice
 */
class Billdetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'billdetail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['billdetailID'], 'required'],
            [['billdetailID', 'billID', 'billNo', 'listID'], 'integer'],
            [['listPrice'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'billdetailID' => 'Billdetail ID',
            'billID' => 'Bill ID',
            'billNo' => 'Bill No',
            'listID' => 'List ID',
            'listPrice' => 'List Price',
        ];
    }
}
