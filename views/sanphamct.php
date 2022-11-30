<?php include "./views/header.php"; ?>

<!--Important link from https://bootsnipp.com/snippets/XqvZr-->
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<link href="./views/src/css/sanphamct.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php
if (isset($_POST['comment_submit'])) {

    $idkh = $_SESSION['id']['id'];
    $idsp = $_GET['id'];
    $contents = $_POST['contents'];
    if (isset($_POST['contents']) && !empty($_POST['contents'])) {
        insert_binhluan($contents, $idsp, $idkh);
    }
    // die;
}
$comment_list1 = load_binhluan_by_users($id);

?>

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<div class="pd-wrap">
    <div class="container">
        <div class="heading-section">
            <h2>Sản Phẩm Chi Tiết</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="./views/src/image/products/<?= $spct['image'] ?>" alt="" style="border-radius: 40px;">
            </div>
            <div class="col-md-6">
                <div class="product-dtl">
                    <div class="product-info">
                        <div class="product-name" style="text-transform: capitalize;"><?= $spct['name'] ?></div>
                        <div class="reviews-counter">
                            <div class="rate" style="margin: 10px 0">
                                <input type="radio" id="star5" name="rate" value="5" checked />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" checked />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" checked />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text">1 star</label>
                            </div>
                        </div>
                        <?php if ($spct['sell'] > 0) : ?>
                            <div class="product-price-discount"><span>$<?= $spct['price'] - ($spct['price'] * $spct['sell'] / 100) ?></span><span class="line-through">$<?= $spct['price'] ?></span></div>
                        <?php endif; ?>
                        <?php if ($spct['sell'] == 0) : ?>
                            <div class="product-price-discount"><span>$<?= $spct['price'] ?></span></div>
                        <?php endif; ?>
                    </div>
                    <!--add giỏ hàng -->
                    <form action="" method="post">
                        Thuộc tính:
                        <select name="attributes" class="form-select" aria-label="Default select example">
                            <?php foreach ($list_attributes as $attributes) : ?>
                                <option name="" value="<?= $attributes['id'] ?>"><?= $attributes['size'] ?> - <?= $attributes['color'] ?> </option>
                            <?php endforeach; ?>
                        </select> <br>
                        
                        <input type="text" name="image" value="./views/src/image/products/<?= $spct['image'] ?>" hidden>
                        <input type="text" name="name" value="<?= $spct['name'] ?>" hidden>
                        <input type="text" name="price" value="<?= $spct['price'] ?>" hidden>
                        <?php if (isset($_SESSION['email'])) : ?>
                            <input type="text" name="id_user" value="<?= $_SESSION['id']['id'] ?>" hidden>
                        <?php endif ?>
                        
                        <div class="mb-3 mt-3">
                            SỐ LƯỢNG:
                            <input type="number" class="form-control my-4" placeholder="chọn số lượng" name="soluong" value="1">
                        </div>
                </div>
                <!--đăng nhập mới mua hàng -->
                <?php if (!isset($_SESSION['email'])) : ?>
                    <p><button type="button" class="btn btn-outline-success"><a href="http://localhost/da1/?url=signin-khach-hang">Thêm vào giỏ hàng</a></button></p>
                <?php endif ?>
                <?php if (isset($_SESSION['email'])) : ?>
                    <button onclick="alert('thêm vào giỏ hàng thành công')" name="addtocart" class="btn btn-success">Thêm vào giỏ hàng</button>
                <?php endif ?>
                </form>
            </div>
        </div>
    </div>
    <div class="product-info-tabs">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Mô Tả</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Bình Luận</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <?= $spct['description'] ?>
            </div>
            <div class="tab-pane fade " id="review" role="tabpanel" aria-labelledby="review-tab">
                <div class="review-heading">Bình luận</div>
                <p class="mb-20">
                    <?php
                    foreach ($comment_list1 as $bl) {
                        extract($bl); ?>
                <ul>
                    <li class="">
                        <p> <i><b>

                                    <?= $name_person_comment;

                                    ?>

                                </b></i>
                        </p>

                        <div class="d-flex justify-content-between w-75">
                            <p><?= $contents ?></p>
                            <p><?= $date_comment ?></p>
                        </div>
                    </li>
                </ul>

            <?php }
            ?>
            </p>

            <?php if (isset($_SESSION['email'])) : ?>
                <form class="review-form" action="" method="post" id="">
                    <div class="form-group">
                        <!-- <label>Your rating</label> -->
                        <!-- <div class="reviews-counter">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div> -->
                    </div>
                    <div class="form-group">
                        <label>Bình luận của bạn</label>
                        <textarea class="form-control" rows="10" name="contents"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <input type="text" name="" class="form-control" value="<?= $_SESSION['id']['name'] ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" name="comment_submit">Gửi</button>
                </form>
            <?php else : ?>
                <button class="btn btn-outline-success" type="button"><a href="http://localhost/da1?url=login-khach-hang">Đăng nhập để được bình luận</a></button>
            <?php endif; ?>
            </div>

        </div>
    </div>
    <h2 class="text-center">Sản phẩm cùng loại</h2>
        <div class="row">
            <?php foreach ($name_category as $sp_cate) : ?>
                <?php foreach ($sanphamkhac as $sp) : ?>
                    <?php if ($sp_cate['id'] == $sp['id']) : ?>
                        <div class="card">
                            <img src="./views/src/image/products/<?= $sp['image'] ?>" alt="Denim Jeans" style="width:100%; margin: auto;">
                            <h3 style="text-transform: uppercase;"><a href=""><?= $sp['name'] ?></a></h3>
                            <p class="price"><?= $sp['price'] ?></p>
                            <h4 style="color: red;"><?= $sp_cate['name_category'] ?></h4>
                            <p><button type="button" class="btn btn-info"><a href="http://localhost/da1/?url=san-pham-ct&id=<?= $sp['id'] ?>">Xem chi tiết</a></button></p>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            <?php endforeach ?>
        </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="	sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php include "./views/footer.php"; ?>