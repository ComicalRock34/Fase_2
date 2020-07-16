<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumno".
 *
 * @property int $id_alumno
 * @property string $nombre
 * @property string $app
 * @property string $apm
 * @property string $carrera
 * @property int $id_grupo
 * @property int $id_campus
 *
 * @property Grupo $grupo
 * @property Campus $campus
 * @property Calificacion[] $calificacions
 * @property MateriaAlumno[] $materiaAlumnos
 */
class Alumno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alumno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'app', 'apm', 'carrera', 'id_grupo', 'id_campus'], 'required'],
            [['id_grupo', 'id_campus'], 'integer'],
            [['nombre', 'app', 'apm', 'carrera'], 'string', 'max' => 50],
            [['id_grupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupo::className(), 'targetAttribute' => ['id_grupo' => 'id_grupo']],
            [['id_campus'], 'exist', 'skipOnError' => true, 'targetClass' => Campus::className(), 'targetAttribute' => ['id_campus' => 'id_campus']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_alumno' => 'Id Alumno',
            'nombre' => 'Nombre',
            'app' => 'App',
            'apm' => 'Apm',
            'carrera' => 'Carrera',
            'id_grupo' => 'Id Grupo',
            'id_campus' => 'Id Campus',
        ];
    }

    /**
     * Gets query for [[Grupo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGrupo()
    {
        return $this->hasOne(Grupo::className(), ['id_grupo' => 'id_grupo']);
    }

    /**
     * Gets query for [[Campus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCampus()
    {
        return $this->hasOne(Campus::className(), ['id_campus' => 'id_campus']);
    }

    /**
     * Gets query for [[Calificacions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalificacions()
    {
        return $this->hasMany(Calificacion::className(), ['id_alumno' => 'id_alumno']);
    }

    /**
     * Gets query for [[MateriaAlumnos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMateriaAlumnos()
    {
        return $this->hasMany(MateriaAlumno::className(), ['id_alumno' => 'id_alumno']);
    }
}
