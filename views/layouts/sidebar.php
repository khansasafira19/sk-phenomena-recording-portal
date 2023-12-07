<?php

use yii\helpers\Html;
?>
<?php
$theme = Yii::$app->user->identity->theme;
if ($theme == 0)
    $themechoice = 'sidebar-light-green';
else
    $themechoice = 'sidebar-dark-green';
?>
<aside class="main-sidebar elevation-4 <?php echo $themechoice; ?>">
    <!-- Brand Logo -->
    <a href="<?= \yii\helpers\Url::home() . 'site/index' ?>" class="brand-link">
        <img src="<?php echo Yii::$app->request->baseUrl; ?>\images\favicon.png" alt="Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light"><?= Html::encode(Yii::$app->name) ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <?php
            $identity = Yii::$app->user->identity;
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    ['label' => 'Beranda', 'url' => ['site/index'], 'icon' => 'home'],
                    ['label' => 'Dashboard', 'url' => ['fenomena/dashboard'], 'icon' => 'tachometer-alt'],
                    (!Yii::$app->user->isGuest && Yii::$app->user->identity->active != 2) ?
                        ['label' => 'Rekam Fenomena', 'url' => ['fenomena/create'], 'icon' => 'newspaper'] : (['label' => false, 'visible' => false]),
                    (!Yii::$app->user->isGuest && Yii::$app->user->identity->active != 2) ?
                        [
                            'label' => 'Monitoring',
                            'active' => in_array(\Yii::$app->controller->action->id, ['jumlahentri', 'jumlahfen', 'jumlahkategori']),
                            'icon' => 'table',
                            'items' => [
                                ['label' => 'Rekaman Operator', 'url' => ['/fenomena/jumlahentri', 'a' => date("Y"), 'b' => date("n")]],
                                ['label' => 'Wilayah Fenomena', 'url' => ['/fenomena/jumlahfen', 'a' => date("Y"), 'b' => date("n")]],
                                ['label' => 'Kategori Fenomena', 'url' => ['/fenomena/jumlahkategori', 'a' => date("Y"), 'b' => date("n")]],
                            ],
                        ] : (['label' => false, 'visible' => false]),
                    (!Yii::$app->user->isGuest && Yii::$app->user->identity->active != 2) ?
                        [
                            'label' => 'Tabulasi Dinamis',
                            'active' => (in_array(\Yii::$app->controller->action->id, ['tabulasidinamis', 'tabulasidinamispeng', 'tabulasidinamispengaruh', 'tabulasidinamispengaruhpeng', 'index']) && Yii::$app->controller->id == 'fenomena'),
                            'icon' => 'chart-pie',
                            'items' => [
                                ['label' => 'Daftar Fenomena', 'url' => ['/fenomena/index']],
                                ['label' => 'Lapangan Usaha', 'url' => ['/fenomena/tabulasidinamis', 'a' => '', 'b' => '', 'c' => '', 'd' => '']],
                                ['label' => 'Pengeluaran', 'url' => ['/fenomena/tabulasidinamispeng', 'a' => '', 'b' => '', 'c' => '', 'd' => '']],
                                ['label' => 'Pengaruh Lap. Usaha', 'url' => ['/fenomena/tabulasidinamispengaruh', 'a' => '', 'b' => '', 'c' => '', 'd' => '', 'e' => 1]],
                                ['label' => 'Pengaruh Pengeluaran', 'url' => ['/fenomena/tabulasidinamispengaruhpeng', 'a' => '', 'b' => '', 'c' => '', 'd' => '', 'e' => 1]],
                            ],
                        ] : (['label' => false, 'visible' => false]),
                    (!Yii::$app->user->isGuest && Yii::$app->user->identity->active != 2) ?
                        [
                            'label' => 'Alat Bantu [beta]',
                            'active' => in_array(\Yii::$app->controller->action->id, ['twitterfeeds', 'newscrawl', 'googlecse']),
                            'icon' => 'hands-helping',
                            'items' => [
                                ['label' => 'Indonesia di Twitter', 'url' => ['site/twitterfeeds']],
                                ['label' => 'Berita Ekonomi', 'url' => ['site/newscrawl']],
                                ['label' => 'Google CSE', 'url' => ['site/googlecse']],
                            ],
                        ] : (['label' => false, 'visible' => false]),
                    (!Yii::$app->user->isGuest && Yii::$app->user->identity->admin == 1) ?
                        [
                            'label' => 'Data Pengguna',
                            'url' => ['/pengguna/index'],
                            'icon' => 'users',
                            'active' => (in_array(\Yii::$app->controller->action->id, ['index', 'create', 'update', 'view']) && Yii::$app->controller->id == 'pengguna'),
                        ] : (['label' => false, 'visible' => false]),
                    (!Yii::$app->user->isGuest) ?
                        [
                            'label' => 'Password Non SSO',
                            'url' => ['/pengguna/ubahpassword', 'id' => Yii::$app->user->identity->username],
                            'icon' => 'users-cog',
                        ] : (['label' => false, 'visible' => false]),
                ]
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>