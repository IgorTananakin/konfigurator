<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Motherboard;

/**
 * MotherboardSearch represents the model behind the search form about `app\models\Motherboard`.
 */
class MotherboardSearch extends Motherboard
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pci_count', 'ide_count', 'socket_id', 'power'], 'integer'],
            [['title', 'sound', 'graphical_scheme'], 'safe'],
            [['price'], 'number'],
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
        $query = Motherboard::find();

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
            'price' => $this->price,
            'pci_count' => $this->pci_count,
            'ide_count' => $this->ide_count,
            'socket_id' => $this->socket_id,
            'power' => $this->power,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'sound', $this->sound])
            ->andFilterWhere(['like', 'graphical_scheme', $this->graphical_scheme]);

        return $dataProvider;
    }
}
