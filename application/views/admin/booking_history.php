
<!DOCTYPE HTML>
<html>
<head>
	<?php include('includes/meta.php'); ?>
<style type="text/css">
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
                <li class="breadcrumb-item"><a href="<?php echo site_url('Admin_Controller/index');?>">Home</a><i class="fa fa-angle-right"></i>Bookings History Page</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				<div class="agile-tables">
					<div class="w3l-table-info table-responsive">
					  <h2>Bookings History Page</h2>
					    <table id="table ">
						<thead>
						  <tr>
						  <th>Booikn id</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Passport</th>
							<th>Mailing Address </th>
							<th>Date of Birth</th>
							<th>PostalZip </th>
							<th>Country Province </th>
							<th>State </th>
						  </tr>
						</thead>
						<tbody>
<?php
foreach($history as $result)
{				?>		
						  <tr>
							<td>#BK-<?php echo $result->id ;?></td>
							<td><?php echo $result->email ;?></td>
							<td><?php echo $result->phone ;?></td>
							<td><?php echo $result->passport ;?></td>
							<td><?php echo $result->mailing_address ;?></td>
							<td><?php echo $result->dob ;?></td>
							<td><?php echo $result->postalzip ;?></td>
							<td><?php echo $result->country_crovince ;?></td>
							<td><?php echo $result->state ;?></td>

								 </tr>
						 <?php //$cnt=$cnt+1;
						} ?>
						</tbody>
					  </table>
					</div>
				  </table>

				
			</div>
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
<div class="clearfix"></div>		
</div>
<?php include('includes/script.php'); ?>	
							
</body>
</html>