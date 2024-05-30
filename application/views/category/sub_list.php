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
				<li class="breadcrumb-item"><a href="https://b2bitem.com/product">Products</a></li> >
				<li class="breadcrumb-item">
					<a href="<?= site_url('category/' . $sub_cat_info['link_prefix']); ?>"> <?= $sub_cat_info['category_name']; ?> </a> >
				</li>
				<li class="breadcrumb-item active" aria-current="page"> <?= $sub_cat_info['sub_category_name']; ?> </li>
			</ol>

		</div><!-- End .container-fluid -->
	</nav><!-- End .breadcrumb-nav -->

	<div class="page-content">

		<section class="container custom-container mb-4">
			<div class="bg-lg-white border-lg border-lg-left-8 p-lg-4 px-xl-5">
				<div class="row">
					<div class="col-lg-6 mb-4  mb-lg-0">
						<div class="bg-white p-3 p-lg-0 border-lg-down mw-border-left-5 border-lg-right pr-xl-5 h-100 d-flex flex-column">
							<h1 class="text-theme mb-lg-5 text-strong">List of <?= $sub_cat_info['sub_category_name']; ?> Products</h1>
						</div>
					</div>
					<div class="col-lg-6 text-lg-right">
						<div class="bg-white p-3 p-lg-0 border-lg-down">
							<h3 class="mb-2 text-strong">List Your Products:</h3>
							<div class="row">
								<div class="col-lg-12">
									<ul class="list-unstyled">
										<li class="text-lg-18">
											<span class="mr-2">
												<i class="icofont-check text-business-secondary"></i>
											</span> Expand your reach <span class="d-md-down-none">- both locally and globally</span>.
										</li>
										<li class="text-lg-18">
											<span class="mr-2">
												<i class="icofont-check text-business-secondary"></i>
											</span> Increase visibility for your products <span class="d-md-down-none">- attract more buyers</span>
										</li>
										<li class="text-lg-18">
											<span class="mr-2">
												<i class="icofont-check text-business-secondary"></i>
											</span> Be discovered by new buyers <span class="d-md-down-none">- generate more sales</span>
										</li>
									</ul>
									<div>
										<a href="#" class="btn btn-dark bg-theme">List Your Products - Free</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="mb-4">
			<div class="container custom-container">
				<div class="mb-5">
					<div class="row">
						<div class="col-lg-3">
							<aside class="aside-on-responsive" id="asideNav">
								<div class="aside-content">
									<div class="bg-white border mb-4">
										<div class="border-bottom">
											<span class="d-flex py-2 px-3 text-20">
												<span class="mr-2">
													<i class="fa fa-pagelines" aria-hidden="true"></i>
												</span> <?= $sub_cat_info['category_name']; ?> </span>
										</div>
										<div class="px-3">
											<ul class="aside-category-list-v1">
												<?php
												$sub_cat = $this->sellermodel->get_sub_cat_list($sub_cat_info['cat_id']);

												foreach ($sub_cat as $key => $v) {
													$subslag = $v['sub_link_prefix'];
												?>
													<li class="aside-category-item-v1 ">
														<a href="<?= site_url('subcategory/' . $subslag); ?>" class="aside-category-link-v1 align-items-center ">
															<span class="mr-2 mt-n1">
																<i class="fa fa-circle text-5 link-icon"></i>
															</span> <?= $v['sub_category_name']; ?> </a>
													</li>
												<?php } ?>
											</ul>
										</div>
									</div>

									<div class="mb-4">
										<div class="mb-3">
											<a href="#" class="btn btn-b2bitem-theme btn-block">All Product Categories</a>
										</div>
										<div>
											<a href="#" class="btn btn-b2bitem-secondary btn-block">Display Product</a>
										</div>
									</div>
									<div class="bg-white border mb-4">
										<div class="border-bottom">
											<span class="d-flex py-2 px-3 text-20">Products by Name</span>
										</div>
										<div class="p-3">
											<ul class="d-flex flex-wrap list-unstyled m-n1 company-list-letter">
												<li class="p-1 ">
													<a href="#" class="box-25 btn btn-char text-14">
														<span class="text">A</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</aside>
						</div>

						<div class="col-lg-9">
							<div>
								<div class="mb-3">
									<h2 class="title-with-square-box"><?= $sub_cat_info['sub_category_name']; ?> - Product List</h2>
								</div>
								<ul class="list-unstyled row mb-4">

									<?php foreach ($sub_product_list as $key => $val) { ?>

										<li class="col-sm-6 col-lg-4 col-xl-3 mb-3 mb-lg-4">
											<div class="product-card-th">
												<div class="mb-1">
													<a href="<?= site_url('product/view/' . $val['pslag']); ?>" class="text-ellipsis-clamp-2" title="Weiwei9zp-3.8t Agricultural Grass Straw Crusher Output 3t/h"> <?= $val['product_name']; ?> </a>
												</div>
												<div class="product-card-th-grid">
													<div class="product-card-th-grid-gallery position-relative">
														<a href="<?= site_url('product/view/' . $val['pslag']); ?>" class="product-img-box">
															<img src="https://b2bitem.com/upload/product/<?= $val['product_image']; ?>" alt="<?= $v['product_image']; ?>" title="<?= $val['product_name']; ?>" class="product-img" decoding="async" loading="lazy">
														</a>
													</div>
													<div class="product-card-th-grid-content">
														<div class="text-14 my-2">Price: USD <?= $val['price']; ?> / <?= $val['unit']; ?></div>
														<div class="text-14 mb-2 d-sm-none">MOQ: 1 Pieces</div>
														<div class="mb-2">
															<div class="d-flex align-items-center">
																<?php if (!empty($val['flag'])) { ?>
																	<span class="mr-1 mt-n05">
																		<img src="http://b2bitem.com/upload/country/16_16/<?= $val['flag']; ?>" alt="<?= $v['country_name']; ?>">
																	</span>
																<?php } ?>
																<a href="<?= site_url('company/' . $val['slag']); ?>" class="text-overflow-ellipsis text-14"> <?= $val['company_name']; ?></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>

									<?php } ?>

								</ul>

								<div class="p-3 bg-white border border-left-5px border-left-business-secondary my-4">
									<p class="m-0 text-16 text-lg-20">
										<a href="#" class="text-black">Looking for Agriculture Products Processing suppliers? Start by <span class="text-custom-link text-strong">Clicking Here!</span>
										</a>
									</p>
								</div>
								<div class="p-3 bg-white border border-left-5px border-left-business-secondary my-4">
									<p class="mb-1 text-16 text-lg-20">
										<a href="#" class="text-black">Can’t find what you are looking for? <span class="text-custom-link text-strong">Post your Buy Requirements - Free</span>
										</a>
									</p>
									<p class="mb-0 text-16 text-lg-20">
										<a href="#" class="text-black">Do you have Agriculture Products Processing or other products of your own? <span class="text-custom-link text-strong">List Your Product - Free</span>
										</a>
									</p>
								</div>

								<div class="biz-box bg-white py-3">
									<div class="border-bottom pb-2 mb-3">
										<h3 class="m-0">Suppliers Info - <?= $sub_cat_info['category_name']; ?> </h3>
									</div>
									<ul class="list-unstyled row my-n1">

										<?php foreach ($sub_cat as $key => $val) { ?>

											<li class="col-sm col-lg-4 py-1">
												<a href="<?= site_url('subcategory/' . $val['sub_link_prefix']); ?>" class="text-custom-link"> <?= $val['sub_category_name'] ?></a>
											</li>

										<?php } ?>

									</ul>
								</div>

							</div>
						</div>

					</div>


				</div>
				<div class="theme-block mb-4">
					<div class="row">
						<div class="col-lg-6 mb-3 mb-lg-0">
							<div class="py-lg-4">
								<div class="text-business-secondary text-center">
									<i class="icofont-penalty-card fa-4x"></i>
								</div>
								<h4 class="text-thin text-center mt-4 mb-3">TELL US WHAT YOU NEED</h4>
								<h4 class="text-md-down-20 text-normal text-theme line-height-150 text-center"> Post your buy requirement & get quotes from top manufacturers & suppliers.</h4>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="py-3">
								<form method="post" action="#">
									<input type="hidden" name="_token" value="MVX6BTCWf4FLb058MmeaKdEEOTIlkfT2UxWQq2zO">
									<div class="form-group">
										<label class="text-lg-18 d-none text-muted">Product Name <span class="text-danger">*</span>
										</label>
										<input type="text" name="title" id="title" value="" class="form-control text-md-down-14 rounded-0" placeholder="Enter product name ...">
									</div>
									<div class="form-group">
										<label class="text-lg-18 d-none text-muted">Product Category <span class="text-danger">*</span>
										</label>
										<div>
											<select name="cat_id" id="cat_id" class="form-control text-md-down-14 rounded-0">
												<option value="">-- Select Product Category --</option>
												<?php foreach ($product_cat as $key => $val) { ?>
													<option value="<?= $val['id']; ?>"> <?= $val['category_name']; ?> </option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="text-lg-18 d-none text-muted">Describe Your Buying Requirement</label>
										<textarea rows="4" name="details" id="details" class="form-control text-md-down-14 form-control-md-down-large rounded-0" placeholder="Describe your buying requirement including specifications, sizes etc"></textarea>
									</div>
									<div class="text-center mt-3 pt-lg-3">
										<button type="button" class="btn btn-b2bitem-secondary btn-md-down-small rounded-0 px-4">Post Buy Requirement</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="mb-4">
					<div class="bg-white biz-box with-footer-content">
						<div class="biz-box-title">
							<h3 class="text-lg-32">Category Wise Product List</h3>
						</div>
						<div class="biz-box-content">
							<div class="category-list">
								<ul class="list-unstyled row mb-0">
									<?php foreach ($product_cat as $key => $val) { ?>
										<li class="col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-3">
											<a href="<?= site_url('category/' . $val['link_prefix']); ?>" class="d-flex align-items-center">
												<span class="mr-2">
													<span class="box-20">
														<i class="fa fa-pagelines text-18 text-link" aria-hidden="true"></i>
													</span>
												</span>
												<span class="text-15 text-medium text-overflow-ellipsis"> <?= $val['category_name']; ?> </span>
											</a>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="mb-4">
					<div class="bg-white d-md-flex justify-content-between px-3 py-3 py-md-0 mb-2">
						<h3 class="text-center text-md-left text-20 text-lg-24 mt-2 mb-3 mb-md-2">List of <?= $sub_cat_info['sub_category_name']; ?> at Wholesale B2B Prices</h3>
						<div class="my-2 text-center">
							<a href="#" class="btn btn-b2bitem-primary btn-sm px-4">List Your Product - FREE</a>
						</div>
					</div>
					<div class="theme-block"> <?= $sub_cat_info['description']; ?>
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