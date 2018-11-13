
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
      <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?php echo base_url('admin/dashboard') ;?>">Home</a>
            <i class="fa fa-angle-right"></i>Add Trip
          </li>
      </ol>
    	<div class="agile-grids">		
        <div class="col-lg-12 border" >
            <div class="" style="color: green;">
              <?php echo $this->session->flashdata('s');
                    echo	$this->session->flashdata('e'); ?>
            </div>
            <form enctype="multipart/form-data" method="POST">
                
                  <div class="row">

                      <div class="col-lg-12 form-group">
                        <label for="trip_title">Trip Title
                          <span><?php echo form_error('trip_title', '<span class="text-danger">', '</span>'); ?></span>
                        </label>
                       <input type="text" name="trip_title" id="trip_title"  placeholder="Trip title" class="form-control">
                      </div>
                      
                      

                       

                        <div class="col-lg-12 form-group">
                          <div class="col-lg-3">
                              <label for="end_date"><b>Start Place</b></label>
                              <select class="form-control select2" name="start_place">
                                <option value="0">Start Place</option>
                                <?php
                                  if($cities){
                                    foreach ($cities as $key => $city) { ?>
                                      <option value="<?= $city->city_id; ?>"><?= $city->name; ?></option>
                                    <?php }
                                  }
                                ?>
                              </select>
                          </div> 
                          <div class="col-lg-3">
                              <label for="start_date">Start Date
                                <span><?php echo form_error('start_date', '<span class="text-danger">', '</span>'); ?></span>
                              </label>
                              <div class='input-group date datetimepicker' id='datetimepicker1'>
                                <input type='text' name="start_date" id="start_date" placeholder="start date" class="form-control" />
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                              </div>
                          </div>
                          <div class="col-lg-3">
                              <label for="end_date"><b>End Place</b></label>
                              <select class="form-control select2" name="end_place">
                                <option value="0">End Place</option>
                                <?php
                                  if($cities){
                                    foreach ($cities as $key => $city) { ?>
                                      <option value="<?= $city->city_id; ?>"><?= $city->name; ?></option>
                                    <?php }
                                  }
                                ?>
                              </select>
                           </div>
                           <div class="col-lg-3">
                             <label for="end_date">End date
                              <span><?php echo form_error('end_date', '<span class="text-danger">', '</span>'); ?></span>
                             </label>
                             <div class='input-group date datetimepicker' id='datetimepicker1'>
                                <input type='text' name="end_date" id="end_date" placeholder="end_date" class="form-control" />
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                              </div>
                          </div>
                        </div>
                         
                      <div class="col-lg-12 form-group">  
                        <div class="col-lg-3"> 
                          <label for="extra_date"><b>Extra Date</b></label>
                          <input type="radio" name="extra_date" value="1" checked=""> Yes
                          <input type="radio" name="extra_date" value="0"> No
                          <input type="text" class="form-control" name="extra_price" placeholder="extra day price">
                        </div>  
                        <div class="col-lg-3">
                         <label for="price" ">Per Persion price
                          <span><?php echo form_error('price', '<span class="text-danger">', '</span>'); ?></span>
                         </label>
                         <input type="price" name="price" id="price"  placeholder="Per Person price" class="form-control " >
                        </div>
                        <div class="col-lg-3">
                          <label for="file"><b>Feature Image</b></label>
                          <input type="file" name="trip_file"    class="form-control" >
                        </div>
                      </div> 
                      <div class="col-lg-6 form-group" >
                        <label for="hotel_price" "><b>Hotel room with price</b></label>
                        <input type="hotel_price" name="hotel_price" id="hotel_price"  placeholder="hotel price" class="form-control " >
                      </div>
                      <div class="col-lg-6 form-group">
                        <label for="day count" "><b>Make every day count</b></label>
                        <input type="day_count" name="day_count" id="day_count"  placeholder="day count" class="form-control " >
                      </div>
                      <div class="col-lg-6 form-group">
                        <label for="Airport_pickup_price" "><b>Airport pickup with price</b></label>
                        <input type="Airport_pickup_price" name="Airport_pickup_price" id="Airport_pickup_price"  placeholder="Airport pickup price" class="form-control " >
                      </div>
                      <div class="col-lg-6 form-group">
                        <label for="Airport_drop_price" "><b>Airport Drop off with price</b></label>
                        <input type="Airport_drop_price" name="Airport_drop_price" id="Airport_drop_price"  placeholder="Airport drop price" class="form-control " >
                      </div>
                      <div class="col-lg-12 form-group">
                        <label for="trip_discription" ><b>Trip Discription</b></label>
                        <textarea  name="trip_discription" id="trip_discription" placeholder="  trip_discription"  class="form-control"  >
                        </textarea>
                      </div>                        

                      <div class="col-lg-12 text-center">
                        <button  class="btn btn-info" name="Submit" id="Submit">submit</button>
                        <button  class="btn btn-warning" name="cancel" id="cancel">Cancel</button>
                      </div>
                  </div>
            </form>         
        </div> 
      </div>
    </div>
  </div>   
  <?php include('includes/script.php'); ?>  
</body>
</html>
<script type="text/javascript">
  $(function() {
  $('.datetimepicker').datetimepicker();
  $('.select2').select2();
});
</script>