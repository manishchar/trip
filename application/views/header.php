	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="<?php echo base_url()?>assets/img/fav.html">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Hero Summits</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/linearicons.css">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery-ui.css">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery-ui.css">				
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/nice-select.css">							
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.min.css">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.css">				
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
		</head>
		<body>	
			<header id="header">
				<div class="container main-menu">
					<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="<?php echo base_url()?>">Home</a></li>
				          <li><a href="<?php echo site_url('Wix_Controller/story')?>">Our Story</a></li>
				          <li><a href="<?php echo site_url('Wix_Controller/safari')?>">Safari</a></li>
				          <li class="menu-has-children"><a href="<?php echo site_url('Wix_Controller/kilimanjaro')?>">Kilimanjaro Trek</a>
				            <ul>
				              <li><a target="_blank" href="e98fe8_4ae791afea7d44caafa2dfd02670b386.pdf">Safety Checklist</a></li>
				            </ul>
				          </li>					          					          		          
				          <li><a href="<?php echo site_url('Wix_Controller/contact')?>">Contact</a></li>
						  <li><a class="book-now-btn" href="<?php echo site_url('Trip_Book/trip_show')?>">Book Now</a></li>
						  <li class="menu-has-children"><a href="javascript:void(0)"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Account</a>
				         <ul>


				         	<?php
if($this->session->userdata('front')){ ?>
<li><a href="<?php echo site_url('User/account')?>">My Account</a></li>
<li><a href="<?php echo site_url('User/logout')?>"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
<?php }else{ ?>
<li><a href="<?php echo site_url('Wix_Controller/login')?>">Login</a></li>
<li><a href="<?php echo site_url('Wix_Controller/register')?>">Register</a></li>	
<?php }	?>
				              
							 

				            </ul>
							</li>
						</ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header><!-- #header -->
			