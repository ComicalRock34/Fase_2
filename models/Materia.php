<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materia".
 *
 * @property int $id_materia
 * @property string $nombre
 * @property int $id_maestro
 *
 * @property Calificacion[] $calificacions
 * @property Maestro $maestro
 * @property MateriaAlumno[] $materiaAlumnos
 */
class Materia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'materia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'id_maestro'], 'required'],
            [['id_maestro'], 'integer'],
            [['nombre'], 'string', 'max' => 70],
            [['id_maestro'], 'exist', 'skipOnError' => true, 'targetClass' => Maestro::className(), 'targetAttribute' => ['id_maestro' => 'id_maestro']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_materia' => 'Id Materia',
            'nombre' => 'Nombre',
            'id_maestro' => 'Id Maestro',
        ];
    }

    /**
     * Gets query for [[Calificacions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalificacions()
    {
        return $this->hasMany(Calificacion::className(), ['id_materia' => 'id_materia']);
    }

    /**
     * Gets query for [[Maestro]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaestro()
    {
        return $this->hasOne(Maestro::className(), ['id_maestro' => 'id_maestro']);
    }

    /**
     * Gets query for [[MateriaAlumnos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMateriaAlumnos()
    {
        return $this->hasMany(MateriaAlumno::className(), ['id_materia' => 'id_materia']);
    }
}
