<?php 
    function insert_binhluan($contents,$products_id,$user_id,$date_comment){
        $sql="insert into comments(contents,products_id,user_id,date_comment) values('$contents','$products_id','$user_id','$date_comment')";
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
        $sql = "select * from comments where id=".$id;
        return pdo_query_one($sql);
    }
    function count_comments($id){
        $sql = "select count(*) from comments where id=".$id;
        return pdo_query_value($sql) > 0;
    }
    function load_binhluan_by_products($id){
        $sql = "select b.*,h.name from comments b join products h on h.id=b.id
        where b.id='.$id.' ORDER BY date_comment";
        return pdo_query($sql);
    }
//     function load_binhluan_by_users($id)
// {
    
//     $sql = "select comments.*,customer.name as name_person_comment from comments join customer  on comments.customer_id=customer.id  WHERE commodity_id =? ORDER BY date_comment";
//     return pdo_query($sql, $commodity_id);
// }
?>