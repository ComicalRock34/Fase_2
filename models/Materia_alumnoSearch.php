<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MateriaAlumno;

/**
 * Materia_alumnoSearch represents the model behind the search form of `app\models\MateriaAlumno`.
 */
class Materia_alumnoSearch extends MateriaAlumno
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_materia_alumno', 'id_materia', 'id_alumno'], 'integer'],
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
        $query = MateriaAlumno::find();

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
            'id_materia_alumno' => $this->id_materia_alumno,
            'id_materia' => $this->id_materia,
            'id_alumno' => $this->id_alumno,
        ]);

        return $dataProvider;
    }
}
