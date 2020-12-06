<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Counties;

/**
 * CountiesSearch represents the model behind the search form of `app\models\Counties`.
 */
class CountiesSearch extends Counties
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CountyID', 'RegionID', 'CreatedBy'], 'integer'],
            [['CountyName', 'Notes', 'CreatedDate'], 'safe'],
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
        $query = Counties::find();

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
            'CountyID' => $this->CountyID,
            'RegionID' => $this->RegionID,
            'CreatedDate' => $this->CreatedDate,
            'CreatedBy' => $this->CreatedBy,
        ]);

        $query->andFilterWhere(['like', 'CountyName', $this->CountyName])
            ->andFilterWhere(['like', 'Notes', $this->Notes]);

        return $dataProvider;
    }
}
