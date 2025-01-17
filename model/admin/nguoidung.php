<?php
// load tất cả người dùng
function loadall_nguoidung (){
    $sql = "SELECT tai_khoan.*, chuc_vu.ten_chuc_vu FROM tai_khoan join chuc_vu on tai_khoan.chuc_vu = chuc_vu.id";
    $listnguoidung = pdo_query($sql);
    return $listnguoidung;
}
// load người 1 người dùng theo id
function loadone_nguoidung ($id){
    $sql = "SELECT *FROM tai_khoan WHERE id = '$id'";
    $nguoidung = pdo_query_one($sql);
    return $nguoidung;
}
// load chức vụ của người dùng
function loadall_chucvu (){
    $sql = "SELECT * FROM chuc_vu ";
    $listchucvu = pdo_query($sql);
    return $listchucvu;
}
// update trạng thái người dùng
function update_user($id, $role, $trangthai)    {
    $sql = "UPDATE tai_khoan SET chuc_vu = '$role', trang_thai = '$trangthai'   WHERE id = '$id' ";
    pdo_execute($sql);
}
//Xóa người dùng
function delete_user ($id){
    $sql = "DELETE FROM tai_khoan WHERE id = '$id'";
    pdo_execute($sql);
}
// Inser người dùng
function insert_user ( $tendangnhap,$matkhau,$hoten,$ngaysinh,$sodienthoai,$email,$diachi,$role){
    $sql =  "INSERT INTO tai_khoan (ten_dang_nhap ,mat_khau ,ho_ten ,ngay_sinh ,so_dien_thoai ,email ,dia_chi,chuc_vu)
     VALUES ('$tendangnhap' , '$matkhau' , '$hoten' , '$ngaysinh' , '$sodienthoai' , '$email' , '$diachi', '$role' )";
        pdo_execute($sql);
    }
// check tài khoản mật khẩu của người dùng
function checkuser ($tendangnhap , $matkhau){
    $sql =  "SELECT * FROM tai_khoan WHERE ten_dang_nhap = '$tendangnhap' AND mat_khau = '$matkhau'  ";
    $a=pdo_query_one($sql);
    return $a;
}
?>