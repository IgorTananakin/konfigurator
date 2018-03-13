<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Basket;

/**
 * BasketSearch represents the model behind the search form about `app\models\Basket`.
 */
class BasketSearch extends Basket
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'assembly_id', 'processor_id', 'ram_id', 'hard_disk_id', 'driver_id', 'video_card_id', 'cooling_system_id', 'sound_id', 'power_supply_id', 'network_card_id', 'corpus_id'], 'integer'],
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
        $query = Basket::find();

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
            'assembly_id' => $this->assembly_id,
            'processor_id' => $this->processor_id,
            'ram_id' => $this->ram_id,
            'hard_disk_id' => $this->hard_disk_id,
            'driver_id' => $this->driver_id,
            'video_card_id' => $this->video_card_id,
            'cooling_system_id' => $this->cooling_system_id,
            'sound_id' => $this->sound_id,
            'power_supply_id' => $this->power_supply_id,
            'network_card_id' => $this->network_card_id,
            'corpus_id' => $this->corpus_id,
        ]);

        return $dataProvider;
    }
}
