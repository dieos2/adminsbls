<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sobre".
 *
 * @property integer $id
 * @property string $titulo
 * @property string $subtitulo
 * @property string $texto
 * @property string $foto
 * @property string $data
 * @property string $contato
 * @property integer $id_user
 *
 * @property User $idUser
 */
class Sobre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sobre';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'subtitulo', 'texto', 'foto', 'contato', 'id_user'], 'required'],
            [['texto'], 'string'],
            [['data'], 'safe'],
            [['id_user'], 'integer'],
            [['titulo', 'subtitulo'], 'string', 'max' => 300],
            [['foto'], 'string', 'max' => 50],
            [['contato'], 'string', 'max' => 20],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
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
            'texto' => 'Texto',
            'foto' => 'Foto',
            'data' => 'Data',
            'contato' => 'Contato',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
