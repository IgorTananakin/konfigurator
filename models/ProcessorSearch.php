<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Processor;

/**
 * ProcessorSearch represents the model behind the search form of `app\models\Processor`.
 */
class ProcessorSearch extends Processor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'socket_id', 'price', 'digit_capacity', 'keh_memory', 'load', 'power'], 'integer'],
            [['title', 'image'], 'safe'],
            [['frequency'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Processor::find();

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
            'socket_id' => $this->socket_id,
            'price' => $this->price,
            'frequency' => $this->frequency,
            'digit_capacity' => $this->digit_capacity,
            'keh_memory' => $this->keh_memory,
            'load' => $this->load,
            'power' => $this->power,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
