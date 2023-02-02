<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kegiatan".
 *
 * @property string $tgl
 * @property string $kegiatan
 * @property string $catatan
 * @property int $id
 */
class Kegiatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kegiatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl', 'kegiatan', 'catatan'], 'required'],
            [['tgl'], 'safe'],
            [['kegiatan', 'catatan'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tgl' => 'Tgl',
            'kegiatan' => 'Kegiatan',
            'catatan' => 'Catatan',
            'id' => 'ID',
        ];
    }
}
