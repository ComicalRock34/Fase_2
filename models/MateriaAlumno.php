<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materia_alumno".
 *
 * @property int $id_materia_alumno
 * @property int $id_materia
 * @property int $id_alumno
 *
 * @property Materia $materia
 * @property Alumno $alumno
 */
class MateriaAlumno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'materia_alumno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_materia', 'id_alumno'], 'required'],
            [['id_materia', 'id_alumno'], 'integer'],
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
            'id_materia_alumno' => 'Id Materia Alumno',
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
