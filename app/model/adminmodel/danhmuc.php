<?php
// Lấy tất cả danh mục
function loadall_danh_muc(){
    $sql = "SELECT * FROM danh_muc order by id desc";
    $list = pdo_query($sql);
    return $list;
}
// xóa danh mục
function delete_danh_muc($id){
    $sql = "DELETE FROM danh_muc WHERE `danh_muc`.`id` = $id";
    pdo_execute($sql);
    
}
// update cho danh mục
function update_danh_muc($id , $tendm , $mo_ta, $anh, $trangthai){
    $sql = "UPDATE `danh_muc` SET `ten_danh_muc` = '$tendm', `mo_ta` = '$mo_ta', `img` = '$anh', `trang_thai` = '$trangthai' WHERE `danh_muc`.`id` = '$id'";
    pdo_execute($sql);
}

// lấy 1 danh mục theo id
function loadOne_danh_muc($id){
    $sql = "SELECT * FROM danh_muc where id = $id";
    $loadone =  pdo_query_one($sql);
    return $loadone;
}

// thêm mới danh mục
function insert_danh_muc($tendm, $mo_ta, $anh){
    $sql = "INSERT INTO `danh_muc` (`id`,`ten_danh_muc`, `mo_ta`,`img`) VALUES (NULL,'$tendm', '$mo_ta','$anh')";
    pdo_execute($sql);
}
?>