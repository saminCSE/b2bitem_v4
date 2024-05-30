<?php
require_once(APPPATH . "views/common/header_2.php");
?>

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

<?php
require_once(APPPATH . "views/common/footer_1.php");
?>