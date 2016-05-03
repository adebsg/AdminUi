<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Profile_detail;

/**
 * Profile_detailSearch represents the model behind the search form about `backend\models\Profile_detail`.
 */
class Profile_detailSearch extends Profile_detail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_profile', 'id_category', 'id_profile_tag'], 'integer'],
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
        $query = Profile_detail::find();

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
            'id_profile_tag' => $this->id_profile_tag,
        ]);

        return $dataProvider;
    }
}
