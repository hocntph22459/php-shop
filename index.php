<?php
include "./models/connect.php";
include "./models/admin/models-sanpham.php";
include "./models/admin/models-loaihang.php";
include "./models/client/models-form.php";
include "./views/header.php";
$url = isset($_GET['url']) ? $_GET['url'] : '';
// echo $url;
switch ($url) {
    case '':
    case 'home':
        $listdm = loadall_cat();
        $listspt10 = load_sanpham_top10();
        include "./views/home.php";
        break;
    case 'sanpham':
        if(isset($_POST['OK']) && ($_POST['OK'])){
            $search = $_POST['search'];
        }
        else{
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
    default:
        echo "<h2> 404 not found !!! </h2>";
}
