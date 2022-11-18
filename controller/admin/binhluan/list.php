<div class="row">
            <div class="row header formtitle">
                <H1>Danh sách bình luận</H1>
            </div>
            <div class="row fromcontent">
                <div class="row m10 formdslh">
                    <table>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Nội dung bình luận</th>
                            <th>Sản phẩm</th>
                            <th>Ngày bình luận</th>
                            <th></th>
                        </tr>
                            <?php 
                                foreach ($listbinhluan as $binhluan) {
                                    extract($binhluan);
                                    $suabl="index.php?act=suabl&id=".$id;
                                    $xoabl="index.php?act=xoabl&id=".$id;
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$contets.'</td>
                                    <td>'.$product_id.'</td>
                                    <td>'.$date_comment.'</td>
                                    <td><a href="'.$suabl.'"><input type="button" value="sửa"></a> <a href="'.$xoabl.'" ><input type="button" value="Xóa"></a> </td>
                                </tr>';
                                }
                            
                            ?>
                        
                    </table>
                </div>
                <div class="row m10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn ">
                </div>
            </div>
        </div> 