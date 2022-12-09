<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>thanh toán</title>

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
</script>

<body>
    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <form class="needs-validation" name="frmthanhtoan" method="post" action="?url=add-bill">
                <input type="hidden" name="kh_tendangnhap" value="">

                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Thanh toán</h2>
                    <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</p>
                </div>

                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Giỏ hàng</span>
                        </h4>
                        
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Tổng thành tiền</span>
                            <strong><?= $total; ?></strong>
                        </li> <br>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Xác nhận</button>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <label for="kh_dienthoai"><strong>ngân hàng</strong></label>
                            <input type="text" class="form-control" value="vietcombank">
                            <label for="kh_dienthoai"><strong>số tài khoản</strong></label>
                            <input type="text" class="form-control" value="9973867151">
                            <label for="kh_dienthoai"><strong>người nhận</strong></label>
                            <input type="text" class="form-control" value="nguyễn thái học">
                        </div>

                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Thông tin khách hàng</h4>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="kh_ten">Họ tên</label>
                                
                                <input type="text" class="form-control" name="kh_ten" id="kh_ten">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_diachi">Địa chỉ</label>
                               
                                <input type="text" class="form-control" name="kh_diachi" id="kh_diachi">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Điện thoại</label>
                                
                                <input type="text" class="form-control" name="kh_dienthoai" id="kh_dienthoai">
                            </div>

                            <input hidden type="text" class="form-control" name="tongtien" id="" value="<?= $total; ?>">

                        </div>
                        <h4 class="mb-3">Hình thức thanh toán</h4>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="" name="id_user" type="text" class="custom-control-input" required="" value="<?= $_SESSION['id']['id'] ?>" hidden>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input" required="" value="1">
                                <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input" required="" value="2">
                                <label class="custom-control-label" for="httt-2">Chuyển khoản</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-3" name="httt_ma" type="radio" class="custom-control-input" required="" value="3">
                                <label class="custom-control-label" for="httt-3">Ship COD</label>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button  class="btn btn-primary btn-lg btn-block" type="submit" name="dongydathang">Đặt hàng</button>
                    </div>
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