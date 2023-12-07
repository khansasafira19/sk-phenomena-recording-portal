<?php

use app\models\Pengguna;
use yii\helpers\Html;
use yii\helpers\Url;
// use yii\grid\ActionColumn;
// use yii\grid\GridView;
use kartik\grid\GridView;
use yii\bootstrap4\Modal;
use kartik\grid\SerialColumn;
use kartik\grid\ActionColumn;

$this->title = 'Rekap Pegawai dalam Aplikasi Ini';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper">
    <div class="d-flex justify-content-between">
        <div class="p-2">
            <?php //echo //$this->render('_search', ['model' => $searchModel]); 
            ?>
        </div>
        <div class="p-2">
            <?php if (Yii::$app->user->identity->admin == 1) : ?>
                <p class="text-right">
                    <?= Html::a('<i class="fas fa-users"></i> Tambah Data Baru', ['create'], ['class' => 'btn btn-outline-primary bundar btn-sm']) ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php if (Yii::$app->session->hasFlash('success')) : ?>
                <div class="alert alert-info alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <h4><i class="icon fa fa-check"></i>Berhasil!</h4>
                    <?= Yii::$app->session->getFlash('success') ?>
                </div>
            <?php endif; ?>
            <?php if (Yii::$app->session->hasFlash('warning')) : ?>
                <div class="alert alert-warning alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <h4><i class="icon fa fa-check"></i> Hai!</h4>
                    <?= Yii::$app->session->getFlash('warning') ?>
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <?php
                    $layout = '
                        <div class="card-header bg-light text-dark">
                            <div class="d-flex justify-content-between" style="margin-bottom: -1rem; margin-top:-0.5rem">
                                <div class="p-2">
                                {toolbar}
                                </div>
                                <div class="p-2" style="margin-top:0.5rem;">
                                {summary}
                                </div>
                                <div class="p-2">
                                {pager}
                                </div>
                            </div>                            
                        </div>  
                        {items}
                    ';
                    ?>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            [
                                // 'class' => 'yii\grid\SerialColumn',
                                'class' => SerialColumn::class,
                            ],
                            [
                                'attribute' => 'satker',
                                'label' => 'Satuan Kerja',
                                'value' => 'satkere.nama_satker',
                                'filter' => false,
                                'mergeHeader' => true
                            ],
                            'nama',
                            'username',
                            [
                                'attribute' => 'admin',
                                'label' => 'Status Admin',
                                'format' => 'raw',
                                'value' => function ($data) {
                                    if ($data['admin'] === 1)
                                        return '<center><i class="fas fa-check"></i></center>';
                                    elseif ($data['admin'] === 0)
                                        return '<center>-</center>';
                                    else
                                        return '<center>-</center>';
                                },
                                'filter' => false,
                                'mergeHeader' => true
                            ],
                            [
                                // 'class' => 'yii\grid\ActionColumn',
                                'class' => ActionColumn::class,
                                'header' => 'Aksi',
                                'template' => '{update}{approverevokelevel}{delete}{aktifkanlagi}',
                                // 'contentOptions' => ['class' => 'text-center'],

                                'visibleButtons' => [
                                    'delete' => function ($model, $key, $index) {
                                        if (Yii::$app->user->identity->admin === 1) {
                                            return (Yii::$app->user->identity->username === $model['username'] //datanya sendiri
                                                || $model->active == 0
                                            ) ? false : true;
                                        } else
                                            return false;
                                    },
                                    'aktifkanlagi' => function ($model, $key, $index) {
                                        return ($model->active == 0) ? true : false;
                                    },
                                    'approverevokelevel' => function ($model, $key, $index) {
                                        if (Yii::$app->user->identity->admin === 1) {
                                            return (Yii::$app->user->identity->username === $model['username'] //datanya sendiri
                                            ) ? false : true;
                                        } else
                                            return false;
                                    },
                                ],
                                'buttons'  => [
                                    'delete' => function ($url, $model, $key) {
                                        return Html::a('<i class="fas text-danger fa-trash-alt"></i> ', $url, [
                                            'title' => 'Nonaktifkan pengguna ini',
                                            'data-method' => 'post',
                                            'data-pjax' => 0,
                                            'data-confirm' => 'Anda yakin ingin menonaktifkan pengguna ini? <br/><strong>' . $model['nama'] . '</strong>'
                                        ]);
                                    },
                                    'aktifkanlagi' => function ($url, $model, $key) {
                                        return Html::a('<i class="fas text-success fa-recycle"></i>', $url, [
                                            'title' => 'Aktifkan pengguna ini',
                                            'data-method' => 'post',
                                            'data-pjax' => 0,
                                            'data-confirm' => 'Anda yakin ingin mengaktifkan kembali pengguna ini? <br/><strong>' . $model['nama'] . '</strong>'
                                        ]);
                                    },
                                    'approverevokelevel' => function ($url, $model, $key) {
                                        return Html::a('<i class="fa text-blue">&#xf7d9;</i> ', 'approverevokelevel?id=' . $key, [
                                            'title' => 'Jadikan admin',
                                            'data-method' => 'post',
                                            'data-pjax' => 0,
                                            'data-confirm' => 'Anda yakin ingin me-revoke/approve level pegawai ini? <br/><strong>'
                                                . $model->nama . '</strong> sebagai <strong>Admin</strong>'
                                        ]);
                                    },
                                    'update' => function ($key, $client) {
                                        //$url = 'update/'.$key;
                                        return Html::a('<i class="fa">&#xf4ff;</i> ', $key, ['title' => 'Update rincian pengguna ini']);
                                        //return Html::a('<button class="btn btn-sm tombol-biru"><i class="fa text-info">&#xf06e;</i></button>', $key, ['title' => 'Lihat rincian logbook ini', 'class' => 'modalButton', 'data-pjax' => '0']);
                                    },
                                ],
                            ],
                            [
                                'attribute' => 'active',
                                'label' => 'Status Akses',
                                'format' => 'raw',
                                'value' => function ($data) {
                                    if ($data['active'] === 1)
                                        return '<center><span title="Aktif" class="badge bg-success"><i class="fas fa-check"></i></span></center>';
                                    elseif ($data['active'] === 0)
                                        return '<center><span title="Non Aktif" class="badge bg-danger"><i class="fas fa-times"></i></span></center>';
                                    elseif ($data['active'] === 2)
                                        return '<center><span title="Aktif Sebagai Viewer" class="badge bg-primary"><i class="fas fa-eye"></i></span></center>';
                                    else
                                        return '<center><i class="fas fa-times"></i></center>';
                                },
                                'filter' => false,
                                'mergeHeader' => true
                            ],
                        ],
                        'layout' => $layout,
                        'bordered' => false,
                        'striped' => true,
                        'condensed' => true,
                        'hover' => true,
                        'headerRowOptions' => ['class' => 'kartik-sheet-style'],
                        'filterRowOptions' => ['class' => 'kartik-sheet-style'],
                        'export' => [
                            'fontAwesome' => true,
                            'label' => '<i class="fa">&#xf56d;</i>',
                        ],
                        'exportConfig' => [
                            GridView::CSV => ['label' => 'CSV', 'filename' => 'Pengguna SK-PRS - ' . date('d-M-Y')],
                            GridView::HTML => ['label' => 'HTML', 'filename' => 'Pengguna SK-PRS - ' . date('d-M-Y')],
                            GridView::EXCEL => ['label' => 'EXCEL', 'filename' => 'Pengguna SK-PRS - ' . date('d-M-Y')],
                            GridView::TEXT => ['label' => 'TEXT', 'filename' => 'Pengguna SK-PRS - ' . date('d-M-Y')],
                        ],
                        'pjax' => false,
                        'pjaxSettings' => [
                            'neverTimeout' => true,
                            // 'enablePushState' => false,
                            'options' => ['id' => 'some_pjax_id'],
                        ],
                        'pager' => [
                            'firstPageLabel' => '<i class="fas fa-angle-double-left"></i>',
                            'lastPageLabel' => '<i class="fas fa-angle-double-right"></i>',
                            'prevPageLabel' => '<i class="fas fa-angle-left"></i>',   // Set the label for the "previous" page button
                            'nextPageLabel' => '<i class="fas fa-angle-right"></i>',
                            'maxButtonCount' => 1,
                        ],
                        'toggleDataOptions' => ['minCount' => 10],
                        'floatOverflowContainer' => true,
                        'floatHeader' => true,
                        'floatHeaderOptions' => [
                            'scrollingTop' => '0',
                            'position' => 'absolute',
                            'top' => 50
                        ],
                    ]); ?>

                </div>
            </div>
        </div>
    </div>
</div>