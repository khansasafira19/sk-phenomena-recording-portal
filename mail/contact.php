<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $token string */
?>

<div style="background-color: #F2F2F2; padding: 50px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
    <div style="background-color: #FFFFFF; max-width: 600px; margin: 0 auto; border-radius: 10px; padding: 50px;">
        <h2 style="color: #232323; font-weight: bold; text-align: center; margin-bottom: 30px;">FEEDBACK SK-PRS
        </h2>
        <h4 style="color: #232323; text-align: center; margin-bottom: 50px;"><?= $email ?></h4>
        <h4>PESAN:</h4>
        <p style="color: #232323; font-size: 16px; line-height: 1.5; text-align: justify"><?= $message ?></p>
    </div>
</div>