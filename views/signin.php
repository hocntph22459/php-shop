<!DOCTYPE html>
<html>

<head>
    <title>Đăng ký tài khoản</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- css bootrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <a class="navbar-brand" href="http://localhost/da1/?url=home"><img src="./views/src/image/trangchu/logofoodbry.png" alt="" width="120px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/da1/?url=home">Trang Trủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/da1/?url=contact">Giới Thiệu</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Liên hệ
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://www.facebook.com/hoclnh">facebook</a></li>
                            <li><a class="dropdown-item" href="">zalo</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="">telegram</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Hỏi Đáp</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Tìm</button>
                </form>
            </div>
        </nav>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">ĐĂNG KÝ THÀNH VIÊN</h2>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="" class="form-label">Tên khách hàng</label> <br>
                    <?php if (isset($name_err)) : ?>
                        <span style="color:red">
                            <?= $name_err ?>
                        </span>
                    <?php endif ?>
                    <input type="text" class="form-control my-4" id="pwd" placeholder="Nhập tên" name="hoten">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">email</label> <br>
                    <?php if (isset($email_err)) : ?>
                        <span style="color:red">
                            <?= $email_err ?>
                        </span>
                    <?php endif ?>
                    <input type="email" class="form-control my-4" id="pwd" placeholder="Nhập tên" name="email">
                </div>
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">mật khẩu</label> <br>
                    
                    <?php if (isset($matkhau_err)) : ?>
                        <span style="color:red">
                            <?= $matkhau_err ?>
                        </span>
                    <?php endif ?>
                    <input type="password" class="form-control my-4" id="matkhau" placeholder="Nhập mật khẩu" name="matkhau">
                </div>
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">nhập lại mật khẩu</label> <br>
                    <?php if (isset($rmatkhau_err)) : ?>
                        <span style="color:red">
                            <?= $rmatkhau_err ?>
                        </span>
                    <?php endif ?>
                    <input type="password" class="form-control my-4" id="rmatkhau" placeholder="Nhập lại mật khẩu" name="rmatkhau">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Số điện thoại</label> <br>
                    <?php if (isset($phone_err)) : ?>
                        <span style="color:red">
                            <?= $phone_err ?>
                        </span>
                    <?php endif ?>
                    <input type="text" class="form-control my-4" id="phone" placeholder="Nhập số điện thoại" name="phone">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Địa chỉ</label> <br>
                    <?php if (isset($diachi_err)) : ?>
                        <span style="color:red">
                            <?= $diachi_err ?>
                        </span>
                    <?php endif ?>
                    <input type="text" class="form-control my-4" id="diachi" placeholder="Nhập địa chỉ" name="diachi">
                </div>
                <button class="btn btn-success" name="btn" id="bt">Đăng ký</button>
            </form>
        </div>
    </div>
</body>

</html>