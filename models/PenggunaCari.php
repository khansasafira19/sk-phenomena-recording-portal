<?php
namespace app\models;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pengguna;
use Yii;
/**
 * PenggunaCari represents the model behind the search form of `app\models\Pengguna`.
 */
class PenggunaCari extends Pengguna
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'nama', 'email', 'tgl_daftar'], 'safe'],
            [['admin', 'theme'], 'integer'],
        ];
    }
    /**
     * {@inheritdoc}
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
        $query = Pengguna::find();
        // add conditions that should always apply here
        $query->joinWith(['satkere']);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['satker' => SORT_ASC, 'nama'=>SORT_ASC]]
        ]);
        $level = Yii::$app->user->identity->admin;
        if ($level != 1) {//cuma fi yang bisa lihat
            $dataProvider->query->where('active <> 0');
        }
        $this->load($params);
        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        // grid filtering conditions
        $query->andFilterWhere([
            'tgl_daftar' => $this->tgl_daftar,
            'admin' => $this->admin,
            'theme' => $this->theme,
        ]);
        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'satker.nama_satker', $this->satker]);
        return $dataProvider;
    }
}
