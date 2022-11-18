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
        <?php foreach($listsptop as $sp) :?>
            <?php if($sp_cate['id'] == $sp['id']):?>
            <div class="card">
                <img src="./views/src/image/products/<?=$sp['image']?>" alt="Denim Jeans" style="width:100%; margin: auto;">
                <h3><a href=""><?=$sp['name']?></a></h3>
                <p class="price"><?=$sp['price']?></p>
                <p><td><?= $sp_cate['name_category'] ?></td></p>
                <p><button type="button" class="btn btn-success"><a href="">Thêm vào giỏ hàng</a></button></p>
                <p><button type="button" class="btn btn-info"><a href="http://localhost/da1/?url=san-pham-ct&id=<?=$sp['id']?>">Xem chi tiết</a></button></p>
            </div>
            <?php endif?>
        <?php endforeach?>
        <?php endforeach?>
        </div>
        <!-- san pham giam gia -->
        <h2 class="text-center">Sản phẩm giảm giá</h2>
        <div class="row">
        <?php foreach ($name_category as $sp_cate) : ?>
        <?php foreach($listspsell as $sp) :?>
            <?php if($sp_cate['id'] == $sp['id']):?>
            <div class="card">
                <img src="./views/src/image/products/<?=$sp['image']?>" alt="Denim Jeans" style="width:100%; margin: auto;">
                <h3><a href=""><?=$sp['name']?></a></h3>
                <p class="price"><?=$sp['price']?></p>
                <p><td><?= $sp_cate['name_category'] ?></td></p>
                <p><button type="button" class="btn btn-success"><a href="">Thêm vào giỏ hàng</a></button></p>
                <p><button type="button" class="btn btn-info"><a href="http://localhost/da1/?url=san-pham-ct&id=<?=$sp['id']?>">Xem chi tiết</a></button></p>
            </div>
            <?php endif?>
        <?php endforeach?>
        <?php endforeach?>
        </div>
        <!-- san pham moi -->
        <h2 class="text-center">Sản phẩm mới</h2>
        <div class="row">
        <?php foreach ($name_category as $sp_cate) : ?>
        <?php foreach($listspnew as $sp) :?>
            <?php if($sp_cate['id'] == $sp['id']):?>
            <div class="card">
                <img src="./views/src/image/products/<?=$sp['image']?>" alt="Denim Jeans" style="width:100%; margin: auto;">
                <h3><a href=""><?=$sp['name']?></a></h3>
                <p class="price"><?=$sp['price']?></p>
                <p><td><?= $sp_cate['name_category'] ?></td></p>
                <p><button type="button" class="btn btn-success"><a href="">Thêm vào giỏ hàng</a></button></p>
                <p><button type="button" class="btn btn-info"><a href="http://localhost/da1/?url=san-pham-ct&id=<?=$sp['id']?>">Xem chi tiết</a></button></p>
            </div>
            <?php endif?>
        <?php endforeach?>
        <?php endforeach?>
        </div>
    </div>
    <!-- End block content -->
</main>
<?php
include "footer.php";
?>