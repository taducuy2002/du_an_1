<div class="wrapper bg-dark-white">
			<!-- HEADER-AREA START -->
			<header id="sticky-menu" class="header header-2">
				<div class="header-area">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-4 offset-md-4 col-7">
								<div class="logo text-md-center">
									<a href="index.html"><img src="img/logo/logo2.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-4 col-5">
								<div class="mini-cart text-end">

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- MAIN-MENU START -->
				<div class="menu-toggle menu-toggle-2 hamburger hamburger--emphatic d-none d-md-block">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
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
									<h2>Single Product</h2>
								</div>
								<div class="breadcumbs pb-15">
									<ul>
										<li><a href="index.php?act=home">Home</a></li>
										<li>Single Product</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- HEADING-BANNER END -->
			<!-- PRODUCT-AREA START -->
			<div class="product-area single-pro-area pt-80 pb-80 product-style-2">
				<div class="container">	
					<div class="row shop-list single-pro-info no-sidebar">
						<!-- Single-product start -->
						<div class="col-lg-12">
						<div class="thumbnail">
                                <img src="img/anhbaiviet.jfif" alt="About Us" style="width: 400px; height: 350px;"> <br> <br>
                            </div>
							<div class="single-product clearfix">
								<!-- Single-pro-slider Big-photo start -->
                                 <?php
                                foreach ($dsbv as $bv) {
									extract($bv);
									echo '
									<div >
									<div class="about-content content-right">
									  <br> <br> <br>  
										<h2 class="title">'.$tieu_de.'</h2>
										<span class="text-heading"></span>
										<div class="row">
											<div >
												<p style="margin-top: -20px; font-weight: bold;">'.$ngay_dang.'</p>
											</div>
											<div class="size" >
												<p style="font-size: 16px;" >'.$noi_dung.'</p>
											</div>
										</div>
									</div>
								</div>
	
									';
								}
                                 ?>
								 
								
									<!-- Single-pro-slider Small-photo end -->
								</div>
							</div>
						</div>
						<!-- Single-product end -->
					</div>
					<!-- single-product-tab start -->
					
					<!-- single-product-tab end -->
				</div>
			</div>
			<!-- PRODUCT-AREA END -->
			<!-- FOOTER START -->
			<footer>
				<!-- Footer-area start -->
				<div class="footer-area footer-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-footer">
                                    <h3 class="footer-title  title-border">Contact Us</h3>
                                    <ul class="footer-contact">
                                        <li><span>Address :</span>28 Green Tower, Street Name,<br>New York City, USA</li>
                                        <li><span>Cell-Phone :</span>012345 - 123456789</li>
                                        <li><span>Email :</span>your-email@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6">
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
                            <div class="col-lg-2 col-md-3 col-sm-6">
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
                            <div class="col-lg-4 col-md-6">
                                <div class="single-footer newsletter-item">
                                    <h3 class="footer-title  title-border">Email Newsletters</h3>
                                    <div class="footer-subscribe">
                                        <form action="#">
                                            <input type="text" name="email" placeholder="Email Address..." />
                                            <button class="button-one submit-btn-4" type="submit" data-text="Subscribe">Subscribe</button>
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
									<p class="mb-0">&copy; <a href="https://themeforest.net/user/codecarnival/portfolio" target="_blank">CodeCarnival </a> 2022. All Rights Reserved.</p>
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
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<div class="modal-product">
									<div class="product-images">
										<div class="main-image images">
											<img alt="#" src="img/product/quickview-photo.jpg"/>
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
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
										</div>
										<div class="social-sharing">
											<div class="widget widget_socialsharing_widget">
												<h3 class="widget-title-modal">Share this product</h3>
												<ul class="social-icons">
													<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="zmdi zmdi-google-plus"></i></a></li>
													<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="zmdi zmdi-twitter"></i></a></li>
													<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="zmdi zmdi-facebook"></i></a></li>
													<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
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
			
		</div>GERALD BARNES