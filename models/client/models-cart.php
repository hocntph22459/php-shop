<?php
// load giỏ hàng
function loadall_cart(){
    if(isset($_SESSION['email'])){
        $_SESSION['cart'] = $sql = "SELECT * FROM `cart` ORDER BY id DESC";
        $cart = pdo_query($sql);
        return $cart;
    }else{
        header("location:http://localhost/da1?url=login-khach-hang");
        exit;
    }
    
}

function load_attributes($attributes){
    $attributes = $_POST['attributes'];
    $sql = "SELECT * FROM `attributes_product` WHERE id = $attributes";
    // echo "<pre>";
    // var_dump(pdo_query_one($sql));
    
    // die;
    return pdo_query_one($sql);
}
function add_gio_hang()
{
    if(isset($_POST['addtocart'])){
            $attributes = $_POST['attributes'];
            $image = $_POST['image'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $soluong = $_POST['soluong'];
            $id_att  = load_attributes($attributes);
            $size = $id_att['size'];
            $color = $id_att['color'];
            $id_product = $id_att['id_product'];
            $sql = "INSERT INTO `cart`(`id_product`, `image`, `name`, `price`, `soluong`, `size`, `color`) 
            VALUES ('$id_product','$image','$name','$price','$soluong','$size','$color')";
            // echo "<pre>";
            // var_dump($id_att);
            // die;
            pdo_execute($sql);
            header("location:http://localhost/da1?url=cart");
            exit;
        }
}

// sản phẩm yêu thích


// load 1 sp
function loadone_cart()
{
    if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM cart WHERE id = $id";
    $cartone = pdo_query($sql);
    return $cartone;
    }
    
}


// update giỏ hàng

function update_cart()
{
    if(isset($_POST['btn'])){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $soluong = $_POST['soluong'];
        $sql = "UPDATE `cart` SET`soluong`='$soluong' WHERE id = $id;";
        pdo_execute($sql);
        header("location:http://localhost/da1/?url=cart");
        exit;
        }
    }
}

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
        $thanhtien = $_POST['thanhtien'];
        $httt_ma = $_POST['httt_ma'];
        $sql = "INSERT INTO `bill`(`name_order`, `address`, `phone`,`total`,`method_payment_id`) 
        VALUES ('$kh_ten','$kh_dienthoai','$kh_dienthoai','$thanhtien','$httt_ma')";
        pdo_execute($sql);
        header("location:http://localhost/da1/?url=order-deltail");
        exit;
    }
}
// validate thanh toán
// function validate_checkout(){
    
//     if (isset($_POST['btn'])) {
//         $kh_ten = $_POST['kh_ten'];
//         $kh_diachi =  $_POST['kh_diachi'];
//         $kh_dienthoai =  $_POST['kh_dienthoai'];

//         $httt_ma = $_POST['httt_ma'];
//         if ($kh_ten == '') {
//             $kh_ten_err = "vui lòng nhập";
//         }
//         if ($kh_diachi == '') {
//             $kh_diachi_err = "vui lòng nhập";
//         }
//         if ($kh_dienthoai == '') {
//             $kh_dienthoai_err = "vui lòng nhập";
//         }
//     }
// }

// đơn hàng đã đặt
function loadall_bill(){
    $sql="select * from bill";
    $listbill = pdo_query($sql);
    return $listbill;
}

//hủy đơn hàng
function delete_order(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM  bill WHERE id=" . $id;
        pdo_execute($sql);
        header("location:http://localhost/da1/?url=order-deltail");
        exit;
    }
}

// hiển thị 1 đơn hàng
function loadone_bill()
{
    if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM bill WHERE id = $id";
    $billone = pdo_query($sql);
    return $billone;
    }
    
}

// update đơn hàng

function update_bill()
{
    if(isset($_POST['btn'])){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $name_order = $_POST['name_order'];
        $diachi = $_POST['diachi'];
        $phone = $_POST['phone'];
        $sql = "UPDATE `bill` SET`name_order`='$name_order',`address`='$diachi',`phone`='$phone' WHERE id = $id;";
        pdo_execute($sql);
        header("location:http://localhost/da1/?url=order-deltail");
        exit;
        }
    }
}

?>