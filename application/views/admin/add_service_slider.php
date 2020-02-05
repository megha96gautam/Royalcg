
<div class="static-content-wrapper">
    <div class="static-content">
       <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
        <li><a href="<?php echo base_url(); ?>admin/service_slider">Manage Sevice Slider</a></li>
        <li><a href="#"><?php echo $page ; ?></a></li>
       </ol>
    <div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
        <div class="page-heading">
          <h1 class="heading"><?php echo $heading;?></h1>

        </div>
        <div  class="tab-pane active" style="margin-top:20px;">
            <form  action="<?php echo $action;?>" enctype="multipart/form-data" method="post" id="region_form" class="form-horizontal validate_inner ">
                  <h4 style="color:green"><?php if(isset($msg)){ echo $msg ;} ?></h4>
                   <p style="color:red" ><?php if(isset($error)){ echo $error; }?></p>
                   <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput"> Select service </label>
						<div class="col-sm-8">
						     <select name="service_id" id="category_data" class="form-control" required>
						        <option value="">
						        select service
						        </option>
						        <?php 
						          
						              $service = $this->user->get_services();
						                foreach($service as $serv){?>
						                  <option value="<?php echo $serv['id'];?>" <?php if($slider['service_id'] == $serv['id']) { echo "selected" ;} ?> > <?php echo $serv['page_title'];?> </option><?php } ?>
						     </select>
				     	</div>
					</div> 
                   
					
                    <?php if(isset($slider['image'])){ ?>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Slider Image</label>			
							<div class="col-sm-8">						 
							 <img src="<?php echo base_url()?>assets/images/<?php echo $slider['image'];?>" height="200" width="400">
							</div>
					</div>								
					<?php } ?>
					<div class="form-group">
					   <label class="col-sm-2 control-label" for="focusedinput">Slider image </label>	
					    <div class="col-sm-8">					 
					         <input type="file" id="image" name="<?php echo $image;?>" class="file-control" >
					    </div>
					</div>
					

					  <div class="form-group" style="display: none;">
						<label class="col-sm-2 control-label" for="focusedinput"> Url 
						</label>
						 <div class="col-sm-8">
							<input type="text" id="page_url"  value="<?php echo base_url();?>" class="form-control" name="url">
							<div id="statusurl" style="color: red;"></div>
						 </div> 
			         </div> 
					
					<div class="form-group">
						<label class="col-sm-2 control-label" for="	">Status</label>
							<div class="col-sm-8">
								<select name="status" class="form-control">
									<option value="1" <?php if(isset($slider['slider_status']) and $slider['slider_status']==1){ ?> selected <?php } ?> >
									 Enable
									</option>
									 <option value="0" <?php if(isset($slider['slider_status']) and  $slider['slider_status']==0){ ?> selected <?php } ?> >
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




