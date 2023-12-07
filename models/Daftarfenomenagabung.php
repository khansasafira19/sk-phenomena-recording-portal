<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "daftarfenomenagabung".
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
 * @property string $idkat
 */
class Daftarfenomenagabung extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'daftarfenomenagabung';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['id', 'wilayah', 'bulan', 'sumber', 'pengaruh', 'kat01', 'kat02', 'kat03', 'kat04', 'kat05', 'kat06', 'kat07', 'kat08', 'kat09', 'kat10', 'kat11', 'kat12', 'kat13', 'kat14', 'kat15', 'kat16', 'kat17', 'komp01', 'komp02', 'komp03', 'komp04', 'komp05', 'komp06', 'komp07', 'deleted'], 'integer'],
            [['tahun', 'tgl_rekam'], 'safe'],
            [['fenomena', 'sumberket'], 'string'],
            [['judul'], 'string', 'max' => 255],
            [['perekam'], 'string', 'max' => 20],
            [['kategori'], 'string', 'max' => 96],
            [['idkat'], 'string', 'max' => 24],
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
            'idkat' => 'Idkat',
        ];
    }

    public static function primaryKey() {
        return ['idkat'];
    }

    public function getSatker() {
        return $this->hasOne(Satker::className(), ['id_satker' => 'wilayah']);
    }

    public function getMonth() {
        return $this->hasOne(Bulan::className(), ['id_bulan' => 'bulan']);
    }
    
    public function getReporter() {
        return $this->hasOne(Pengguna::className(), ['username' => 'perekam']);
    }
    
    public function getYearsJumFen() {
        $currentYear = date('Y');
        $yearFrom = 2015;
        $yearsRange = range($currentYear, $yearFrom);
        return array_combine($yearsRange, $yearsRange);
    }

     public function getMedia() {
        $med = $this->sumber;
        $res = '';
        switch ($med) {
            case 0:
                $res = 'Media Cetak';
                break;
            case 1:
                $res = 'Media Online';
                break;
            case 2:
                $res = 'Narasumber';
                break;
            default:
                $res = 'Unknown';
                break;
        }
        return $res;
    }

    public function getImpact() {
        if (!isset($this->pengaruh)) {
            return '-';
        } elseif ($this->pengaruh == 0) {
            return 'Negatif';
        } elseif ($this->pengaruh == 1) {
            return 'Positif';
        } else {
            return '-';
        }
    }
    
    public function getCategoryArray() {
        $array = [
            'kat01' => 'A',
            'kat02' => 'B',
            'kat03' => 'C',
            'kat04' => 'D',
            'kat05' => 'E',
            'kat06' => 'F',
            'kat07' => 'G',
            'kat08' => 'H',
            'kat09' => 'I',
            'kat10' => 'J',
            'kat11' => 'K',
            'kat12' => 'L',
            'kat13' => 'M,N',
            'kat14' => 'O',
            'kat15' => 'P',
            'kat16' => 'Q',
            'kat17' => 'R,S,T,U',
            'komp01' => 'PKRT',
            'komp02' => 'PKLNPRT',
            'komp03' => 'PKP',
            'komp04' => 'PMTB',
            'komp05' => 'Inventori',
            'komp06' => 'Ekspor',
            'komp07' => 'Impor'
        ];
        return $array;
    }

    public function getCategoryMeaning() {
        $med = $this->kategori;
        $res = '';
        switch ($med) {
            case 'kat01':
                $res = 'A';
                break;
            case 'kat02':
                $res = 'B';
                break;
            case 'kat03':
                $res = 'C';
                break;
            case 'kat04':
                $res = 'D';
                break;
            case 'kat05':
                $res = 'E';
                break;
            case 'kat06':
                $res = 'F';
                break;
            case 'kat07':
                $res = 'G';
                break;
            case 'kat08':
                $res = 'H';
                break;
            case 'kat09':
                $res = 'I';
                break;
            case 'kat10':
                $res = 'J';
                break;
            case 'kat10':
                $res = 'J';
                break;
            case 'kat11':
                $res = 'K';
                break;
            case 'kat12':
                $res = 'L';
                break;
            case 'kat13':
                $res = 'M,N';
                break;
            case 'kat14':
                $res = 'O';
                break;
            case 'kat15':
                $res = 'P';
                break;
            case 'kat16':
                $res = 'Q';
                break;
            case 'kat17':
                $res = 'R,S,T,U';
                break;
            case 'komp01':
                $res = 'PKRT';
                break;
            case 'komp02':
                $res = 'PKLNPRT';
                break;
            case 'komp03':
                $res = 'PKP';
                break;
            case 'komp04':
                $res = 'PMTB';
                break;
            case 'komp05':
                $res = 'Inventori';
                break;
            case 'komp06':
                $res = 'Ekspor';
                break;
            case 'komp07':
                $res = 'Impor';
                break;
            default:
                $res = 'Unknown';
                break;
        }
        return $res;
    }

}
