<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Tag;

/**
 * TagSearch represents the model behind the search form about `backend\models\Tag`.
 */
class TagSearch extends Tag
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'category'], 'integer'],
            [['tag_name'], 'safe'],
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
        $query = Tag::find();
		
        $query->joinWith(['category']);
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
		
        // Lets do the same with country now
        $dataProvider->sort->attributes['category'] = [
        	'asc' => ['category.category_name' => SORT_ASC],
        	'desc' => ['category.category_name' => SORT_DESC],
        ];
        
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_category' => $this->id_category,
        ]);

        $query->andFilterWhere(['like', 'tag_name', $this->tag_name]);

        $query->andFilterWhere(['like', 'category.category_name', $this->category]);
        
        return $dataProvider;
    }
}
