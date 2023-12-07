<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fenomena;

/**
 * FenomenaCari represents the model behind the search form of `app\models\Fenomena`.
 */
class FenomenaCari extends Fenomena
{

    public $satker;
    public $month;
    public $triwulan;

    public function rules()
    {
        return [
            [['id', 'wilayah', 'bulan', 'sumber', 'pengaruh', 'kat01', 'kat02', 'kat03', 'kat04', 'kat05', 'kat06', 'kat07', 'kat08', 'kat09', 'kat10', 'kat11', 'kat12', 'kat13', 'kat14', 'kat15', 'kat16', 'kat17', 'deleted'], 'integer'],
            [['tahun', 'fenomena', 'sumberket', 'pengaruh', 'judul', 'tgl_rekam', 'perekam', 'satker', 'month', 'triwulan'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        //$query = Fenomena::find();
        $query = Fenomena::find()
            ->where(['deleted' => 0])
            ->select(['*', 'CASE WHEN bulan IN(1, 2, 3) THEN 1'
                . ' WHEN bulan IN (4, 5,6) THEN 2'
                . ' WHEN bulan IN (7, 8, 9) THEN 3'
                . ' WHEN bulan IN (10, 11, 12) THEN 4 '
                . ' ELSE 5 END AS triwulan']);

        $query->joinWith(['satker', 'month']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['tahun' => SORT_DESC, 'bulan' => SORT_DESC, 'tgl_rekam' => SORT_DESC]]
        ]);
        $dataProvider->sort->attributes['satker'] = [
            'asc' => ['satker.nama_satker' => SORT_ASC],
            'desc' => ['satker.nama_satker' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['month'] = [
            'asc' => ['bulan.nama_bulan' => SORT_ASC],
            'desc' => ['bulan.nama_bulan' => SORT_DESC],
        ];

        $wil = Yii::$app->user->identity->satker;
        if ($wil != 1000) { //orang kabupaten
            $dataProvider->query->where('wilayah = ' . $wil . ' AND deleted <> 1'); //tampil data dari satker dia saja
        } else { //orang provinsi
            $dataProvider->query->where('deleted <> 1');
        }

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'wilayah' => $this->wilayah,
            'bulan' => $this->bulan,
            //'triwulan' => $this->triwulan,
            'tahun' => $this->tahun,
            'sumber' => $this->sumber,
            'pengaruh' => $this->pengaruh,
            'kat01' => $this->kat01,
            'kat02' => $this->kat02,
            'kat03' => $this->kat03,
            'kat04' => $this->kat04,
            'kat05' => $this->kat05,
            'kat06' => $this->kat06,
            'kat07' => $this->kat07,
            'kat08' => $this->kat08,
            'kat09' => $this->kat09,
            'kat10' => $this->kat10,
            'kat11' => $this->kat11,
            'kat12' => $this->kat12,
            'kat13' => $this->kat13,
            'kat14' => $this->kat14,
            'kat15' => $this->kat15,
            'kat16' => $this->kat16,
            'kat17' => $this->kat17,
            'tgl_rekam' => $this->tgl_rekam,
            'deleted' => $this->deleted,
        ]);

        $query->andFilterWhere(['like', 'fenomena', $this->fenomena])
            ->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'sumberket', $this->sumberket])
            ->andFilterWhere(['like', 'perekam', $this->perekam])
            ->andFilterWhere(['like', 'satker.nama_satker', $this->satker])
            ->andFilterWhere(['like', 'bulan.nama_bulan', $this->month]);
        $query->andFilterHaving(['triwulan' => $this->triwulan]);

        //$query->andFilterWhere(['IN', 'bulan', array_map('intval', explode(',', $this->triwulan))]);

        return $dataProvider;
    }

    public function rawdata($params)
    {
        $query = Fenomena::find();

        $query->joinWith(['satker', 'month']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->sort->attributes['satker'] = [
            'asc' => ['satker.nama_satker' => SORT_ASC],
            'desc' => ['satker.nama_satker' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['month'] = [
            'asc' => ['bulan.nama_bulan' => SORT_ASC],
            'desc' => ['bulan.nama_bulan' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'wilayah' => $this->wilayah,
            'bulan' => $this->bulan,
            'pengaruh' => $this->pengaruh,
            'tahun' => $this->tahun,
            'sumber' => $this->sumber,
            'kat01' => $this->kat01,
            'kat02' => $this->kat02,
            'kat03' => $this->kat03,
            'kat04' => $this->kat04,
            'kat05' => $this->kat05,
            'kat06' => $this->kat06,
            'kat07' => $this->kat07,
            'kat08' => $this->kat08,
            'kat09' => $this->kat09,
            'kat10' => $this->kat10,
            'kat11' => $this->kat11,
            'kat12' => $this->kat12,
            'kat13' => $this->kat13,
            'kat14' => $this->kat14,
            'kat15' => $this->kat15,
            'kat16' => $this->kat16,
            'kat17' => $this->kat17,
            'tgl_rekam' => $this->tgl_rekam,
            'deleted' => $this->deleted,
        ]);

        $query->andFilterWhere(['like', 'fenomena', $this->fenomena])
            ->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'sumberket', $this->sumberket])
            ->andFilterWhere(['like', 'perekam', $this->perekam])
            ->andFilterWhere(['like', 'satker.nama_satker', $this->satker])
            ->andFilterWhere(['like', 'bulan.nama_bulan', $this->month]);

        return $dataProvider;
    }

    public function trend($params)
    {
        //$query = Fenomena::find();
        $query = Fenomena::find()
            ->where(['deleted' => 0])
            ->select(['*', 'count(*) as jum'])
            ->groupBy(['tahun']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['tahun' => SORT_DESC, 'bulan' => SORT_DESC]]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        return $dataProvider;
    }

    public function kategori($params)
    {
        $query = Fenomena::find()
            ->where(['deleted' => 0])
            ->select([
                '*',
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
            ])
            ->asArray();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => false,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        return $dataProvider;
    }
}
