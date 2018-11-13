			<?php include('header.php'); ?>
			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Change Password				
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url()?>">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="<?php echo site_url('User_booking/index')?>"> Change Password</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  
			
			<!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<!-- profile menu -->
						 <?php include('profile-menu.php'); ?>
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-12 col-md-12">

							<div class="col-lg-12 form-group">
        	                <div class="panel panel-default">
        	                	<div class="panel-heading" style="margin-bottom:20px;">
								<h3 class="panel-title">Change Password</h3>
								</div>
								<div class="panel-body">
									<?php if($this->session->flashdata('message')){?>
									<div class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
									<?php } ?>
									<?php if($this->session->flashdata('error')){?>
									<div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
									<?php } ?>

								<form role="form" method="POST" >
			    			<?php foreach($user_p as $user) { ?>
							<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label>Old Password<span><?php echo form_error('old_password','<span class="text-danger">','</span>') ?></span></label>
			                <input type="text" name="old_password" id="old_password" class="form-control input-sm" placeholder="Old Password" required="">
			    					</div>
			    				</div>
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<label>New Password<span><?php echo form_error('password','<span class="text-danger">','</span>') ?></span></label>
			    					<div class="form-group">
							<input type="text" name="password" id="password" class="form-control input-sm" placeholder="Password" required="">
			    					</div>
			    				</div>
			    			</div>
                             <div class="row">
							 <div class="col-xs-12 col-sm-12 col-md-12">
							 	<label>Confirm Password<span><?php echo form_error('cpassword','<span class="text-danger">','</span>') ?></span></label>
			    			<div class="form-group">
			    				<input type="text" name="cpassword" id="cpassword" class="form-control input-sm" placeholder="Confirm Password" required="">
			    			   </div>
							</div>
							
							</div>  
							

			    			<input type="submit" name="submit" value="Update" class="genric-btn primary">
							<?php } ?>
			    	</form>
			    	</div>
	    		</div>
				</div>
									
								</div>
						
							</div>
						
						</div>
					
					</div>
				</div>	
			</section>
			<!-- End post-content Area -->
			<?php include('footer.php'); ?>