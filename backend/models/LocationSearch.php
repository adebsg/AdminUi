<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Location;

/**
 * LocationSearch represents the model behind the search form about `backend\models\Location`.
 */
class LocationSearch extends Location
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_location', 'category_id', 'isPromo'], 'integer'],
            [['location_name', 'location_address', 'phone', 'photo', 'id_location_here', 'description', 'location_tag'], 'safe'],
            [['latitude', 'longitude'], 'number'],
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
        $query = Location::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_location' => $this->id_location,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'category_id' => $this->category_id,
            'isPromo' => $this->isPromo,
        ]);

        $query->andFilterWhere(['like', 'location_name', $this->location_name])
            ->andFilterWhere(['like', 'location_address', $this->location_address])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'id_location_here', $this->id_location_here])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'location_tag', $this->location_tag]);

        return $dataProvider;
    }
}
