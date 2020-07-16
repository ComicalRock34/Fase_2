<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departamento".
 *
 * @property int $id_departamento
 * @property string $nombre
 *
 * @property Cargo[] $cargos
 */
class Departamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 70],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_departamento' => 'Id Departamento',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * Gets query for [[Cargos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCargos()
    {
        return $this->hasMany(Cargo::className(), ['id_departamento' => 'id_departamento']);
    }
}
