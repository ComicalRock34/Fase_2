<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "maestro".
 *
 * @property int $id_maestro
 * @property string $nombre
 * @property string $app
 * @property string $apm
 *
 * @property Materia[] $materias
 */
class Maestro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maestro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'app', 'apm'], 'required'],
            [['nombre', 'app', 'apm'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_maestro' => 'Id Maestro',
            'nombre' => 'Nombre',
            'app' => 'App',
            'apm' => 'Apm',
        ];
    }

    /**
     * Gets query for [[Materias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaterias()
    {
        return $this->hasMany(Materia::className(), ['id_maestro' => 'id_maestro']);
    }
}
