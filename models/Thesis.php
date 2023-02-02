<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "thesis".
 *
 * @property string $tgl
 * @property string $evaluasi
 * @property string $catatan
 * @property string $user
 * @property int $id
 */
class Thesis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'thesis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl', 'evaluasi', 'catatan', 'user'], 'required'],
            [['tgl'], 'safe'],
            [['evaluasi', 'catatan', 'user'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tgl' => 'Tgl',
            'evaluasi' => 'Evaluasi',
            'catatan' => 'Catatan',
            'user' => 'User',
            'id' => 'ID',
        ];
    }
}
