<?php
function loadall_bill($id_user)
{
    $sql = "select * from bill";
    if ($id_user > 0) $sql .= " AND id_user=" . $id_user;
    $sql . "= order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill_one = pdo_query_one($sql);
    return $bill_one;
}

function update_bill($tennd, $diachi, $sdt, $tongtien, $ngaymua, $trangthai, $phuongthuc, $id)
{
    $sql = "UPDATE bill SET name_order='" . $tennd . "', address='" . $diachi . "', phone='" . $sdt . "', total='" . $tongtien . "', date_purchase='" . $ngaymua . "',status='" . $trangthai . "', method_payment_id ='" . $phuongthuc . "' WHERE id=" . $id;
    pdo_execute($sql);
}
function delete_bill($id)
{
    $sql = "delete from bill where id=" . $id;
    pdo_execute($sql);
}
// function loadall_cart($id){
//     $sql = "SELECT * FROM `cart` where id=".$id;
//     $cart = pdo_query($sql);
//     return $cart;
//     }
function loadall_cart($id_user)
{
    $_SESSION['cart'] = $sql = "SELECT * FROM `cart` where id_users = $id_user";
    $cart = pdo_query($sql);
    return $cart;
}
