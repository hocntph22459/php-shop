<?php
include "views/header.php";
?>
<main>
    <div class="container">
        <!-- san pham noi bat -->
        <h2 class="text-center">Tất cả sản phẩm</h2>
        <div class="row">
            <?php foreach ($name_category as $sp_cate) : ?>
                <?php foreach ($listsp as $sp) : ?>
                    <?php if ($sp_cate['id'] == $sp['id']) : ?>
                        <div class="card">
                            <img src="./views/src/image/products/<?= $sp['image'] ?>" alt="Denim Jeans" style="width:100%; margin: auto;">
                            <h3><a href=""><?= $sp['name'] ?></a></h3>
                            <p class="price"><?= $sp['price'] ?></p>
                            <p>
                                <td><?= $sp_cate['name_category'] ?></td>
                            </p>
                            <!-- add giỏ hàng -->
                            <?php if (isset($_SESSION['email'])) : ?>
                                <form action="" method="post">
                                    <input type="text" name="image" value="./views/src/image/products/<?= $sp['image'] ?>" hidden>
                                    <input type="text" name="name" value="<?= $sp['name'] ?>" hidden>
                                    <input type="text" name="price" value="<?= $sp['price'] ?>" hidden>
                                    <div class="mb-3 mt-3">
                                        <input type="number" class="form-control my-4" placeholder="chọn số lượng" name="soluong">
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <input type="text" class="form-control my-4" placeholder="chọn size" name="size">
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <input type="text" class="form-control my-4" placeholder="chọn màu" name="color">
                                    </div>
                                    <button name="addtocart" class="btn btn-success">Thêm vào giỏ hàng</button>
                                </form>
                            <?php endif ?>

                            <p><button type="button" class="btn btn-info"><a href="http://localhost/da1/?url=san-pham-ct&id=<?= $sp['id'] ?>">Xem chi tiết</a></button></p>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            <?php endforeach ?>
        </div>
</main>
<?php
include "views/footer.php";
?>