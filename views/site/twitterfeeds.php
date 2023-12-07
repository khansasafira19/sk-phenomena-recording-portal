<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Twitter Feeds';
?>
<style>
    .products-list .product-description {
        white-space: normal!important;
    }
</style>
<div class="wrapper">

    <div class="text-center bg-biru-muda alert">
        <h1 class="display-4">TWEETS</h1>

        <p class="lead">Yang Berkaitan dengan Indonesia dan Berita</p>
    </div>

    <hr />
    <div class="body-content">
        <div class="fenomena-index">
            <div class="body-content">
                <div class="metadata row">
                    <div class="col-md-6">
                        <div class="card card-widget">
                            <div class="card-header">
                                <div class="user-block">
                                    <img class="img-circle" src="../images/phenomenon.jpg" alt="User Image">
                                    <span class="username"><a href="#">Twitter Feeds dengan Keyword "indonesia"</a></span>
                                    <span class="description">indonesia OR #indonesia OR #kotaindonesia OR #indonesiakab</span>
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
                                <i class="fab fa-twitter"></i> HASHTAGS <i class="fab fa-twitter"></i>
                            </div>
                            <div class="card-body">
                                <?php
                                $hashtags = array();
                                if (property_exists($tweets, 'statuses')) {
                                    foreach ($tweets->statuses as $tweet) {
                                        preg_match_all('/#\w+/', $tweet->full_text, $matches);
                                        foreach ($matches[0] as $match) {
                                            if (!array_key_exists($match, $hashtags)) {
                                                $hashtags[$match] = 1;
                                            } else {
                                                $hashtags[$match]++;
                                            }
                                        }
                                    }
                                } else {
                                    echo '';
                                }
                                arsort($hashtags);

                                echo '<ul>';
                                foreach ($hashtags as $hashtag => $count) {
                                    echo '<li><a href="https://twitter.com/search?q=' . urlencode($hashtag) . '">' . $hashtag . ' (' . $count . ')</a></li>';
                                }
                                echo '</ul>';
                                ?>
                            </div>
                            <div class="card-footer text-center text-info bg-biru-sangat-muda">
                                <i class="fab fa-twitter"></i> CUIT-CUITAN <i class="fab fa-twitter"></i>
                            </div>
                            <div class="card-body">

                                <?php
                                // echo 'Total Tweets: ' . $tweets->search_metadata->count . '<br><br>';
                                if (property_exists($tweets, 'search_metadata')) {
                                    echo 'Total Tweets: ' . $tweets->search_metadata->count . '<br><br>';
                                } else {
                                    echo '';
                                }

                                if (property_exists($tweets, 'statuses')) {
                                    echo '<ul class="products-list product-list-in-card pl-2 pr-2">';
                                    foreach ($tweets->statuses as $tweet) {
                                        echo '<li class="item">
                                            <div class="product-img">
                                                <img src="../images/twitter.png" alt="User Image" class="img-size-50">
                                            </div>
                                            <div class="product-info">
                                                <a href="https://twitter.com/' . $tweet->user->screen_name . '/status/' . $tweet->id_str . '" class="product-title">@' . $tweet->user->screen_name . '<span class="badge badge-warning float-right">Lihat</span></a>
                                                <span class="product-description">' .
                                            '<i>' . $tweet->full_text . '</i>' .
                                            '</span>
                                            </div>
                                        </li>';
                                    }
                                    echo '</ul>';
                                } else {
                                    echo '';
                                }


                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-widget">
                            <div class="card-header">
                                <div class="user-block">
                                    <img class="img-circle" src="../images/phenomenon.jpg" alt="User Image">
                                    <span class="username"><a href="#">Twitter Feeds dari Koran indonesia</a></span>
                                    <span class="description">Rakyat indonesia, indonesia Today, indonesia Info, Radar indonesia</span>
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
                                <i class="fab fa-twitter"></i> CUIT-CUITAN <i class="fab fa-twitter"></i>
                            </div>
                            <div class="card-body">

                                <?php
                                echo '<ul class="products-list product-list-in-card pl-2 pr-2">';
                                foreach ($tweets2 as $tweet) {
                                    echo '<li class="item">
                                        <div class="product-img">
                                            <img src="../images/twitter2.png" alt="User Image" class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="https://twitter.com/' . $tweet->user->screen_name . '/status/' . $tweet->id_str . '" class="product-title">@' . $tweet->user->screen_name . '<span class="badge badge-warning float-right">Lihat</span></a>
                                            <span class="product-description">' .
                                        '<i>' . $tweet->full_text . '</i>' .
                                        '</span>
                                        </div>
                                    </li>';
                                }
                                echo '</ul>';
                                // foreach ($tweets2 as $tweet) {
                                //     echo '<b>By: @' . $tweet->user->screen_name . '</b><br>';
                                //     echo '<i>' . $tweet->text . '</i><br>';
                                //     echo '<a href="https://twitter.com/' . $tweet->user->screen_name . '/status/' . $tweet->id_str . '">Lihat Cuitan</a><br><br>';
                                // }
                                ?>

                            </div>

                        </div>

                    </div>
                </div> <!-- / service-effect column -->
            </div>

        </div>

    </div>
</div>