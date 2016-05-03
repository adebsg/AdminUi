<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Profile_tag;

/**
 * Profile_tagSearch represents the model behind the search form about `backend\models\Profile_tag`.
 */
class Profile_tagSearch extends Profile_tag
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_profile', 'id_category'], 'integer'],
            [['detail_tag'], 'safe'],
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
        $query = Profile_tag::find();

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
            'id' => $this->id,
            'id_profile' => $this->id_profile,
            'id_category' => $this->id_category,
        ]);

        $query->andFilterWhere(['like', 'detail_tag', $this->detail_tag]);

        return $dataProvider;
    }
}
