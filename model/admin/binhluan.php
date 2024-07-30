<?php
function insert_binhluan($noi_dung, $id_user, $id_product, $ngay_bl)
{
    $sql = "INSERT INTO binhluan (noi_dung, id_user, id_product, ngay_bl) VALUES (?, ?, ?, ?)";
    pdo_execute($sql, [$noi_dung, $id_user, $id_product, $ngay_bl]);
}

function loadall_binhluan()
{
    $sql = "SELECT * FROM binhluan ORDER BY id DESC";
    return pdo_query($sql);
}

function update_binhluan_trangthai($id, $trangthai)
{
    $sql = "UPDATE binhluan SET trangthai = ? WHERE id = ?";
    pdo_execute($sql, [$trangthai, $id]);
}

?>