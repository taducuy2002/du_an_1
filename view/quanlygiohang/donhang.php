
<style>
  /* Body and container styling */
  body {
    font-family: 'Arial', sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }

  /* Button styles */
  .button {
    color: white;
    padding: 10px 20px;
    border: none;
    background-color: #4CAF50;
    border-radius: 5px;
    font-size: 14px;
    transition: background-color 0.3s, transform 0.3s;
    text-decoration: none;
    display: inline-block;
    text-align: center;
  }

  .button:hover {
    cursor: pointer;
    background-color: #45a049;
    transform: translateY(-2px);
  }

  .btnn {
    color: #555;
    padding: 10px 20px;
    border: none;
    background-color: #e0e0e0;
    border-radius: 5px;
    font-size: 14px;
    opacity: 0.8;
    transition: background-color 0.3s;
    text-decoration: none;
    display: inline-block;
    text-align: center;
  }

  .btnn:disabled {
    cursor: not-allowed;
    opacity: 0.5;
  }

  .btnn:hover {
    background-color: #d6d6d6;
  }

  /* Table styles */
  .axil-product-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    background-color: #ffffff;
  }

  .axil-product-table th,
  .axil-product-table td {
    padding: 15px 20px;
    text-align: center;
    border-bottom: 1px solid #ddd;
  }

  .axil-product-table th {
    background-color: #f8f8f8;
    color: #333;
    font-weight: bold;
  }

  .axil-product-table tr:nth-child(even) {
    background-color: #fafafa;
  }

  .axil-product-table tr:hover {
    background-color: #f1f1f1;
  }

  /* Header and navigation */
  .header {
    background-color: #333;
    padding: 10px 0;
    color: white;
  }

  .header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .header .logo img {
    max-height: 40px;
  }

  .mainmenu-nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
    display: flex;
  }

  .mainmenu-nav li {
    margin-right: 15px;
  }

  .mainmenu-nav a {
    color: white;
    text-decoration: none;
    font-size: 16px;
    transition: color 0.3s;
  }

  .mainmenu-nav a:hover {
    color: #4CAF50;
  }

  /* Responsive design */
  @media (max-width: 768px) {
    .header .container {
      flex-direction: column;
      align-items: flex-start;
    }

    .mainmenu-nav {
      margin-top: 10px;
    }

    .axil-product-table th,
    .axil-product-table td {
      padding: 10px;
      font-size: 14px;
    }

    .button,
    .btnn {
      padding: 8px 12px;
      font-size: 12px;
    }
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
                    <a href="index.php">Trở về trang chủ</a>
                    <div class="product-table-heading">
                        <h4 class="title">Đơn hàng của bạn</h4>
                    </div>
                    
                    <div class="table-responsive">
                        
                        
                        <table class="table axil-product-table axil-cart-table mb--40">
                            <thead>
                    <tr>

                        <th scope="col" class="product-quantity">Mã đơn hàng</th>
                        <th scope="col" class="product-quantity">Ngày đặt hàng</th>
                        <th scope="col" class="product-quantity">Số lượng sản phẩm</th>
                        <th scope="col" class="product-quantity">Thành tiền</th>
                        <th scope="col" class="product-quantity">Trạng thái đơn hàng</th>
                        <th scope="col" class="product-quantity">Thao tác</th>
                        

                    </tr>
                </thead>
                <tbody>
                        <?php
                                if (is_array($listbill)) {
                                    foreach ($listbill as $bill) {
                                        extract($bill);
                                        $ttdh = get_ttdh($bill['trang_thai']);
                                        if ($bill['trang_thai'] == 3) {
                                            $a = '<a href="index.php?act=update&id=' . $bill['id'] . '"><button class="button">Đã nhận được hàng</button></a>';
                                        } elseif ($bill['trang_thai'] == 0) {
                                            $a = '<a href="index.php?act=huydonhang&id=' . $bill['id'] . '"><button class="button">Hủy</button></a>';
                                        } elseif ($bill['trang_thai'] == 5) {
                                            $a = '<a href="index.php?act=update&id=' . $bill['id'] . '"><button class="btnn" disabled>Đã hủy</button></a>';
                                        } else {
                                            $a = '<a href="index.php?act=update&id=' . $bill['id'] . '"><button class="btnn" disabled>Đã nhận được hàng</button></a>';
                                        }

                                        $count = load_all_cart_count($bill['id']);
                                        echo '
                                        <tr>    
                                    <td class="product-subtotal" data-title="Subtotal">DuAn1-' . $bill['id'] . '</td>
                                    <td class="product-subtotal" data-title="Subtotal">' . $bill['ngay_dat_hang'] . '</td>
                                    <td class="product-subtotal" data-title="Subtotal">' . $count . '</td>
                                    <td class="product-subtotal" data-title="Subtotal">' . $bill['tong_tien'] . '</td>
                                    <td class="product-subtotal" data-title="Subtotal">' . $ttdh . '</td>
                                    <td class="product-subtotal" data-title="Subtotal">
                                    <a href="index.php?act=dhchitiet&id=' . $bill['id'] . '"><button class="button">Xem chi tiết</button></a>
                                    '.$a.'
                                    </td>
                                    
                                    </tr>
                                    ';
                                    
                                }
                            }
                            ?>
                            
                        </tbody>
                            </table>

                            
                    </div>
                </div>
            </div>
        </div>
        <!-- End Cart Area  -->

    </main>

</body>