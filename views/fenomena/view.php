<?php

use yii\helpers\Html;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Fenomena */

$this->title = 'Fenomena ke-' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Fenomena', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<style>
    table.detail-view td {
        width: 75%;
    }
    .table-striped > tbody > tr:nth-of-type(odd) {
        background-color: #E3F6CE!important;
    }
</style>-->

<div class="fenomena-view">
    <?php if (Yii::$app->session->hasFlash('success')) : ?>
        <div class="alert alert-info alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <h4><i class="icon fa fa-check"></i>Disimpan!</h4>
            <?= Yii::$app->session->getFlash('success') ?>
        </div>
    <?php endif; ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <?php //echo $namapelapor;
    ?>
    <?php if (Yii::$app->user->identity->username == $namapelapor) : //jika org prov      
    ?>
        <p>
            <?= Html::a('Ubah', ['update', 'id' => $model->id], ['class' => 'btn btn-primary', 'style' => 'color: #fff!important']) ?>
            <?=
            Html::a('Hapus', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'style' => 'color: #fff!important',
                'data' => [
                    'confirm' => 'Anda yakin ingin menghapus fenomena ini?',
                    'method' => 'post',
                ],
            ])
            ?>
        </p>
    <?php endif; ?>

    <?php
    function generateAttributeValue($value)
    {
        return ($value == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya';
    }
    ?>
    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'tahun',
            [
                'attribute' => 'month',
                'value' => $model->month->nama_bulan,
            ],
            [
                'attribute' => 'satker',
                'value' => $model->satker->nama_satker,
            ],
            [
                'attribute' => 'judul',
                'value' => (($model->judul == '') ? '- (BELUM DIUPDATE)' : $model->judul),
            ],
            'fenomena:ntext',
            [
                'attribute' => 'sumber',
                'value' => $model->media,
                //'value' => (($model->sumber == '') ? 'Media Cetak' : 'Media Online'),
            ],
            [
                'attribute' => 'sumberket',
                //'value' => $model->source->nama_source,
            ],
            [
                'attribute' => 'pengaruh',
                //'value' => (($model->pengaruh == 1 ) ? 'Positif' : (($model->pengaruh ==0)? 'Negatif' : ($model->pengaruh == NULL)? '- (BELUM DIUPDATE)' : '- (BELUM DIUPDATE)')),
                'value' => $model->getImpact(),
                'format' => 'html'
            ],
            [
                'attribute' => 'kat01',
                'value' => generateAttributeValue($model->kat01),
                'format' => 'html',
                'visible' => ($model->kat01 != 0),
            ],
            [
                'attribute' => 'kat01_01',
                'value' => generateAttributeValue($model->kat01_01),
                'format' => 'html',
                'visible' => ($model->kat01_01 != 0),
            ],
            [
                'attribute' => 'kat01_01_01',
                'value' => generateAttributeValue($model->kat01_01_01),
                'format' => 'html',
                'visible' => ($model->kat01_01_01 != 0),
            ],
            [
                'attribute' => 'kat01_01_02',
                'value' => generateAttributeValue($model->kat01_01_02),
                'format' => 'html',
                'visible' => ($model->kat01_01_02 != 0),
            ],
            [
                'attribute' => 'kat01_01_03',
                'value' => generateAttributeValue($model->kat01_01_03),
                'format' => 'html',
                'visible' => ($model->kat01_01_03 != 0),
            ],
            [
                'attribute' => 'kat01_01_04',
                'value' => generateAttributeValue($model->kat01_01_04),
                'format' => 'html',
                'visible' => ($model->kat01_01_04 != 0),
            ],
            [
                'attribute' => 'kat01_01_05',
                'value' => generateAttributeValue($model->kat01_01_05),
                'format' => 'html',
                'visible' => ($model->kat01_01_05 != 0),
            ],
            [
                'attribute' => 'kat01_02',
                'value' => generateAttributeValue($model->kat01_02),
                'format' => 'html',
                'visible' => ($model->kat01_02 != 0),
            ],              
            [
                'attribute' => 'kat01_03',
                'value' => generateAttributeValue($model->kat01_03),
                'format' => 'html',
                'visible' => ($model->kat01_03 != 0),
            ], 
            ////////BATAS SINI
            [
                'attribute' => 'kat02',
                'value' => (($model->kat02 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->kat02 == 0) ? false : true),
            ],
            [
                'attribute' => 'kat03',
                'value' => (($model->kat03 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->kat03 == 0) ? false : true),
            ],
            [
                'attribute' => 'kat04',
                'value' => (($model->kat04 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->kat04 == 0) ? false : true),
            ],
            [
                'attribute' => 'kat05',
                'value' => (($model->kat05 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->kat05 == 0) ? false : true),
            ],
            [
                'attribute' => 'kat06',
                'value' => (($model->kat06 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->kat06 == 0) ? false : true),
            ],
            [
                'attribute' => 'kat07',
                'value' => (($model->kat07 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->kat07 == 0) ? false : true),
            ],
            [
                'attribute' => 'kat08',
                'value' => (($model->kat08 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->kat08 == 0) ? false : true),
            ],
            [
                'attribute' => 'kat09',
                'value' => (($model->kat09 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->kat09 == 0) ? false : true),
            ],
            [
                'attribute' => 'kat10',
                'value' => (($model->kat10 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->kat10 == 0) ? false : true),
            ],
            [
                'attribute' => 'kat11',
                'value' => (($model->kat11 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->kat11 == 0) ? false : true),
            ],
            [
                'attribute' => 'kat12',
                'value' => (($model->kat12 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->kat12 == 0) ? false : true),
            ],
            [
                'attribute' => 'kat13',
                'value' => (($model->kat13 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->kat13 == 0) ? false : true),
            ],
            [
                'attribute' => 'kat14',
                'value' => (($model->kat14 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->kat14 == 0) ? false : true),
            ],
            [
                'attribute' => 'kat15',
                'value' => (($model->kat15 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->kat15 == 0) ? false : true),
            ],
            [
                'attribute' => 'kat16',
                'value' => (($model->kat16 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->kat16 == 0) ? false : true),
            ],
            [
                'attribute' => 'kat17',
                'value' => (($model->kat17 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->kat17 == 0) ? false : true),
            ],
            [
                'attribute' => 'komp01',
                'value' => (($model->komp01 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->komp01 == 0) ? false : true),
            ],
            [
                'attribute' => 'komp02',
                'value' => (($model->komp02 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->komp02 == 0) ? false : true),
            ],
            [
                'attribute' => 'komp03',
                'value' => (($model->komp03 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->komp03 == 0) ? false : true),
            ],
            [
                'attribute' => 'komp04',
                'value' => (($model->komp04 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->komp04 == 0) ? false : true),
            ],
            [
                'attribute' => 'komp05',
                'value' => (($model->komp05 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->komp05 == 0) ? false : true),
            ],
            [
                'attribute' => 'komp06',
                'value' => (($model->komp06 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->komp06 == 0) ? false : true),
            ],
            [
                'attribute' => 'komp07',
                'value' => (($model->komp07 == '') ? '<i class="fas fa-times-circle text-danger"></i> Tidak' : '<i class="fas fa-check-circle text-success"></i> Ya'),
                'format' => 'html',
                'visible' => (($model->komp07 == 0) ? false : true),
            ],
            [
                'attribute' => 'tgl_rekam',
                'value' => \Yii::$app->formatter->asDatetime(strtotime($model->tgl_rekam), "d MMMM y 'pada' H:mm a"),
            ],
            [
                'attribute' => 'reporter',
                'value' => $model->reporter->nama,
            ],
            //'deleted',
        ],
    ])
    ?>

</div>