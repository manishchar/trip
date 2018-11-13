<!DOCTYPE HTML>
<html>
	<head>
		<?php include('includes/meta.php'); ?>
	</head> 
	<body>
		<?php include('includes/header.php'); ?>
	  	<?php include('includes/side_menu.php'); ?>
	   	<div class="page-container">
	   	<!--/content-inner-->
		<div class="left-content">
					<div class="mother-grid-inner">
						<!--header start here-->
						<div class="clearfix"> </div>	
					</div>
					<!--heder end here-->
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo site_url('Admin_Controller/index');?>">Home</a><i class="fa fa-angle-right"></i>Registered Users</li>
					</ol>
					<div class="agile-grids">	
						<!-- tables -->
						
						<div class="agile-tables">
							<div class="w3l-table-info">
							  <h2>All Registered Users</h2>
							    <table id="table">
									<thead>
									  <tr>
									  <th>#</th>
										<th>Name</th>
										<th>Mobile No.</th>
										<th>Email Id</th>
										<th>RegDate </th>
										<th>Updation Date</th>
									  </tr>
									</thead>
									<tbody>
										<?php
										foreach($user as $result)
										{				?>		
										  <tr>
											<td><?php //echo ($cnt);?></td>
											<td><?php echo $result->first_name;?></td>
										    <td><?php echo $result->first_name;?></td>

											<td><?php echo $result->mobile;?></td>
											<td><?php echo $result->email;?></td>
											<td><?php //echo htmlentities($result->RegDate);?></td>
											<td><?php //echo htmlentities($result->UpdationDate);?></td>
										  </tr>
										 <?php //$cnt=$cnt+1; 
										}?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
		</div>
	    <!--//content-inner-->
		<!--/sidebar-menu-->
		  <div class="clearfix"></div>		
		</div> <!--/end page-container-->
		<?php include('includes/script.php'); ?>

	</body>
</html>
