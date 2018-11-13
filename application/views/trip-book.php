			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Machame 6 Day Trek				
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url()?>">Home </a>  <span class="lnr lnr-arrow-right"></span>Machame 6 Day Trek <span class="lnr lnr-arrow-right"></span> <a href="#"> Machame 6 Day Trek</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  
			
			<!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 sidebar-widgets" id="sidebar">
							<div class="widget-wrap">
								<div class="details" style="padding:10px 20px;">
									<p class="over-menu"><b><a href="#">Overview</a></b> | <a href="#">Full itinerary</a> | <a href="#">Tour details</a></p>
									<hr>
									<ul class="package-list all-detail-book" style="background: #ededed; padding: 10px;">
										<li class="d-flex justify-content-between align-items-center">
											<span>Travellers</span>
											<span id="traveller">1 adult</span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span>Tour</span>
											<a href="#" id="tour" class="price-btn">$<?= $trip->person_price;?></a>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Extra Days</span>
											<span id="extra_day">0</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Flights</span>
											<span id="flight">0</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Airport Pickup</span>
											<span id="pickup">0.00</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Departure Transfer</span>
											<span id="transfer">0.00</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Extra</span>
											<span id="extra">0</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span> Planeterra</span>
											<span>56.00</span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span>Checkout</span>
										
										</li>

                                       <li class="d-flex justify-content-between align-items-center" style="margin-top:20px;">
											
											<p class="price-btn primary-btn" style="background:#000000; width:100%; text-align:center;">Total $21288.00</p>
										</li>										
									</ul>
								</div>
														
							</div>
						</div>
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-12 col-md-12">
									<h3 class="mt-20 mb-20">Travellers</h3>
									<p>How many people are you travelling with?</p>
									<form class="form-horizontal" role="form">
									  <div class="row">
									  <div class="col-md-2">
										<label class="control-label" for="adults">Adults (18+):</label>
										</div>
										<div class="col-md-4">
										<select  class="form-control" name="adults" id="adult" onchange="personChange(this)">
										<?php
											for ($j=1; $j <8 ; $j++) { ?>
												 <option value="<?=$j?>"><?=$j?></option>
											<?php }
											?>
										</select>
										</div>
									
									 <div class="col-md-2">
										<label class="control-label" for="adults">Youth (12-17):</label>
										</div>
										<div class="col-md-4">
										<select class="form-control" name="adults" id="youth" onchange="personChange(this)">
											<?php
											for ($j=0; $j <5 ; $j++) { ?>
												 <option value="<?=$j?>"><?=$j?></option>
											<?php }
											?>
										
											</select>
									  </div>
									    </div>
										
										<h3 class="mt-20 mb-20">Tour Date</h3>
										<img src="img/cal.png" width="100%" alt="" title="" />
										<h3 class="mt-20 mb-20">Extra Days</h3>
									<p>Want to spend some extra time in Moshi? Choose your arrival and departure dates. </p>
									
									<h3 class="mt-20 mb-20">Flight</h3>
									
											<div class="form-group d-flex flex-row">
									   <div class="col-autos">
									      <div class="input-group">
									        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Departure airport or city" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Departure airport or city'" >
									      </div>
									    </div>
									    <input type="submit" value="Search" class="genric-btn primary circle">
									</div>
									<?php if($trip->picup_price !='' && $trip->picup_price !='0'){ ?> 
									<div class="row">
										<div class="col-md-8">
										<h3 class="mt-20 mb-20">Airport Pickup </h3>
										</div>
										<div class="col-md-4">
										<div class="sub-price"><span><input type="checkbox" id="arrival-transfer-choice" checked="">
										<label for="arrival-transfer-choice">$<?= $trip->picup_price?><small> ($<?= $trip->picup_price?> per traveller)</small></label>
										</span></div>
										</div>
										<p>
										Book an airport pickup in advance and be met at the airport arrivals area. 
										Just look for a G Adventures sign with your name on it.</p>

										<p>Haven't booked your flights yet? No problem. You can always book a pickup and send us the details later up to 30 days 
										before the start of your tour.</p>
									</div>
									<?php } ?>
									<?php if($trip->drop_off_price !='' && $trip->drop_off_price !='0'){ ?> 	
									<div class="row">
										<div class="col-md-8">
										<h3 class="mt-20 mb-20">Airport Drop-off</h3>
										</div>
										<div class="col-md-4">
										<div class="sub-price"><span><input type="checkbox" id="arrival-transfer-choice" checked="">
										<label for="arrival-transfer-choice">$<?= $trip->drop_off_price?><small> ($<?= $trip->drop_off_price?> per traveller)</small></label>
										</span></div>
										</div>
											<p>Book an airport pickup in advance and be met at the airport arrivals area. Just look for a G Adventures sign with your name on it.</p>

                                    	<p>Haven't booked your flights yet? No problem. You can always book a pickup and send us the details later up to 30 days before the start of your tour.</p>
									</div>
									<?php } ?>	
									
<?php if($trip->trip_extra_date !='0'){ ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="mt-20 mb-20">Extra Days</h3>
		</div>
	    <div class="content content-mobile">
	    	<p> Want to spend some extra time in <strong>Moshi</strong>? Choose your arrival and departure dates.</p>
	    	<div id="extra-dates">
	    		<div id="start-controls" class="row-fluid">
	    			<label class="pull-left">Arrive:</label>
	    			<div class="date-adjust">
	    				<span class="date" id="start_date"><?=date('l, F d, Y',strtotime($trip->trip_start_date))?></span>
	    				<div>
		    				<a id="arrive-earlier" data-delta="-1" data-date-type="start_date" class="first extra-day"><strong>Earlier</strong></a>
		    				<a id="arrive-later" data-delta="1" data-date-type="start_date" class="last extra-day disabled"><strong>Later</strong></a>
		    			</div>
	    			</div>
	    		</div>
	    		<div id="finish-controls" class="row-fluid">
	    			<label class="pull-left">Depart: </label>
	    			<div class="date-adjust">
	    				<span class="date" id="end_date"><?=date('l, F d, Y',strtotime($trip->trip_end_date))?></span>
		    			<div>
		    				<a id="leave-earlier" data-delta="-1" data-date-type="end_date" class="first extra-day disabled"><strong>Earlier</strong></a><a id="leave-later" data-delta="1" data-date-type="end_date" class="last extra-day"><strong>Later</strong></a>
		    			</div>
	    			</div>
	    		</div>
	    		</div>
	    		<div id="hotel_options">
	    			<div class="hotel-option clearfix"></div>
	    			<div class="hotel-option clearfix"></div>
	    		</div>
	    	</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<h3 class="mt-20 mb-20">Hotel Room</h3>
			<p>Would you like to book a hotel for your extra days?</p>		
		</div>
		<div class="col-md-4">
			<div class="sub-price">
				<span>
					<input type="checkbox" id="arrival-transfer-choice" checked="">
					<label for="arrival-transfer-choice">$<?= $trip->extra_price?></label>
				</span>
			</div>
		</div>
	</div>											
<?php } ?>		


									
									<div class="row">
										<div class="col-md-8">
										<h3 class="mt-20 mb-20">Extra</h3>
										</div>
										<div class="col-md-4">
										<div class="sub-price"><span><input type="checkbox" id="arrival-transfer-choice" checked="">
										<label for="arrival-transfer-choice">$<?= $trip->extra_price?></label>
										</span></div>
										</div>
											<p>Book an airport pickup in advance and be met at the airport arrivals area. Just look for a G Adventures sign with your name on it.</p>

                                    		<p>Haven't booked your flights yet? No problem. You can always book a pickup and send us the details later up to 30 days before the start of your tour.</p>
									</div>
									

									<!-- <div class="row">
										<div class="col-md-8">
										<h3 class="mt-20 mb-20">Make Every Day Count</h3>
										</div>
										<div class="col-md-4">
										<div class="sub-price"><span><input type="checkbox" id="arrival-transfer-choice" checked="">
										<label for="arrival-transfer-choice">$56<small> ($7 per traveller)</small></label>
										</span></div>
										</div>
											<p>Planeterra helps kick-start community businesses in the travel industry. Give back while you travel by donating $1/day and help change thousands of lives.
											100% of your donations go directly where they’re needed. </p>

                                    		<p>Haven't booked your flights yet? No problem. You can always book a pickup and send us the details later up to 30 days before the start of your tour.</p>
									</div>
									 -->	
									    <div class="row">
										<div class="col-md-12"><h3 class="mt-20 mb-20">Checkout</h3></div>
										<div class="col-md-6">
										<a href="checkout.php" class="genric-btn primary">Confirm and book</a>
										<p>Payment required</p>
										
										</p>As of right now, there’s still space on this departure. 
										If you would like to confirm your booking, reserve your spot now.</p>
										</div>
										<div class="col-md-6">
											<input type="submit" class="genric-btn primary" name="save" value="Save my space">
											<p>Hold for 48 hours. No payment required</p>
											
											<p>If you would like to book this departure but need some time to confirm 
											other travel details, we will hold space for you. 
											This option expires after 48 hours after which time you will need to re-book to 
											reserve space on this departure. Mt Kilimanjaro Trek - Marangu Route | 7 days - Moshi to Moshi - Sold Out
</p>
										</div>
											
										</div>
								
									</form> 
								</div>
						
							</div>
						
						</div>
					
					</div>
				</div>	
			</section>
			<!-- End post-content Area -->
<input type="text" name="" id="price" value="<?= $trip->person_price;?>">
<input type="text" name="" id="extraDayValue" value="<?= $trip->extra_price;?>">
<input type="text" name="" id="trip_start_date" value="<?= $trip->trip_start_date;?>">
<input type="text" name="" id="trip_end_date" value="<?= $trip->trip_end_date;?>">
			<style type="text/css">
				#extra-dates .date-adjust {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    display: block;
    float: left;
    border: 1px solid #eee;
    padding: 0.5em;
    width: 100%;
}
#extra-dates .date-adjust a {
    border-left: 1px solid #eee;
    padding: 0 0.5em;
}

#extra-dates .date-adjust #arrive-later.disabled strong ,#extra-dates .date-adjust #leave-earlier.disabled strong {
    opacity: 0.3;
}
#extra-dates .date-adjust a:hover,#extra-dates .date-adjust a:focus {
    text-decoration: none;
     color: #C7C7C7;
    text-decoration: underline;
}

#extra-dates .date-adjust a {
    color: #039CDA;
    text-decoration: none;
}
#extra-dates .date-adjust #arrive-later, #extra-dates .date-adjust #leave-later {
    margin-left: -1px;
}
#extra-dates .date-adjust a:nth-child(2) {
    padding-right: 0;
}

#extra-dates .date-adjust a {
    border-left: 1px solid #eee;
    padding: 0 0.5em;
}
#extra-dates .date-adjust div {
    float: right;
}

user agent stylesheet
div {
    display: block;
}
#extra-dates .date-adjust .first strong {
    background-repeat: no-repeat;
    background-position: left center;
}

strong {
    font-weight: bold;
}
user agent stylesheet
strong, b {
    font-weight: bold;
}
			</style>
<script type="text/javascript">
	

	function personChange(obj){
		var adult = $('#adult').val();
		var youth = $('#youth').val();
		var price = $('#price').val();
		var traveller = '';

		if(adult !=0){
			if(adult >1){
				traveller += adult+" adults";
			}else{
				traveller += adult+" adult";
			}
		}
		if(youth !=0){
			if(traveller != ''){
				traveller += ", ";	
			}
			if(youth >1){
			traveller += youth+" youths";
			}else{
				traveller += youth+" youth";
			}
		}
		var totalPerson = parseInt(adult)+parseInt(youth);
		$('#tour').html('$'+totalPerson*price);
		$('#traveller').html(traveller);
		
	}

</script>