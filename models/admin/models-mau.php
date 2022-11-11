<?php
function insert_color($mau)
{
    $sql = "INSERT INTO `color_products`(`color`) VALUES ('$mau')";
    pdo_execute($sql);
}
function delete_color($id)
{
    $sql = "DELETE FROM  color_products WHERE id=" . $id;
    pdo_execute($sql);
}
function loadall_color()
{
    $sql = "SELECT*FROM color_products ORDER BY id DESC";
    $listcolor = pdo_query($sql);
    return $listcolor;
}
function loadone_color($id)
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM color_products WHERE id = $id";
    $color = pdo_query_one($sql);
    return $color;
}
function update_color($id,$mau)
{
    $sql = "UPDATE color_products SET color='" . $mau . "' WHERE id=" . $id;
    pdo_execute($sql);
}
