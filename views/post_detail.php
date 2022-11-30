<?php include "./views/header.php"; ?>
<main>
    <div class="tittle" style="text-align: center; font-size: 40px; text-transform: capitalize; margin-bottom: 20px;"><?=$post['tittle']?></div>
    <div class="contents" style="text-align: center;"><?=$post['content']?></div>
</main>
<?php
include "views/footer.php";
?>