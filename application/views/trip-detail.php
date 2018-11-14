  <?php include('header.php'); ?>
			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
						<?php
$date1 = new DateTime($row->trip_start_date);
$date2 = new DateTime($row->trip_end_date);
$adate=$row->trip_start_date;
$ddate =$row->trip_end_date;
$diff = strtotime($ddate) - strtotime( $adate);
$duration = round(($diff / 86400) + 0.5);
										?>
							<h1 class="text-white">
								<?php echo $trip->trip_title .' ('.$duration.' Day )'; ?>				
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url()?>">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="<?php echo base_url('Wix_Controller/book').'/'.$trip->id; ?>">Book Now </a> <span class="lnr lnr-arrow-right"></span> <a href="#"> <?php echo $trip->trip_title; ?></a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  
			
			<!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-12">
									<div class="feature-img">
										
										<img style="height: 350px" class="img-fluid" src="<?php echo base_url();?>uploads/<?php echo $trip->image ?>" alt=""> </div>									
								</div>
						
								<div class="col-lg-12 col-md-12">
									<h3 class="mt-20 mb-20"></h3>
									<p class="excert">
										 <?php echo $trip->trip_description; ?>
									</p>
									
								</div>
						
							</div>
						
						</div>
						
						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">
								<div class="single-sidebar-widget user-info-widget">
									<a href="#"><h4><?php echo $trip->trip_title; ?></h4></a>
									<p>
										<?php echo $trip->name; ?> 
									</p>
							
								</div>
										<div class="details" style="padding:10px 20px;">
								
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
										
											<span>Duration</span>
											<span><?= $duration; ?></span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span>Price</span>
											<a href="#" class="price-btn"><?php echo $trip->person_price; ?></a>
										</li>

                                       <li class="d-flex justify-content-between align-items-center" style="margin-top:20px;">
											<span></span>
											<a href="<?php echo site_url('Trip_book/book')."/".$trip->id;?>" class="price-btn primary-btn">Book Now</a>
										</li>										
									</ul>
								</div>
													
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End post-content Area -->
			