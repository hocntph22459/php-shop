<?php
function thong_ke_hang_hoa()
{
    $sql = "select lo.id, lo.name,"
        . " count(*) so_luong,"
        . " min(hh.price) gia_min,"
        . " max(hh.price) gia_max,"
        . " avg(hh.price) gia_avg "
        . " from commodities hh"
        . " join categories lo on lo.id=hh.category_id"
        . " group by lo.id,lo.name";
    return pdo_query($sql);
}
function thong_ke_binh_luan()
{
    $sql = "select hh.id, hh.name,"
        . "count(*) so_luong, "
        . " min(bl.date_comment) cu_nhat,"
        . " max(bl.date_comment) moi_nhat"
        . " from comments bl "
        . " join products hh on hh.id=bl.product_id "
        . " group by hh.id,hh.name"
        . " having so_luong>0";
    return pdo_query($sql);
}
function thong_ke_doanh_thu()
{
    $sql = "SELECT SUM(total) AS 'Tong so doanh thu' FROM bill WHERE id=$id";
    return pdo_query($sql);
}

function thong_ke_don_hang()
{
    $sql = "SELECT COUNT(id)FROM bill WHERE id=$id";
    return pdo_query($sql);
}

function thong_ke_san_pham()
{
    $sql = "SELECT COUNT(id)FROM products WHERE id=$id";
    return pdo_query($sql);
}
function thong_ke_gop_y()
{
    $sql = "SELECT COUNT(id)FROM contact WHERE id=$id";
    return pdo_query($sql);

}
?>