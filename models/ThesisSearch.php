<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Thesis;

/**
 * ThesisSearch represents the model behind the search form of `app\models\Thesis`.
 */
class ThesisSearch extends Thesis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl', 'evaluasi', 'catatan', 'user'], 'safe'],
            [['id'], 'integer'],
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
        $query = Thesis::find();

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
            'tgl' => $this->tgl,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'evaluasi', $this->evaluasi])
            ->andFilterWhere(['like', 'catatan', $this->catatan])
            ->andFilterWhere(['like', 'user', $this->user]);

        return $dataProvider;
    }
}
