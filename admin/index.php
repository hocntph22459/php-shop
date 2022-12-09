<?php ob_start();
session_start();
include "../models/models-loaihang.php";
include "../models/models-sanpham.php";
include "../models/models-khachhang.php";
include "../models/models-binhluan.php";
include "../models/models-thongke.php";
include "../models/models-form.php";
include "../models/models-hoadon.php";
include "../models/models-gopy.php";
include "../models/models-baiviet.php";
include "../models/models-thuoctinhsp.php";
// bắt lỗi đăng nhập admin mới truy cập đc all
checklogin_admin();

include "../models/connect.php";
$url = isset($_GET['url']) ? $_GET['url'] : 'home';
// echo $url;
switch ($url) {

    case '':
        // trang chủ  
    case 'home':
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
        include "./loaihang/list.php";
        break;
    case 'delete-loai-hang':
        // delete_loaihang_sp();
        delete_cat();
        include "./loaihang/delete.php";
        break;
    case 'add-loai-hang': 
        insert_cat();
        include "./loaihang/add.php";
        break;
    case 'edit-loai-hang':
        $id = $_GET['id'];
        $catone = loadone_cat($id);
        update_cat();
        include "./loaihang/edit.php";
        break;
        // thuộc tính sản phẩm
    case 'attributes':
        $listsanpham = loadall_sanpham_admin();
        if (isset($_POST['search']) && ($_POST['idsp'] > 0)) {
            $id = $_POST['idsp'];
            $list_attributes = loadall_attributes_admin($id);
            include "./thuoctinh/list.php";
        } else {
            $id = 0;
            $list_attributes = loadall_attributes_admin($id);
            include "./thuoctinh/list.php";
        }

        break;
    case 'delete-attributes':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            delete_attributes($id);
            $list_attributes = loadall_attributes();
            header("location:http://localhost/da1/admin/?url=attributes");
        }
        include "./thuoctinh/delete.php";
        break;
    case 'add-attributes':
        $listsanpham = loadall_sanpham_admin();
        include "./thuoctinh/add.php";
        if (isset($_POST['btn'])) {
            $idsp = $_POST['idsp'];
            $kichco = $_POST['kichco'];
            $mau = $_POST['mau'];
            $soluong = $_POST['soluong'];
            require  "../models/validate.php";
            if(!empty($kichcoerr)  || !empty($mauerr) || !empty($soluongerr) ){
               
                header("location: ../admin/index.php?url=add-attributes&kichcoerr=$kichcoerr&mauerr=$mauerr&soluongerr=$soluongerr");
                die;
            }
            insert_attributes($idsp, $kichco, $mau, $soluong);
            header("location:http://localhost/da1/admin/?url=attributes");
        }
        break;
    case 'edit-attributes':
        $id = $_GET['id'];
        $attributes = loadone_attributes($id);
        $listsanpham = loadall_sanpham_admin();
        include "./thuoctinh/edit.php";
        if (isset($_POST['btn'])) {
            $idsp = $_POST['idsp'];
            $kichco = $_POST['kichco'];
            $mau = $_POST['mau'];
            $soluong = $_POST['soluong'];
            require  "../models/validate.php";
            
            update_attributes($id, $idsp, $kichco, $mau, $soluong);
            header("location:../admin/index.php?url=attributes");
        }
        break;
        //sản phẩm 
    case 'san-pham':
        
        $name_category = load_category_sanpham();
        $listsanpham = loadall_sanpham_admin();
        include "./sanpham/list.php";
        break;
    case 'delete-san-pham':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            delete_binhluan_sp($id);
            delete_sanpham($id);
            $listsanpham = loadall_sanpham_admin();
            header("location:../admin/index.php?url=san-pham");
        }
    case 'add-san-pham':
        $listsanpham = loadall_sanpham_admin();
        $listcat = loadall_cat();
        include "./sanpham/add.php";
        if (isset($_POST['btn'])) {
            $tensp = $_POST['tensp'];
            $giasp = $_POST['giasp'];
            $anhsp = $_FILES['anhsp']['name'];
            $motasp = $_POST['motasp'];
            $loaisp = $_POST['loaisp'];
            $ngaynhap = $_POST['ngaynhap'];
            $giamgia = $_POST['giamgia'];
            require  "../models/validate.php";

            if(!empty($nameerr)  || !empty($imageerr) || !empty($priceerr) || !empty($loaierr) ){
               
                header("location: ../admin/index.php?url=add-san-pham&nameerr=$nameerr&imageerr=$imageerr&priceerr=$priceerr&loaierr=$loaierr");
                die;
            }

            move_uploaded_file($_FILES["anhsp"]["tmp_name"], "../views/src/image/products/" . $_FILES["anhsp"]["name"]);
            insert_sanpham($tensp, $anhsp, $giasp, $motasp, $ngaynhap, $giamgia, $loaisp);
            header("location:../admin/index.php?url=san-pham");
        }
        break;
    case 'update-san-pham':
        $id = $_GET['id'];
        $sanpham = loadone_sanpham($id);
        $listcat = loadall_cat();
        include "./sanpham/edit.php";
        if (isset($_POST['btn'])) {
            $tensp = $_POST['tensp'];
            $giasp = $_POST['giasp'];
            $anhsp = $_FILES['anhsp']['name'];
            $motasp = $_POST['motasp'];
            $loaisp = $_POST['loaisp'];
            $ngaynhap = $_POST['ngaynhap'];
            $giamgia = $_POST['giamgia'];
            require  "../models/validate.php";
            move_uploaded_file($_FILES["anhsp"]["tmp_name"], "../views/src/image/products/" . $_FILES["anhsp"]["name"]);
            update_sanpham($tensp, $anhsp, $giasp, $motasp, $ngaynhap, $giamgia, $loaisp, $id);
            header("location:../admin/index.php?url=san-pham");
        }
        break;
        // khách hàng
    case 'khach-hang':
        $listusers = loadall_users();
        include "./khachhang/list.php";
        break;
    case 'delete-khach-hang':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            delete_users($id);
            $listusers = loadall_users();
            header("location:../admin/index.php?url=khach-hang");
        }
    case 'update-khach-hang':
        $id = $_GET['id'];
        $khachhang = loadone_users($id);
        include "./khachhang/edit.php";
        if (isset($_POST['btn'])) {
            $tennd = $_POST['tennd'];
            $email = $_POST['email'];
            $matkhau = $_POST['matkhau'];
            $sdt = $_POST['sdt'];
            $diachi = $_POST['diachi'];
            $vaitro = $_POST['vaitro'];
            update_users($tennd, $email, $matkhau, $sdt, $diachi, $vaitro, $id);
            header("location:../admin/index.php?url=khach-hang");
        }
        break;
        ///Bình luận
    case 'binh-luan':
        $items = thong_ke_binh_luan();
        include "./binhluan/list.php";
        break;
    case 'binh-luan-ct':
        $id = $_GET['id'];
        $binhluanct = load_binhluan_by_products($id);
        include "./binhluan/detail.php";
        break;
    case 'delete-binh-luan':
        $id_bl = $_GET['id_bl'];
        $id = $_GET['id'];
        delete_binhluan($id_bl);
        $binhluanct = load_binhluan_by_products($id);
        // include "../admin/binhluan/detail.php";
        header("location:../admin/index.php?url=binh-luan");
        break;
        //Hóa Đơn 
    case 'hoa-don':
        $listbill = loadall_bill(0);
        include "./hoadon/list.php";
        break;
    // case 'delete-hoa-don':
    //     if (isset($_GET['id'])) {
    //         $id = $_GET['id'];
    //         delete_bill($id);
    //         header("location:../admin/index.php?url=hoa-don");
    //     }
    case 'update-hoa-don':
        $id = $_GET['id'];
        $hoadon = loadone_bill($id);
        include "./hoadon/edit.php";
        if (isset($_POST['btn'])) {
            $trangthai = $_POST['trangthai'];
            update_bill($trangthai, $id);
            header("location:../admin/index.php?url=hoa-don");
        }
        break;
    case 'hoa-don-ct':
        $bill_detail = loadone_bill_detail1($_GET['id']);
        // $cart = loadall_cart($id_user);
        include "./hoadon/billdetail.php";
        break;
// case 'update-gio-hang':
//         $id = $_GET['id'];
//         $giohang = loadone_cart($id);
//         include "./hoadon/editbill.php";
//         if (isset($_POST['btn'])) {
//             $tensp = $_POST['name'];
//             $giatien = $_POST['giatien'];
//             $soluong = $_POST['soluong'];
//             $mau = $_POST['mau'];
//             $size = $_POST['size'];
//             update_cart($tensp, $mau, $size, $soluong, $giatien,$id);
//             header("location:../admin/index.php?url=hoa-don");
//         }
//         break;
        //  case 'hoa-don-ct':
        //     include "./hoadon/billdetail.php";
        //     break;    
        // case 'edit-hoa-don':
        //     $id = $_GET['id'];
        //     $bill = loadone_bill($id);
        //     include "../admin/hoadon/edit.php";
        //     if (isset($_POST['btn'])) {
        //         $name_order = $_POST['name_order'];
        //         $address = $_POST['address'];
        //         $phone = $_POST['phone'];
        //         $total = $_POST['total'];
        //         $date_purchase = $_POST['date_purchase'];
        //         $status = $_POST['status'];
        //         $method_payment_id = $_POST['method_payment_id'];
        //         update_bill($id, $name_order, $address, $phone, $total, $date_purchase, $status, $method_payment_id);
        //         header("location:../admin/index.php?url=hoa-don");
        //     }
        //     break;
        // bài viet
    case 'bai-viet':
        $listpost = load_all_post();
        include "./baiviet/list.php";
        break;
    case 'add-bai-viet':
        include "./baiviet/add.php";
        if (isset($_POST['btn'])) {
            $anh_tieude = $_FILES['anh_tieude']['name'];
            $tieude = $_POST['tieude'];
            $noidung = $_POST['noidung'];
            move_uploaded_file($_FILES["anh_tieude"]["tmp_name"], "../views/src/image/post/tittle/" . $_FILES["anh_tieude"]["name"]);
            insert_post($anh_tieude, $tieude, $noidung);
            header("location:../admin/index.php?url=bai-viet");
        }
        break;
    case 'update-bai-viet':
        $id = $_GET['id'];
        $postone = load_one_post($id);
        include "./baiviet/edit.php";
        if (isset($_POST['btn'])) {
            $anh_tieude = $_FILES['anh_tieude']['name'];
            $tieude = $_POST['tieude'];
            $noidung = $_POST['noidung'];
            move_uploaded_file($_FILES["anh_tieude"]["tmp_name"], "../views/src/image/post/tittle/" . $_FILES["anh_tieude"]["name"]);
            update_post($id, $anh_tieude, $tieude, $noidung);
            header("location:../admin/index.php?url=bai-viet");
        }
        break;
    case 'delete-bai-viet':
        $id = $_GET['id'];
        delete_baiviet($id);
        $listpost = load_all_post();
        // include "../admin/binhluan/detail.php";
        header("location:../admin/index.php?url=bai-viet");
        break;
        // thống kê
    case 'thong-ke':
        $listdoanhthu = thong_ke_doanh_thu();
        $listdonhang = thong_ke_don_hang();
        $listsanpham = thong_ke_san_pham();
        $listyeucau = thong_ke_yeu_cau();
        include "./thongke/list.php";
        break;

        // Góp ý
    case 'gop-y':
        $listcontact = loadall_gopy(0);
        include "./gopy/list.php";
        break;
    case 'delete-gop-y':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            delete_gopy($id);
            $listcontact = loadall_gopy($id);
            header("location:../admin/index.php?url=gop-y");
        }
    default:
        echo "<h2> 404 not found !!! </h2>";
        break;
}
