  <?php include('header.php'); ?>
			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Machame 6 Day Trek				
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url()?>">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="<?php echo site_url('Wix_Controller/book')?>">Book Now </a> <span class="lnr lnr-arrow-right"></span> <a href="#"> Machame 6 Day Trek</a></p>
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
										<?php foreach($trip as $row){?>
										<img class="img-fluid" src="<?php echo base_url();?>uploads/<?php echo $row->image ?>" alt=""> <?php }?>
									</div>									
								</div>
						
								<div class="col-lg-12 col-md-12">
									<h3 class="mt-20 mb-20">Astronomy Binoculars A Great Alternative</h3>
									<p class="excert">
										MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.
									</p>
									<p>
										Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed
									</p>
									<p>
										Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed
									</p>
								</div>
						
							</div>
						
						</div>
						<?php foreach($trip as $row){?>
						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">
								<div class="single-sidebar-widget user-info-widget">
									<a href="#"><h4>Machame 6 Day Trek</h4></a>
									<p>
										<?php echo $row->trip_title?> 
									</p>
							
								</div>
										<div class="details" style="padding:10px 20px;">
								
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Duration</span>
											<span><?php echo $row->trip_title?></span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span>Price</span>
											<a href="#" class="price-btn"><?php echo $row->trip_title?></a>
										</li>

                                       <li class="d-flex justify-content-between align-items-center" style="margin-top:20px;">
											<span></span>
											<a href="<?php echo site_url('Trip_book/book')."/".$row->id;?>" class="price-btn primary-btn">Book Now</a>
										</li>										
									</ul>
								</div>
									<?php }?>					
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End post-content Area -->
			