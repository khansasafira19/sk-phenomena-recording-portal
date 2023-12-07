<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Bulan;
use app\models\Satker;
use app\models\Fenomena;

/* @var $this yii\web\View */
/* @var $model app\models\FenomenaCari */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fenomena-search">
        <div class="alert bg-biru-sangat-muda" style="width: auto!important">
                <?php
                $form = ActiveForm::begin([
                        'action' => ['index'],
                        'method' => 'get',
                        'type' => ActiveForm::TYPE_INLINE,
                        'fieldConfig' => ['options' => ['class' => 'form-group mr-2']]
                ]);
                ?>
                <?=
                $form->field($model, 'kategori')->dropDownList(
                        $model->getCategoryArray(),
                        ['class' => 'form-control input', 'prompt' => 'KATEGORI...']
                );
                ?>

                <?php if (Yii::$app->user->identity->satker == 1000) : ?>
                        <?=
                        $form->field($model, 'wilayah')
                                ->dropDownList(
                                        ArrayHelper::map(
                                                Satker::find()->orderBy('id_satker')->all(),
                                                'id_satker',
                                                function ($model) {
                                                        return '[' . $model->id_satker . '] ' . $model->nama_satker;
                                                }
                                        ),
                                        [
                                                'prompt' => 'Wilayah ...',
                                        ]
                                )
                        ?>
                <?php endif; ?>
                <?=
                $form->field($model, 'tahun')->dropDownList(
                        $model->getYearsJumFen(),
                        ['class' => 'form-control input', 'prompt' => 'Tahun...']
                );
                ?>
                <?=
                $form->field($model, 'triwulan')->dropDownList(['1' => 'I', '2' => 'II', '3' => 'III', '4' => 'IV'], ['prompt' => 'Triwulan...'])
                ?>
                <?=
                $form->field($model, 'bulan')->dropDownList(
                        ArrayHelper::map(Bulan::find()->all(), 'id_bulan', 'nama_bulan'),
                        ['class' => 'form-control input', 'prompt' => 'Bulan....']
                );
                ?>

                <?=
                $form->field($model, 'pengaruh')->dropDownList(
                        ['1' => 'Positif', '0' => 'Negatif', NULL => 'Tanpa Pengaruh'],
                        ['class' => 'form-control input', 'prompt' => 'Pengaruh...']
                );
                ?>
                <?=
                $form->field($model, 'sumber')->dropDownList(
                        ['0' => 'Media Cetak', '1' => 'Media Online', '2' => 'Narasumber'],
                        ['class' => 'form-control input', 'prompt' => 'Sumber...']
                );
                ?>

                <div class="form-group">
                        <?= Html::submitButton('Cari', ['class' => 'btn btn-info bg-biru mr-2']) ?>
                        <?= Html::a('Reset', ['index'], ['class' => 'btn btn-default text-info', 'style' => 'text-decoration:none']) ?>
                </div>

                <?php ActiveForm::end(); ?>
        </div>
</div>