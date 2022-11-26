<?php
        function insert_users($email,$name,$password){
            $sql="insert into users(email,name,password) values ('$email','$name','$password')";
            pdo_execute($sql);
        }
    
        function loadall_users(){
            $sql="select * from users order by id desc";
            $listusers = pdo_query($sql);
            return $listusers;
        }
        function loadone_users($id){
            $sql= "select * from users where id=".$id;
            $khachhang= pdo_query_one($sql); 
            return $khachhang;  
        }
        function update_users($tennd, $email, $matkhau, $sdt, $diachi, $vaitro,$id){
            $sql="update users set name='".$tennd."', email='".$email."', password='".$matkhau."',phone='".$sdt."',address='".$diachi."',role='".$vaitro."' where id=".$id;
            pdo_execute($sql);
        }
        function delete_users($id){
            $sql="delete from users where id= ".$id;
            pdo_execute($sql);
        }
?>