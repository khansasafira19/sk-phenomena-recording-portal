<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Manual SIPENA 2.0';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="pdf-container">
    <center><h1><?= Html::encode($this->title) ?></h1></center>
    <iframe id="pdf-iframe" src="<?= Yii::getAlias('@web') ?>/library/manual/manual.pdf" width="100%"></iframe>
</div>

<script>
    function resizePdfIframe() {
        var windowHeight = $(window).height();
        var pdfIframeOffset = $('#pdf-container').offset().top;
        var pdfIframeHeight = windowHeight - pdfIframeOffset - 20; // subtract 20 for margin
        $('#pdf-iframe').height(pdfIframeHeight);
    }

    $(window).resize(function() {
        resizePdfIframe();
    });

    $(document).ready(function() {
        resizePdfIframe();
    });
</script>