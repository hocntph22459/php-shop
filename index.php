<?php
include "./models/connect.php";
include "./models/client/models-khachhang.php";
$url = isset($_GET['url']) ? $_GET['url'] : '';
// echo $url;
switch ($url) {
    case '':
    case 'home':
        include "./views/home.php";
        break;
        //  đăng nhập
    case 'login-khach-hang':
        login_khachhang();
        include "./views/login.php";
        break;
        //  đăng ký
    case 'signin-khach-hang':
        if (isset($_POST['btn'])) {
            $name = $_POST['hoten'];
            $email = $_POST['email'];
            $matkhau = $_POST['matkhau'];
            $rmatkhau = $_POST['rmatkhau'];
            $phone = $_POST['phone'];
            $diachi = $_POST['diachi'];
            if ($name == '') {
                $name_err = "vui lòng nhập tên";
            }
            if ($email == '') {
                $email_err = "vui lòng nhập email";
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_err = "nhập đúng định dạng";
            }
            if ($matkhau == '') {
                $matkhau_err = "vui lòng nhập mật khẩu";
            } else if ($matkhau < 6) {
                $kitumatkhau_err = "mật khẩu phải trên 6 kí tự";
            }
            if ($rmatkhau != $matkhau) {
                $rmatkhau_err = "mật khẩu phải trùng nhau";
            }
            if ($phone == '') {
                $phone_err = "vui lòng nhập số điện thoại";
            }
            if ($diachi == '') {
                $diachi_err = "vui lòng nhập địa chỉ";
            } else {
                insert_users();
            }
        }
        include "./views/signin.php";
        break;
    default:
        echo "<h2> 404 not found !!! </h2>";
}
