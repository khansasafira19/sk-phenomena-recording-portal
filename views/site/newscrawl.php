<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'News Crawling';
?>
<style>
    .products-list .product-description {
        white-space: normal !important;
    }
</style>
<div class="wrapper">

    <div class="text-center bg-biru-muda alert">
        <h1 class="display-4">CRAWLING BERITA TERKINI</h1>

        <p class="lead">Yang Berkaitan dengan Indonesia dan Ekonomi</p>
    </div>
    <?php //var_dump($news)
    ?>
    <hr />
    <div class="body-content">
        <div class="fenomena-index">
            <div class="body-content">
                <div class="metadata row">
                    <div class="col-md-6">
                        <?php if (!empty($news_error_message)) { ?>
                            <div class="alert alert-danger"><?= $news_error_message ?></div>
                        <?php } else { ?>
                            <div class="card card-widget">
                                <div class="card-header">
                                    <div class="user-block">
                                        <img class="img-circle" src="../images/phenomenon.jpg" alt="User Image">
                                        <span class="username"><a href="#">Hasil dari News API Org / Google News</a></span>
                                        <span class="description">Dengan paramater country = indonesia</span>
                                    </div>

                                    <div class="card-tools">

                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>

                                </div>

                                <div class="card-footer text-center text-info bg-biru-sangat-muda">
                                    <i class="fab fa-twitter"></i> HEADLINE NEWS <i class="fab fa-twitter"></i>
                                </div>
                                <div class="card-body">
                                    <?php
                                    echo '<ul class="products-list product-list-in-card pl-2 pr-2">';
                                    foreach ($news as $article) {
                                        echo '<li class="item">
                                            <div class="product-img">
                                                <img src="../images/google.png" alt="User Image" class="img-size-50">
                                            </div>
                                            <div class="product-info">
                                                <a href="' . $article['url'] . '" class="product-title">' . $article['author'] . '<span class="badge badge-warning float-right">Lihat</span></a>
                                                <span class="product-description">' .
                                            '<i>' . $article['title'] . '</i>' .
                                            '</span>
                                            </div>
                                        </li>';
                                    }
                                    echo '</ul>';

                                    ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-6">
                        <?php if (!empty($google_error_message)) { ?>
                            <div class="alert alert-danger"><?= $google_error_message ?></div>
                        <?php } else { ?>

                            <div class="card card-widget">
                                <div class="card-header">
                                    <div class="user-block">
                                        <img class="img-circle" src="<?php echo Yii::$app->request->baseUrl; ?>/images/phenomenon.jpg" alt="User Image">
                                        <span class="username"><a href="#">Hasil dari Google Custom Search</a></span>
                                        <span class="description"><b>Sumber:</b> Kompas, Detik, dll. <b>Keywords:</b> indonesia, ekonomi.</span>
                                    </div>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>

                                </div>

                                <div class="card-footer text-center text-info bg-biru-sangat-muda">
                                    <i class="fab fa-twitter"></i> CUSTOM RESULTS <i class="fab fa-twitter"></i>
                                </div>
                                <div class="card-footer text-center">
                                    <?= Html::a('<i class="fas fa-search"></i> Cari Keywords Lain', ['googlecse'], ['class' => 'right btn btn-outline-primary btn-sm bundar']) ?>
                                </div>
                                <div class="card-body">
                                    <?php
                                    // Process the response
                                    // Display the results
                                    // var_dump($results);
                                    echo '<ul class="products-list product-list-in-card pl-2 pr-2">';
                                    foreach ($results->items as $result) {
                                        echo '<li class="item">
                                            <div class="product-img">
                                                <img src="../images/google.png" alt="User Image" class="img-size-50">
                                            </div>
                                            <div class="product-info">
                                                <a href="' . $result->link . '" class="product-title">' . $result->title . '<span class="badge badge-warning float-right">Lihat</span></a>
                                                <span class="product-description">' .
                                            '<i>' . $result->snippet . '</i>' .
                                            '</span>
                                            </div>
                                        </li>';
                                    }

                                    echo '</ul>';

                                    ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>