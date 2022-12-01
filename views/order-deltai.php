<!DOCTYPE html>
<html lang="vi" class="h-100">
<?php $total  = 0; ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>chi tiết hóa đơn</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./views/src/css/client/cart/bootstrap.min.css" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Custom css - Các file css do chúng ta tự viết -->
    <link rel="stylesheet" href="./views/src/css/client/cart/checkout.css">
</head>
<style>
    body {
        color: black;
        background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(158, 158, 200, 1) 33%, rgba(163, 163, 205, 1) 34%, rgba(168, 168, 210, 1) 35%, rgba(147, 173, 216, 1) 43%, rgba(233, 233, 241, 1) 68%, rgba(0, 212, 255, 1) 100%);
    }
</style>
<script>
    function thanhtoan() {
        confirm("bạn có chắc mua hàng ?");
    }
</script>

<body>
    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <form class="needs-validation" name="frmthanhtoan" method="post" action="#">
                <input type="hidden" name="kh_tendangnhap" value="dnpcuong">

                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Hóa đơn</h2>
                    <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, đơn hàng của quý khách.</p>
                </div>

                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">sản phẩm đã đặt</span>
                        </h4>
                        <?php foreach ($cart as $listcart) : ?>
                            <ul class="list-group mb-3">
                                <input type="hidden" name="sanphamgiohang[1][sp_ma]" value="2">
                                <input type="hidden" name="sanphamgiohang[1][gia]" value="11800000.00">
                                <input type="hidden" name="sanphamgiohang[1][soluong]" value="2">

                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0"><?= $listcart['name'] ?></h6>
                                        <small class="text-muted"><?= $listcart['price'] ?> x <?= $listcart['soluong'] ?></small>
                                    </div>
                                    <span class="text-muted"><?= $thanhtien = $listcart['price'] * $listcart['soluong']; ?></span>
                                </li>
                                <input type="hidden" name="sanphamgiohang[2][sp_ma]" value="4">
                                <input type="hidden" name="sanphamgiohang[2][gia]" value="14990000.00">
                                <input type="hidden" name="sanphamgiohang[2][soluong]" value="8">
                                <?php $total = $total + $listcart['price'] * $listcart['soluong']; ?>
                            </ul>
                        <?php endforeach ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Tổng thành tiền</span>
                            <strong><?= $total; ?></strong>
                        </li> <br>
                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Thông tin khách hàng</h4>
                        <?php foreach ($billone as $bill) : ?>
                            <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                <!-- Data -->
                                <p><strong>TÊN NGƯỜI NHẬN: <?= $bill['name_order'] ?></strong></p>
                                <p>ĐỊA CHỈ:
                                    <?= $bill['address'] ?>
                                </p>
                                <p>SỐ ĐIỆN THOẠI:
                                    <?= $bill['phone'] ?>
                                </p>
                                <p>THÀNH TIỀN:
                                    <?= $bill['total'] ?>
                                </p>
                                <p>NGÀY ĐẶT:
                                    <?= $bill['date_purchase'] ?>
                                </p>
                                <p>TRẠNG THÁI ĐƠN HÀNG:
                                    <?= $bill['status'] ?>
                                </p>
                                <p>PHƯƠNG THỨC THANH TOÁN:
                                    <?php if ($bill['method_payment_id'] == 1) : ?>
                                        Tiền mặt
                                    <?php endif; ?>
                                    <?php if ($bill['method_payment_id'] == 2) : ?>
                                        Chuyển khoản
                                    <?php endif; ?>
                                    <?php if ($bill['method_payment_id'] == 3) : ?>
                                        Ship COD
                                    <?php endif; ?>
                                </p>
                                <!-- xác nhận -->
                            </div>
                        <?php endforeach ?>
                    </div>
            </form>

        </div>
        <!-- End block content -->
    </main>

    <!-- footer -->
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span>Bản quyền © bởi <a href="http://localhost/da1/?url=home">mensbry</a> - <script>
                    document.write(new Date().getFullYear());
                </script>.</span>
            <span class="text-muted">Hành trang tới Tương lai</span>

            <p class="float-right">
                <a href="http://localhost/da1/?url=home">Về đầu trang</a>
            </p>
        </div>
    </footer>
    <!-- end footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popperjs/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom script - Các file js do mình tự viết -->
    <script src="../assets/js/app.js"></script>

</body>

</html>