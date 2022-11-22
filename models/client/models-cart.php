<?php
// load giỏ hàng
function loadall_cart(){
    if(isset($_SESSION['email'])){
        $sql = "SELECT * FROM `cart` ORDER BY id DESC";
        $cart = pdo_query($sql);
        return $cart;
    }else{
        header("location:http://localhost/da1?url=login-khach-hang");
        exit;
    }
    
}

// function add_gio_hang()
// {
//     $sql = "INSERT INTO `cart`(`name`,`image`,price,`description`,`date_add`,sell,category_id) VALUES ('','','','','','','','')";
//     pdo_execute($sql);
// }

// sản phẩm yêu thích



// update giỏ hàng
// function update_cart()
// {
//     if (isset($_POST['btn'])) {
//         $id = $_GET['id'];
//         $soluong = $_POST['soluong'];
//         $sql = "UPDATE `cart` SET`soluong`='$soluong' WHERE id = $id;";
//         pdo_execute($sql);
//         header("location:http://localhost/da1/?url=cart");
//         exit;
//     }
// }

// xóa giỏ hàng
function delete_cart(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM  cart WHERE id=" . $id;
        pdo_execute($sql);
        header("location:http://localhost/da1/?url=cart");
        exit;
    }
}
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





?>