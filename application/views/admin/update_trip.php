
<!DOCTYPE HTML>
<html>
<head>
<?php include('includes/meta.php'); ?>
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
  <?php include('includes/header.php'); ?>
  <?php include('includes/side_menu.php'); ?>
  <div class="page-container">
      <!--/content-inner-->
      <div class="left-content">
        <div class="mother-grid-inner">
          <div class="clearfix"> </div>	
        </div>
        <!--heder end here-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo site_url('Admin_Controller/index') ;?>">Home</a><i class="fa fa-angle-right"></i>Update trip</li>
        </ol>
      		<!--grid-->
        <div class="grid-form">
          <div class="grid-form1">
              <?php if($this->session->flashdata('message')){?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
              <?php } ?>
              <?php if($this->session->flashdata('error')){?>
                <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
              <?php } ?>
              
              <form enctype="multipart/form-data" method="POST">
                
                  <div class="row">

                      <div class="col-lg-12 form-group">
                        <label for="trip_title">Trip Title
                          <span><?php echo form_error('trip_title', '<span class="text-danger">', '</span>'); ?></span>
                        </label>
                        <input type="hidden" name="id" value="<?php echo $trip->id; ?>">
                       <input type="text" name="trip_title" id="trip_title"  placeholder="Trip title" class="form-control" value="<?= set_value('trip_title')?set_value('trip_title'):$trip->trip_title; ?>">
                      </div>
                      
                      

                       

                        <div class="col-lg-12 form-group">
                          <div class="col-lg-4">
                              <label for="end_date"><b>Category</b></label>
                              <select class="form-control select2" name="category_id" required="">
                                <option value="0">Select Category</option>
                                <?php
                                  if($categories){
                                    foreach ($categories as $key => $category) { ?>
                                      <option value="<?= $category->id; ?>"
<?php if($trip->category_id == $category->id){ echo 'selected'; } ?>
                                      ><?= $category->name; ?></option>
                                    <?php }
                                  }
                                ?>
                              </select>
                          </div> 
                          <div class="col-lg-4">
                              <label for="start_date">Start Date
                                <span><?php echo form_error('start_date', '<span class="text-danger">', '</span>'); ?></span>
                              </label>
                              <div class='input-group date' id='datetimepicker1'>
                                <input type='text' name="start_date" id="start_date" placeholder="start date" class="form-control" value="<?php echo $trip->trip_start_date; ?>"/>
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                              </div>
                          </div>
                         
                           <div class="col-lg-4">
                             <label for="end_date">End date
                              <span><?php echo form_error('end_date', '<span class="text-danger">', '</span>'); ?></span>
                             </label>
                             <div class='input-group date' id='datetimepicker2'>
                                <input type='text' name="end_date" id="end_date" placeholder="end_date" class="form-control" value="<?php echo $trip->trip_end_date; ?>" />
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                              </div>
                          </div>
                          
                        </div>
                         
                      <div class="col-lg-12 form-group">
                        <div class="col-lg-4">
                          <div class="col-lg-12">
                            <label for="trip_file">Feature Image</label>
                          </div>
                          <div class="col-lg-4">
                             <img width="60%" src="<?php echo base_url().'uploads/'.$trip->image ?>">
                          </div>
                          <div class="col-lg-8">
                            <input type="hidden" name="old_image" value="<?php echo $trip->image; ?>" >
                            <input type="file" name="trip_file">
                          </div>
                        </div>  
                        <div class="col-lg-4"> 
                          <label for="extra_date">Extra Date</label>
                          <input type="radio" name="extra_date" value="1" <?php if($trip->trip_extra_date == '1'){ echo "checked"; } ?> > Yes
                          <input type="radio" name="extra_date" value="0" <?php if($trip->trip_extra_date == '0'){ echo "checked"; } ?>  > No
                          <input type="text" class="form-control" name="extra_price" placeholder="extra day price" value="<?php echo $trip->extra_price; ?>">
                        </div>  
                        <div class="col-lg-4">
                           <label for="price" ">Per Persion price
                            <span><?php echo form_error('price', '<span class="text-danger">', '</span>'); ?></span>
                           </label>
                           <input type="price" name="price" id="price"  placeholder="Per Person price" class="form-control" value="<?php echo $trip->person_price; ?>" >
                        </div>
                        
                      </div> 
                      <div class="col-lg-4 form-group" >
                        <label for="hotel_price" ">Hotel room with price</label>
                        <input type="number" name="hotel_price" id="hotel_price"  placeholder="hotel price" class="form-control " value="<?php echo $trip->hotel_price; ?>" >
                      </div>
                      <!-- <div class="col-lg-6 form-group">
                        <label for="day count" "><b>Make every day count</b></label>
                        <input type="text" name="day_count" id="day_count"  placeholder="day count" class="form-control " value="<?php //echo $trip->day_count; ?>">
                      </div> -->
                      <div class="col-lg-4 form-group">
                        <label for="Airport_pickup_price" ">Airport pickup with price</label>
                        <input type="text" name="Airport_pickup_price" id="Airport_pickup_price"  placeholder="Airport pickup price" class="form-control " value="<?php echo $trip->picup_price; ?>" >
                      </div>
                      <div class="col-lg-4 form-group">
                        <label for="Airport_drop_price" ">Airport Drop off with price</label>
                        <input type="text" name="Airport_drop_price" id="Airport_drop_price"  placeholder="Airport drop price" class="form-control " value="<?php echo $trip->drop_off_price; ?>" >
                      </div>
                      <div class="col-lg-12 form-group">
                        <label for="trip_discription" >Trip Discription</label>
                        <textarea  name="trip_discription" id="trip_discription" placeholder="  trip_discription"  class="form-control"><?php echo $trip->trip_description; ?></textarea>
                      </div>                        

                      <div class="col-lg-12 text-center">
                        <button type="submit" class="btn btn-info" name="Submit" id="Submit">Update</button>
                        <button  class="btn btn-warning" name="cancel" id="cancel">Cancel</button>
                      </div>
                  </div>
            </form>     
	
          </div>
        </div>
        <!--//content-inner-->
      	<!--/sidebar-menu-->
      	<div class="clearfix"></div>		
      </div>
  </div>  
  <?php include('includes/script.php'); ?>  						
</body>
</html>

<script type="text/javascript">
  $(function() {
    var start = new Date('2018-11-05');
    var end = new Date('2018-11-15');
  // var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
  // var end = new Date(date.getFullYear(), date.getMonth(), date.getDate());

  $('#datetimepicker1').datetimepicker();
  $('#datetimepicker2').datetimepicker();
  var d = new Date('2018-11-05');
document.getElementById("start_date").value = "<?php echo date('m/d/Y',strtotime($trip->trip_start_date)); ?>";
document.getElementById("end_date").value = "<?php echo date('m/d/Y',strtotime($trip->trip_end_date)); ?>";
  $('.select2').select2();
});
</script>
