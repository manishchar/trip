  <?php include('header.php'); ?>
			<!-- start banner Area -->
			<section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Book Now				
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url()?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo site_url('Wix_Controller/book')?>"> Book Now</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			 <!---Start KILIMANJARO TREKS Area -->
			<section class="destinations-area section-gap">
				<div class="container">
				
				  <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-30 col-lg-12">
		                    <div class="title">
		                        <h1 class="mb-10 trek-title">KILIMANJARO TREKS</h1>
		                      </div>  
		                </div>
		            </div>	
		       									
		
					<div class="row">
						<?php foreach($trip as $row){?>
						<div class="col-lg-4">

							<div class="single-destinations">
								<div class="thumb">
									<img src="<?php echo base_url()?>uploads/<?php echo $row->image  ?>" alt="">
								</div>
								<div class="details">
									<h4><?php echo $row->trip_title ?></h4>
									<p>
										<?php echo $row->trip_description ?>
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Duration</span>
											<span><?php echo $row->trip_start_date ." ". $row->trip_end_date  ?></span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span><a href="#">Learn More</a></span>
											<a href="<?php echo site_url('Trip_book/machame_trek')."/".$row->id; ?>" class="price-btn">Book Now</a>
										</li>													
									</ul>
								</div>
								
							</div>
							
						</div>
						<?php }?>
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="<?php echo base_url()?>assets/img/packages/d2.jpg" alt="">
								</div>
								<div class="details">
									<h4>Machame, 7 Day Trek</h4>
									<p>
										Kilimanjaro, Tanzania
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Duration</span>
											<span>07 days and 6 nights</span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span><a href="#">Learn More</a></span>
											<a href="machame-6-day-trek.php" class="price-btn">Book Now</a>
										</li>													
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="<?php echo base_url()?>assets/img/packages/d3.jpg" alt="">
								</div>
								<div class="details">
									<h4>Holiday Sea beach Blue Ocean</h4>
									<p>
										United staes of America
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Duration</span>
											<span>06 days and 5 nights</span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span><a href="#">Learn More</a></span>
											<a href="machame-6-day-trek.php" class="price-btn">Book Now</a>
										</li>													
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="<?php echo base_url()?>assets/img/packages/d4.jpg" alt="">
								</div>
								<div class="details">
									<h4>Holiday Sea beach Blue Ocean</h4>
									<p>
										United staes of America
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Duration</span>
											<span>06 days and 7 nights</span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span><a href="#">Learn More</a></span>
											<a href="machame-6-day-trek.php" class="price-btn">Book Now</a>
										</li>													
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="<?php echo base_url()?>assets/img/packages/d5.jpg" alt="">
								</div>
								<div class="details">
									<h4>Holiday Sea beach Blue Ocean</h4>
									<p>
										United staes of America
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Duration</span>
											<span>06 days and 7 nights</span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span><a href="#">Learn More</a></span>
											<a href="machame-6-day-trek.php" class="price-btn">Book Now</a>
										</li>													
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="<?php echo base_url()?>assets/img/packages/d6.jpg" alt="">
								</div>
								<div class="details">
									<h4>Holiday Sea beach Blue Ocean</h4>
									<p>
										United staes of America
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Duration</span>
											<span>06 days and 7 nights</span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span><a href="#">Learn More</a></span>
											<a href="machame-6-day-trek.php" class="price-btn">Book Now</a>
										</li>													
									</ul>
								</div>
							</div>
						</div>																														
					</div>
				</div>	
			</section>
			<!-- Start AFRICAN SAFARI Area -->
			<section class="destinations-area section-gap">
				<div class="container">
				  <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-30 col-lg-12">
		                    <div class="title">
		                        <h1 class="mb-10 trek-title">AFRICAN SAFARI</h1>
		                      </div>  
		                </div>
		            </div>	
		       					
					<div class="row">
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="<?php echo base_url()?>assets/img/packages/d1.jpg" alt="">
								</div>
								<div class="details">
									<h4>Machame 6 Day Trek</h4>
									<p>
										Kilimanjaro, Tanzania
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Duration</span>
											<span>06 days and 5 nights</span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span><a href="#">Learn More</a></span>
											<a href="machame-6-day-trek.php" class="price-btn">Book Now</a>
										</li>													
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="<?php echo base_url()?>assets/img/packages/d2.jpg" alt="">
								</div>
								<div class="details">
									<h4>Machame, 7 Day Trek</h4>
									<p>
										Kilimanjaro, Tanzania
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Duration</span>
											<span>07 days and 6 nights</span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span><a href="#">Learn More</a></span>
											<a href="machame-6-day-trek.php" class="price-btn">Book Now</a>
										</li>													
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="<?php echo base_url()?>assets/img/packages/d3.jpg" alt="">
								</div>
								<div class="details">
									<h4>Holiday Sea beach Blue Ocean</h4>
									<p>
										United staes of America
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Duration</span>
											<span>06 days and 5 nights</span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span><a href="#">Learn More</a></span>
											<a href="machame-6-day-trek.php" class="price-btn">Book Now</a>
										</li>													
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="<?php echo base_url()?>assets/img/packages/d4.jpg" alt="">
								</div>
								<div class="details">
									<h4>Holiday Sea beach Blue Ocean</h4>
									<p>
										United staes of America
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Duration</span>
											<span>06 days and 7 nights</span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span><a href="#">Learn More</a></span>
											<a href="machame-6-day-trek.php" class="price-btn">Book Now</a>
										</li>													
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="<?php echo base_url()?>assets/img/packages/d5.jpg" alt="">
								</div>
								<div class="details">
									<h4>Holiday Sea beach Blue Ocean</h4>
									<p>
										United staes of America
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Duration</span>
											<span>06 days and 7 nights</span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span><a href="#">Learn More</a></span>
											<a href="machame-6-day-trek.php" class="price-btn">Book Now</a>
										</li>													
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="<?php echo base_url()?>assets/img/packages/d6.jpg" alt="">
								</div>
								<div class="details">
									<h4>Holiday Sea beach Blue Ocean</h4>
									<p>
										United staes of America
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Duration</span>
											<span>06 days and 7 nights</span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span><a href="#">Learn More</a></span>
											<a href="machame-6-day-trek.php" class="price-btn">Book Now</a>
										</li>													
									</ul>
								</div>
							</div>
						</div>																														
					</div>
				</div>	
			</section>
			<!-- End destinations Area -->
			
		
<?php include('footer.php'); ?>