<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use yii\helpers\ArrayHelper;
use app\models\Bulan;
use app\models\Satker;
use yii\bootstrap4\Modal;
use kartik\grid\SerialColumn;
use kartik\grid\ActionColumn;

$this->title = 'Daftar Fenomena';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper">
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
                    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
                    <?php
                    $drops = ArrayHelper::map(Bulan::find()->asArray()->all(), 'nama_bulan', 'nama_bulan');
                    $kolomTampil = [
                        ['class' => 'kartik\grid\SerialColumn'],
                        [
                            'attribute' => 'kategori',
                            'filter' => false,
                            'value' => function ($model) {
                                return $model->getCategoryMeaning();
                            },
                            'hAlign' => 'center',
                            'mergeHeader' => true,
                        ],
                        [
                            'attribute' => 'fenomena',
                            //'value' => 'fenomena:ntext',
                            'filterInputOptions' => [
                                'class' => 'form-control',
                                'placeholder' => 'Fenomena ...',
                            ],
                            'group' => true,
                        ],
                        [
                            'class' => 'kartik\grid\ActionColumn',
                            'header' => 'Rincian',
                            'contentOptions' => ['class' => 'text-center'],
                            'buttons'  => [
                                'view' => function ($key, $client) {
                                    return Html::a('<i class="fa">&#xf06e;</i>', $key, ['title' => 'Lihat rincian fenomena ini', 'class' => 'modalButton', 'data-pjax' => '0']);
                                },
                            ],
                            'visibleButtons' => [
                                'update' => function ($model, $key, $index) {
                                    return ($model->perekam == Yii::$app->user->identity->username) ? true : false;
                                },
                                'delete' => function ($model, $key, $index) {
                                    return ($model->perekam == Yii::$app->user->identity->username) ? true : false;
                                }
                            ],
                        ],
                    ];
                    $kolomExport = [
                        ['class' => 'kartik\grid\SerialColumn'],
                        [
                            'attribute' => 'satker',
                            'value' => 'satker.nama_satker',
                            'label' => 'Wilayah',
                        ],
                        'tahun',

                        [
                            'attribute' => 'month',
                            'value' => 'month.nama_bulan',
                            'label' => 'Bulan',
                        ],
                        [
                            'attribute' => 'pengaruh',
                            'value' => function ($model) {
                                return $model->getImpact();
                            },
                            'label' => 'Pengaruh',
                        ],
                        [
                            'attribute' => 'sumber',
                            'value' => function ($model) {
                                return $model->getMedia();
                            },
                        ],
                        [
                            'attribute' => 'sumberket',
                            'label' => 'Keterangan Sumber',
                        ],
                        [
                            'attribute' => 'kategori',
                            'value' => function ($model) {
                                return $model->getCategoryMeaning();
                            },
                        ],
                        'fenomena:ntext',
                        [
                            'attribute' => 'tgl_rekam',
                            'label' => 'Timestamp Perekaman',
                        ],
                        [
                            'attribute' => 'reporter',
                            'value' => 'reporter.nama',
                            'label' => 'Perekam',
                        ],
                    ];
                    ?>
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
                    <div class="text-center">
                        <?=
                        ExportMenu::widget([
                            'dataProvider' => $dataProvider,
                            'columns' => $kolomExport,
                            'dropdownOptions' =>
                            [
                                'label' => 'Export',
                                'class' => 'btn btn-info dropdown-toggle text-light'
                            ],
                            'columnSelectorOptions' =>
                            [
                                'label' => 'Pilih Kolom Export',
                                'class' => 'btn btn-info dropdown-toggle text-light',
                                'scrollable' => true,
                            ],
                            'columnSelectorMenuOptions' =>
                            [
                                'style' => 'overflow-y: scroll, height: auto; 
                                    max-height: 200px;  overflow-x: hidden;',
                            ],
                            'exportConfig' =>
                            [
                                //ExportMenu::FORMAT_TEXT => false,
                                ExportMenu::FORMAT_HTML => false,
                                ExportMenu::FORMAT_EXCEL => false,
                                ExportMenu::FORMAT_PDF => false,
                                ExportMenu::FORMAT_EXCEL_X =>
                                [
                                    'label' => 'EXCEL',
                                ],
                                ExportMenu::FORMAT_TEXT =>
                                [
                                    'label' => 'TXT',
                                ]
                            ],
                        ]);
                        ?>
                        <br />
                        <br />
                        <p class="small">Karena banyaknya data, mohon untuk mengimport data secara bertahap (misal per kabupaten/kota).</p>
                    </div>
                    <hr />
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'filterUrl' => Yii::$app->request->hostInfo . Yii::$app->request->url,
                        'columns' => $kolomTampil,
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

<?php
Modal::begin([
    'title' => 'Rincian Fenomena',
    'id' => 'modal',
    'size' => 'modal-lg'
]);

echo '<div id="modalContent"></div>';

Modal::end();
?>
<script>
    $(function() {
        // changed id to class
        $('.modalButton').click(function() {
            $.get($(this).attr('href'), function(data) {
                $('#modal').modal('show').find('#modalContent').html(data)
            });
            return false;
        });
    });
</script>