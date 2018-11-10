<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Object;

/**
 * ObjectSearch represents the model behind the search form of `common\models\Object`.
 */
class ObjectSearch extends Object
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['object_id', 'category_id'], 'integer'],
            [['object_name', 'location', 'address', 'short_info', 'full_info'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Object::find();

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
            'object_id' => $this->object_id,
            'category_id' => $this->category_id,
        ]);

        $query->andFilterWhere(['like', 'object_name', $this->object_name])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'short_info', $this->short_info])
            ->andFilterWhere(['like', 'full_info', $this->full_info]);

        return $dataProvider;
    }
}
