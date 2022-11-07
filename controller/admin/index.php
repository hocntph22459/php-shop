<?php  ob_start(); 

include "../../models/admin/models-loaihang.php";
include "../../models/admin/models-sanpham.php";
include "../../models/admin/models-khachhang.php";

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
        loadone_cat();
        update_cat();
        include "../admin/loaihang/edit.php";
        break;
    //sản phẩm 
    case 'san-pham':
        $listsanpham = loadall_sanpham();
        include "../admin/sanpham/list.php";
        break;
    case 'delete-san-pham':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            delete_sanpham($id);
            $listsanpham = loadall_sanpham();
            header("location:../../controller/admin/index.php?url=san-pham");
        }
    case 'add-san-pham': 
        $listsanpham = loadall_sanpham();
        $listcat = loadall_cat();
        include "../admin/sanpham/add.php";
        if (isset($_POST['btn'])) {
            $tensp = $_POST['tensp'];
            $giasp = $_POST['giasp'];
            $anhsp = $_FILES['anhsp']['name'];
            $motasp = $_POST['motasp'];
            $loaisp = $_POST['loaisp'];
            move_uploaded_file($_FILES["anhsp"]["tmp_name"],"../../views/src/image/products/".$_FILES["anhsp"]["name"]);
            insert_sanpham($tensp,$anhsp,$giasp,$motasp,$loaisp);
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
            move_uploaded_file($_FILES["anhsp"]["tmp_name"],"../../views/src/image/products/".$_FILES["anhsp"]["name"]);
            update_sanpham($tensp,$anhsp,$giasp,$motasp,$loaisp,$id);
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
    // case 'add-san-pham': 
    //     $listsanpham = loadall_sanpham();
    //     $listcat = loadall_cat();
    //     include "../admin/sanpham/add.php";
    //     if (isset($_POST['btn'])) {
    //         $tensp = $_POST['tensp'];
    //         $giasp = $_POST['giasp'];
    //         $anhsp = $_FILES['anhsp']['name'];
    //         $motasp = $_POST['motasp'];
    //         $loaisp = $_POST['loaisp'];
    //         move_uploaded_file($_FILES["anhsp"]["tmp_name"],"../../views/src/image/products/".$_FILES["anhsp"]["name"]);
    //         insert_sanpham($tensp,$anhsp,$giasp,$motasp,$loaisp);
    //         header("location:../../controller/admin/index.php?url=san-pham");
    //     }
    //     break;
    // case 'update-san-pham':
    //     $id = $_GET['id'];
    //     $sanpham = loadone_sanpham($id);
    //     $listcat = loadall_cat();
    //     include "../admin/sanpham/edit.php";
    //     if (isset($_POST['btn'])) {
    //         $tensp = $_POST['tensp'];
    //         $giasp = $_POST['giasp'];
    //         $anhsp = $_FILES['anhsp']['name'];
    //         $motasp = $_POST['motasp'];
    //         $loaisp = $_POST['loaisp'];
    //         move_uploaded_file($_FILES["anhsp"]["tmp_name"],"../../views/src/image/products/".$_FILES["anhsp"]["name"]);
    //         update_sanpham($tensp,$anhsp,$giasp,$motasp,$loaisp,$id);
    //         header("location:../../controller/admin/index.php?url=san-pham");
    //     }
    //     break;
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
