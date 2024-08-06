<style>
  body {
    background: #f9f9f9;
    font-family: Arial, sans-serif;
  }

  .form-container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
  }

  .form-group {
    margin-bottom: 15px;
  }

  .form-group label {
    display: block;
    margin-bottom: 5px;
    font-size: 16px;
    color: #333;
  }

  .form-group input[type="text"],
  .form-group input[type="email"],
  .form-group input[type="tel"] {
    width: 100%;
    padding: 8px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box; /* Adds padding inside the box */
  }

  input[type="text"]:focus,
  input[type="email"]:focus,
  input[type="tel"]:focus {
    border-color: #66afe9;
    outline: 0;
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 8px rgba(102, 175, 233, 0.6);
  }

  .required:after {
    content: "*";
    color: red;
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
    <!-- End Header -->

    <main class="main-wrapper">

        <!-- Start Cart Area  -->
        <div class="axil-product-cart-area axil-section-gap">
            <div class="container">
                <div class="axil-product-cart-wrap">
                <a href="index.php"><button>Quay lại trang chủ</button></a>
                    
    <main class="main-wrapper">

        <!-- Start Checkout Area  -->
        <div class="axil-checkout-area axil-section-gap">
            <div class="container">
                <form action="index.php?act=billconfirm" method="post">
                    <div class="row">
                        <div >

                            <div class="axil-checkout-billing">
                                <h4 class="title mb--40">Chi tiết thanh toán</h4>
                                <?php
                                if (isset($_SESSION['tai_khoan'])) {
                                    $name = $_SESSION['tai_khoan']['ho_ten'];
                                    $email = $_SESSION['tai_khoan']['email'];
                                    $address = $_SESSION['tai_khoan']['dia_chi'];
                                    $phone = $_SESSION['tai_khoan']['so_dien_thoai'];
                                } else {
                                    $name = '';
                                    $email = '';
                                    $address = '';
                                    $phone = '';
                                }
                                ?>

                                <div class="form-group">
                                    <label>Họ và tên <span>*</span></label>
                                    <input type="text" id="address1" name="name" class="mb--15" value="<?php echo $name ?>">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ <span>*</span></label>
                                    <input type="text" id="town" name="address" value="<?php echo $address ?>">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" id="country"  name="phone" value="<?php echo $phone ?>">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ email <span>*</span></label>
                                    <input type="tel" id="phone" name="email" value="<?php echo $email ?>">
                                </div>

                            </div>
                        </div>
                        <div >
                            <div class="axil-order-summery order-checkout-summery">
                                <h5 class="title mb--20">Đơn hàng của bạn</h5>
                                <table>
                                 <?php
                                 viewcart(0);
                                 ?>
                                </table>
                                <div class="order-payment-method">

                                    <div class="single-payment">
                                        <div class="input-group">
                                            <input type="radio" id="radio5" value="1" name="pttt" required>
                                            <label for="radio5">Thanh toán khi nhận</label>
                                        </div>
                                       
                                    </div>
                                    <p>Thanh toán bằng tiền mặt khi giao hàng.</p>
                                </div>
                                <input type="submit" class="axil-btn btn-bg-primary checkout-btn" name="dongydathang" value="Đồng ý đặt hàng">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Checkout Area  -->

    </main>



    <!-- Start Footer Area  -->
    <footer class="axil-footer-area footer-style-2">
        <!-- Start Footer Top Area  -->
        <div class="footer-top separator-top">
            <div class="container">
                <div class="row">
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Support</h5>
                            <!-- <div class="logo mb--30">
                            <a href="index.html">
                                <img class="light-logo" src="views/Client/assets/images/logo/logo.png" alt="Logo Images">
                            </a>
                        </div> -->
                            <div class="inner">
                                <p>685 Market Street, <br>
                                    Las Vegas, LA 95820, <br>
                                    United States.
                                </p>
                                <ul class="support-list-item">
                                    <li><a href="mailto:example@domain.com"><i class="fal fa-envelope-open"></i> example@domain.com</a></li>
                                    <li><a href="tel:(+01)850-315-5862"><i class="fal fa-phone-alt"></i> (+01) 850-315-5862</a></li>
                                    <!-- <li><i class="fal fa-map-marker-alt"></i> 685 Market Street,  <br> Las Vegas, LA 95820, <br> United States.</li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Account</h5>
                            <div class="inner">
                                <ul>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="sign-up.html">Login / Register</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Quick Link</h5>
                            <div class="inner">
                                <ul>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="terms-of-service.html">Terms Of Use</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Download App</h5>
                            <div class="inner">
                                <span>Save $3 With App & New User only</span>
                                <div class="download-btn-group">
                                    <div class="qr-code">
                                        <img src="img/qr.png" alt="Axilthemes">
                                    </div>
                                    <div class="app-link">
                                        <a href="#">
                                            <img src="img/app-store.png" alt="App Store">
                                        </a>
                                        <a href="#">
                                            <img src="img/play-store.png" alt="Play Store">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                </div>
            </div>
        </div>
        <!-- End Footer Top Area  -->
        <!-- Start Copyright Area  -->
        <div class="copyright-area copyright-default separator-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="social-share">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="copyright-left d-flex flex-wrap justify-content-center">
                            <ul class="quick-link">
                                <li>© 2023. All rights reserved by <a target="_blank" href="https://axilthemes.com/">Axilthemes</a>.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="copyright-right d-flex flex-wrap justify-content-xl-end justify-content-center align-items-center">
                            <span class="card-text">Accept For</span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area  -->
    </footer>
    <!-- End Footer Area  -->

    <!-- Product Quick View Modal Start -->

</body>
<style>
.axil-order-summery {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.axil-order-summery h5.title {
    font-size: 20px;
    color: #333;
    margin-bottom: 20px;
}

.axil-order-summery table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.axil-order-summery table th,
.axil-order-summery table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.order-payment-method {
    margin-top: 10px;
    padding: 10px;
    background-color: #f4f4f4;
    border-radius: 5px;
}

.single-payment {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.input-group {
    display: flex;
    align-items: center;
}

.input-group input[type="radio"] {
    margin-right: 10px;
}

.input-group label {
    margin-bottom: 0; /* Prevent default bottom margin */
}

.axil-btn.checkout-btn {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    display: block;
    width: 100%;
}

.axil-btn.checkout-btn:hover {
    background-color: #0056b3;
}

.axil-footer-widget {
    background-color: #fff; /* Adjust the background color if needed */
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.widget-title {
    font-size: 18px;
    font-weight: bold;
    color: #333;
    margin-bottom: 15px;
}

.inner span {
    display: block;
    color: #666;
    margin-bottom: 15px;
}

.download-btn-group {
    display: flex;
    align-items: center;
    justify-content: center;
}

.qr-code img {
    width: 100px; /* Adjust size according to your QR image */
    height: 100px; /* Keep it square */
    margin-right: 15px;
}

.app-link a {
    display: inline-block;
    margin-right: 10px;
}

.app-link a:last-child {
    margin-right: 0;
}

.app-link img {
    width: 100px; /* Adjust width to scale the store badges appropriately */
    height: auto;
}

</style>

