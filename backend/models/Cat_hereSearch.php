<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Cat_here;

/**
 * Cat_hereSearch represents the model behind the search form about `backend\models\Cat_here`.
 */
class Cat_hereSearch extends Cat_here
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'icon', 'type', 'href', 'system', 'within'], 'safe'],
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
        $query = Cat_here::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'icon', $this->icon])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'href', $this->href])
            ->andFilterWhere(['like', 'system', $this->system])
            ->andFilterWhere(['like', 'within', $this->within]);

        return $dataProvider;
    }
}
