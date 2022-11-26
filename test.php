<?php
function login_khachhang()
{
    if (isset($_POST['btn'])) {
        $email = $_POST['email'];
        $matkhau = $_POST['matkhau'];

        $sql = "select * from users where email = '$email'";

        $user = pdo_query_one($sql);


        //KIỂM TRA user
        if ($user) {
            //kiểm tra matkhau
            if ($user['password'] == $matkhau) {
                $_SESSION['user'] = $user;
                // $_SESSION['user']['email'] = $user['email'];
                // $_SESSION['user']['role'] = $user['role'];  
                echo "<pre>";
                var_dump($_SESSION['user']['email']);
                die;
                header("location:http://localhost/da1/?url=home");
                exit;
            } else {
                $error = "tài khoản hoặc mật khẩu không chính xác";
            }
        } else {
            $error = "tài khoản hoặc mật khẩu không chính xác";
        }
    }
    include "./views/login.php";
}

?>
<form action="">
    <select name="id1" id="">
        <option value="1"><input type="text" value="2"></option>
        <option value="1"><input type="text" value="2"></option>
        <option value="1"><input type="text"></option>
    </select>
</form>