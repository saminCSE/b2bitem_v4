<header class="header">
	<div class="header-top">
		<div class="container-fluid">
			<div class="header-left">
				<div class="header-dropdown">
					<a href="#">Eng</a>
					<div class="header-menu">
						<ul>
							<li><a href="#">English</a></li>
							<li><a href="#">French</a></li>
							<li><a href="#">Spanish</a></li>
						</ul>
					</div><!-- End .header-menu -->
				</div><!-- End .header-dropdown -->
			</div><!-- End .header-left -->

			<div class="header-right">
				<ul class="top-menu">
					<li>
						<a href="#">Links</a>
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="contact.html">Contact Us</a></li>
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
				</ul><!-- End .top-menu -->
			</div><!-- End .header-right -->
		</div><!-- End .container-fluid -->
	</div><!-- End .header-top -->

	<div class="header-middle sticky-header">
		<div class="container-fluid">
			<div class="header-left">
				<button class="mobile-menu-toggler">
					<span class="sr-only">Toggle mobile menu</span>
					<i class="icon-bars"></i>
				</button>

				<a href="index.html" class="logo">
					<img src="assets/images/logo/B2B-2nd.png" alt="b2b Logo" width="150" height="75" />
				</a>

				<nav class="main-nav">
					<ul class="menu sf-arrows">
						<li>
							<a href="<?= site_url('website') ?>" class="sf-ul">Home</a>
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
					</ul><!-- End .menu -->
				</nav><!-- End .main-nav -->
			</div><!-- End .header-left -->

			<div class="header-right">
				<div class="header-search">
					<a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
					<form action="#" method="get">
						<div class="header-search-wrapper">
							<label for="q" class="sr-only">Search</label>
							<input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
						</div><!-- End .header-search-wrapper -->
					</form>
				</div><!-- End .header-search -->
				<div class="dropdown compare-dropdown">
					<a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
						<i class="icon-random"></i>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<ul class="compare-products">
							<li class="compare-product">
								<a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
								<h4 class="compare-product-title"><a href="product.html">Blue Night Dress</a></h4>
							</li>
							<li class="compare-product">
								<a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
								<h4 class="compare-product-title"><a href="product.html">White Long Skirt</a></h4>
							</li>
						</ul>

						<div class="compare-actions">
							<a href="#" class="action-link">Clear All</a>
							<a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i class="icon-long-arrow-right"></i></a>
						</div>
					</div><!-- End .dropdown-menu -->
				</div><!-- End .compare-dropdown -->

				<div class="dropdown cart-dropdown">
					<a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
						<i class="icon-shopping-cart"></i>
						<span class="cart-count">2</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<div class="dropdown-cart-products">
							<div class="product">
								<div class="product-cart-details">
									<h4 class="product-title">
										<a href="product.html">Beige knitted elastic runner shoes</a>
									</h4>

									<span class="cart-product-info">
										<span class="cart-product-qty">1</span>
										x $84.00
									</span>
								</div><!-- End .product-cart-details -->

								<figure class="product-image-container">
									<a href="product.html" class="product-image">
										<img src="assets/images/products/cart/product-1.jpg" alt="product">
									</a>
								</figure>
								<a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
							</div><!-- End .product -->

							<div class="product">
								<div class="product-cart-details">
									<h4 class="product-title">
										<a href="product.html">Blue utility pinafore denim dress</a>
									</h4>

									<span class="cart-product-info">
										<span class="cart-product-qty">1</span>
										x $76.00
									</span>
								</div><!-- End .product-cart-details -->

								<figure class="product-image-container">
									<a href="product.html" class="product-image">
										<img src="assets/images/products/cart/product-2.jpg" alt="product">
									</a>
								</figure>
								<a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
							</div><!-- End .product -->
						</div><!-- End .cart-product -->

						<div class="dropdown-cart-total">
							<span>Total</span>

							<span class="cart-total-price">$160.00</span>
						</div><!-- End .dropdown-cart-total -->

						<div class="dropdown-cart-action">
							<a href="cart.html" class="btn btn-primary">View Cart</a>
							<a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
						</div><!-- End .dropdown-cart-total -->
					</div><!-- End .dropdown-menu -->
				</div><!-- End .cart-dropdown -->
			</div><!-- End .header-right -->
		</div><!-- End .container-fluid -->
	</div><!-- End .header-middle -->
</header><!-- End .header -->

<main class="main">
	<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
		<div class="container-fluid d-flex align-items-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="https://b2bitem.com">B2bitem</a></li> >
				<li class="breadcrumb-item"><a href="#">Companies</a></li>
			</ol>

		</div><!-- End .container-fluid -->
	</nav><!-- End .breadcrumb-nav -->

	<div class="page-content">

		<section class="mb-4">
			<div class="container custom-container">
				<div class="p-3 px-lg-5 bg-white" style="border: 1px solid #0000001f; border-radius: 5px;">
					<div class="row align-items-center">
						<div class="col-lg-8 col-xl-9">
							<div class="border-lg-right">
								<h1 class="mb-2 text-muted text-strong pr-lg-5 text-lg-down-20"> List Your Company To Gain More Buyer <br /> Exposure - Sell More ! </h1>
								<h3 class="text-18 text-lg-20 text-theme line-height-150 mb-lg-0">List Your Company Details With Our Easy To Use Company Listing Tools. <span class="d-none d-lg-block">Build Strong Online Presence and Get New Buyers.</span>
								</h3>
							</div>
						</div>
						<div class="col-lg-4 col-xl-3">
							<div class="text-center my-1">
								<a href="#" class="btn px-4 btn-b2bmap-primary btn-md-down-small w-sm-down-100">List Your Business - FREE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="mb-4">
			<div class="container custom-container">
				<div class="row">
					<div class="col-lg-3">
						<aside class="aside-on-responsive" id="asideNav">
							<div class="aside-content">
								<div class="directory-tab-box bg-white border mb-4">
									<div class="biz-box-title px-3 bg-light mb-0">
										<h4 class="block-text text-20 text-strong">Suppliers By Category</h4>
									</div>
									<ul class="list-unstyled mb-0 aside-category-list">

										<?php

										foreach ($product_cat as $key => $val) {

											$catname = $val['category_name'];

											$icon = $val['icon'];

											$slag = $val['link_prefix'];

											$sub_cat = $this->sellermodel->get_sub_cat_list($val['id']);

										?>

											<li class="nav-item aside-category-item dropdown">
												<a href="https://b2bitem.com/business-directory/agro-agriculture" class="bg-white px-3 d-flex aside-category-link">
													<span class="mr-2">
														<i class="<?= $icon; ?> link-icon"></i>
													</span> <?= $catname; ?> <span class="ml-auto pl-2 d-lg-down-none">
														<i class="fa fa-angle-right"></i>
													</span>
												</a>
												<div class="dropdown-menu category-menu-dropdown-submenu mt-n2">
													<div class="text-20 text-strong mb-3">
														<a href="https://b2bitem.com/business-directory/agro-agriculture"><?= $catname; ?></a>
													</div>
													<ul class="list-unstyled row mb-0">
														<?php
														foreach ($sub_cat as $key => $v) {

															$subcat = $v['sub_category_name'];
														?>
															<li class="col-sm-6 col-lg-4 mb-2">
																<a href="https://b2bitem.com/business-directory/agro-agriculture/agri-business" class="d-flex d-md-block text-nowrap text-14 text-theme text-overflow-ellipsis">
																	<span class="mt-n05 mr-2 d-md-none">
																		<i class="fa fa-circle text-6"></i>
																	</span> <?= $subcat; ?> </a>
															</li>
														<?php } ?>
													</ul>
												</div>
											</li>
										<?php } ?>
									</ul>
								</div>

								<div class="d-lg-down-none">
									<div class="biz-box bg-white p-0 mb-4">
										<div class="biz-box-title px-3 bg-light mb-0">
											<h5 class="block-text text-strong">Post Buy Requirement</h5>
										</div>
										<div class="biz-box-content p-3">
											<p class="mb-3">Get quick response from worldwide suppliers</p>
											<form method="post" action="#">
												<input type="hidden" name="_token" value="MVX6BTCWf4FLb058MmeaKdEEOTIlkfT2UxWQq2zO">
												<div class="form-group">
													<label class="text-medium text-muted sr-only">Product You Need</label>
													<input type="text" name="title" id="title" value="" class="form-control" placeholder="Product You Need">
												</div>
												<div class="form-group">
													<label class="text-medium text-muted sr-only">Requirements</label>
													<select name="cat_id" id="cat_id" class="form-control">
														<option value="">Select Product Category</option>
														<?php

														foreach ($product_cat as $key => $val) {

															$catname = $val['category_name'];

															$sub_cat = $this->sellermodel->get_sub_cat_list($val['id']);

														?>
															<option value="<?= $val['id']; ?>"> <?= $catname; ?> </option>
														<?php } ?>
													</select>
												</div>
												<div class="form-group">
													<label class="text-medium text-muted sr-only">Details</label>
													<textarea class="form-control no-focus" name="details" id="details" placeholder="Describe your buying requirement ..."></textarea>
												</div>
												<div class="px-md-5 mt-4 mb-3">
													<button type="button" class="btn btn-b2bmap-primary btn-block">Submit</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</aside>
					</div>



					<div class="col-lg-9">
						<div class="theme-block position-relative mb-4">
							<div class="border-bottom mb-1">
								<h2>List of Suppliers</h2>
							</div>
							<div class="preloader">
								<div class="preloader-backdrop">
									<div class="loader"></div>
								</div>
							</div>
							<div class="table-responsive position-relative">
								<table class="table table-borderless company-list-table">
									<tbody id="directoryContent">
										<?php foreach ($suppliers as $key => $v) { ?>
											<tr>
												<td>
													<a href="<?= site_url('company/' . $v['slag']); ?>"> <?= $v['company_name']; ?> </a>
												</td>
												<td class="country-info-container" style="min-width: 200px">
													<?php if (!empty($v['flag'])) { ?>
														<span class="mr-1 mt-n05">
															<img src="https://b2bitem.com/upload/country/16_16/<?= $v['flag']; ?>" alt="<?= $v['country_name']; ?>">
														</span>
													<?php } ?>
													<a href="#"><?= $v['country_name']; ?></a>
												</td>
												<td>
													<a href="#"><?= $v['category_name']; ?></a>
													<i class="fa fa-angle-double-right"></i>
													<a href="#" class="text-nowrap"> <?= $v['sub_category_name']; ?> </a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
							<div class="text-center">
								<a href="#" class="btn btn-b2bmap-secondary">List Your Business - Free</a>
							</div>
						</div>

						<div class="biz-box bg-white py-3 mb-4 d-lg-down-none">
							<div class="border-bottom mb-2">
								<h3>New Products From Suppliers</h3>
							</div>
							<div class="table-responsive">
								<table class="table table-borderless table-striped table-first-no-border v-align-middle mb-0">
									<tbody>

										<?php foreach ($product as $key => $v) { ?>

											<tr>
												<td>
													<?php if (!empty($v['product_image'])) { ?>
														<a href="#" class="box-60 rounded border">
															<img src="https://b2bitem.com/upload/product/<?= $v['product_image']; ?>" decoding="async" loading="lazy" class="img-fit-center rounded">
														</a>
													<?php } ?>
												</td>
												<td style="max-width: 280px">
													<a href="<?= site_url('product/view/' . $v['pslag']); ?>" class="d-block"> <?= $v['product_name']; ?></a>
												</td>
												<td class="country-info-container" style="min-width: 200px">
													<?php if (!empty($v['flag'])) { ?>
														<span class="mr-1 mt-n05">
															<img src="https://b2bitem.com/upload/country/16_16/<?= $v['flag']; ?>" alt="<?= $v['country_name']; ?>">
														</span>
													<?php } ?>
													<a href="https://b2bitem.com/china/products"><?= $v['country_name']; ?></a>
												</td>
												<td>
													<a href="https://b2bitem.com/product-list/home-appliances"><?= $v['category_name']; ?></a>
													<i class="fa fa-angle-double-right mx-1"></i>
													<a href="https://b2bitem.com/product-list/kitchen-appliances"> <?= $v['sub_category_name']; ?> </a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>

						<div class="mb-4">
							<div class="bg-white biz-box with-footer-content">
								<div class="biz-box-title">
									<h3 class="text-lg-32">
										<span class="d-lg-none">Product Categories</span>
										<span class="d-lg-down-none">Product Directory: Top Categories</span>
									</h3>
								</div>
								<div class="biz-box-content">
									<div class="category-list">
										<ul class="list-unstyled row mb-0">
											<?php foreach ($product_cat as $key => $v) {
												$icon = $v['icon'];
											?>
												<li class="col-sm-6 col-md-4 col-lg-3 mb-3">
													<a href="#" class="d-flex align-items-center">
														<span class="mr-2">
															<span class="box-20">
																<i class="<?= $icon; ?> text-18 text-link" aria-hidden="true"></i>
															</span>
														</span>
														<span class="text-15 text-medium text-overflow-ellipsis">
															<?= $v['category_name']; ?>
														</span>
													</a>
												</li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="collapse show" id="topCountries">
							<div class="biz-box bg-white mb-4">
								<div class="biz-box-title d-flex justify-content-between mb-3">
									<h4 class="block-text text-md-down-15">Suppliers By Region</h4>
								</div>
								<div class="biz-box-content">
									<ul class="list-unstyled mb-0 row grid-xl-5">
										<?php foreach ($country as $key => $v) { ?>
											<li class="col-6 col-md-4 col-xl-3 mb-2 country-info-container">
												<span class="mr-1 mt-n05">
													<img src="https://b2bitem.com/upload/country/16_16/<?= $v['flag']; ?>" alt="China">
												</span>
												<a href="#" class="text-strong text-14"><?= $v['country_name']; ?></a>
											</li>
										<?php } ?>
									</ul>
								</div>
							</div>

							<div class="theme-block border-0 common-shadow-box py-4" style="background-color: #259aa7">
								<h4 class="text-center text-white mb-3">
									Get quotes from top Suppliers and Exporters for Free!
								</h4>
								<div class="text-center mb-2">
									<a href="#" class="btn btn-lg btn-outline-light border-2px border-white px-4 px-md-5 text-uppercase text-15">Tell Us What You Need</a>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</section>

	</div><!-- End .page-content -->
</main><!-- End .main -->

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