<?php

namespace app\controllers;

use Yii;
use app\models\Bulan;
use app\models\Fenomena;
use app\models\FenomenaCari;
use app\models\FenomenaCariNew;
use app\models\FenomenaCariJumlahEntri;
use app\models\FenomenaCariJumlahFen;
use app\models\FenomenaCariJumlahKategori;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class FenomenaController extends Controller
{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['dashboard', 'view'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['index', 'create', 'update', 'delete', 'findModel', 'jumlahentri', 'jumlahfen', 'jumlahkategori', 'tabulasidinamis', 'tabulasidinamispeng', 'tabulasidinamispengaruh', 'tabulasidinamispengaruhpeng', 'indexnew'], 
                        'allow' => true,
                        
                        'matchCallback' => function ($rule, $action) {
                            return !\Yii::$app->user->isGuest && (\Yii::$app->user->identity->active !== 2);
                        },
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new \app\models\DaftarfenomenagabungCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 20;
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $a = Fenomena::findOne($id);
        $nama = $a['perekam'];

        if (Yii::$app->request->isAjax) {
            return $this->renderAjax('view', [
                'model' => $this->findModel($id),
                'namapelapor' => $nama,
            ]);
        } else {
            return $this->render('view', [
                'model' => $this->findModel($id),
                'namapelapor' => $nama,
            ]);
        }
    }

    public function actionCreate()
    {
        $model = new Fenomena();
        if ($model->load(Yii::$app->request->post())) {
            if (Yii::$app->user->identity->satker == 1000) {
                $model->wilayah = $_POST['Fenomena']['wilayah'];
            } else {
                $model->wilayah = Yii::$app->user->identity->satker;
            }
            $model->bulan = $_POST['Fenomena']['bulan'];
            $model->tahun = $_POST['Fenomena']['tahun'];
            $model->judul = ucfirst($_POST['Fenomena']['judul']);
            $text = ucfirst($_POST['Fenomena']['fenomena']);            
            $text = preg_replace_callback("/_([a-zA-Z])/", function ($match) {
                return strtoupper($match[1]);
            }, $text);
            $model->fenomena = $text;
            $model->sumber = $_POST['Fenomena']['sumber'];
            $model->sumberket = ucfirst($_POST['Fenomena']['sumberket']);
            $model->pengaruh = $_POST['Fenomena']['pengaruh'];
            $model->kat01 = $_POST['Fenomena']['kat01'];
            $model->kat02 = $_POST['Fenomena']['kat02'];
            $model->kat03 = $_POST['Fenomena']['kat03'];
            $model->kat04 = $_POST['Fenomena']['kat04'];
            $model->kat05 = $_POST['Fenomena']['kat05'];
            $model->kat06 = $_POST['Fenomena']['kat06'];
            $model->kat07 = $_POST['Fenomena']['kat07'];
            $model->kat08 = $_POST['Fenomena']['kat08'];
            $model->kat09 = $_POST['Fenomena']['kat09'];
            $model->kat10 = $_POST['Fenomena']['kat10'];
            $model->kat11 = $_POST['Fenomena']['kat11'];
            $model->kat12 = $_POST['Fenomena']['kat12'];
            $model->kat13 = $_POST['Fenomena']['kat13'];
            $model->kat14 = $_POST['Fenomena']['kat14'];
            $model->kat15 = $_POST['Fenomena']['kat15'];
            $model->kat16 = $_POST['Fenomena']['kat16'];
            $model->kat17 = $_POST['Fenomena']['kat17'];

            $model->tgl_rekam = date('Y-m-d H:i:s');
            $model->perekam = Yii::$app->user->identity->username;
            $model->save();
            if ($model->save()) {
                Yii::$app->session->setFlash('success', "Fenomena berhasil direkam. Terima kasih.");
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                Yii::$app->session->setFlash('error', "Data gagal disimpan.");
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $affected_rows = Fenomena::updateAll(['deleted' => 1], 'id = ' . $id);
        if ($affected_rows == 0) {
            Yii::$app->session->setFlash('success', "Gagal.");
            return $this->redirect('view', [
                'id' => $id,
                'model' => $model,
            ]);
        } else {
            Yii::$app->session->setFlash('success', "Rekaman fenomena berhasil dihapus. Terima kasih.");
            return $this->redirect(['index']);
        }
    }

    protected function findModel($id)
    {
        if (($model = Fenomena::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionJumlahentri($a, $b)
    {
        $searchModel = new FenomenaCariJumlahEntri();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 15;
        if ($a != '' && $b != '') {
            $dataProvider->query->andWhere(' YEAR(tgl_rekam) = \'' . $a . '\'')
                ->andWhere(' MONTH(tgl_rekam) = \'' . $b . '\'');
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
            $tah = $a;
        } elseif ($a != '' && $b == '') {
            $dataProvider->query->andWhere(' YEAR(tgl_rekam) = \'' . $a . '\'');
            $tah = $a;
            $bul = 'Semua';
        } elseif ($a == '' && $b != '') {
            $dataProvider->query->andWhere(' MONTH(tgl_rekam) = \'' . $b . '\'');
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $tah = 'Sejak 2017';
            $bul = $query->nama_bulan;
        } else {
            $tah = 'Sejak 2017';
            $bul = 'Semua';
        }

        return $this->render('jumlahentri', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'tah' => $tah,
            'bul' => $bul,
            'b' => $b,
        ]);
    }

    public function actionJumlahfen($a, $b)
    {
        $searchModel = new FenomenaCariJumlahFen();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 11;
        if ($a != '' && $b != '') {
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' bulan = \'' . $b . '\'');
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
            $tah = $a;
        } elseif ($a != '' && $b == '') {
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'');
            $bul = 'Semua';
            $tah = $a;
        } elseif ($a == '' && $b != '') {
            $dataProvider->query->andWhere(' bulan = \'' . $b . '\'');
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
            $tah = 'Sejak 2015';
        } else {
            $tah = 'Sejak 2015';
            $bul = 'Semua';
        }
        return $this->render('jumlahfen', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'tah' => $tah,
            'bul' => $bul,
            'b' => $b
        ]);
    }

    public function actionJumlahkategori($a, $b)
    {
        $searchModel = new \app\models\FenomenaCariJumlahKategori();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 11;
        if ($a != '' && $b != '') {
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' bulan = \'' . $b . '\'');
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
            $tah = $a;
        } elseif ($a != '' && $b == '') {
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'');
            $bul = 'Semua';
            $tah = $a;
        } elseif ($a == '' && $b != '') {
            $dataProvider->query->andWhere(' bulan = \'' . $b . '\'');
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
            $tah = 'Sejak 2015';
        } else {
            $tah = 'Sejak 2015';
            $bul = 'Semua';
        }
        return $this->render('jumlahkategori', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'tah' => $tah,
            'bul' => $bul,
            'b' => $b
        ]);
    }

    public function actionTabulasidinamis($a, $b, $c, $d)
    {
        $searchModel = new \app\models\FenomenaCariTabulasiDinamis();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 11;
        $bul = '';
        $wil = '';
        if ($c != '' && $a != '' && $d != '' && $b != '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' bulan = \'' . $b . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
            $querys = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $querys->nama_bulan;
        } elseif ($c != '' && $a != '' && $d == '' && $b != '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' bulan = \'' . $b . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->groupBy(['triwulan']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
            $querys = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $querys->nama_bulan;
        } elseif ($c != '' && $a != '' && $d != '' && $b == '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['bulan', 'wilayah']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
        } elseif ($c != '' && $a != '' && $d == '' && $b == '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->groupBy(['bulan', 'wilayah']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
        } elseif ($c != '' && $a == '' && $d != '' && $b != '') { 
            $dataProvider->query->andWhere(' bulan = \'' . $b . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['tahun']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
            $querys = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $querys->nama_bulan;
        } elseif ($c != '' && $a == '' && $d == '' && $b != '') { 
            $dataProvider->query->andWhere(' bulan = \'' . $b . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->groupBy(['tahun']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
            $querys = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $querys->nama_bulan;
        } elseif ($c != '' && $a == '' && $d != '' && $b == '') { 
            $dataProvider->query->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['triwulan', 'wilayah']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
        } elseif ($c != '' && $a == '' && $d == '' && $b == '') { 
            $dataProvider->query->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->groupBy(['tahun', 'wilayah']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
        } elseif ($c == '' && $a == '' && $d != '' && $b != '') { 
            $dataProvider->query->andWhere(' bulan = \'' . $b . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['wilayah']);
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
        } elseif ($c == '' && $a == '' && $d == '' && $b != '') { 
            $dataProvider->query->andWhere(' bulan = \'' . $b . '\'');
            $dataProvider->query->groupBy(['wilayah']);
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
        } elseif ($c == '' && $a == '' && $d != '' && $b == '') { 
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['triwulan', 'wilayah']);
        } elseif ($c == '' && $a == '' && $d == '' && $b == '') { 
            $dataProvider->query->groupBy(['wilayah']);
        } elseif ($c == '' && $a != '' && $d != '' && $b == '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['triwulan', 'wilayah']);
        } elseif ($c == '' && $a != '' && $d == '' && $b == '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'');
            $dataProvider->query->groupBy(['wilayah']);
        } elseif ($c == '' && $a != '' && $d != '' && $b != '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' bulan = \'' . $b . '\'');
            $dataProvider->query->groupBy(['wilayah']);
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
        } elseif ($c == '' && $a != '' && $d == '' && $b != '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' bulan = \'' . $b . '\'');
            $dataProvider->query->groupBy(['wilayah']);
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
        } else {
            $tah = 'Sejak 2015';
            $bul = 'Semua';
        }
        return $this->render('tabulasidinamis', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
            'bul' => $bul,
            'wil' => $wil
        ]);
    }

    public function actionTabulasidinamispeng($a, $b, $c, $d)
    {
        $searchModel = new \app\models\FenomenaCariTabulasiDinamis();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 11;
        $bul = '';
        $wil = '';
        if ($c != '' && $a != '' && $d != '' && $b != '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' bulan = \'' . $b . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
            $querys = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $querys->nama_bulan;
        } elseif ($c != '' && $a != '' && $d == '' && $b != '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' bulan = \'' . $b . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->groupBy(['triwulan']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
            $querys = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $querys->nama_bulan;
        } elseif ($c != '' && $a != '' && $d != '' && $b == '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['bulan', 'wilayah']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
        } elseif ($c != '' && $a != '' && $d == '' && $b == '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->groupBy(['bulan', 'wilayah']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
        } elseif ($c != '' && $a == '' && $d != '' && $b != '') { 
            $dataProvider->query->andWhere(' bulan = \'' . $b . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['tahun']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
            $querys = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $querys->nama_bulan;
        } elseif ($c != '' && $a == '' && $d == '' && $b != '') { 
            $dataProvider->query->andWhere(' bulan = \'' . $b . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->groupBy(['tahun']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
            $querys = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $querys->nama_bulan;
        } elseif ($c != '' && $a == '' && $d != '' && $b == '') { 
            $dataProvider->query->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['triwulan', 'wilayah']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
        } elseif ($c != '' && $a == '' && $d == '' && $b == '') { 
            $dataProvider->query->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->groupBy(['tahun', 'wilayah']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
        } elseif ($c == '' && $a == '' && $d != '' && $b != '') { 
            $dataProvider->query->andWhere(' bulan = \'' . $b . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['wilayah']);
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
        } elseif ($c == '' && $a == '' && $d == '' && $b != '') { 
            $dataProvider->query->andWhere(' bulan = \'' . $b . '\'');
            $dataProvider->query->groupBy(['wilayah']);
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
        } elseif ($c == '' && $a == '' && $d != '' && $b == '') { 
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['triwulan', 'wilayah']);
        } elseif ($c == '' && $a == '' && $d == '' && $b == '') { 
            $dataProvider->query->groupBy(['wilayah']);
        } elseif ($c == '' && $a != '' && $d != '' && $b == '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['triwulan', 'wilayah']);
        } elseif ($c == '' && $a != '' && $d == '' && $b == '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'');
            $dataProvider->query->groupBy(['wilayah']);
        } elseif ($c == '' && $a != '' && $d != '' && $b != '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' bulan = \'' . $b . '\'');
            $dataProvider->query->groupBy(['wilayah']);
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
        } elseif ($c == '' && $a != '' && $d == '' && $b != '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' bulan = \'' . $b . '\'');
            $dataProvider->query->groupBy(['wilayah']);
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
        } else {
            $tah = 'Sejak 2015';
            $bul = 'Semua';
        }
        return $this->render('tabulasidinamispeng', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
            'bul' => $bul,
            'wil' => $wil,
        ]);
    }

    public function actionTabulasidinamispengaruh($a, $b, $c, $d, $e)
    {
        $searchModel = new \app\models\FenomenaCariTabulasiDinamisPengaruh();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 11;
        $bul = '';
        $wil = '';
        if ($c != '' && $a != '' && $d != '' && $b != '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' bulan = \'' . $b . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
            $querys = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $querys->nama_bulan;
        } elseif ($c != '' && $a != '' && $d == '' && $b != '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' bulan = \'' . $b . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->groupBy(['triwulan']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
            $querys = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $querys->nama_bulan;
        } elseif ($c != '' && $a != '' && $d != '' && $b == '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['bulan', 'wilayah']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
        } elseif ($c != '' && $a != '' && $d == '' && $b == '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->groupBy(['bulan', 'wilayah']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
        } elseif ($c != '' && $a == '' && $d != '' && $b != '') { 
            $dataProvider->query->andWhere(' bulan = \'' . $b . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['tahun']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
            $querys = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $querys->nama_bulan;
        } elseif ($c != '' && $a == '' && $d == '' && $b != '') { 
            $dataProvider->query->andWhere(' bulan = \'' . $b . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->groupBy(['tahun']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
            $querys = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $querys->nama_bulan;
        } elseif ($c != '' && $a == '' && $d != '' && $b == '') { 
            $dataProvider->query->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['triwulan', 'wilayah']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
        } elseif ($c != '' && $a == '' && $d == '' && $b == '') { 
            $dataProvider->query->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->groupBy(['tahun', 'wilayah']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
        } elseif ($c == '' && $a == '' && $d != '' && $b != '') { 
            $dataProvider->query->andWhere(' bulan = \'' . $b . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['wilayah']);
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
        } elseif ($c == '' && $a == '' && $d == '' && $b != '') { 
            $dataProvider->query->andWhere(' bulan = \'' . $b . '\'');
            $dataProvider->query->groupBy(['wilayah']);
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
        } elseif ($c == '' && $a == '' && $d != '' && $b == '') { 
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['triwulan', 'wilayah']);
        } elseif ($c == '' && $a == '' && $d == '' && $b == '') { 
            $dataProvider->query->groupBy(['wilayah']);
        } elseif ($c == '' && $a != '' && $d != '' && $b == '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['triwulan', 'wilayah']);
        } elseif ($c == '' && $a != '' && $d == '' && $b == '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'');
            $dataProvider->query->groupBy(['wilayah']);
        } elseif ($c == '' && $a != '' && $d != '' && $b != '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' bulan = \'' . $b . '\'');
            $dataProvider->query->groupBy(['wilayah']);
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
        } elseif ($c == '' && $a != '' && $d == '' && $b != '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' bulan = \'' . $b . '\'');
            $dataProvider->query->groupBy(['wilayah']);
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
        } else {
            $tah = 'Sejak 2015';
            $bul = 'Semua';
        }
        $dataProvider->query->andWhere(' pengaruh = \'' . $e . '\'');
        return $this->render('tabulasidinamispengaruh', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
            'e' => $e,
            'bul' => $bul,
            'wil' => $wil
        ]);
    }

    public function actionTabulasidinamispengaruhpeng($a, $b, $c, $d, $e)
    {
        $searchModel = new \app\models\FenomenaCariTabulasiDinamisPengaruh();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 11;
        $bul = '';
        $wil = '';
        if ($c != '' && $a != '' && $d != '' && $b != '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' bulan = \'' . $b . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
            $querys = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $querys->nama_bulan;
        } elseif ($c != '' && $a != '' && $d == '' && $b != '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' bulan = \'' . $b . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->groupBy(['triwulan']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
            $querys = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $querys->nama_bulan;
        } elseif ($c != '' && $a != '' && $d != '' && $b == '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['bulan', 'wilayah']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
        } elseif ($c != '' && $a != '' && $d == '' && $b == '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->groupBy(['bulan', 'wilayah']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
        } elseif ($c != '' && $a == '' && $d != '' && $b != '') { 
            $dataProvider->query->andWhere(' bulan = \'' . $b . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['tahun']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
            $querys = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $querys->nama_bulan;
        } elseif ($c != '' && $a == '' && $d == '' && $b != '') { 
            $dataProvider->query->andWhere(' bulan = \'' . $b . '\'')
                ->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->groupBy(['tahun']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
            $querys = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $querys->nama_bulan;
        } elseif ($c != '' && $a == '' && $d != '' && $b == '') { 
            $dataProvider->query->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['triwulan', 'wilayah']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
        } elseif ($c != '' && $a == '' && $d == '' && $b == '') { 
            $dataProvider->query->andWhere(' wilayah =\'' . $c . '\'');
            $dataProvider->query->groupBy(['tahun', 'wilayah']);
            $query = \app\models\Satker::find()->where(['id_satker' => $c])->one();
            $wil = $query->nama_satker;
        } elseif ($c == '' && $a == '' && $d != '' && $b != '') { 
            $dataProvider->query->andWhere(' bulan = \'' . $b . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['wilayah']);
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
        } elseif ($c == '' && $a == '' && $d == '' && $b != '') { 
            $dataProvider->query->andWhere(' bulan = \'' . $b . '\'');
            $dataProvider->query->groupBy(['wilayah']);
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
        } elseif ($c == '' && $a == '' && $d != '' && $b == '') { 
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['triwulan', 'wilayah']);
        } elseif ($c == '' && $a == '' && $d == '' && $b == '') { 
            $dataProvider->query->groupBy(['wilayah']);
        } elseif ($c == '' && $a != '' && $d != '' && $b == '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'');
            $dataProvider->query->andHaving(' triwulan = \'' . $d . '\'');
            $dataProvider->query->groupBy(['triwulan', 'wilayah']);
        } elseif ($c == '' && $a != '' && $d == '' && $b == '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'');
            $dataProvider->query->groupBy(['wilayah']);
        } elseif ($c == '' && $a != '' && $d != '' && $b != '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' bulan = \'' . $b . '\'');
            $dataProvider->query->groupBy(['wilayah']);
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
        } elseif ($c == '' && $a != '' && $d == '' && $b != '') { 
            $dataProvider->query->andWhere(' tahun = \'' . $a . '\'')
                ->andWhere(' bulan = \'' . $b . '\'');
            $dataProvider->query->groupBy(['wilayah']);
            $query = Bulan::find()->where(['id_bulan' => $b])->one();
            $bul = $query->nama_bulan;
        } else {
            $tah = 'Sejak 2015';
            $bul = 'Semua';
        }
        $dataProvider->query->andWhere(' pengaruh = \'' . $e . '\'');

        return $this->render('tabulasidinamispengaruhpeng', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
            'e' => $e,
            'bul' => $bul,
            'wil' => $wil
        ]);
    }
    public function actionDashboard()
    {
        $searchModel = new \app\models\DaftarfenomenagabungCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 10;

        $searchModel = new FenomenaCariJumlahFen();
        $dataProviderJumlahFen = $searchModel->search(Yii::$app->request->queryParams);

        $searchModel = new FenomenaCariJumlahEntri();
        $dataProviderJumlahEntri = $searchModel->search(Yii::$app->request->queryParams);
        $dataProviderJumlahEntri->pagination->pageSize = 10;

        $searchModel = new FenomenaCari();
        $dataProviderKategori = $searchModel->kategori(Yii::$app->request->queryParams);

        $searchModel = new FenomenaCari();
        $dataProviderTrend = $searchModel->trend(Yii::$app->request->queryParams);

        if (!empty($_GET['DaftarfenomenagabungCari']['fenomena'])) {
            $keyword = $_GET['DaftarfenomenagabungCari']['fenomena'];
        } else
            $keyword = '';

        
        return $this->render('dashboard', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dataProviderJumlahFen' => $dataProviderJumlahFen,
            'dataProviderJumlahEntri' => $dataProviderJumlahEntri,
            'keyword' => $keyword,
            'dataProviderTrend' => $dataProviderTrend,
            'dataProviderKategori' => $dataProviderKategori
        ]);
    }
}
