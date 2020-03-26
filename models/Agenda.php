<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agenda".
 *
 * @property integer $id
 * @property string $titulo
 * @property string $texto
 * @property string $data
 * @property integer $id_user
 * @property string $data_pub
 * @property integer $status
 *
 * @property User $idUser
 */
class Agenda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agenda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'texto', 'id_user', 'status'], 'required'],
            [['texto'], 'string'],
            [['data', 'data_pub'], 'safe'],
            [['id_user', 'status'], 'integer'],
            [['titulo'], 'string', 'max' => 300],
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
            'texto' => 'Texto',
            'data' => 'Data',
            'id_user' => 'Id User',
            'data_pub' => 'Data Pub',
            'status' => 'Status',
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
