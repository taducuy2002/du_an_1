<?php
// Lấy tất cả chức vụ
function load_all_chuc_vu()
{
    $sql = "SELECT * FROM chuc_vu";
    return pdo_query($sql);
}

// Thêm chức vụ mới
function insert_chuc_vu($ten_chuc_vu, $mo_ta, $trang_thai)
{
    $sql = "INSERT INTO chuc_vu (ten_chuc_vu, mo_ta, trang_thai) VALUES (?, ?, ?)";
    pdo_execute($sql, $ten_chuc_vu, $mo_ta, $trang_thai);
}

// Cập nhật chức vụ
function update_chuc_vu($id, $ten_chuc_vu, $mo_ta, $trang_thai)
{
    $sql = "UPDATE chuc_vu SET ten_chuc_vu = ?, mo_ta = ?, trang_thai = ? WHERE id = ?";
    pdo_execute($sql, $ten_chuc_vu, $mo_ta, $trang_thai, $id);
}

// Xóa chức vụ
function delete_chuc_vu($id)
{
    $sql = "DELETE FROM chuc_vu WHERE id = ?";
    pdo_execute($sql, $id);
}

// Lấy một chức vụ theo ID
function load_one_chuc_vu($id)
{
    $sql = "SELECT * FROM chuc_vu WHERE id = ?";
    return pdo_query_one($sql, $id);
}
?>