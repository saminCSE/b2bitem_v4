<div class="container-fluid">

	<div class="row">
	</div>
	<!-- End .row -->

	<div class="mb-5"></div>
	<!-- End .mb-5 -->

	<div class="container" id="product-inquiry">
		<h2 class="title text-center mb-4">Send Your Message to:
			<a href="<?= site_url('/' . $info['slag']); ?>" title="View Company Details" class="text-info">
				<span class="text-strong"><?= $info['company_name']; ?></span>
			</a>
		</h2>
		<div class="row" style="float: left;width: 100%;">
			<div class="col-md-12">
				<div class="card rounded-0 mb-4 specification">
					<div class="card-body bg-white">
						<div class="biz-form px-lg-5 py-lg-4">
							<form id="inquiry-form" action="#" method="post" enctype="multipart/form-data">
								<input type="hidden" name="_token" value="6IAc9fKColymscQ52UydixIdL4QWaJcefDOvbl0X">
								<input type="hidden" name="inquiry_to" value="seller">
								<input type="hidden" name="item_id" value="34279">
								<input type="hidden" name="item_type" value="product">
								<div class="biz-form">
									<div class="row mx-lg-n4 justify-content-lg-center">
										<div class="col-lg-6 px-lg-4">
											<div class="form-group row">
												<label class="col-lg-2 col-form-label" for="subject">Subject<span class="text-danger">*</span></label>
												<div class="col-lg-10">
													<input type="text" name="subject" id="subject" value="" class="form-control numeric-validation" data-check-subject="true" placeholder="Enter Message Title">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-2 col-form-label" for="mail_body">Message<span class="text-danger">*</span></label>
												<div class="col-lg-10">
													<textarea rows="4" name="mail_body" id="mail_body" class="form-control" placeholder="Enter Your Message on product requirement or other inquiries"></textarea>
												</div>
											</div>
										</div>

										<div class="col-lg-6 px-lg-4">
											<div class="mb-3">
												<div class="py-2 mb-2">
													<div class="custom-control custom-radio custom-control-inline my-1">
														<input type="radio" class="custom-control-input user-existence-checker" id="existingUserToggler" name="member_type" value="existing">
														<label class="custom-control-label text-strong text-muted" for="existingUserToggler">Existing Member</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline my-1 mr-0">
														<input type="radio" class="custom-control-input user-existence-checker" id="newUserToggler" name="member_type" value="new">
														<label class="custom-control-label text-strong text-muted" for="newUserToggler">New Member</label>
													</div>
												</div>
												<div class="user-existence-togglable" id="existingUser">
													<div class="user-form mb-4">
														<div class="form-group row">
															<label class="col-lg-3">Email Address <span class="text-danger">*</span>
															</label>
															<div class="col-lg-9">
																<input type="email" name="email" value class="form-control" placeholder="Email Address">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3">Password <span class="text-danger">*</span>
															</label>
															<div class="col-lg-9">
																<input type="password" name="password" class="form-control" placeholder="Password" autocomplete="new-password">
															</div>
														</div>
													</div>
												</div>
												<div class="user-existence-togglable" id="newUser">
													<div class="mb-4">
														<h6> Account Information </h6>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 d-lg-down-none">I am <span class="text-danger">*</span>
														</label>
														<div class="col-lg-9">
															<div class="auth-input-group">
																<div class="form-check-inline">
																	<label class="form-check-label">
																		<input type="radio" name="business_type" value="2" class="form-check-input "> Seller </label>
																</div>
																<div class="form-check-inline">
																	<label class="form-check-label">
																		<input type="radio" name="business_type" value="1" class="form-check-input"> Buyer </label>
																</div>
															</div>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 d-lg-down-none" for="company">Company Name <span class="text-danger">*</span>
														</label>
														<div class="col-lg-9">
															<input type="text" name="company" id="company" value class="form-control" placeholder="Company Name">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 d-lg-down-none" for="country">Country <span class="text-danger">*</span>
														</label>
														<div class="col-lg-9">
															<select name="country_id" id="country" class="form-control">
																<option value>-- Select Country --</option>
																<?php foreach ($countylist as $val) { ?>
																	<option value="<?= $val['id']; ?>"><?= $val['country_name']; ?></option>
																<?php } ?>
															</select>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 d-lg-down-none">Contact Person <span class="text-danger">*</span>
														</label>
														<div class="col-lg-9">
															<div class="d-flex">
																<div class="mr-3">
																	<select name="contact_person_name_title" id="contact_person_name_title" class="form-control mw-100px">
																		<option value="Mr." selected> Mr. </option>
																		<option value="Ms."> Ms. </option>
																	</select>
																</div>
																<div class="w-100">
																	<input type="text" name="name" value class="form-control" placeholder="Your Name">
																</div>
															</div>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 d-lg-down-none">Email <span class="text-danger">*</span>
														</label>
														<div class="col-lg-9">
															<input type="email" name="registration_email" value class="form-control" placeholder="Email Address">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 d-lg-down-none">Phone <span class="text-danger">*</span>
														</label>
														<div class="col-lg-9">
															<div class="d-flex">
																<div class="mr-3">
																	<input type="text" name="phone_code" value id="phone_code" class="form-control mw-50px" readonly>
																</div>
																<div class="w-100">
																	<input type="text" name="phone" id="phone" value class="form-control prevent-first-zero numeric-validation" aria-errormessage="Phone Number" placeholder="Phone Number">
																	<span class="phone-error"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 d-lg-down-none" for="registration_password">Password <span class="text-danger">*</span>
														</label>
														<div class="col-lg-9">
															<input type="password" name="registration_password" id="registration_password" value class="form-control" placeholder="Password" autocomplete="new-password">
														</div>
													</div>
													<div class="form-group row">
														<div class="col-lg-9 offset-lg-3">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" data-toggle="submit" class="custom-control-input" id="agreeBusinessListingTerms" name="agreeBusinessListingTerms" checked required>
																<label class="custom-control-label text-muted text-15" for="agreeBusinessListingTerms"> I Agree to Business Listing
																	<a href="#" target="_blank" class="text-business-tertiary">Terms & General Agreement</a>
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="text-center">
												<button type="submit" class="btn btn-info px-5 btn-md-down-small">
													<i class="fa fa-envelope-o mr-2"></i> Send Message
												</button>
											</div>
										</div>
									</div>
								</div>
							</form>
							<script>
								document.getElementById('inquiry-form').addEventListener('submit', function(event) {
									event.preventDefault();
									<?php if (empty($this->session->userdata('company_id'))) : ?>
										window.location.href = '<?= site_url('login'); ?>';
									<?php else : ?>
										this.submit();
									<?php endif; ?>
								});
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




</div>
<!-- End .container-fluid -->