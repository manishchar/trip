
<!DOCTYPE HTML>
<html>
<head>
<title>Wix | Admin trip</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url() ;?>assets/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url() ;?>assets/admin/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url() ;?>assets/admin/css/morris.css" type="text/css"/>
<link href="<?php echo base_url() ;?>assets/admin/css/font-awesome.css" rel="stylesheet"> 
<script src="<?php echo base_url() ;?>assets/admin/js/jquery-2.1.4.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url() ;?>assets/admin/css/icon-font.min.css" type='text/css' />
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('Admin_Controller/index') ;?>">Home</a><i class="fa fa-angle-right"></i>Update trip</li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
 
<!---->
  <div class="grid-form1">
  	       <h3>Update trip</h3>
  	        	 <div class="errorWrap"><strong>ERROR</strong>: </div>
			<div class="succWrap"><strong>SUCCESS</strong> </div>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<?php echo form_open('Admin_Controller/trip_update_save');?>
							<?php foreach($trip as $row) { ?>
                         <label for="trip_title" ><b>Trip Title</b></label>
                       <!-- <div style="color: red;"><?php //echo form_error('name'); ?></div>
                         --> 
                      <input type="text" name="trip_title" value="<?php echo $row->trip_title?>"  placeholder="Trip title" class="form-control">

                      <label for="trip_description" ><b>Trip Description</b></label>
                      <!-- <div style="color: red;"><?php //echo form_error('mobile_number'); ?></div>
                      --><textarea  name="trip_discription" value="<?php echo $row->trip_description ;?>" placeholder="trip_description"  class="form-control"  >
                       </textarea>
                      <label for="trip_start_date"><b>Start Date</b></label>
                      <!-- <div style="color: red;"><?php// echo form_error('email'); ?></div>
                       --><input  name="trip_start_date" value="<?php echo $row->trip_start_date ; ?>"  class="form-control " >
                        <label for="trip_end_date"><b>End date</b></label>
                         <input type="" name="trip_end_date" value="<?php echo $row->trip_end_date ; ?> " class="form-control " >
                      
                       
                        <label for="trip_extra_date"><b>Extra Date</b></label>
                      <!-- <div style="color: red;"><?php// echo form_error('email'); ?></div>
                       --><input type="" name="trip_extra_date" value="<?php echo $row->trip_extra_date ; ?> "  class="form-control " >
                       <label for="person_price" "><b>Per Persion price</b></label>
                      <!-- <div style="color: red;"><?php// echo form_error('email'); ?></div>
                       --><input type="text" name="person_price" value="<?php echo $row->person_price ; ?>  "  class="form-control " >
                        
                      <label for="file"><b>Feature Image</b></label>
                       <input type="" name="image" value="<?php echo $row->image ; ?> "   class="form-control"  >
   
                     <label for="hotel_price" "><b>Hotel room with price</b></label>
                      <input type="" name="hotel_price" value="<?php echo $row->hotel_price ; ?> "class="form-control " >
                        
                         <label for="day_count" "><b>Make every day count</b></label>
                      <input type="text" name="day_count" value="<?php echo $row->day_count ; ?>" count" class="form-control " >
                        
                      <label for="picup_price" "><b>Airport pickup with price</b></label>
                      <input type="" name="picup_price" value="<?php echo $row->picup_price ; ?> " pickup price" class="form-control " >
                        
                     <label for="drop_off_price" "><b>Airport Drop off with price</b></label>
                      <input type="" name="drop_off_price" value="<?php echo $row->drop_off_price ; ?>"" drop price" class="form-control " >
                        <br>


                   <BUTTON  class="btn btn-info form-control"   name="update" id="update"> <b> update</b> </BUTTON><br/>
     
      

      
      <div class="panel-footer">
		
	 </div>
    </form>
    <?php }?>
  </div>
 	</div>
 	<!--//grid-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="<?php echo base_url() ;?>assets/admin/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url() ;?>assets/admin/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url() ;?>assets/admin/js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>
<?php// } ?>