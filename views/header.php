<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Header</title>
    <link rel="stylesheet" href="./views/src/css/client/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>

<body class="p-3 m-0 border-0 bd-example">
    <!-- Example Code -->
<!-- <div class="container"> -->
    <header>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img width="150px" src="./views/src/image/logo/logo2.PNG" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://localhost/da1/?url=home">Trang chủ</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Sản phẩm
              </a>
              <ul class="dropdown-menu">
                <?php foreach($listdm as $dm):?>
                  <li><a class="dropdown-item" href="#"><?=$dm['name']?></a></li>
                <?php endforeach?>
              </ul>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/da1/?url=contact">Giới thiệu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Liên hệ</a>
            </li>
          </ul>
          <form class="d-flex" role="search" style="margin-right: 50px;" action="?url=san-pham" method="post">
            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success" type="submit" name="OK">Search</button>
          </form>
          <form class="form-inline">
            <button class="btn btn-outline-success" type="button"><a href="http://localhost/da1?url=login-khach-hang">Đăng nhập</a></button>
            <button class="btn btn-outline-success" type="button"><a href="http://localhost/da1?url=signin-khach-hang">Đăng Ký</a></button>
            <button class="btn btn-outline-success" type="button"><a href="http://localhost/da1?url=login-admin">Admin</a></button>
          </form>
        </div>
      </div>
    </nav>
    </header>