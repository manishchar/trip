  <?php include('header.php'); ?>
			<!-- start banner Area -->
			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Login			
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url()?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo site_url('Wix_Controller/login')?>"> Login</a></p>
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
				   <h2>Login</h2>
				   <?php 
if($this->session->flashdata('error')){ ?>
<div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
<?php }
				   ?>
				   <p>Please enter your email and password</p>
				   </div>
											<?php echo form_open('Normal_Login/login');?>


						<div class="form-group">


							<input type="email" name="email" class="common-input mb-20 form-control" id="inputEmail" placeholder="Email Address">

						</div>

						<div class="form-group">

							<input type="password" name="password" class="common-input mb-20 form-control" id="inputPassword" placeholder="Password">

						</div>
						<div class="forgot" style="margin-bottom:10px;">
						<a href="forgot-password.php">Forgot password?</a>
					</div>
						<button type="submit" class="genric-btn primary">Login</button>
						
						<h4 style="margin-top:20px;">Login with</h4>
                    <p style="margin-top:10px;"><a href="" class="btn-face m-b-10">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>&nbsp; &nbsp;
					<a href="#" class="btn-google m-b-10">
						<i class="fa fa-google-plus" aria-hidden="true"></i>

						Google
					</a></p>
					<?php echo form_close();?>
					</div>
					<div class="col-lg-3 form-group"></div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

	<?php include('footer.php'); ?>