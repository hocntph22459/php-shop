<?php
function loadall_bill($id_user){
    $sql="select * from bill where 1";
    if ($id_user>0) $sql.=" AND id_user=".$id_user;
    $sql."= order by id_bill desc";
    $listbill = pdo_query($sql);
    return $listbill;
    
}
function loadone_bill($id_bill){
    $sql= "select * from bill where id_bill=".$id_bill;
    $bill_one= pdo_query_one($sql); 
    return $bill_one;  
}
function update_bill($tennd, $diachi, $sdt, $tongtien, $ngaymua, $trangthai, $phuongthuc,$id_bill){
    $sql = "UPDATE bill SET name_order='".$tennd."', address='".$diachi."', phone='".$sdt."', total='".$tongtien."', date_purchase='".$ngaymua."',status='".$trangthai."', method_payment_id ='".$phuongthuc."' WHERE id_bill=".$id_bill;   
    pdo_execute($sql);
}
function delete_bill($id_bill){
    $sql="delete from bill where id_bill=".$id_bill;
    pdo_execute($sql);
}
function loadall_cart($id_bill){
    $sql = "SELECT * FROM `cart` where id_bill=".$id_bill;
    $cart = pdo_query($sql);
    return $cart;
    }

   
 
?>