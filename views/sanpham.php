<?php
    include "views/header.php";
?>
<main>
<div class="danhsachsanpham py-5 bg-light">
            <div class="container">
                <div class="row">
                <?php foreach($listsp as $sp) :?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <a href="#">
                                <img class="bd-placeholder-img card-img-top" width="100%" height="300"
                                    src="./views/src/image/products/<?=$sp['image']?>">
                            </a>
                            <div class="card-body">
                                <a href="#">
                                    <h5><?=$sp['name']?></h5>
                                </a>
                                <h6>Điện thoại</h6>
                                <p class="card-text">CPU: Dual-core 1 GHz</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary"
                                            href="#">Xem chi tiết</a>
                                        <a class="btn btn-sm btn-outline-secondary"
                                            href="#">Thêm vào giỏ hàng</a>
                                    </div>
                                    <small class="text-muted text-right">
                                        <s><?=$sp['price']?></s>
                                        <b><?=$sp['price']?></b>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach?>
                </div>
            </div>
        </div>
</main>
<?php
    include "views/footer.php";
?>