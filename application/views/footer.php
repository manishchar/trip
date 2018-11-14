			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="container">

					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<p>Moshi, Tanzania</p>

                                <p>Adventures@HEROSummits.com</p>
								<p>
									© 2018 by HERO Summits.

								</p>
							</div>
						</div>
											
						<div class="col-lg-6  col-md-6 col-sm-6">
							<div class="single-footer-widget">								
								<div id="mc_embed_signup">
							<!--<form>-->
							<?php echo form_open('Contact/contact') ;?>
							  <div class="form-row">
								<div class="form-group col-md-6">
								  <input type="text" name="name" class="form-control" id="inputName" placeholder="Name*">
								  <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email*">
								  <input type="text" name="subject" class="form-control" id="inputSubject" placeholder="Subject">
								</div>
								<div class="form-group col-md-6">
								  <textarea class="form-control" name="message" id="inputMessage" placeholder="Message"></textarea>
									<input type="submit" class="btn btn-primary send-btn" value="Send">
								</div>
							  </div>
							  	<?php echo form_close();?>
							<!--</form>-->
								</div>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget mail-chimp" style="text-align:center;">
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="<?php echo base_url()?>assets/img/f11.png" alt=""></li>
									<li><img src="<?php echo base_url()?>assets/img/f22.png" alt=""></li>
									<li><img src="<?php echo base_url()?>assets/img/f33.png" alt=""></li>
								
								</ul>
								<p class="f-social"><a target="_blank" href="https://www.facebook.com/HEROSummits/"><img src="<?php echo base_url()?>assets/img/facebook.png" alt=""></a>
								<a target="_blank" href="https://www.instagram.com/herosummits/"><img src="<?php echo base_url()?>assets/img/instagram.png" alt=""></a></p>
							</div>
						</div>						
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	

			<script src="<?php echo base_url()?>assets/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="<?php echo base_url()?>assets/js/jquery-ui.js"></script>
			<script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
			<script src="<?php echo base_url()?>assets/js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="<?php echo base_url()?>assets/js/jquery-ui.js"></script>					
  			<script src="<?php echo base_url()?>assets/js/easing.min.js"></script>			
			<script src="<?php echo base_url()?>assets/js/hoverIntent.js"></script>
			<script src="<?php echo base_url()?>assets/js/superfish.min.js"></script>	
			<script src="<?php echo base_url()?>assets/js/jquery.ajaxchimp.min.js"></script>
			<script src="<?php echo base_url()?>assets/js/jquery.magnific-popup.min.js"></script>						
			<script src="<?php echo base_url()?>assets/js/jquery.nice-select.min.js"></script>					
			<script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>							
			<script src="<?php echo base_url()?>assets/js/mail-script.js"></script>	
			<script src="<?php echo base_url()?>assets/js/main.js"></script>	
			<script>
			$(function() {

    var $sidebar   = $("#sidebar"), 
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 80;

    $window.scroll(function() {
        if ($window.scrollTop() > offset.top) {
            $sidebar.stop().animate({
                marginTop: $window.scrollTop() - offset.top + topPadding
            });
        } else {
            $sidebar.stop().animate({
                marginTop: 0
            });
        }
    });
    
});


function dateDiff(start,end){
    days = (end- start) / (1000 * 60 * 60 * 24);
    return Math.round(days);
}
jQuery(document).ready(function($) {
	//alert();
	
	var extraDayValue = $('#extraDayValue').val();
	var trip_start_date = new Date($('#trip_start_date').val());
	var trip_end_date = new Date($('#trip_end_date').val());
	var extraDay = 1;
	var earliar = later =0;
	
	//alert($.datepicker.formatDate('DD, d MM, yy', new Date()));
	$('.extra-day').click(function() {
		var adult = $('#adult').val();
		var youth = $('#youth').val();
		var totalPerson = parseInt(adult)+parseInt(youth);
		var start_date = $('#start_date').html();
		var end_date = $('#end_date').html();
		var s_date = new Date(start_date);
		var e_date = new Date(end_date);
var extraMessage ="Want to spend some extra time in <strong>Moshi</strong>? Choose your arrival and departure dates.";
		//var nextDate = ($.datepicker.formatDate('DD, d MM, yy', new Date(tomorrow.setDate(tomorrow.getDate() + 1))) );
		if(!$(this).hasClass('disabled')){
		//if(true){
			if($(this).attr('id') == "arrive-earlier"){

				var nextDate = new Date(s_date.setDate(s_date.getDate() - 1));
				$('#start_date').html($.datepicker.formatDate('DD, MM dd, yy',nextDate));
				earliar = parseInt((dateDiff(nextDate,trip_start_date)));
				//alert(start_date);
			}else if($(this).attr('id') == "arrive-later"){
				var nextDate = new Date(s_date.setDate(s_date.getDate() + 1)); 
				$('#start_date').html($.datepicker.formatDate('DD, MM dd, yy', nextDate));
				earliar = parseInt((dateDiff(nextDate,trip_start_date)));
				//alert(start_date);
			}else if($(this).attr('id') == "leave-earlier"){
				var nextDate = new Date(e_date.setDate(e_date.getDate() - 1));
				$('#end_date').html($.datepicker.formatDate('DD, MM dd, yy', nextDate));
				later = parseInt((dateDiff(trip_end_date,nextDate)));
				//alert(end_date);
			}else if($(this).attr('id') == "leave-later"){
				var nextDate = new Date(e_date.setDate(e_date.getDate() + 1));
				$('#end_date').html($.datepicker.formatDate('DD, MM dd, yy', nextDate));
				later = parseInt((dateDiff(trip_end_date,nextDate)));
				//alert(end_date);
			}

			extraDay = earliar +later;
			
			
			//alert('earliar = '+extraDay+' later '+later);
			var totalExtra = totalPerson*(parseInt(extraDayValue)*parseInt(extraDay));
			if(extraDay >0){
			var totalMessageLeft=totalMessageRight = '$'+totalExtra+'($'+extraDayValue+' per traveller)';
				$('#hotel-extra-price').prop('checked',true);
			}else{
				var totalMessageLeft = '0';
				var totalMessageRight = '$'+extraDayValue;
				$('#hotel-extra-price').prop('checked',false);
			}

			$('#extraDay').val(extraDay);
			$('#extraArriveDay').val(earliar);
			$('#extraDepartureDay').val(later);
			$('#hotel-extra-price').next().html(totalMessageRight);
			$('#extra_day').html(totalMessageLeft);
			$('#arrive-later').addClass('disabled');
			$('#leave-earlier').addClass('disabled');
				if(earliar > 0 && later >0){
					//alert('both');
					$('#arrive-later').removeClass('disabled');
					$('#leave-earlier').removeClass('disabled');
					extraMessage += " earliar : "+earliar+" and later : "+later;
				}else if(later >0){
					$('#leave-earlier').removeClass('disabled');
					//alert('later');
					extraMessage += " later : "+ later;
				}else if(earliar >0){
					
					$('#arrive-later').removeClass('disabled');
					//alert('earliar');
					extraMessage += " earliar : "+earliar;
				}
				$('#extraMessage').html(extraMessage);
				
		}	
	});

	// $('.last').click(function(event) {
	// 	var end_date = $('#end_date').html();
	// 	alert(end_date);
	// });
});
</script>
		</body>
</html>