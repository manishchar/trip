  <?php include('header.php'); ?>
			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Checkout				
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url()?>">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="<?php echo site_url('Wix_Controller/book')?>">Book Now </a> <span class="lnr lnr-arrow-right"></span> <a href="#"> Checkout</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  
			
			<!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 posts-list">
						 <form class="needs-validation" novalidate="">
							<div class="single-post row">
							
						
								<div class="col-lg-12 col-md-12">
									<h3 class="mt-20 mb-20">Machame 6 Day Trek </h3>
									<h4>Passenger (Adult)</h4>
									<p>Primary & Billing Contact</p>
								</div>
								<div class="col-lg-7 col-md-7">
								
							  <h4 class="mb-3">Contact</h4>
							 
								<div class="row">
								  <div class="col-md-6 mb-3">
									<label for="firstName">First name</label>
									<input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
									<div class="invalid-feedback">
									  Valid first name is required.
									</div>
								  </div>
								  <div class="col-md-6 mb-3">
									<label for="lastName">Last name</label>
									<input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
									<div class="invalid-feedback">
									  Valid last name is required.
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-6 mb-3">
									 <label for="email">Email</label>
								  <input type="email" class="form-control" id="email" placeholder="">
								  <div class="invalid-feedback">
									Please enter a valid email address.
								  </div>
								  </div>
								  <div class="col-md-6 mb-3">
									<label for="lastName">Phone Number</label>
									<input type="text" class="form-control" id="phone" placeholder="" value="" required="">
									<div class="invalid-feedback">
									  Valid phone is required.
									</div>
								  </div>
								</div>
								<h4 class="mb-3">Passport</h4>
								<div class="row">
								 
								  <div class="col-md-3 mb-3">
									<label for="title">Title</label>
									<select class="custom-select d-block w-100" id="title" required="">
									  <option value="">---</option>
									  <option value="Mr">Mr.</option>
									<option value="Mrs">Mrs.</option>
									<option value="Ms">Ms.</option>
									<option value="Miss">Miss.</option>
									</select>
									<div class="invalid-feedback">
									  Please select a valid title.
									</div>
								  </div>
								  <div class="col-md-3 mb-3">
									<label for="firstName">First name</label>
									<input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
									<div class="invalid-feedback">
									  Valid first name is required.
									</div>
									<div class="invalid-feedback">
									  Please provide a valid name.
									</div>
								  </div>
								   <div class="col-md-3 mb-3">
									<label for="middlename">Middle name</label>
									<input type="text" class="form-control" id="middlename" placeholder="" value="" required="">
									<div class="invalid-feedback">
									  Valid middle name is required.
									</div>
									<div class="invalid-feedback">
									  Please provide a valid middle name.
									</div>
								  </div>
								     <div class="col-md-3 mb-3">
									<label for="firstName">Last name</label>
									<input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
									<div class="invalid-feedback">
									  Valid last name is required.
									</div>
									<div class="invalid-feedback">
									  Please provide a valid name.
									</div>
								  </div>
								</div>
							
								<div class="row">
								  <div class="col-md-6 mb-3">
									<label for="dob">Date of Birth:</label>
									<input type="text" class="form-control" id="dob" placeholder="" required="">
									<div class="invalid-feedback">
									 Date of Birth is required
									</div>
								  </div>
								  <div class="col-md-6 mb-3">
									<label for="pob">Place of Birth:</label>
									<input type="text" class="form-control" id="pob" placeholder="" required="">
									<div class="invalid-feedback">
									  Place of Birth is required
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-6 mb-3">
									<label for="passport-number">Passport Number:</label>
									<input type="text" class="form-control" id="passport-number" placeholder="" required="">
									<div class="invalid-feedback">
									  passport-number required
									</div>
								  </div>
								  <div class="col-md-6 mb-3">
									<label for="nationality">Nationality</label>
										<select class="custom-select d-block w-100" id="nationality" required="">
										  <option value="">----</option>
										  <option>United States</option>
										</select>
										<div class="invalid-feedback">
										  Please select a valid nationality.
										</div>
								  </div>
								</div>
								<div class="mb-3">
									  <label for="expiration">Expiration Date:</label>
									  <input type="text" class="form-control" id="expiration" placeholder="mm/dd/yyyy" required="">
									  <div class="invalid-feedback">
										Please enter your Expiration Date.
									  </div>
									</div>
							
							
						  
								</div>
								
								<div class="col-lg-5 col-md-5">
								  <h4 class="mb-3">Address</h4>
								  <form class="needs-validation" novalidate="">
									<div class="mb-3">
									  <label for="address">Address</label>
									  <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
									  <div class="invalid-feedback">
										Please enter your shipping address.
									  </div>
									</div>

									<div class="mb-3">
									  <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
									  <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
									</div>

									  <div class="mb-3">
										<label for="country">Country</label>
										<select class="custom-select d-block w-100" id="country" required="">
										  <option value="">Choose...</option>
										  <option>United States</option>
										</select>
										<div class="invalid-feedback">
										  Please select a valid country.
										</div>
									  </div>
									  
									<div class="row">
									  <div class="col-md-6 mb-3">
										<label for="state">State</label>
										<select class="custom-select d-block w-100" id="state" required="">
										  <option value="">Choose...</option>
										  <option>California</option>
										</select>
										<div class="invalid-feedback">
										  Please provide a valid state.
										</div>
									  </div>
									  <div class="col-md-6 mb-3">
										<label for="zip">Zip</label>
										<input type="text" class="form-control" id="zip" placeholder="" required="">
										<div class="invalid-feedback">
										  Zip code required.
										</div>
									  </div>
									</div>
								
							
								</div>
						
							</div>
						<a href="review-and-confirm.php" class="genric-btn primary circle arrow">Continue</a>
						  </form>
						</div>
						<div class="col-lg-3 sidebar-widgets">
							<div class="widget-wrap">
								<div class="single-sidebar-widget user-info-widget">
									<a href="#"><h4>Machame 6 Day Trek</h4></a>
									<p>
										Kilimanjaro, Tanzania 
									</p>
									<p><a class="price-btn primary-btn">Total : $500</a></p>
							
								</div>
												
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End post-content Area -->
			<?php include('footer.php'); ?>