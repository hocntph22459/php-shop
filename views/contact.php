<?php
    include "views/header.php";
?>
<div class="jumbotron text-center">
  <h1>My First Bootstrap Page</h1>
</div>
     <!--  -->
            <div class="row">
                        <div class="col-sm-4">
                          <h5>CÔNG TY TNHH TM DV TT01</h3>
                          <p>Địa chỉ: Số 6 Phan Chu Trinh, Quận 10, TP.HCM</p>
                          <p>Điện thoại: 0123.456.789</p>
                          <p>Mail: contact@demo.com</p>
                        </div>
                        <div class="col-sm-4">
                              <form action="/action_page.php">
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Họ tên*">
                                    <br>
                                  </div>
                                  <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Email*">
                                    <br>
                                  </div>
                                  <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Tiêu đề">
                                    <br>
                                  </div>
                                <div class="form-group">
                                  <label for="comment">Nội dung góp ý:</label>
                                  <textarea class="form-control" rows="5"  name="text"></textarea>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Gửi</button>
                              </form>
                        </div>
                        <div class="col-sm-4">
                            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=285&amp;height=300&amp;hl=en&amp;q=Tòa nhà FPT Polytechnic, P. Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://formatjson.org/">format json</a></div><style>.mapouter{position:relative;text-align:right;width:285px;height:300px;}.gmap_canvas {overflow:hidden;background:none!important;width:285px;height:300px;}.gmap_iframe {width:285px!important;height:300px!important;}</style></div>
                        </div>  
                <!--  -->
            </div>

<?php 
    include "footer.php";
?>