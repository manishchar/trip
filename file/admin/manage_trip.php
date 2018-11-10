
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | admin manage packages</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url() ;?>assets/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url() ;?>assets/admin/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url() ;?>assets/admin/css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="<?php echo base_url() ;?>assets/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?php echo base_url() ;?>assets/admin/js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<!-- tables -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/admin/css/table-style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/admin/css/basictable.css" />
<script type="text/javascript" src="<?php echo base_url() ;?>assets/js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="<?php echo base_url() ;?>assets/admin/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
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
                <li class="breadcrumb-item"><a href="<?php echo site_url('Admin_Controller/index') ;?>">Home</a><i class="fa fa-angle-right"></i>Manage trip</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info table-responsive">
					  <h2>Manage Packages</h2>
					    <table id="table">
						<thead>
						  <tr>
						  <th>#</th>
							<th >Trip Title</th>
							<th>Trip description</th>
							<th>Start date</th>
							<th>End Date</th>
							<th>Extra Date</th>
							<th>Per Persion price</th>
							<th>Feature Image</th>
							<th>Hotel room with price</th>
							<th>Make every day count</th>
							<th>Airport pickup with price</th>
							<th>Airport Drop off with price</th>
						    <th>update</th>
							<th>Delete</th>


						  </tr>
						</thead>
						<tbody>

<?php foreach($trip as $result){
			?>		
						  <tr>
						<td class="tex
						t-hide"><?php echo $result->id;?></td>


							<td><?php echo $result->trip_title;?></td>
							    <td><?php echo $result->trip_description;?></td>				   <td><?php echo $result->trip_start_date;?></td>			 
							    <td><?php echo $result->trip_end_date;?></td>					
							    <td><?php echo $result->trip_extra_date ;?></td>				
							    <td><?php echo $result->person_price ;?></td>
							    <td><?php  ;?></td>

							    <td><?php echo $result->hotel_price ;?></td>					   <td><?php echo $result->day_count ;?></td>						  <td><?php echo $result->picup_price ;?></td>
							    <td><?php echo $result->drop_off_price ;?></td>
				                 <td> <button class="btn btn-green btn-sm "><a href="<?php echo site_url('Admin_Controller/update_trip')."/".$result->id; ?>">Update</button></a></td>

				                 <td> <button class="btn btn-info btn-sm "><a href="<?php echo site_url('Admin_Controller/delete_trip')."/".$result->id; ?>?>">Delete</button></a></td>
						  </tr>
						  <?php }?>
						 <?php// $cnt=$cnt+1;} }?>
						</tbody>
					  </table>
					</div>
				  </table>

				
			</div>
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
<script src="<?php echo_base() ;?>assets/admin/js/jquery.nicescroll.js"></script>
<script src="<?php echo_base() ;?>assets/admin/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo_base() ;?>assets/admin/js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>
