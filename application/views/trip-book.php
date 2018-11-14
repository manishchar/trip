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
								<?= $trip->trip_title.' '.$duration.' Day'; ?>				
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url()?>">Home </a>  <span class="lnr lnr-arrow-right"></span><?= $trip->name; ?> <span class="lnr lnr-arrow-right"></span> <a href="#"> <?= $trip->trip_title; ?></a></p>
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
											<span id="pickup">$<?= $trip->picup_price;?></span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Departure Transfer</span>
											<span id="transfer">$<?= $trip->drop_off_price;?></span>
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
											
											<p class="price-btn primary-btn" style="background:#000000; width:100%; text-align:center;">Total $<span id="grandTotal">21288.00</span></p>
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

									<div class="row">
										<div class="col-md-8">
										<h3 class="mt-20 mb-20">Flight </h3>
										</div>
										<div class="col-md-4">
										<div class="sub-price"><span><input type="checkbox" id="flight-transfer-choice">
										<label for="flight-transfer-choice">$<?= $trip->picup_price?><small> ($<?= $trip->picup_price?> per traveller)</small></label>
										</span></div>
										</div>
										<p>
										Flight data</p>

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
										<div class="sub-price"><span><input type="checkbox" id="drop-transfer-choice" checked="">
										<label for="drop-transfer-choice">$<?= $trip->drop_off_price?><small> ($<?= $trip->drop_off_price?> per traveller)</small></label>
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
	    	<p id="extraMessage"> Want to spend some extra time in <strong>Moshi</strong>? Choose your arrival and departure dates.</p>
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
					<input type="checkbox" id="hotel-extra-price">
					<label for="hotel-extra-price">$<?= $trip->extra_price?></label>
				</span>
			</div>
		</div>
	</div>											
<?php } ?>		


									
									<!-- <div class="row">
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
									 -->

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
										<a href="javascript:void(0)" class="genric-btn primary" onclick="saveTrip(1)">Confirm and book</a>
										<p>Payment required</p>
										
										</p>As of right now, there’s still space on this departure. 
										If you would like to confirm your booking, reserve your spot now.</p>
										</div>
										<div class="col-md-6">
											<input type="button" class="genric-btn primary" name="save" onclick="saveTrip(2)" value="Save my space">
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

			<?php require_once('footer.php'); ?>
			<!-- End post-content Area -->
			<form id="tripFrom" onsubmit="return false;">
<input type="text" name="" id="price" value="<?= $trip->person_price;?>">
<input type="text" name="" id="tripId" value="<?= $trip->id;?>">
<input type="text" name="" id="extraDayValue" value="<?= $trip->extra_price;?>">
<input type="text" name="" id="trip_start_date" value="<?= $trip->trip_start_date;?>">
<input type="text" name="" id="trip_end_date" value="<?= $trip->trip_end_date;?>">

<input type="text" id="extraDay" name="extraDay" value="0">
<input type="text" id="extraArriveDay" name="extraArriveDay" value="0">
<input type="text" id="extraDepartureDay" name="extraDepartureDay" value="0">
<input type="text" id="adult" name="adult" value="1">
<input type="text" id="youth" name="youth" value="0">
<input type="text" id="flightAmount" name="flightAmount" value="50">
<input type="text" id="pickupAmount" name="pickupAmount" value="<?= $trip->picup_price;?>">
<input type="text" id="dropAmount" name="dropAmount" value="<?= $trip->drop_off_price;?>">
<input type="text" id="hotalAmount" name="hotalAmount" value="<?= $trip->extra_price;?>">

<input type="text" class="total" id="flightTotal" name="flightTotal" value="0">
<input type="text" class="total" id="pickupTotal" name="pickupTotal" value="0">
<input type="text" class="total" id="dropTotal" name="dropTotal" value="0">
<input type="text" class="total" id="hotalTotal" name="hotalTotal" value="0">
<input type="text" class="total" id="tourTotal" name="tourTotal" value="0">
</form>
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
#extra-dates .date-adjust strong:hover {
    cursor: pointer;
    /*background-position: left center;*/
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
var base_url ="<?php echo base_url(); ?>";
	function saveTrip(type){
		alert(type);

		$.ajax({
        type: "POST",
        url: base_url+"/Trip_Book/saveTrip",
        data:$('#tripFrom').serialize(),
        beforeSend(xhr){
          //$('#recordSave').prop('disabled',true);
          //$('#errorMessageForm').html('');
            //alert('before');
        },
         success: function(result){
            //alert(result);
            console.log(result);
              var obj = JSON.parse(result);
             if(obj.status == 'success'){
             	//alert('ssssssss');
              window.location = base_url+'/Trip_Book/checkout_process';
                //$('#recordSave').prop('disabled',true);
                //$('#errorMessageForm').html('<span class="text text-success">'+obj.message+'</span>');
              }
             
              
            // //   $('#errorMessage').html('<span class="text text-success">'+obj.message+'</span>');
            //   //location.reload();
            //  }

            //  if(obj.result == 'failed'){
            //   $('#recordSave').prop('disabled',false);
            //   // $('#recordSave').val('Save Record');  
            //    $('#errorMessageForm').html('<span class="text text-danger">'+obj.message+'</span>');

            //  }
       
       
       
         },error: function(data){
              //  alert("error111");
                console.log(data);
            },complete: function(){
                //alert('complete');
               // $('#upload').val('Upload');
               // $('#upload').prop('disabled',false);
               // $('#saveLoader').hide();
         }  
    });
return false;
	}
	$('#flight-transfer-choice').change(function(){
		if($(this).prop('checked')){
			$('#flight').html($(this).next().html());
		}else{
				$('#flight').html('0');
		}
		calculateValue();
	});

	$('#arrival-transfer-choice').change(function(){
		if($(this).prop('checked')){
			$('#pickup').html($(this).next().html());
		}else{
				$('#pickup').html('0');
			}
			calculateValue();
	});

	$('#drop-transfer-choice').change(function(){
		if($(this).prop('checked')){
			$('#transfer').html($(this).next().html());
		}else{
				$('#transfer').html('0');
			}
			calculateValue();
	});
	$('#hotel-extra-price').change(function(){
			if($(this).prop('checked')){
			
			$('#extra_day').html($(this).next().html());
			}else{
				$('#extra_day').html('0');
			}
			calculateValue();
		});

	function personChange(obj){
		var adult = $('#adult').val();
		var youth = $('#youth').val();
		
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
		$('#traveller').html(traveller);
		calculateValue();

// 		var price = $('#price').val();
// 		var flightAmount = parseInt($('#flightAmount').val());
// 		var pickupAmount = parseInt($('#pickupAmount').val());
// 		var dropAmount = parseInt($('#dropAmount').val());
// 		var hotalAmount = parseInt($('#hotalAmount').val());
// 		var extraDay = parseInt($('#extraDay').val());
// 		var totalPerson = parseInt(adult)+parseInt(youth);
// 		$('#tour').html('$'+totalPerson*price);
// 		$('#tourTotal').val(totalPerson*price);
// 		var flightTotal = totalPerson*flightAmount;
// 		var flightMessage='$'+flightTotal+'($'+flightAmount+' per traveller)';
// 		var pickupTotal = totalPerson*pickupAmount;
// 		var pickupMessage='$'+pickupTotal+'($'+pickupAmount+' per traveller)';
// 		var dropTotal = totalPerson*dropAmount;
// 		var dropMessage='$'+pickupTotal+'($'+dropAmount+' per traveller)';
// 		if(extraDay>0){
// var hotalTotal = extraDay*(totalPerson*hotalAmount);
// var hotalMessage='$'+hotalTotal+'($'+hotalAmount+' per traveller)';
// 		}else{
// var hotalTotal = totalPerson*hotalAmount;
// var hotalMessage='$'+hotalTotal+'($'+hotalAmount+' per traveller)';
// 		}
		
// 		$('#flight-transfer-choice').next().html(flightMessage);
// 		if($('#flight-transfer-choice').prop('checked')){
// 			$('#flightTotal').val(flightTotal);	
// 			$('#flight').html(flightMessage);	
// 		}	
		
// 		$('#arrival-transfer-choice').next().html(pickupMessage);
// 		if($('#arrival-transfer-choice').prop('checked')){
// 			$('#pickupTotal').val(pickupTotal);	
// 			$('#pickup').html(pickupMessage);	
// 		}

		
// 		$('#drop-transfer-choice').next().html(dropMessage);
// 		if($('#drop-transfer-choice').prop('checked')){
// 			$('#dropTotal').val(dropTotal);	
// 			$('#transfer').html(dropMessage);	
// 		}

		
// 		$('#hotel-extra-price').next().html(hotalMessage);
// 		if($('#hotel-extra-price').prop('checked')){
// 			$('#hotalTotal').val(hotalTotal);	
// 			$('#extra_day').html(hotalMessage);	
// 		}
		
// 		$('#adult').val(adult);
// 		$('#youth').val(youth);
		
		//alert('e'+extraDay)
	}
	calculateValue();
function calculateValue(){
		var price = $('#price').val();
		var adult = $('#adult').val();
		var youth = $('#youth').val();
		
		var flightAmount = parseInt($('#flightAmount').val());
		var pickupAmount = parseInt($('#pickupAmount').val());
		var dropAmount = parseInt($('#dropAmount').val());
		var hotalAmount = parseInt($('#hotalAmount').val());
		var extraDay = parseInt($('#extraDay').val());
		var totalPerson = parseInt(adult)+parseInt(youth);
		$('#tour').html('$'+totalPerson*price);
		$('#tourTotal').val(totalPerson*price);
		var flightTotal = totalPerson*flightAmount;
		var flightMessage='$'+flightTotal+'($'+flightAmount+' per traveller)';
		var pickupTotal = totalPerson*pickupAmount;
		var pickupMessage='$'+pickupTotal+'($'+pickupAmount+' per traveller)';
		var dropTotal = totalPerson*dropAmount;
		var dropMessage='$'+pickupTotal+'($'+dropAmount+' per traveller)';
		if(extraDay>0){
var hotalTotal = extraDay*(totalPerson*hotalAmount);
var hotalMessage='$'+hotalTotal+'($'+hotalAmount+' per traveller)';
		}else{
var hotalTotal = totalPerson*hotalAmount;
var hotalMessage='$'+hotalTotal+'($'+hotalAmount+' per traveller)';
		}
		
		$('#flight-transfer-choice').next().html(flightMessage);
		if($('#flight-transfer-choice').prop('checked')){
			$('#flightTotal').val(flightTotal);	
			$('#flight').html(flightMessage);	
		}else{
			$('#flightTotal').val(0);
		}	
		
		$('#arrival-transfer-choice').next().html(pickupMessage);
		if($('#arrival-transfer-choice').prop('checked')){
			$('#pickupTotal').val(pickupTotal);	
			$('#pickup').html(pickupMessage);	
		}else{
			$('#pickupTotal').val(0);
		}

		
		$('#drop-transfer-choice').next().html(dropMessage);
		if($('#drop-transfer-choice').prop('checked')){
			$('#dropTotal').val(dropTotal);	
			$('#transfer').html(dropMessage);	
		}else{
			$('#dropTotal').val(0);
		}

		
		$('#hotel-extra-price').next().html(hotalMessage);
		if($('#hotel-extra-price').prop('checked')){
			$('#hotalTotal').val(hotalTotal);	
			$('#extra_day').html(hotalMessage);	
		}else{
			$('#hotalTotal').val(0);
		}
		//$('#traveller').html(traveller);
		$('#adult').val(adult);
		$('#youth').val(youth);
		calculateSum();
}
function calculateSum(){
	var total = 0;
		$('.total').each(function(){
			total += parseInt($(this).val());
		});
		$('#grandTotal').html(total);
}

</script>