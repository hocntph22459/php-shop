<?php
// load giỏ hàng
function loadall_cart($id_user)
{
    if (isset($_SESSION['email'])) {
        // $_SESSION['cart'] = $sql = "SELECT * FROM `cart` where id_users = $id_user";
        // $cart = pdo_query($sql);
        // return $cart;
    } else {
        header("location:http://localhost/da1?url=login-khach-hang");
        exit;
    }
}

function load_attributes($attributes)
{
    $attributes = $_POST['attributes'];
    $sql = "SELECT * FROM `attributes_product` WHERE id = $attributes";
    // echo "<pre>";
    // var_dump(pdo_query_one($sql));

    // die;
    return pdo_query_one($sql);
}

// load 1 sp
// function loadone_cart()
// {
//     if (isset($_GET['id'])) {
//         $id = $_GET['id'];
//         $sql = "SELECT * FROM cart WHERE id = $id";
//         $cartone = pdo_query($sql);
//         return $cartone;
//     }
// }


// update giỏ hàng

// function update_cart()
// {
//     // if(isset($_POST['btn'])){
//     // if (isset($_GET['id'])) {
//     //     $id = $_GET['id'];
//     //     $soluong = $_POST['soluong'];
//     //     $_SESSION['mycart']
//     //     header("location:http://localhost/da1/?url=cart");
//     //     exit;
//     //     }
//     // }
// }

// xóa giỏ hàng
// function delete_cart()
// {
//     if (isset($_GET['id'])) {
//         $id = $_GET['id'];
//         $sql = "DELETE FROM  cart WHERE id=" . $id;
//         pdo_execute($sql);
//         header("location:http://localhost/da1/?url=cart");
//         exit;
//     }
// }
// function delete_cart_thanhtoan($id_user)
// {
//     $sql = "DELETE FROM  cart WHERE id_user=" . $id_user;
//     pdo_execute($sql);
// }
// thanh toán checkout
function insert_bill($kh_ten, $id_user, $kh_diachi, $kh_dienthoai, $tongtien, $httt_ma)
{
    $sql = "INSERT INTO `bill`(`id_user`,`name_order`, `address`, `phone`,`total`,`method_payment_id`) 
        VALUES ('$id_user','$kh_ten','$kh_diachi','$kh_dienthoai','$tongtien','$httt_ma')";
    return pdo_execute_return_lastInsertID($sql);
}
function insert_bill_detail($id_bill, $product, $quantity, $price, $size, $color , $image, $sell)
{
    $sql = "INSERT INTO `bill_detail`(`id_bill`,`product`, `quantity`, `price`,`size`,`color` , `image` , `sell`) 
        VALUES ('$id_bill','$product','$quantity','$price','$size','$color','$image','$sell')";
    pdo_execute($sql);
}
// validate thanh toán
function validate_checkout()
{

    if (isset($_POST['btn'])) {
        $kh_ten = $_POST['kh_ten'];
        $kh_diachi =  $_POST['kh_diachi'];
        $kh_dienthoai =  $_POST['kh_dienthoai'];

        $httt_ma = $_POST['httt_ma'];
        if ($kh_ten == '') {
            $kh_ten_err = "vui lòng nhập";
        }
        if ($kh_diachi == '') {
            $kh_diachi_err = "vui lòng nhập";
        }
        if ($kh_dienthoai == '') {
            $kh_dienthoai_err = "vui lòng nhập";
        } else {
            header("location:http://localhost/da1/?url=add-bill");
        }
    }
}

// đơn hàng đã đặt load all bill
function loadall_bill_user($id)
{
    $sql = "select * from bill where id_user = $id";
    $listbill = pdo_query($sql);
    return $listbill;
}
function loadone_bill($id){
    $sql = "select * from bill where id = $id";
    $listbill = pdo_query_one($sql);
    return $listbill;
}
function loadone_bill_detail($id){
    $sql = "select * from bill_detail where id_bill = $id";
    $listbill = pdo_query($sql);
    return $listbill;
}

//hủy đơn hàng
function delete_order_detail($id){
    $sql = "DELETE FROM  bill_detail WHERE id_bill=" . $id;
    pdo_execute($sql);
}
function delete_order($id)
{
        $sql = "DELETE FROM  bill WHERE id=" . $id;
        pdo_execute($sql);
        header("location:http://localhost/da1/?url=order");

}
// update so luong
function update_quantity($sl,$id){
    $sql = "UPDATE `attributes_product` SET `quantity`= quantity - $sl WHERE id=$id";
    pdo_execute($sql);
    // var_dump($sql);
    // die;
}

// hiển thị 1 bill


// update đơn hàng

function update_bill($name_order,$diachi,$phone,$id)
{
    $sql = "UPDATE `bill` SET`name_order`='$name_order',`address`='$diachi',`phone`='$phone' WHERE id = $id;";
    pdo_execute($sql);
    header("location:http://localhost/da1/?url=order");
}
