<?php

namespace app\models;

use Yii;

class Fenomena extends \yii\db\ActiveRecord
{

    public static function getDb()
    {
        return \Yii::$app->db;
    }

    public static function tableName()
    {
        return 'fenomena';
    }

    public $triwulan, $jumlahwilayah, $nama_satker, $nama, $jum;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wilayah', 'bulan', 'tahun', 'judul', 'fenomena', 'sumber', 'sumberket', 'pengaruh', 'kat01', 'kat02', 'kat03', 'kat04', 'kat05', 'kat06', 'kat07', 'kat08', 'kat09', 'kat10', 'kat11', 'kat12', 'kat13', 'kat14', 'kat15', 'kat16', 'kat17', 'komp01', 'komp02', 'komp03', 'komp04', 'komp05', 'komp06', 'komp07'], 'required'],
            [['wilayah', 'bulan', 'sumber', 'pengaruh', 'kat01', 'kat02', 'kat03', 'kat04', 'kat05', 'kat06', 'kat07', 'kat08', 'kat09', 'kat10', 'kat11', 'kat12', 'kat13', 'kat14', 'kat15', 'kat16', 'kat17', 'komp01', 'komp02', 'komp03', 'komp04', 'komp05', 'komp06', 'komp07'], 'integer'],
            [[
                'komp08',
                'kat01_01',
                'kat01_01_01',
                'kat01_01_02',
                'kat01_01_03',
                'kat01_01_04',
                'kat01_01_05',
                'kat01_02',
                'kat01_03',
                'kat02_01',
                'kat02_02',
                'kat02_03',
                'kat02_04',
                'kat03_01',
                'kat03_02',
                'kat03_03',
                'kat03_04',
                'kat03_05',
                'kat03_06',
                'kat03_07',
                'kat03_08',
                'kat03_09',
                'kat03_10',
                'kat03_11',
                'kat03_12',
                'kat03_13',
                'kat03_14',
                'kat03_15',
                'kat03_16',
                'kat04_01',
                'kat04_02',
                'kat07_01',
                'kat07_02',
                'kat08_01',
                'kat08_02',
                'kat08_03',
                'kat08_04',
                'kat08_05',
                'kat08_06',
                'kat09_01',
                'kat09_02',
                'kat11_01',
                'kat11_02',
                'kat11_03',
                'kat11_04',
                'komp01_01',
                'komp01_02',
                'komp01_03',
                'komp01_04',
                'komp01_05',
                'komp01_06',
                'komp01_07',
                'komp01_08',
                'komp01_09',
                'komp01_10',
                'komp01_11',
                'komp01_12',
                'komp03_01',
                'komp03_02',
                'komp04_01',
                'komp04_02',
                'komp06_01',
                'komp06_02',
                'komp07_01',
                'komp07_02',
                'komp08_01',
                'komp08_02'
            ], 'safe'],
            [['id', 'tahun', 'tgl_rekam', 'perekam', 'deleted'], 'safe'],
            [['fenomena'], 'string'],
            [['judul'], 'string', 'max' => 255],
            [['perekam'], 'string', 'max' => 20],
            //['sumberket', 'url', 'validSchemes' => ['http', 'https'], 'when' => function() {return $this->sumber == 1;},],
            ['sumberket', 'url', 'validSchemes' => ['http', 'https'], 'when' => function () {
                return $this->sumber == 1;
            }, 'enableClientValidation' => false],
        ];
    }

    /* public function cekcetak($attribute, $params) {
      $this->addError($attribute, Yii::t('user', 'You entered an invalid date format.'));
      } */

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'wilayah' => 'Wilayah',
            'bulan' => 'Bulan',
            'tahun' => 'Tahun',
            'triwulan' => 'Triwulan',
            'judul' => 'Judul Fenomena',
            'fenomena' => 'Deskripsi Fenomena',
            'sumber' => 'Jenis Sumber',
            'sumberket' => 'Keterangan Sumber',
            'pengaruh' => 'Arah Pengaruh Fenomena',
            'kat01' => 'Pertanian',
            'kat02' => 'Pertambangan',
            'kat03' => 'Industri Pengolahan',
            'kat04' => 'Listrik dan Gas',
            'kat05' => 'Air',
            'kat06' => 'Konstruksi',
            'kat07' => 'Perdagangan',
            'kat08' => 'Transportasi',
            'kat09' => 'Akomodasi dan Makanan',
            'kat10' => 'Informasi dan Komunikasi',
            'kat11' => 'Jasa Keuangan',
            'kat12' => 'Real Estate',
            'kat13' => 'Jasa Perusahaan',
            'kat14' => 'Administrasi Pemerintahan',
            'kat15' => 'Jasa Pendidikan',
            'kat16' => 'Jasa Kesehatan dan Sosial',
            'kat17' => 'Jasa Lainnya',
            'komp01' => 'Konsumsi Rumah Tangga',
            'komp02' => 'Konsumsi LNPRT',
            'komp03' => 'Konsumsi Pemerintah',
            'komp04' => 'P M T B',
            'komp05' => 'Perubahan Inventori',
            'komp06' => 'Ekspor',
            'komp07' => 'Impor',
            'tgl_rekam' => 'Tanggal Perekaman',
            'perekam' => 'Perekam',
            'deleted' => 'Deleted',
            'month' => 'Bulan',
            'satker' => 'Wilayah',
            'jum' => 'Jumlah Entri',
            'jumfen' => 'Jumlah Fenomena',
            'tahunentri' => 'Tahun Entri',
            'bulanentri' => 'Bulan Entri',
            'asal' => 'Satker Perekam',
            'perekam' => 'Nama Perekam',
            'namabulan' => 'Bulan',
            'L1' => 'A',
            'L2' => 'B',
            'L3' => 'C',
            'L4' => 'D',
            'L5' => 'E',
            'L6' => 'F',
            'L7' => 'G',
            'L8' => 'H',
            'L9' => 'I',
            'L10' => 'J',
            'L11' => 'K',
            'L12' => 'L',
            'L13' => 'M,N',
            'L14' => 'O',
            'L15' => 'P',
            'L16' => 'Q',
            'L17' => 'R,S,T,U',
            'fen' => 'Jumlah',
            'fenneg' => 'Fenomena Negatif',
            'fenpos' => 'Fenomena Positif',
            'P1' => 'PKRT',
            'P2' => 'PKLNPRT',
            'P3' => 'PKP',
            'P4' => 'PMTB',
            'P5' => 'Inventori',
            'P6' => 'Ekspor',
            'P7' => 'Impor',
            'komp08' => 'Net Ekspor',
        ];
    }

    public function getSatker()
    {
        return $this->hasOne(Satker::className(), ['id_satker' => 'wilayah']);
    }

    public function getMonth()
    {
        return $this->hasOne(Bulan::className(), ['id_bulan' => 'bulan']);
    }

    public function getReporter()
    {
        return $this->hasOne(Pengguna::className(), ['username' => 'perekam']);
    }

    public function getYears()
    {
        $currentYear = date('Y');
        $yearFrom = 2010;
        $yearsRange = range($currentYear, $yearFrom);
        return array_combine($yearsRange, $yearsRange);
    }

    public function getYearsJumEntri()
    {
        $currentYear = date('Y');
        $yearFrom = 2017;
        $yearsRange = range($currentYear, $yearFrom);
        return array_combine($yearsRange, $yearsRange);
    }

    public function getYearsJumFen()
    {
        $currentYear = date('Y');
        $yearFrom = 2015;
        $yearsRange = range($currentYear, $yearFrom);
        return array_combine($yearsRange, $yearsRange);
    }

    public function getLokasi()
    {
        $lok = Yii::$app->user->identity->satker;
        if ($lok == 1000) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function getMedia()
    {
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

    public function getImpact()
    {
        if (!isset($this->pengaruh)) {
            return '-';
        } elseif ($this->pengaruh == 0) {
            return '<i class="fas fa-thumbs-down text-danger"></i> Negatif';
        } elseif ($this->pengaruh == 1) {
            return '<i class="fas fa-thumbs-up text-success"></i> Positif';
        } else {
            return '-';
        }
    }
}
