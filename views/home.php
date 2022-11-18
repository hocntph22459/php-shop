<?php
    include "views/header.php";
?>
<main>
    <div class="slider">
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
    </div>
            <!-- <div class="slide_show">
                <img src="views/src/image/banner/slide1.jpg" alt="" id="slide">
            </div> -->
            <div class="box">
                <div class="boxtitle">
                    <h3>Sản phẩm nổi bật</h3>
                </div>
                <div class="box_product center">
                <?php foreach($listspt10 as $sp) :?>
                    <div class="products">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="./views/src/image/products/<?=$sp['image']?>" alt="">
                                <div class="btn">
                                    <button><a href="">Xem chi tiết </a></button>
                                    <button><a href="">Thêm vào giỏ hàng</a></button>
                                </div>
                            </div>
                            <div class="product_name"><h3><?=$sp['name']?></h3></div>
                            <div class="product_price"><?=$sp['price']?></div>
                        </div>
                    </div>
                <?php endforeach?>
                </div>               
            </div>
            <div class="box">
                <div class="boxtitle">
                    <h3>Sản phẩm mới</h3>
                </div>
                <div class="box_product center">
                <?php foreach($listspnew as $spn) :?>
                    <div class="products">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="./views/src/image/products/<?=$spn['image']?>" alt="">
                                <!-- <div class="product_button">
                                    <button><a href=""><i class="fa-sharp fa-solid fa-cart-plus fa-3x"></i></a></button>
                                    <button><a href=""><i class="fa-solid fa-eye fa-3x"></i></a></button>
                                </div> -->
                            </div>
                            <div class="product_name"><h3><?=$spn['name']?></h3></div>
                            <div class="product_price"><?=$spn['price']?></div>
                        </div>
                    </div>
                <?php endforeach?>
                </div>               
            </div>
            <div class="box">
                <div class="boxtitle">
                    <h3>Sản phẩm giảm giá</h3>
                </div>
                <div class="box_product center">
                <?php foreach($listspsell as $sps) :?>
                    <div class="products">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="./views/src/image/products/<?=$sps['image']?>" alt="">
                                <!-- <div class="product_button">
                                    <button><a href=""><i class="fa-sharp fa-solid fa-cart-plus fa-3x"></i></a></button>
                                    <button><a href=""><i class="fa-solid fa-eye fa-3x"></i></a></button>
                                </div> -->
                            </div>
                            <div class="product_name"><h3><?=$sps['name']?></h3></div>
                            <div class="product_price"><?=$sps['price']?></div>
                        </div>
                    </div>
                <?php endforeach?>
                </div>               
            </div>
            <div class="post">
                <div class="boxtitle">
                    <h3>Tin Tức</h3>
                </div>
                <div class="post_content">
                    <div class="post_banner">
                        <img src="image/post/tittle/title1.jpg" alt="">
                    </div>
                    <div class="post_post">
                        <div class="post_item">
                            <div class="post_img">
                                <img src="image/post/tittle/title 2.jpg" alt="">
                            </div>
                            <div class="post_text">
                                <div class="post_name">Chiếc áo lửng đắt hàng nhất tại các shop thời trang Hè này</div>
                                <div class="post_time">31-10-2022</div>
                            </div>
                        </div>
                        <div class="post_item">
                            <div class="post_img">
                                <img src="image/post/tittle/title3.jpg" alt="">
                            </div>
                            <div class="post_text">
                                <div class="post_name">Chiếc áo lửng đắt hàng nhất tại các shop thời trang Hè này</div>
                                <div class="post_time">31-10-2022</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</main>
<?php 
    include "footer.php";
?>