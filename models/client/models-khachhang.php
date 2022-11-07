<?php
session_start();
function insert_users()
{
    if (isset($_POST['btn'])) {
        $name = $_POST['hoten'];
        $email = $_POST['email'];
        $matkhau = $_POST['matkhau'];
        $phone = $_POST['phone'];
        $diachi = $_POST['diachi'];
        $sql = "insert into users(name,email,password,phone,address) values ('$name','$email','$matkhau','$phone','$diachi')";
        pdo_execute($sql);
    }
}
function validate_signin()
{
    if (isset($_POST['btn'])) {
        $name = $_POST['hoten'];
        $email = $_POST['email'];
        $matkhau = $_POST['matkhau'];
        $rmatkhau = $_POST['rmatkhau'];
        $phone = $_POST['phone'];
        $diachi = $_POST['diachi'];
        if ($name == '') {
            $name_err = "vui lòng nhập tên";
        }
        if ($email == '') {
            $email_err = "vui lòng nhập email";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "nhập đúng định dạng";
        }
        if ($matkhau == '') {
            $matkhau_err = "vui lòng nhập mật khẩu";
        } else if ($matkhau < 6) {
            $kitumatkhau_err = "mật khẩu phải trên 6 kí tự";
        }
        if ($rmatkhau != $matkhau) {
            $rmatkhau_err = "mật khẩu phải trùng nhau";
        }
    }
}


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
                $_SESSION['email'] = $user['email'];

                header("location:http://localhost/da1/?url=home");
                exit;
            } else {
                $error = "tài khoản hoặc mật khẩu không chính xác";
            }
        } else {
            $error = "tài khoản hoặc mật khẩu không chính xác";
        }
    }
}
