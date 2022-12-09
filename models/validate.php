<?php
$nameerr = "";
$imageerr = "";
$priceerr = "";
$loaierrr="";
$tenloaierr="";
$kichcoerr = "";
$mauerr = "";
$soluongerr = "";

if (strlen($tensp) == 0) {
    $nameerr = "Hãy nhập tên sản phẩm";
}
if (strlen($giasp) == 0) {
    $priceerr = "Hãy nhập giá sản phẩm";

}
if (strlen($_FILES['anhsp']['name']) == 0) {
    $imageerr = "Hãy chọn ảnh sản phẩm";
}
if (strlen($loaisp) == 0) {
    $loaierr="Hãy nhập loại sản phẩmm";
}
if (strlen($tenloai) == 0) {
    $tenloaierr="Hãy nhập tên loại sản phẩmm";
}
if (strlen($kichco) == 0) {
    $kichcoerr="Hãy nhập kích cỡ sản phẩmm";
}
if (strlen($mau) == 0) {
    $mauerr="Hãy nhập màu sản phẩmm";
}
if (strlen($soluong) == 0) {
    $soluongerr="Hãy nhập số lượng sản phẩmm";
}




?>