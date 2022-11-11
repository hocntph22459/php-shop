<?php
function insert_size($kichco)
{
    $sql = "INSERT INTO `size_products`(`size`) VALUES ('$kichco')";
    pdo_execute($sql);
}
function delete_size($id)
{
    $sql = "DELETE FROM  size_products WHERE id=" . $id;
    pdo_execute($sql);
}
function loadall_size()
{
    $sql = "SELECT*FROM size_products ORDER BY id DESC";
    $listsize = pdo_query($sql);
    return $listsize;
}
function loadone_size($id)
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM size_products WHERE id = $id";
    $size = pdo_query_one($sql);
    return $size;
}
function update_size($id,$kichco)
{
    $sql = "UPDATE size_products SET size='" . $kichco . "' WHERE id=" . $id;
    pdo_execute($sql);
}
