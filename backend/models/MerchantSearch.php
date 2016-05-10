<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Merchant;

/**
 * MerchantSearch represents the model behind the search form about `backend\models\Merchant`.
 */
class MerchantSearch extends Merchant
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_merchant'], 'integer'],
            [['merchant_name'], 'safe'],
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
        $query = Merchant::find();

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
            'id_merchant' => $this->id_merchant,
        ]);

        $query->andFilterWhere(['like', 'merchant_name', $this->merchant_name]);

        return $dataProvider;
    }
}
