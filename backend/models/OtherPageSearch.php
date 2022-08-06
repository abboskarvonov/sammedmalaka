<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OtherPage;

/**
 * OtherPageSearch represents the model behind the search form of `backend\models\OtherPage`.
 */
class OtherPageSearch extends OtherPage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'type'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'fish_uz', 'fish_ru', 'fish_en', 'phone', 'email', 'qabul_uz', 'qabul_ru', 'qabul_en', 'img', 'created_at', 'updated_at'], 'safe'],
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
        $query = OtherPage::find();

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
            'type' => $this->type,
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'fish_uz', $this->fish_uz])
            ->andFilterWhere(['like', 'fish_ru', $this->fish_ru])
            ->andFilterWhere(['like', 'fish_en', $this->fish_en])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'qabul_uz', $this->qabul_uz])
            ->andFilterWhere(['like', 'qabul_ru', $this->qabul_ru])
            ->andFilterWhere(['like', 'qabul_en', $this->qabul_en])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'created_at', $this->created_at])
            ->andFilterWhere(['like', 'updated_at', $this->updated_at]);

        return $dataProvider;
    }
}
