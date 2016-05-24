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
	public $category;
	
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_profile', 'category', 'id_profile_tag'], 'integer'],
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

        $query->joinWith(['category']);
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        // Lets do the same with country now
        $dataProvider->sort->attributes['category'] = [
        	'asc' => ['category.category_name' => SORT_ASC],
        	'desc' => ['category.category_name' => SORT_DESC],
        ];
        
        //$dataProvider->sort = [ 'defaultOrder' => [ 'tbl_city.name' => SORT_ASC, ] ];
        
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

        $query->andFilterWhere(['like', 'category.category_name', $this->category]);
        
        return $dataProvider;
    }
}
