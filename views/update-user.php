<!DOCTYPE html>
<html>

<head>
    <title>đổi mật khẩu</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- css bootrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading"> <br>
                <h2 class="text-center">ĐỔI MẬT KHẨU</h2>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="" class="form-label">email</label> <br>
                    <input type="email" class="form-control my-4" id="pwd" placeholder="Nhập tên" name="email">
                </div>
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">mật khẩu</label> <br>
                    <input type="password" class="form-control my-4" id="matkhau" placeholder="Nhập mật khẩu" name="matkhau">
                </div>
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">mật khẩu mới</label> <br>
                    <input type="password" class="form-control my-4" id="rmatkhau" placeholder="Nhập lại mật khẩu" name="password">
                </div>
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">nhập lại mật khẩu mới</label> <br>
                    <input type="password" class="form-control my-4" id="rmatkhau" placeholder="Nhập lại mật khẩu" name="">
                </div>
                <button class="btn btn-success" name="btn" id="bt">ĐỔI</button>
            </form>
        </div>
    </div>
</body>

</html>