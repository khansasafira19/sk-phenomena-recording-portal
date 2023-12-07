<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pengguna $model */

$this->title = 'Update Pengguna: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Data Pengguna', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'username' => $model->username]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengguna-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
