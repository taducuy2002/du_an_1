<?php
session_start();
include "model/pdo.php";
include "view/client/global.php";
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
        case "spchitiet":
            if(isset($_GET['idsp'])){
                $id = $_GET['idsp'];
                $loadAll_pro = get_product_details($id);
                $onesp= loadone_sanpham($id);
                extract($onesp);
                include "view/client/layout/xemsanpham/sanphamct.php";
            }
            break;

        default:
            # code...
            break;

    }
}else{
    include "view/client/layout/home.php";
    include "view/client/layout/footer.php";
}

?>