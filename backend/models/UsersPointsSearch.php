<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\UsersPoints;

/**
 * UsersPointsSearch represents the model behind the search form of `backend\models\UsersPoints`.
 */
class UsersPointsSearch extends UsersPoints
{
    /**
     * {@inheritdoc}
     */

    public $user;
    public function rules()
    {
        return [
            [['id', 'user_id', 'points', 'status', 'created_by', 'updated_by', 'source', 'amount'], 'integer'],
            [['created_at', 'updated_at', 'transaction_date', 'notes', 'user'], 'safe'],
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
        $query = UsersPoints::find();
        $query->joinWith(['user']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->sort->attributes['user'] = [
            'asc'  => ['users.name' => SORT_ASC],
            'desc' => ['users.name' => SORT_DESC],
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
            'user_id' => $this->user_id,
            'points' => $this->points,
            'users_points.status' => 1,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
            'source' => $this->source,
            'amount' => $this->amount,
            'transaction_date' => $this->transaction_date,
        ]);

        $query->andFilterWhere(['like', 'notes', $this->notes]);

        $query->andFilterWhere(['like', 'users.name', $this->user]);
        return $dataProvider;
    }
}
