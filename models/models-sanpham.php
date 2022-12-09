<?php
function insert_sanpham($tensp,$anhsp,$giasp,$motasp,$ngaynhap,$giamgia,$loaisp)
{
    $sql = "INSERT INTO `products`(`name`,`image`,price,`description`,`date_add`,sell,category_id) VALUES ('$tensp','$anhsp','$giasp','$motasp','$ngaynhap','$giamgia','$loaisp')";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "DELETE FROM  products WHERE id=" . $id;
    pdo_execute($sql);
    
}
function delete_binhluan_sp($id){
    $sql = "DELETE FROM comments WHERE product_id=$id";
    pdo_execute($sql);
}
function load_sanpham_top ()
{
    $sql ="select * from products where 1 order by view desc limit 0,3";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_sanpham_cungloai($id,$category_id){
    $sql ="select * from products where category_id = $category_id and id <> $id limit 0,3";
    $listsanphamcungloai = pdo_query($sql);
    // var_dump($sql);
    // die;
    return $listsanphamcungloai;
}
function load_sanpham_new()
{
    $sql = "SELECT*FROM products ORDER BY id DESC limit 0,3";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_sanpham_sell()
{
    $sql = "select * from products where 1 order by sell desc limit 0,3";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadAll_sanpham($seach , $iddm){
    $sql ="select * from products where 1";
    if($seach!=""){
        $sql.=" and name like '%".$seach."%'";
    }
    if($iddm>0){
        $sql.=" and category_id like '%".$iddm."%'"; 
    }
    $sql.=  " order by id desc";
    $listsp = pdo_query($sql);
    return $listsp;
}
// đang sửa nha
function loadall_sanpham_danhmuc($iddm){
    $sql ="select * from products where 1";
    if($iddm>0){
        $sql.=" and category_id like '%".$iddm."%'"; 
    }
    $sql.=  " order by id desc";
    $listsp = pdo_query($sql); 
    return $listsp;
}
function loadall_sanpham_admin(){
    $sql = "SELECT*FROM products ORDER BY id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id)
{
    $sql = "SELECT * FROM products WHERE id =" .$id;
    $sanphamone = pdo_query_one($sql);
    return $sanphamone;
}
function update_sanpham($tensp,$anhsp,$giasp,$motasp,$ngaynhap,$giamgia,$loaisp,$id)
{
    if($anhsp){
        $sql = "UPDATE products SET name='".$tensp."', image='".$anhsp."', price='".$giasp."', description='".$motasp."', date_add='".$ngaynhap."' , sell='".$giamgia."', category_id='".$loaisp."' WHERE id=" . $id;
    }
    else{
        $sql = "UPDATE products SET name='".$tensp."',  price='".$giasp."', description='".$motasp."', date_add='".$ngaynhap."' , sell='".$giamgia."', category_id='".$loaisp."'  WHERE id=" . $id;
        // var_dump($sql);
        // die;
    }
    pdo_execute($sql);
}
function load_category_sanpham(){
    $sql = "select categories.name as name_category , products.* from products join categories on  categories.id = products.category_id";
    $name_category = pdo_query($sql); 
    return $name_category;
}

