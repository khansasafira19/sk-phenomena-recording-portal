<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Satker;
use app\models\Bulan;
?>
<?php
$script = <<< JS
$(document).ready(function () {
    $(document.body).on('change', '#fenomena-sumber', function () {
        var val = $('#fenomena-sumber').val();
        if(val == 0 ) {
            $('#cetak').show();
            $('#online').hide();
            $('#narasumber').hide();
        }
        else if(val == 1){
            $('#cetak').hide();
            $('#online').show();
            $('#narasumber').hide();
        }
        else if(val == 2){
            $('#cetak').hide();
            $('#online').hide();
            $('#narasumber').show();
        }
    });
});
        
JS;
$this->registerJs($script);
?>
<style>
    input:checked+label {
        color: #0478c7;
        font-size: 1.25rem;
    }
</style>
<script type="text/javascript">
    $(document).ready(function() {
        $('#checkBtn').click(function() {
            checked = $("input[type=checkbox]:checked").length;
            if (!checked) {
                alert("Pilih minimal salah satu keterkaitan fenomena.");
                return false;
            }
        });
    });
</script>
<div class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card bg-biru">
                <div class="card-header">
                    <h3 class="card-title">Rincian Fenomena</h3>
                </div>
                <div class="card-body bg-light">
                    <?php $form = ActiveForm::begin(); ?>
                    <?= $form->errorSummary($model) ?>
                    <?php $form = ActiveForm::begin(['enableClientValidation' => false]); ?>
                    <h3><b>Data-data Fenomena</b></h3>
                    <div class="row">
                        <div class="col-md-6">
                            <?php if (Yii::$app->user->identity->satker == 1000) : //jika org prov  
                            ?>
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
                                            'prompt' => 'Pilih Wilayah ...',
                                            'disabled' => $model->getLokasi()
                                        ]
                                    )
                                ?>
                            <?php else : //jika orang kabupaten
                            ?>
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
                                            'prompt' => 'Pilih Wilayah ...',
                                            'options' => [(Yii::$app->user->identity->satker) => array('selected' => 'selected')],
                                            'disabled' => $model->getLokasi()
                                        ]
                                    )
                                ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6" style="line-height: 2em;">
                            <hr />
                            <i>
                                Wilayah tempat terjadinya fenomena.
                            </i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'tahun')->dropDownList($model->getYears()); ?>
                        </div>
                        <div class="col-md-6" style="line-height: 2em;">
                            <hr />
                            <i>
                                Tahun terjadinya fenomena.
                            </i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?=
                            $form->field($model, 'bulan')
                                ->dropDownList(
                                    ArrayHelper::map(Bulan::find()->all(), 'id_bulan', 'nama_bulan'),
                                    ['options' => [date('n') => ['Selected' => 'selected']]]
                                )
                            ?>
                        </div>
                        <div class="col-md-6" style="line-height: 2em;">
                            <hr />
                            <i>
                                Bulan terjadinya fenomena.
                            </i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <hr />
                            <i>
                                Judul fenomena dapat berupa judul berita atau topik yang menjadi fenomena.
                            </i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'fenomena')->textarea(['rows' => 6]) ?>
                        </div>
                        <div class="col-md-6">
                            <hr />
                            <i>
                                Ringkasan berita yang menjadi fenomena. Memuat kaidah 5W dan 1H.
                            </i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'sumber')->dropDownList([0 => 'Media Cetak', 1 => 'Media Online', 2 => 'Narasumber'], ['prompt' => 'Pilih Sumber ...'], ['onchange' => 'javascript:$("#mydiv").toggle()',]); ?>
                        </div>
                        <div class="col-md-6">
                            <hr />
                            <i>
                                Sumber fenomena diperoleh.
                            </i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?php setlocale(LC_TIME, 'id_ID', 'Indonesian') ?>
                            <?= $form->field($model, 'sumberket')->textarea(['rows' => 3, 'value' => '[Nama/URL Sumber]. ' . strftime("%A, %e %B %Y")]) ?>
                            <div class="row">
                                <div id="cetak" style="display:none" class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <i class="icon fa fa-check"></i>Tulis nama media cetak, tanggal terbit.
                                </div>
                                <div id="online" style="display:none" class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <i class="icon fa fa-check"></i>Tulis URL media online tersebut.
                                </div>
                                <div id="narasumber" style="display:none" class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <i class="icon fa fa-check"></i>Tulis nama pemberi informasi, tanggal informasi didapatkan (termasuk jika merupakan hasil amatan).
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <hr />
                            <i>
                                Keterangan sumber fenomena.
                            </i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'pengaruh')->radioList([1 => 'Positif (+)', 0 => 'Negatif (-)'], ['separator' => " ", 'class' => 'alert alert-info text-dark', 'style' => 'background-color: #fff'])
                            ?>
                        </div>
                        <div class="col-md-6">
                            <hr />
                            <i>
                                Pengaruh fenomena terhadap perekonomian di wilayah tersebut.
                            </i>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <h3><b>Kategori Fenomena Berdasarkan Lapangan Usaha</b></h3>
                    </div>
                    <div class="row">
                        <i>
                            Pilih kategori lapangan usaha yang terkait dengan fenomena ini, terutama yang berdampak langsung. <br />
                            Satu fenomena dapat mempunyai dampak terhadap satu kategori, atau beberapa kategori.
                        </i>
                    </div>
                    <hr style="border:0" />
                    <hr style="border:0" />
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'kat01')->checkbox(); ?>
                            <?= $form->field($model, 'kat02')->checkbox(); ?>
                            <?= $form->field($model, 'kat03')->checkbox(); ?>
                            <?= $form->field($model, 'kat04')->checkbox(); ?>
                            <?= $form->field($model, 'kat05')->checkbox(); ?>
                            <?= $form->field($model, 'kat06')->checkbox(); ?>
                            <?= $form->field($model, 'kat07')->checkbox(); ?>
                            <?= $form->field($model, 'kat08')->checkbox(); ?>
                            <?= $form->field($model, 'kat09')->checkbox(); ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'kat10')->checkbox(); ?>
                            <?= $form->field($model, 'kat11')->checkbox(); ?>
                            <?= $form->field($model, 'kat12')->checkbox(); ?>
                            <?= $form->field($model, 'kat13')->checkbox(); ?>
                            <?= $form->field($model, 'kat14')->checkbox(); ?>
                            <?= $form->field($model, 'kat15')->checkbox(); ?>
                            <?= $form->field($model, 'kat16')->checkbox(); ?>
                            <?= $form->field($model, 'kat17')->checkbox(); ?>
                        </div>
                    </div>
                    <div class="row">
                        <h3><b>Kategori Fenomena Berdasarkan Komponen PDRB Pengeluaran</b></h3>
                    </div>
                    <div class="row">
                        <i>
                            Pilih komponen PDRB pengeluaran yang terkait dengan fenomena ini, terutama yang berdampak langsung. <br />
                            Satu fenomena dapat mempunyai dampak terhadap satu komponen, atau beberapa komponen.
                        </i>
                    </div>
                    <hr style="border:0" />
                    <hr style="border:0" />

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'komp01')->checkbox(); ?>
                            <?= $form->field($model, 'komp02')->checkbox(); ?>
                            <?= $form->field($model, 'komp03')->checkbox(); ?>
                            <?= $form->field($model, 'komp04')->checkbox(); ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'komp05')->checkbox(); ?>
                            <?= $form->field($model, 'komp06')->checkbox(); ?>
                            <?= $form->field($model, 'komp07')->checkbox(); ?>
                        </div>
                    </div>
                    <hr />
                    <div class=" text-right">
                        <?= Html::submitButton('Simpan', ['class' => 'btn btn-outline-info btn-sm bundar', 'id' => 'checkBtn']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>