<div class="sidebar-menu">
	<header class="logo1">
		<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
	</header>
	<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
	<div class="menu">
		<ul id="menu" >
			<li><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>

			<li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Trip</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
			<ul id="menu-academico-sub" >
			<li id="menu-academico-avaliacoes" ><a href="<?php echo base_url('admin/add_trip'); ?>">Create Trip</a></li>
			<li id="menu-academico-avaliacoes" ><a href="<?php echo base_url('admin/manage_trip');?>">Manage Trip</a></li>
			</ul>
			</li>
			<li id="menu-academico" ><a href="<?php echo base_url('admin/category');?>"><i class="fa fa-users" aria-hidden="true"></i><span>Category</span><div class="clearfix"></div></a></li>
			<li id="menu-academico" ><a href="<?php echo base_url('admin/registered_users');?>"><i class="fa fa-users" aria-hidden="true"></i><span>All registered Users</span><div class="clearfix"></div></a></li>

			<li><a href="<?php echo base_url('admin/booking_history');?>"><i class="fa fa-list" aria-hidden="true"></i>  <span>Booking history page</span><div class="clearfix"></div></a></li>
			<li><a href="#"><i class="fa fa-table"></i>  <span>Manage Issues</span><div class="clearfix"></div></a></li>
			<li><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i>  <span>Manage Enquiries</span><div class="clearfix"></div></a></li>
			<li><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i>  <span>Manage Pages</span><div class="clearfix"></div></a></li>
		</ul>
	</div>
</div>
