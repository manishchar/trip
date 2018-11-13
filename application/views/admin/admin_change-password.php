

<!DOCTYPE HTML>
<html>
<head>
<title>Admin| Admin Change Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>assets/admin/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/morris.css" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/css/font-awesome.css" rel="stylesheet"> 
<script src="<?php echo base_url();?>assets/admin/js/jquery-2.1.4.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/icon-font.min.css" type='text/css' />
<script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
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

   <div class="page-container  ">

   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('Admin_Controller/index');?>">Home</a><i class="fa fa-angle-right"></i>Profile <i class="fa fa-angle-right"></i> Change Password</li>
            </ol>
		<!--grid-->
 	<div class="grid-form">

  <div class="grid-form1">

  	        	 
  <div class="panel-body">
  	<?php foreach($admin_data as $row){?>
	<div class="col-lg-12" align="center">
		
			<table class="table bg-dark" align="center">
				<tbody>
					<tr>
					   <td>First name</td><td><?php echo $row->first_name?></td>

				       
                    </tr>
                     <tr><td>Mobile</td><td><?php echo $row->mobile?></td></tr>

                    <tr><td>Email</td><td><?php echo $row->email?></td></tr>

				</tbody>
			</table>
		

	</div>

	<?php }?> 

					<form  name="chngpwd" action="<?php echo base_url('admin/change_password');?>" method="post" class="form-horizontal" onSubmit="return valid();">

						<div class="form-group">
							<label class="col-md-2 control-label">Current Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password" name="password" class="form-control1" id="exampleInputPassword1" placeholder="Current Password" required="">
								</div>
							</div>
						</div>

	<div class="form-group">
							<label class="col-md-2 control-label">New Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password" class="form-control1" name="newpassword" id="newpassword" placeholder="New Password" required="">
								</div>
							</div>
						</div>

	<div class="form-group">
							<label class="col-md-2 control-label">Confirm Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password" class="form-control1" name="confirmpassword" id="confirmpassword" placeholder="Confrim Password" required="">
								</div>
							</div>
						</div>
                      
						<div class="col-sm-8 col-sm-offset-2">
				<button type="submit" name="submit" class="btn-primary btn">Submit</button>
				<button type="reset" class="btn-inverse btn">Reset</button>
				 <p style="color: green;"><?php echo $this->session->flashdata('success_change');?></p>
	             <p style="color: red;"><?php echo $this->session->flashdata('no_change');?></p>

			</div>

		</div>
			
					</form>
	</div>
</div>
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
<script src="<?php echo base_url();?>assets/admin/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/scripts.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
   
</body>
</html>
