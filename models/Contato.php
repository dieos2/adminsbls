<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contato".
 *
 * @property integer $id
 * @property string $email
 * @property string $telefone
 * @property string $data
 * @property integer $id_user
 *
 * @property User $idUser
 */
class Contato extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contato';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'telefone', 'id_user'], 'required'],
            [['data'], 'safe'],
            [['id_user'], 'integer'],
            [['email', 'telefone'], 'string', 'max' => 50],
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
            'email' => 'Email',
            'telefone' => 'Telefone',
            'data' => 'Data',
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
