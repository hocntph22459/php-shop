<?php
$url = isset($_GET['url']) ? $_GET['url']: '';
// echo $url;
switch($url){
    case'':
        case'home':
            include "./views/home.php";
                 break;
            case'':
                include "";
                     break;
                case'':
                    include "";
                        break;
         default:
         echo"<h2> 404 not found !!! </h2>";            
}