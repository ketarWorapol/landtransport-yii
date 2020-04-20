<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Bill;

/**
 * BillSearch represents the model behind the search form of `backend\models\Bill`.
 */
class BillSearch extends Bill
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pk_an', 'billID', 'operID', 'cusID', 'cusType', 'billStatus', 'memID'], 'integer'],
            [['billDate', 'cusName', 'carNumber', 'carNote', 'datePrice', 'dtEdit', 'edFrom'], 'safe'],
            [['billAmount'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Bill::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'pk_an' => $this->pk_an,
            'billID' => $this->billID,
            'operID' => $this->operID,
            'cusID' => $this->cusID,
            'cusType' => $this->cusType,
            'billAmount' => $this->billAmount,
            'billStatus' => $this->billStatus,
            'memID' => $this->memID,
        ]);

        $query->andFilterWhere(['like', 'billDate', $this->billDate])
            ->andFilterWhere(['like', 'cusName', $this->cusName])
            ->andFilterWhere(['like', 'carNumber', $this->carNumber])
            ->andFilterWhere(['like', 'carNote', $this->carNote])
            ->andFilterWhere(['like', 'datePrice', $this->datePrice])
            ->andFilterWhere(['like', 'dtEdit', $this->dtEdit])
            ->andFilterWhere(['like', 'edFrom', $this->edFrom]);

        return $dataProvider;
    }
}
