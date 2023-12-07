<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fenomena;

class FenomenaCariJumlahEntri extends Fenomena {

    public $satker;
    public $month;
    public $tahunentri;
    public $bulanentri;
    public $jum;

    public function rules() {
        return [
            [['id', 'wilayah', 'bulan', 'sumber', 'kat01', 'kat02', 'kat03', 'kat04', 'kat05', 'kat06', 'kat07', 'kat08', 'kat09', 'kat10', 'kat11', 'kat12', 'kat13', 'kat14', 'kat15', 'kat16', 'kat17', 'deleted'], 'integer'],
            [['tahun', 'fenomena', 'sumberket', 'tgl_rekam', 'perekam', 'satker', 'month', 'tahunentri', 'bulanentri'], 'safe'],
        ];
    }

    public function scenarios() {
        return Model::scenarios();
    }

    public function search($params) {

        $query = Fenomena::find()
                ->where(['deleted' => 0])
                ->select(['id', 'YEAR(tgl_rekam) as tahunentri', 'MONTH(tgl_rekam) as bulan', 'MONTH(tgl_rekam) as bulanentri',
                    'satker.nama_satker as wilayah', 'wilayah as wil', 'count(tgl_rekam) as jum', 'pengguna.nama as perekam', 'pengguna.satker as asal'])
                ->joinWith('satker')
                ->joinWith('reporter')
                ->groupBy('perekam')
                ->orderBy('jum DESC')
                ->asArray();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['wilayah' => SORT_ASC]]
        ]);
        $dataProvider->sort->attributes['wilayah'] = [
            'asc' => ['wil' => SORT_ASC],
            'desc' => ['wil' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['tahunentri'] = [
            'asc' => ['YEAR(tgl_rekam)' => SORT_ASC],
            'desc' => ['YEAR(tgl_rekam)' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['bulanentri'] = [
            'asc' => ['MONTH(tgl_rekam)' => SORT_ASC],
            'desc' => ['MONTH(tgl_rekam)' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['jum'] = [
            'asc' => ['count(tgl_rekam)' => SORT_ASC],
            'desc' => ['count(tgl_rekam)' => SORT_DESC],
        ];
        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        /* $query->andFilterWhere([
          'YEAR(tgl_rekam)' => $this->tahunentri,
          'MONTH(tgl_rekam)' => $this->bulanentri,
          ]);

          $query->andFilterWhere([
          'MONTH(tgl_rekam)' => $this->bulanentri,
          ]);

          $query->andFilterWhere(['like', 'satker.nama_satker', $this->satker]); */
        return $dataProvider;
    }

    public function getBulanentrinya() {
        switch ('bulan') {
            case 1:
                return 'Januari';
                break;
            case 2:
                return 'Februari';
                break;
            case 3:
                return 'Maret';
                break;
            case 4:
                return 'April';
                break;
            case 5:
                return 'Mei';
                break;
            case 6:
                return 'Juni';
                break;
            case 7:
                return 'Juli';
                break;
            case 8:
                return 'Agustus';
                break;
            case 9:
                return 'September';
                break;
            case 10:
                return 'Oktober';
                break;
            case 11:
                return 'November';
                break;
            case 12:
                return 'Desember';
                break;
            default:
                return 'unnamed';
                break;
        }
    }

}
