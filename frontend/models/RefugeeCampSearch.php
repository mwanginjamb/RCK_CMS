<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RefugeeCamp;

/**
 * RefugeeCampSearch represents the model behind the search form of `app\models\RefugeeCamp`.
 */
class RefugeeCampSearch extends RefugeeCamp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'county', 'subcounty', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['name', 'locality_description'], 'safe'],
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
        $query = RefugeeCamp::find();

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
            'county' => $this->county,
            'subcounty' => $this->subcounty,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'locality_description', $this->locality_description]);

        return $dataProvider;
    }
}
