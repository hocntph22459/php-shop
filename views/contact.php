<?php
    include "views/header.php";
    ?>
<!-- contact section -->
<?php
if(isset($_POST['contact_submit']) && $_POST['contact_submit']){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tieude = $_POST['tieude'];
    $mota = $_POST['mota'];
    // echo "<pre>";
    // var_dump($_POST);
    if(!empty($name) && !empty($email) && !empty($tieude) && !empty($mota)){
      $sql="INSERT INTO `contact`( `name`, `tieude`, `mota`, `email`) VALUES ('$name','$tieude','$mota','$email')";
      // var_dump($sql);
      // die;
      pdo_execute($sql);
  }
}

?>
<section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container">
              <h2>
              Liên hệ chúng tôi
              </h2>
            </div>
            <form action="" method="post">
              <div>
                <input type="text" name="name" placeholder="Họ Tên" />
              </div>
              <div>
                <input type="email" name="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" name="tieude" placeholder="Tiêu đề " />
              </div>
              <div>
                <input type="text" name="mota" class="message-box" placeholder="Nội dung góp ý" />
              </div>
              <div class="d-flex ">
                <button type="submit"  name="contact_submit" value="ok">
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="./views/src/image/contact/contact-img3.webp" alt="" >
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

<?php 
    include "footer.php";
?>