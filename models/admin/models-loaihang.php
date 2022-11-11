<?php
function insert_cat()
{
    if (isset($_POST['btn'])) {
        $tenloai = $_POST['tenloai'];
        $sql = "INSERT INTO `categories`(`name`) VALUES ('$tenloai')";
        pdo_execute($sql);
        header("location:http://localhost/da1/controller/admin/?url=loai-hang");
    }
}
function delete_cat()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM  categories WHERE id=" . $id;
        pdo_execute($sql);
        header("location:http://localhost/da1/controller/admin/?url=loai-hang");
    }
}
function loadall_cat()
{
    $sql = "SELECT*FROM categories ORDER BY id DESC";
    $listcat = pdo_query($sql);
    return $listcat;
}
function loadone_cat($id)
{
    $sql = "SELECT * FROM categories WHERE id = $id";
    $cat = pdo_query_one($sql);
    return $cat;
}
function update_cat()
{
    if (isset($_POST['btn'])) {
        $id = $_GET['id'];
        $tenloai = $_POST['tenloai'];
        $sql = "UPDATE categories SET name='" . $tenloai . "' WHERE id=" . $id;
        pdo_execute($sql);
    }
}
