<?php
function insert_binhluan($noidung, $id_user, $id_pro, $ngaybinhluan)
{
    $sql = "INSERT INTO binhluan (noidung, iduser, idpro, ngaybinhluan) VALUES ('$noidung', '$id_user', '$id_pro', '$ngaybinhluan')";
    pdo_execute($sql);
}

function loadall_binhluan()
{
    $sql = "SELECT * FROM binhluan ORDER BY idbl DESC";
    return pdo_query($sql);
}

function delete_binhluan($idbl)
{
    $sql = "DELETE FROM binhluan WHERE idbl = $idbl";
    pdo_execute($sql);
}
?>