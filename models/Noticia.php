<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticia".
 *
 * @property integer $id
 * @property string $titulo
 * @property string $chamada
 * @property integer $id_user
 * @property string $data
 * @property integer $status
 * @property string $foto
 * @property string $data_pub
 * @property string $texto
 *
 * @property User $idUser
 * @property Status $status0
 */
class Noticia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'noticia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'id_user', 'status', 'texto'], 'required'],
            [['id_user', 'status'], 'integer'],
            [['data', 'data_pub'], 'safe'],
            [['texto'], 'string'],
            [['titulo', 'chamada'], 'string', 'max' => 300],
            [['foto'], 'string', 'max' => 50],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
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
            'chamada' => 'Chamada',
            'id_user' => 'Id User',
            'data' => 'Data',
            'status' => 'Status',
            'foto' => 'Foto',
            'data_pub' => 'Data Pub',
            'texto' => 'Texto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(Status::className(), ['id' => 'status']);
    }
}
