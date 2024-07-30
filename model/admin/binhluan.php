<?php
function insert_binhluan($noidung, $id_user, $id_pro, $ngaybinhluan)
{
    $sql = "INSERT INTO binhluan (noidung, id_user, id_pro, ngaybinhluan) VALUES (?, ?, ?, ?)";
    pdo_execute($sql, [$noidung, $id_user, $id_pro, $ngaybinhluan]);
}

function loadall_binhluan()
{
    $sql = "SELECT * FROM binhluan ORDER BY idbl DESC";
    return pdo_query($sql);
}

function update_binhluan_trangthai($idbl, $trangthai)
{
    $sql = "UPDATE binhluan SET trangthai = ? WHERE idbl = ?";
    pdo_execute($sql, [$trangthai, $idbl]);
}
?>