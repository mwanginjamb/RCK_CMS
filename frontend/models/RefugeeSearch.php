<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Refugee;

/**
 * RefugeeSearch represents the model behind the search form of `app\models\Refugee`.
 */
class RefugeeSearch extends Refugee
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'first_name', 'middle_name', 'last_name', 'image', 'cell_number', 'email_address','camp','gender','demography_id','country_of_origin'], 'safe'],
            [['user_group_id', 'user_id','date_of_birth', 'id_type', 'conflict', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
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
        $query = Refugee::find();

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

        /*My Customp Search relations*/

        $query->joinWith('rcamp'); // add refugee camp relation in the search model
        $query->joinWith('rcountry'); //add country relation
        $query->joinWith('rdemography'); //add demography relation
        $query->joinWith('rgender'); //add gender relation


        // grid filtering conditions
        $query->andFilterWhere([
            'user_group_id' => $this->user_group_id,
            'user_id' => $this->user_id,
            //'camp' => $this->camp,
            //'gender' => $this->gender,
            //'country_of_origin' => $this->country_of_origin,
            //'demography_id' => $this->demography_id,
            'date_of_birth' => $this->date_of_birth,
            'id_type' => $this->id_type,
            'conflict' => $this->conflict,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'cell_number', $this->cell_number])
            ->andFilterWhere(['like', 'email_address', $this->email_address])
            ->andFilterWhere(['like', 'refugee_camp.name', $this->camp]) // modification to search on a relation field
            ->andFilterWhere(['like', 'gender.gender', $this->gender]) // modification to search on a relation field
            ->andFilterWhere(['like', 'demographics.demography', $this->demography_id]) // modification to search on a relation field
            ->andFilterWhere(['like', 'country.country', $this->country_of_origin]); // modification to search on a relation field

        return $dataProvider;
    }
}
