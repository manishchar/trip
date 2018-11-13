
			<!-- start banner Area -->
			<section class="banner-area relative">
				<div class="overlay overlay-bg"></div>				
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between" style="height:500px; margin-top:60px;">
						<div class="col-lg-6 col-md-6 banner-left">
							<h1 class="text-white"> Arrive speechless,<br>Leave as a storyteller.</h1>
							<p class="text-white">
								If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.
							</p>
							<a href="book-now.php" class="primary-btn text-uppercase">Book Now</a>
						</div>
						
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start KILIMANJARO TREKS Area -->
			<section class="destinations-area section-gap">
				<div class="container">
				<div class="row d-flex justify-content-center home-top">
				<div class="col-lg-8"><p class="f-social"><a target="_blank" href="https://www.facebook.com/HEROSummits/"><img src="<?php echo base_url()?>assets/img/facebook.png" alt=""></a>
								<a target="_blank" href="https://www.instagram.com/herosummits/"><img src="<?php echo base_url()?>assets/img/instagram.png" alt=""></a></p></div>
				<div class="col-lg-4">
				<ul class="d-flex flex-wrap">
									<li><img src="<?php echo base_url()?>assets/img/f11.png" alt=""></li>
									<li><img src="<?php echo base_url()?>assets/img/f22.png" alt=""></li>
									<li><img src="<?php echo base_url()?>assets/img/f33.png" alt=""></li>
								
								</ul>
				</div>
				</div>
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
									<img src="<?php echo base_url()?>assets/img/packages/d1.jpg" alt="">
								</div>
								<div class="details">
									<h4><?php echo $row->trip_title ?></h4>
									<p>
										Kilimanjaro, Tanzania
									</p>
									<p>
										<?php 
						//echo $row->trip_start_date;			 
						//echo "<br/>";
						//echo $row->trip_end_date;			 
	$date1 = new DateTime($row->trip_start_date);
	$date2 = new DateTime($row->trip_end_date);
//echo "<br/>";
	// this calculates the diff between two dates, which is the number of nights
	//echo $numberOfNights= date_diff($date1,$date2); 
$adate=$row->trip_start_date;
$ddate =$row->trip_end_date;
$diff = strtotime($ddate) - strtotime( $adate);
//echo  round(($diff / 86400) + 0.5);

	//echo $numberOfNights= $date2->diff($date1)->format("%a"); 
										 ?>
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Duration</span>
											<span><?=round(($diff / 86400) + 0.5);?> days </span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span><a href="#">Learn More</a></span>
											<a href="<?php echo site_url('Trip_book/machame_trek')."/".$row->id; ?>" class="price-btn">Book Now</a>
										</li>													
									</ul>
								</div>
							</div>
						</div>
						<?php  } ?>
						
					<!-- 	<div class="col-lg-4">
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
									<h4>Lomosho, 7 Day Trek</h4>
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
									<img src="<?php echo base_url()?>assets/img/packages/d4.jpg" alt="">
								</div>
								<div class="details">
									<h4>Lomosho, 8 Day Trek</h4>
									<p>
										Kilimanjaro, Tanzania
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Duration</span>
											<span>08 days and 7 nights</span>
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
									<h4>Machame, 3 Day Trek</h4>
									<p>
										Kilimanjaro, Tanzania
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Duration</span>
											<span>03 days and 2 nights</span>
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
									<h4>Machame, 9 Day Trek</h4>
									<p>
										United staes of America
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Duration</span>
											<span>09 days and 8 nights</span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span><a href="#">Learn More</a></span>
											<a href="machame-6-day-trek.php" class="price-btn">Book Now</a>
										</li>													
									</ul>
								</div>
							</div>
						</div>						 -->																								
					</div>
				</div>	
			</section>
			<!-- Start AFRICAN SAFARI Area -->
			<section class="destinations-area">
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
									<img src="<?php echo base_url()?>assets/img/packages/d7.jpg" alt="">
								</div>
								<div class="details">
									<h4>The Bushman 2 Days, 1 Night</h4>
									<p>
										Ngorongoro, Tarangire
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
									<img src="<?php echo base_url()?>assets/img/packages/d8.jpg" alt="">
								</div>
								<div class="details">
									<h4>The Bushmaster 4 Days, 3 Nights</h4>
									<p>
										Serengeti, ​Ngorongoro, Tarangire
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
									<img src="<?php echo base_url()?>assets/img/packages/d9.jpg" alt="">
								</div>
								<div class="details">
									<h4>The Hero 7 Days, 6 Nights</h4>
									<p>
										Serengeti, Ngorongoro, Tarangire, Lake Manyara
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
			
		
			<!-- Start testimonial Area -->
		    <section class="testimonial-area section-gap">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Testimonial from our Clients</h1>
		                        <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
		                    </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="active-testimonial">
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="<?php echo base_url()?>assets/img/elements/user1.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
		                            </p>
		                            <h4>Harriet Maxwell</h4>
	                            	<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>				
									</div>	
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="<?php echo base_url()?>assets/img/elements/user2.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
		                            </p>
		                            <h4>Carolyn Craig</h4>
	                           		<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>			
									</div>	
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="<?php echo base_url()?>assets/img/elements/user1.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
		                            </p>
		                            <h4>Harriet Maxwell</h4>
	                            	<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>				
									</div>	
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="<?php echo base_url()?>assets/img/elements/user2.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
		                            </p>
		                            <h4>Carolyn Craig</h4>
	                           		<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>			
									</div>	
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="<?php echo base_url()?>assets/img/elements/user1.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
		                            </p>
		                            <h4>Harriet Maxwell</h4>
	                            	<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>				
									</div>	
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="<?php echo base_url()?>assets/img/elements/user2.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
		                            </p>
		                            <h4>Carolyn Craig</h4>
	                           		<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>			
									</div>	
		                        </div>
		                    </div>		                    		                    
		                </div>
		            </div>
		        </div>
		    </section>
		    <!-- End testimonial Area -->

						

