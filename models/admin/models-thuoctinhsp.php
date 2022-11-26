<?php
function loadall_attributes()
{
    $sql = "SELECT*FROM attributes_product ORDER BY id DESC";
    $list_attributes = pdo_query($sql);
    return $list_attributes;
}
function insert_attributes($idsp,$kichco,$mau,$soluong)
{
    $sql = "INSERT INTO `attributes_product`(id_product,size,color,quantity) VALUES ('$idsp','$kichco','$mau','$soluong')";
    pdo_execute($sql);
}
function delete_attributes($id)
{
    $sql = "DELETE FROM  attributes_product WHERE id=" . $id;
    pdo_execute($sql);
}
function update_attributes($id,$kichco,$mau,$soluong)
{
    $sql = "UPDATE attributes_product SET size='" . $kichco . "',color='" . $mau . "',quantity='" . $soluong . "' WHERE id=" . $id;
    pdo_execute($sql);
}
function loadone_attributes($id)
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM attributes_product WHERE id = $id";
    $attributes = pdo_query_one($sql);
    return $attributes;
}
function load_attributes_product($id){
    $sql = "SELECT*FROM attributes_product where id_product = $id";
    $list_attributes = pdo_query($sql);
    return $list_attributes;
}


?>