<?php
include "./models/connect.php";
include "./models/client/models-form.php";
$url = isset($_GET['url']) ? $_GET['url'] : '';
// echo $url;
switch ($url) {
    case '':
        // trang chủ
    case 'home':
        include "./views/home.php";
        break;
        // trang sản phẩm
    case 'san-pham':
        include "./views/product.php";
        break;
        //  đăng nhập
    case 'login-khach-hang':
        login_khachhang();
        break;
        //  đăng ký
    case 'signin-khach-hang':
        validate_signin();
        break;
    default:
        echo "<h2> 404 not found !!! </h2>";
}
