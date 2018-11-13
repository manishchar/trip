<script src="<?php echo base_url()?>assets/admin/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url()?>assets/admin/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url()?>assets/admin/js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<script src="<?php echo base_url()?>assets/admin/js/morris.js"></script>


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
