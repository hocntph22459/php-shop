<?php
    function insert_post($anh_tieude,$tieude,$noidung)
    {
        $sql = "INSERT INTO `post`(`image_tittle`,`tittle`, `content`) VALUES ('$anh_tieude','$tieude','$noidung')";
        pdo_execute($sql);
    }
    function load_all_post()
    {
        $sql = "SELECT * FROM `post` WHERE 1";
        return pdo_query($sql);
    }
    function load_one_post($id)
    {
        $sql = "select * from `post` WHERE id =" .$id;
        $postone = pdo_query_one($sql);
        return $postone;
    }
    function update_post($id,$anh_tieude,$tieude,$noidung)
{
    if($anh_tieude){
        $sql = "UPDATE post SET image_tittle='$anh_tieude', tittle='$tieude',content='$noidung' WHERE id=".$id;
    }
    else{
        $sql = "UPDATE post SET  tittle='$tieude',content='$noidung' WHERE id=".$id;
        // die;
    }
    // var_dump($sql);
    // die;
    pdo_execute($sql);
}
function delete_baiviet($id){
    $sql = "DELETE FROM post WHERE id=$id";
    pdo_execute($sql);
}
?>
