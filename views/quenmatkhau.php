<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="./views/src/css/index/style.css">
    <link rel="stylesheet" href="./views/src/css/index/layout.css">
    <!-- FONT google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@600&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- css bootrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <h4>nhập email đăng ký</h4>
                <input type="email" class="form-control my-4" placeholder="Nhập email" name="email">
                <input type="text" class="form-control my-4" placeholder="Nhập số điện thoại" name="phone">
            </div>
            <div style="color: red;">
                <?php if (isset($error)) {
                    echo $error;
                } ?>
            </div>
            <button type="submit" class="btn btn-primary" name="btn">quên mật khẩu</button>
        </form> <br>
        <?php if (isset($pw)) {
            echo "<div> mật khẩu của bạn là :  $pw </div>";
        } ?>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>