<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Maestro;

/**
 * MaestroSearch represents the model behind the search form of `app\models\Maestro`.
 */
class MaestroSearch extends Maestro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_maestro'], 'integer'],
            [['nombre', 'app', 'apm'], 'safe'],
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
        $query = Maestro::find();

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
            'id_maestro' => $this->id_maestro,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'app', $this->app])
            ->andFilterWhere(['like', 'apm', $this->apm]);

        return $dataProvider;
    }
}
