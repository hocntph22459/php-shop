<?php
    include "views/header.php";
?>
<!-- contact section -->
<?php
if(isset($_POST['contact_submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tieude = $_POST['tieude'];
    $noidung = $_POST['noidung'];
    if(isset($_POST['name'])&& !empty($_POST['contact'])){  
      insert_gopy($name,$tieude,$mota,$email);      
    }
    // die;
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
            <form action="">
              <div>
                <input type="text" placeholder="Họ Tên" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Tiêu đề " />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Nội dung góp ý" />
              </div>
              <div class="d-flex ">
                <button type="submit"  type="submit" name="contact_submit">
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="./views/src/image/contact/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

<?php 
    include "footer.php";
?>