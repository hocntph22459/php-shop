<?php
session_start();
include "./models/connect.php";
include "./models/admin/models-sanpham.php";
include "./models/admin/models-loaihang.php";
include "./models/client/models-form.php";
include "./models/client/models-cart.php";
include "./models/admin/models-binhluan.php";
include "./models/admin/models-thuoctinhsp.php";
include "./models/admin/models-baiviet.php";
//biến toàn cục
$listdm = loadall_cat(); //lấy danh mục

$url = isset($_GET['url']) ? $_GET['url'] : '';
// echo $url;
switch ($url) {
    case '':
        // trang chủ
    case 'home':
        // add giỏ hàng
        add_gio_hang();

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

        // add giỏ hàng
        add_gio_hang();
        include "./views/sanpham.php";
        break;
        // san pham chi tiet
    case 'san-pham-ct':
        // add giỏ hàng
        add_gio_hang();

        $id = $_GET['id'];
        $name_category = load_category_sanpham();
        $spct = loadone_sanpham($id);
        $list_attributes = load_attributes_product($id);
        include "./views/sanphamct.php";
        break;
        // bài viết
    case 'post':
        $list_post =  load_all_post();
        include "./views/post.php";
        break;
        // bai viet chi tiet
    case 'post-ct':
        $id = $_GET['id'];
        $post = load_one_post($id);
        include "./views/post_detail.php";
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
        // sửa cart
    case 'update-cart':
        $cartone = loadone_cart();
        update_cart();
        include "./views/update-cart.php";
        break;
        // thanh toán
    case 'checkout-cart':
        $cart = loadall_cart();
        thanhtoan();
        include "./views/checkout.php";
        break;
        // order-deltail
    case 'order-deltail':
        $listbill = loadall_bill();
        include "./views/order-deltail.php";
        break;
        // hủy đơn hàng
    case 'delete-order':
        delete_order();
        break;
        // cập nhật đơn hàng
    case 'edit-order':
        $billone = loadone_bill();
        update_bill();
        include "./views/edit-order.php";
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
