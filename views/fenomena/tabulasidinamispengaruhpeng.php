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

$this->title = 'Tabulasi Agregat Fenomena';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .vertical-text {
        transform: rotate(90deg);
        transform-origin: left top 0;
    }
</style>
<div class="wrapper">
    <div class="col-lg-12">
        <div class="callout callout-info">
            <h2>JUDUL TABULASI:</h2>
            <?php if ($a == '' && $b == '' && $c == '' && $d == '') : ?>
                <h3 style="text-align: left; line-height: 1.5em">Tabulasi Agregat Seluruh Pengaruh Fenomena Sejak Tahun 2015 di Seluruh Wilayah Indonesia Menurut Kategori Pengeluaran</h3>
            <?php elseif ($a == '' && $b == '' && $c == '' && $d != '') : ?>
                <h3 style="text-align: left; line-height: 1.5em">Tabulasi Agregat Seluruh Pengaruh Fenomena Triwulan <?php echo $d ?> Sejak Tahun 2015 di Seluruh Wilayah Indonesia Menurut Kategori Pengeluaran</h3>
            <?php elseif ($a != '' && $b == '' && $c == '' && $d == '') : ?>
                <h3 style="text-align: left; line-height: 1.5em">Tabulasi Agregat Pengaruh Fenomena Tahun <?php echo $a ?> di Seluruh Wilayah Indonesia Menurut Kategori Pengeluaran</h3>
            <?php elseif ($a != '' && $b == '' && $c == '' && $d != '') : ?>
                <h3 style="text-align: left; line-height: 1.5em">Tabulasi Agregat Pengaruh Fenomena Triwulan <?php echo $d ?> Tahun <?php echo $a ?> di Seluruh Wilayah Indonesia Menurut Kategori Pengeluaran</h3>
            <?php elseif ($a == '' && $b != '' && $c == '' && $d == '') : ?>
                <h3 style="text-align: left; line-height: 1.5em">Tabulasi Agregat Pengaruh Fenomena di Setiap Bulan <?php echo $bul ?> Sejak Tahun 2015 di Seluruh Wilayah Indonesia Menurut Kategori Pengeluaran</h3>
            <?php elseif ($a == '' && $b != '' && $c == '' && $d != '') : ?>
                <h3 style="text-align: left; line-height: 1.5em">Tabulasi Agregat Pengaruh Fenomena di Setiap Bulan <?php echo $bul ?> Triwulan <?php echo $d ?> Sejak Tahun 2015 di Seluruh Wilayah Indonesia Menurut Kategori Pengeluaran</h3>
            <?php elseif ($a == '' && $b == '' && $c != '' && $d == '') : ?>
                <h3 style="text-align: left; line-height: 1.5em">Tabulasi Agregat Pengaruh Fenomena Sejak Tahun 2015 di Wilayah <?php echo $wil ?> Menurut Kategori Pengeluaran</h3>
            <?php elseif ($a == '' && $b == '' && $c != '' && $d != '') : ?>
                <h3 style="text-align: left; line-height: 1.5em">Tabulasi Agregat Pengaruh Fenomena Triwulan <?php echo $d ?> Sejak Tahun 2015 di Wilayah <?php echo $wil ?> Menurut Kategori Pengeluaran</h3>
            <?php elseif ($a != '' && $b != '' && $c == '' && $d == '') : ?>
                <h3 style="text-align: left; line-height: 1.5em">Tabulasi Agregat Pengaruh Fenomena Bulan <?php echo $bul ?> Tahun <?php echo $a ?> di Seluruh Wilayah Indonesia Menurut Kategori Pengeluaran</h3>
            <?php elseif ($a != '' && $b != '' && $c == '' && $d != '') : ?>
                <h3 style="text-align: left; line-height: 1.5em">Tabulasi Agregat Pengaruh Fenomena Bulan <?php echo $bul ?> Triwulan <?php echo $d ?> Tahun <?php echo $a ?> di Seluruh Wilayah Indonesia Menurut Kategori Pengeluaran</h3>
            <?php elseif ($a != '' && $b == '' && $c != '' && $d == '') : ?>
                <h3 style="text-align: left; line-height: 1.5em">Tabulasi Agregat Pengaruh Fenomena Tahun <?php echo $a ?> di Wilayah <?php echo $wil ?> Menurut Kategori Pengeluaran</h3>
            <?php elseif ($a != '' && $b == '' && $c != '' && $d != '') : ?>
                <h3 style="text-align: left; line-height: 1.5em">Tabulasi Agregat Pengaruh Fenomena Triwulan <?php echo $d ?> Tahun <?php echo $a ?> di Wilayah <?php echo $wil ?> Menurut Kategori Pengeluaran</h3>
            <?php elseif ($a == '' && $b != '' && $c != '' && $d == '') : ?>
                <h3 style="text-align: left; line-height: 1.5em">Tabulasi Agregat Pengaruh Fenomena di Setiap Bulan <?php echo $bul ?> Sejak Tahun 2015 di Wilayah <?php echo $wil ?> Menurut Kategori Pengeluaran</h3>
            <?php elseif ($a == '' && $b != '' && $c != '' && $d != '') : ?>
                <h3 style="text-align: left; line-height: 1.5em">Tabulasi Agregat Pengaruh Fenomena di Setiap Bulan <?php echo $bul ?> Triwulan <?php echo $d ?> Sejak Tahun 2015 di Wilayah <?php echo $wil ?> Menurut Kategori Pengeluaran</h3>
            <?php elseif ($a != '' && $b != '' && $c != '' && $d == '') : ?>
                <h3 style="text-align: left; line-height: 1.5em">Tabulasi Agregat Pengaruh Fenomena di Bulan <?php echo $bul ?> Tahun <?php echo $a ?> di Wilayah <?php echo $wil ?> Menurut Kategori Pengeluaran</h3>
            <?php elseif ($a != '' && $b != '' && $c != '' && $d != '') : ?>
                <h3 style="text-align: left; line-height: 1.5em">Tabulasi Agregat Pengaruh Fenomena di Bulan <?php echo $bul ?> Triwulan <?php echo $d ?> Tahun <?php echo $a ?> di Wilayah <?php echo $wil ?> Menurut Kategori Pengeluaran</h3>
            <?php else : ?>
                <h3 style="text-align: left; line-height: 1.5em">Tabulasi Agregat Pengaruh Fenomena Menurut Kategori Pengeluaran</h3>
            <?php endif; ?>
        </div>
        <br />


        <?php
        $form = ActiveForm::begin([
            'action' => ['tabulasidinamispengaruhpeng'],
            'method' => 'get',
            'type' => ActiveForm::TYPE_INLINE,
            'fieldConfig' => ['options' => ['class' => 'form-group mr-2']]
        ]);
        ?>
        <div class="row">

            <?=
            $form->field($searchModel, 'pengaruh')->dropDownList(['1' => 'POSITIF', '0' => 'NEGATIF'], ['class' => 'form-control input', 'name' => 'e', 'options' => [$e => ['Selected' => 'selected']]])
            ?>
            <?=
            $form->field($searchModel, 'wilayah')->dropDownList(
                ArrayHelper::map(
                    Satker::find()->orderBy('id_satker')->all(),
                    'id_satker',
                    function ($model) {
                        return '[' . $model->id_satker . '] ' . $model->nama_satker;
                    }
                ),
                ['class' => 'form-control input', 'prompt' => 'Wilayah', 'name' => 'c', 'options' => [$c => ['Selected' => 'selected']]]
            )->label(false);
            ?>


            <?=
            $form->field($searchModel, 'tahun')->dropDownList(
                $searchModel->getYearsJumFen(),
                ['class' => 'form-control input', 'prompt' => 'Tahun', 'name' => 'a', 'options' => [$a => ['Selected' => 'selected']]]
            )->label(false);
            ?>

            <?=
            $form->field($searchModel, 'triwulan')->dropDownList(['1' => 'I', '2' => 'II', '3' => 'III', '4' => 'IV'], ['class' => 'form-control input', 'prompt' => 'Triwulan', 'name' => 'd', 'options' => [$d => ['Selected' => 'selected']]])
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
                'visible' => $c != '' ? FALSE : TRUE,
                //                    'visible' => function () {
                //                        return $searchModel->getWilVis($a, $b, $c);
                //                    },
            ],
            [
                'attribute' => 'tahun',
                'pageSummary' => false,
                //'visible' => (($b == '' && $a == '') || ($b != '' && $a != '') || ($b != '' && $a == '') || ($b == '' && $a != '')) ? FALSE : TRUE,
                'visible' => ($a != '' && $c == '') || ($a == '' && $b == '' && $c == '' && $d == '') ? FALSE : TRUE,
                'hAlign' => 'center',
            ],
            [
                'attribute' => 'triwulan',
                'pageSummary' => false,
                //'visible' => (($b == '' && $a == '') || ($b != '' && $a != '') || ($b != '' && $a == '') || ($b == '' && $a != '')) ? FALSE : TRUE,
                'visible' => $searchModel->getBulanVisibility($a, $b, $c, $d),
                'hAlign' => 'center',
            ],
            [
                'attribute' => 'namabulan',
                //'filter' => (Html::activeDropDownList($searchModel, 'satker', ArrayHelper::map(Satker::find()->asArray()->all(), 'nama_satker', 'nama_satker'), ['class' => 'form-control input', 'prompt' => 'Pilih Wilayah'])),
                'pageSummary' => false,
                //'visible' => ($b == '' || ($b == '' && $a != '')) ? TRUE : FALSE,
                //'visible' => (($b != '' && $a != '') || ($b == '' && $a != '') || ($b == '' && $a == '') || ($b != '' && $a == '')) ? FALSE : TRUE,
                'visible' => $searchModel->getBulanVisibility($a, $b, $c, $d),
                //'visible' => ($a == '' && $c != '') || ($a == '' && $b == '' && $c == '' && $d == '')||($a != '' && $c == '') ? FALSE : TRUE,
                'hAlign' => 'center',
            ],
            /*[
                    'attribute' => 'fen',
                    'pageSummary' => true,
                    'hAlign' => 'center',
                ],*/
            [
                'attribute' => 'fenpos',
                'pageSummary' => true,
                'hAlign' => 'center',
                'visible' => $e == 1 ? true : false,
            ],
            [
                'attribute' => 'fenneg',
                'pageSummary' => true,
                'hAlign' => 'center',
                'visible' => $e == 0 ? true : false,
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

    </div>
    <div class="text-center">
        <h4>Keterangan Tabel:</h4>
    </div>
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
</div>