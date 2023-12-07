<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use yii\helpers\ArrayHelper;
use app\models\Satker;
use app\models\Bulan;
//use yii\widgets\ActiveForm;
use kartik\form\ActiveForm;
use miloschuman\highcharts\Highcharts;

//use yii\bootstrap\ActiveForm;

$this->title = 'Jumlah Fenomena Menurut Kategori';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .vertical-text {
        transform: rotate(90deg);
        transform-origin: left top 0;
    }
    .table-striped>thead>tr>th>a {
        text-decoration: none !important;
    }
</style>
<div class="wrapper">
    <?php if ($dataProvider->totalCount > 0) : ?>
        <div class="col-lg-12">

            <?php
            $form = ActiveForm::begin([
                'action' => ['jumlahkategori'],
                'method' => 'get',
                'type' => ActiveForm::TYPE_INLINE,
                'fieldConfig' => ['options' => ['class' => 'form-group mr-2']]
            ]);
            ?>
            <div class="row">
                <?=
                $form->field($searchModel, 'tahun')->dropDownList(
                    $searchModel->getYearsJumFen(),
                    ['class' => 'form-control input', 'prompt' => 'Tahun', 'name' => 'a', 'options' => [$tah => ['Selected' => 'selected']]]
                )->label(false);
                ?>


                <?=
                $form->field($searchModel, 'namabulan')->dropDownList(
                    ArrayHelper::map(Bulan::find()->all(), 'id_bulan', 'nama_bulan'),
                    ['class' => 'form-control input', 'prompt' => 'Bulan', 'name' => 'b', 'options' => [$b => ['Selected' => 'selected']]]
                )->label(false);
                ?>

                <div class="form-group">
                <?= Html::submitButton('Cari ', ['class' => 'btn btn-info bg-biru']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>

            <?php
            $kolomTampil = [
                ['class' => 'kartik\grid\SerialColumn'],
                [
                    'attribute' => 'wilayah',
                    //'filter' => (Html::activeDropDownList($searchModel, 'satker', ArrayHelper::map(Satker::find()->asArray()->all(), 'nama_satker', 'nama_satker'), ['class' => 'form-control input', 'prompt' => 'Pilih Wilayah'])),
                    'pageSummary' => 'Total',
                ],
                [
                    'attribute' => 'fen',
                    'pageSummary' => true,
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'L1',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['L1'] == 0) ? '-' : $data['L1'];
                    },
                    'hAlign' => 'center',
                    /* 'contentOptions' => function ($data) {
                  return ['style' => 'background-color:' . ($data['L1'] == 0 ? '#e3f5fc' : '#CCE6FF')];
                  }, */
                ],
                [
                    'attribute' => 'L2',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['L2'] == 0) ? '-' : $data['L2'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'L3',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['L3'] == 0) ? '-' : $data['L3'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'L4',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['L4'] == 0) ? '-' : $data['L4'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'L5',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['L5'] == 0) ? '-' : $data['L5'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'L6',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['L6'] == 0) ? '-' : $data['L6'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'L7',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['L7'] == 0) ? '-' : $data['L7'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'L8',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['L8'] == 0) ? '-' : $data['L8'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'L9',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['L9'] == 0) ? '-' : $data['L9'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'L10',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['L10'] == 0) ? '-' : $data['L10'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'L11',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['L11'] == 0) ? '-' : $data['L11'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'L12',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['L12'] == 0) ? '-' : $data['L12'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'L13',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['L13'] == 0) ? '-' : $data['L13'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'L14',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['L14'] == 0) ? '-' : $data['L14'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'L15',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['L15'] == 0) ? '-' : $data['L15'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'L16',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['L16'] == 0) ? '-' : $data['L16'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'L17',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['L17'] == 0) ? '-' : $data['L17'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'P1',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['P1'] == 0) ? '-' : $data['P1'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'P2',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['P2'] == 0) ? '-' : $data['P2'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'P3',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['P3'] == 0) ? '-' : $data['P3'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'P4',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['P4'] == 0) ? '-' : $data['P4'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'P5',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['P5'] == 0) ? '-' : $data['P5'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'P6',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['P6'] == 0) ? '-' : $data['P6'];
                    },
                    'hAlign' => 'center',
                ],
                [
                    'attribute' => 'P7',
                    'pageSummary' => true,
                    'value' => function ($data) {
                        return ($data['P7'] == 0) ? '-' : $data['P7'];
                    },
                    'hAlign' => 'center',
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
                <?= Html::a('<i class="fas fa-globe"></i> Cek Seluruh Jumlah Fenomena dari Tahun 2015', ['/fenomena/jumlahkategori?a=&b='], ['class' => 'btn btn-info ', 'style' => 'text-decoration:none!important']) ?>
            </div>
        </div>
        <h4>Keterangan Tabel:</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <ul style="font-size: 1rem">

                            <li>
                                <i class="fas fa-check-square"></i> Wilayah: <b>Wilayah Tempat Fenomena Terjadi</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                Fen: <b>Jumlah Total Fenomena</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                A: <b>Pertanian, Kehutanan, dan Perikanan</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                B: <b>Pertambangan dan Penggalian</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                C: <b>Industri Pengolahan</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                D: <b>Pengadaan Listrik dan Gas</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                E: <b>Pengadaan Air</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                F: <b>Konstruksi</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                G: <b>Perdagangan Besar dan Eceran, dan Reparasi Mobil dan Sepeda Motor</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                H: <b>Transportasi dan Pergudangan</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                I: <b>Penyediaan Akomodasi dan Makan Minum</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                J: <b>Informasi dan Komunikasi</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                K: <b>Jasa Keuangan</b>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <ul style="font-size: 1rem">

                            <li>
                                <i class="fas fa-check-square"></i>
                                L: <b>Real Estate</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                M,N: <b>Jasa Perusahaan</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                O: <b>Administrasi Pemerintahan, Pertahanan dan Jaminan Sosial Wajib</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                P: <b>Jasa Pendidikan</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                Q: <b>Jasa Kesehatan dan Kegiatan Sosial</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                R,S,T,U: <b>Jasa Lainnya</b>
                            </li>

                            <li>
                                <i class="fas fa-check-square"></i>
                                PKRT: <b>Konsumsi RT</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                PKLNPRT: <b>Konsumsi LNPRT</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                PKP: <b>Konsumsi Pemerintah</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                PMTB: <b>PMTB</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                Inventori: <b>Perubahan Inventori</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                Ekspor: <b>Ekspor</b>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                Impor: <b>Impor</b>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>

        <div class="card card-default">
            <div class="card-body">
                <div class="alert alert-info alert-dismissible bg-biru">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-info"></i> Hai!</h5>
                    Maaf. Belum ada fenomena yang diinput pada bulan ini. (<?php echo date("F Y") ?>)
                </div>
            </div>
            <div class="card-footer">
                <?= Html::a('<i class="fas fa-globe"></i> Cek Seluruh Jumlah Fenomena dari Tahun 2015', ['/fenomena/jumlahkategori?a=&b='], ['class' => 'btn btn-info  bg-biru-muda', 'style' => 'text-decoration:none!important']) ?>
            </div>
        </div>
    <?php endif; ?>
</div>