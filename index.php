<?php
session_start();
include "view/header.php";
include "model/pdo.php";
include "golobal.php";
include "model/client/client.php";

$loadsp_dm = loadAll_danhmuc();
$listsp = loadAll_sanpham_home();
$spnew = loadAll_sanpham_moi();
$userID = $_SESSION['tai_khoan']['id'] ?? 0;
// $spyt = loadAll_sanpham_yeuthich_top10();
// $sptop = loadAll_sanpham_moitop();
if(!isset($_SESSION['mycart'])){
    $_SESSION['mycart'] = [];
}
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case "home";
        include "view/home.php";
        break;
        // phần sản phẩm
        // load tất cả sản phẩm
         case 'allsanpham':
            $listsp = loadAll_sanpham('', 0);
            include "view/xemsanpham/allsanpham.php";
            break;
        
            // load sản phẩm theo danh mục
            // kyw là một biến thể để lưu trữ từ khóa mà người dùng nhập vào biểu mẫu khi tìm kiếm
         case "sanpham":
            if(isset($_POST['kyw']) && $_POST['kyw'] !=''){
                $kyw = $_POST['kyw'];
            }else{
                $kyw = '';
            }
            if(isset($_GET['id']) && $_GET['id'] > 0){
                $iddm = $_GET['id'];
            }else{
                $iddm = 0;
            }
            $listsp = loadAll_sanpham($kyw, $iddm);
            $tendm= load_ten_danhmuc($iddm);
            include "view/xemsanpham/sanpham_dm.php";
            
            // phần chi tiết sản phẩm
        case "spchitiet":
            if(isset($_GET['idsp'])&& ($_GET['idsp'])>0){
                $id = $_GET['idsp'];
                $load_product_details = get_product_details($id);
                $onesp= loadone_sanpham($id);
                $load_all_binhluan = loadall_commen($id);
                extract($onesp);
                include "view/xemsanpham/sanphamct.php";
            }
         else {
            $id = "";
            }

             if (isset($_POST['guibinhluan'])) {
                 $productId = $_POST["product_id"];
                 $noidung = $_POST['noidung'];
                 insert_comments($userID, $productId, $noidung);
                 header('Location:' . $_SERVER['HTTP_REFERER']);
    }
            break;
        //// Lọc sản phẩm
        case "locsp":
            if(isset($_POST['btn']) && ($_POST['btn'])){
                $iddm = $_POST['iddm'];
            }
            else{
                $iddm = 0;
            }
            $listsp = loadAll_sanpham('', $iddm);
            include "./view/xemsanpham/allsanpham.php";
            break;
        // phần giỏ hàng
        
        // thêm sản phẩm vào giỏ hàng
            case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $img = $_POST['img'];
                    $price = $_POST['price'];
                    if (isset($_POST['soluong'])) {
                        $soluong = $_POST['soluong'];
                    } else {
                        $soluong = 1;
                    }
                    $ttien=$soluong*$price;
                    $spadd=[$id,$name,$img, $price,$soluong ,$ttien];
                    array_push($_SESSION['mycart'],$spadd); // Thêm sản phẩm vào giỏ hàng

                }
                include "./view/quanlygiohang/giohang.php"; // hiển thị lại giỏ hàng
                break;
            case "delecart":
                if(isset($_GET['idcart'])){
                    array_splice($_SESSION['mycart'], $_GET['idcart'],1);
                }else{
                    $_SESSION['mycart']=[];
                }
                header("location: index.php?act=addtocart");
                break;
            //Phần bài viết
            case "baiviet";
            $dsbv = loadAll_baiviet();
            include "./view/baiviet/baiviet.php";
            break;

            //Phần tài khoản đăng ký
            case "fomdangky":
                include "./view/taikhoan/dangki.php";
                break;
            case "dangky":
                if(isset($_POST['submit']) && $_POST['submit']){
                    $user = $_POST['username'];
                    $password = $_POST['password'];
                    $name = $_POST['hoten'];
                    $ngaysinh = $_POST['ngaysinh'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $diachi = $_POST['diachi'];
                
                    insert_taikhoan($user, $password, $name, $ngaysinh, $phone, $email, $diachi);
                    $thongbao="Đăng ký thành công, xin vui lòng đăng nhập";
                }
               include "./view/taikhoan/dangnhap.php";
                break;
                case "thoat":
                    session_unset();
                    include "./view/home.php";
                    break;
                // Đăng nhập
                case 'dangnhap':
                    if (isset($_POST['submit']) && ($_POST['submit'])) {
                        $user = $_POST['username'];
                        $password = $_POST['password'];
                        $checkuser = check_user($user, $password);
                        if (is_array($checkuser)) {
                            $_SESSION['tai_khoan'] = $checkuser;
                            //$thongbao = 'đăng nhập thành công';
                            header('Location:index.php');
                            // include "index.php";
                        } else {
                            echo $thongbao = 'tài khoản không tồn tại';
                        }
                    }
                    break;
              
                    // sửa tài khoản
                    case 'suatk':
                        if (isset($_POST['suatk']) && ($_POST['suatk'])) {
                            $id = $_POST["id"];
                            $tendangnhap = $_POST['tendangnhap'];
                            $matkhau = $_POST['matkhau'];
                            $hoten = $_POST['hoten'];
                            $ngaysinh = $_POST['ngaysinh'];
                            $sodienthoai = $_POST['sodienthoai'];
                            $email = $_POST['email'];
                            $diachi = $_POST['diachi'];
                            update_user($id, $tendangnhap, $matkhau, $hoten, $ngaysinh, $sodienthoai, $email, $diachi);
                            $_SESSION['tai_khoan'] = check_user($tendangnhap, $matkhau);
                            echo "Cập nhật thành công";
                            header("Location: index.php");
                        }
                        include "view/taikhoan/edit_taikhoan.php";
                        break;
                        case "form":
                            include "./view/taikhoan/myaccount.php";
                            break;

                   //Quên mật khẩu
                   case 'quenmk':
                    if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                        $email = $_POST['email'];
                        $checkemail = Checkemail($email);
                    if(is_array($checkemail)){
                        $thongbao = "Mật khẩu của bạn là:". $checkemail['mat_khau'];
                    }else{
                        $thongbao = "Email này không tồn tại";
                    }
                    }
                    include './view/taikhoan/quenmk.php';
                break;


                    // lấy link
                    case "dangnhap1":
                        include "./view/taikhoan/dangnhap.php";
                        break;
                    
                    // Phần thanh toán
                    case 'thanhtoan':
                        include "./view/quanlygiohang/thanhtoan.php";
                        break;

                //phần đơn hàng
                case 'donhang':
                    $listbill = load_all_bill($_SESSION['tai_khoan']['id']);
                    include "./view/quanlygiohang/donhang.php";
                    break;
                // đơn hàng chi tiết
                case 'dhchitiet':
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                    }
                    $bill=load_one_bill($id);
                    $donhang = loadAll_hoa_don_ct($id);
                    include './view/quanlygiohang/donhangct.php';
                    break;
                // Hủy đơn hàng
                case 'huydonhang':
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        huy_dh($id);
                    }
                    $listbill = load_all_bill($_SESSION['tai_khoan']['id']);
                    include "view/quanlygiohang/donhang.php";
                    break;
                    // phần bill
                    case 'billconfirm':
                        if (isset($_SESSION['tai_khoan'])) {
                            if (isset($_POST['dongydathang']) && $_POST['dongydathang']) {
                                if (isset($_SESSION['tai_khoan'])) {
                                    $iduser = $_SESSION['tai_khoan']['id'];
                                } else {
                                    $iduser = 0;
                                }
                                $name = $_POST['name'];
                                $address = $_POST['address'];
                                $email = $_POST['email'];
                                $phone = $_POST['phone'];
                                $pttt = $_POST['pttt'];
                                date_default_timezone_set("Asia/Ho_Chi_Minh");
                                $ngaydathang = date("Y-m-d H:i:s");
                                $tongdonhang = tongdonhang();
                                $idbill = insert_bill($iduser, $name, $email, $address, $phone, $pttt, $tongdonhang, $ngaydathang);
            
                                //insert into cart : $_SESSION['mycart'] & idbill
            
                                foreach ($_SESSION['mycart'] as $cart) {
                                    insert_cart($cart['0'], $cart['2'], $cart['1'], $cart['3'], $cart['4'], $cart['5'], $idbill);
                                }
            
                                unset($_SESSION['mycart']);
                                header("Location: index.php");
                            }
                            $bill = load_one_bill($idbill);
                        } else {
                            echo "Bạn phải đăng nhập để mua hàng";
                        }
                        break;
                    // Liên hệ
                    case 'lienhe':
                        if (isset($_POST['lienhe']) && ($_POST['lienhe'])) {
                            $tenkhachhang = $_POST["hoten"];
                            $sodienthoai = $_POST["sodienthoai"];
                            $email = $_POST["email"];
                            $noidung = $_POST["noidung"];
                            insert_lienhe($tenkhachhang, $sodienthoai, $email, $noidung);
                            echo  "<script> alert ('Gửi liên hệ thành công'); </script>";
                        }
                        include "view/lienhe/lienhe.php";
                        break;
        default:
        // include "view/home.php";
            break;

    }
}else{
    include "view/home.php";
}
include "view/footer.php";
?>
