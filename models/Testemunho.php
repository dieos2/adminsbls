<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testemunho".
 *
 * @property integer $id
 * @property string $texto
 * @property string $data
 * @property integer $id_user
 * @property integer $status
 */
class Testemunho extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'testemunho';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['texto', 'id_user', 'status'], 'required'],
            [['texto'], 'string'],
            [['data'], 'safe'],
            [['id_user', 'status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'texto' => 'Texto',
            'data' => 'Data',
            'id_user' => 'Id User',
            'status' => 'Status',
        ];
    }
}
