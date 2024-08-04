<?php
include "../model/pdo.php";
include "../model/admin/baiviet.php";
include "../model/admin/chucvu.php";
include "../model/admin/danhmuc.php";
include "../model/admin/sanpham.php";
include "../model/admin/binhluan.php";
include "../model/admin/hoadon.php";
include "../model/admin/lienhe.php";
include "../model/admin/nguoidung.php";
include "../model/admin/thongke.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        // hiển thị trang chủ của admin
        case 'home':
            $Sum_total = Sum_total();
            $count_bill = count_bill();
            $count_account = count_account();
            $loadAll_bill_home = loadAll_bill_home(0);

            include "home/trangchu.php";
            break;


        // Hiển thị danh sách danh mục
        case 'listdm':
            $list_danh_muc = loadall_danh_muc();
            include "./danhmuc/list.php";
            break;

        // xóa danh mục
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                // echo "<script>";
                // echo "alert('Nhấn ok để xóa');";
                // echo "</script>";
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
                // echo "<script>";
                // echo "alert('Nhấn ok để xóa');";
                // echo "</script>";
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

            //phần bình luận
            case 'listbl':
                $list_binhluan = loadall_binhluan();
                include "./binhluan/list.php";
                break;
            // Hiển thị thông tin khách hàng
            case 'listnd':
                $listnguoidung = loadall_nguoidung();
                include "../admin/user/list.php";
                break;
            // phân quyền người dùng
            case 'suand':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                }
                //$listnguoidung = loadall_nguoidung();
                $list_chuc_vu = loadall_chucvu();
                $nguoidung = loadone_nguoidung($id);
                include "user/update.php";
                break;
            // update người dùng
             case 'updatend':
                if (isset($_POST["sua"])) {
                $id = $_POST["id"];
                $role = $_POST['role'];
                 $trangthai = $_POST['status'];
                 update_user($id, $role, $trangthai);
                }
        
                $listnguoidung = loadall_nguoidung();
                include "user/list.php";
                break;
         // xóa người dùng
         case 'xoand':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete_user($id);
            }
            $listnguoidung = loadall_nguoidung();
            include "user/list.php";
            break;
        // Thêm người dùng
        case 'formaddnd':
            $list_chuc_vu = loadall_chucvu();
            $listnguoidung = loadall_nguoidung();
            include "user/add.php";
            break;
        case 'addnd':
            if (isset($_POST["themnguoidung"])) {
                $tendangnhap = $_POST['tendangnhap'];
                $matkhau = $_POST['matkhau'];
                $hoten = $_POST['hoten'];
                $ngaysinh = $_POST['ngaysinh'];
                $sodienthoai = $_POST['sodienthoai'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $role = $_POST['role'];
                insert_user($tendangnhap, $matkhau, $hoten, $ngaysinh, $sodienthoai, $email, $diachi, $role);
            }
            $listnguoidung = loadall_nguoidung();
            include "user/list.php";
            break;
            
            // Phần thống kê
            case 'listthongke':
                $date = [];
                $doanhthu = [];
                $luotmua = [];
                $data = [];
                $statistical = statistical('2023-12-1', '2023-12-31');
                if (isset($_POST['loc'])) {
                    $statistical = statistical($_POST['from'], $_POST['to']);
    
                }
                foreach ($statistical as $key => $value) {
                    if ($value['revenue'] == null) {
                        $statistical[$key]['revenue'] = 0;
                    }
    
                }
                $date = array_column($statistical, 'date');
                $doanhthu = array_column($statistical, 'revenue');
                $luotmua = array_column($statistical, 'num_bil');
    
                $data['date'] = $date;
                $data['doanhthu'] = $doanhthu;
                $data['luotmua'] = $luotmua;
    
                $data = json_encode($data);
                // echo "<pre>";
                // print_r($data);
    
                // $Sum_total_by = Sum_total_by();
                include "Thongke/thongkedoanhthu.php";
                break;


          // Hiển thị tất cả đơn hàng
          case 'listhd':
            $list_hoa_don = loadAllDonHang();
            include "hoadon/list.php";
            break;

            // phần chi tiết đơn hàng
            case 'listhdct':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                }
                $one_hoa_don = loadOne_hoa_don($id);
                $list_hoa_don_ct = loadAll_hoa_don_ct($id);
                include "hoadon/hoadonct.php";
                break;

                // cập nhật đơn hàng
                case 'suahd':
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $one_hoa_don = loadOne_hoa_don($id);
                    }
                    include "hoadon/sua.php";
                    break;
                
                    case 'updatetrangthai';
                        if (isset($_POST["sua"]) && ($_POST["sua"])) {
                            $status = $_POST['status'];
                            $id = $_POST['id'];
                            update_hoa_don($id, $status);
                        }
                        $list_hoa_don = loadAllDonHang();
                        include "hoadon/list.php";
                        break;
    
               // xóa hóa đơn
            case 'xoahd':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $id = $_GET['id'];
                    delete_hoa_don($id);
                }
                $list_hoa_don = loadAllDonHang();
                include "./hoadon/list.php";
                break;
         
            // phần chức vụ
            //Hiển thị tất cả chức vụ
            case 'listcv':
                $list_chuc_vu = loadAll_chuc_vu();
                include "chucvu/list.php";
                break;
            // fom thêm mới chức vụ
            case 'formaddcv':
                include "chucvu/add.php";
                break;
            
            // thêm mới chức vụ
            case 'addcv':
                if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $tencv = $_POST["tencv"];
                $mota = $_POST["mota"];
                insert_chuc_vu($tencv, $mota);
                }
                $list_chuc_vu = loadAll_chuc_vu();
                include "chucvu/list.php";
                break;

            // sửa chức vụ
            case 'suacv':
                if (isset($_GET['id'])) {
                $id = $_GET['id'];
                 $one_chuc_vu = loadOne_chuc_vu($id);
                }
               $list_chuc_vu = loadAll_chuc_vu();
                 include "chucvu/sua.php";
                break;
            // update chức vụ
            case 'updatecv';
                if (isset($_POST["sua"]) && ($_POST["sua"])) {
                    $id = $_POST['id'];
                    $tencv = $_POST['tencv'];
                    $mota = $_POST['mota'];
                    $trangthai = $_POST['trangthai'];
                    update_chuc_vu($id, $tencv, $mota, $trangthai);
                    }
                    $list_chuc_vu = loadAll_chuc_vu();
                include "chucvu/list.php";
                break;

            // xóa chức vụ
            case 'xoacv':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_chuc_vu($id);
                 }
                 $list_chuc_vu = loadAll_chuc_vu();
                include "chucvu/list.php";
                break;
           
    // Xóa bình luận
          case "xoabinhluan":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $idkhachhang = $_GET['id'];
                delete_binhluan($idkhachhang);
            }
            $list_binhluan = loadall_binhluan();
            include "./binhluan/list.php";
            break;

        // Phần bài viết
        // Hiển thị tất cả bài viết
        case 'listbv':
            $list_bai_viet = loadAll_bai_viet();
            include "baiviet/list.php";
            break;

        // Sửa bài viết
        case 'suabv':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $one_bai_viet = loadOne_bai_viet($id);
            }
            include "baiviet/sua.php";
            break;

        // update bài viết
        case 'updatebv';
            if (isset($_POST["sua"]) && ($_POST["sua"])) {
                $tieude = $_POST['tieude'];
                $noidung = $_POST['noidung'];
                $ngaydang = $_POST['ngaydang'];
                $trangthai = $_POST['trangthai'];
                $id = $_POST['id'];
                update_bai_viet($id, $tieude, $noidung, $ngaydang, $trangthai);
            }
            $list_bai_viet = loadAll_bai_viet();
            include "baiviet/list.php";
            break;

        // xóa bài viết
        case 'xoabv':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_bai_viet($id);
            }
            $list_bai_viet = loadAll_bai_viet();
            include "baiviet/list.php";
            break;

        // fom thêm mới bài viết
        case 'formaddbv':
            include "baiviet/add.php";
            break;

        // thêm mới bài viết
        case 'addbv':
            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $tieude = $_POST["tieude"];
                $noidung = $_POST["noidung"];
                $ngay_dang = $_POST("ngaydang");
                insert_bai_viet($tieude, $noidung, $ngay_dang);
            }
            $list_bai_viet = loadAll_bai_viet();
            include "baiviet/list.php";
            break;
        default:
            # code...
            break;

    }
}
?>