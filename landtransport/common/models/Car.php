<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
/**
 * This is the model class for table "car".
 *
 * @property int $id
 * @property string $imp_date
 * @property string $exp_date
 * @property int $no
 * @property int $operator_id
 * @property int $category_id
 * @property string $number
 * @property string $prov
 * @property string $vat
 * @property int $status_id
 * @property int $brand_id
 * @property int $agent_id
 * @property int $ownership_id
 * @property int $lease_id
 * @property string $cassis
 * @property string $engine
 * @property int $weight
 * @property int $total_weight
 * @property int $rate
 * @property int $conclusion
 * @property string $conclusion_detail
 * @property int $created_at
 * @property int $created_by
 * @property int $updated_at
 * @property int $updated_by
 * @property string $carPDF
 * @property string $carLastUpdate
 *
 * @property Operator $operator
 * @property Agent $agent
 * @property Brand $brand
 * @property Category $category
 * @property Lease $lease
 * @property Ownership $ownership
 * @property Status $status
 */
class Car extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'car';
    }
    
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            BlameableBehavior::className(),
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no', 'operator_id', 'category_id', 'status_id', 'brand_id', 'agent_id', 'ownership_id', 'lease_id', 'weight', 'total_weight', 'rate', 'conclusion', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['imp_date', 'exp_date', 'number'], 'string', 'max' => 50],
            [['prov', 'vat'], 'string', 'max' => 5],
            [['cassis', 'engine'], 'string', 'max' => 30],
            [['conclusion_detail', 'carPDF'], 'string', 'max' => 200],
            [['carLastUpdate'], 'string', 'max' => 100],
            [['operator_id'], 'exist', 'skipOnError' => true, 'targetClass' => Operator::className(), 'targetAttribute' => ['operator_id' => 'id']],
            [['agent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Agent::className(), 'targetAttribute' => ['agent_id' => 'id']],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['brand_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['lease_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lease::className(), 'targetAttribute' => ['lease_id' => 'id']],
            [['ownership_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ownership::className(), 'targetAttribute' => ['ownership_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imp_date' => 'Imp Date',
            'exp_date' => 'Exp Date',
            'no' => 'No',
            'operator_id' => 'Operator ID',
            'category_id' => 'Category ID',
            'number' => 'Number',
            'prov' => 'Prov',
            'vat' => 'Vat',
            'status_id' => 'Status ID',
            'brand_id' => 'Brand ID',
            'agent_id' => 'Agent ID',
            'ownership_id' => 'Ownership ID',
            'lease_id' => 'Lease ID',
            'cassis' => 'Cassis',
            'engine' => 'Engine',
            'weight' => 'Weight',
            'total_weight' => 'Total Weight',
            'rate' => 'Rate',
            'conclusion' => 'Conclusion',
            'conclusion_detail' => 'Conclusion Detail',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'carPDF' => 'Car Pdf',
            'carLastUpdate' => 'Car Last Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperator()
    {
        return $this->hasOne(Operator::className(), ['id' => 'operator_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgent()
    {
        return $this->hasOne(Agent::className(), ['id' => 'agent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLease()
    {
        return $this->hasOne(Lease::className(), ['id' => 'lease_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwnership()
    {
        return $this->hasOne(Ownership::className(), ['id' => 'ownership_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }
}
