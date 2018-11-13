<title><?php echo $title?$title:'Dashboard'; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url();?>assets/admin/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="<?php echo base_url()?>assets/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?php echo base_url()?>assets/admin/js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/icon-font.min.css" type='text/css' />


 <script src="<?php echo base_url();?>assets/admin/js/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap-datetimepicker.min.css">
<link href="<?php echo base_url();?>assets/admin/css/select2.min.css" rel="stylesheet" />
<script src="<?php echo base_url();?>assets/admin/js/select2.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/admin/css/table-style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/admin/css/basictable.css" />
<script type="text/javascript" src="<?php echo base_url() ;?>assets/admin/js/jquery.basictable.min.js"></script>
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