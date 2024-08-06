<?php
// Hàm lấy tất cả đơn hàng
function loadAllDonHang()
{
    $sql = "SELECT * FROM don_hang ORDER BY id DESC";
    return pdo_query($sql);
}

// Hàm lấy đơn hàng theo ID
function layDonHangTheoId($id)
{
    $sql = "SELECT * FROM don_hang WHERE id = ?";
    return pdo_query_one($sql, $id);
}

// Hàm cập nhật trạng thái đơn hàng
function capNhatTrangThaiDonHang($id, $trangThai)
{
    $sql = "UPDATE don_hang SET trang_thai = ? WHERE id = ?";
    pdo_execute($sql, $trangThai, $id);
}

// Hàm xóa đơn hàng
function xoaDonHang($id)
{
    $sql = "DELETE FROM don_hang WHERE id = ?";
    pdo_execute($sql, $id);
}

function layChiTietDonHang($id)
{
    $sql = "SELECT * FROM chi_tiet_don_hang WHERE id_don_hang = ?";
    return pdo_query($sql, $id);
}

?>