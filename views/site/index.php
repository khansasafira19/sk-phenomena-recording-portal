<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Home';
?>

<div class="wrapper">

    <div class="text-center bg-biru-muda alert">
        <h1 class="display-4">SK-PRS</h1>

        <p class="lead">Sistem Informasi Perekaman Fenomena</p>
    </div>

    <hr />
    <div class="body-content">
        <div class="fenomena-index">
            <?php if (Yii::$app->session->hasFlash('success')) : ?>
                <div class="alert alert-info alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <h4><i class="icon fa fa-check"></i>Berhasil!</h4>
                    <?= Yii::$app->session->getFlash('success') ?>
                </div>
            <?php endif; ?>
            <div class="body-content">
                <div class="metadata row">
                    <div class="col-md-6">
                        <div class="card card-widget">
                            <div class="card-header">
                                <div class="user-block">
                                    <img class="img-circle" src="<?php echo Yii::$app->request->baseUrl; ?>/images/phenomenon.jpg" alt="User Image">
                                    <span class="username"><a href="#">Fenomena Ekonomi dalam SIPENA</a></span>
                                    <span class="description">Sejak Tahun 2017</span>
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

                            <div class="card-body">
                                <img class="img-fluid pad" src="<?php echo Yii::$app->request->baseUrl; ?>/images/phenomenon.jpg">
                                <p>Benteng Malborough - Bengkulu</p>
                                <!-- <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                                <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                                <span class="float-right text-muted">127 likes - 3 comments</span> -->
                            </div>

                            <div class="card-footer card-comments">
                                <div class="card-comment">

                                    <img class="img-circle img-sm" src="<?php echo Yii::$app->request->baseUrl; ?>/images/favicon.png" alt="Favicon Image">
                                    <div class="comment-text text-justify">
                                        <span class="username">
                                            About SK-PRS
                                            <span class="text-muted float-right">Versi 1: Tahun 2017, Versi 2: Tahun 2020; Versi 3: Tahun 2023</span>
                                        </span>
                                        <p class="textmetadata">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </p>
                                        <p class="textmetadata">
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Snapshot Database</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="info-box mb-3 bg-warning">
                                <span class="info-box-icon"><i class="fas fa-keyboard"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Rekaman Fenomena Sejak tahun 2017</span>
                                    <span class="info-box-number"><?php echo number_format($jumlah, 0, '', '.') ?> Fenomena</span>
                                </div>

                            </div>

                            <div class="info-box mb-3 bg-success">
                                <span class="info-box-icon"><i class="fas fa-chalkboard-teacher"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Rekaman Fenomena Tahun <?php echo date("Y") ?></span>
                                    <span class="info-box-number"><?php echo number_format($jumlahtahunini, 0, '', '.') ?> Fenomena</span>
                                </div>

                            </div>

                            <div class="info-box mb-3 bg-danger">
                                <span class="info-box-icon"><i class="fas fa-globe-asia"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Rekaman Fenomena Terbanyak Tahun <?php echo date("Y") ?></span>
                                    <span class="info-box-number"><?php echo $wilayahterbanyak ?> sebanyak <?php echo number_format($wilayahterbanyakjumlah, 0, '', '.') ?> Fenomena</span>
                                </div>
                            </div>

                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Top Contributors</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <ul class="products-list product-list-in-card pl-2 pr-2">
                                    <?php for ($i = 0; $i < 3; $i++) { ?>
                                        <li class="item">
                                            <div class="product-img">
                                                <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/user.png" alt="User Image" class="img-size-50">
                                            </div>
                                            <div class="product-info">
                                                <a href="javascript:void(0)" class="product-title"><?php echo $topcontributor[$i]['nama'] ?>
                                                    <span class="badge badge-warning float-right"><?php echo $topcontributor[$i]['wilayah'] ?></span></a>
                                                <span class="product-description">
                                                    Sebanyak <?php echo $topcontributor[$i]['jumlahwilayah'] ?> Fenomena
                                                </span>
                                            </div>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </div>

                            <div class="card-footer text-center">
                                <?php if (Yii::$app->user->identity->active != 2) : ?>
                                    <?= Html::a('Lihat Seluruh Fenomena', ['/fenomena/index'], ['class' => 'uppercase']) ?>
                                <?php else : ?>
                                    <span class="disabled-link uppercase">Hak Akses Anda: Viewer</span>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div> <!-- / service-effect column -->
            </div>

        </div>

    </div>
</div>