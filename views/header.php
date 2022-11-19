<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Header</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">
    <link rel="stylesheet" href="./views/src/css/client.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> 
    
  </head>
<body class="p-3 m-0 border-0 bd-example">
  <!-- Example Code -->
  <!-- <div class="container"> -->
  <header>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img style="width: 100px; height: 100px;" src="./views/src/image/logo/logo2.PNG" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://localhost/da1/?url=home">Trang chủ</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="http://localhost/da1/?url=san-pham">
                Sản phẩm
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/da1/?url=introduce">Giới thiệu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/da1/?url=contact">Liên hệ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/da1/?url=contact">Chính sách</a>
            </li>
          </ul>
          <form class="d-flex" role="search" style="margin-right: 50px;" action="?url=san-pham" method="post">
            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="search">
            <select class="form-select" aria-label="Default select example" style="width: 70px; margin-right:10px ;" name="iddm">
              <option value="0" selected>All</option>
              <?php foreach ($listdm as $dm) : ?>
                <option value="<?= $dm['id'] ?>"><?= $dm['name'] ?></option>
              <?php endforeach ?>
            </select>
            <button class="btn btn-outline-success" type="submit" name="OK">Search</button>
          </form>
          <!-- check đăng nhập -->
          <?php if (!isset($_SESSION['email'])) : ?>
            <form class="form-inline">
            <button class="btn btn-outline-success" type="button"><a href="http://localhost/da1?url=login-khach-hang">Đăng nhập</a></button>
            <button class="btn btn-outline-success" type="button"><a href="http://localhost/da1?url=signin-khach-hang">Đăng Ký</a></button>
            <button class="btn btn-outline-success" type="button"><a href="http://localhost/da1?url=login-admin">Admin</a></button>
          </form>
          <?php endif ?>
          <?php if (isset($_SESSION['email'])) : ?>
            <form class="form-inline">
            <button class="btn btn-outline-success" type="button"><a href="">Đơn hàng của tôi</a></button>
            <button class="btn btn-outline-success" type="button"><a href="http://localhost/da1?url=doi-mat-khau&id=<?= 1?>">đổi mật khẩu</a></button>
            <button class="btn btn-outline-success" type="button"><a href="http://localhost/da1?url=logout-khach-hang">Đăng xuất</a></button>
            <button class="btn btn-outline-success" type="button"><a href="http://localhost/da1?url=login-admin">Admin</a></button>
          </form>
          <?php endif ?>
        </div>
      </div>
    </nav>
  </header>