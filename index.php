<?php
session_start();
include "./models/connect.php";
include "./models/admin/models-sanpham.php";
include "./models/admin/models-loaihang.php";
include "./models/client/models-form.php";

//biến toàn cục
$listdm = loadall_cat(); //lấy danh mục
// nên include vào file. file nào cần thì include
// include "./views/header.php";

$url = isset($_GET['url']) ? $_GET['url'] : '';
// echo $url;
switch ($url) {
    case '':
        // trang chủ
    case 'home':
        $listspt10 = load_sanpham_top10();
        $listspnew = load_sanpham_new();
        $listspsell = load_sanpham_sell();
        include "./views/home.php";
        break;
        // san pham
    case 'san-pham':
        if (isset($_POST['OK']) && ($_POST['OK'])) {
            $search = $_POST['search'];
        } else {
            $search = "";
        }
        $listsp = loadall_sanpham($search);
        include "./views/sanpham.php";
        break;
        //  đăng nhập
    case 'login-khach-hang':
        login_khachhang();
        break;
        //  đăng ký
    case 'signin-khach-hang':
        validate_signin();
        break;
        // cart
    case 'cart':
        include "./views/cart.php";
        break;
        // contact
    case 'contact':
        include "./views/contact.php";
        break;
    default:
        echo "<h2> 404 not found !!! </h2>";
}
