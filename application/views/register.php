  <?php include('header.php'); ?>
			<!-- start banner Area -->
			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Register			
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url()?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="register.php"> Register</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
					<div class="col-lg-3 form-group"></div>
						<div class="col-lg-6 form-group login-box1">
        	<div class="panel panel-default">
        		<div class="panel-heading" style="margin-bottom:20px;">
			    		<h3 class="panel-title">Register</h3>
			 			</div>
			 			<div class="panel-body">
			    			<form id="registration" onsubmit="return registration(this)">
						<?php //echo form_open('Normal_Login/register') ;?>
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm myform" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="myform form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>
                            <div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="myform form-control input-sm" placeholder="Email Address">
			    			</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
			    			<div class="form-group">
			    			
						
			    				<input type="text" name="mobile" id="mobile" class="myform form-control input-sm" placeholder="Enter mobile number">
			    			</div>
							</div>
							</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="myform form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class=" myform form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="button" onclick="formSubmit()" name="submit" value="Register" class="genric-btn primary">
			    		<?php //echo form_close();?>
			    	</form>
			    	<!--	</form-->
			    	</div>
	    		</div>
				</div>
					<div class="col-lg-3 form-group"></div>
    		</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

	<?php include('footer.php'); ?>

	<script type="text/javascript">
		function formSubmit(){
alert();
$('.myform').css('border','1px solid #ccc');
		$.ajax({
			url: "<?php echo base_url().'Normal_Login/register' ?>",
			type: 'POST',
			data: $('#registration').serialize(),
			success : function(res){
				console.log(res);
				var obj = JSON.parse(res);
				if(obj.status == 'failed'){
					if(obj.code == '201'){
$.each(obj.error, function( index, value ) {
	$('#'+index).css('border','1px solid red');
	console.log( index + ": " + value );
});
					}
				}
				if(obj.status == 'success'){
					//location.reload();
					location.href = "<?php echo base_url().'User/account' ?>";
				}
			}
		});
		return false;
		}

	</script>