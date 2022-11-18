<?php
// function add_gio_hang($tensp, $anhsp, $giasp, $motasp, $ngaynhap, $giamgia, $loaisp)
// {
//     $sql = "INSERT INTO `products`(`name`,`image`,price,`description`,`date_add`,sell,category_id) VALUES ('$tensp','$anhsp','$giasp','$motasp','$ngaynhap','$giamgia','$loaisp')";
//     pdo_execute($sql);
// }


// thanh toán checkout
function thanhtoan()
{
    if (isset($_POST['btn'])) {
        $kh_ten = $_POST['kh_ten'];
        $kh_diachi =  $_POST['kh_diachi'];
        $kh_dienthoai =  $_POST['kh_dienthoai'];
        $httt_ma = $_POST['httt_ma'];
        $sql = "INSERT INTO `bill`(`name_order`, `address`, `phone`, `method_payment_id`) 
        VALUES ('$kh_ten','$kh_dienthoai','$kh_dienthoai','$httt_ma')";
        pdo_execute($sql);
    }
}
