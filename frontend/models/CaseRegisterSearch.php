<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\CaseRegister;

/**
 * CaseRegisterSearch represents the model behind the search form of `frontend\models\CaseRegister`.
 */
class CaseRegisterSearch extends CaseRegister
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'representing_lawyer', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['title', 'accused_name', 'accussed_idno', 'complainant_name', 'court'], 'safe'],
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
        $query = CaseRegister::find();

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
            'representing_lawyer' => $this->representing_lawyer,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'accused_name', $this->accused_name])
            ->andFilterWhere(['like', 'accussed_idno', $this->accussed_idno])
            ->andFilterWhere(['like', 'complainant_name', $this->complainant_name])
            ->andFilterWhere(['like', 'court', $this->court]);

        return $dataProvider;
    }
}
