<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Members;

/**
 * MembersSearch represents the model behind the search form about `app\models\Members`.
 */
class MembersSearch extends Members
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id',], 'integer'],
            [['status', 'name', 'inn', 'ogrn', 'date_append','reg_num','sro_state'], 'safe'],
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
        $query = Members::find();

        // add conditions that should always apply here
        $query->joinWith(['sro']);


        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['reg_num'] = [
            'asc' => ['sro.reg_num' => SORT_ASC],
            'desc' => ['sro.reg_num' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['sro_state'] = [
            'asc' => ['sro.state' => SORT_ASC],
            'desc' => ['sro.state' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date_append' => $this->date_append,
            
        ]);

        $query->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'inn', $this->inn])
            ->andFilterWhere(['like', 'ogrn', $this->ogrn])
            ->andFilterWhere(['like', 'sro.state', $this->sro_state])
            ->andFilterWhere(['like', 'sro.reg_num', $this->reg_num]);

        return $dataProvider;
    }
}
