
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Admin Package Creation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>assets/admin/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url();?>assetes/admin/css/morris.css" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/css/font-awesome.css" rel="stylesheet"> 
<script src="<?php echo base_url();?>assets/admin/js/jquery-2.1.4.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/icon-font.min.css" type='text/css' />
  

</head> 
<body>


	<div class="container ">
		<div class="col-lg-4"></div>
		<div class="col-lg-8">
		<?php echo  form_open('Admin_Controller/add_trip_insert'); ?>
		<div class="col-lg-12 border" >
      <span class="border border-primary">
                       <h1 align="CENTER" style=" opacity:50.25;">Add Trip</h1>

                       <?php echo $this->session->flashdata('s');
                                echo	$this->session->flashdata('e');

                          ?>
<div class="col-sm-6">
  <label for="trip_title" ><b>Trip Title1</b></label>
  <input type="text" name="trip_title" id="trip_title"  placeholder="Trip title" class="form-control">
</div>
<div class="col-sm-6">
<label for="trip_discription" ><b>Trip Discription</b></label>
<!-- <div style="color: red;"><?php //echo form_error('mobile_number'); ?></div>
--><textarea  name="trip_discription" id="trip_discription" placeholder="trip_discription"  class="form-control"  >
 </textarea>
</div>
                      <label for="start_date"><b>Start Date</b></label>
                      <!-- <div style="color: red;"><?php// echo form_error('email'); ?></div>
                       --><input type="date" name="start_date" id="start_date" placeholder="start date" class="form-control " >
                        <label for="end_date"><b>End date</b></label>
                         <input type="date" name="end_date" id="end_date" placeholder="end_date" class="form-control " >
                      
                       
                        <label for="extra_date"><b>Extra Date</b></label>
                      <!-- <div style="color: red;"><?php// echo form_error('email'); ?></div>
                       --><input type="date" name="extra_date" id="extra_date" placeholder="extra_date" class="form-control " >
                       <label for="price" "><b>Per Persion price</b></label>
                      <!-- <div style="color: red;"><?php// echo form_error('email'); ?></div>
                       --><input type="price" name="price" id="price"  placeholder="price" class="form-control " >
                        
                      <label for="file"><b>Feature Image</b></label>
                       <input type="file" name="trip_file"    class="form-control"  >
   
                     <label for="hotel_price" "><b>Hotel room with price</b></label>
                      <input type="hotel_price" name="hotel_price" id="hotel_price"  placeholder="hotel price" class="form-control " >
                        
                         <label for="day count" "><b>Make every day count</b></label>
                      <input type="day count" name="day count" id="day count"  placeholder="day count" class="form-control " >
                        
                      <label for="Airport_pickup_price" "><b>Airport pickup with price</b></label>
                      <input type="Airport_pickup_price" name="Airport_pickup_price" id="Airport_pickup_price"  placeholder="Airport pickup price" class="form-control " >
                        
                     <label for="Airport_drop_price" "><b>Airport Drop off with price</b></label>
                      <input type="Airport_drop_price" name="Airport_drop_price" id="Airport_drop_price"  placeholder="Airport drop price" class="form-control " >
                        


                   <BUTTON  class="btn btn-info form-control" value="upload"  name="Submit" id="Submit"> <b> submit</b> </BUTTON><br/>
</div>
 <?php echo form_close(); ?>
              </span>
       
</div> 

	</div>
   
</body>
</html>
