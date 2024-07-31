<?php
// session_start();
// ob_start();

include "../model/pdo.php";
include "../model/admin/baiviet.php";
include "../model/admin/danhmuc.php";
include "../model/admin/sanpham.php";
include "../model/admin/binhluan.php";
include "../model/admin/donhang.php";
include "../model/admin/taikhoan.php";
include "../model/admin/chucvu.php";
include "header.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {

        // Hiển thị danh sách danh mục
        case 'listdm':
            $list_danh_muc = loadall_danh_muc();
            include "./danhmuc/list.php";
            break;

        // xóa danh mục
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_danh_muc($id);
            }
            $list_danh_muc = loadall_danh_muc();
            include "danhmuc/list.php";
            break;

        // Update cho danh mục
        case 'updatedm':

            if (isset($_POST['sua']) && ($_POST['sua'])) {
                $id = $_POST['id'];
                $tendm = $_POST['tendm'];
                $mo_ta = $_POST['mota'];
                $trangthai = $_POST['trangthai'];
                $image = $_FILES['img'];

                if (isset($image)) {
                    // thư mục chứa ảnh sau khi upload
                    $target_dir = "../img/";
                    // lấy ra tên của ảnh đẩy từ form
                    $anh = $image['name'];
                    // tạo 1 đường dẫn ảnh đầy đủ trên máy chủ
                    $target_file = $target_dir . $anh;
                    // Di chuyển ảnh đến thư mục đã tạo
                    move_uploaded_file($image['tmp_name'], $target_file);
                }
                update_danh_muc($id, $tendm, $mo_ta, $anh, $trangthai);
            }
            $list_danh_muc = loadall_danh_muc();
            include "danhmuc/list.php";
            break;

        // sửa danh mục
        case 'suadm':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $loadone_danh_muc = loadOne_danh_muc($id);
            }
            include "danhmuc/sua.php";
            break;

        // them mới danh mục
        case 'themdm':
            include "danhmuc/add.php";
            break;
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tendm = $_POST['tendm'];
                $mo_ta = $_POST['mota'];
                $image = $_FILES['img'];

                if (isset($image)) {
                    // thư mục chứa ảnh sau khi upload
                    $target_dir = "../img/";
                    // lấy ra tên của ảnh đẩy từ form
                    $anh = $image['name'];
                    // tạo 1 đường dẫn ảnh đầy đủ trên máy chủ
                    $target_file = $target_dir . $anh;
                    // Di chuyển ảnh đến thư mục đã tạo
                    move_uploaded_file($image['tmp_name'], $target_file);
                }
                insert_danh_muc($tendm, $mo_ta, $anh);
            }
            $list_danh_muc = loadall_danh_muc();
            include "danhmuc/list.php";
            break;

        //admin phần sản phẩm
        // Hiển thị danh sách sản phẩm
        case 'listsp':
            if (isset($_POST['btn']) && ($_POST['btn'])) {
                $kyw = $_POST['keyword'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $list_sanpham = loadAll_san_pham($kyw, $iddm);
            $list_danhmuc = loadall_danh_muc();
            include "sanpham/list.php";
            break;

        // xóa sản phẩm
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_sanpham($id);
            }
            $list_sanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
        // thêm mơi sản phẩm
        case 'themsp':
            $list_danhmuc = loadall_danh_muc();
            include "sanpham/add.php";
            break;
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tensp = $_POST['tensp'];
                $gia = $_POST['gia'];
                $mo_ta = $_POST['mota'];
                $image = $_FILES['img'];
                $id_danh_muc = $_POST['iddm'];

                if (isset($image)) {
                    // thư mục chứa ảnh sau khi upload
                    $target_dir = "../img/";
                    // lấy ra tên của ảnh đẩy từ form
                    $anh = $image['name'];
                    // tạo 1 đường dẫn ảnh đầy đủ trên máy chủ
                    $target_file = $target_dir . $anh;
                    // Di chuyển ảnh đến thư mục đã tạo
                    move_uploaded_file($image['tmp_name'], $target_file);
                }
                insert_sanpham($tensp, $mo_ta, $anh, $gia, $id_danh_muc);
            }
            $list_sanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
        // Sửa sản phẩm
        case 'suasp':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $loadone_sanpham = loadone_sanpham($id);
                $list_danh_muc = loadall_danh_muc();
            }
            include 'sanpham/sua.php';
            break;
        case 'updatesp':
            if (isset($_POST["sua"]) && ($_POST["sua"])) {
                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $gia = $_POST['gia'];
                $mo_ta = $_POST['mota'];
                $image = $_FILES['img'];
                $id_danh_muc = $_POST['iddm'];

                if (isset($image)) {
                    // thư mục chứa ảnh sau khi upload
                    $target_dir = "../img/";
                    // lấy ra tên của ảnh đẩy từ form
                    $anh = $image['name'];
                    // tạo 1 đường dẫn ảnh đầy đủ trên máy chủ
                    $target_file = $target_dir . $anh;
                    // Di chuyển ảnh đến thư mục đã tạo
                    move_uploaded_file($image['tmp_name'], $target_file);
                }
                update_sanpham($id, $tensp, $gia, $anh, $mo_ta, $id_danh_muc);
            }
            $list_sanpham = loadall_sanpham();
            include 'sanpham/list.php';
            break;
        case 'listbl':
            $list_binhluan = loadall_binhluan();
            include "./binhluan/list.php";
            break;

        // Cập nhật trạng thái bình luận
        case 'updateTrangThaiBL':
            if (isset($_GET['id']) && isset($_GET['trangthai'])) {
                $id = $_GET['id'];
                $trangthai = $_GET['trangthai'];
                update_binhluan_trangthai($id, $trangthai);
            }
            $list_binhluan = loadall_binhluan();
            include "./binhluan/list.php";
            break;

        // Quản lý đơn hàng
        case 'list_dh':
            $listOrders = loadAllDonHang();
            include "./donhang/list.php";
            break;

        case 'chiTietDonHang':
            // Kiểm tra xem có id trong GET và id có hợp lệ không
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];

                // Lấy thông tin đơn hàng
                $one_hoa_don = layDonHangTheoId($id);

                // Lấy chi tiết đơn hàng
                $list_hoa_don_ct = layChiTietDonHang($id);

                // Kiểm tra xem thông tin đơn hàng và chi tiết đơn hàng có hợp lệ không
                if ($one_hoa_don && $list_hoa_don_ct) {
                    // Nếu dữ liệu hợp lệ, bao gồm tệp chi tiết đơn hàng
                    include "./donhang/ctdonhang.php";
                } else {
                    // Nếu không tìm thấy đơn hàng hoặc chi tiết đơn hàng, thông báo lỗi
                    echo "<p>Không tìm thấy đơn hàng hoặc chi tiết đơn hàng.</p>";
                }
            } else {
                // Nếu id không hợp lệ, thông báo lỗi
                echo "<p>Id đơn hàng không hợp lệ.</p>";
            }
            break;

        case 'capNhatDonHang':
            // Lấy ID đơn hàng 
            $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

            // load thông tin đơn hàng dựa trên ID
            $one_hoa_don = layDonHangTheoId($id);
            include "./donhang/sua.php";
            break;

        case 'xuLyCapNhatDonHang':
            // Kiểm tra nếu yêu cầu là POST và có dữ liệu cần thiết
            if (isset($_POST['trangthai']) && isset($_POST['id'])) {
                $id = intval($_POST['id']);//intval: chuyển đổi giá trị sang kiểu số nguyên
                $trangthai = intval($_POST['trangthai']);

                // Cập nhật trạng thái đơn hàng
                capNhatTrangThaiDonHang($id, $trangthai);

                // Thông báo thành công và quay lại trang danh sách đơn hàng
                $message = 'Cập nhật trạng thái thành công!';
            }

            // load danh sách đơn hàng để hiển thị
            $listOrders = loadAllDonHang();
            include "./donhang/list.php";
            break;


        case 'xoaDonHang':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                xoaDonHang($id);
            }
            $listOrders = loadAllDonHang();
            include "./donhang/list.php";
            break;

        // Quản lý tài khoản
        case 'listtk':
            $list_tai_khoan = loadall_tai_khoan();
            include "../admin/taikhoan/list.php";
            break;

        // Cập nhật thông tin tài khoản
        case 'updatetk':
            if (isset($_POST['sua']) && $_POST['sua']) {
                $id = $_POST['id'];
                $chuc_vu = isset($_POST['chuc_vu']) ? $_POST['chuc_vu'] : '';
                $trang_thai = isset($_POST['trang_thai']) ? $_POST['trang_thai'] : '';

                // Cập nhật thông tin tài khoản
                update_tai_khoan($id, $chuc_vu, $trang_thai);

                echo "<script>
                        window.location.href = 'index.php?act=listtk';
                      </script>";
                exit;
            }
            break;


        // Sửa thông tin tài khoản
        case 'suatk':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $taikhoan = loadOne_tai_khoan($id); // Hàm lấy thông tin tài khoản theo ID
                include "./taikhoan/edit.php";
            }
            break;


        // // Thêm mới tài khoản
        // case 'themtk':
        //     include "../admin/taikhoan/add.php";
        //     break;

        // case 'addtk':
        //     if (isset($_POST['themmoi']) && $_POST['themmoi']) {
        //         $ten_dang_nhap = isset($_POST['ten_dang_nhap']) ? $_POST['ten_dang_nhap'] : '';
        //         $mat_khau = isset($_POST['mat_khau']) ? $_POST['mat_khau'] : '';
        //         $ho_ten = isset($_POST['ho_ten']) ? $_POST['ho_ten'] : '';
        //         $ngay_sinh = isset($_POST['ngay_sinh']) ? $_POST['ngay_sinh'] : '';
        //         $so_dien_thoai = isset($_POST['so_dien_thoai']) ? $_POST['so_dien_thoai'] : '';
        //         $email = isset($_POST['email']) ? $_POST['email'] : '';
        //         $dia_chi = isset($_POST['dia_chi']) ? $_POST['dia_chi'] : '';
        //         $chuc_vu = isset($_POST['chuc_vu']) ? $_POST['chuc_vu'] : '';
        //         $trang_thai = isset($_POST['trang_thai']) ? $_POST['trang_thai'] : '';

        //         // Thêm mới tài khoản
        //         insert_tai_khoan($ten_dang_nhap, $mat_khau, $ho_ten, $ngay_sinh, $so_dien_thoai, $email, $dia_chi, $chuc_vu, $trang_thai);
        //     }
        //     $list_tai_khoan = loadall_tai_khoan();
        //     include "../admin/taikhoan/list.php";
        //     break;

        // Hiển thị danh sách chức vụ
        case 'listcv':
            $list_chuc_vu = load_all_chuc_vu();
            include './chucvu/list.php';
            break;

        // Hiển thị form sửa chức vụ
        case 'suacv':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $chucvu = load_one_chuc_vu($id); 
                include 'views/chucvu/edit.php';
            }
            break;

        // Cập nhật chức vụ
        case 'updatecv':
            if (isset($_POST['sua'])) {
                $id = $_POST['id'];
                $ten_chuc_vu = $_POST['ten_chuc_vu'];
                $mo_ta = $_POST['mo_ta'];
                $trang_thai = $_POST['trang_thai'];
                update_chuc_vu($id, $ten_chuc_vu, $mo_ta, $trang_thai);
                echo "<script>
                        alert('Cập nhật chức vụ thành công!');
                        window.location.href = 'index.php?act=listcv';
                      </script>";
                exit();
            }
            break;


        // Xóa chức vụ
        case 'xoacv':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                delete_chuc_vu($id);
                echo "<script>
                        window.location.href = 'index.php?act=listcv';
                      </script>";
                exit;
            }
            break;


        // Hiển thị form thêm chức vụ
        case 'formaddcv':
            include "./chucvu/add.php";
            break;

        // Thêm chức vụ
        case 'addcv':
            if (isset($_POST['themmoi'])) {
                $ten_chuc_vu = $_POST['tencv'];
                $mo_ta = $_POST['mota'];
                $trang_thai = 0; // Mặc định là hoạt động khi thêm mới
                insert_chuc_vu($ten_chuc_vu, $mo_ta, $trang_thai);
                echo "<script>
                        alert('Thêm chức vụ thành công!');
                        window.location.href = 'index.php?act=listcv';
                      </script>";
                exit();
            }
            break;



        default:
            # code...
            break;

    }
}
?>