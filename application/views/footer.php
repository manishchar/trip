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
</script>
		</body>
</html>