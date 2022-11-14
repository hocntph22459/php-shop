<?php ob_start();

include "../../models/admin/models-loaihang.php";
include "../../models/admin/models-sanpham.php";
include "../../models/admin/models-khachhang.php";
include "../../models/admin/models-mau.php";
include "../../models/admin/models-kichco.php";

include "../../models/connect.php";
$url = isset($_GET['url']) ? $_GET['url'] : 'home';
// echo $url;
switch ($url) {
    case '':
        // trang chủ  
    case 'home':
        include "./home.php";
        break;
        // loại hàng
    case 'loai-hang':
        $listcat = loadall_cat();
        include "../admin/loaihang/list.php";
        break;
    case 'delete-loai-hang':
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
            update_color($id,$mau);
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
            insert_size($kichco,$price);
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
            update_size($id,$kichco,$price);
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
            move_uploaded_file($_FILES["anhsp"]["tmp_name"],"../../views/src/image/products/".$_FILES["anhsp"]["name"]);
            insert_sanpham($tensp,$anhsp,$giasp,$motasp,$ngaynhap,$giamgia,$loaisp);
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
            move_uploaded_file($_FILES["anhsp"]["tmp_name"],"../../views/src/image/products/".$_FILES["anhsp"]["name"]);
            update_sanpham($tensp,$anhsp,$giasp,$motasp,$ngaynhap,$giamgia,$loaisp,$id);
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
        include "../admin/binhluan/list.php";
        break;
    case 'thong-ke':
        include "../admin/thong-ke/list.php";
        break;
    default:
        echo "<h2> 404 not found !!! </h2>";
        break;
}
