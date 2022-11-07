<?php
include "./models/connect.php";
include "./models/client/models-khachhang.php";
$url = isset($_GET['url']) ? $_GET['url']: '';
// echo $url;
switch($url){
    case'':
        case'home':
            include "./views/home.php";
                 break;
            case'login-khach-hang':
                login_khachhang();
                include "./views/login.php";
                     break;
                case'signin-khach-hang':
                    insert_users();
                    validate_signin();
                    include "./views/signin.php";
                        break;
         default:
         echo"<h2> 404 not found !!! </h2>";            
}