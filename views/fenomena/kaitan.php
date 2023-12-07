<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FenomenaCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Fenomena';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .table-striped > tbody > tr:nth-of-type(odd) {
        background-color: #E3F6CE!important;
    }
    .table-striped > thead > tr > th{
        color: #008000!important;
    }
    .table-striped > thead > tr > th > a{
        color: #008000!important;
    }
    .table-striped > tbody > tr > td > a {
        color: #008000!important;
    }
</style>
<div class="fenomena-index">
    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-info alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <h4><i class="icon fa fa-check"></i>Dihapus!</h4>
            <?= Yii::$app->session->getFlash('success') ?>
        </div>
    <?php endif; ?>
    <h1><?= Html::encode($this->title) ?> dari <?php echo $dari?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>
    
    <?php
    $kolomTampil = [
        ['class' => 'yii\grid\SerialColumn'],
        'tahun',
        [
            'attribute' => 'month',
            'value' => 'month.nama_bulan',            
        ],
        [
            'attribute' => 'satker',
            'value' => 'satker.nama_satker',
        ],
        'fenomena:ntext',
        ['class' => 'yii\grid\ActionColumn',
            'header' => 'Rincian',],
    ];
    ?>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $kolomTampil
    ]);
    //Dropdown menu untuk kabupaten
    echo ExportMenu::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'tahun',
            [
                'attribute' => 'month',
                'value' => 'month.nama_bulan',
            ],
            [
                'attribute' => 'satker',
                'value' => 'satker.nama_satker',
            ],
            [
                'attribute' => 'source',
                'value' => 'source.nama_source',
            ],
            'fenomena:ntext',
            'kat01',
            'kat02',
            'kat03',
            'kat04',
            'kat05',
            'kat06',
            'kat07',
            'kat08',
            'kat09',
            'kat10',
            'kat11',
            'kat12',
            'kat13',
            'kat14',
            'kat15',
            'kat16',
            'kat17',
            'tgl_rekam',
            [
                'attribute' => 'reporter',
                'value' => 'reporter.nama',
            ],
            // 'deleted',
            ['class' => 'yii\grid\ActionColumn'],
        ],
        'dropdownOptions' =>
        [
            'label' => 'Export',
            'class' => 'btn btn-default dropdown-toggle'
        ],
        'columnSelectorOptions' =>
        [
            'label' => 'Pilih Export',
            'class' => 'btn btn-default dropdown-toggle',
            'scrollable' => true,
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
</div>
