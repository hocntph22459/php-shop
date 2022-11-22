<?php
session_start();
include "./models/connect.php";
include "./models/admin/models-sanpham.php";
include "./models/admin/models-loaihang.php";
include "./models/client/models-form.php";
include "./models/client/models-cart.php";
include "./models/admin/models-mau.php";
include "./models/admin/models-kichco.php";
include "./models/admin/models-binhluan.php";
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
        $name_category = load_category_sanpham();
        $listsptop = load_sanpham_top();
        $listspnew = load_sanpham_new();
        $listspsell = load_sanpham_sell();
        include "./views/home.php";
        break;
        // san pham ddang sua nha 
    case 'san-pham':
        $name_category = load_category_sanpham();
        if (isset($_POST['search']) && $_POST['search'] != '') {
            $search = $_POST['search'];
        } else {
            $search = "";
        }
        if (isset($_POST['iddm']) && $_POST['iddm'] > 0) {
            $iddm = $_POST['iddm'];
        } else {
            $iddm = 0;
        }
        $listsp = loadall_sanpham($search, $iddm);
        include "./views/sanpham.php";
        break;
        // san pham chi tiet
    case 'san-pham-ct':
        $id = $_GET['id'];
        $name_category = load_category_sanpham();
        $listcolor = loadall_color();
        $listsize = loadall_size();
        $spct = loadone_sanpham($id);
        include "./views/sanphamct.php";
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
        $cart = loadall_cart();
        include "./views/cart.php";
        break;
        // xóa cart
    case 'delete-cart':
        delete_cart();
        break;
        // thanh toán
    case 'checkout-cart':
        thanhtoan();
        include "./views/checkout.php";
        break;
        // contact
    case 'contact':
        include "./views/contact.php";
        break;
        // introduce
    case 'introduce':
        include "./views/introduce.php";
        break;
        // login admin
    case 'login-admin':
        login_admin();
        break;
        // quêm mật khẩu
    case 'quen-mat-khau':
        quen_mat_khau();
        break;
        // sản phẩm yêu thích
    case 'san-pham-yeu-thich':
        include "./views/product-tym.php";
        break;
        // đổi mật khẩu
    case 'doi-mat-khau':
        validate_doi_mat_khau();
        break;
        // đăng xuất khách hàng
    case 'logout-khach-hang':
        logout();
        break;
    default:
        echo "<h2> 404 not found !!! </h2>";
}
