
<div class="static-content-wrapper">
    <div class="static-content">
       <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
        <li><a href="<?php echo base_url(); ?>admin/manage_event">Manage Event</a></li>
        <li><a href="#"><?php echo $page ; ?></a></li>
       </ol>
    <div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
        <div class="page-heading">
          <h1 class="heading"><?php echo $heading;?>  </h1>

        </div>
        <div  class="tab-pane active" style="margin-top:20px;">
            <form  action="<?php echo $action;?>" enctype="multipart/form-data" method="post" id="region_form" class="form-horizontal validate_inner ">
                  <h4 style="color:green"><?php if(isset($msg)){ echo $msg ;} ?></h4>
                   <p style="color:red" ><?php if(isset($error)){ echo $error; }?></p>
                   <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput"> Select City </label>
						<div class="col-sm-8">
						     <select name="city_id" id="category_data" class="form-control" required>
						        <option value="">
						        select City
						        </option>
						        <?php 
						          
						              $cities = $this->user->get_city();
						                foreach($cities as $city){?>
						                  <option value="<?php echo $city['city_id'];?>" <?php if($banner['city_id'] == $city['city_id']) { echo "selected" ;} ?> > <?php echo $city['city_name'];?> </option><?php } ?>
						     </select>
				     	</div>
					</div> 
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput"> Event title</label>
	                    <div class="col-sm-8">
	                     <input value="<?php if(isset($banner['event_title'])){ echo $banner['event_title']; }else if( isset($_POST['event_title'])) { echo $_POST['event_title']; } else{ }  ?>" name="event_title" type="text"  placeholder="Event title"   class="form-control" required>
	                    </div>
                     </div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput">Title arabic</label>
	                    <div class="col-sm-8">
	                     <input style="text-align: right;" value="<?php if(isset($banner['title_arabic'])){ echo $banner['title_arabic']; }else if( isset($_POST['title_arabic'])) { echo $_POST['title_arabic']; } else{ }  ?>" name="title_arabic" type="text"  placeholder="Event title"   class="form-control" required>
	                    </div>
                     </div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput">Title russian</label>
	                    <div class="col-sm-8">
	                     <input value="<?php if(isset($banner['title_russian'])){ echo $banner['title_russian']; }else if( isset($_POST['title_russian'])) { echo $_POST['title_russian']; } else{ }  ?>" name="title_russian" type="text"  placeholder="Event title"   class="form-control" required>
	                    </div>
                     </div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput">Title chinese</label>
	                    <div class="col-sm-8">
	                     <input value="<?php if(isset($banner['title_chiness'])){ echo $banner['title_chiness']; }else if( isset($_POST['title_chiness'])) { echo $_POST['title_chiness']; } else{ }  ?>" name="title_chiness" type="text"  placeholder="Event title"   class="form-control" required>
	                    </div>
                     </div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput"> Event From Date </label>
							<div class="col-sm-8">
							   <input value="<?php if(isset($banner['from_date'])){ echo $banner['from_date']; }else if( isset($_POST['from_date'])) { echo $_POST['from_date']; } else{ }  ?>" name="from_date" type="date"  placeholder="event Date"   class="form-control" required>
					        </div>
                    </div>
                    <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput"> Event TO Date </label>
							<div class="col-sm-8">
							   <input value="<?php if(isset($banner['to_date'])){ echo $banner['to_date']; }else if( isset($_POST['to_date'])) { echo $_POST['to_date']; } else{ }  ?>" name="to_date" type="date"  placeholder="event Date"   class="form-control" required>
					        </div>
                    </div>
                    
                    <?php if(isset($banner['event_image'])){ ?>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">image</label>			
							<div class="col-sm-8">						 
							 <img src="<?php echo base_url()?>images/<?php echo $banner['event_image'];?>" height="200" width="400">
							</div>
					</div>								
					<?php } ?>
					<div class="form-group">
					   <label class="col-sm-2 control-label" for="focusedinput">change image (1600X856)</label>	
					    <div class="col-sm-8">					 
					         <input type="file" id="image" name="<?php echo $image;?>" class="file-control" >
					    </div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput"> Event Address</label>
							<div class="col-sm-8">
							   <textarea  value="" name="address" type="text"  placeholder="Address"  class="form-control" required><?php if(isset($banner['address'])){ echo $banner['address']; }else if( isset($_POST['address'])) { echo $_POST['address']; } else{ }  ?></textarea >
					        </div>
                    </div>	
                    <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Address Arabic</label>
							<div class="col-sm-8">
							   <textarea  style="text-align: right" name="address_arabic" type="text"   class="form-control" required><?php if(isset($banner['address_arabic'])){ echo $banner['address_arabic']; }else if( isset($_POST['address_arabic'])) { echo $_POST['address_arabic']; } else{ }  ?></textarea >
					        </div>
                    </div>
                    <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Address Russian</label>
							<div class="col-sm-8">
							   <textarea  value="" name="address_russian" type="text"  placeholder="Address"  class="form-control" required><?php if(isset($banner['address_russian'])){ echo $banner['address_russian']; }else if( isset($_POST['address_russian'])) { echo $_POST['address_russian']; } else{ }  ?></textarea >
					        </div>
                    </div>
                    <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Address chinese</label>
							<div class="col-sm-8">
							   <textarea  value="" name="address_chiness" type="text"  class="form-control" required><?php if(isset($banner['address_chiness'])){ echo $banner['address_chiness']; }else if( isset($_POST['address_chiness'])) { echo $_POST['address_chiness']; } else{ }  ?></textarea >
					        </div>
                    </div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput"> Event Description</label>
							<div class="col-sm-8">
							   <textarea  value="" name="description" type="text"  placeholder="Description"  class="form-control" required><?php if(isset($banner['event_description'])){ echo $banner['event_description']; }else if( isset($_POST['event_description'])) { echo $_POST['event_description']; } else{ }  ?></textarea >
					        </div>
                    </div>
                    <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Arabic Description</label>
							<div class="col-sm-8">
							   <textarea  value="" name="desc_arabic" type="text"  style="text-align: right"  class="form-control" required><?php if(isset($banner['desc_arabic'])){ echo $banner['desc_arabic']; }else if( isset($_POST['desc_arabic'])) { echo $_POST['desc_arabic']; } else{ }  ?></textarea >
					        </div>
                    </div>
                    <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput"> Russian Description</label>
							<div class="col-sm-8">
							   <textarea  value="" name="desc_russian" type="text"  placeholder="Description"  class="form-control" required><?php if(isset($banner['desc_russian'])){ echo $banner['desc_russian']; }else if( isset($_POST['desc_russian'])) { echo $_POST['desc_russian']; } else{ }  ?></textarea >
					        </div>
                    </div>	
					  <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput"> chinese Description</label>
							<div class="col-sm-8">
							   <textarea  value="" name="desc_chiness" type="text"  placeholder="Description"  class="form-control" required><?php if(isset($banner['desc_chiness'])){ echo $banner['desc_chiness']; }else if( isset($_POST['desc_chiness'])) { echo $_POST['desc_chiness']; } else{ }  ?></textarea >
					        </div>
                    </div>	
					
					
					<div class="form-group">
						<label class="col-sm-2 control-label" for="	">Status</label>
							<div class="col-sm-8">
								<select name="status" class="form-control">
									<option value="1" <?php if(isset($banner['event_status']) and $banner['event_status']==1){ ?> selected <?php } ?> >
									 Enable
									</option>
									 <option value="0" <?php if(isset($banner['slider_status']) and  $banner['event_status']==0){ ?> selected <?php } ?> >
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

<!-- #page-content -->




