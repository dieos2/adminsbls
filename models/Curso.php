<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curso".
 *
 * @property integer $id
 * @property string $titulo
 * @property string $subtitulo
 * @property string $foto
 * @property string $objetivo
 * @property string $publicoAlvo
 * @property string $cargahoraria
 * @property string $texto
 * @property string $data
 * @property integer $id_user
 * @property integer $status
 * @property integer $online
 *
 * @property Perfil $idUser
 * @property Status $status0
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'curso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'foto', 'objetivo', 'publicoAlvo', 'cargahoraria', 'texto', 'id_user', 'status'], 'required'],
            [['objetivo', 'texto'], 'string'],
            [['data'], 'safe'],
            [['id_user', 'status', 'online'], 'integer'],
            [['titulo'], 'string', 'max' => 300],
            [['subtitulo'], 'string', 'max' => 60],
            [['foto', 'cargahoraria'], 'string', 'max' => 100],
            [['publicoAlvo'], 'string', 'max' => 50],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => Perfil::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'subtitulo' => 'Subtitulo',
            'foto' => 'Foto',
            'objetivo' => 'Objetivo',
            'publicoAlvo' => 'Publico Alvo',
            'cargahoraria' => 'Cargahoraria',
            'texto' => 'Texto',
            'data' => 'Data',
            'id_user' => 'Id User',
            'status' => 'Status',
            'online' => 'Online',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(Perfil::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(Status::className(), ['id' => 'status']);
    }
}
