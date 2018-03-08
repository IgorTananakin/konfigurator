<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Assembly;

/**
 * AssemblySearch represents the model behind the search form about `app\models\Assembly`.
 */
class AssemblySearch extends Assembly
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'sound_card_id', 'video_card_id', 'ram_id', 'processor_id', 'hard_disc_id', 'driver_id', 'motherboard_id', 'power_supply_id', 'cooling_system_id', 'corpus_id', 'network_card_id'], 'integer'],
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
        $query = Assembly::find();

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
            'sound_card_id' => $this->sound_card_id,
            'video_card_id' => $this->video_card_id,
            'ram_id' => $this->ram_id,
            'processor_id' => $this->processor_id,
            'hard_disc_id' => $this->hard_disc_id,
            'driver_id' => $this->driver_id,
            'motherboard_id' => $this->motherboard_id,
            'power_supply_id' => $this->power_supply_id,
            'cooling_system_id' => $this->cooling_system_id,
            'corpus_id' => $this->corpus_id,
            'network_card_id' => $this->network_card_id,
        ]);

        return $dataProvider;
    }
}
