<?php
$this->title = 'Dashboard SK-PRS';
$this->params['breadcrumbs'][] = $this->title;

use yii\helpers\Html;
use kartik\grid\GridView;
use miloschuman\highcharts\Highcharts;
use yii\helpers\ArrayHelper;
use app\models\Bulan;
use kartik\form\ActiveForm;
use yii\bootstrap4\Modal;
?>
<style>
    .highlight {
        background-color: #EEF43B !important;
    }
</style>
<div class="wrapper">
    <div class="row">
        <div class="col-lg-6">
            <div class="card alert">
                <?php
                $label = [];
                $nilai = [];

                foreach ($dataProviderTrend->getModels() as $i => $ii) {
                    $label[$i] = $ii['tahun'];
                    $nilai[$i] = (int) $ii['jum'];
                }
                //$dataProvider = $dataProvider->getModels();
                //$dataProvider = new \yii\data\ArrayDataProvider(['allModels' => $data]);
                echo Highcharts::widget([
                    'options' => [
                        'chart' => [
                            'type' => 'line',
                            'borderRadius' => 20,
                            'style' => [
                                'fontFamily' => '-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji',
                            ],
                            'backgroundColor' => '#e3f5fc'
                        ],
                        'title' => [
                            'text' => 'Trend Entri Fenomena'
                        ],
                        'credits' => ['enabled' => FALSE],
                        'scripts' => [
                            'highcharts-more', // enables supplementary chart types (gauge, arearange, columnrange, etc.)
                            'modules/exporting', // adds Exporting button/menu to chart
                            'themes/grid'        // applies global 'grid' theme to all charts
                        ],
                        'xAxis' => [
                            'categories' => $label,
                            'title' => ['text' => ''],
                        ],
                        'yAxis' => [
                            [
                                'title' => [
                                    'text' => 'Jumlah Entri'
                                ]
                            ],
                        ],
                        'legend' => [
                            'enabled' => false
                        ],
                        'series' => [
                            [
                                'name' => 'Entri',
                                'data' => $nilai,
                               
                            ]
                        ],
                        'tooltip' => [
                            'enabled' => true,
                            'pointFormat' => 'Entri: <b>{point.y}</b> entri fenomena',
                        ],
                    ]
                ]);
                ?>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card alert">
                <?php

                $chartData = [];
                foreach ($dataProviderKategori->models as $model) {
                    $chartData[] = [
                        // 'name' => $model['name'],
                        'data' => [
                            (int) $model['L1'],
                            (int) $model['L2'],
                            (int) $model['L3'],
                            (int) $model['L4'],
                            (int) $model['L5'],
                            (int) $model['L6'],
                            (int) $model['L7'],
                            (int) $model['L8'],
                            (int) $model['L9'],
                            (int) $model['L10'],
                            (int) $model['L11'],
                            (int) $model['L12'],
                            (int) $model['L13'],
                            (int) $model['L14'],
                            (int) $model['L15'],
                            (int) $model['L16'],
                            (int) $model['L17'],
                            (int) $model['P1'],
                            (int) $model['P2'],
                            (int) $model['P3'],
                            (int) $model['P4'],
                            (int) $model['P5'],
                            (int) $model['P6'],
                            (int) $model['P7'],
                        ],
                    ];
                }

                // echo Highcharts::widget([
                //     'options' => [
                //         'title' => ['text' => 'Fenomena'],
                //         'xAxis' => [
                //             'categories' => ['L1', 'L2', 'L3', 'L4', 'L5', 'L6', 'L7', 'L8', 'L9', 'L10', 'L11', 'L12', 'L13', 'L14', 'L15', 'L16', 'L17', 'P1', 'P2', 'P3', 'P4', 'P5', 'P6', 'P7'],
                //         ],
                //         'yAxis' => [
                //             'title' => ['text' => 'Jumlah'],
                //         ],
                //         'series' => $chartData,
                //     ],
                // ]);

                echo Highcharts::widget([
                    'options' => [
                        'chart' => [
                            'type' => 'line',
                            'borderRadius' => 20,
                            'style' => [
                                'fontFamily' => '-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji',
                            ],
                            'backgroundColor' => '#e3f5fc'
                        ],
                        'title' => [
                            'text' => 'Kategori Fenomena'
                        ],
                        'credits' => ['enabled' => FALSE],
                        'scripts' => [
                            'highcharts-more', // enables supplementary chart types (gauge, arearange, columnrange, etc.)
                            'modules/exporting', // adds Exporting button/menu to chart
                            'themes/grid'        // applies global 'grid' theme to all charts
                        ],
                        'xAxis' => [
                            'categories' => [
                                'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
                                'K', 'L', 'M,N', 'O', 'P', 'Q', 'R,S,T,U', 'PKRT', 'PKLNPRT',
                                'PKP', 'PMTP', 'Inventori', 'Ekspor', 'Impor'
                            ],
                        ],
                        'yAxis' => [
                            'title' => ['text' => 'Jumlah'],
                        ],
                        'series' => $chartData,
                        'legend' => [
                            'enabled' => false
                        ],
                        'tooltip' => [
                            'enabled' => true,
                            'pointFormat' => 'Entri: <b>{point.y}</b> entri fenomena',
                        ],
                    ]
                ]);
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card alert">
                <?php
                $label = [];
                $nilai = [];

                foreach ($dataProviderJumlahEntri->getModels() as $i => $ii) {
                    $label[$i] = $ii['perekam'];
                    $nilai[$i] = (int) $ii['jum'];
                }
                //$dataProvider = $dataProvider->getModels();
                //$dataProvider = new \yii\data\ArrayDataProvider(['allModels' => $data]);
                echo Highcharts::widget([
                    'options' => [
                        'chart' => [
                            'type' => 'column',
                            'borderRadius' => 20,
                            'style' => [
                                'fontFamily' => '-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji',
                            ],
                            'backgroundColor' => '#e3f5fc'
                        ],
                        'title' => [
                            'text' => 'Top 10 Contributors'
                        ],
                        'credits' => ['enabled' => FALSE],
                        'scripts' => [
                            'highcharts-more', // enables supplementary chart types (gauge, arearange, columnrange, etc.)
                            'modules/exporting', // adds Exporting button/menu to chart
                            'themes/grid'        // applies global 'grid' theme to all charts
                        ],
                        'xAxis' => [
                            'categories' => $label,
                            'title' => ['text' => ''],
                        ],
                        'yAxis' => [
                            [
                                'title' => [
                                    'text' => 'Jumlah Entri'
                                ]
                            ],
                        ],
                        'legend' => [
                            'enabled' => false
                        ],
                        'series' => [
                            [
                                'name' => 'Entri',
                                'data' => $nilai,
                               
                            ]
                        ],
                        'tooltip' => [
                            'enabled' => true,
                            'pointFormat' => 'Entri: <b>{point.y}</b> kali',
                        ],
                    ]
                ]);
                ?>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card alert">
                <?php
                $label = [];
                $nilai = [];

                foreach ($dataProviderJumlahFen->getModels() as $i => $ii) {
                    $label[$i] = $ii['wilayah'];
                    $nilai[$i] = (int) $ii['jumfen'];
                }
                //$dataProvider = $dataProvider->getModels();
                //$dataProvider = new \yii\data\ArrayDataProvider(['allModels' => $data]);
                echo Highcharts::widget([
                    'options' => [
                        'chart' => [
                            'type' => 'column',
                            'borderRadius' => 20,
                            'style' => [
                                'fontFamily' => '-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji',
                            ],
                            'backgroundColor' => '#e3f5fc'
                        ],
                        'title' => [
                            'text' => 'Wilayah Terjadi Fenomena'
                        ],
                        'credits' => ['enabled' => FALSE],
                        'scripts' => [
                            'highcharts-more', // enables supplementary chart types (gauge, arearange, columnrange, etc.)
                            'modules/exporting', // adds Exporting button/menu to chart
                            'themes/grid'        // applies global 'grid' theme to all charts
                        ],
                        'xAxis' => [
                            'categories' => $label,
                            'title' => ['text' => ''],
                        ],
                        'yAxis' => [
                            [
                                'title' => [
                                    'text' => 'Jumlah Fenomena'
                                ]
                            ],
                        ],
                        'legend' => [
                            'enabled' => false
                        ],
                        'series' => [
                            [
                                'name' => 'Fenomena',
                                'data' => $nilai,
                               
                            ]
                        ],
                        'tooltip' => [
                            'enabled' => true,
                            'pointFormat' => 'Jumlah: <b>{point.y}</b> fenomena',
                        ],
                    ]
                ]);
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" style="margin-bottom: -2rem;">
                    <div class="d-flex justify-content-between">
                        <div class="p-2"></div>
                        <div class="p-2">
                            <div class="input-group mx-auto">
                                <?php
                                $form = ActiveForm::begin([
                                    'action' => 'dashboard',
                                    'method' => 'get',
                                    'type' => ActiveForm::TYPE_INLINE,
                                    'tooltipStyleFeedback' => true, // shows tooltip styled validation error feedback
                                    'fieldConfig' => ['options' => ['class' => 'form-group']], // spacing field groups
                                    'options' => ['style' => 'align-items: flex-start; width:100%!important'] // set style for proper tooltips error display
                                ]); ?>

                                <?= $form->field($searchModel, 'fenomena', ['options' => [],]) ?>

                                <div class="input-group-append">
                                    <?= Html::submitButton('.<i class="fas fa-search fa-fw"></i>.', ['class' => 'btn btn-sidebar btn-info']) ?>
                                </div>
                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>
                        <div class="p-2"></div>
                    </div>

                </div>

                <div class="card-body table-responsive p-0">

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
                            'format' => 'html',
                            // 'value' => 'jenjange.nama_jenjang',
                            'value' => function ($model) use ($keyword) {
                                $terms = explode(" ", $keyword);
                                // return str_replace($keyword, "<span class='highlight'>" . $keyword . "</span>", $model->bukti_fisik);
                                $string = $model->fenomena;
                                $array = $terms;
                                $count = count($array);
                                for ($i = 0; $i < $count; $i++) {
                                    $string = str_ireplace($array[$i], "<span class='highlight'>" . ucwords($array[$i]) . "</span>", $string);
                                }
                                return $string;
                            }
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

                    ?>
                    <?php
                    $layout = '
                        <div class="card-header bg-light text-dark">
                            <div class="d-flex justify-content-between" style="margin-bottom: -1rem; margin-top:-0.5rem">
                                
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
                    <hr />
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        // 'filterModel' => $searchModel,
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