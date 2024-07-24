<?php
include "../../model/pdo.php";
include "../../model/adminmodel/baiviet.php";
include "../../model/adminmodel/binhluan.php";
include "../../model/adminmodel/chucvu.php";
include "../../model/adminmodel/danhmuc.php";
include "../../model/adminmodel/sanpham.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {

        // Hiển thị danh sách danh mục
        case 'listdm':
            $list_danh_muc = loadall_danh_muc();
            include "../../view/admin/layout/danhmuc/list.php";
            break;

        // xóa danh mục
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_danh_muc($id);
            }
            $list_danh_muc = loadall_danh_muc();
            include "../../view/admin/layout/danhmuc/list.php";
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
                    $target_dir = "../../img/";
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
            include "../../view/admin/layout/danhmuc/list.php";
            break;

        // sửa danh mục
        case 'suadm':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $loadone_danh_muc = loadOne_danh_muc($id);
            }
            include "../../view/admin/layout/danhmuc/sua.php";
            break;

        // them mới danh mục
        case 'themdm':
            include "../../view/admin/layout/danhmuc/add.php";
            break;
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tendm = $_POST['tendm'];
                $mo_ta = $_POST['mota'];
                $image = $_FILES['img'];

                if (isset($image)) {
                    // thư mục chứa ảnh sau khi upload
                    $target_dir = "../../img/";
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
            include "../../view/admin/layout/danhmuc/list.php";
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
            include "../../view/admin/layout/sanpham/list.php";
            break;

        // xóa sản phẩm
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_sanpham($id);
            }
            $list_sanpham = loadall_sanpham();
            include "../../view/admin/layout/sanpham/list.php";
            break;
        // thêm mơi sản phẩm
        case 'themsp':
            $list_danhmuc = loadall_danh_muc();
            include "../../view/admin/layout/sanpham/add.php";
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
                    $target_dir = "../../img/";
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
            include "../../view/admin/layout/sanpham/list.php";
            break;
        // Sửa sản phẩm
        case 'suasp':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $loadone_sanpham = loadone_sanpham($id);
                $list_danh_muc = loadall_danh_muc();
            }
            include '../../view/admin/layout/sanpham/sua.php';
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
                    $target_dir = "../../img/";
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
            include '../../view/admin/layout/sanpham/list.php';
            break;
        case 'dsbl':
            $listbinhluan = loadall_binhluan();
            include "../../view/admin/layout/binhluan/list.php";
            break;

        // Xóa bình luận
        case 'xoabl':
            if (isset($_GET['idbl']) && ($_GET['idbl'] > 0)) {
                delete_binhluan($_GET['idbl']);
            }
            $listbinhluan = loadall_binhluan();
            include "../../view/admin/layout/binhluan/list.php";
            break;
        default:
            # code...
            break;

    }
}
?>