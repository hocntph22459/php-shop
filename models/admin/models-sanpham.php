<?php
function insert_sanpham($tensp,$anhsp,$giasp,$motasp,$loaisp)
{
    $sql = "INSERT INTO `products`(`name`,`image`,price,`description`,category_id) VALUES ('$tensp','$anhsp','$giasp','$motasp','$loaisp')";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "DELETE FROM  products WHERE id=" . $id;
    pdo_execute($sql);
    
}
function load_sanpham_top10 ()
{
    $sql = "SELECT*FROM products ORDER BY id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_sanpham_new()
{
    $sql = "SELECT*FROM products ORDER BY id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_sanpham_sell()
{
    $sql = "SELECT*FROM products ORDER BY id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($search){
    $sql ="select * from products where 1";
    if($search!=""){
        $sql.=" and name like '%".$search."%'";
    }
    // if($iddm>0){
    //     $sql.=" and category_id like '%".$iddm."%'"; 
    // }
    $sql.=  " order by id desc";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadone_sanpham($id)
{
    $sql = "SELECT * FROM products WHERE id =" .$id;
    $sanphamone = pdo_query_one($sql);
    return $sanphamone;
}
function update_sanpham($tensp,$anhsp,$giasp,$motasp,$loaisp,$id)
{
    if($anhsp){
        $sql = "UPDATE products SET name='".$tensp."', image='".$anhsp."', price='".$giasp."', description='".$motasp."', category_id='".$loaisp."' WHERE id=" . $id;
    }
    else{
        $sql = "UPDATE products SET name='".$tensp."',  price='".$giasp."', description='".$motasp."', category_id='".$loaisp."' WHERE id=" . $id;
    }
    pdo_execute($sql);
}

