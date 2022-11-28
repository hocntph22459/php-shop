<?php include "./views/header.php"; ?>
<main>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="./views/src/css/post.css">
    <div class="container blog-page">
        <div class="row clearfix">
        <?php foreach($list_post as $list):?>
            <div class="col-lg-4 col-md-12">
                
                <div class="card single_post">
                    <div class="body">
                        <h3 class="m-t-0 m-b-5"><a href="#"><?=$list['tittle']?></a></h3>
                    </div>
                    <div class="body">
                        <div class="img-post m-b-15">
                            <img src="./views/src/image/post/tittle/<?=$list['image_tittle']?>" alt="">
                        </div>
                        <a href="http://localhost/da1/?url=post-ct&id=<?= $list['id'] ?>" title="" class="btn btn-round btn-info">Xem chi tiết</a>
                    </div>
                </div>
                
            </div>
        <?php endforeach;?>
        </div>
    </div>
</main>
<?php
include "views/footer.php";
?>