<?php

namespace app\controllers;

use app\models\Pengguna;
use app\models\PenggunaCari;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenggunaController implements the CRUD actions for Pengguna model.
 */
class PenggunaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
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
                            'actions' => ['error', 'create'],
                            'allow' => true,
                        ],
                        [
                            'actions' => ['view', 'index', 'approverevokelevel', 'update', 'delete', 'aktifkanlagi'],
                            'allow' => true,
                            'matchCallback' => function ($rule, $action) {
                                return !\Yii::$app->user->isGuest && (\Yii::$app->user->identity->admin === 1);
                            },
                        ],
                        [
                            'actions' => ['ubahpassword'], // add all actions to take guest to login page
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Pengguna models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PenggunaCari();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pengguna model.
     * @param string $username Username
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($username)
    {
        if (Yii::$app->request->isAjax) {
            return $this->renderAjax('view', [
                'model' => $this->findModel($username),
            ]);
        } else {
            return $this->render('view', [
                'model' => $this->findModel($username),
            ]);
        }
    }

    /**
     * Creates a new Pengguna model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */

    public function actionCreate()
    {
        /* inisiasi API */
        if (Yii::$app->user->isGuest)
            $this->layout = 'main-guest';
       
        $model = new Pengguna();
        if ($model->load(Yii::$app->request->post())) {
            if (Yii::$app->user->isGuest)
                $model->active = 2; //akses viewer utk pengguna yang daftar sendiri
            if (isset($_POST['Pengguna']['nama'])) {
                $model->nama = $_POST['Pengguna']['nama'];
            } else {
                // handle the case where 'nama' is not set in $_POST
            }
            // $model->satker = $_POST['Pengguna']['satker'];
            if (isset($_POST['Pengguna']['satker'])) {
                $model->satker = $_POST['Pengguna']['satker'];
            } else {
                // handle the case where 'satker' is not set in $_POST
            }

            if ($model->active == 1)  //jika admin memilih hak akses viewer utk pengguna yang didaftarkan
                $model->active = 2;
            else
                $model->active = 1;
            if ($model->save()) {
                Yii::$app->session->setFlash('success', "Data berhasil direkam. Pengguna dapat login. <br/> Terima kasih..");
                if (Yii::$app->user->isGuest)
                    return $this->redirect(['site/login']); //akses viewer
                return $this->redirect(['pengguna/index']);
            } else {
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Updates an existing Pengguna model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $username Username
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post())) {
            if ($model->active == 1)  //jika admin memilih hak akses viewer utk pengguna yang didaftarkan
                $model->active = 2;
            else
                $model->active = 1; //jika admin menghapus hak akses viewer, menjadi pengguna biasa
            $model->satker = $_POST['Pengguna']['satker'];
            if ($model->save()) {
                return $this->redirect(['view', 'username' => $model->username]);
            }
        }

        return $this->render('update', [
            'model' => $model,           
        ]);
    }

    /**
     * Deletes an existing Pengguna model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $username Username
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $affected_rows = Pengguna::updateAll(['active' => 0], 'username = "' . $id . '"');
        if ($affected_rows == 0) {
            Yii::$app->session->setFlash('success', "Gagal.");
            return $this->redirect('view', [
                'id' => $id,
                'model' => $model,
            ]);
        } else {
            Yii::$app->session->setFlash('success', "Pengguna berhasil di-nonaktifkan. Terima kasih.");
            return $this->redirect(['index']);
        }
    }
    /**
     * Finds the Pengguna model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $username Username
     * @return Pengguna the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($username)
    {
        if (($model = Pengguna::findOne(['username' => $username])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionApproverevokelevel($id)
    {
        $model = Pengguna::findOne($id);
        if ($model->admin == 0) {
            $affected_rows = Pengguna::updateAll(['admin' => 1], ['username' => $id]);
        } else
            $affected_rows = Pengguna::updateAll(['admin' => 0], ['username' => $id]);
        if ($affected_rows === 0) {
            Yii::$app->session->setFlash('success', "Gagal.");
            return $this->redirect('index', []);
        } else {
            Yii::$app->session->setFlash('success', "Status Admin pengguna berhasil di-approve/revoke. Terima kasih.");
            return $this->redirect(['index']);
        }
    }
    public function actionUbahpassword($id)
    {
        $model = new \app\models\UbahPasswordForm();
        $pengguna = Pengguna::findOne($id);
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->attributes = $_POST['UbahPasswordForm'];

            Yii::$app->db->createCommand()
                ->update('pengguna', ['password' => md5($_POST['UbahPasswordForm']['password_baru'])], 'username = "' . $id . '"')
                ->execute();
            Yii::$app->session->setFlash('success', "Password berhasil diubah. Terima kasih.");
            return $this->redirect(['index']);
        }

        return $this->render('ubahpassword', [
            'model' => $model,
        ]);
    }

    public function actionAktifkanlagi($id)
    {
        $model = $this->findModel($id);
        $affected_rows = Pengguna::updateAll(['active' => 1], 'username = "' . $id . '"');
        if ($affected_rows == 0) {
            Yii::$app->session->setFlash('success', "Gagal.");
            return $this->redirect('view', [
                'id' => $id,
                'model' => $model,
            ]);
        } else {
            Yii::$app->session->setFlash('success', "Pengguna berhasil diaktifkan kembali. Terima kasih.");
            return $this->redirect(['index']);
        }
    }
}
