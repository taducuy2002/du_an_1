<?php
//Lấy tất cả sản phẩm
function loadall_sanpham(){
    $sql = "SELECT san_pham .*, danh_muc.ten_danh_muc FROM san_pham INNER JOIN danh_muc on danh_muc.id = san_pham.id_danh_muc order by san_pham.id desc";
    $list = pdo_query($sql);
    return $list;
}
// xóa sản phẩm
function delete_sanpham($id){
    $sql = "DELETE FROM san_pham WHERE `san_pham`.`id` = $id";
    pdo_execute($sql);
}
// thêm sản phẩm
function insert_sanpham($tensp, $mo_ta, $anh , $gia, $id_danh_muc){
    $sql = "INSERT INTO `san_pham` (`id`, `ten_san_pham`, `gia`, `img`, `mo_ta`,`id_danh_muc`) VALUES (NULL, '$tensp', '$gia','$anh', '$mo_ta','$id_danh_muc')";
    pdo_execute($sql);
}
// Lấy 1 sản phẩm theo id
function loadone_sanpham($id){
    $sql = "SELECT * FROM san_pham where id='$id'";
    $listone = pdo_query_one($sql);
    return $listone;
}
// Load sản phẩm theo tên hoặc id danh mục
function loadAll_san_pham($kyw, $iddm)
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
//Sửa sản phẩm
function update_sanpham($id, $tensp, $gia, $anh, $mo_ta, $id_danh_muc) {
    $sql = "UPDATE san_pham SET ten_san_pham=?, gia=?, img=?, mo_ta=?, id_danh_muc=? WHERE id=?";
    pdo_execute($sql, $tensp, $gia, $anh, $mo_ta, $id_danh_muc, $id);
}
//phần biến thể của sản phẩm 
function load_all_sanpham_pro($id){
    $sql = "SELECT * FROM sanpham_bienthe WHERE id = $id";
    return pdo_query($sql);
}
?>