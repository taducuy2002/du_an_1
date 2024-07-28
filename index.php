<?php
include "view/header.php";
include "model/pdo.php";
include "golobal.php";
include "model/client/client.php";
include "golobal.php";

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
            include "view/xemsanpham/allsanpham.php";
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
            include "view/xemsanpham/sanpham_dm.php";
        case "spchitiet":
            if(isset($_GET['idsp'])){
                $id = $_GET['idsp'];
                $loadAll_pro = get_product_details($id);
                $onesp= loadone_sanpham($id);
                extract($onesp);
                include "view/xemsanpham/sanphamct.php";
            }
            break;
        // phần giỏ hàng
        case "giohang":
            include "./view/quanlygiohang/giohang.php";
            break;
        // thêm sản phẩm vào giỏ hàng
        case 'addtocart':
            case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $img = $_POST['img'];
                    $price = $_POST['price'];
                    $soluong = 1;
                    $ttien=$soluong*$price;
                    $spadd=[$id,$name,$img, $price,$soluong ,$ttien];
                    array_push($_SESSION['mycart'],$spadd);

                }
                include "./view/quanlygiohang/giohang.php";
                break;

        default:
        include "view/home.php";
            break;

    }
}else{
    include "view/home.php";
}
include "view/footer.php";
?>
