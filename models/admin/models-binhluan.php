<?php 
    function insert_binhluan($contents,$idsp,$idkh){
        $sql="INSERT INTO `comments`(`contents`, `product_id`, `user_id`) values('$contents','$idsp','$idkh')";

        pdo_execute($sql);
    }
    function loadall_binhluan(){
        $sql = "select * from comments  order by date_comment DESC ";
        return pdo_query($sql);
    }
    function delete_binhluan($id){
        $sql="delete from comments where id=".$id;
        pdo_execute($sql);
    }
    function load_binhluan_by_id($id){
        $sql = "select * from comments where id=$id";
        return pdo_query_one($sql);
    }
    function count_comments($id){
        $sql = "select count(*) from comments where id=$id";
        return pdo_query_value($sql) > 0;
    }
    function load_binhluan_by_products($id){
        $sql = "select b.*,h.name from comments b join products h on h.id=b.product_id
        where b.product_id='$id' ORDER BY date_comment";
        return pdo_query($sql);
    }
    function load_binhluan_by_users($id)
{
    
    $sql = "select comments.*,users.name as name_person_comment from comments join users
      on comments.user_id=users.id  WHERE product_id =? ORDER BY date_comment";
    return pdo_query($sql, $id);
}
?>