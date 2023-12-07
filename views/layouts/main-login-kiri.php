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
    .gambarlogin {
        background-image: url(../images/bg-2.jpg);
        background-size: cover;
        background-color: #dff0d8 !important;
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
    <link rel="stylesheet" href="../library/css/fi-theme.css">
    <link rel="stylesheet" href="../library/css/bootstrap_4.6.1.min.css">
    <script src="../library/js/jquery-3.6.0.min.js"></script>
    <script src="../library/js/bootstrap.min.js"></script>
    <script src="../library/js/Chart.min.js"></script>
    <?php //$this->registerCsrfMetaTags() 
    ?>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>

<body class="hold-transition login-page">
    <?php $this->beginBody() ?>
    <div class="container-loginfi">
        <div class="gambarlogin"></div>
        <!-- <div class="boxlogin login-box alert bg-hijau bundar"> -->
        <div class="boxlogin bg-hijau">
            <div class="login-logo">
                <a href="<?= Yii::$app->homeUrl ?>" style="text-decoration:none"><b><?= Html::encode(Yii::$app->name) ?></b></a>
            </div>
            <!-- /.login-logo -->

            <?= $content ?>
        </div>
        
    </div>



    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
<style>
    .container-loginfi {
        width: 100%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
        flex-wrap: wrap;
    }

    .gambarlogin {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        width: calc(100% - 520px);
        position: relative;
        z-index: 1;
    }

    .boxlogin {
        width: 520px;
        min-height: 100vh;
        background: #fff;
        border-radius: 2px;
        position: relative;
    }
</style>