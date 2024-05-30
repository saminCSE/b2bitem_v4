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

	<div class="page-content">

		<div class="mb-4">
			<div class="container custom-container">
				<div class="row">
					<div class="col-lg-4 col-xl-3">
						<aside class="aside-on-responsive">
							<div class="aside-content">
								<div class="biz-box bg-white p-0 mb-4">
									<div class="biz-box-title px-3 bg-light mb-0">
										<h5 class="block-text text-strong">Post Buy Requirement</h5>
									</div>
									<div class="biz-box-content p-3">
										<p class="mb-3">Get quick response from worldwide suppliers</p>
										<form method="post" action="#">
											<input type="hidden" name="_token" value="oLoUbSPGcL5K2z3hiPVUwEd4Uq4fiqpXTL3CKuA4">
											<div class="form-group">
												<label class="text-medium text-muted sr-only">Product You Need</label>
												<input type="text" name="title" id="title" value class="form-control" placeholder="Product You Need">
											</div>
											<div class="form-group">
												<label class="text-medium text-muted sr-only">Requirements</label>
												<select name="cat_id" id="cat_id" class="form-control">
													<option value>Select Product Category</option>
													<?php foreach ($product_cat as $key => $val) { ?>
														<option value="<?= $val['id']; ?>"><?= $val['category_name']; ?></option>
													<?php } ?>
												</select>
											</div>
											<div class="form-group">
												<label class="text-medium text-muted sr-only">Details</label>
												<textarea class="form-control no-focus" name="details" id="details" placeholder="Describe your buying requirement ..."></textarea>
											</div>
											<div class="px-md-5 mt-4 mb-3">
												<button type="submit" class="btn btn-b2bmap-primary btn-block">Submit</button>
											</div>
										</form>
									</div>
								</div>
								<div class="bg-white border mb-4">
									<div class="border-bottom px-3 py-2">
										<h4 class="text-strong m-0">Buy Leads</h4>
									</div>
									<div>
										<ul class="navbar-nav aside-category-list">
											<?php foreach ($product_cat as $key => $val) {
												$icon = $val['icon'];
											?>

												<li class="nav-item aside-category-item">
													<a href="<?= site_url('cat_wise_buyer/' . $val['link_prefix']); ?>" class="aside-category-link">
														<i class="<?= $icon; ?> mr-2 link-icon"></i> <?= $val['category_name']; ?> </a>
												</li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>
						</aside>
					</div>
					<div class="col-lg-8 col-xl-9">
						<div class="biz-box bg-white mb-4">
							<div class="biz-box-title d-flex flex-wrap flex-xl-nowrap justify-content-between">
								<h3 class="my-2 my-xl-0 mr-2">
									<?php
									if ($info['category'] == 'sell') {
										echo 'Sell';
									} else {
										echo 'Buy';
									}

									?>


									Requirement: <?= $info['ad_title']; ?></h3>
								<div></div>
							</div>
							<div class="biz-box-content">
								<div class="table-responsive">
									<table class="table table-sm table-borderless text-lg-17 w-auto">
										<tbody>
											<tr>
												<td class="text-deep-muted pl-0 pr-3">Buyer From: </td>
												<td><?= $info['country_name']; ?></td>
											</tr>
											<tr>
												<td class="text-deep-muted pl-0 pr-3">Category: </td>
												<td><?= $info['category_name']; ?></td>
											</tr>
											<tr>
												<td class="text-deep-muted pl-0 pr-3">Product Name: </td>
												<td><?= $info['product_name']; ?></td>
											</tr>
											<tr>
												<td class="text-deep-muted pl-0 pr-3">Quantity:</td>
												<td><?= $info['qty'] . ' ' . $info['unit']; ?></td>
											</tr>
											<tr>
												<td class="text-deep-muted pl-0 pr-3">Packing Terms: </td>
												<td><?= $info['packaging_terms']; ?></td>
											</tr>
											<tr>
												<td class="text-deep-muted pl-0 pr-3">Shipping Terms: </td>
												<td><?= $info['shipping_terms']; ?></td>
											</tr>
											<tr>
												<td class="text-deep-muted pl-0 pr-3">Validity Date: </td>
												<td><?= $info['validity_date']; ?></td>
											</tr>
											<tr>
												<td class="text-deep-muted pl-0 pr-3">Post Date: </td>
												<td><?= $info['date']; ?></td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--div class="text-center text-md-right mb-2">
                    <a href="#" data-toggle="modal" data-target="#popupLoginFormModal" class="btn btn-b2bmap-primary btn-sm px-5 px-lg-4">Contact Buyer</a>
                  </div-->
							</div>
						</div>
						<div class="card rounded-0 bg-white mb-4">
							<div class="card-header bg-white">
								<h5 class="text-strong text-muted m-0">Requirement Details</h5>
							</div>
							<div class="card-body bg-white">
								<p class="text-lg-17">
									<?= $info['req_details']; ?>
								</p>
								<div class="mt-3"></div>
							</div>
						</div>
						<div class="card rounded-0 bg-white mb-4">
							<div class="card-header bg-white">
								<h5 class="text-strong text-muted m-0"> Contact Information </h5>
							</div>
							<div class="card-body bg-white">
								<div class="table-responsive">
									<table class="table table-borderless text-lg-17 w-auto">
										<tbody>
											<tr>
												<td class="text-deep-muted pl-0">Company Name: </td>
												<td> <span class="text-muted"><?= $info['company_name']; ?></span>
												</td>
											</tr>
											<tr>
												<td class="text-deep-muted pl-0">Contact Person: </td>
												<td> <span class="text-muted"><?= $info['contact_person']; ?></span>
												</td>
											</tr>
											<tr>
												<td class="text-deep-muted pl-0">Contact No: </td>
												<td> <span class="text-muted"><?= $info['mobile']; ?></span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div id="buy-requirement-inquiry"></div>
						<div class="card rounded-0 mb-4 specification">
							<div class="card-header bg-white d-flex justify-content-between">
								<h5 class="text-strong text-muted m-0"> Contact Buyer About This Buy Requirement </h5>
							</div>
							<div class="card-body bg-white">
								<div class="biz-form px-lg-5 py-lg-4">
									<div class="text-center">
										<form action="#" method="post" enctype="multipart/form-data">
											<input type="hidden" name="_token" value="oLoUbSPGcL5K2z3hiPVUwEd4Uq4fiqpXTL3CKuA4">
									</div>
									<input type="hidden" name="inquiry_to" value="buyer">
									<input type="hidden" name="item_type" value="buyoffer">
									<input type="hidden" name="item_id" value="18756">
									<div class="biz-form">
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group d-lg-down-none">
													<!--img src="https://b2bmap.com/public/images/mail.png" alt="Coffee Beans" title="Coffee Beans" class="img-fluid mx-auto d-block w-xl-75" decoding="async" loading="lazy"-->
												</div>
											</div>
											<div class="col-lg-8">
												<div class="form-group">
													<div>
														<input type="text" name="subject" value=" Quotation On : Coffee Beans " class="form-control">
													</div>
												</div>
												<div class="form-group">
													<div>
														<textarea rows="6" name="mail_body" class="form-control" placeholder="Enter quotation details"></textarea>
													</div>
												</div>
												<div class="text-center">
													<a href="#" data-toggle="modal" data-target="#popupLoginFormModal" class="btn btn-info px-5 btn-md-down-small">Submit</a>
												</div>
											</div>
										</div>
									</div>
									<div class="text-center">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

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