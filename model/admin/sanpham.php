<?php
function loadall_sanpham(){
    $sql = "SELECT san_pham .*, danh_muc.ten_danh_muc FROM san_pham INNER JOIN danh_muc on danh_muc.id = san_pham.id_danh_muc order by san_pham.id desc";
    $list = pdo_query($sql);
    return $list;
}
function delete_sanpham($id){
    $sql = "DELETE FROM san_pham WHERE `san_pham`.`id` = $id";
    pdo_execute($sql);
}
function insert_sanpham($tensp, $mo_ta, $anh , $gia, $id_danh_muc){
    $sql = "INSERT INTO `san_pham` (`id`, `ten_san_pham`, `gia`, `img`, `mo_ta`,`id_danh_muc`) VALUES (NULL, '$tensp', '$gia','$anh', '$mo_ta','$id_danh_muc')";
    pdo_execute($sql);
}
function loadone_sanpham($id){
    $sql = "SELECT * FROM san_pham where id='$id'";
    $listone = pdo_query_one($sql);
    return $listone;
}
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

function update_sanpham($id, $tensp, $gia, $anh, $mo_ta, $id_danh_muc) {
    $sql = "UPDATE san_pham SET ten_san_pham=?, gia=?, img=?, mo_ta=?, id_danh_muc=? WHERE id=?";
    pdo_execute($sql, $tensp, $gia, $anh, $mo_ta, $id_danh_muc, $id);
}

?>