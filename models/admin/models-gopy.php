<?php 
    function insert_gopy($name,$tieude,$mota,$email){
        $sql="INSERT INTO `contact`(`name`, `tieude`, `mota`,`email`) values('$name','$tieude','$mota','$email')";

        pdo_execute($sql);
    }
    function loadall_gopy(){
        $sql="select * from contact order by id  desc";
        $listcontact = pdo_query($sql);
        return $listcontact;
    }
    function delete_gopy($id){
        $sql="delete from contact where id =".$id;
        pdo_execute($sql);
    }        
    function loadone_gopy($id ){
        $sql= "select * from contact where id =".$id;
        $contact= pdo_query_one($sql); 
        return $contact;  
    }

?>