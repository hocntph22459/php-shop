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