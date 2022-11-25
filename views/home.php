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
                <img class="d-block w-100" src="./views/src/image/banner/slide1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./views/src/image/banner/slide2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./views/src/image/banner/slide1.jpg" alt="Third slide">
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
        <!-- san pham noi bat -->
        <h2 class="text-center">Sản phẩm nổi bật</h2>
        <div class="row">
            <?php foreach ($name_category as $sp_cate) : ?>
                <?php foreach ($listsptop as $sp) : ?>
                    <?php if ($sp_cate['id'] == $sp['id']) : ?>
                        <div class="card">
                            <img src="./views/src/image/products/<?= $sp['image'] ?>" alt="Denim Jeans" style="width:100%; margin: auto;">
                            <h3><a href=""><?= $sp['name'] ?></a></h3>
                            <p class="price"><?= $sp['price'] ?></p>
                            <p>
                                <td><?= $sp_cate['name_category'] ?></td>
                            </p>
                            <!-- bắt lỗi đăng nhập mới thêm đc giỏ hàng -->
                            <?php if (!isset($_SESSION['email'])) : ?>
                                <p><button type="button" class="btn btn-success"><a href="http://localhost/da1/?url=login-khach-hang">Thêm vào giỏ hàng</a></button></p>
                            <?php endif ?>
                            <?php if (isset($_SESSION['email'])) : ?>
                                <form action="" method="post">
                                    <input type="text" name="image" value="./views/src/image/products/<?= $sp['image'] ?>" hidden>
                                    <input type="text" name="name" value="<?= $sp['name'] ?>" hidden>
                                    <input type="text" name="price" value="<?= $sp['price'] ?>" hidden>
                                    <div class="mb-3 mt-3">
                                        SỐ LƯỢNG:
                                        <input type="number" class="form-control my-4" placeholder="chọn số lượng" name="soluong" value="1">
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <input type="text" class="form-control my-4" placeholder="chọn số lượng" name="size" value="<?= $sp['size'] ?>" hidden>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <input type="text" class="form-control my-4" placeholder="chọn số lượng" name="color" value="<?= $sp['color'] ?>" hidden>
                                    </div>
                                    <button name="addtocart" class="btn btn-success">Thêm vào giỏ hàng</button>
                                </form>
                            <?php endif ?>
                            <p><button type="button" class="btn btn-info"><a href="http://localhost/da1/?url=san-pham-ct&id=<?= $sp['id'] ?>">Xem chi tiết</a></button></p>
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
                            <h3><a href=""><?= $sp['name'] ?></a></h3>
                            <p class="price"><?= $sp['price'] ?></p>
                            <p>
                                <td><?= $sp_cate['name_category'] ?></td>
                            </p>
                            <!-- bắt lỗi đăng nhập mới thêm đc giỏ hàng -->
                            <?php if (!isset($_SESSION['email'])) : ?>
                                <p><button type="button" class="btn btn-success"><a href="http://localhost/da1/?url=login-khach-hang">Thêm vào giỏ hàng</a></button></p>
                            <?php endif ?>

                            <?php if (isset($_SESSION['email'])) : ?>
                                <form action="" method="post">
                                    <input type="text" name="image" value="./views/src/image/products/<?= $sp['image'] ?>" hidden>
                                    <input type="text" name="name" value="<?= $sp['name'] ?>" hidden>
                                    <input type="text" name="price" value="<?= $sp['price'] ?>" hidden>
                                    <div class="mb-3 mt-3">
                                        SỐ LƯỢNG:
                                        <input type="number" class="form-control my-4" placeholder="chọn số lượng" name="soluong" value="1">
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <input type="text" class="form-control my-4" placeholder="chọn số lượng" name="size" value="<?= $sp['size'] ?>" hidden>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <input type="text" class="form-control my-4" placeholder="chọn số lượng" name="color" value="<?= $sp['color'] ?>" hidden>
                                    </div>
                                    <button name="addtocart" class="btn btn-success">Thêm vào giỏ hàng</button>
                                </form>
                            <?php endif ?>
                            <p><button type="button" class="btn btn-info"><a href="http://localhost/da1/?url=san-pham-ct&id=<?= $sp['id'] ?>">Xem chi tiết</a></button></p>
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
                            <h3><a href=""><?= $sp['name'] ?></a></h3>
                            <p class="price"><?= $sp['price'] ?></p>
                            <p>
                                <td><?= $sp_cate['name_category'] ?></td>
                            </p>
                            <!-- bắt lỗi đăng nhập mới thêm đc giỏ hàng -->
                            <?php if (!isset($_SESSION['email'])) : ?>
                                <p><button type="button" class="btn btn-success"><a href="http://localhost/da1/?url=login-khach-hang">Thêm vào giỏ hàng</a></button></p>
                            <?php endif ?>
                            <?php if (isset($_SESSION['email'])) : ?>
                                <form action="" method="post">
                                    <input type="text" name="image" value="./views/src/image/products/<?= $sp['image'] ?>" hidden>
                                    <input type="text" name="name" value="<?= $sp['name'] ?>" hidden>
                                    <input type="text" name="price" value="<?= $sp['price'] ?>" hidden>
                                    <div class="mb-3 mt-3">
                                        SỐ LƯỢNG:
                                        <input type="number" class="form-control my-4" placeholder="chọn số lượng" name="soluong" value="1">
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <input type="text" class="form-control my-4" placeholder="chọn số lượng" name="size" value="<?= $sp['size'] ?>" hidden>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <input type="text" class="form-control my-4" placeholder="chọn số lượng" name="color" value="<?= $sp['color'] ?>" hidden>
                                    </div>
                                    <button name="addtocart" class="btn btn-success">Thêm vào giỏ hàng</button>
                                </form>
                            <?php endif ?>
                            <p><button type="button" class="btn btn-info"><a href="http://localhost/da1/?url=san-pham-ct&id=<?= $sp['id'] ?>">Xem chi tiết</a></button></p>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            <?php endforeach ?>
        </div>
    </div>
    <!-- End block content -->
</main>
<?php
include "footer.php";
?>