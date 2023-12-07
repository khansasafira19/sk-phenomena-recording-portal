<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pengguna */

$this->title = 'Pendaftaran Pengguna SK-PRS';
if (!Yii::$app->user->isGuest) {
    $this->params['breadcrumbs'][] = ['label' => 'Pengguna', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;
}

?>
    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>
