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
					<li><a href="index.php?act=allsanpham">Sản phẩm</a>

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
					<div class="single-product clearfix">
						<!-- Single-pro-slider Big-photo start -->
						<?php
						$hinh = $img_path . $img;
						extract($onesp);
						echo '
                                 <div class="single-pro-slider single-big-photo view-lightbox slider-for">
									<div>
										<img src="' . $hinh . '" alt="" style="width:400px;height:500px"/>
										<a class="view-full-screen" href="img/single-product/large/1.jpg"  data-lightbox="roadtrip" data-title="My caption">
											<i class="zmdi zmdi-zoom-in"></i>
										</a>
									</div>
								</div>	
															
								<div class="product-info">
									<div class="fix">
										<h4 class="post-title floatleft">' . $ten_san_pham . '</h4>
					
									</div>
									<div class="fix mb-20">
										<span class="pro-price">' . $gia . '</span>
									</div>
									<div class="product-description">
										<p>' . $mo_ta . ' </p>
									</div>
									<div class="color-filter single-pro-color mb-20 clearfix">
										<ul>
											<li><span class="color-title text-capitalize">color</span></li>
											<li><a class="active" href="#"><span class="color color-1"></span></a></li>
											<li><a href="#"><span class="color color-2"></span></a></li>
											<li><a href="#"><span class="color color-7"></span></a></li>
											<li><a href="#"><span class="color color-3"></span></a></li>
											<li><a href="#"><span class="color color-4"></span></a></li>
										</ul>
									</div>
									<!-- color end -->
									<!-- Size start -->
									<div class="size-filter single-pro-size mb-35 clearfix">
										<ul>
											<li><span class="color-title text-capitalize">size</span></li>
											<li><a href="#">M</a></li>
											<li><a class="active" href="#">S</a></li>
											<li><a href="#">L</a></li>
											<li><a href="#">SL</a></li>
											<li><a href="#">XL</a></li>
										</ul>
									</div>
									<!-- Size end -->
									<div class="clearfix">
										<div class="cart-plus-minus">
											<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
										</div>
									</div>
                                 ';
						?>
						<br><br>
						<!-- form xử lý khi thêm vào giỏ hàng -->
						<form action="index.php?act=addtocart" method="post">
							<input type="hidden" name="id" value="<?= $id ?>">
							<input type="hidden" name="img" value="<?= $img ?>">
							<input type="hidden" name="name" value="<?= $ten_san_pham ?>">
							<input type="hidden" name="price" value="<?= $gia ?>">

							<!-- Ấn để chọn sire -->

							<input type="submit" name="addtocart" value="Add to Cart">
						</form>
						<!-- Start Product Action Wrapper  -->
						<!-- Hiển thị danh sách size và số lượng còn trong kho -->
						<!-- Start Product Action Wrapper  -->






						<!-- Single-pro-slider Small-photo end -->
					</div>
				</div>
			</div>
			<!-- Single-product end -->
		</div>
		<!-- single-product-tab start -->
		<div class="single-pro-tab">
			<div class="row">
				<div class="col-md-3">
					<div class="single-pro-tab-menu">
						<!-- Nav tabs -->
						<ul class="nav d-block">
							<li><a href="#description" data-bs-toggle="tab">Description</a></li>
							<li><a class="active" href="#reviews" data-bs-toggle="tab">Reviews</a></li>
							<li><a href="#information" data-bs-toggle="tab">Information</a></li>
							<li><a href="#tags" data-bs-toggle="tab">Tags</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-9">
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane" id="description">
							<div class="pro-tab-info pro-description">
								<h3 class="tab-title title-border mb-30">dummy Product name</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
									elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
									messages in con sectetur posuere dolor non.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
									elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
									messages in con sectetur posuere dolor non.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
									elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
									messages in con sectetur posuere dolor non.</p>
							</div>
						</div>
						<div class="tab-pane active" id="reviews">
							<div class="pro-tab-info pro-reviews">
								<div class="customer-review mb-60">
									<h3 class="tab-title title-border mb-30">Đánh giá</h3>
									<ul class="product-comments clearfix">
										<!-- <li class="mb-30">
														<div class="pro-reviewer">
															<img src="img/reviewer/1.jpg" alt="" />
														</div>
														<div class="pro-reviewer-comment">
															<div class="fix">
																<div class="floatleft mbl-center">
																	<h5 class="text-uppercase mb-0"><strong>Gerald Barnes</strong></h5>
																	<p class="reply-date">27 Jun, 2021 at 2:30pm</p>
																</div>
																<div class="comment-reply floatright">
																	<a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
																	<a href="#"><i class="zmdi zmdi-close"></i></a>
																</div>
															</div>
															<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
														</div>
													</li> -->
										
									</ul>
								</div>

								<!-- phần bình luận -->
								<div class="reply-box">
									<form action="index.php?act=spchitiet" method="POST">
										<div class="row">
											<table class="table table-responsive">
									
												<?php foreach ($load_all_binhluan as $binhluan):
													extract($binhluan);
													?>
													<ul class="product-comments clearfix">
										           <li class="mb-30">
														<div class="pro-reviewer">
															<img src="img/logobinhluan.jfif" alt="" />
														</div>
														<div class="pro-reviewer-comment">
															<div class="fix">
																<div class="floatleft mbl-center">
																	<h5 class="text-uppercase mb-0"><strong><?=$ten_dang_nhap?></strong></h5>
																	<p class="reply-date"><?= $date_comment ?></p>
																</div>
																<div class="comment-reply floatright">
																	
																</div>
															</div>
															<p class="mb-0"><?= $content ?></p>
														</div>
													</li>
										
									</ul>
												<?php endforeach; ?>
											</table>
											<div class="write_review">
												<?php if (isset($_SESSION['tai_khoan'])): ?>
													<div class="form-group">

														<input type="hidden" name="product_id" value="<?= $id ?>">
														<textarea class="form-control" name="noidung" cols="30" rows="3"
															placeholder="Viết đánh giá để mọi người có thể hiểu hơn về sản phẩm"></textarea>
													</div>
													<button class="btn_1" name="guibinhluan">Gửi bình luận</button>
												<?php else: ?>
													<div class="form-group">
														Vui lòng đăng nhập để bình luận!
													</div>
												<?php endif; ?>
											</div>

										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
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
										<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i
													class="zmdi zmdi-google-plus"></i></a></li>
										<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i
													class="zmdi zmdi-twitter"></i></a></li>
										<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i
													class="zmdi zmdi-facebook"></i></a></li>
										<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i
													class="zmdi zmdi-linkedin"></i></a></li>
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
Gerald Barnes
</div>