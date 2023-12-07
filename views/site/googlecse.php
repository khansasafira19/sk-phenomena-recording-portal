<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Google Custom Search Engine (CSE)';
?>
<div class="text-right"><b>Sumber Data dari Google CSE:</b> Kompas, Detik, dll.</div>
<br />
<?php $form = ActiveForm::begin(['method' => 'get']); ?>
<div class="card">
    <div class="card-body">

        <?= $form->field($searchModel, 'searchWords')->textInput(['maxlength' => true])->label('Kata Kunci') ?>

        <div class="form-group">
            <?= Html::submitButton('Cari', ['class' => 'btn btn-primary bg-biru']) ?>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>