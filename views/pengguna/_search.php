<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PenggunaCari $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengguna-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'nipbaru') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'nama') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'tgl_daftar') ?>

    <?php // echo $form->field($model, 'admin') ?>

    <?php // echo $form->field($model, 'theme') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
