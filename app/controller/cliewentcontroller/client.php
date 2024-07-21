<?php
session_start();
include "view/model/pdo.php";
include "view/client/golobal.php";
include "view/model/clientmodel/client.php";
include "view/client/layout/header.php";
include "view/client/layout/home.php";
$listdm = loadAll_danhmuc();
$listsp = loadAll_sanpham($kyw, $iddm);
if(!isset($_SESSION['mycart'])){
    $_SESSION['mycart'] = [];
}
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        // phần sản phẩm
         case 'allsp':
            $listsp = loadAll_san_pham('',0);
            include "../../view/client/layout/xemsanpham/allsanpham.php";
            break;
         case "sanpham":
            if(isset($_POST['kyw']) && $_POST['kyw'] !=''){
                $kyw = $_POST['kyw'];
            }else{
                $kyw = '';
            }
            if(isset($_GET['iddm']) && $_GET['iddm'] > 0){
                $iddm = $_GET['iddm'];
            }else{
                $iddm = 0;
            }
            $listsp = loadAll_san_pham($kyw, $iddm);
            $tendm= load_ten_danhmuc($iddm);
            include "../../view/client/layout/xemsanpham/allsanpham_dm.php";


        

        default:
            # code...
            break;

    }
}else{
    include "../../view/client/layout/home.php";
}
include "../../view/client/layout/footer.php";
?>