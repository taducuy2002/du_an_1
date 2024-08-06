<div class="wrapper bg-dark-white">
    <!-- HEADER-AREA START -->
    <header id="sticky-menu" class="header">
        <div class="header-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 offset-md-4 col-7">
                        <div class="logo text-md-center">
                            <a href="index.php"><img src="img/logo/logo1.png" alt="" style="width:130px"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-5">
                        <div class="mini-cart text-end">
                            <ul>
                                <li>
                                    <a class="cart-icon" href="index.php?act=addtocart">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                        <span>3</span>
                                    </a>
                                    <div class="mini-cart-brief text-left">
                                        <div class="cart-items">
                                            <p class="mb-0">You have <span>03 items</span> in your shopping bag</p>
                                        </div>

                                        <div class="all-cart-product clearfix">
                                        </div>
                                        <div class="cart-bottom  clearfix">
                                            <a href="index.php?act=addtocart"
                                                class="button-one floatleft text-uppercase" data-text="View cart">View
                                                cart</a>
                                            <a href="index.php?act=donhang" class="button-one floatright text-uppercase"
                                                data-text="Check out">Check out</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MAIN-MENU START -->
        <div class="menu-toggle hamburger hamburger--emphatic d-none d-md-block">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
        <div class="main-menu  d-none d-md-block">
            <nav>
                <ul>
                    <li><a href="index.php?act=home">home</a>
                    </li>
                    <li><a href="index.php?act=baiviet">Bài Viết</a>

                    </li>
                    <li><a href="index.php?act=lienhe">LIên hệ</a></li>
                </ul>
            </nav>
        </div>
        <!-- MAIN-MENU END -->
    </header>
    <!-- HEADER-AREA END -->
    <!-- Mobile-menu start -->
    <div class="mobile-menu-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 d-block d-md-none">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.html">home</a>
                                    <ul>
                                        <li><a href="index.html">Home Version 1</a></li>
                                        <li><a href="index-2.html">Home Version 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">products</a></li>
                                <li><a href="shop-sidebar.html">accesories</a></li>
                                <li><a href="shop-list.html">lookbook</a></li>
                                <li><a href="blog.html">blog</a></li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                        <li><a href="shop-list.html">Shop List</a></li>
                                        <li><a href="single-product.html">Single Product</a></li>
                                        <li><a href="single-product-sidebar.html">Single Product Sidebar</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="order.html">Order</a></li>
                                        <li><a href="login.html">login / Registration</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="single-blog.html">Single Blog</a></li>
                                        <li><a href="single-blog-sidebar.html">Single Blog Sidebar</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">about us</a></li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile-menu end -->
    <!-- HEADING-BANNER START -->
    <div class="heading-banner-area overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-banner">
                        <div class="heading-banner-title">
                            <h2>Product Grid View</h2>
                        </div>
                        <div class="breadcumbs pb-15">
                            <ul>
                                <li><a href="index.php?act=home">Home</a></li>
                                <li>Product grid view</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HEADING-BANNER END -->
    <!-- PRODUCT-AREA START -->
    <div class="product-area pt-80 pb-80 product-style-2">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <!-- Shop-Content End -->
                    <div class="shop-content mt-tab-30 mt-xs-30">
                        <div class="product-option mb-30 clearfix">
                            <!-- Nav tabs -->
                            <ul class="shop-tab">
                                <h1>Các sản phẩm của chúng tôi</h1>
                            </ul>

                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="grid-view">
                                <div class="row">
                                    <!-- //// code php sản phẩm -->
                                    <?php
                                    foreach ($listsp as $sp) {
                                        extract($sp);
                                        $hinh = $img_path . $img;
                                        $linksp = "index.php?act=spchitiet&idsp=" . $id;
                                        echo '<div class="col-lg-4 col-md-6">
                                                            <div class="single-product">
                                                               <div class="product-img">
                                                                <span class="pro-price-2">' . $gia . '</span>
                                                                <span class="pro-label new-label">new</span>
                                                               <a href="' . $linksp . '"><img src="' . $hinh . '" alt="" style="width:300px;height:200px;"/></a>
                                                             <div class="product-action">
                                                              <form action="index.php?act=addtocart" method="post">
                                                               <input type="hidden" name="id" value="' . $id . '">
                                                                <input type="hidden" name="img" value="' . $img . '">
                                                               <input type="hidden" name="name" value="' . $ten_san_pham . '">
                                                                 <input type="hidden" name="price" value="' . $gia . '">
                                                                 <input type="submit" name="addtocart" value="Add to Cart" class="buttonbtn"></a>
                                                               </form>
                                                                  </div>
                                                                 </div>
                                                                
                                                                <div class="product-info clearfix text-center">
                                                                    <div class="fix">
                                                                        <h4 class="post-title"><a href="#">' . $ten_san_pham . '</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="tab-pane" id="list-view">
                                <div class="row shop-list">
                                    <!-- Single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product clearfix">
                                            <div class="product-img">
                                                <span class="pro-label new-label">new</span>
                                                <span class="pro-price-2">$ 56.20</span>
                                                <a href="single-product.html"><img src="img/product/6.jpg" alt="" /></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="fix">
                                                    <h4 class="post-title floatleft"><a href="#">dummy Product name</a>
                                                    </h4>
                                                    <span class="pro-rating floatright">
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                        <span>( 27 Rating )</span>
                                                    </span>
                                                </div>
                                                <div class="fix mb-20">
                                                    <span class="pro-price">$ 56.20</span>
                                                </div>
                                                <div class="product-description">
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have be suffered alteration in some form, by
                                                        injected humour, or randomised words which donot look even
                                                        slightly believable. If you are going to use a passage of Lorem
                                                        Ipsum, you neede be sure there isn't anythin going to use a
                                                        passage embarrassing.</p>
                                                </div>
                                                <div class="clearfix">
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="02" name="qtybutton"
                                                            class="cart-plus-minus-box">
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="wishlist.html" data-bs-toggle="tooltip"
                                                            data-placement="top" title="Wishlist"><i
                                                                class="zmdi zmdi-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#productModal" title="Quick View"><i
                                                                class="zmdi zmdi-zoom-in"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-placement="top"
                                                            title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                        <a href="cart.html" data-bs-toggle="tooltip"
                                                            data-placement="top" title="Add To Cart"><i
                                                                class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single-product end -->
                                    <!-- Single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product clearfix">
                                            <div class="product-img">
                                                <span class="pro-label new-label">new</span>
                                                <span class="pro-price-2">$ 56.20</span>
                                                <a href="single-product.html"><img src="img/product/3.jpg" alt="" /></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="fix">
                                                    <h4 class="post-title floatleft"><a href="#">dummy Product name</a>
                                                    </h4>
                                                    <span class="pro-rating floatright">
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                        <span>( 27 Rating )</span>
                                                    </span>
                                                </div>
                                                <div class="fix mb-20">
                                                    <span class="pro-price">$ 56.20</span>
                                                </div>
                                                <div class="product-description">
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have be suffered alteration in some form, by
                                                        injected humour, or randomised words which donot look even
                                                        slightly believable. If you are going to use a passage of Lorem
                                                        Ipsum, you neede be sure there isn't anythin going to use a
                                                        passage embarrassing.</p>
                                                </div>
                                                <div class="clearfix">
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="02" name="qtybutton"
                                                            class="cart-plus-minus-box">
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="wishlist.html" data-bs-toggle="tooltip"
                                                            data-placement="top" title="Wishlist"><i
                                                                class="zmdi zmdi-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#productModal" title="Quick View"><i
                                                                class="zmdi zmdi-zoom-in"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-placement="top"
                                                            title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                        <a href="cart.html" data-bs-toggle="tooltip"
                                                            data-placement="top" title="Add To Cart"><i
                                                                class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single-product end -->
                                    <!-- Single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product clearfix">
                                            <div class="product-img">
                                                <span class="pro-label new-label">new</span>
                                                <span class="pro-price-2">$ 56.20</span>
                                                <a href="single-product.html"><img src="img/product/2.jpg" alt="" /></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="fix">
                                                    <h4 class="post-title floatleft"><a href="#">dummy Product name</a>
                                                    </h4>
                                                    <span class="pro-rating floatright">
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                        <span>( 27 Rating )</span>
                                                    </span>
                                                </div>
                                                <div class="fix mb-20">
                                                    <span class="pro-price">$ 56.20</span>
                                                </div>
                                                <div class="product-description">
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have be suffered alteration in some form, by
                                                        injected humour, or randomised words which donot look even
                                                        slightly believable. If you are going to use a passage of Lorem
                                                        Ipsum, you neede be sure there isn't anythin going to use a
                                                        passage embarrassing.</p>
                                                </div>
                                                <div class="clearfix">
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="02" name="qtybutton"
                                                            class="cart-plus-minus-box">
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="wishlist.html" data-bs-toggle="tooltip"
                                                            data-placement="top" title="Wishlist"><i
                                                                class="zmdi zmdi-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#productModal" title="Quick View"><i
                                                                class="zmdi zmdi-zoom-in"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-placement="top"
                                                            title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                        <a href="cart.html" data-bs-toggle="tooltip"
                                                            data-placement="top" title="Add To Cart"><i
                                                                class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single-product end -->
                                    <!-- Single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product clearfix">
                                            <div class="product-img">
                                                <span class="pro-label new-label">new</span>
                                                <span class="pro-price-2">$ 56.20</span>
                                                <a href="single-product.html"><img src="img/product/10.jpg"
                                                        alt="" /></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="fix">
                                                    <h4 class="post-title floatleft"><a href="#">dummy Product name</a>
                                                    </h4>
                                                    <span class="pro-rating floatright">
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                        <span>( 27 Rating )</span>
                                                    </span>
                                                </div>
                                                <div class="fix mb-20">
                                                    <span class="pro-price">$ 56.20</span>
                                                </div>
                                                <div class="product-description">
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have be suffered alteration in some form, by
                                                        injected humour, or randomised words which donot look even
                                                        slightly believable. If you are going to use a passage of Lorem
                                                        Ipsum, you neede be sure there isn't anythin going to use a
                                                        passage embarrassing.</p>
                                                </div>
                                                <div class="clearfix">
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="02" name="qtybutton"
                                                            class="cart-plus-minus-box">
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="wishlist.html" data-bs-toggle="tooltip"
                                                            data-placement="top" title="Wishlist"><i
                                                                class="zmdi zmdi-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#productModal" title="Quick View"><i
                                                                class="zmdi zmdi-zoom-in"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-placement="top"
                                                            title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                        <a href="cart.html" data-bs-toggle="tooltip"
                                                            data-placement="top" title="Add To Cart"><i
                                                                class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single-product end -->
                                    <!-- Single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product clearfix">
                                            <div class="product-img">
                                                <span class="pro-label new-label">new</span>
                                                <span class="pro-price-2">$ 56.20</span>
                                                <a href="single-product.html"><img src="img/product/12.jpg"
                                                        alt="" /></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="fix">
                                                    <h4 class="post-title floatleft"><a href="#">dummy Product name</a>
                                                    </h4>
                                                    <span class="pro-rating floatright">
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                        <span>( 27 Rating )</span>
                                                    </span>
                                                </div>
                                                <div class="fix mb-20">
                                                    <span class="pro-price">$ 56.20</span>
                                                </div>
                                                <div class="product-description">
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have be suffered alteration in some form, by
                                                        injected humour, or randomised words which donot look even
                                                        slightly believable. If you are going to use a passage of Lorem
                                                        Ipsum, you neede be sure there isn't anythin going to use a
                                                        passage embarrassing.</p>
                                                </div>
                                                <div class="clearfix">
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="02" name="qtybutton"
                                                            class="cart-plus-minus-box">
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="wishlist.html" data-bs-toggle="tooltip"
                                                            data-placement="top" title="Wishlist"><i
                                                                class="zmdi zmdi-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#productModal" title="Quick View"><i
                                                                class="zmdi zmdi-zoom-in"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-placement="top"
                                                            title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                        <a href="cart.html" data-bs-toggle="tooltip"
                                                            data-placement="top" title="Add To Cart"><i
                                                                class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single-product end -->
                                </div>
                            </div>
                        </div>
                        <!-- Pagination start -->
                        <div class="shop-pagination  text-center">
                            <div class="pagination">
                                <ul>
                                    <li><a href="#"><i class="zmdi zmdi-long-arrow-left"></i></a></li>
                                    <li><a href="#">01</a></li>
                                    <li><a class="active" href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#">04</a></li>
                                    <li><a href="#">05</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Pagination end -->
                    </div>
                    <!-- Shop-Content End -->
                </div>

                <!-- css cho phần lọc sản phẩm theo danh mục -->
                <style>
                    /* General form styling */
                    .widget-search form {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        padding: 20px;
                        background-color: #f9f9f9;
                        border-radius: 8px;
                        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                    }

                    /* Styling the select dropdown */
                    .widget-search select {
                        width: 100%;
                        padding: 10px;
                        margin-bottom: 15px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        font-size: 16px;
                        background-color: #fff;
                        transition: border-color 0.3s;
                    }

                    .widget-search select:focus {
                        border-color: #007bff;
                    }

                    /* Styling the submit button */
                    .widget-search input[type="submit"] {
                        padding: 10px 20px;
                        background-color: #007bff;
                        color: #fff;
                        border: none;
                        border-radius: 5px;
                        font-size: 16px;
                        cursor: pointer;
                        transition: background-color 0.3s;
                    }

                    .widget-search input[type="submit"]:hover {
                        background-color: #0056b3;
                    }

                    /* Responsive adjustments */
                    @media (max-width: 600px) {
                        .widget-search form {
                            padding: 15px;
                        }

                        .widget-search select,
                        .widget-search input[type="submit"] {
                            font-size: 14px;
                        }
                    }
                </style>

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <!-- Widget-Search start -->
                    <aside class="widget widget-search mb-30">
                        <form action="index.php?act=locsp" method="POST">
                            <select name="iddm" id="">
                                <option value="0">Tất cả</option>
                                <?php
                                foreach ($loadsp_dm as $dm) {
                                    extract($dm);
                                    echo '<option value="' . $id . '">' . $ten_danh_muc . '</option>';
                                }
                                ?>
                            </select>
                            <input type="submit" value="Tìm kiếm" name="btn">
                        </form>
                    </aside>
                    <!-- Widget-search end -->
                    <!-- Widget-Categories start -->
                    <aside class="widget widget-categories  mb-30">
                        <div class="widget-title">
                            <h4>Categories</h4>
                        </div>
                        <div id="cat-treeview" class="widget-info product-cat boxscrol2">
                            <ul>
                                <li><span>Chair</span>
                                    <ul>
                                        <li><a href="#">T-Shirts</a></li>
                                        <li><a href="#">Striped Shirts</a></li>
                                        <li><a href="#">Half Shirts</a></li>
                                        <li><a href="#">Formal Shirts</a></li>
                                        <li><a href="#">Bilazers</a></li>
                                    </ul>
                                </li>
                                <li class="open"><span>Furniture</span>
                                    <ul>
                                        <li><a href="#">Men Bag</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Watch</a></li>
                                        <li><a href="#">T-shirt</a></li>
                                        <li><a href="#">Shirt</a></li>
                                    </ul>
                                </li>
                                <li><span>Accessories</span>
                                    <ul>
                                        <li><a href="#">T-Shirts</a></li>
                                        <li><a href="#">Striped Shirts</a></li>
                                        <li><a href="#">Half Shirts</a></li>
                                        <li><a href="#">Formal Shirts</a></li>
                                        <li><a href="#">Bilazers</a></li>
                                    </ul>
                                </li>
                                <li><span>Top Brands</span>
                                    <ul>
                                        <li><a href="#">T-Shirts</a></li>
                                        <li><a href="#">Striped Shirts</a></li>
                                        <li><a href="#">Half Shirts</a></li>
                                        <li><a href="#">Formal Shirts</a></li>
                                        <li><a href="#">Bilazers</a></li>
                                    </ul>
                                </li>
                                <li><span>Jewelry</span>
                                    <ul>
                                        <li><a href="#">T-Shirts</a></li>
                                        <li><a href="#">Striped Shirts</a></li>
                                        <li><a href="#">Half Shirts</a></li>
                                        <li><a href="#">Formal Shirts</a></li>
                                        <li><a href="#">Bilazers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- Widget-categories end -->
                    <!-- Shop-Filter start -->
                    <aside class="widget shop-filter mb-30">
                        <div class="widget-title">
                            <h4>Price</h4>
                        </div>
                        <div class="widget-info">
                            <div class="price_filter">
                                <div class="price_slider_amount">
                                    <input type="submit" value="You range :" />
                                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                </div>
                                <div id="slider-range"></div>
                            </div>
                        </div>
                    </aside>
                    <!-- Shop-Filter end -->
                    <!-- Widget-Color start -->
                    <aside class="widget widget-color mb-30">
                        <div class="widget-title">
                            <h4>Color</h4>
                        </div>
                        <div class="widget-info color-filter clearfix">
                            <ul>
                                <li><a href="#"><span class="color color-1"></span>LightSalmon<span
                                            class="count">12</span></a></li>
                                <li><a href="#"><span class="color color-2"></span>Dark Salmon<span
                                            class="count">20</span></a></li>
                                <li><a href="#"><span class="color color-3"></span>Tomato<span
                                            class="count">59</span></a></li>
                                <li><a class="active" href="#"><span class="color color-4"></span>Deep Sky Blue<span
                                            class="count">45</span></a></li>
                                <li><a href="#"><span class="color color-5"></span>Electric Purple<span
                                            class="count">78</span></a></li>
                                <li><a href="#"><span class="color color-6"></span>Atlantis<span
                                            class="count">10</span></a></li>
                                <li><a href="#"><span class="color color-7"></span>Deep Lilac<span
                                            class="count">15</span></a></li>
                            </ul>
                        </div>
                    </aside>
                    <!-- Widget-Color end -->
                    <!-- Widget-Size start -->
                    <aside class="widget widget-size mb-30">
                        <div class="widget-title">
                            <h4>Size</h4>
                        </div>
                        <div class="widget-info size-filter clearfix">
                            <ul>
                                <li><a href="#">M</a></li>
                                <li><a class="active" href="#">S</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">SL</a></li>
                                <li><a href="#">XL</a></li>
                            </ul>
                        </div>
                    </aside>
                    <!-- Widget-Size end -->
                    <!-- Widget-banner start -->
                    <aside class="widget widget-banner hidden-sm">
                        <div class="widget-info widget-banner-img">
                            <a href="#"><img src="img/banner/5.jpg" alt="" /></a>
                        </div>
                    </aside>
                    <!-- Widget-banner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT-AREA END -->
    <!-- FOOTER START -->
    <footer>
        <!-- Footer-area start -->
        <div class="footer-area footer-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                        <div class="single-footer">
                            <h3 class="footer-title  title-border">Contact Us</h3>
                            <ul class="footer-contact">
                                <li><span>Address :</span>28 Green Tower, Street Name,<br>New York City, USA</li>
                                <li><span>Cell-Phone :</span>012345 - 123456789</li>
                                <li><span>Email :</span>your-email@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="single-footer">
                            <h3 class="footer-title  title-border">accounts</h3>
                            <ul class="footer-menu">
                                <li><a href="my-account.html"><i class="zmdi zmdi-dot-circle"></i>My Account</a></li>
                                <li><a href="wishlist.html"><i class="zmdi zmdi-dot-circle"></i>My Wishlist</a></li>
                                <li><a href="cart.html"><i class="zmdi zmdi-dot-circle"></i>My Cart</a></li>
                                <li><a href="login.html"><i class="zmdi zmdi-dot-circle"></i>Sign In</a></li>
                                <li><a href="checkout.html"><i class="zmdi zmdi-dot-circle"></i>Check out</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 hidden-sm col-xs-12">
                        <div class="single-footer">
                            <h3 class="footer-title  title-border">shipping</h3>
                            <ul class="footer-menu">
                                <li><a href="#"><i class="zmdi zmdi-dot-circle"></i>New Products</a></li>
                                <li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Top Sellers</a></li>
                                <li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Manufactirers</a></li>
                                <li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Suppliers</a></li>
                                <li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Specials</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-footer">
                            <h3 class="footer-title  title-border">Email Newsletters</h3>
                            <div class="footer-subscribe">
                                <form action="#">
                                    <input type="text" name="email" placeholder="Email Address..." />
                                    <button class="button-one submit-btn-4" type="submit"
                                        data-text="Subscribe">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-area end -->
        <!-- Copyright-area start -->
        <div class="copyright-area copyright-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p class="mb-0">&copy; <a href="https://themeforest.net/user/codecarnival/portfolio"
                                    target="_blank">CodeCarnival </a> 2022. All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment  text-md-end">
                            <a href="#"><img src="img/payment/1.png" alt="" /></a>
                            <a href="#"><img src="img/payment/2.png" alt="" /></a>
                            <a href="#"><img src="img/payment/3.png" alt="" /></a>
                            <a href="#"><img src="img/payment/4.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright-area start -->
    </footer>
    <!-- FOOTER END -->
    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="#" src="img/product/quickview-photo.jpg" />
                                </div>
                            </div><!-- .product-images -->

                            <div class="product-info">
                                <h1>Aenean eu tristique</h1>
                                <div class="price-box-3">
                                    <hr />
                                    <div class="s-price-box">
                                        <span class="new-price">$160.00</span>
                                        <span class="old-price">$190.00</span>
                                    </div>
                                    <hr />
                                </div>
                                <a href="shop.html" class="see-all">See all features</a>
                                <div class="quick-add-to-cart">
                                    <form method="post" class="cart">
                                        <div class="numbers-row">
                                            <input type="number" id="french-hens" value="3" min="1">
                                        </div>
                                        <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                    </form>
                                </div>
                                <div class="quick-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                    tristique auctor. Donec non est at libero.
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="Google +" href="#"
                                                    class="gplus social-icon"><i class="zmdi zmdi-google-plus"></i></a>
                                            </li>
                                            <li><a target="_blank" title="Twitter" href="#"
                                                    class="twitter social-icon"><i class="zmdi zmdi-twitter"></i></a>
                                            </li>
                                            <li><a target="_blank" title="Facebook" href="#"
                                                    class="facebook social-icon"><i class="zmdi zmdi-facebook"></i></a>
                                            </li>
                                            <li><a target="_blank" title="LinkedIn" href="#"
                                                    class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    <!-- END QUICKVIEW PRODUCT -->

</div>