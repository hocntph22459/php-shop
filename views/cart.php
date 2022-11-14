<!DOCTYPE html>
<html lang="en">

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

<body>
    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">sản phẩm</h5>
                        </div>
                        <div class="card-body">
                            <!-- Single item -->
                            <div class="row">
                                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                    <!-- Image -->
                                    <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp" class="w-100" alt="Blue Jeans Jacket" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                        </a>
                                    </div>
                                    <!-- Image -->
                                </div>

                                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                    <!-- Data -->
                                    <p><strong>Blue denim shirt</strong></p>
                                    <p>Color: blue</p>
                                    <p>Size: M</p>
                                    <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip" title="Remove item">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip" title="Move to the wish list">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <!-- Data -->
                                </div>

                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                    <!-- Quantity -->
                                    <div class="d-flex mb-4" style="max-width: 300px">
                                        <button class="btn btn-primary px-3 me-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>

                                        <div class="form-outline">
                                            <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                                            <label class="form-label" for="form1">Số lượng</label>
                                        </div>

                                        <button class="btn btn-primary px-3 ms-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                    <!-- Quantity -->

                                    <!-- Price -->
                                    <p class="text-start text-md-center">
                                        <strong>$17.99</strong>
                                    </p>
                                    <!-- Price -->
                                </div>
                            </div>
                            <!-- Single item -->

                            <hr class="my-4" />

                            <!-- Single item -->
                            <div class="row">
                                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                    <!-- Image -->
                                    <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp" class="w-100" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                        </a>
                                    </div>
                                    <!-- Image -->
                                </div>

                                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                    <!-- Data -->
                                    <p><strong>Red hoodie</strong></p>
                                    <p>Color: red</p>
                                    <p>Size: M</p>

                                    <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip" title="Remove item">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip" title="Move to the wish list">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <!-- Data -->
                                </div>

                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                    <!-- Quantity -->
                                    <div class="d-flex mb-4" style="max-width: 300px">
                                        <button class="btn btn-primary px-3 me-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>

                                        <div class="form-outline">
                                            <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                                            <label class="form-label" for="form1">Quantity</label>
                                        </div>

                                        <button class="btn btn-primary px-3 ms-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                    <!-- Quantity -->

                                    <!-- Price -->
                                    <p class="text-start text-md-center">
                                        <strong>$17.99</strong>
                                    </p>
                                    <!-- Price -->
                                </div>
                            </div>
                            <!-- Single item -->
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <p><strong>Dự kiến ​​giao hàng vận chuyển</strong></p>
                            <p class="mb-0">12.10.2020 - 14.10.2020</p>
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
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    sản phẩm
                                    <span>$53.98</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Tổng cộng</strong>
                                        <strong>
                                            <p class="mb-0">(bao gồm VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong>$53.98</strong></span>
                                </li>
                            </ul>
                            <a href="http://localhost/da1/?url=checkout-cart" class="btn btn-primary btn-lg btn-block">ĐI ĐẾN THANH TOÁN</a>
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