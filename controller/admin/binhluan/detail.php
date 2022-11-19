<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../../content/css/style1.css">
    
    <title>Document</title>
</head>

<body>
    
    <h3 class="py-3 text-center text-primary">
        Chi tiết bình luận
    </h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
    }

    ?>
    <form action="index.php?id=<?= $id ?>" method="post" enctype="multipart/form-data">
        <table class="table">
            <thead class="alert-success">
                <tr>
                    <th></th>
                    <th>Nội dung</th>
                    <th>Ngày BL</th>
                    <th>Người Bình luận</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $value) : extract($value); ?>
                <tr>
                <td class="pb-3 pt-3"><input type="checkbox" name="id[]" value="<?= $id ?>"></td>
                <td class="pb-3 pt-3"><?= $content ?></td>
                <td class="pb-3 pt-3"><?= $date_comment ?></td>
                <td class="pb-3 pt-3"><?= $customer_id ?></td>
                <td class="td-opt pb-3 pt-3">
                <a href="index.php?btn_delete&id=<?= $id ?>&customer_id=<?= $customer_id ?>" class="btn btn-danger ">Xóa</a>
                </td>
              
                <?php endforeach; ?>
            </tbody>
            
        </table>
        <div class="wrap-btn" style="display: flex; justify-content: space-between">
        <div class="form-group pb-4">
          <button id="check-all" type="button" class="btn btn-success">Chọn tất cả</button>
          <button id="clear-all" type="button" class="btn btn-warning">Bỏ chọn tất cả</button>
          <button id="btn_delete" name="btn_delete"  class="btn btn-danger">Xóa các mục đã chọn</button>
        </div>
        <nav aria-label="...">
          <ul class="pagination">
            <li class="page-item disabled">
              <span class="page-link">Previous</span>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item " aria-current="page">
              <span class="page-link">2</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </form>
</body>

</html>