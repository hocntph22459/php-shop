<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập admin</title>
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
<style>
    h1 {
        margin: 64px;
        text-align: center;
    }
    form {
        border: solid 1px black;
        padding: 24px;
        border-radius: 10px;
    }
</style>

<body>
    <div class="container">
        <div class="tile">
            <h1>Đăng nhập</h1>
        </div>
        <form action="" method="post">
            <!-- bắt lỗi đăng nhập -->
            <?php if (isset($error)) : ?>
                <div class="error" style="text-align: center; color: red;">
                    <?= $error ?>
                </div>
            <?php endif ?>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Tên đăng nhập</label>
                <input type="email" class="form-control my-4" placeholder="Nhập email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control my-4" placeholder="Nhập PassWord" name="matkhau">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> ghi nhớ tài khoản
                </label>
            </div>
            <button type="submit" class="btn btn-primary" name="btn">Đăng Nhập</button>
        </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>