<!DOCTYPE html>
<html lang="en">
<?php
$total = 0;
$i= 0;
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>giỏ hàng</title>
    <link rel="stylesheet" href="./views/src/css/client/cart/cart.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
</head>
<style>
    section {
        background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(158, 158, 200, 1) 33%, rgba(163, 163, 205, 1) 34%, rgba(168, 168, 210, 1) 35%, rgba(147, 173, 216, 1) 43%, rgba(149, 148, 190, 1) 65%, rgba(0, 212, 255, 1) 100%);
    }
</style>

<body>
    <section class="h-1000">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <a href="http://localhost/da1/?url=san-pham">tiếp tục mua sắm</a>
                            <h3 class="mb-0">sản phẩm</h3>
                        </div>
                        <div class="card-body">
                            <!-- Single item -->
                            <?php
                            // echo "<pre>";
                            // var_dump($_SESSION['mycart']);

                            // die;
                            ?>
                            <?php foreach ($_SESSION['mycart'] as $listcart) : ?>
                                <div class="row">
                                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                        <!-- Image -->

                                        <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                            <img src="<?= $listcart['image'] ?>" class="w-100" alt="" />
                                            <a href="#!">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                            </a>
                                        </div>
                                        <!-- Image -->
                                    </div>

                                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                        <!-- Data -->
                                        <p><strong><?= $listcart['name'] ?></strong></p>
                                        <p>màu xắc:
                                            <?= $listcart[0] ?>
                                        </p>
                                        <p>Size:
                                            <?= $listcart[1] ?>
                                        </p>
                                        <p>giá tiền:
                                            <?= $listcart['price'] ?>
                                        </p>
                                        <?php
                                            // echo "<pre>";
                                            // var_dump($listcart[$i]);
                                            
                                            // die;
                                        ?>
                                        <?php
                                        
                                        ?>

                                        <a href="?url=delete-cart&idcart=<?=$i?>" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip" title="xóa" name="delcart"><i class="fas fa-trash"></i></a>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip" title="yêu thích">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <!-- Data -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                        <!-- Quantity -->
                                        <div class="d-flex mb-4" style="max-width: 300px">
                                            <form action="" method="post">
                                                <div class="form-outline">
                                                    <input id="form1" min="0" name="soluong" value="<?= $listcart[2] ?>" type="number" class="form-control" />
                                                    <label class="form-label" for="form1">Số lượng</label>
                                                </div>
                                            </form>
                                            <!-- xác nhận -->
                                            <a class="btn btn-primary px-3 ms-2 py-3" href="?url=update-cart&idcart=<?= $i ?>"><img src="./views/src/image/admin/eye-fill.svg" alt=""></a>
                                        </div>
                                        <!-- Price -->
                                        <p class="text-start text-md-center">
                                            <strong>Thành tiền : <?php 
                                                $thanhtien = ( $listcart['price'] - $listcart['sell']*$listcart['price']/100)  * $listcart[2] ; 
                                                $total = $total + $thanhtien;
                                            ?></strong>
                                            <?= $thanhtien?>
                                            <?php $i +=  1;?>
                                        </p> <br>
                                    </div>
                                </div>
                            <?php endforeach ?>
                            <!-- Single item -->

                            <hr class="my-4" />
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <p><strong>Dự kiến ​​giao hàng vận chuyển</strong></p>
                            <p class="mb-0">chúng tôi cam kết sẽ gửi hàng trong 1 - 2 ngày tới</p>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body">
                            <p><strong>Chúng tôi đồng ý</strong></p>
                            <img class="me-2" width="45px" src="./views/src/image/cart/visa.png" alt="Visa" />
                            <img class="me-2" width="45px" src="./views/src/image/cart/emegica.png" alt="American Express" />
                            <img class="me-2" width="45px" src="./views/src/image/cart/the-mastercard.png" alt="Mastercard" />
                            <img class="me-2" width="45px" src="./views/src/image/cart/paypal.png" alt="PayPal acceptance mark" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Tóm tắt</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <!-- <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    sản phẩm
                                    
                                </li> -->
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Tổng cộng</strong>
                                        <strong>
                                            <p class="mb-0">(bao gồm VAT - miễn phí vận chuyển)</p>
                                        </strong>
                                    </div>
                                    <span><strong><?= $total; ?></strong></span>
                                    
                                        
                                    
                                </li>
                            </ul>
                            <form action="?url=checkout-cart" method="POST">
                            <input type="text" value="<?=$total?>" name="tien" hidden>
                            <button class="btn btn-primary btn-lg btn-block" name="check" type="submit">ĐI ĐẾN THANH TOÁN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
</body>

</html>