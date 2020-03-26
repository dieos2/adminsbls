<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servico".
 *
 * @property integer $id
 * @property string $titulo
 * @property string $texto
 * @property integer $id_user
 * @property string $data
 * @property integer $status
 * @property string $subtitulo
 *
 * @property User $idUser
 * @property Status $status0
 */
class Servico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'servico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'texto', 'id_user', 'status'], 'required'],
            [['texto'], 'string'],
            [['id_user', 'status'], 'integer'],
            [['data'], 'safe'],
            [['titulo'], 'string', 'max' => 300],
            [['subtitulo'], 'string', 'max' => 50],
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
            'texto' => 'Texto',
            'id_user' => 'Id User',
            'data' => 'Data',
            'status' => 'Status',
            'subtitulo' => 'Subtitulo',
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
