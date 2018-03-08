<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Videocard;

/**
 * VideocardSearch represents the model behind the search form about `app\models\Videocard`.
 */
class VideocardSearch extends Videocard
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'size_video_memory', 'pci_count', 'pcie_count', 'power'], 'integer'],
            [['title', 'graphical_scheme', 'video_controler'], 'safe'],
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
        $query = Videocard::find();

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
            'size_video_memory' => $this->size_video_memory,
            'pci_count' => $this->pci_count,
            'pcie_count' => $this->pcie_count,
            'power' => $this->power,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'graphical_scheme', $this->graphical_scheme])
            ->andFilterWhere(['like', 'video_controler', $this->video_controler]);

        return $dataProvider;
    }
}
