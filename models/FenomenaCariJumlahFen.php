<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fenomena;

class FenomenaCariJumlahFen extends Fenomena {

    public $satker;
    public $namabulan;

    public function rules() {
        return [
            [['id', 'wilayah', 'bulan', 'sumber', 'kat01', 'kat02', 'kat03', 'kat04', 'kat05', 'kat06', 'kat07', 'kat08', 'kat09', 'kat10', 'kat11', 'kat12', 'kat13', 'kat14', 'kat15', 'kat16', 'kat17', 'deleted'], 'integer'],
            [['tahun', 'fenomena', 'sumberket', 'tgl_rekam', 'perekam', 'satker', 'month', 'namabulan'], 'safe'],
        ];
    }

    public function scenarios() {
        return Model::scenarios();
    }

    public function search($params) {

        $query = Fenomena::find()
                ->where(['deleted' => 0])
                ->select(['id', 'tahun', 'bulan as bulan', 'bulan.nama_bulan as namabulan', 'satker.nama_satker as wilayah', 'wilayah as wil', 'count(tgl_rekam) as jumfen'])
                ->joinWith(['month', 'satker'])
                ->groupBy('wilayah')
                ->orderBy('jumfen DESC')
                ->asArray();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['wilayah' => SORT_ASC]]
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

        return $dataProvider;
    }

}
