<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chỉnh sửa đơn hàng</title>
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
                            <?php foreach ($billone as $listcart) : ?>
                                <div class="row mb-6">
                                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">

                                    </div>
                                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                        <form action="" method="post">
                                            <!-- Data -->
                                            <div class="mb-3">
                                                <label for="" class="form-label">tên người nhận</label> <br>
                                                <input type="text" class="form-control my-4" id="diachi" value="<?= $listcart['name_order'] ?>" name="name_order">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Địa chỉ</label> <br>
                                                <input type="text" class="form-control my-4" id="diachi" value="<?= $listcart['address'] ?>" name="diachi">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">số điện thoại</label> <br>
                                                <input type="text" class="form-control my-4" id="phone" value="<?= $listcart['phone'] ?>" name="phone">
                                            </div>
                                            <!-- xác nhận -->
                                            <button name="btn" class="btn btn-primary px-3 ms-2">cập nhật</button>
                                        </form>
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