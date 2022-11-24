<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>đơn hàng của tôi</title>
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
                            <h5 class="mb-0">ĐƠN HÀNG CỦA TÔI</h5>
                        </div>
                        <div class="card-body">
                            <hr class="my-4" />
                            <!-- Single item -->
                            <?php foreach ($listbill as $listcart) : ?>
                                <div class="row mb-6">
                                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                        <!-- Image -->
                                        <!-- <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                            <img src="" class="w-100" alt="" />
                                            <a href="#!">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                            </a>
                                        </div> -->
                                        <!-- Image -->
                                    </div>

                                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                        <!-- Data -->
                                        <p><strong>TÊN NGƯỜI NHẬN: <?= $listcart['name_order'] ?></strong></p>
                                        <p>ĐỊA CHỈ:
                                            <?= $listcart['address'] ?>
                                        </p>
                                        <p>SỐ ĐIỆN THOẠI:
                                            <?= $listcart['phone'] ?>
                                        </p>
                                        <p>THÀNH TIỀN:
                                            <?= $listcart['total'] ?>
                                        </p>
                                        <p>NGÀY ĐẶT:
                                            <?= $listcart['date_purchase'] ?>
                                        </p>
                                        <p>TRẠNG THÁI ĐƠN HÀNG:
                                            <?= $listcart['status'] ?>
                                        </p>
                                        <p>PHƯƠNG THỨC THANH TOÁN:
                                            <?= $listcart['method_payment_id'] ?>
                                        </p>
                                        <!-- xác nhận -->
                                        <a class="btn btn-primary px-3 ms-2" href="">hủy đơn hàng</a>
                                        <a class="btn btn-primary px-3 ms-2" href="">sửa thông tin</a>
                                    </div>
                                </div>
                            <?php endforeach ?>
                            <!-- Single item -->
                            <hr>
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
            </div>
        </div>
    </section>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
</body>

</html>