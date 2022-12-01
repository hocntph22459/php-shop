<?php
include "views/header.php";
?>
<main>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./views/src/image/banner/banner1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./views/src/image/banner/banner2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./views/src/image/banner/banner3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--  Danh sach san pham -->
    <div class="container">
        <div class="container marketing">
            <!-- Three columns of text below the carousel -->
            <div class="row" style="margin-top: 64px; margin-left:64px;">
                <div class="col-xl-4">
                    <img style="margin-left: 36px;" class="bd-placeholder-img rounded-circle" width="140" height="140" src="./views/src/image/assets/icon/icon-1.png">
                    <h2>Đặt hàng</h2>
                    <p>Chọn sản phẩm bạn yêu thích, và Đặt hàng.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-xl-4">
                    <img style="margin-left: 36px;" class="bd-placeholder-img rounded-circle" width="140" height="140" src="./views/src/image/assets/icon/icon-2.png">
                    <h2>Tạo đơn hàng</h2>
                    <p>Theo dõi đơn hàng của bạn.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-xl-4">
                    <img style="margin-left: 36px;" class="bd-placeholder-img rounded-circle" width="140" height="140" src="./views/src/image/assets/icon/icon-3.png">
                    <h2>Giao hàng</h2>
                    <p>Giao hàng tận nơi.</p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>
        <!-- san pham noi bat -->
        <h2 class="text-center">Sản phẩm nổi bật</h2>
        <div class="row">
            <?php foreach ($name_category as $sp_cate) : ?>
                <?php foreach ($listsptop as $sp) : ?>
                    <?php if ($sp_cate['id'] == $sp['id']) : ?>
                        <div class="card">
                            <img src="./views/src/image/products/<?= $sp['image'] ?>" alt="Denim Jeans" style="width:100%; margin: auto;">
                            <h3 style="text-transform: uppercase;"><a href=""><?= $sp['name'] ?></a></h3>
                            <?php if ($sp['sell'] > 0) : ?>
                                <div class="product-price-discount" style="font-size: 20px;"><del>$<?= $sp['price'] - ($sp['price'] * $sp['sell'] / 100) ?></del><span class="line-through">$<?= $sp['price'] ?></span></div>
                            <?php endif; ?>
                            <?php if ($sp['sell'] == 0) : ?>
                                <div class="product-price-discount"><span>$<?= $sp['price'] ?></span></div>
                            <?php endif; ?>
                            <h4 style="color: red;"><?= $sp_cate['name_category'] ?></h4>
                            <button class="btn btn-info" style="margin-bottom: 20px;"><a href="http://localhost/da1/?url=san-pham-ct&id=<?= $sp['id'] ?>" style="color: white; margin-bottom: 10px;">Xem chi tiết</a></button>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            <?php endforeach ?>
        </div>
        <!-- san pham giam gia -->
        <h2 class="text-center">Sản phẩm giảm giá</h2>
        <div class="row">
            <?php foreach ($name_category as $sp_cate) : ?>
                <?php foreach ($listspsell as $sp) : ?>
                    <?php if ($sp_cate['id'] == $sp['id']) : ?>
                        <div class="card">
                            <img src="./views/src/image/products/<?= $sp['image'] ?>" alt="Denim Jeans" style="width:100%; margin: auto;">
                            <h3 style="text-transform: uppercase;"><a href=""><?= $sp['name'] ?></a></h3>
                            <?php if ($sp['sell'] > 0) : ?>
                                <div class="product-price-discount" style="font-size: 20px;"><del>$<?= $sp['price'] - ($sp['price'] * $sp['sell'] / 100) ?></del><span class="line-through">$<?= $sp['price'] ?></span></div>
                            <?php endif; ?>
                            <?php if ($sp['sell'] == 0) : ?>
                                <div class="product-price-discount"><span>$<?= $sp['price'] ?></span></div>
                            <?php endif; ?>
                            <h4 style="color: red;"><?= $sp_cate['name_category'] ?></h4>
                            <button class="btn btn-info" style="margin-bottom: 20px;"><a href="http://localhost/da1/?url=san-pham-ct&id=<?= $sp['id'] ?>" style="color: white; margin-bottom: 10px;">Xem chi tiết</a></button>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            <?php endforeach ?>
        </div>
        <!-- san pham moi -->
        <h2 class="text-center">Sản phẩm mới</h2>
        <div class="row">
            <?php foreach ($name_category as $sp_cate) : ?>
                <?php foreach ($listspnew as $sp) : ?>
                    <?php if ($sp_cate['id'] == $sp['id']) : ?>
                        <div class="card">
                            <img src="./views/src/image/products/<?= $sp['image'] ?>" alt="Denim Jeans" style="width:100%; margin: auto;">
                            <h3 style="text-transform: uppercase;"><a href=""><?= $sp['name'] ?></a></h3>
                            <?php if ($sp['sell'] > 0) : ?>
                                <div class="product-price-discount" style="font-size: 20px;"><del>$<?= $sp['price'] - ($sp['price'] * $sp['sell'] / 100) ?></del><span class="line-through">$<?= $sp['price'] ?></span></div>
                            <?php endif; ?>
                            <?php if ($sp['sell'] == 0) : ?>
                                <div class="product-price-discount"><span>$<?= $sp['price'] ?></span></div>
                            <?php endif; ?>
                            <h4 style="color: red;"><?= $sp_cate['name_category'] ?></h4>
                            <button class="btn btn-info" style="margin-bottom: 20px;"><a href="http://localhost/da1/?url=san-pham-ct&id=<?= $sp['id'] ?>" style="color: white; margin-bottom: 10px;">Xem chi tiết</a></button>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            <?php endforeach ?>
        </div>
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Đặt hàng, Tạo đơn hàng, Giao hàng <span class="text-muted">Nhanh
                        chóng</span> <br>
                    <p class="lead">Nơi mua sắm tuyệt vời cho mọi lứa tuổi.</p>
                </h2>
            </div>
            <div class="col-md-5">
                <img src="./views/src/image/marketing/marketing-1.png">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Báo cáo Doanh thu tuyệt vời <span class="text-muted">Theo dõi đơn
                        hàng của
                        bạn.</span> <br>
                    <p class="lead">Hệ thống theo dõi đơn hàng chi tiết, thông tin mọi lúc mọi nơi.</p>
                </h2>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="./views/src/image/marketing/marketing-2.png">
            </div>
        </div>
        <hr class="featurette-divider">
        <!-- /END THE FEATURETTES -->
    </div>
    <!-- End block content -->
</main>
<?php
include "footer.php";
?>