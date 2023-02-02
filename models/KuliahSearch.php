<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kuliah;

/**
 * KuliahSearch represents the model behind the search form of `app\models\Kuliah`.
 */
class KuliahSearch extends Kuliah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['materi', 'pengampu', 'tgl', 'keterangan'], 'safe'],
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
        $query = Kuliah::find();

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

        $query->andFilterWhere(['like', 'materi', $this->materi])
            ->andFilterWhere(['like', 'pengampu', $this->pengampu])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
