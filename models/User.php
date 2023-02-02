<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $username
 * @property string $password
 * @property string $nama
 * @property string $daerah
 * @property string $email
 * @property string $tgl
 * @property int $id
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'nama', 'daerah', 'email', 'tgl'], 'required'],
            [['tgl'], 'safe'],
            [['username', 'password', 'nama', 'daerah', 'email'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'password' => 'Password',
            'nama' => 'Nama',
            'daerah' => 'Daerah',
            'email' => 'Email',
            'tgl' => 'Tgl',
            'id' => 'ID',
        ];
    }
}
