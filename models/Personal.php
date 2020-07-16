<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property int $id_personal
 * @property string $nombre
 * @property string $app
 * @property string $apm
 * @property string $f_nacimiento
 * @property string $sexo
 * @property string $rfc
 * @property int $status
 * @property int $id_admin
 *
 * @property Admin $admin
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'app', 'apm', 'f_nacimiento', 'sexo', 'rfc', 'status', 'id_admin'], 'required'],
            [['f_nacimiento'], 'safe'],
            [['status', 'id_admin'], 'integer'],
            [['nombre', 'app', 'apm'], 'string', 'max' => 50],
            [['sexo'], 'string', 'max' => 10],
            [['rfc'], 'string', 'max' => 13],
            [['id_admin'], 'exist', 'skipOnError' => true, 'targetClass' => Admin::className(), 'targetAttribute' => ['id_admin' => 'id_admin']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_personal' => 'Id Personal',
            'nombre' => 'Nombre',
            'app' => 'App',
            'apm' => 'Apm',
            'f_nacimiento' => 'F Nacimiento',
            'sexo' => 'Sexo',
            'rfc' => 'Rfc',
            'status' => 'Status',
            'id_admin' => 'Id Admin',
        ];
    }

    /**
     * Gets query for [[Admin]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdmin()
    {
        return $this->hasOne(Admin::className(), ['id_admin' => 'id_admin']);
    }
}
