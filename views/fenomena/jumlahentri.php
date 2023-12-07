<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use yii\helpers\ArrayHelper;
use app\models\Bulan;
//use yii\widgets\ActiveForm;
use kartik\form\ActiveForm;
use miloschuman\highcharts\Highcharts;

//use yii\bootstrap\ActiveForm;

$this->title = 'Jumlah Rekaman Fenomena';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .table-striped>thead>tr>th>a {
        text-decoration: none !important;
    }
    a#w1-togdata-page, a#w1-togdata-all {
        color: #343a40 !important;
        text-decoration: none !important;
    }
</style>
<div class="wrapper">
    <div class="row alert">
        <?php if ($dataProvider->totalCount > 0) : ?>
            <div class="col-md-6">
                <?php
                $form = ActiveForm::begin([
                    'action' => ['jumlahentri'],
                    'method' => 'get',
                    'type' => ActiveForm::TYPE_INLINE,
                    'fieldConfig' => ['options' => ['class' => 'form-group mr-2']],
                ]);
                ?>

                <div style="width: 50%; /* Can be in percentage also. */
                    height: auto;
                    margin: 0 auto;
                    padding: 10px;
                    position: relative;">
                    <div class="row">
                        <?=
                        $form->field($searchModel, 'tahunentri')->dropDownList(
                            $searchModel->getYearsJumEntri(),
                            ['class' => 'form-control input', 'prompt' => 'Tahun', 'name' => 'a', 'options' => [$tah => ['Selected' => 'selected']]]
                        )->label(false);
                        ?>

                        <?=
                        $form->field($searchModel, 'bulanentri')->dropDownList(
                            ArrayHelper::map(Bulan::find()->all(), 'id_bulan', 'nama_bulan'),
                            ['class' => 'form-control input', 'prompt' => 'Bulan', 'name' => 'b', 'options' => [$b => ['Selected' => 'selected']]]
                        )->label(false);
                        ?>
                        <div class="form-group">
                            <?= Html::submitButton('Cari ', ['class' => 'btn btn-info bg-biru']) ?>
                        </div>
                    </div>

                </div>
                <?php ActiveForm::end(); ?>


                <?php
                $kolomTampil = [
                    ['class' => 'kartik\grid\SerialColumn'],
                    'asal',
                    [
                        'attribute' => 'perekam',
                        //'value' => 'reporter.nama',    
                        'pageSummary' => 'Total',
                    ],
                    [
                        'attribute' => 'jum',
                        'value' => $searchModel->jum,
                        'pageSummary' => true,
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
                                </div>
                                <div class="p-2">
                                {export}
                                </div>
                            </div>                            
                        </div>  
                        {items}
                    ';
                ?>
                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
                    //'filterModel' => $searchModel,
                    'columns' => $kolomTampil,
                    // 'layout' => '{items}',
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
                    'panel' => ['type' => 'info', 'headingOptions' => ['class' => 'bg-biru']],
                ]);
                ?>

                <div class="text-center">
                    <?= Html::a('<i class="fas fa-users"></i> Cek Seluruh Jumlah Entri dari Tahun 2017', ['/fenomena/jumlahentri?a=&b='], ['class' => 'btn btn-info', 'style' => 'text-decoration:none!important']) ?>
                </div>
            </div>
            <div class="col-md-6">
                <?php
                $label = [];
                $nilai = [];

                foreach ($dataProvider->getModels() as $i => $ii) {
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
                            'text' => 'Jumlah Entri Fenomena'
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
                                'color' => '#337ab7',
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
        <?php else : ?>
            <div class="card card-default">
                <div class="card-body">
                    <div class="alert alert-info alert-dismissible bg-biru">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-info"></i> Hai!</h5>
                        Maaf. Belum ada data yang diinput pada bulan ini. (<?php echo date("F Y") ?>)
                    </div>
                </div>
                <div class="card-footer">
                    <?= Html::a('<i class="fas fa-users"></i> Cek Seluruh Jumlah Entri dari Tahun 2017', ['/fenomena/jumlahentri?a=&b='], ['class' => 'btn btn-info  bg-biru-muda', 'style' => 'text-decoration:none!important']) ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>