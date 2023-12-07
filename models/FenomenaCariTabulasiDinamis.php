<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fenomena;
use Eddmash\TransposeDataProvider\TransposeDataProvider;

class FenomenaCariTabulasiDinamis extends Fenomena {

    public $satker;
    public $namabulan;
    public $triwulan;

    public function rules() {
        return [
            [['id', 'wilayah', 'bulan', 'sumber', 'kat01', 'kat02', 'kat03', 'kat04', 'kat05', 'kat06', 'kat07', 'kat08', 'kat09', 'kat10', 'kat11', 'kat12', 'kat13', 'kat14', 'kat15', 'kat16', 'kat17', 'deleted'], 'integer'],
            [['tahun', 'fenomena', 'sumberket', 'tgl_rekam', 'perekam', 'satker', 'month', 'namabulan', 'triwulan'], 'safe'],
        ];
    }

    public function scenarios() {
        return Model::scenarios();
    }

    public function search($params) {

        $query = Fenomena::find()
                ->where(['deleted' => 0])
                //->select(['id', 'tahun', 'bulan as bulan', 'bulan.nama_bulan as namabulan', 'satker.nama_satker as wilayah', 'wilayah as wil', 'count(tgl_rekam) as jumfen'])
                ->select(['id', 'bulan as bulan', 'bulan.nama_bulan as namabulan', 'satker.nama_satker as wilayah', 'wilayah as wil', 'count(tgl_rekam) as fen', 'tahun as tahun',
                    'SUM(kat01 = 1) AS L1',
                    'SUM(kat02 = 1) AS L2',
                    'SUM(kat03 = 1) AS L3',
                    'SUM(kat04 = 1) AS L4',
                    'SUM(kat05 = 1) AS L5',
                    'SUM(kat06 = 1) AS L6',
                    'SUM(kat07 = 1) AS L7',
                    'SUM(kat08 = 1) AS L8',
                    'SUM(kat09 = 1) AS L9',
                    'SUM(kat10 = 1) AS L10',
                    'SUM(kat11 = 1) AS L11',
                    'SUM(kat12 = 1) AS L12',
                    'SUM(kat13 = 1) AS L13',
                    'SUM(kat14 = 1) AS L14',
                    'SUM(kat15 = 1) AS L15',
                    'SUM(kat16 = 1) AS L16',
                    'SUM(kat17 = 1) AS L17',
                    'SUM(komp01 = 1) AS P1',
                    'SUM(komp02 = 1) AS P2',
                    'SUM(komp03 = 1) AS P3',
                    'SUM(komp04 = 1) AS P4',
                    'SUM(komp05 = 1) AS P5',
                    'SUM(komp06 = 1) AS P6',
                    'SUM(komp07 = 1) AS P7',
                    'CASE WHEN fenomena.bulan IN(1, 2, 3) THEN 1'
                    . ' WHEN fenomena.bulan IN (4, 5,6) THEN 2'
                    . ' WHEN fenomena.bulan IN (7, 8, 9) THEN 3'
                    . ' WHEN fenomena.bulan IN (10, 11, 12) THEN 4 '
                    . ' ELSE 5 END AS triwulan',
                ])
                ->joinWith(['month', 'satker'])
                //->groupBy(['tahun', 'wilayah'])
                //->orderBy('jumfen DESC')
                ->asArray();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['wilayah' => SORT_ASC, 'tahun' => SORT_ASC, 'triwulan' => SORT_ASC, 'namabulan' => SORT_ASC]]
        ]);

        $dataProvider->sort->attributes['wilayah'] = [
            'asc' => ['wil' => SORT_ASC],
            'desc' => ['wil' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['tahun'] = [
            'asc' => ['tahun' => SORT_ASC],
            'desc' => ['tahun' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['namabulan'] = [
            'asc' => ['bulan' => SORT_ASC],
            'desc' => ['bulan' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['triwulan'] = [
            'asc' => ['triwulan' => SORT_ASC],
            'desc' => ['triwulan' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['jumfen'] = [
            'asc' => ['count(tgl_rekam)' => SORT_ASC],
            'desc' => ['count(tgl_rekam)' => SORT_DESC],
        ];
        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'tahun' => $this->tahun,
            'bulan' => $this->namabulan,
        ]);

        $query->andFilterWhere([
            'namabulan' => $this->namabulan
        ]);

        $query->andFilterWhere(['like', 'satker.nama_satker', $this->satker]);

        $query->andFilterHaving(['triwulan' => $this->triwulan]);

        return $dataProvider;
    }

    public function getBulanVisibility($a, $b, $c, $d) {
//        $a = $this->tahun;
//        $b = $this->bulan;
//        $c = $this->wilayah;
//        $d = $this->triwulan;
        $res = '';
        if ($c != '' && $a != '' && $d != '' && $b != '') {//tahun, bulan, wilayah, triwulan terisi
            $res = FALSE;
        } elseif ($c == '' && $a != '' && $d != '' && $b != '') {
            $res = FALSE;
        } elseif ($c == '' && $a != '' && $d != '' && $b == '') {
            $res = FALSE;
        } elseif ($c == '' && $a != '' && $d == '' && $b == '') {
            $res = FALSE;
        } elseif ($c == '' && $a == '' && $d == '' && $b == '') {
            $res = FALSE;
        } elseif ($c != '' && $a == '' && $d == '' && $b == '') {
            $res = FALSE;
        } elseif ($c != '' && $a != '' && $d == '' && $b == '') {
            $res = FALSE;
        } elseif ($c != '' && $a != '' && $d != '' && $b == '') {
            $res = FALSE;
        } elseif ($c == '' && $a == '' && $d != '' && $b == '') {
            $res = FALSE;
        } elseif ($c != '' && $a == '' && $d != '' && $b == '') {
            $res = FALSE;
        } else {
            $res = TRUE;
        }
        return $res;
    }

}
