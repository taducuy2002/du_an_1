<?php
function insert_binhluan($noi_dung, $id_user, $id_product, $ngay_bl)
{
    $sql = "INSERT INTO binh_luan (noi_dung, id_user, id_product, ngay_bl) VALUES (?, ?, ?, ?)";
    pdo_execute($sql, [$noi_dung, $id_user, $id_product, $ngay_bl]);
}

function loadall_binhluan()
{
    $sql = "SELECT * FROM binh_luan ORDER BY id_binhluan DESC";
    return pdo_query($sql);
}

function update_binhluan_trangthai($id, $trangthai)
{
    $sql = "UPDATE binh_luan SET trangthai = ? WHERE id = ?";
    pdo_execute($sql, [$trangthai, $id]);
}
function delete_binhluan($id) {
    $sql = "DELETE FROM binh_luan WHERE id_binhluan = '$id'";
    pdo_execute($sql);
}
?>