<?php
function loadAll_sanpham_home()
{
    $sql = "SELECT * FROM san_pham ORDER BY id desc limit 0,9";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadAll_danhmuc()
{
    $sql = "SELECT * FROM danh_muc where 1 order by id desc";
    $listdm = pdo_query($sql);
    return $listdm;
}
function load_ten_danhmuc($iddm){
    if ($iddm > 0) {
        $sql = "SELECT * FROM danh_muc where id = '$iddm'";
        $listdm = pdo_query_one($sql);
        extract($listdm);
        return $ten_danh_muc;
    } else {
        return '';
    }
}
function loadAll_sanpham($kyw, $iddm)
{
    $sql = "SELECT san_pham .*, danh_muc.ten_danh_muc  FROM  san_pham INNER JOIN danh_muc on danh_muc.id=san_pham.id_danh_muc WHERE 1";
    if ($kyw != '') {
        $sql .= " AND ten_san_pham LIKE '%" . $kyw . "%' ";
}
    if ($iddm > 0) {
        $sql .= " AND id_danh_muc = '$iddm' ";
    }
    $sql .= " order by san_pham.id desc";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadAll_sanpham_moi(){
    $sql = "SELECT * FROM san_pham WHERE 1  order by id desc limit 2";
    $listsp = pdo_query($sql);
    return $listsp;
}
// function loadAll_sanpham_yeuthich_top10()
// {
//     $sql = "SELECT * FROM san_pham ORDER BY luot_xem DESC LIMIT 8";
//     $listspyt = pdo_query($sql);
//     return $listspyt;
// }

function loadone_sanpham($id){
    $sql = "SELECT * FROM san_pham WHERE id ='$id'";
    $sp = pdo_query_one($sql);
    return $sp;
}
//Phần bài viết
function loadAll_baiviet(){
    $spl ="SELECT * FROM bai_viet where 1 order by id desc ";
    $listdm = pdo_query($spl);
    return $listdm;
}
// phần tài khoản
function insert_taikhoan($user, $password, $name, $ngaysinh, $phone, $email, $diachi)
{

    $sql = "INSERT INTO tai_khoan ( ten_dang_nhap, mat_khau, ho_ten, ngay_sinh, so_dien_thoai, email, dia_chi)
            VALUES('$user', '$password', '$name', '$ngaysinh', '$phone', '$email', '$diachi')";
    pdo_execute($sql);
}
// check user
function check_user($user, $password)
{
    $sql = "SELECT * FROM tai_khoan Where ten_dang_nhap='" . $user . "' AND mat_khau='" . $password . "' ";
    $tk = pdo_query_one($sql);
    return $tk;
}
//update user
function update_user($id, $tendangnhap, $matkhau, $hoten, $ngaysinh, $sodienthoai, $email, $diachi)
{
    $sql = "UPDATE tai_khoan SET ten_dang_nhap = '$tendangnhap' , mat_khau = '$matkhau' 
    , ho_ten = '$hoten' , ngay_sinh = '$ngaysinh'  , so_dien_thoai = '$sodienthoai' 
    , email = '$email' , dia_chi = '$diachi'    WHERE id = '$id' ";
    pdo_execute($sql);
}
 // quên mật khẩu
 function Checkemail($email){
    $sql="select * from tai_khoan where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
  }
/// phần comment ở chi tiết sản phẩm
function loadall_commen($idproduct){
    $sql = "SELECT
                binh_luan.id_binhluan AS comment_id,
                binh_luan.id_user AS user_id,
                binh_luan.id_sanpham AS product_id,
                binh_luan.content,
                binh_luan.date_comment,
                tai_khoan.id AS user_id,
                tai_khoan.ten_dang_nhap
            FROM
                binh_luan
            INNER JOIN
                tai_khoan ON binh_luan.id_user = tai_khoan.id
           INNER JOIN
               san_pham ON binh_luan.id_sanpham = san_pham.id

            WHERE
                binh_luan.id_sanpham = $idproduct";
return pdo_query($sql);
}
function insert_comments($userId, $productId, $noidung){
    $sql = "INSERT INTO `binh_luan`(`id_user`, `id_sanpham`, `content`) 
                VALUES 
                ('$userId','$productId','$noidung')";
    pdo_execute($sql);
}
//bienthe
function get_product_details($id) {
    $sql = "SELECT size, soluong FROM sanpham_bienthe WHERE id = ?";
    return pdo_query($sql, $id);
}
// phần bill
function load_all_bill($iduser)
{
    $sql = "SELECT * FROM hoa_don Where 1";
    if ($iduser > 0) {
        $sql .= " AND id_nguoi_nhan ='$iduser' ";
    }
    $sql .= " order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
// load hóa đơn theo id
function load_one_bill($id)
{
    $sql = "SELECT * FROM hoa_don Where id='$id' ";
    $bill = pdo_query_one($sql);
    return $bill;
}
// hóa đơn chi tiết
function loadAll_hoa_don_ct($id)
{
    $sql = "SELECT hoa_don_chi_tiet.*, hoa_don.ten_nguoi_nhan, hoa_don.email_nguoi_nhan, hoa_don.sdt_nguoi_nhan, hoa_don.dia_chi_nguoi_nhan, hoa_don.ngay_dat_hang
    FROM hoa_don_chi_tiet join hoa_don on hoa_don_chi_tiet.id_don_hang = hoa_don.id Where hoa_don_chi_tiet.id_don_hang = '$id' order by hoa_don_chi_tiet.id desc";
    $list = pdo_query($sql);
    return $list;
}
// hiển thị thông tin đơn hàng
function load_all_cart_count($idbill)
{
    $sql = "SELECT * FROM hoa_don_chi_tiet Where id_don_hang ='$idbill' ";
    $bill = pdo_query($sql);
    return count($bill);
}
// tổng đơn hàng
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $tong += $cart[5];
    }
    return $tong;
}
// inser hóa đơn
function insert_bill($iduser, $name, $email, $address, $phone, $pttt, $tongdonhang, $ngaydathang)
{
    $sql = "INSERT INTO hoa_don(id_nguoi_nhan, ten_nguoi_nhan, dia_chi_nguoi_nhan, email_nguoi_nhan, sdt_nguoi_nhan, pt_thanh_toan, tong_tien, ngay_dat_hang) VALUES('$iduser', '$name', '$address', '$email',  '$phone', '$pttt', '$tongdonhang', '$ngaydathang')";
    return pdo_execute_return_lastInsertID($sql);
}
// inser hóa đơn chi tiết
    function insert_cart($idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
    {
        $sql = "INSERT INTO hoa_don_chi_tiet(id_san_pham, img_sp, ten_san_pham, gia_san_pham, so_luong, thanh_tien, id_don_hang) VALUES('$idpro','$img', '$name', '$price', '$soluong', '$thanhtien' ,'$idbill')";
        pdo_execute($sql);
    }
// Hiển thị danh sách số lượng và thông tin của sản phẩm khi đặt
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoasp_th = '<th>Thao tác</th>';
    } else {
        $xoasp_th = '';
    }
    echo '
    <table class="table axil-product-table axil-cart-table mb--40">
        <thead>
            <tr>
                <td></td>
                <th scope="col" class="product-thumbnail">Hình ảnh</th>
                <th scope="col" class="product-title">Tên sản phẩm</th>
                <th scope="col" class="product-price">Giá</th>
                <th scope="col" class="product-quantity">Số lượng</th>
                <th scope="col" class="product-subtotal">Thành tiền</th>
               '.$xoasp_th.'
            </tr>
        </thead>';

    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $tong += $cart[5];
        if ($del == 1) {
            $xoa = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a></td>';
        } else {
            $xoa = '';
        }
        echo '<tbody>
        <tr>
            <td></td>
            <td class="product-thumbnail"><img src="' . $hinh . '" alt="Digital Product" style="width:150px;"></a></td>
            <td class="product-title"><a href="single-product.html">' . $cart['1'] . '</a></td>
            <td class="product-price" data-title="Price">' . $cart['3'] . '$</td>
            <td class="product-quantity" data-title="Qty">' . $cart['4'] . '</td>   
            <td class="product-subtotal" data-title="Subtotal">' . $cart['5'] . '$</td>
            ' . $xoa . '
        </tr></tbody>';
        $i += 1;
    }
    echo '
    <tr>    
        <td colspan = "5"><strong>Tổng đơn hàng</strong></td>
        <td colspan = "2"><strong>' . $tong . '$</strong></td>  
    </tr>';
}

// Trạng thái đơn hàng
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Chờ xác nhận";
            break;
        case '1':
            $tt = "Đã xác nhận";
            break;
        case '2':
            $tt = "Đang giao hàng";
            break;
        case '3':
            $tt = "Đã giao hàng";
            break;
        case '4':
            $tt = "Giao hàng thành công";
            break;
        case '5':
            $tt = "Đơn hàng đã hủy";
            break;
        default:
            $tt = "đơn hàng mới";
            break;
    }
    return $tt;
}
// Hủy đơn hàng
function huy_dh($id)
{
    $sql = "UPDATE hoa_don SET trang_thai = 5 WHERE id = '$id' ";
    pdo_execute($sql);
}
// liên hệ
function insert_lienhe($tenkhachhang, $sodienthoai, $email, $noidung)
{

    $sql = "INSERT INTO lien_he (id, ten_khach_hang, so_dien_thoai, email, noi_dung)
            VALUES (NULL, '$tenkhachhang', '$sodienthoai', '$email', '$noidung')";
    pdo_execute($sql);
}
?>