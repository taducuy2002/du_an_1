<?php
// Lấy tất cả tài khoản
function loadall_tai_khoan()
{
    $sql = "SELECT * FROM tai_khoan ORDER BY id DESC";
    $list = pdo_query($sql);
    return $list;
}

// Lấy một tài khoản theo ID
function loadone_tai_khoan($id)
{
    $sql = "SELECT * FROM tai_khoan WHERE id = $id";
    $user = pdo_query_one($sql);
    return $user;
}

// Thêm mới tài khoản
// function insert_tai_khoan($ten_dang_nhap, $mat_khau, $ho_ten, $ngay_sinh, $so_dien_thoai, $email, $dia_chi, $chuc_vu, $trang_thai)
// {
//     $sql = "INSERT INTO tai_khoan (ten_dang_nhap, mat_khau, ho_ten, ngay_sinh, so_dien_thoai, email, dia_chi, chuc_vu, trang_thai) 
//             VALUES ('$ten_dang_nhap', '$mat_khau', '$ho_ten', '$ngay_sinh', '$so_dien_thoai', '$email', '$dia_chi', '$chuc_vu', '$trang_thai')";
//     pdo_execute($sql);
// }

// Cập nhật thông tin tài khoản
function update_tai_khoan($id, $chuc_vu, $trang_thai)
{
    $sql = "UPDATE tai_khoan SET vai_tro = '$chuc_vu', trang_thai = '$trang_thai' WHERE id = $id";
    pdo_execute($sql);
}

// // Xóa tài khoản
// function delete_tai_khoan($id)
// {
//     $sql = "DELETE FROM tai_khoan WHERE id = $id";
//     pdo_execute($sql);
// }
?>