<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../content/css/style1.css">
</head>

<body>
    <form method="post" action="index.php">
        <h3 class="py-3 text-center text-primary">
            Tổng hợp bình luận
        </h3>
        <table class="table">
            <thead class="table-success">
                <tr>
                    <th>Hàng hóa</th>
                    <th>Số bình luận</th>
                    <th>Mới nhất</th>
                    <th>Cũ nhất</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $value) :
                    extract($value) ?>
                    <tr>
                        <td class="pb-3 pt-3"><?= $name ?></td>
                        <td class="pb-3 pt-3"><?= $so_luong ?></td>
                        <td class="pb-3 pt-3"><?= $cu_nhat ?></td>
                        <td class="pb-3 pt-3"><?= $moi_nhat ?></td>
                        <td class="td-opt pb-3 pt-3">
                            <a href="../comments/index.php?id=<?= $id ?>" class="btn btn-success">Chi tiết</a>
                        </td>
                    </tr>

                <?php endforeach; ?>

            </tbody>
        </table>
        <div class="wrap-btn" style="display: flex; justify-content: end;">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>