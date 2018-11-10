			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								My Profile				
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url()?>">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="<?php echo site_url('User_booking/index')?>"> My Profile</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  
			
			<!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">
								<div class="details" style="padding:10px 20px;">
									
									<ul class="package-list all-detail-book" style="background: #ededed; padding: 10px;">
										<li class="d-flex justify-content-between align-items-center">
										<a href="<?php echo site_url('User/account')?>">My Profile</a>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<a href="<?php echo site_url('User/my_booking')?>">My Booking</a>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<a href="<?php echo site_url('User/payment_history')?>">Payment History</a>
										</li>
										

                                       <li class="d-flex justify-content-between align-items-center" style="margin-top:20px;">
											
											<p class="price-btn primary-btn" style="background:#000000; width:100%; text-align:center;"><i class="fa fa-power-off" aria-hidden="true"></i>
 Log Out</p>
										</li>										
									</ul>
								</div>
														
							</div>
						</div>
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-12 col-md-12">

							<div class="col-lg-12 form-group">
        	                <div class="panel panel-default">
        	                	<div class="panel-heading" style="margin-bottom:20px;">
								<h3 class="panel-title">My Profile</h3>
								</div>
								<div class="panel-body">
								<!--<form role="form" >-->
			    			<?php foreach($user_p as $user) { ?>
							<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" value="<?php echo $user->first_name?>" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
							<input type="text" name="last_name" id="last_name" value="<?php echo $user->last_name ;?>" class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>
                             <div class="row">
							 <div class="col-xs col-sm-6 col-md-6">
			    			<div class="form-group">
			    				<input type="email" name="email" id="email" value="<?php echo $user->email ;?>" class="form-control input-sm" placeholder="Email Address" readonly>
			    			   </div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
							<div class ="form-group">
							  <input type="mobile" name="mobile" id="mobile" value="<?php echo $user->mobile ;?>" class="form-control input-sm" placeholder="Enter Mobile Number">
							    </div>
							  </div>
							</div>  
							

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" value="<?php echo $user->password ; ?>" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			  <input type="password" name="password_confirmation" id="password_confirmation" value="<?php echo $user->password ;?>" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" name="submit" value="Update" class="genric-btn primary">
							<?php } ?>
			    	<!--</form>-->
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