<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Feedback SK-PRS';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card alert">
                <h1><?= Html::encode($this->title) ?></h1>

                <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')) : ?>

                    <div class="callout callout-info">
                        <h5>Sukses Mengirim Email</h5>
                        <p>Email dapat dilihat pada folder runtime\mail pada source code ini.</p>
                    </div>

                <?php else : ?>

                    <p>
                        Mohon isikan feedback atau pertanyaan di sini berdasarkan pengalaman Anda menggunakan SK-PRS
                    </p>

                    <div class="row">
                        <div class="col-lg-5">

                            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                            <?= $form->field($model, 'name')->textInput(['value' => Yii::$app->user->identity->nama, 'readonly' => true])->label('Nama') ?>

                            <?= $form->field($model, 'email')->textInput(['value' => Yii::$app->user->identity->username . '@email.id', 'readonly' => true])->label('Email') ?>

                            <?= $form->field($model, 'subject')->textInput(['value' => 'Feedback SIPENA - ' . Yii::$app->user->identity->username . '@email.id'])->label('Subjek Email') ?>

                            <?= $form->field($model, 'body')->textarea(['rows' => 6, 'autofocus' => true])->label('Masukan/Pertanyaan') ?>

                            <?php // $form->field($model, 'verifyCode')->widget(Captcha::class, [
                            //'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                            //]) 
                            ?>

                            <div class="form-group">
                                <?= Html::submitButton('Kirim Email', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>