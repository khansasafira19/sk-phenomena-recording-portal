<?php

use yii\helpers\Html;
?>
<style>
    .btn-bundar {
        border-radius: 30px !important;
        width: 35px;
        padding: 6px 0px;
    }
</style>
<nav class="main-header navbar navbar-expand navbar-blue navbar-dark" style="background-image: linear-gradient(45deg, #0478c7 33.33%, #1d9bf0 33.33%, #1d9bf0 66.66%, #4db7ff 66.66%);">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <!--<a href="#" class="nav-link">Contact</a>-->
            <?= Html::a('Feedback', ['/site/contact'], ['class' => 'nav-link']) ?>
        </li>
    </ul>
    <!-- Right navbar links -->
    <?php if (!Yii::$app->user->isGuest) : ?>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <?php
                if (Yii::$app->user->identity->theme == 1) {
                    echo Html::a('<i class="icon fa fa-moon"></i>', ['/site/theme?choice=0'], ['class' => 'btn btn-dark btn-bundar btn-lg']);
                } else {
                    echo Html::a('<i class="icon fa fa-sun"></i>', ['/site/theme?choice=1'], ['class' => 'btn btn-default btn-bundar btn-lg']);
                }
                ?>
            </li>
            <li class="nav-item dropdown user-menu">
                <?= Html::a('Logout (' . Yii::$app->user->identity->nama . ')', ['/site/logout'], ['data-method' => 'post', 'class' => 'btn btn-outline-default bundar float-right d-none d-md-inline']) ?>
            </li>
        </ul>
    <?php else : ?>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <?= Html::a('Login', ['/site/login'], ['class' => 'nav-link']) ?>
            </li>
        </ul>
    <?php endif; ?>
</nav>