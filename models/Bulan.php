<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bulan".
 *
 * @property int $id_bulan
 * @property string $nama_bulan
 */
class Bulan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bulan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_bulan', 'nama_bulan'], 'required'],
            [['id_bulan'], 'integer'],
            [['nama_bulan'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_bulan' => 'Id Bulan',
            'nama_bulan' => 'Nama Bulan',
        ];
    }
}
