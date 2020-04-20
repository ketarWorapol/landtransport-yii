<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Car;

/**
 * CarSearch represents the model behind the search form of `backend\models\Car`.
 */
class CarSearch extends Car
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'no', 'operator_id', 'category_id', 'status_id', 'brand_id', 'agent_id', 'ownership_id', 'lease_id', 'weight', 'total_weight', 'rate', 'conclusion', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['imp_date', 'exp_date', 'number', 'prov', 'vat', 'cassis', 'engine', 'conclusion_detail', 'carPDF', 'carLastUpdate'], 'safe'],
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
        $query = Car::find();

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
            'id' => $this->id,
            'no' => $this->no,
            'operator_id' => $this->operator_id,
            'category_id' => $this->category_id,
            'status_id' => $this->status_id,
            'brand_id' => $this->brand_id,
            'agent_id' => $this->agent_id,
            'ownership_id' => $this->ownership_id,
            'lease_id' => $this->lease_id,
            'weight' => $this->weight,
            'total_weight' => $this->total_weight,
            'rate' => $this->rate,
            'conclusion' => $this->conclusion,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'imp_date', $this->imp_date])
            ->andFilterWhere(['like', 'exp_date', $this->exp_date])
            ->andFilterWhere(['like', 'number', $this->number])
            ->andFilterWhere(['like', 'prov', $this->prov])
            ->andFilterWhere(['like', 'vat', $this->vat])
            ->andFilterWhere(['like', 'cassis', $this->cassis])
            ->andFilterWhere(['like', 'engine', $this->engine])
            ->andFilterWhere(['like', 'conclusion_detail', $this->conclusion_detail])
            ->andFilterWhere(['like', 'carPDF', $this->carPDF])
            ->andFilterWhere(['like', 'carLastUpdate', $this->carLastUpdate]);

        return $dataProvider;
    }
}
