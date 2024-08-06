
<?php
// Hàm lấy tất cả đơn hàng
function loadAllDonHang()
{
    {
        $sql = "SELECT * FROM hoa_don order by id desc";
        $list = pdo_query($sql);
        return $list;
    }
}

// Hàm lấy đơn hàng theo ID
function layDonHangTheoId($id)
{
    $sql = "SELECT * FROM don_hang WHERE id = ?";
    return pdo_query_one($sql, $id);
}

// hàm sửa hóa đơn theo id
function update_hoa_don($id, $status)
{
    $sql = "UPDATE hoa_don SET trang_thai = '$status' Where id ='$id'";
    pdo_execute($sql);
}

// Hàm xóa đơn hàng
function delete_hoa_don($id){
    $sql = "DELETE FROM hoa_don Where id ='$id'";
    pdo_execute($sql);
}

function loadAll_bill_home($id_User) {

    $sql = "select * from hoa_don where 1";
    if($id_User > 0)
        $sql .= " and id_nguoi_nhan = ".$id_User;

    $sql .= " order by id desc";
    $sql .= " limit 0,5";
    return pdo_query($sql);
}
// load 1 hóa đơn theo id
function loadOne_hoa_don($id)
{
    $sql = "SELECT * FROM hoa_don where id='$id' ";
    $listOne = pdo_query_one($sql);
    return $listOne;
}
// load hóa đơn chi tiết
function loadAll_hoa_don_ct($id)
{
    $sql = "SELECT hoa_don_chi_tiet.*, hoa_don.ten_nguoi_nhan, hoa_don.email_nguoi_nhan, hoa_don.sdt_nguoi_nhan, hoa_don.dia_chi_nguoi_nhan
    FROM hoa_don_chi_tiet join hoa_don on hoa_don_chi_tiet.id_don_hang = hoa_don.id Where hoa_don_chi_tiet.id_don_hang = '$id' order by hoa_don_chi_tiet.id desc";
    $list = pdo_query($sql);
    return $list;
}
?>
