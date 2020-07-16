<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campus".
 *
 * @property int $id_campus
 * @property string $nombre
 * @property string $ciudad
 * @property string $direccion
 * @property int $telefono
 *
 * @property Admin[] $admins
 * @property Alumno[] $alumnos
 */
class Campus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'campus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'ciudad', 'direccion', 'telefono'], 'required'],
            [['telefono'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
            [['ciudad'], 'string', 'max' => 25],
            [['direccion'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_campus' => 'Id Campus',
            'nombre' => 'Nombre',
            'ciudad' => 'Ciudad',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
        ];
    }

    /**
     * Gets query for [[Admins]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdmins()
    {
        return $this->hasMany(Admin::className(), ['id_campus' => 'id_campus']);
    }

    /**
     * Gets query for [[Alumnos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnos()
    {
        return $this->hasMany(Alumno::className(), ['id_campus' => 'id_campus']);
    }
}
