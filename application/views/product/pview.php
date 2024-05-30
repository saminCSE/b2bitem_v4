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
<!-- End .header -->

<main class="main">
	<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
		<div class="container-fluid d-flex align-items-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="https://b2bitem.com">B2bitem</a></li> >
				<li class="breadcrumb-item"><a href="https://b2bitem.com/product">Products</a></li> >
				<li class="breadcrumb-item"><a href="<?= site_url('category/' . $pinfo['link_prefix']); ?>"><?= $pinfo['category_name']; ?></a></li> >
				<li class="breadcrumb-item"><a href="<?= site_url('subcategory/' . $pinfo['sub_link_prefix']); ?>"><?= $pinfo['sub_category_name']; ?></a></li> >
				<li class="breadcrumb-item active" aria-current="page"><?= $pinfo['product_name']; ?></li>
			</ol>

		</div><!-- End .container-fluid -->
	</nav><!-- End .breadcrumb-nav -->

	<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10">
					<div class="product-details-top">
						<div class="row">
							<div class="col-md-6 col-lg-7">
								<div class="product-gallery">
									<figure class="product-main-image">
										<span class="product-label label-top">Top</span>
										<!-- <img id="product-zoom" src="assets/images/products/single/sidebar-gallery/1.jpg" data-zoom-image="assets/images/products/single/sidebar-gallery/1-big.jpg" alt="product image" /> -->
										<?php if (!empty($pinfo['product_image'])) { ?>
											<img id="product-zoom" src="https://b2bitem.com/upload/product/<?= $pinfo['product_image']; ?>" data-zoom-image="https://b2bitem.com/upload/product/<?= $pinfo['product_image']; ?>" alt="<?= $pinfo['product_name']; ?>" title="<?= $pinfo['product_name']; ?>">
										<?php } ?>

										<a href="#" id="btn-product-gallery" class="btn-product-gallery">
											<i class="icon-arrows"></i>
										</a>
									</figure>
									<!-- End .product-main-image -->

									<div id="product-zoom-gallery" class="product-image-gallery">
										<!-- <a class="product-gallery-item active" href="#" data-image="assets/images/products/single/sidebar-gallery/1.jpg" data-zoom-image="assets/images/products/single/sidebar-gallery/1-big.jpg">
											<img src="assets/images/products/single/sidebar-gallery/1-small.jpg" alt="product side" />
										</a> -->
										<?php if (!empty($pinfo['product_image'])) { ?>
											<a class="product-gallery-item active" href="#" data-image="https://b2bitem.com/upload/product/<?= $pinfo['product_image']; ?>" data-zoom-image="https://b2bitem.com/upload/product/<?= $pinfo['product_image']; ?>">
												<img src="https://b2bitem.com/upload/product/<?= $pinfo['product_image']; ?>" alt="<?= $pinfo['product_name']; ?>" title="<?= $pinfo['product_name']; ?>" />
											</a>
										<?php } ?>
										<?php foreach ($pgalary as $key => $v) { ?>
											<a class="product-gallery-item active" href="#" data-image="https://b2bitem.com/upload/product/<?= $pinfo['product_image']; ?>" data-zoom-image="https://b2bitem.com/upload/product/<?= $v['product_pic']; ?>">
												<img src="https://b2bitem.com/upload/product/<?= $v['product_pic']; ?>" alt="<?= $pinfo['product_name']; ?>" title="<?= $pinfo['product_name']; ?>" />
											</a>
										<?php  } ?>
									</div>
									<!-- End .product-image-gallery -->
								</div>
								<!-- End .product-gallery -->
							</div><!-- End .col-lg-7 -->

							<div class="col-md-6 col-lg-5">
								<div class="product-details">
									<h1 class="product-title"><?= $pinfo['product_name']; ?></h1><!-- End .product-title -->



									<div class="product-price">
										<span class="new-price">$<?= $pinfo['price']; ?></span>
										<!-- <span class="old-price">$110.00</span> -->
									</div><!-- End .product-price -->

									<div class="product-content">
										<p><?= $pinfo['product_description']; ?></p>
									</div><!-- End .product-content -->


									<div class="details-filter-row details-row-size">
										<label for="size">QTY:</label>
										<div class="model">
											<?= $pinfo['min_order_qty']; ?> <?= $pinfo['unit']; ?>
										</div>
										<!-- End .select-custom -->
									</div><!-- End .details-filter-row -->

									<div class="details-filter-row details-row-size">
										<label for="size">Model:</label>
										<div class="model">
											<?= $pinfo['model_no']; ?>
										</div>
										<!-- End .select-custom -->
									</div><!-- End .details-filter-row -->

									<!-- <div class="product-details-action">
										<a href="#" class="btn-product "><span>contact seller</span></a>
									</div> -->
									<!-- End .product-details-action -->

									<div class="product-details-footer">
										<div class="product-cat">
											<span>Standard:</span>
											<a href="#"><?= $pinfo['standard']; ?></a>
										</div><!-- End .product-cat -->

										<div class="product-cat">
											<span>Category:</span>
											<a href="#"><?= $pinfo['category_name']; ?></a> >
											<a href="#"><?= $pinfo['sub_category_name']; ?> Care</a>
										</div><!-- End .product-cat -->

										<div class="social-icons social-icons-sm">
											<span class="social-label">Share:</span>
											<a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
											<a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
											<a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
											<a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
										</div>
									</div><!-- End .product-details-footer -->

									<div class="accordion accordion-plus product-details-accordion" id="product-accordion">
										<div class="card card-box card-sm">
											<div class="card-header" id="product-usages">
												<h2 class="card-title">
													<a class="collapsed" role="button" data-toggle="collapse" href="#product-accordion-info" aria-expanded="false" aria-controls="product-accordion-info">
														Product Usages
													</a>
												</h2>
											</div><!-- End .card-header -->
											<div id="product-accordion-info" class="collapse" aria-labelledby="product-usages" data-parent="#product-accordion">
												<div class="card-body">
													<div class="product-desc-content">
														<h3>Product Usages - Details</h3>
														<p><?= $pinfo['product_usage']; ?> </p>
													</div><!-- End .product-desc-content -->
												</div><!-- End .card-body -->
											</div><!-- End .collapse -->
										</div><!-- End .card -->

										<div class="card card-box card-sm">
											<div class="card-header" id="product-keywords">
												<h2 class="card-title">
													<a class="collapsed" role="button" data-toggle="collapse" href="#product-accordion-shipping" aria-expanded="false" aria-controls="product-accordion-shipping">
														Product Keywords
													</a>
												</h2>
											</div><!-- End .card-header -->
											<div id="product-accordion-shipping" class="collapse" aria-labelledby="product-keywords" data-parent="#product-accordion">
												<div class="card-body">
													<div class="product-desc-content">
														<h3>Product Keywords - Details</h3>
														<p><?= $pinfo['product_keywords']; ?> </p>
													</div><!-- End .product-desc-content -->
												</div><!-- End .card-body -->
											</div><!-- End .collapse -->
										</div><!-- End .card -->

										<div class="card card-box card-sm">
											<div class="card-header" id="product-desc-heading">
												<h2 class="card-title">
													<a role="button" data-toggle="collapse" href="#product-contact-desc" aria-expanded="false" aria-controls="product-contact-desc">
														Contact
													</a>
												</h2>
											</div><!-- End .card-header -->
											<div id="product-contact-desc" class="collapse show" aria-labelledby="product-desc-heading" data-parent="#product-accordion">
												<div class="card-body">
													<div class="product-desc-content">
														<div class="col-lg-12">
															<h2 class="title mb-1">Got Any Questions?</h2><!-- End .title mb-2 -->
															<p class="mb-2">Use the form below to get in touch with the sales team</p>

															<form action="#" class="contact-form mb-3">
																<div class="row">
																	<div class="col-sm-6">
																		<label for="cname" class="sr-only">Name</label>
																		<input type="text" class="form-control" id="cname" placeholder="Name *" required>
																	</div><!-- End .col-sm-6 -->

																	<div class="col-sm-6">
																		<label for="cemail" class="sr-only">Email</label>
																		<input type="email" class="form-control" id="cemail" placeholder="Email *" required>
																	</div><!-- End .col-sm-6 -->
																</div><!-- End .row -->

																<div class="row">
																	<div class="col-sm-6">
																		<label for="cphone" class="sr-only">Phone</label>
																		<input type="tel" class="form-control" id="cphone" placeholder="Phone">
																	</div><!-- End .col-sm-6 -->

																	<div class="col-sm-6">
																		<label for="csubject" class="sr-only">Subject</label>
																		<input type="text" class="form-control" id="csubject" placeholder="Subject">
																	</div><!-- End .col-sm-6 -->
																</div><!-- End .row -->

																<label for="cmessage" class="sr-only">Message</label>
																<textarea class="form-control" cols="30" rows="4" id="cmessage" required placeholder="Message *"></textarea>

																<button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
																	<span>SUBMIT</span>
																	<i class="icon-long-arrow-right"></i>
																</button>
															</form><!-- End .contact-form -->
														</div><!-- End .col-lg-12 -->
													</div><!-- End .product-desc-content -->
												</div><!-- End .card-body -->
											</div><!-- End .collapse -->
										</div><!-- End .card -->

										<div class="card card-box card-sm">
											<div class="card-header" id="product-review-heading">
												<h2 class="card-title">
													<a class="collapsed" role="button" data-toggle="collapse" href="#product-accordion-review" aria-expanded="false" aria-controls="product-accordion-review">
														Reviews (2)
													</a>
												</h2>
											</div><!-- End .card-header -->
											<div id="product-accordion-review" class="collapse" aria-labelledby="product-review-heading" data-parent="#product-accordion">
												<div class="card-body">
													<div class="reviews">
														<div class="review">
															<div class="row no-gutters">
																<div class="col-auto">
																	<h4><a href="#">Samanta J.</a></h4>
																	<div class="ratings-container">
																		<div class="ratings">
																			<div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
																		</div><!-- End .ratings -->
																	</div><!-- End .rating-container -->
																	<span class="review-date">6 days ago</span>
																</div><!-- End .col -->
																<div class="col">
																	<h4>Good, perfect size</h4>

																	<div class="review-content">
																		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum dolores assumenda asperiores facilis porro reprehenderit animi culpa atque blanditiis commodi perspiciatis doloremque, possimus, explicabo, autem fugit beatae quae voluptas!</p>
																	</div><!-- End .review-content -->

																	<div class="review-action">
																		<a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
																		<a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
																	</div><!-- End .review-action -->
																</div><!-- End .col-auto -->
															</div><!-- End .row -->
														</div><!-- End .review -->

														<div class="review">
															<div class="row no-gutters">
																<div class="col-auto">
																	<h4><a href="#">John Doe</a></h4>
																	<div class="ratings-container">
																		<div class="ratings">
																			<div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
																		</div><!-- End .ratings -->
																	</div><!-- End .rating-container -->
																	<span class="review-date">5 days ago</span>
																</div><!-- End .col -->
																<div class="col">
																	<h4>Very good</h4>

																	<div class="review-content">
																		<p>Sed, molestias, tempore? Ex dolor esse iure hic veniam laborum blanditiis laudantium iste amet. Cum non voluptate eos enim, ab cumque nam, modi, quas iure illum repellendus, blanditiis perspiciatis beatae!</p>
																	</div><!-- End .review-content -->

																	<div class="review-action">
																		<a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
																		<a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
																	</div><!-- End .review-action -->
																</div><!-- End .col-auto -->
															</div><!-- End .row -->
														</div><!-- End .review -->
													</div><!-- End .reviews -->
												</div><!-- End .card-body -->
											</div><!-- End .collapse -->
										</div><!-- End .card -->
									</div><!-- End .accordion -->

								</div><!-- End .product-details -->
							</div><!-- End .col-lg-5 -->
						</div><!-- End .row -->
					</div><!-- End .product-details-top -->
				</div><!-- End .col-xl-10 -->

				<aside class="col-xl-2 d-md-none d-xl-block">
					<div class="sidebar sidebar-product">
						<div class="sr-layout-block">
							<div class="custom-layout-block">
								<div class="custom-theme-">
									<div>
										<h4 class="custom-heading mb-3">Supplier Info :</h4>
										<h4 class="custom-text-large custom-text-xl">
											<a href="#" class="custom-text-strong">
												<span><?= $pinfo['company_name']; ?></span>
											</a>
										</h4>
										<div class="custom-supplier-info mb-2">
											<div class="custom-flag-container">
												<?php if (!empty($pinfo['flag'])) { ?>
													<img src="https://b2bitem.com/upload/country/16_16/<?= $pinfo['flag']; ?>" alt="France" class="mr-1">
												<?php } ?>
											</div>
											<div class="custom-country-name">
												<span><?= $pinfo['country_name']; ?></span>
											</div>
										</div>
										<p class="custom-paragraph mb-2"><span>Year Established:</span> <?= $pinfo['year_of_stablishment']; ?></p>
										<div class="custom-business-type mb-2">
											<p class="custom-text-strong mb-1">Business Type:</p>
											<ul class="custom-business-type-list">
												<li class="custom-text-muted">Manufacturer</li>
												<li class="custom-text-muted">Wholesaler</li>
											</ul>
										</div>
										<div class="custom-contact-info">
											<span class="custom-contact-icon mr-2">
												<i class="fas fa-phone-alt"></i>
											</span>
											<span class="custom-text-muted">
												<span class="custom-contact-number"><?= $pinfo['mobile']; ?></span>
											</span>
										</div>
										<a href="#" class="custom-link">
											<span class="custom-box-icon mr-2">
												<i class="fas fa-crop"></i>
											</span>
											<span class="custom-text-muted">View all products</span>
										</a>
										<a href="#" class="custom-link">
											<span class="custom-box-icon mr-2">
												<i class="fas fa-barcode"></i>
											</span>
											<span class="custom-text-muted">View Company Profile</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</aside><!-- End .col-xl-2 -->
			</div><!-- End .row -->

		</div><!-- End .container-fluid -->

		<div class="container">
			<h2 class="title text-center mb-4">Related Products</h2><!-- End .title text-center -->
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
							"items":4,
							"nav": true,
							"dots": false
						}
					}
				}'>

				<?php
				//	echo '<pre>';print_r($relatedproduct);exit;
				foreach ($relatedproduct as $key => $val) { ?>
					<div class="product product-7 text-center" style="width: 300.5px; height: 455.38px;">
						<figure class="product-media">
							<a href="<?= site_url('product/view/' . $val['pslag']); ?>">

								<?php if (!empty($val['product_image'])) { ?>
									<img src="https://b2bitem.com/upload/product/<?= $val['product_image']; ?>" alt="<?= $val['product_name']; ?>" title="<?= $val['product_name']; ?>" class="product-image" style="height: 193.38px;" decoding="async" loading="lazy">
								<?php } ?>
							</a>

							<div class="product-action-vertical">
								<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
								<a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
							</div><!-- End .product-action-vertical -->

							<div class="product-action">
								<a href="#" class="btn-product btn-cart"><span>contact seller</span></a>
							</div><!-- End .product-action -->
						</figure><!-- End .product-media -->

						<div class="product-body">
							<div class="product-cat" style="color: red;">
								<a href="<?= site_url('category/index/' . $val['link_prefix']); ?>"><?= $val['category_name']; ?></a> /
								<a href="#"><?= $val['sub_category_name']; ?></a>
							</div><!-- End .product-cat -->
							<h3 class="product-title"><a href="<?= site_url('product/view/' . $val['pslag']); ?>" title="<?= $val['product_name']; ?>"><?= $val['product_name']; ?></a></h3><!-- End .product-title -->
							<div class="product-title country-info-container justify-content-center mb-1">
								<?php if (!empty($val['flag'])) { ?>
									<span class="mr-1 mt-n05">
										<img src="https://b2bitem.com/upload/country/16_16/<?= $val['flag']; ?>" alt="<?= $val['country_name']; ?>">
									</span>
								<?php } ?>
								<a href="<?= site_url('company/index/' . $val['com_slag']); ?>" class="text-13 text-strong text-muted"><?= $val['country_name']; ?></a>
							</div>
							<div class="product-price">
								<?= $val['price']; ?> / <?= $val['unit']; ?>
							</div><!-- End .product-price -->
							<div class="ratings-container">
								<span class="ratings-text" style="color: #333;">( MOQ: <?= $val['min_order_qty']; ?> <?= $val['unit']; ?>)</span>
							</div><!-- End .rating-container -->
						</div><!-- End .product-body -->
					</div><!-- End .product -->
				<?php } ?>

			</div><!-- End .owl-carousel -->
		</div><!-- End .container -->
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