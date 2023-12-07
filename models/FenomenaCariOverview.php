<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fenomena;


/**
 * FenomenaCari represents the model behind the search form of `app\models\Fenomena`.
 */
class FenomenaCariOverview extends Fenomena {

    /**
     * @inheritdoc
     */
    public $satker;
    public $month;

    public function rules() {
        return [
            [['id', 'wilayah', 'bulan', 'sumber', 'kat01', 'kat02', 'kat03', 'kat04', 'kat05', 'kat06', 'kat07', 'kat08', 'kat09', 'kat10', 'kat11', 'kat12', 'kat13', 'kat14', 'kat15', 'kat16', 'kat17', 'deleted'], 'integer'],
            [['tahun', 'fenomena', 'tgl_rekam', 'perekam', 'satker', 'month'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
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
    public function search($params) {
        $query = Fenomena::find();

        $query->joinWith(['satker', 'month']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['tahun' => SORT_DESC, 'bulan' => SORT_DESC]]
        ]);

        $dataProvider->sort->attributes['satker'] = [
            // The tables are the ones our relation are configured to
            // in my case they are prefixed with "tbl_"
            'asc' => ['satker.nama_satker' => SORT_ASC],
            'desc' => ['satker.nama_satker' => SORT_DESC],
        ];
        // Lets do the same with country now
        $dataProvider->sort->attributes['month'] = [
            'asc' => ['bulan.nama_bulan' => SORT_ASC],
            'desc' => ['bulan.nama_bulan' => SORT_DESC],
        ];

        //$dataProvider->query->where('deleted <> 1');

        $wil = Yii::$app->user->identity->satker;
        if ($wil != 1000) {//orang kabupaten
            $dataProvider->query->where('wilayah = ' . $wil .' AND deleted <> 1 AND tahun = '. date("Y"));
        } else {//orang provinsi
            $dataProvider->query->where('deleted <> 1 AND tahun = '. date("Y"));
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
            'tahun' => $this->tahun,
            'sumber' => $this->sumber,
            'tgl_rekam' => $this->tgl_rekam,
            'deleted' => $this->deleted,
        ]);

        $query->andFilterWhere(['like', 'fenomena', $this->fenomena])
                ->andFilterWhere(['like', 'perekam', $this->perekam])
                ->andFilterWhere(['like', 'satker.nama_satker', $this->satker])
                ->andFilterWhere(['like', 'bulan.nama_bulan', $this->month]);

        return $dataProvider;
    }

}
