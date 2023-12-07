<?php

/* @var $this yii\web\View */
/* @var $model app\models\Fenomena */

$this->title = 'Rekam Fenomena';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Fenomena', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fenomena-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
