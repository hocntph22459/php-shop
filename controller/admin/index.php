<?php ob_start();
session_start();
include "../../models/admin/models-loaihang.php";
include "../../models/admin/models-sanpham.php";
include "../../models/admin/models-khachhang.php";
include "../../models/admin/models-mau.php";
include "../../models/admin/models-kichco.php";
include "../../models/admin/models-binhluan.php";
include "../../models/admin/models-thongke.php";
include "../../models/client/models-form.php";
include "../../models/admin/models-donhang.php";

include "../../models/connect.php";
$url = isset($_GET['url']) ? $_GET['url'] : 'home';
// echo $url;
switch ($url) {
    case '':
        // trang chủ  
    case 'home':
        checklogin_admin();
        include "./home.php";
        break;
        // đăng xuất admin
    case 'logout-admin':
        session_destroy();
        header("location:http://localhost/da1/?url=login-admin");
        exit;
        break;
        // loại hàng
    case 'loai-hang':
        $listcat = loadall_cat();
        include "../admin/loaihang/list.php";
        break;
    case 'delete-loai-hang':
        // delete_loaihang_sp();
        delete_cat();
        include "../admin/loaihang/delete.php";
        break;
    case 'add-loai-hang':
        insert_cat();
        include "../admin/loaihang/add.php";
        break;
    case 'edit-loai-hang':
        $id = $_GET['id'];
        $catone = loadone_cat($id);
        update_cat();
        include "../admin/loaihang/edit.php";
        break;
        //màu sản phẩm
    case 'color':
        $listcolor = loadall_color();
        include "../admin/mau/list.php";
        break;
    case 'delete-color':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            delete_color($id);
            $listcolor = loadall_color();
            header("location:http://localhost/da1/controller/admin/?url=color");
        }
        include "../admin/mau/delete.php";
        break;
    case 'add-color':
        if (isset($_POST['btn'])) {
            $mau = $_POST['mau'];
            insert_color($mau);
            header("location:http://localhost/da1/controller/admin/?url=color");
        }
        include "../admin/mau/add.php";
        break;
    case 'edit-color':
        $id = $_GET['id'];
        $color = loadone_color($id);
        include "../admin/mau/edit.php";
        if (isset($_POST['btn'])) {
            $mau = $_POST['mau'];
            update_color($id, $mau);
            header("location:../../controller/admin/index.php?url=color");
        }
        break;
        // kích cỡ sản phẩm
    case 'size':
        $listsize = loadall_size();
        include "../admin/kichco/list.php";
        break;
    case 'delete-size':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            delete_size($id);
            $listsize = loadall_size();
            header("location:http://localhost/da1/controller/admin/?url=size");
        }
        include "../admin/kichco/delete.php";
        break;
    case 'add-size':
        if (isset($_POST['btn'])) {
            $kichco = $_POST['kichco'];
            $price = $_POST['price'];
            insert_size($kichco, $price);
            header("location:http://localhost/da1/controller/admin/?url=size");
        }
        include "../admin/kichco/add.php";
        break;
    case 'edit-size':
        $id = $_GET['id'];
        $size = loadone_size($id);
        include "../admin/kichco/edit.php";
        if (isset($_POST['btn'])) {
            $kichco = $_POST['kichco'];
            $price = $_POST['price'];
            update_size($id, $kichco, $price);
            header("location:../../controller/admin/index.php?url=size");
        }
        break;
        //sản phẩm 
    case 'san-pham':
        $name_category = load_category_sanpham();
        $listsanpham = loadall_sanpham_admin();
        include "../admin/sanpham/list.php";
        break;
    case 'delete-san-pham':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            delete_binhluan_sp($id);
            delete_sanpham($id);
            $listsanpham = loadall_sanpham_admin();
            header("location:../../controller/admin/index.php?url=san-pham");
        }
    case 'add-san-pham':
        $listsanpham = loadall_sanpham_admin();
        $listcat = loadall_cat();
        include "../admin/sanpham/add.php";
        if (isset($_POST['btn'])) {
            $tensp = $_POST['tensp'];
            $giasp = $_POST['giasp'];
            $anhsp = $_FILES['anhsp']['name'];
            $motasp = $_POST['motasp'];
            $loaisp = $_POST['loaisp'];
            $ngaynhap = $_POST['ngaynhap'];
            $giamgia = $_POST['giamgia'];
            $mau = $_POST['mau'];
            $kichco = $_POST['kichco'];
            $soluong = $_POST['soluong'];
            move_uploaded_file($_FILES["anhsp"]["tmp_name"], "../../views/src/image/products/" . $_FILES["anhsp"]["name"]);
            insert_sanpham($tensp,$anhsp,$giasp,$motasp,$ngaynhap,$giamgia,$loaisp,$mau,$kichco,$soluong);
            header("location:../../controller/admin/index.php?url=san-pham");
        }
        break;
    case 'update-san-pham':
        $id = $_GET['id'];
        $sanpham = loadone_sanpham($id);
        $listcat = loadall_cat();
        include "../admin/sanpham/edit.php";
        if (isset($_POST['btn'])) {
            $tensp = $_POST['tensp'];
            $giasp = $_POST['giasp'];
            $anhsp = $_FILES['anhsp']['name'];
            $motasp = $_POST['motasp'];
            $loaisp = $_POST['loaisp'];
            $ngaynhap = $_POST['ngaynhap'];
            $giamgia = $_POST['giamgia'];
            $mau = $_POST['mau'];
            $kichco = $_POST['kichco'];
            $soluong = $_POST['soluong'];
            move_uploaded_file($_FILES["anhsp"]["tmp_name"], "../../views/src/image/products/" . $_FILES["anhsp"]["name"]);
            update_sanpham($tensp,$anhsp,$giasp,$motasp,$ngaynhap,$giamgia,$loaisp,$mau,$kichco,$soluong,$id);
            header("location:../../controller/admin/index.php?url=san-pham");
        }
        break;
        // khách hàng
    case 'khach-hang':
        $listusers = loadall_users();
        include "../admin/khachhang/list.php";
        break;
    case 'delete-khach-hang':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            delete_users($id);
            $listusers = loadall_users();
            header("location:../../controller/admin/index.php?url=khach-hang");
        }
        ///Bình luận
    case 'binh-luan':
        $items = thong_ke_binh_luan();
        include "../admin/binhluan/list.php";
        break;
    case 'binh-luan-ct':
        $id = $_GET['id'];
        $binhluanct = load_binhluan_by_products($id);
        include "../admin/binhluan/detail.php";
        break;
    case 'delete-binh-luan':
        $id_bl = $_GET['id_bl'];
        $id = $_GET['id'];
        delete_binhluan($id_bl);
        $binhluanct = load_binhluan_by_products($id);
        // include "../admin/binhluan/detail.php";
        header("location:../../controller/admin/index.php?url=binh-luan");
        break;
        // Đơn Hàng
    case 'don-hang':
        $listbill = loadall_bill(0);
        include "../admin/donhang/list.php";
        break;
    case 'delete-don-hang':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            delete_bill($id);
            $listbill = loadall_bill($id);
            header("location:../../controller/admin/index.php?url=don-hang");
        }
    case 'update-don-hang':
        $id = $_GET['id'];
        include "../admin/donhang/edit.php";
        if (isset($_POST['btn'])) {
            $name_order = $_POST['name_order'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $total = $_POST['total'];
            $date_purchase = $_POST['date_purchase'];
            $status = $_POST['status'];
            $method_payment_id = $_POST['method_payment_id '];

            update_bill($id, $name_order, $address, $phone, $total, $date_purchase, $status, $method_payment_id);
            header("location:../../controller/admin/index.php?url=don-hang");
        }
        break;
    case 'edit-don-hang':
        $id = $_GET['id'];
        $bill = loadone_bill($id);
        include "../admin/donhang/edit.php";
        if (isset($_POST['btn'])) {
            $name_order = $_POST['name_order'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $total = $_POST['total'];
            $date_purchase = $_POST['date_purchase'];
            $status = $_POST['status'];
            $method_payment_id = $_POST['method_payment_id'];
            update_bill($id, $name_order, $address, $phone, $total, $date_purchase, $status, $method_payment_id);
            header("location:../../controller/admin/index.php?url=don-hang");
        }
        break;

        // thống kê
    case 'thong-ke':
        include "../admin/thong-ke/list.php";
        break;
    default:
        echo "<h2> 404 not found !!! </h2>";
        break;
}
