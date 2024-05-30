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
				<li class="breadcrumb-item active" aria-current="page"> <?= $cat_info['category_name']; ?> </li>
			</ol>

		</div><!-- End .container-fluid -->
	</nav><!-- End .breadcrumb-nav -->

	<div class="page-content">

		<section class="container custom-container">
			<div class="mb-4 bg-cover bg-white border" style="background-image: url('https://b2bitem.com/public/uploads/category/1561297413-agro-and-agriculture.jpg');">
				<div class="bg-white-transparent-1">
					<div class="py-4 text-center">
						<div class="d-inline-block p-lg-4 bg-white-transparent-8 rounded">
							<div class="mb-3 mb-md-4">
								<h1 class="text-normal text-evening text-center"> <?= $cat_info['category_name']; ?> </h1>
							</div>
							<div class="d-flex flex-wrap justify-content-center">
								<a href="#" class="btn px-4 btn-b2bitem-primary btn-md-down-small w-sm-down-100 mx-3 my-2">Showcase Your Product - FREE</a>
								<a href="#" class="btn px-5 btn-b2bitem-secondary-close btn-md-down-small w-sm-down-100 mx-3 my-2">Post Buy Requirement</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="mb-5">
			<div class="container custom-container">
				<div class="row">
					<div class="col-lg-3">
						<aside class="aside-on-responsive" id="asideNav">
							<div class="aside-content">
								<div class="bg-white border mb-4">
									<div class="border-bottom">
										<h3 class="d-flex py-2 px-3 text-20">
											<span class="mr-2">
												<i class="<?= $cat_info['icon']; ?>" aria-hidden="true"></i>
											</span> <?= $cat_info['category_name']; ?>
										</h3>
									</div>
									<div class="px-3">
										<ul class="aside-category-list-v1">

											<?php
											$sub_cat = $this->sellermodel->get_sub_cat_list($cat_info['id']);

											foreach ($sub_cat as $key => $v) {

												$subslag = $v['sub_link_prefix'];
											?>

												<li class="aside-category-item-v1">
													<a href="<?= site_url('subcategory/' . $subslag); ?>" class="aside-category-link-v1 align-items-center">
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
										<a href="#" class="btn btn-b2bitem-secondary btn-block">Display Your Product</a>
									</div>
								</div>
								<div class="bg-white border mb-4">
									<div class="border-bottom">
										<span class="d-flex py-2 px-3 text-20">Browse Products by Name</span>
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
						<div class="mb-4">
							<div class="mb-3">
								<h2 class="text-md-down-20 text-lg-32 title-with-square-box">Featured Product - <?= $cat_info['category_name']; ?> </h2>
							</div>
							<ul class="list-unstyled row mb-4">

								<?php
								//echo '<pre>';print_r($fplist);exit;
								foreach ($fplist as $v) {
								?>

									<li class="col-6 col-md-4 col-lg-3 col-xl-2 mb-3 mb-lg-4">
										<div class="product-card border h-100">
											<a href="<?= site_url('subcategory/' . $v['sub_link_prefix']); ?>" class="d-block text-overflow-ellipsis text-14 mb-1"><?= $v['sub_category_name']; ?></a>
											<div class="product-card-content">
												<div>
													<a href="<?= site_url('product/view/' . $v['pslag']); ?>" class="product-img-box product-img-4by3">
														<img src="https://b2bitem.com/upload/product/<?= $v['product_image']; ?>" alt="<?= $v['product_name']; ?>" title="<?= $v['product_name']; ?>" class="product-img" decoding="async" loading="lazy">
													</a>
												</div>
												<div>
													<a href="<?= site_url('product/view/' . $v['pslag']); ?>" class="text-ellipsis-clamp-2 text-theme-to-link text-14 text-center" title="<?= $v['product_name']; ?>"> <?= $v['product_name']; ?> </a>
												</div>
											</div>
										</div>
									</li>

								<?php } ?>

							</ul>
						</div>

						<div class="biz-box bg-white mb-4">
							<div class="border-bottom py-2 mb-3">
								<h2 class="text-md-down-20 text-lg-32 title-with-square-box"><?= $cat_info['category_name']; ?> Product</h2>
							</div>
							<p class="text-lg-18"><?= $cat_info['short_description']; ?></p>
							<div class="row m-n2">

								<?php foreach ($sub_cat as $key => $va) {
									$subslag = $va['sub_link_prefix'];
								?>

									<div class="col-md-12 p-4">
										<div class="biz-card p-3 position-relative h-100">
											<div class="d-flex align-items-center">
												<div class="mr-2">
													<div class="box-60 rounded border">
														<?php if (!empty($va['sub_cat_img'])) { ?>
															<a href="<?= site_url('subcategory/' . $subslag); ?>">
																<img src="https://b2bitem.com/public/uploads/category/<?= $va['sub_cat_img']; ?>" class="img-fit-center rounded">
															</a>
														<?php } ?>
													</div>
												</div>
												<div class="flex-grow-1">
													<a href="<?= site_url('subcategory/' . $subslag); ?>" class="text-strong text-custom-link"> <?= $va['sub_category_name']; ?> </a>
												</div>
											</div>
											<p class="m-0 text-dark">
												<?= $va['short_description']; ?>
											</p>

											<div class="row" style="margin-top: 30px;">

												<?php

												$sub_cat_plist = $this->sellermodel->get_sub_cat_product_list($cat_info['id'], $va['id']);

												foreach ($sub_cat_plist as $key => $v) {
												?>


													<div class="col-md-3">
														<div class="product-card border h-100">
															<div class="product-header mb-">
																<div class="mb-2" style="text-align: center;">
																	<a href="<?= site_url('product/view/' . $v['pslag']); ?>" class="category-title"> <?= $v['product_name']; ?> </a>
																</div>
															</div>
															<a href="<?= site_url('product/view/' . $v['pslag']); ?>" class="product-img-box box-ratio-4by3 mb-2">
																<img src="https://b2bitem.com/upload/product/<?= $v['product_image']; ?>" alt="Maxon Qualcomm QCN9024 WiFi6 Module - Advanced Wireless Connectivity" title="Maxon Qualcomm QCN9024 WiFi6 Module - Advanced Wireless Connectivity" class="product-img" decoding="async" loading="lazy">
															</a>
															<div class="mb-3">
																<ul class="list-unstyled d-flex flex-wrap justify-content-between mb-0">
																	<li class="text-14 text-muted mr-2">Price: <?= $v['price']; ?> / </li>
																	<li class="text-14 text-muted">MOQ: <?= $v['min_order_qty']; ?></li>
																</ul>
															</div>
														</div>
													</div>

												<?php } ?>

											</div>

										</div>
									</div>

								<?php } ?>

							</div>
						</div>

						<div class="bg-white biz-box mb-4">
							<div class="biz-box-title mb-0">
								<div class="d-flex flex-wrap justify-content-between align-items-center m-n1">
									<h2 class="text-md-down-20 text-lg-32 block-text p-1 m-0"> <?= $cat_info['category_name']; ?> Product Suppliers</h2>
									<div class="p-1">
										<a href="https://b2bitem.com/business-directory/agro-agriculture" target="_blank" class="text-link">
											<i class="fa fa-external-link"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="biz-box-content">
								<div class="table-responsive">
									<table class="table requirement-table">
										<thead>
											<tr>
												<th style="min-width: 160px" scope="col" class="text-strong border-bottom-0">Supplier</th>
												<th scope="col" class="text-strong border-bottom-0 text-nowrap w-25">Country / Region</th>
												<th style="min-width: 160px" scope="col" class="text-strong border-bottom-0">Category</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($product_suppliear as $key => $val) { ?>
												<tr>
													<td>
														<a href="#"> <?= $val['company_name']; ?> </a>
													</td>
													<td>
														<span class="mr-1 mt-n05">
															<img src="https://b2bitem.com/public/flags/16x16/cn.png" alt="China">
														</span>
														<a href="#"><?= $val['country_name']; ?></a>
													</td>
													<td class="text-muted">
														<a href="#"> <?= $val['category_name']; ?></a>
														<i class="fa fa-angle-double-right mx-1"></i>
														<a href="#"> <?= $val['sub_category_name']; ?> </a>
													</td>
												</tr>

											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>



					</div>

				</div>
			</div>
		</section>

		<section class="mb-4">
			<div class="container custom-container">
				<div class="theme-block">
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
													<option value="<?= $val['id']; ?>"> <?= $val['category_name']; ?></option>
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
			</div>
		</section>

		<section class="mb-4">
			<div class="container custom-container">
				<div class="mb-4">
					<div class="bg-white biz-box with-footer-content">
						<div class="biz-box-title">
							<h2 class="text-md-down-20 text-lg-32 text-lg-32">
								<span class="d-lg-none">Product Categories</span>
								<span class="d-lg-down-none">Product Directory: Top Categories</span>
							</h2>
						</div>
						<div class="biz-box-content">
							<div class="category-list">
								<ul class="list-unstyled row mb-0">
									<?php foreach ($product_cat as $key => $val) { ?>
										<li class="col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-3">
											<a href="#" class="d-flex align-items-center">
												<span class="mr-2">
													<span class="box-20">
														<i class="fa fa-pagelines text-18 text-link" aria-hidden="true"></i>
													</span>
												</span>
												<span class="text-15 text-medium text-overflow-ellipsis"><?= $val['category_name']; ?></span>
											</a>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="mb-4">
					<div class="theme-block d-md-flex justify-content-between mb-2 py-1 py-xl-1">
						<h3 class="py-2 mb-0 mr-md-2 text-center text-md-left text-md-down-18">B2B <?= $cat_info['category_name']; ?> Product List</h3>
						<div class="py-2 text-center">
							<a href="#" class="btn btn-b2bitem-primary text-nowrap px-4">Showcase Your Product - FREE</a>
						</div>
					</div>
					<div class="theme-block"> <?= $cat_info['description']; ?> </div>
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