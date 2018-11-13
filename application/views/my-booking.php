  <?php include('header.php'); ?>
			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								My Booking				
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url()?>">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="<?php echo site_url('Wix_Controller/book')?>"> My Booking</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  
			
			<!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<?php include('profile-menu.php'); ?>
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-12 col-md-12">

							<div class="col-lg-12 form-group">
        	                <div class="panel panel-default">
        	                	<div class="panel-heading" style="margin-bottom:20px;">
								<h3 class="panel-title">My Booking</h3>
								</div>
								<div class="panel-body">
									<div class="row">
								<div class="table-responsive">
							  <table class="table table-bordered">
								<thead>
								  <tr>
									<th>#</th>
									<th>Trip Name</th>
									<th>Full Name</th>
									<th>Email</th>
									<th>Date</th>
									<th>Price</th>
								  </tr>
								</thead>
								<tbody>
								  	
									 <?php foreach($data as $rec) { ?>
								  <tr>
										  <td><?php echo $rec['user_id']?></td>
										  <td><?php echo $rec['trip_name']?></td>
										  <td><?php echo $rec['full_name']?></td>
										  <td><?php echo $rec['email']?></td>
										  <td><?php echo $rec['date']?></td>
										  <td><?php echo $rec['price']?></td>
										 
					               </tr>
					 
					                <?php  } ?>
					  
					 </tbody>
								</tbody>
							  </table>
							</div>
							</div>
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