  <?php include('header.php'); ?>
			<!-- start banner Area -->
			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Forgot Password			
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url()?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="forgot-password.php"> Forgot Password	</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
					<div class="col-lg-3 form-group"></div>
					<div class="col-lg-6 form-group login-box1">
				  <div class="panel">
				   <h2>Forgot Password	</h2>
				   <p>Please enter your email</p>
				   </div>
					<form id="Login">

						<div class="form-group">


							<input type="email" class="common-input mb-20 form-control" id="inputEmail" placeholder="Email Address">

						</div>

				
						<button type="submit" class="genric-btn primary">Submit</button>
						
						
					</form>
					</div>
					<div class="col-lg-3 form-group"></div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

	<?php include('footer.php'); ?>