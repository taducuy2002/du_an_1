<?php
include "model/pdo.php";
include "view/client/golobal.php";
include "model/clientmodel/client.php";
include "view/client/layout/header.php";
$loadsp_dm = loadAll_danhmuc();
$listsp = loadAll_sanpham_home();
$spnew = loadAll_sanpham_top10();
$spyt = loadAll_sanpham_yeuthich_top10();
if(!isset($_SESSION['mycart'])){
    $_SESSION['mycart'] = [];
}
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        // phần sản phẩm
        // load tất cả sản phẩm
         case 'allsanpham':
            $listsp = loadAll_sanpham('', 0);
            include "view/client/layout/xemsanpham/allsanpham.php";
            break;
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
            $listsp = loadAll_san_pham($kyw, $iddm);
            $tendm= load_ten_danhmuc($iddm);
            include "view/client/layout/xemsanpham/sanpham_dm.php";
            break;
        case "spchitiet":
            if(isset($_GET['idsp'])){
                $id = $_GET['idsp'];
                $loadAll_pro = get_product_details($id);
                $onesp= loadone_sanpham($id);
                extract($onesp);
                include "view/client/layout/xemsanpham/sanphamct.php";
            }
            break;
            /// Giỏ hàng
            case "addtocart":
                if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                    $id = $_POST["id"];
                $name = $_POST["name"];
                $img = $_POST["img"];
                $gia = $_POST["price"];
                if (isset($_POST['soluong'])) {
                    $soluong = $_POST['soluong'];
                } else {
                    $soluong = 1;
                }
                $tinhtien = $soluong * $gia;
                array_push($_SESSION['mycart'], $spadd); // Thêm sản phẩm vào giỏ hàng
            }
            include "view/client/layout/quanlygiohang/giohang.php"; // Hiển thị lại trang giỏ hàng
            break;

        default:
            # code...
            break;
    }
}else{
    include "../../view/client/layout/home.php";
    include "../../view/client/layout/footer.php";
}
?>