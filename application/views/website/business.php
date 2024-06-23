<?php
require_once(APPPATH . "views/common/header_2.php");
?>

<main class="main">

	<div class="page-content">
		<section class="mb-4">
			<div class="container custom-container">
				<div class="mb-4">
					<div class="row">
						<div class="col-lg-9">
							<div class="mb-3">
								<h1 class="title-with-square-box text-normal text-evening text-md-down-20 text-lg-32">
									Business Directory - <?= htmlspecialchars($category_name); ?>
								</h1>
							</div>

							<div class="mb-4">
								<ul class="list-unstyled company-list">
									<?php if (!empty($data_list)) : ?>
										<?php foreach ($data_list as $company) : ?>
											<li class="member-item bg-white border mb-4">
												<div class="pb-4 pt-3">
													<div class="row align-items-center">
														<div class="col-md-8">
															<div class="d-flex px-4">
																<div>
																	<a href="<?= $company['web_link']; ?>" class="directory-link text-custom-link mb-2" target="_blank">
																		<span class="align-self-center" style="font-size: x-large;"><?= htmlspecialchars($company['company_name']); ?></span>
																	</a>
																	<div class="mb-1 d-flex">
																		<span class="text-muted text-nowrap mr-2">Business Type:</span>
																		<span>
																			<a href="#">Manufacturer/Factory</a>
																		</span>
																	</div>
																	<div class="mb-1 d-flex">
																		<span class="text-muted text-nowrap mr-2">Business Category:</span>
																		<span>
																			<a href="#">Electronics &amp; Electrical</a>
																		</span>
																	</div>
																	<div class="mb-1 d-flex">
																		<span class="text-muted text-nowrap mr-2">Main Products:</span>
																		<span>
																			<a href="#"><?= htmlspecialchars($company['main_product']); ?></a>
																		</span>
																	</div>
																	<div class="mb-1 d-md-down-none">
																		<span class="text-muted text-nowrap mr-2">Contact Person:</span>
																		<span class="text-muted"><?= htmlspecialchars($company['contact_person']); ?></span>
																	</div>
																	<p class="m-0 text-15 details-short-text text-muted text-ellipsis-clamp-2">
																		<?= htmlspecialchars($company['description']); ?>
																	</p>
																</div>
															</div>
														</div>
														<div class="col-md-4 mt-3 mt-md-0 border-md-left">
															<div class="px-4">
																<!-- <div class="row">
																	<?php if (!empty($company['product_list'])) : ?>
																		<?php foreach ($company['product_list'] as $product) : ?>
																			<div class="col-6">
																				<div class="directory-product">
																					<div class="embed-responsive embed-responsive-1by1 mb-1">
																						<a href="<?= site_url(('details/') . $product['pslag']); ?>" target="_blank" class="embed-responsive-item border rounded">
																							<img src="https://b2bitem.com/upload/product/<?= $product['product_image']; ?>" class="img-fit-center p-1" style="width: 100px; height: 100px" />
																						</a>
																					</div>
																					<a href="<?= site_url(('details/') . $product['pslag']); ?>" target="_blank" class="d-block text-center text-13 text-muted-to-link text-ellipsis-clamp-2"><?= htmlspecialchars($product['product_name']); ?></a>
																				</div>
																			</div>
																		<?php endforeach; ?>
																	<?php endif; ?>
																</div> -->
																<div class="row">
																	<?php if (!empty($company['product_list'])) : ?>
																		<?php $count = 0; // Initialize a counter 
																		?>
																		<?php foreach ($company['product_list'] as $product) : ?>
																			<?php if ($count % 3 == 0 && $count != 0) : ?>
																</div>
																<div class="row">
																<?php endif; ?>
																<div class="col-4">
																	<div class="directory-product">
																		<div class="embed-responsive embed-responsive-1by1 mb-1">
																			<a href="<?= site_url(('details/') . $product['pslag']); ?>" target="_blank" class="embed-responsive-item border rounded">
																				<img src="https://b2bitem.com/upload/product/<?= $product['product_image']; ?>" class="img-fit-center p-1" style="width: 100px; height: 100px" />
																			</a>
																		</div>
																		<a href="<?= site_url(('details/') . $product['pslag']); ?>" target="_blank" class="d-block text-center text-13 text-muted-to-link text-ellipsis-clamp-2"><?= htmlspecialchars($product['product_name']); ?></a>
																	</div>
																</div>
																<?php $count++; // Increment the counter 
																?>
															<?php endforeach; ?>
														<?php endif; ?>
																</div>

															</div>
														</div>
													</div>
												</div>
												<div class="px-3 py-2 border-top">
													<div class="row align-items-center">
														<?php if (!empty($company['product_list'])) : ?>

															<div class="col-md-4 border-md-right d-md-down-none">
																<span class="text-muted country-info-container">
																	<img src="https://b2bitem.com/upload/country/16_16/<?= $product['flag']; ?>" alt="<?= $product['country_name']; ?>" class="img-fluid mr-1" />
																	<?= htmlspecialchars($product['country_name']); ?>
																</span>
															</div>

														<?php endif; ?>
														<?php $com_slag = $this->session->userdata('com_slag'); ?>
														<div class="col-6 col-md-4 pl-md-4">
															<a href="<?= site_url('company/product/' . $com_slag); ?>"><i class="fa fa-cube text-custom-link mr-1"></i>
																Products</a>
														</div>
														<div class="col-6 col-md-4 pl-md-4 text-right">
															<a href="#" class="btn btn-sm btn-b2bmap-secondary bg-business-secondary-close border-business-secondary-close"><i class="fa fa-envelope-o mr-1"></i> Contact Now</a>
														</div>
													</div>
												</div>
											</li>
										<?php endforeach; ?>
									<?php else : ?>
										<p>No companies found.</p>
									<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div><!-- End .page-content -->
</main><!-- End .main -->

<?php
require_once(APPPATH . "views/common/footer_1.php");
?>