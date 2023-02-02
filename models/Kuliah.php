<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kuliah".
 *
 * @property string $materi
 * @property string $pengampu
 * @property string $tgl
 * @property string $keterangan
 * @property int $id
 */
class Kuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['materi', 'pengampu', 'tgl', 'keterangan'], 'required'],
            [['tgl'], 'safe'],
            [['materi', 'pengampu', 'keterangan'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'materi' => 'Materi',
            'pengampu' => 'Pengampu',
            'tgl' => 'Tgl',
            'keterangan' => 'Keterangan',
            'id' => 'ID',
        ];
    }
}
