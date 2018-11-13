
<!DOCTYPE HTML>
<html>
<head>
<?php require_once('includes/meta.php'); ?>
</head> 
<body>
	 <?php require_once('includes/header.php'); ?>
  <?php require_once('includes/side_menu.php'); ?>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a><i class="fa fa-angle-right"></i>Manage trip</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info table-responsive">
					  <h2>Manage Trip</h2>
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
<td class="text-hide"><?php echo $result->id;?></td>
<td><?php echo $result->trip_title;?></td>
<td><?php echo $result->trip_description;?></td>
<td><?php echo $result->trip_start_date;?></td>			 
<td><?php echo $result->trip_end_date;?></td>					
<td><?php echo $result->trip_extra_date ;?></td>				
<td><?php echo $result->person_price ;?></td>
<td class=""><img class="img-fluid img-responsive " src="<?php echo base_url();?>uploads/<?php echo $result->image ?>" alt=""></td>

<td><?php echo $result->hotel_price ;?></td>					   <td><?php echo $result->day_count ;?></td>						  <td><?php echo $result->picup_price ;?></td>
<td><?php echo $result->drop_off_price ;?></td>
<td> <button class="btn btn-green btn-sm "><a href="<?php echo base_url('admin/update_trip')."/".$result->id; ?>">Update</button></a></td>

<td> <button class="btn btn-info btn-sm "><a href="<?php echo base_url('admin/delete_trip')."/".$result->id; ?>">Delete</button></a></td>
</tr>
<?php }?>
						 <?php// $cnt=$cnt+1;} }?>
						</tbody>
					  </table>
					</div>
				  </table>

				
			</div>
<!-- script-for sticky-nav -->
		
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

<?php include('includes/script.php'); ?>	
							
</body>
</html>
