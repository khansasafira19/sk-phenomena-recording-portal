<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "daftarfenomena".
 *
 * @property int $id
 * @property int $wilayah
 * @property int $bulan
 * @property string $tahun
 * @property string $judul
 * @property string $fenomena
 * @property int $sumber
 * @property string $sumberket
 * @property int $pengaruh
 * @property int $kat01
 * @property int $kat02
 * @property int $kat03
 * @property int $kat04
 * @property int $kat05
 * @property int $kat06
 * @property int $kat07
 * @property int $kat08
 * @property int $kat09
 * @property int $kat10
 * @property int $kat11
 * @property int $kat12
 * @property int $kat13
 * @property int $kat14
 * @property int $kat15
 * @property int $kat16
 * @property int $kat17
 * @property int $komp01
 * @property int $komp02
 * @property int $komp03
 * @property int $komp04
 * @property int $komp05
 * @property int $komp06
 * @property int $komp07
 * @property string $tgl_rekam
 * @property string $perekam
 * @property int $deleted
 * @property string $kategori
 */
class Daftarfenomena extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'daftarfenomena';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['id', 'wilayah', 'bulan', 'sumber', 'pengaruh', 'kat01', 'kat02', 'kat03', 'kat04', 'kat05', 'kat06', 'kat07', 'kat08', 'kat09', 'kat10', 'kat11', 'kat12', 'kat13', 'kat14', 'kat15', 'kat16', 'kat17', 'komp01', 'komp02', 'komp03', 'komp04', 'komp05', 'komp06', 'komp07', 'deleted'], 'integer'],
            [['wilayah', 'bulan', 'tahun', 'fenomena', 'sumberket', 'perekam'], 'required'],
            [['tahun', 'tgl_rekam'], 'safe'],
            [['fenomena', 'sumberket'], 'string'],
            [['judul'], 'string', 'max' => 255],
            [['perekam'], 'string', 'max' => 20],
            [['kategori'], 'string', 'max' => 68],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'wilayah' => 'Wilayah',
            'bulan' => 'Bulan',
            'tahun' => 'Tahun',
            'judul' => 'Judul',
            'fenomena' => 'Fenomena',
            'sumber' => 'Sumber',
            'sumberket' => 'Sumberket',
            'pengaruh' => 'Pengaruh',
            'kat01' => 'Kat01',
            'kat02' => 'Kat02',
            'kat03' => 'Kat03',
            'kat04' => 'Kat04',
            'kat05' => 'Kat05',
            'kat06' => 'Kat06',
            'kat07' => 'Kat07',
            'kat08' => 'Kat08',
            'kat09' => 'Kat09',
            'kat10' => 'Kat10',
            'kat11' => 'Kat11',
            'kat12' => 'Kat12',
            'kat13' => 'Kat13',
            'kat14' => 'Kat14',
            'kat15' => 'Kat15',
            'kat16' => 'Kat16',
            'kat17' => 'Kat17',
            'komp01' => 'Komp01',
            'komp02' => 'Komp02',
            'komp03' => 'Komp03',
            'komp04' => 'Komp04',
            'komp05' => 'Komp05',
            'komp06' => 'Komp06',
            'komp07' => 'Komp07',
            'tgl_rekam' => 'Tgl Rekam',
            'perekam' => 'Perekam',
            'deleted' => 'Deleted',
            'kategori' => 'Kategori',
        ];
    }

    public static function primaryKey() {
        return ['id'];
    }

    public function getSatker() {
        return $this->hasOne(Satker::className(), ['id_satker' => 'wilayah']);
    }

    public function getMonth() {
        return $this->hasOne(Bulan::className(), ['id_bulan' => 'bulan']);
    }

    public function getYearsJumFen() {
        $currentYear = date('Y');
        $yearFrom = 2015;
        $yearsRange = range($currentYear, $yearFrom);
        return array_combine($yearsRange, $yearsRange);
    }

    public function getCategoryMeaning() {
        $med = $this->kategori;
        $res = '';
        switch ($med) {
            case 100000000000000000000000:
                $res = 'Media Cetak';
                break;
            case 100000000000000000000000:
                $res = 'Media Online';
                break;
            case 100000000000000000000000:
                $res = 'Narasumber';
                break;
            default:
                $res = 'Unknown';
                break;
        }
        return $res;
    }

}
