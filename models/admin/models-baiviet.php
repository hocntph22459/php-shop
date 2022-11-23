<?php
    function insert_post($tieude,$noidung)
    {
        $sql = "INSERT INTO `post`(`tittle`, `content`) VALUES ('$tieude','$noidung')";
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
    function update_post($id,$tieude,$noidung)
    {
        $sql = "UPDATE `post` SET tittle='$tieude',content='$noidung' WHERE id=".$id;
        pdo_execute($sql);
    }

?>