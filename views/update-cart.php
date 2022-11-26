<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cập nhật giỏ hàng</title>
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
                        <div class="card-body">
                            <!-- Single item -->
                            <?php foreach ($cartone as $listcart) : ?>
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
                                            <?= $listcart['color'] ?>
                                        </p>
                                        <p>Size:
                                            <?= $listcart['size'] ?>
                                        </p>
                                        <p>giá tiền:
                                            <?= $listcart['price'] ?>
                                        </p>
                                        <a onclick="return confirm('bạn có chắc xóa ?')" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip" title="xóa" href="http://localhost/da1/?url=delete-cart&id=<?= $listcart['id'] ?>"><i class="fas fa-trash"></i></a>
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
                                                    <input id="form1" min="0" name="soluong" value="<?= $listcart['soluong'] ?>" type="number" class="form-control" />
                                                    <label class="form-label" for="form1">Số lượng</label>
                                                </div>
                                                <!-- xác nhận --> <br>
                                                <button name="btn" class="btn btn-primary px-3 ms-2">cập nhật</button>
                                            </form>
                                        </div>
                                        <!-- Price -->
                                        <p class="text-start text-md-center">
                                            <strong>Thành tiền : <?= $thanhtien = $listcart['price'] * $listcart['soluong']; ?></strong>
                                        </p> <br>

                                    </div>
                                </div>
                            <?php endforeach ?>
                            <!-- Single item -->
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