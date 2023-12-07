<?php

use yii\helpers\Html;

$this->title = 'Google CSE Results';
?>
<style>
    .content-header {
        display: none;
    }
</style>
<hr />
<h1><?= Html::encode($this->title) ?></h1>
<div class="wrapper">
    <div class="body-content">
        <div class="fenomena-index">
            <?php if (!empty($google_error_message)) { ?>
                <div class="alert alert-danger"><?= $google_error_message ?></div>
            <?php } else { ?>
                <div class="text-right">
                    <a class="btn btn-info bg-biru-muda bundar" href="https://cse.google.com/cse?cx=377ab425de0e3423e" target="_blank"><i class="fab fa-google"></i> Lihat dari Google CSE</a>
                </div>
                <br/>
                <div class="card card-widget">
                    <br/>
                    <?= $this->render('googlecse', [
                        'searchModel' => $searchModel,
                    ]) ?>

                    <div class="card-footer text-center text-info bg-biru-sangat-muda">

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