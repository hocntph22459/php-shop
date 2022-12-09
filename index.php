<?php
session_start();
include "./models/connect.php";
include "./models/models-sanpham.php";
include "./models/models-loaihang.php";
include "./models/models-form.php";
include "./models/models-cart.php";
include "./models/models-binhluan.php";
include "./models/models-thuoctinhsp.php";
include "./models/models-baiviet.php";
//biến toàn cục
$listdm = loadall_cat(); //lấy danh mục
if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}
// var_dump($_SESSION['mycart']);
// die;
$url = isset($_GET['url']) ? $_GET['url'] : '';
// echo $url;
switch ($url) {
    case '':
        // trang chủ
    case 'home':
        // add giỏ hàng
        // add_gio_hang();

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
        // add_gio_hang();
        include "./views/sanpham.php";
        break;
        // san pham chi tiet
    case 'san-pham-ct':
        // add giỏ hàng
        // add_gio_hang();

        $id = $_GET['id'];
        $name_category = load_category_sanpham();
        $spct = loadone_sanpham($id);
        extract($spct);
        $list_attributes = load_attributes_product($id);
        $sanphamkhac = load_sanpham_cungloai($id, $category_id);
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

        // var_dump($_POST);
        // die;
        // echo "<pre>";
        // var_dump($_SESSION['mycart']);
        // var_dump($id_att);
        // die;
        if (isset($_POST['addtocart'])) {
            $attributes = $_POST['attributes'];
            $id_att  = load_attributes($attributes);
            $id_product = $id_att['id_product'];
            $soluong_dh = $_POST['soluong'];
            $size = $id_att['size'];
            $color = $id_att['color'];
            $data = loadone_sanpham($id_product);
            $data[] = $color;
            $data[] = $size;
            $data[] = $soluong_dh;
            $data[] = $id_att['id'];
            $data[] = $id_att['quantity'];
            if($data[2] < $data[4]){
            $_SESSION['mycart'][] = $data;
            }
            else{
                
            }
        }
        include "./views/cart.php";
        break;
        // xóa cart
    case 'delete-cart':
        // delete_cart();
        // var_dump($_GET['idcart']);
        // die;
        if (isset($_GET['idcart'])) {
            // $_SESSION['mycart'] = array_slice($_SESSION['mycart'],$_GET['idcart'],1);
            unset($_SESSION['mycart'][$_GET['idcart']]);
            $_SESSION['mycart'] = array_values($_SESSION['mycart']);
            // echo "<pre>";
            // var_dump($_SESSION['mycart']);
            // die;
        } else {
            $_SESSION['mycart'] = [];
        }
        header("location:http://localhost/da1/?url=cart");
        break;
        // sửa cart
    case 'update-cart':
        // $cartone = loadone_cart();
        // echo "<pre>";
        // var_dump($_SESSION['mycart']);
        // die;
        $id = $_GET['idcart'];
        if (isset($_POST['update_cart'])) {
            $sl = $_POST['soluong'];
            // var_dump($_SESSION['mycart'][$id][4]);
            // die;
            if($sl < $_SESSION['mycart'][$id][4]){
            $_SESSION['mycart'][$id][2] =  $sl;
            }
            header("location:http://localhost/da1/?url=cart");
        }
        // update_cart($id);
        include "./views/update-cart.php";
        break;
        // thanh toán
    case 'checkout-cart':
        if (isset($_POST['check'])) {
            $total = $_POST['tien'];
            $id_user = $_SESSION['id']['id'];
            $cart = loadall_cart($id_user);
        }
            
        validate_checkout();
        include "./views/checkout.php";
        break;
        // đơn hàng đã đặt
    case 'add-bill':
        if (isset($_POST['dongydathang'])) {
            $kh_ten = $_POST['kh_ten'];
            $id_user = $_SESSION['id']['id'];
            $kh_diachi =  $_POST['kh_diachi'];
            $kh_dienthoai =  $_POST['kh_dienthoai'];
            $tongtien = $_POST['tongtien'];
            $httt_ma = $_POST['httt_ma'];

            $idbill = insert_bill($kh_ten,$id_user,$kh_diachi,$kh_dienthoai,$tongtien,$httt_ma);
            
            // var_dump($idbill);
            // die;
            foreach ($_SESSION['mycart'] as $cart){

                // var_dump($cart[3]);
                // die;
                insert_bill_detail($idbill,$cart['name'],$cart[2],$cart['price'],$cart[1],$cart[0],$cart['image'],$cart['sell']);
                update_quantity($cart[2],$cart[3]);
            }
            $_SESSION['mycart'] = [];
        }
        $listbill_one = loadone_bill($idbill);
        $list_bill_detail = loadone_bill_detail($idbill);
        // echo "<pre>";
        // var_dump($list_bill_detail);
        // die;
        include "./views/order-deltai.php";
        break;
    case 'order':
        $listbill = loadall_bill_user($_SESSION['id']['id']);
        include "./views/order.php";  
        break;
    
        //chi tiết đơn hàng đã đặt
    case 'order-deltail':
        // $id_user = $_SESSION['id']['id'];
        $id_bill = $_GET['id'];
        $listbill_one = loadone_bill($id_bill);
        $list_bill_detail = loadone_bill_detail($id_bill);
        include "./views/order-deltai.php";
        break;
        // hủy đơn hàng
    case 'delete-order':
        delete_order_detail($_GET['id']);
        delete_order($_GET['id']);
        break;
    //     // cập nhật đơn hàng
    case 'edit-order':
        $billone = loadone_bill($_GET['id']);
        // echo "<pre>";
        // var_dump($billone);
        // die;
        // update_bill();
        if(isset($_POST['btn'])){
            $name = $_POST['name_order'];
            $addr = $_POST['diachi'];
            $sdt = $_POST['phone'];
            // var_dump($_POST);
            // die;
            update_bill($name,$addr,$sdt,$_GET['id']);
        }
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
