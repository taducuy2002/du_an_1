<?php
function loadAll_sanpham_home()
{
    $sql = "SELECT * FROM san_pham ORDER BY RAND() LIMIT 8";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadAll_danhmuc()
{
    $sql = "SELECT * FROM danh_muc where 1 order by id desc";
    $listdm = pdo_query($sql);
    return $listdm;
}
function load_ten_danhmuc($iddm){
    if ($iddm > 0) {
        $sql = "SELECT * FROM danh_muc where id = '$iddm'";
        $listdm = pdo_query_one($sql);
        extract($listdm);
        return $ten_danh_muc;
    } else {
        return '';
    }
}
?>