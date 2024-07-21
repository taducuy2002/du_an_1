<?php
function inser_user($tendangnhap, $matkhau, $hoten, $ngaysinh, $sodienthoai, $email, $diachi, $chucvu){
    $sql = "INSERT INTO `tai_khoan` (`id`, `ten_dang_nhap`, `mat_khau`, `ho_ten`, `ngay_sinh`, `so_dien_thoai`, `email`, `dia_chi`, `chuc_vu`, `trang_thai`) 
    VALUES (NULL, '$tendangnhap', '$matkhau', '$hoten', '$ngaysinh', '$sodienthoai', '$email', '$diachi', '$chucvu')";
    pdo_execute($sql);
}
?>