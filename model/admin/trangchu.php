<!-- 
// Hàm lấy tổng số đơn hàng
function load_count_bill()
{
    // SQL truy vấn để đếm số lượng đơn hàng
    $sql = "SELECT COUNT(*) AS count FROM don_hang";
    // Thực thi truy vấn và trả về kết quả
    return pdo_query($sql);
}

// Hàm lấy tổng số tài khoản
function load_count_account()
{
    // SQL truy vấn để đếm số lượng tài khoản
    $sql = "SELECT COUNT(*) AS count FROM tai_khoan";
    // Thực thi truy vấn và trả về kết quả
    return pdo_query($sql);
}

// Hàm lấy tổng doanh thu
function load_sum_total()
{
    // SQL truy vấn để tính tổng doanh thu từ bảng đơn hàng
    $sql = "SELECT SUM(tong_tien) AS doanh_thu FROM don_hang";
    // Thực thi truy vấn và trả về kết quả
    return pdo_query($sql);
}

//  hàm này để lấy các đơn hàng gần đây
function load_all_bill_home()
{
    // SQL truy vấn để lấy các đơn hàng gần đây
    $sql = "SELECT * FROM don_hang ORDER BY ngay_dat_hang DESC LIMIT 10";
    // Thực thi truy vấn và trả về kết quả
    return pdo_query($sql);
}
?> -->