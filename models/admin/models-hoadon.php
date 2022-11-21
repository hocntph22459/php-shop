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
    $bill=pdo_query($sql); 
    return $bill;  
}
function update_bill($id,$name_order,$address,$phone,$total,$date_purchase,$status,$method_payment_id ){
    $sql="update bill set name_order='".$name_order."', total='".$total."', date_purchase='".$date_purchase."',address='".$address."',phone='".$phone."' where id=".$id;
    pdo_execute($sql);
}
function delete_bill($id){
    $sql="delete from bill where id= ".$id;
    pdo_execute($sql);
}
?>