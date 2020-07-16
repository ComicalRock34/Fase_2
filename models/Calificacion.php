<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "calificacion".
 *
 * @property int $id_calificacion
 * @property int $1er_parcial
 * @property int $2o_parcial
 * @property int $3er_parcial
 * @property int $id_materia
 * @property int $id_alumno
 *
 * @property Materia $materia
 * @property Alumno $alumno
 */
class Calificacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calificacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['1er_parcial', '2o_parcial', '3er_parcial', 'id_materia', 'id_alumno'], 'required'],
            [['1er_parcial', '2o_parcial', '3er_parcial', 'id_materia', 'id_alumno'], 'integer'],
            [['id_materia'], 'exist', 'skipOnError' => true, 'targetClass' => Materia::className(), 'targetAttribute' => ['id_materia' => 'id_materia']],
            [['id_alumno'], 'exist', 'skipOnError' => true, 'targetClass' => Alumno::className(), 'targetAttribute' => ['id_alumno' => 'id_alumno']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_calificacion' => 'Id Calificacion',
            '1er_parcial' => '1er Parcial',
            '2o_parcial' => '2o Parcial',
            '3er_parcial' => '3er Parcial',
            'id_materia' => 'Id Materia',
            'id_alumno' => 'Id Alumno',
        ];
    }

    /**
     * Gets query for [[Materia]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMateria()
    {
        return $this->hasOne(Materia::className(), ['id_materia' => 'id_materia']);
    }

    /**
     * Gets query for [[Alumno]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAlumno()
    {
        return $this->hasOne(Alumno::className(), ['id_alumno' => 'id_alumno']);
    }
}
