<?php
    include "views/header.php";
?>
<main>
    <div class="box">
        <div class="boxtitle">
            <h3>Sản phẩm</h3>
        </div>
        <div class="box_product center">
        <?php foreach($listsp as $sp) :?>
            <div class="products">
                <div class="product_item">
                    <div class="product_img">
                        <img src="./views/src/image/products/<?=$sp['image']?>" alt="">
                        <!-- <div class="product_button">
                            <button><a href=""><i class="fa-sharp fa-solid fa-cart-plus fa-3x"></i></a></button>
                            <button><a href=""><i class="fa-solid fa-eye fa-3x"></i></a></button>
                        </div> -->
                    </div>
                    <div class="product_name"><h3><?=$sp['name']?></h3></div>
                    <div class="product_price"><?=$sp['price']?></div>
                </div>
            </div>
        <?php endforeach?>
        </div>               
    </div>
</main>
<?php
    include "views/footer.php";
?>