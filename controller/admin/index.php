<?php
include "../../models/admin/models-loaihang.php";
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
        include "../admin/sanpham/list.php";
        break;
    case 'khach-hang':
        include "../admin/khachhang/list.php";
        break;
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
