<?php
        function insert_users($email,$name,$password){
            $sql="insert into users(email,name,password) values ('$email','$name','$password')";
            pdo_execute($sql);
        }
    
        function checkuser($name,$password){
            $sql= "select * from users where name='".$name."' AND password='".$password."' ";
            $kh=pdo_query_one($sql); 
            return $kh;  
        }
        function checkemail($email){
            $sql= "select * from users where email='".$email."'";
            $kh=pdo_query_one($sql); 
            return $kh;  
        }
        function loadall_users(){
            $sql="select * from users order by id desc";
            $listusers = pdo_query($sql);
            return $listusers;
        }
        function loadone_users($id){
            $sql= "select * from users where id=".$id;
            $kh=pdo_query($sql); 
            return $kh;  
        }
        function update_users($id,$name,$password,$email,$address,$phone){
            $sql="update users set name='".$name."', password='".$password."', email='".$email."',address='".$address."',phone='".$phone."' where id=".$id;
            pdo_execute($sql);
        }
        function delete_users($id){
            $sql="delete from users where id= ".$id;
            pdo_execute($sql);
        }
?>