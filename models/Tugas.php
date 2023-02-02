<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tugas".
 *
 * @property string $materi
 * @property string $pengampu
 * @property string $deadline
 * @property string $catatan
 * @property string $classroom
 * @property int $id
 */
class Tugas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tugas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['materi', 'pengampu', 'deadline', 'catatan', 'classroom'], 'required'],
            [['deadline'], 'safe'],
            [['materi', 'pengampu', 'catatan', 'classroom'], 'string', 'max' => 250],
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
            'deadline' => 'Deadline',
            'catatan' => 'Catatan',
            'classroom' => 'Classroom',
            'id' => 'ID',
        ];
    }
}
