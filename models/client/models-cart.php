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

function add_gio_hang()
{
    if(isset($_POST['addtocart'])){
            $id_product = $_POST['id_product'];
            $image = $_POST['image'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $soluong = $_POST['soluong'];
            $size = $_POST['size'];
            $color = $_POST['color'];
            $sql = "INSERT INTO `cart`(`id_product`, `image`, `name`, `price`, `soluong`, `size`, `color`) 
            VALUES ('$id_product','$image','$name','$price','$soluong','$size','$color')";
            pdo_execute($sql);
            header("location:http://localhost/da1?url=cart");
            exit;
        }
}

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
        $thanhtien = $_POST['thanhtien'];
        $httt_ma = $_POST['httt_ma'];
        $sql = "INSERT INTO `bill`(`name_order`, `address`, `phone`,`total`,`method_payment_id`) 
        VALUES ('$kh_ten','$kh_dienthoai','$kh_dienthoai','$thanhtien','$httt_ma')";
        pdo_execute($sql);
        header("location:http://localhost/da1/?url=order-detail");
        exit;
    }
}


function loadall_bill(){
    $sql="select * from bill";
    $listbill = pdo_query($sql);
    return $listbill;
}




?>