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

function update_bill($trangthai,  $id)
{
    $sql = "UPDATE bill SET  status='" . $trangthai . "' WHERE id=" . $id;
    pdo_execute($sql);
}
// function delete_bill($id)
// {
//     $sql = "delete from bill where id=" . $id;
//     pdo_execute($sql);
// }

function loadall_cart($id_user)
{
    // $_SESSION['cart'] = $sql = "SELECT * FROM `cart` where id_users = $id_user";
    // $cart = pdo_query($sql);
    // return $cart;
}
// function loadall_cart($id){
//     $sql = "SELECT * FROM `cart` where id=".$id;
//     $cart = pdo_query($sql);
//     return $cart;
//     }
// function update_cart($tensp, $mau, $size, $soluong, $giatien,$id)
// {
//     $sql = "UPDATE cart SET name='" . $tensp . "', color='" . $mau . "', size='" . $size . "', soluong='" . $soluong . "', giatien='" . $giatien . "' WHERE id=" . $id;
//     pdo_execute($sql);
// }

// function loadone_cart($id)
// {
//     $sql = "select * from cart where id=" . $id;
//     $cart_one = pdo_query_one($sql);
//     return $cart_one;
// }
function loadone_bill_detail1($id){
    $sql = "select * from bill_detail where id_bill = $id";
    $listbill = pdo_query($sql);
    return $listbill;
}
