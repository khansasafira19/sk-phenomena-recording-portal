<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

\hail812\adminlte3\assets\AdminLteAsset::register($this);
// $this->registerCssFile('https://fonts.googleapis.com/css2?family=Raleway:300,400,400i,700');
$this->registerCssFile(Yii::getAlias('@web') . '/library/css/ionicons.min.css');
\hail812\adminlte3\assets\PluginAsset::register($this)->add(['fontawesome', 'icheck-bootstrap']);
?>
<style>
    .login-page {
        background-image: url(../images/bg.jpg);
        /* Background image is centered vertically and horizontally at all times */
        background-position: center center !important;

        /* Background image doesn't tile */
        background-repeat: no-repeat !important;

        /* Background image is fixed in the viewport so that it doesn't move when 
   the content's height is greater than the image's height */
        background-attachment: fixed !important;

        /* This is what makes the background image rescale based
   on the container's size */
        background-size: cover !important;

        /* Set a background color that will be displayed
   while the background image is loading */
        background-color: #CCE6FF !important;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4), 0 2px 6px rgba(0, 0, 0, 0.1), 0 6px 10px rgba(0, 0, 0, 0.1) !important;
    }
    }

    .login-logo {
        font-weight: bold !important;
    }
</style>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= Html::encode(Yii::$app->name) ?> | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>\images\favicon.png" type="image/x-icon" />
    <!-- <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'> -->
    <link rel="stylesheet" href="<?php echo Yii::$app->request->baseUrl; ?>/library/css/fi-theme.css">
    <link rel="stylesheet" href="<?php echo Yii::$app->request->baseUrl; ?>/library/css/bootstrap_4.6.1.min.css">
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/library/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/library/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/library/js/Chart.min.js"></script>
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/library/js/sweetalert.min.js"></script>
    <?php //$this->registerCsrfMetaTags() 
    ?>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>

<body class="hold-transition login-page">
    <?php $this->beginBody() ?>
    <div class="login-box alert bg-hijau bundar" style="width:460px">
        <div class="login-logo">
            <a href="<?= Yii::$app->homeUrl ?>" style="text-decoration:none" class="text-light"><b><?= Html::encode(Yii::$app->name) ?></b></a>
        </div>
        <!-- /.login-logo -->

        <?= $content ?>
    </div>
    <!-- /.login-box -->

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>