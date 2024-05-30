<header class="header header-14">
	<div class="header-top">
		<div class="container">
			<div class="header-left">
				<a href="tel:#"><i class="icon-phone"></i>Call: +880XXXXXXXXXX</a>
			</div>
			<!-- End .header-left -->

			<div class="header-right">
				<ul class="top-menu">
					<li>
						<a href="#">Links</a>
						<ul class="menus">
							<li>
								<div class="header-dropdown">
									<a href="#">Language</a>
									<div class="header-menu">
										<ul>
											<li><a href="#">English</a></li>
											<li><a href="#">French</a></li>
											<li><a href="#">Spanish</a></li>
										</ul>
									</div>
									<!-- End .header-menu -->
								</div>
								<!-- End .header-dropdown -->
							</li>
							<li class="login">
								<?php if (empty($this->session->userdata('company_id'))) { ?>

									<ul class="nav navbar-nav flex-row flex-nowrap align-items-center order-lg-10 ml-auto">
										<li class="nav-item mr-2">
											<a href="<?= site_url('login'); ?>" class="nav-link text-them">
												<span class="ml-2">Sign In</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="<?= site_url('register'); ?>" class="d-block text-nowrap text-14 text-medium text-white py-0 px-2 rounded btn-join-free">Join Free</a>
										</li>
									</ul>
								<?php } else { ?>
									<div class="d-flex align-items-center ml-auto">
										<div class="nav-link pr-0 dropdown header-user">
											<div data-toggle="dropdown" class="px-2 cursor">
												<span class="box-30 cursor rounded-circle bg-login-icon" style="background-color: #021b79;color: #fff;">
													<i class="icofont-ui-user text-14"></i>
												</span>
											</div>
											<div class="dropdown-menu dropdown-menu-right shadow-sm mr-n2 p-3">
												<ul class="list-group list-group-flush mb-0">
													<li class="list-group-item px-0 py-2">
														<a href="#" class="dropdown-item px-0 d-flex text-17">
															<span class="mr-2">
																<i class="fa fa-dashboard  link-icon"></i>
															</span> Dashboard </a>
													</li>
													<li class="list-group-item px-0 py-2">
														<a href="#" class="dropdown-item px-0 d-flex text-17">
															<span class="mr-2">
																<i class="fa fa-envelope-o link-icon"></i>
															</span> Message Center </a>
													</li>
													<li class="list-group-item px-0 py-2">
														<a href="#" class="dropdown-item px-0 d-flex text-17">
															<span class="mr-2">
																<i class="icofont-architecture-alt link-icon"></i>
															</span> Update Profile </a>
													</li>
													<li class="list-group-item px-0 py-2">
														<a href="#" class="dropdown-item px-0 d-flex text-17">
															<span class="mr-2">
																<i class="fa fa-cube link-icon"></i>
															</span> My Products </a>
													</li>
													<li class="list-group-item px-0 py-2">
														<div>
															<a href="#" class="dropdown-item px-0 text-17 text-wrap">
																<span class="d-block">Submit Buy Requirement</span>
																<small class="d-block">Submit your buying needs to get quotes from top suppliers.</small>
															</a>
														</div>
													</li>
													<li class="list-group-item px-0 py-2">
														<a href="#" class="dropdown-item px-0 d-flex text-17">
															<span class="mr-2">
																<i class="fa fa-sign-out text-14 link-icon"></i>
															</span> Logout </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								<?php } ?>
							</li>
						</ul>
					</li>
				</ul>
				<!-- End .top-menu -->
			</div>
			<!-- End .header-right -->
		</div>
		<!-- End .container -->
	</div>
	<!-- End .header-top -->

	<div class="header-middle">
		<div class="container-fluid">
			<div class="row">
				<div class="col-auto col-lg-3 col-xl-3 col-xxl-2">
					<button class="mobile-menu-toggler">
						<span class="sr-only">Toggle mobile menu</span>
						<i class="icon-bars"></i>
					</button>
					<a href="index.html" class="logo">
						<img src="assets/images/logo/B2B-2nd.png" alt="b2b Logo" width="150" height="75" />
					</a>
				</div>
				<!-- End .col-xl-3 col-xxl-2 -->

				<div class="col col-lg-9 col-xl-9 col-xxl-10 header-middle-right">
					<div class="row">
						<div class="col-lg-8 col-xxl-4-5col d-none d-lg-block">
							<div class="header-search header-search-extended header-search-visible header-search-no-radius">
								<a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
								<form action="#" method="get">
									<div class="header-search-wrapper search-wrapper-wide">
										<div class="select-custom">
											<select id="cat" name="cat">
												<option value="">All Departments</option>
												<option value="1">Fashion</option>
												<option value="2">- Women</option>
												<option value="3">- Men</option>
												<option value="4">- Jewellery</option>
												<option value="5">- Kids Fashion</option>
												<option value="6">Electronics</option>
												<option value="7">- Smart TVs</option>
												<option value="8">- Cameras</option>
												<option value="9">- Games</option>
												<option value="10">Home &amp; Garden</option>
												<option value="11">Motors</option>
												<option value="12">- Cars and Trucks</option>
												<option value="15">- Boats</option>
												<option value="16">
													- Auto Tools &amp; Supplies
												</option>
											</select>
										</div>
										<!-- End .select-custom -->
										<label for="q" class="sr-only">Search</label>
										<input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required />

										<button class="btn btn-primary" type="submit">
											<i class="icon-search"></i>
										</button>
									</div>
									<!-- End .header-search-wrapper -->
								</form>
							</div>
							<!-- End .header-search -->
						</div>
						<!-- End .col-xxl-4-5col -->

						<div class="col-lg-4 col-xxl-5col d-flex justify-content-end align-items-center">
							<div class="header-dropdown-link">
								<div class="dropdown compare-dropdown">
									<a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
										<i class="icon-random"></i>
										<span class="compare-txt">Compare</span>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<ul class="compare-products">
											<li class="compare-product">
												<a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
												<h4 class="compare-product-title">
													<a href="#">Blue Night Dress</a>
												</h4>
											</li>
											<li class="compare-product">
												<a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
												<h4 class="compare-product-title">
													<a href="#">White Long Skirt</a>
												</h4>
											</li>
										</ul>

										<div class="compare-actions">
											<a href="#" class="action-link">Clear All</a>
											<a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i class="icon-long-arrow-right"></i></a>
										</div>
									</div>
									<!-- End .dropdown-menu -->
								</div>
								<!-- End .compare-dropdown -->

								<a href="wishlist.html" class="wishlist-link">
									<i class="icon-heart-o"></i>
									<span class="wishlist-count">3</span>
									<span class="wishlist-txt">Wishlist</span>
								</a>

								<div class="dropdown cart-dropdown">
									<a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
										<i class="icon-shopping-cart"></i>
										<span class="cart-count">2</span>
										<span class="cart-txt">Cart</span>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<div class="dropdown-cart-products">
											<div class="product">
												<div class="product-cart-details">
													<h4 class="product-title">
														<a href="#">Beige knitted elastic runner shoes</a>
													</h4>

													<span class="cart-product-info">
														<span class="cart-product-qty">1</span>
														x $84.00
													</span>
												</div>
												<!-- End .product-cart-details -->

												<figure class="product-image-container">
													<a href="#" class="product-image">
														<img src="assets/images/products/cart/product-1.jpg" alt="product" />
													</a>
												</figure>
												<a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
											</div>
											<!-- End .product -->

											<div class="product">
												<div class="product-cart-details">
													<h4 class="product-title">
														<a href="#">Blue utility pinafore denim dress</a>
													</h4>

													<span class="cart-product-info">
														<span class="cart-product-qty">1</span>
														x $76.00
													</span>
												</div>
												<!-- End .product-cart-details -->

												<figure class="product-image-container">
													<a href="#" class="product-image">
														<img src="assets/images/products/cart/product-2.jpg" alt="product" />
													</a>
												</figure>
												<a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
											</div>
											<!-- End .product -->
										</div>
										<!-- End .cart-product -->

										<div class="dropdown-cart-total">
											<span>Total</span>

											<span class="cart-total-price">$160.00</span>
										</div>
										<!-- End .dropdown-cart-total -->

										<div class="dropdown-cart-action">
											<a href="cart.html" class="btn btn-primary">View Cart</a>
											<a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
										</div>
										<!-- End .dropdown-cart-total -->
									</div>
									<!-- End .dropdown-menu -->
								</div>
								<!-- End .cart-dropdown -->
							</div>
						</div>
						<!-- End .col-xxl-5col -->
					</div>
					<!-- End .row -->
				</div>
				<!-- End .col-xl-9 col-xxl-10 -->
			</div>
			<!-- End .row -->
		</div>
		<!-- End .container-fluid -->
	</div>
	<!-- End .header-middle -->

	<div class="header-bottom sticky-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-auto col-lg-3 col-xl-3 col-xxl-2 header-left">
					<div class="dropdown category-dropdown show is-on" data-visible="true">
						<a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
							Product Categories
						</a>

						<div class="dropdown-menu show">
							<nav class="side-nav">
								<ul class="menu-vertical sf-arrows">

									<?php foreach ($product_cat as $key => $val) {
										$catname = $val['category_name'];
										$slag = $val['link_prefix'];
									?>

										<li class="megamenu-container">
											<a class="sf-with-ul" href="<?= site_url('category/' . $slag); ?>"><?= $catname; ?></a>

											<div class="megamenu">
												<div class="row no-gutters">
													<div class="col-md-12">
														<div class="menu-col">
															<div class="row">
																<?php
																$sub_cat = $this->sellermodel->get_sub_cat_list($val['id']);
																foreach ($sub_cat as $key => $v) {
																	$subcat = $v['sub_category_name'];
																	$subslag = $v['sub_link_prefix'];
																?>
																	<div class="col-md-6">
																		<!-- <div class="menu-title"><?= $v['sub_category_name']; ?></div> -->
																		<!-- End .menu-title -->
																		<ul>
																			<li>
																				<a href="<?= site_url('subcategory/' . $subslag); ?>"><?= $subcat; ?></a>
																			</li>
																		</ul>
																	</div>
																<?php } ?>
															</div>
															<!-- End .row -->
														</div>
														<!-- End .menu-col -->
													</div>
													<!-- End .col-md-12 -->
												</div>
												<!-- End .row -->
											</div>
											<!-- End .megamenu -->
										</li>
									<?php } ?>

								</ul>
								<!-- End .menu-vertical -->
							</nav>
							<!-- End .side-nav -->
						</div>

						<!-- End .dropdown-menu -->
					</div>
					<!-- End .category-dropdown -->
				</div>
				<!-- End .col-xl-3 col-xxl-2 -->

				<div class="col col-lg-6 col-xl-6 col-xxl-8 header-center">
					<nav class="main-nav">
						<ul class="menu sf-arrows">
							<li>
								<a href="#" class="sf-ul">Home</a>
							</li>
							<li>
								<a href="<?= site_url('product') ?>" class="sf-ul">Products</a>
							</li>
							<li>
								<a href="<?= site_url('b2bleads') ?>" class="sf-ul">B2B Leads</a>
							</li>
							<li>
								<a href="<?= site_url('companies') ?>" class="sf-ul">Companies</a>
							</li>
						</ul>
						<!-- End .menu -->
					</nav>
					<!-- End .main-nav -->
				</div>
				<!-- End .col-xl-9 col-xxl-10 -->

				<div class="col col-lg-3 col-xl-3 col-xxl-2 header-right">
					<i class="la la-lightbulb-o"></i>
					<p><span>Clearance Up to 30% Off</span></p>
				</div>
			</div>
			<!-- End .row -->
		</div>
		<!-- End .container-fluid -->
	</div>
	<!-- End .header-bottom -->
</header>
<!-- End .header -->

<main class="main">
	<div class="mb-lg-2"></div>
	<!-- End .mb-lg-2 -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-9 col-xxl-8 offset-lg-3 offset-xxl-2">
				<div class="intro-slider-container slider-container-ratio mb-2">
					<div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
						"nav": false, 
						"dots": true
					}'>
						<div class="intro-slide">
							<figure class="slide-image">
								<picture>
									<source media="(max-width: 480px)" srcset="
														assets/images/demos/demo-14/slider/slide-1-480w.jpg
													" />
									<img src="assets/images/demos/demo-14/slider/slide-1.jpg" alt="Image Desc" />
								</picture>
							</figure>
							<!-- End .slide-image -->

							<div class="intro-content">
								<h3 class="intro-subtitle">B2B marketplace</h3>
								<!-- End .h3 intro-subtitle -->
								<h1 class="intro-title text-white">
									Importers and Exporters
								</h1>
								<!-- End .intro-title -->

								<div class="intro-text text-white">
									B2bItem provide a digital marketplace </br> where businesses can </br> interact, trade, and collaborate.
								</div>
								<!-- End .intro-text -->

								<a href="https://b2bitem.com/register" class="btn btn-primary">
									<span>Join Free</span>
									<i class="icon-long-arrow-right"></i>
								</a>
							</div>
							<!-- End .intro-content -->
						</div>
						<!-- End .intro-slide -->

						<div class="intro-slide">
							<figure class="slide-image">
								<picture>
									<source media="(max-width: 480px)" srcset="
														assets/images/demos/demo-14/slider/slide-2-480w.jpg
													" />
									<img src="assets/images/demos/demo-14/slider/slide-2.jpg" alt="Image Desc" />
								</picture>
							</figure>
							<!-- End .slide-image -->

							<div class="intro-content">
								<h3 class="intro-subtitle">Hottest Deals</h3>
								<!-- End .h3 intro-subtitle -->
								<h1 class="intro-title">
									<span>Wherever You Go</span> <br />DJI Mavic 2 Pro
								</h1>
								<!-- End .intro-title -->

								<div class="intro-price">
									<sup>from</sup>
									<span> $1,948<sup>.99</sup> </span>
								</div>
								<!-- End .intro-price -->

								<a href="#" class="btn btn-primary">
									<span>Discover Here</span>
									<i class="icon-long-arrow-right"></i>
								</a>
							</div>
							<!-- End .intro-content -->
						</div>
						<!-- End .intro-slide -->

						<!-- End .intro-slide -->
					</div>
					<!-- End .intro-slider owl-carousel owl-simple -->

					<span class="slider-loader"></span><!-- End .slider-loader -->
				</div>
				<!-- End .intro-slider-container -->
			</div>
			<!-- End .col-xl-9 col-xxl-10 -->

			<div class="col-xl-3 col-xxl-2 d-none d-xxl-block">
				<div class="banner banner-overlay banner-content-stretch">
					<a href="#">
						<img src="assets/images/demos/demo-14/banners/banner-1.png" alt="Banner img desc" />
					</a>
					<div class="banner-content text-right">
						<div class="price text-center">
							<sup class="text-white">from</sup>
							<span class="text-white">
								<strong>$199</strong><sup class="text-white">,99</sup>
							</span>
						</div>
						<a href="https://b2bitem.com/register" class="banner-link">Join Free <i class="icon-long-arrow-right"></i></a>
					</div>
					<!-- End .banner-content -->
				</div>
				<!-- End .banner banner-overlay -->
			</div>
			<!-- End .col-xl-3 col-xxl-2 -->
		</div>
		<!-- End .row -->
	</div>
	<!-- End .container-fluid -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-9 col-xxl-10">
				<div class="row">
					<div class="col-lg-12 col-xxl-4-5col">
						<div class="row">
							<!-- End .col-md-6 -->

							<!-- End .col-md-6 -->
						</div>
						<!-- End .row -->
					</div>
					<!-- End .col-lg-3 col-xxl-4-5col -->

					<!-- End .col-lg-3 col-xxl-2 -->
				</div>
				<!-- End .row -->

				<div class="mb-3"></div>
				<!-- End .mb-3 -->

				<!-- End .owl-carousel -->

				<div class="mb-5"></div>
				<!-- End .mb-5 -->

				<div class="bg-lighter trending-products">
					<div class="heading heading-flex mb-3">
						<div class="heading-left">
							<h2 class="title">Featured Products</h2>
							<!-- End .title -->
						</div>
						<!-- End .heading-left -->
						<div class="heading-right">
							<ul class="nav nav-pills justify-content-center" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="trending-all-link" data-toggle="tab" href="#trending-all-tab" role="tab" aria-controls="trending-all-tab" aria-selected="true">All</a>
								</li>
							</ul>
						</div>
						<!-- End .heading-right -->
					</div>
					<!-- End .heading -->
					<div class="tab-content tab-content-carousel">
						<div class="tab-pane p-0 fade show active" id="trending-all-tab" role="tabpanel" aria-labelledby="trending-all-link">
							<div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
								"nav": false, 
								"dots": true,
								"margin": 20,
								"loop": false,
								"responsive": {
									"0": {
										"items":1
									},
									"480": {
										"items":2
									},
									"768": {
										"items":3
									},
									"992": {
										"items":4
									},
									"1200": {
										"items":3,
										"nav": true
									},
									"1600": {
										"items":5,
										"nav": true
									}
								}
							}'>
								<?php

								$fplist = $this->websitemodel->get_cat_prodcut_list_for_heme();
								foreach ($fplist as $key => $v) {

								?>
									<div class="product text-center" style="height: 408.47px;">
										<figure class="product-media">

											<a href="<?= site_url('product/view/' . $v['pslag']); ?>">
												<img src="https://b2bitem.com/upload/product/<?= $v['product_image']; ?>" alt="<?= $v['product_image']; ?>" class="product-image" style="height: 193.38px;" />
											</a>

											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
												<a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
											</div>
											<!-- End .product-action-vertical -->

											<div class="product-action">
												<a href="#" class="btn-product btn-cart" title="Add to cart"><span>contact seller</span></a>
											</div>
											<!-- End .product-action -->
										</figure>
										<!-- End .product-media -->

										<div class="product-body">
											<div class="product-cat">
												<a href="<?= site_url('category/' . $v['link_prefix']); ?>"><?= $v['category_name']; ?></a>
											</div>
											<!-- End .product-cat -->
											<h3 class="product-title">
												<a href="<?= site_url('product/view/' . $v['pslag']); ?>"><?= $v['product_name']; ?></a>
											</h3>
											<!-- End .product-title -->
											<div class="product-price">
												<span class="new-price">Price: <?= $v['price']; ?> USD / <?= $v['unit']; ?></span>
												<!-- <span class="old-price">Was $290.00</span> -->
											</div>
											<!-- End .product-price -->
											<h3 class="product-title" style="color: #825ef7; font-size: 12px;">
												<a href="<?= site_url('company/' . $v['com_slag']); ?>">
													<?= $v['company_name']; ?>
												</a>
											</h3>

											<!-- End .rating-container -->
										</div>
										<!-- End .product-body -->
									</div>
									<!-- End .product -->
								<?php } ?>
							</div>
							<!-- End .owl-carousel -->
						</div>
					</div>
					<!-- End .tab-content -->
				</div>
				<!-- End .bg-lighter -->

				<div class="mb-5"></div>
				<!-- End .mb-5 -->

				<!-- End .row cat-banner-row -->

				<div class="mb-3"></div>
				<!-- End .mb-3 -->

				<!-- End .row cat-banner-row -->

				<div class="mb-3"></div>
				<!-- End .mb-3 -->

				<!-- End .row -->

				<div class="mb-3"></div>
				<!-- End .mb-3 -->

				<!-- End .row cat-banner-row -->

				<div class="mb-3"></div>
				<!-- End .mb-3 -->

				<div class="row cat-banner-row electronics">
					<div class="col-xl-3 col-xxl-4">
						<div class="cat-banner row no-gutters">
							<div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex" style="
												background-image: url(assets/images/demos/demo-14/banners/banner-bg-1.jpg);
											">
								<div class="banner-list-content">
									<h2><a href="#">Electronics</a></h2>

									<ul>
										<li><a href="#">Cell Phones</a></li>
										<li><a href="#">Computers</a></li>
										<li><a href="#">TV & Video</a></li>
										<li><a href="#">Smart Home</a></li>
										<li><a href="#">Audi</a></li>
										<li><a href="#">Home Audio & Theater</a></li>
										<li class="list-all-link">
											<a href="#">See All Departments</a>
										</li>
									</ul>
								</div>
								<!-- End .banner-list-content -->
							</div>
							<!-- End .col-sm-6 -->

							<div class="col-sm-6 col-xl-12 col-xxl-6">
								<div class="banner banner-overlay">
									<a href="#">
										<img src="assets/images/demos/demo-14/banners/banner-5.jpg" alt="Banner img desc" />
									</a>

									<div class="banner-content">
										<h4 class="banner-subtitle text-white">
											<a href="#">Best Deals</a>
										</h4>
										<!-- End .banner-subtitle -->
										<h3 class="banner-title text-white">
											<a href="#">Canon EOS <br />Mega Sale <br /><span>Up To 20% Off</span></a>
										</h3>
										<!-- End .banner-title -->
										<a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
									</div>
									<!-- End .banner-content -->
								</div>
								<!-- End .banner -->
							</div>
							<!-- End .col-sm-6 -->
						</div>
						<!-- End .cat-banner -->
					</div>
					<!-- End .col-xl-3 -->

					<div class="col-xl-9 col-xxl-8">
						<div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
							"nav": true, 
							"dots": false,
							"margin": 20,
							"loop": false,
							"responsive": {
								"0": {
									"items":2
								},
								"480": {
									"items":2
								},
								"768": {
									"items":3
								},
								"992": {
									"items":4
								},
								"1200": {
									"items":3
								},
								"1600": {
									"items":4
								}
							}
						}'>
							<div class="product text-center">
								<figure class="product-media">
									<span class="product-label label-top">Top</span>
									<a href="product.html">
										<img src="assets/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image" />
									</a>

									<div class="product-action-vertical">
										<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
										<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
										<a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
									</div>
									<!-- End .product-action-vertical -->

									<div class="product-action">
										<a href="#" class="btn-product btn-cart" title="Add to cart"><span>contact seller</span></a>
									</div>
									<!-- End .product-action -->
								</figure>
								<!-- End .product-media -->

								<div class="product-body">
									<div class="product-cat">
										<a href="#">Laptops</a>
									</div>
									<!-- End .product-cat -->
									<h3 class="product-title">
										<a href="product.html">MacBook Pro 13" Display, i5</a>
									</h3>
									<!-- End .product-title -->
									<div class="product-price">$1,199.99</div>
									<!-- End .product-price -->
									<div class="ratings-container">
										<div class="ratings">
											<div class="ratings-val" style="width: 100%"></div>
											<!-- End .ratings-val -->
										</div>
										<!-- End .ratings -->
										<span class="ratings-text">( 4 Reviews )</span>
									</div>
									<!-- End .rating-container -->
								</div>
								<!-- End .product-body -->
							</div>
							<!-- End .product -->

							<div class="product text-center">
								<figure class="product-media">
									<a href="product.html">
										<img src="assets/images/demos/demo-14/products/product-7.jpg" alt="Product image" class="product-image" />
									</a>

									<div class="product-action-vertical">
										<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
										<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
										<a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
									</div>
									<!-- End .product-action-vertical -->

									<div class="product-action">
										<a href="#" class="btn-product btn-cart" title="Add to cart"><span>contact seller</span></a>
									</div>
									<!-- End .product-action -->
								</figure>
								<!-- End .product-media -->

								<div class="product-body">
									<div class="product-cat">
										<a href="#">Audio</a>
									</div>
									<!-- End .product-cat -->
									<h3 class="product-title">
										<a href="product.html">Bose - SoundLink Bluetooth Speaker</a>
									</h3>
									<!-- End .product-title -->
									<div class="product-price">$79.99</div>
									<!-- End .product-price -->
									<div class="ratings-container">
										<div class="ratings">
											<div class="ratings-val" style="width: 60%"></div>
											<!-- End .ratings-val -->
										</div>
										<!-- End .ratings -->
										<span class="ratings-text">( 6 Reviews )</span>
									</div>
									<!-- End .rating-container -->
								</div>
								<!-- End .product-body -->
							</div>
							<!-- End .product -->

							<div class="product text-center">
								<figure class="product-media">
									<span class="product-label label-new">New</span>
									<a href="product.html">
										<img src="assets/images/demos/demo-14/products/product-8.jpg" alt="Product image" class="product-image" />
									</a>

									<div class="product-action-vertical">
										<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
										<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
										<a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
									</div>
									<!-- End .product-action-vertical -->

									<div class="product-action">
										<a href="#" class="btn-product btn-cart" title="Add to cart"><span>contact seller</span></a>
									</div>
									<!-- End .product-action -->
								</figure>
								<!-- End .product-media -->

								<div class="product-body">
									<div class="product-cat">
										<a href="#">Tablets</a>
									</div>
									<!-- End .product-cat -->
									<h3 class="product-title">
										<a href="product.html">Apple - 11 Inch iPad Pro <br />with Wi-Fi 256GB
										</a>
									</h3>
									<!-- End .product-title -->
									<div class="product-price">$899.99</div>
									<!-- End .product-price -->
									<div class="ratings-container">
										<div class="ratings">
											<div class="ratings-val" style="width: 60%"></div>
											<!-- End .ratings-val -->
										</div>
										<!-- End .ratings -->
										<span class="ratings-text">( 6 Reviews )</span>
									</div>
									<!-- End .rating-container -->

									<div class="product-nav product-nav-dots">
										<a href="#" style="background: #edd2c8"><span class="sr-only">Color name</span></a>
										<a href="#" style="background: #eaeaec"><span class="sr-only">Color name</span></a>
										<a href="#" class="active" style="background: #333333"><span class="sr-only">Color name</span></a>
									</div>
									<!-- End .product-nav -->
								</div>
								<!-- End .product-body -->
							</div>
							<!-- End .product -->

							<div class="product text-center">
								<figure class="product-media">
									<span class="product-label label-top">Top</span>
									<span class="product-label label-sale">Sale</span>
									<a href="product.html">
										<img src="assets/images/demos/demo-14/products/product-9.jpg" alt="Product image" class="product-image" />
									</a>

									<div class="product-action-vertical">
										<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
										<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
										<a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
									</div>
									<!-- End .product-action-vertical -->

									<div class="product-action">
										<a href="#" class="btn-product btn-cart" title="Add to cart"><span>contact seller</span></a>
									</div>
									<!-- End .product-action -->
								</figure>
								<!-- End .product-media -->

								<div class="product-body">
									<div class="product-cat">
										<a href="#">Cell Phone</a>
									</div>
									<!-- End .product-cat -->
									<h3 class="product-title">
										<a href="product.html">Google - Pixel 3 XL 128GB</a>
									</h3>
									<!-- End .product-title -->
									<div class="product-price">
										<span class="new-price">$350.00</span>
										<span class="old-price">Was $410.00</span>
									</div>
									<!-- End .product-price -->
									<div class="ratings-container">
										<div class="ratings">
											<div class="ratings-val" style="width: 80%"></div>
											<!-- End .ratings-val -->
										</div>
										<!-- End .ratings -->
										<span class="ratings-text">( 10 Reviews )</span>
									</div>
									<!-- End .rating-container -->

									<div class="product-nav product-nav-dots">
										<a href="#" class="active" style="background: #edd2c8"><span class="sr-only">Color name</span></a>
										<a href="#" style="background: #eaeaec"><span class="sr-only">Color name</span></a>
									</div>
									<!-- End .product-nav -->
								</div>
								<!-- End .product-body -->
							</div>
							<!-- End .product -->

							<div class="product text-center">
								<figure class="product-media">
									<span class="product-label label-top">Top</span>
									<a href="product.html">
										<img src="assets/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image" />
									</a>

									<div class="product-action-vertical">
										<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
										<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
										<a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
									</div>
									<!-- End .product-action-vertical -->

									<div class="product-action">
										<a href="#" class="btn-product btn-cart" title="Add to cart"><span>contact seller</span></a>
									</div>
									<!-- End .product-action -->
								</figure>
								<!-- End .product-media -->

								<div class="product-body">
									<div class="product-cat">
										<a href="#">Laptops</a>
									</div>
									<!-- End .product-cat -->
									<h3 class="product-title">
										<a href="product.html">MacBook Pro 13" Display, i5</a>
									</h3>
									<!-- End .product-title -->
									<div class="product-price">$1,199.99</div>
									<!-- End .product-price -->
									<div class="ratings-container">
										<div class="ratings">
											<div class="ratings-val" style="width: 100%"></div>
											<!-- End .ratings-val -->
										</div>
										<!-- End .ratings -->
										<span class="ratings-text">( 4 Reviews )</span>
									</div>
									<!-- End .rating-container -->
								</div>
								<!-- End .product-body -->
							</div>
							<!-- End .product -->
						</div>
						<!-- End .owl-carousel -->
					</div>
					<!-- End .col-xl-9 -->
				</div>
				<!-- End .row cat-banner-row -->

				<div class="mb-3"></div>
				<!-- End .mb-3 -->

				<div class="row max-col-2">
					<div class="col-md-6">
						<article class="entry entry-grid info">
							<div class="entry-body">
								<h2 class="entry-title">
									Manufacturer / Supplier
								</h2>
								<div class="entry-meta">
									<h4 class="entry-title" style="color: #007bff; font-size: 18px;">
										Reach to thousands of verified buyers.
									</h4>
								</div>
								<div class="entry-content">
									<div class="pl-3">
										<ul class="entry-list">
											<li>Attract a large number of buyers looking for specific items or suppliers. Reach a wider audience that you may not have been able to reach through traditional channels.</li>
											<li>Opportunity to connect with a diverse range of potential customers, expanding your customer base and market reach.</li>
											<li>Target your marketing by advanced search and filtering, allowing buyers to search for specific products or suppliers based on their requirements.</li>
											<li>Facilitate direct communication between buyers and suppliers to engage with potential customers, address their inquiries, negotiate deals, and build relationships.</li>
											<li>Gather market intelligence that can inform your product development, pricing, and marketing strategies.</li>
										</ul>
									</div>
									<a href="https://b2bitem.com/register" class="read-more">Start Selling - FREE</a>
								</div>
							</div>
						</article>
					</div>
					<!-- End .col-md-6 -->

					<div class="col-md-6">
						<article class="entry entry-grid info">
							<div class="entry-body">
								<h2 class="entry-title">
									Importers / Buyers
								</h2>
								<div class="entry-meta">
									<h4 class="entry-title" style="color: #007bff; font-size: 18px;">
										Access to a wide range of suppliers.
									</h4>
								</div>
								<div class="entry-content">
									<div class="pl-3">
										<ul class="entry-list">
											<li>Gain access to a diverse pool of potential suppliers, increasing your chances of finding the right partners for your sourcing needs.</li>
											<li>Simplifies the supplier discovery process and saves you time and effort in finding suitable suppliers.</li>
											<li>Invite multiple suppliers to provide quotes and proposals, enabling you to compare prices and negotiate favorable terms.</li>
											<li>Engage with potential suppliers, ask questions, discuss specifications, negotiate terms, and clarify any concerns.</li>
											<li>Provide transparency to make informed decisions based on detailed product information, reviews, ratings, and other relevant data.</li>
											<!-- <li>Provide market insights, trend reports, and data analytics that can help you stay informed about industry trends, pricing fluctuations, and demand patterns.</li> -->
										</ul>
									</div>
									<a href="#" class="read-more">Start Buying - FREE</a>
								</div>
							</div>
						</article>
					</div>
					<!-- End .col-md-6 -->
				</div>

				<div class="mb-3"></div>
				<!-- End .mb-3 -->

				<div class="row">
					<div class="col-lg-4 mb-4 mb-lg-0">
						<div class="bg-white biz-box d-flex flex-column h-100">
							<div class="flex-fill">
								<div class="biz-box-title">
									<h3>New Members (Suppliers)</h3>
								</div>
								<div class="biz-box-content">
									<ul class="list-unstyled">
										<?php
										foreach ($sellercompany as $key => $val) {
										?>
											<li class="mb-2">
												<a href="<?= site_url('company/' . $val['slag']); ?>" class="d-block">
													<?php if (!empty($val['flag'])) { ?>
														<img src="https://b2bitem.com/upload/country/16_16/<?= $val['flag']; ?>" class="mr-1">
													<?php } ?>
													<?= $val['company_name']; ?> </a>
											</li>
										<?php } ?>
									</ul>
								</div>
							</div>
							<div class="text-center text-lg-right">
								<a href="#" class="btn btn-primary">
									<span>Start Now</span>
									<i class="icon-long-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-8 mb-4 mb-lg-0">
						<div class="bg-white biz-box h-100">
							<div class="biz-box-title d-flex align-items-center justify-content-between mb-0">
								<div>
									<h2 class="block-text">Latest Trade Offers</h2>
								</div>
							</div>
							<div class="biz-box-content">
								<div class="table-responsive">
									<table class="table requirement-table">
										<thead>
											<tr>
												<th style="min-width: 160px" scope="col" class="text-strong border-bottom-0">
													Offer Description
												</th>
												<th scope="col" class="text-strong border-bottom-0 text-nowrap">
													Country / Region
												</th>
												<th scope="col" class="text-strong border-bottom-0 text-nowrap">
													Posted on
												</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$selllist = $this->websitemodel->get_sell_offer_list_top_5();
											//echo '<pre>';print_r($selllist);exit;
											foreach ($selllist as $key => $val) {

											?>
												<tr class="table-unstyled">
													<td>
														<a href="<?= site_url('buysell/' . $val['slag']); ?>" class="text-medium text-business-tertiary">
															<?= $val['ad_title']; ?>
														</a>
													</td>

													<td class="td-unstyled">
														<img src="https://b2bitem.com/upload/country/16_16/<?= $val['flag']; ?>" class="flag mr-1" />
														<?= $val['country_name']; ?>
													</td>
													<td class="text-nowrap"><?= $val['date']; ?></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="mb-5"></div>
				<!-- End .mb-5 -->
			</div>
			<!-- End .col-lg-9 col-xxl-10 -->

			<aside class="col-xl-3 col-xxl-2 order-xl-first">
				<div class="sidebar sidebar-home">
					<div class="row">
						<!-- End .col-sm-6 col-xl-12 -->
						<div class="col-sm-6 col-xl-12 mb-2">
							<div class="mb-10"></div>
							<div class="widget widget-products">
								<h4 class="widget-title"><span>Latest Products</span></h4>
								<!-- End .widget-title -->

								<div class="products">
									<?php
									foreach ($productlist2 as $key => $v) {
									?>
										<div class="product product-sm">
											<figure class="product-media">
												<a href="#">
													<?php if (!empty($v['product_image'])) { ?>
														<img src="https://b2bitem.com/upload/product/<?= $v['product_image']; ?>" alt="<?= $v['product_name']; ?>" title="<?= $v['product_name']; ?>" class="product-image img-fluid" decoding="async" loading="lazy">
													<?php } ?>
												</a>
											</figure>

											<div class="product-body">
												<h5 class="product-title">
													<a href="#" class="d-block text-roboto-evening text-14"><?= $v['product_name']; ?></a>
													<div class="product-title country-info-container">
														<?php if (!empty($v['flag'])) { ?>
															<span class="mr-1 mt-n05">
																<img src="https://b2bitem.com/upload/country/16_16/<?= $v['flag']; ?>" alt="<?= $v['country_name']; ?>">
															</span>
														<?php } ?>
														<a href="#" class="text-13 text-strong text-muted"><?= $v['country_name']; ?></a>
													</div>
												</h5>
												<!-- End .product-title -->
												<!-- <div class="product-price">$<?= $v['price']; ?></div> -->
												<!-- End .product-price -->
											</div>
											<!-- End .product-body -->
										</div>
										<!-- End .product product-sm -->
									<?php } ?>
								</div>
								<!-- End .products -->
							</div>
							<!-- End .widget widget-products -->

						</div>
						<!-- End .col-sm-6 col-xl-12 -->

						<div class="col-12">
							<div class="widget widget-deals">
								<h4 class="widget-title"><span>Special Offer</span></h4>
								<!-- End .widget-title -->

								<div class="row">
									<div class="col-sm-6 col-xl-12">
										<div class="product text-center">
											<figure class="product-media">
												<span class="product-label label-sale">Deal of the week</span>
												<a href="product.html">
													<img src="assets/images/demos/demo-14/products/deals/product-1.jpg" alt="Product image" class="product-image" />
												</a>

												<div class="product-action-vertical">
													<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
													<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
													<a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
												</div>
												<!-- End .product-action-vertical -->

												<div class="product-action">
													<a href="#" class="btn-product btn-cart" title="Add to cart"><span>contact seller</span></a>
												</div>
												<!-- End .product-action -->
											</figure>
											<!-- End .product-media -->

											<div class="product-body">
												<div class="product-cat">
													<a href="#">Audio</a>
												</div>
												<!-- End .product-cat -->
												<h3 class="product-title">
													<a href="product.html">Bose SoundLink Micro speaker</a>
												</h3>
												<!-- End .product-title -->
												<div class="product-price">
													<span class="new-price">$99.99</span>
													<span class="old-price">Was $110.99</span>
												</div>
												<!-- End .product-price -->
												<div class="ratings-container">
													<div class="ratings">
														<div class="ratings-val" style="width: 100%"></div>
														<!-- End .ratings-val -->
													</div>
													<!-- End .ratings -->
													<span class="ratings-text">( 4 Reviews )</span>
												</div>
												<!-- End .rating-container -->

												<div class="product-nav product-nav-dots">
													<a href="#" class="active" style="background: #f3815f"><span class="sr-only">Color name</span></a>
													<a href="#" style="background: #333333"><span class="sr-only">Color name</span></a>
												</div>
												<!-- End .product-nav -->
											</div>
											<!-- End .product-body -->

											<div class="product-countdown" data-until="+44h" data-relative="true" data-labels-short="true"></div>
											<!-- End .product-countdown -->
										</div>
										<!-- End .product -->
									</div>
									<!-- End .col-sm-6 col-xl-12 -->

									<!-- End .col-sm-6 col-xl-12 -->
								</div>
								<!-- End .row -->
							</div>
							<!-- End .widget widget-deals -->
						</div>
						<!-- End .col-sm-6 col-lg-xl -->

						<!-- End .col-sm-6 col-lg-12 -->

						<!-- End .col-sm-6 col-xl-12 -->
					</div>
					<!-- End .row -->
				</div>
				<!-- End .sidebar sidebar-home -->
			</aside>
			<!-- End .col-lg-3 col-xxl-2 -->
		</div>
		<!-- End .row -->
	</div>
	<!-- End .container-fluid -->
	<div class="container">
		<!-- <h2 class="title text-center mb-5">
			Sale Banner <span class="title-separator">/</span> With Background
		</h2> -->
		<!-- End .title -->

		<div class="cta cta-border mb-5">
			<div class="row justify-content-center">
				<div class="col-md-11 col-xl-10">
					<div class="cta-content">
						<div class="cta-heading">
							<h3 class="cta-title text-right">
								Describe your needs
							</h3>
							<!-- End .cta-title -->
						</div>
						<!-- End .cta-heading -->

						<div class="cta-text">
							<p>
								Post your buy requirement & get quotes from potential suppliers.
							</p>
						</div>
						<div class="col-lg-6">
							<!-- <h2 class="title mb-1">Got Any Questions?</h2>
							<p class="mb-2">Use the form below to get in touch with the sales team</p> -->

							<form action="#" class="contact-form mb-3">
								<div class="row">
									<div class="col-sm-12">
										<label for="cname" class="sr-only">Item Name</label>
										<input type="text" class="form-control" id="cname" placeholder="Enter product name ..." required>
									</div><!-- End .col-sm-6 -->
								</div><!-- End .row -->
								<div class="form-group">
									<label class="text-lg-18 d-none text-muted">Item Category <span class="text-danger">*</span>
									</label>
									<div>
										<select name="cat_id" id="cat_id" class="form-control text-md-down-14 rounded-0" style="height: 45px;">
											<option value="">-- Select Category --</option>
											<?php foreach ($product_cat as $key => $cat) { ?>
												<option value="<?= $cat['id']; ?>"> <?= $cat['category_name']; ?> </option>
											<?php } ?>
										</select>
									</div>
								</div>
								<label for="cmessage" class="sr-only">Message</label>
								<textarea class="form-control" cols="30" rows="4" id="cmessage" required placeholder="Describe your buying requirement including specifications, sizes etc"></textarea>

								<button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm" style="color: #333333;">
									<span>Post Buy Leads</span>
									<i class="icon-long-arrow-right"></i>
								</button>
							</form><!-- End .contact-form -->
						</div><!-- End .col-lg-6 -->
					</div>
					<!-- End .cta-content -->
				</div>
				<!-- End .col-xl-7 -->
			</div>
			<!-- End .row -->
		</div>
		<!-- End .cta -->
	</div>

	<div class="icon-boxes-container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<div class="icon-box icon-box-side">
						<span class="icon-box-icon text-dark">
							<i class="icon-rocket"></i>
						</span>
						<div class="icon-box-content">
							<h3 class="icon-box-title">Free Shipping</h3>
							<!-- End .icon-box-title -->
							<p>Orders $50 or more</p>
						</div>
						<!-- End .icon-box-content -->
					</div>
					<!-- End .icon-box -->
				</div>
				<!-- End .col-sm-6 col-lg-3 -->

				<div class="col-sm-6 col-lg-3">
					<div class="icon-box icon-box-side">
						<span class="icon-box-icon text-dark">
							<i class="icon-rotate-left"></i>
						</span>

						<div class="icon-box-content">
							<h3 class="icon-box-title">Free Returns</h3>
							<!-- End .icon-box-title -->
							<p>Within 30 days</p>
						</div>
						<!-- End .icon-box-content -->
					</div>
					<!-- End .icon-box -->
				</div>
				<!-- End .col-sm-6 col-lg-3 -->

				<div class="col-sm-6 col-lg-3">
					<div class="icon-box icon-box-side">
						<span class="icon-box-icon text-dark">
							<i class="icon-info-circle"></i>
						</span>

						<div class="icon-box-content">
							<h3 class="icon-box-title">Get 20% Off 1 Item</h3>
							<!-- End .icon-box-title -->
							<p>When you sign up</p>
						</div>
						<!-- End .icon-box-content -->
					</div>
					<!-- End .icon-box -->
				</div>
				<!-- End .col-sm-6 col-lg-3 -->

				<div class="col-sm-6 col-lg-3">
					<div class="icon-box icon-box-side">
						<span class="icon-box-icon text-dark">
							<i class="icon-life-ring"></i>
						</span>

						<div class="icon-box-content">
							<h3 class="icon-box-title">We Support</h3>
							<!-- End .icon-box-title -->
							<p>24/7 amazing services</p>
						</div>
						<!-- End .icon-box-content -->
					</div>
					<!-- End .icon-box -->
				</div>
				<!-- End .col-sm-6 col-lg-3 -->
			</div>
			<!-- End .row -->
		</div>
		<!-- End .container-fluid -->
	</div>
	<!-- End .icon-boxes-container -->
</main>
<!-- End .main -->

<footer class="footer">
	<div class="cta cta-horizontal cta-horizontal-box bg-dark bg-image" style="background-image: url('assets/images/demos/demo-14/bg-1.jpg')">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-xl-8 offset-xl-2">
					<div class="row align-items-center">
						<div class="col-lg-5 cta-txt">
							<h3 class="cta-title text-primary">Join Our Newsletter</h3>
							<!-- End .cta-title -->
							<p class="cta-desc text-light">
								Subcribe to get information about products and coupons
							</p>
							<!-- End .cta-desc -->
						</div>
						<!-- End .col-lg-5 -->

						<div class="col-lg-7">
							<form action="#">
								<div class="input-group">
									<input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" required />
									<div class="input-group-append">
										<button class="btn" type="submit">Subscribe</button>
									</div>
									<!-- .End .input-group-append -->
								</div>
								<!-- .End .input-group -->
							</form>
						</div>
						<!-- End .col-lg-7 -->
					</div>
					<!-- End .row -->
				</div>
				<!-- End .col-xl-8 offset-2 -->
			</div>
			<!-- End .row -->
		</div>
		<!-- End .container-fluid -->
	</div>
	<!-- End .cta -->
	<div class="footer-middle border-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-lg-4">
					<div class="widget widget-about">
						<img src="assets/images/logo/B2B-2nd.png" class="footer-logo" alt="Footer Logo" width="150" height="65" />
						<p>
							Praesent dapibus, neque id cursus ucibus, tortor neque
							egestas augue, eu vulputate magna eros eu erat. Aliquam erat
							volutpat. Nam dui mi, tincidunt quis, accumsan porttitor,
							facilisis luctus, metus.
						</p>

						<div class="widget-about-info">
							<div class="row">
								<div class="col-sm-6 col-md-4">
									<span class="widget-about-title">Got Question? Call us 24/7</span>
									<a href="tel:123456789">+880XXXXXXXXXX</a>
								</div>
								<!-- End .col-sm-6 -->
								<div class="col-sm-6 col-md-8">
									<span class="widget-about-title">Payment Method</span>
									<figure class="footer-payments">
										<img src="assets/images/payments.png" alt="Payment methods" width="272" height="20" />
									</figure>
									<!-- End .footer-payments -->
								</div>
								<!-- End .col-sm-6 -->
							</div>
							<!-- End .row -->
						</div>
						<!-- End .widget-about-info -->
					</div>
					<!-- End .widget about-widget -->
				</div>
				<!-- End .col-sm-12 col-lg-4 -->

				<div class="col-sm-4 col-lg-2">
					<div class="widget">
						<h4 class="widget-title">Useful Links</h4>
						<!-- End .widget-title -->

						<ul class="widget-list">
							<li><a href="about.html">About </a></li>
							<li><a href="#">How to shop on </a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="contact.html">Contact us</a></li>
							<li><a href="login.html">Log in</a></li>
						</ul>
						<!-- End .widget-list -->
					</div>
					<!-- End .widget -->
				</div>
				<!-- End .col-sm-4 col-lg-2 -->

				<div class="col-sm-4 col-lg-2">
					<div class="widget">
						<h4 class="widget-title">Customer Service</h4>
						<!-- End .widget-title -->

						<ul class="widget-list">
							<li><a href="#">Payment Methods</a></li>
							<li><a href="#">Money-back guarantee!</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="#">Shipping</a></li>
							<li><a href="#">Terms and conditions</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
						<!-- End .widget-list -->
					</div>
					<!-- End .widget -->
				</div>
				<!-- End .col-sm-4 col-lg-2 -->

				<div class="col-sm-4 col-lg-2">
					<div class="widget">
						<h4 class="widget-title">My Account</h4>
						<!-- End .widget-title -->

						<ul class="widget-list">
							<li><a href="#">Sign In</a></li>
							<li><a href="cart.html">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="#">Help</a></li>
						</ul>
						<!-- End .widget-list -->
					</div>
					<!-- End .widget -->
				</div>
				<!-- End .col-sm-4 col-lg-2 -->

				<div class="col-sm-4 col-lg-2">
					<div class="widget widget-newsletter">
						<h4 class="widget-title">Sign Up to Newsletter</h4>
						<!-- End .widget-title -->

						<p>
							Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan.
						</p>

						<form action="#">
							<div class="input-group">
								<input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" required />
								<div class="input-group-append">
									<button class="btn btn-dark" type="submit">
										<i class="icon-long-arrow-right"></i>
									</button>
								</div>
								<!-- .End .input-group-append -->
							</div>
							<!-- .End .input-group -->
						</form>
					</div>
					<!-- End .widget -->
				</div>
				<!-- End .col-sm-4 col-lg-2 -->
			</div>
			<!-- End .row -->
		</div>
		<!-- End .container-fluid -->
	</div>
	<!-- End .footer-middle -->

	<div class="footer-bottom">
		<div class="container-fluid">
			<p class="footer-copyright">
				Copyright © 2024. All Rights Reserved.
			</p>
			<!-- End .footer-copyright -->
			<div class="social-icons social-icons-color">
				<span class="social-label">Social Media</span>
				<a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
				<a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
				<a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
				<a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
				<a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
			</div>
			<!-- End .soial-icons -->
		</div>
		<!-- End .container-fluid -->
	</div>
	<!-- End .footer-bottom -->
</footer>
<!-- End .footer -->