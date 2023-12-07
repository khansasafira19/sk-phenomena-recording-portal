<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Pengguna $model */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Data Pengguna', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pengguna-view">
    <?php if (Yii::$app->user->identity->admin == 1) : ?>
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->username], ['class' => 'btn btn-primary']) ?>
            <?php if (Yii::$app->user->identity->username != $model->username) : ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->username], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Anda yakin akan menghapus pengguna ini?',
                        'method' => 'post',
                    ],
                ]) ?>
            <?php endif; ?>
        </p>
    <?php endif; ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nama',
            'username',
            // 'password',
            'nip',
            // 'satker',
            [
                'attribute' => 'satker',
                'value' => function ($model) {
                    return 'Satker ' . $model->satkere->nama_satker;
                }
            ],
            'tgl_daftar',
            // 'admin',
            [
                'attribute' => 'admin',
                'label' => 'Status Admin',
                'value' => (($model->admin == 1) ? '<i class="fas fa-check"></i>' : '-'),
                'format' => 'html',
            ],
            // 'theme',
            [
                'attribute' => 'active',
                'label' => 'Status Akses',
                'value' => ($model->active == 0 ? '<span class="badge bg-danger"><i class="fas fa-times"></i> Non Aktif</span>'
                    : ($model->active == 1 ? '<span class="badge bg-success"><i class="fas fa-check"></i> Aktif</span>'
                        : '<span class="badge bg-primary"><i class="fas fa-eye"></i> Aktif Sebagai Viewer</span>')),
                'format' => 'html',
            ],
        ],
    ]) ?>

</div>