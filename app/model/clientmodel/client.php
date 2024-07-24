<?php
require_once "model/pdo.php";
function loadAll_sanpham_home()
{
    $sql = "SELECT * FROM san_pham ORDER BY id desc limit 0,9";
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
function loadAll_sanpham($kyw, $iddm)
{
    $sql = "SELECT san_pham .*, danh_muc.ten_danh_muc  FROM  san_pham INNER JOIN danh_muc on danh_muc.id=san_pham.id_danh_muc WHERE 1";
    if ($kyw != '') {
        $sql .= " AND ten_san_pham LIKE '%" . $kyw . "%' ";
}
    if ($iddm > 0) {
        $sql .= " AND id_danh_muc = '$iddm' ";
    }
    $sql .= " order by san_pham.id desc";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadAll_sanpham_top10(){
    $sql = "SELECT * FROM san_pham WHERE 1  order by id desc limit 0,10";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadAll_sanpham_yeuthich_top10()
{
    $sql = "SELECT * FROM san_pham ORDER BY luot_xem DESC LIMIT 8";
    $listspyt = pdo_query($sql);
    return $listspyt;
}
//biến thể
function get_product_details($id) {
    $sql = "SELECT ram, soluong FROM sanpham_bienthe WHERE id = ?";
    return pdo_query($sql, $id);
}
function loadone_sanpham($id){
    $sql = "SELECT * FROM san_pham WHERE id ='$id'";
    $sp = pdo_query_one($sql);
    return $sp;
}
//phần client tài khoản 
function insert_taikhoan($user, $password, $fullname, $ngaysinh, $phone, $email, $diachi)
{

    $sql = "INSERT INTO tai_khoan (id, ten_dang_nhap, mat_khau, ho_ten, ngay_sinh, so_dien_thoai, email, dia_chi)
            VALUES(NULL, '$user', '$password', '$fullname', '$ngaysinh', '$phone', '$email', '$diachi')";
    pdo_execute($sql);
}
?>