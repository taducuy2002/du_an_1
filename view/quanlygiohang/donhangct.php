<style>
    .button {
        background-color: greenyellow;
    }

    .button:hover {
        color: red;
    }

    .box {
        border: 1px solid gray;
        border-radius: 10px 50px;
        text-align: center;
    }

    .box li {
        list-style-type: none;
    }
</style>

<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

    <!-- Start Header -->
    <header class="header axil-header header-style-1">
        <!-- Start Mainmenu Area  -->
        <div id="axil-sticky-placeholder"></div>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-brand">
                        <a href="index.php" class="logo logo-dark">
                            <img src="img/logo/logo2.png" alt="Site Logo">
                        </a>
                    </div>
                    <div class="header-main-nav">
                        <!-- Start Mainmanu Nav -->
                        <nav class="mainmenu-nav">
                            <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                           
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>
    <main class="main-wrapper">

        <div class="axil-product-cart-area axil-section-gap">
            <div class="container">
                <div class="box table axil-product-table axil-cart-table mb--40">
                    <h3>Thông tin người nhận</h3>
                    <?php extract($bill); ?>
                    <ul>
                        <li>Tên người nhận: <strong><?= $ten_nguoi_nhan ?></strong></li>
                        <li>Số điện thoại người nhận: <strong><?= $sdt_nguoi_nhan ?></strong></li>
                        <li>Địa chỉ người nhận: <strong><?= $dia_chi_nguoi_nhan ?></strong></li>
                        <li>Email người nhận: <strong><?= $email_nguoi_nhan ?></strong></li>
                    </ul>
                </div>
                <div class="axil-product-cart-wrap">
                    <div class="product-table-heading">
                        <h4 class="title">Chi tiết đơn hàng</h4>
                    </div>
                    <div class="table-responsive">


                        <table class="table axil-product-table axil-cart-table mb--40">
                            <thead>
                                <tr>
                                    <th scope="col" class="product-title">Mã sản phẩm</th>
                                    <th scope="col" class="product-title">Tên sản phẩm</th>
                                    <th scope="col" class="product-title">Ảnh sản phẩm</th>
                                    <th scope="col" class="product-title">Giá sản phẩm</th>
                                    <th scope="col" class="product-title">SL</th>
                                    <th scope="col" class="product-title">Thành tiền</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                foreach ($donhang as $dh) {
                                    extract($dh);
                                    echo '
                                        <tr>    
                                    
                                    <td class="product-subtotal" data-title="Subtotal">' . $id_san_pham . '</td>
                                    <td class="product-subtotal" data-title="Subtotal">' . $ten_san_pham . '</td>
                                    <td class="product-subtotal" data-title="Subtotal"><img src="img/' . $img_sp . '" style="width: 100px;"></td>
                                    <td class="product-subtotal" data-title="Subtotal">' . $gia_san_pham . '$</td>
                                    <td class="product-subtotal" data-title="Subtotal">' . $so_luong . '</td>
                                    <td class="product-subtotal" data-title="Subtotal">' . $thanh_tien . '$</td>
                                    
                                    
                                    </tr>
                                    ';
                                }

                                ?>


                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5"><strong>Tổng đơn hàng</strong></td>
                                    <td colspan="1"><strong><?= $tong_tien ?>$</td>
                                </tr>
                            </tfoot>
                        </table>

                        <a href="index.php?act=donhang"><button class="button">Quay lại</button></a><br><br>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Cart Area  -->

    </main>

</body>