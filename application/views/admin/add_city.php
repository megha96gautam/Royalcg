<div class="static-content-wrapper">
    <div class="static-content">
       <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
        <li><a href="<?php echo base_url(); ?>admin/manage_cities">Manage City</a></li>
        <li><a href="#"><?php echo $page ; ?></a></li>
       </ol>
    <div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
        <div class="page-heading">
          <h1 class="heading"><?php echo $heading;?>  </h1>

        </div>
        <div  class="tab-pane active" style="margin-top:20px;">
            <form  action="<?php echo $action;?>" enctype="multipart/form-data" method="post" id="city_add_form" class="form-horizontal">

                  <h4 style="color:green"><?php if(isset($msg)){ echo $msg ;} ?></h4>
                   <p style="color:red" ><?php if(isset($error)){ echo $error; }?></p>
                  
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput"> City Name</label>
	                    <div class="col-sm-8">
	                     <input value="<?php if(isset($city_data['city_name'])){ echo $city_data['city_name']; }else if( isset($_POST['city_name'])) { echo $_POST['city_name']; } else{ }  ?>" name="city_name" type="text"  placeholder="City Name"   class="form-control" required>
	                    </div>
                     </div>

                     <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput"> City Name Russian</label>
	                    <div class="col-sm-8">
	                     <input  value="<?php if(isset($city_data['city_russian'])){ echo $city_data['city_russian']; }else if( isset($_POST['city_russian'])) { echo $_POST['city_russian']; } else{ }  ?>" name="city_russian" type="text"  placeholder="название города"   class="form-control" required>
	                    </div>
                     </div>
                      <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput"> City Name Chinese</label>
	                    <div class="col-sm-8">
	                     <input  value="<?php if(isset($city_data['city_chiness'])){ echo $city_data['city_chiness']; }else if( isset($_POST['city_chiness'])) { echo $_POST['city_chiness']; } else{ }  ?>" name="city_chiness" type="text"  placeholder="城市名称"   class="form-control" required>
	                    </div>
                     </div>
                      <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput"> City Name Arabic</label>
	                    <div class="col-sm-8">
	                     <input  value="<?php if(isset($city_data['city_arabic'])){ echo $city_data['city_arabic']; }else if( isset($_POST['city_arabic'])) { echo $_POST['city_arabic']; } else{ }  ?>" name="city_arabic" type="text" style="text-align:right"  placeholder="اسم المدينة "   class="form-control" required>
	                    </div>
                     </div>

                      <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput"> City Url</label>
	                    <div class="col-sm-8">
	                     <textarea  name="city_link" type="text"  placeholder="URL"   class="form-control" required><?php if(isset($city_data['city_link'])){ echo $city_data['city_link']; }else if( isset($_POST['city_link'])) { echo $_POST['city_link']; } else{ }  ?></textarea>
	                    </div>
                     </div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Total hotels</label>
							<div class="col-sm-8">
							   <input value="<?php if(isset($city_data['total_hotels'])){ echo $city_data['total_hotels']; }else if( isset($_POST['total_hotels'])) { echo $_POST['total_hotels']; } else{ }  ?>" name="total_hotels" type="number"  placeholder="Total Hotels"   class="form-control" required>
					        </div>
                    </div>
                    <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput"> Total Cars</label>
							<div class="col-sm-8">
							   <input value="<?php if(isset($city_data['to_price'])){ echo $city_data['to_price']; }else if( isset($_POST['to_price'])) { echo $_POST['to_price']; } else{ }  ?>" name="total_cars" type="number"  placeholder="Total Cars"   class="form-control" required>
					        </div>
                    </div>
                    <?php if(isset($city_data['city_image'])){ ?>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">City Image</label>	
							<div class="col-sm-8">						 
							 <img src="<?php echo base_url()?>images/<?php echo $city_data['city_image'];?>" height="200" width="400">
							</div>
					</div>								
					<?php } ?>
					<div class="form-group">
					   <label class="col-sm-2 control-label" for="focusedinput">City Image</label>	
					    <div class="col-sm-8">					 
					         <input type="file" id="image" name="<?php echo $image;?>" class="file-control" >
					    </div>
					</div>
					<?php if(isset($city_data['city_icon'])){

					 ?>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">City Icon</label>	
							<div class="col-sm-8">						 
							 <img src="<?php echo base_url()?>/images/city_icons/<?php echo $city_data['city_icon'];?>" height="200" width="400">
							</div>
					</div>								
					<?php } ?>
					<div class="form-group">
					   <label class="col-sm-2 control-label" for="focusedinput">City Icon</label>	
					    <div class="col-sm-8">					 
					         <input type="file" id="city_icon" name="<?php echo $city_icon;?>" class="file-control" >
					    </div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label" for="	">Status</label>
							<div class="col-sm-8">
								<select name="status" class="form-control">
									<option value="1" <?php if(isset($city_data['city_status']) and $city_data['city_status']==1){ ?> selected <?php } ?> >
									 Enable
									</option>
									 <option value="0" <?php if(isset($city_data['slider_status']) and  $city_data['city_status']==0){ ?> selected <?php } ?> >
									 Disable
									</option>
								</select>
							</div>
						</div>
					</br></br>
					<div class="panel-footer">
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
							   <input type="submit"  name="submit" value="Submit"  class="btn-primary btn">
							</div>
						</div>
					</div>
	        </form>
	    </div>
	</div>
  </div> 
<?php $this->load->view('admin/include/footer');  ?> 
</div>
<script type="text/javascript">
	
	$(function() {
// Setup form validation on the #register-form element
$("#city_add_form").validate({

// Specify the validation rules
rules: {
city_name: "required",	
meta_tag: "required",
userfile: "required",
meta_discription: "required",
city_icon:"required",
heading: "required"
},

// Specify the validation error messages
messages: {
city_name: "Please enter City Name",
meta_tag: "Please enter Meta tag",
city_icon: "Please Select icon image",
heading: "Please enter heading",
userfile: "Please Select city Image",
meta_discription: "Please enter Meta description",
url:{
required:"Please enter  URL",
remote:"This URL is already in exist"
},

},

submitHandler: function(form) {
form.submit();
}
});

});
</script>

<!-- #page-content -->




