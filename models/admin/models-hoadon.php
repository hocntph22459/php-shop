<?php
function loadall_bill($id){
    $sql="select * from bill where 1";
    if ($id>0) $sql.=" AND id=".$id;
    $sql."= order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
    
}
function loadone_bill($id){
    $sql= "select * from bill where id=".$id;
    $bill= pdo_query_one($sql); 
    return $bill;  
}
function update_bill($tennd, $diachi, $sdt, $tongtien, $ngaymua, $trangthai, $phuongthuc,$id){
    $sql = "UPDATE bill SET name_order='".$tennd."', address='".$diachi."', phone='".$sdt."', total='".$tongtien."', date_purchase='".$ngaymua."',status='".$trangthai."', method_payment_id ='".$phuongthuc."' WHERE id=" . $id;   
    pdo_execute($sql);
}
function delete_bill($id){
    $sql="delete from bill where id= ".$id;
    pdo_execute($sql);
}
?>