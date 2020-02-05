<div class="static-content-wrapper">
    <div class="static-content">
       <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
        <li><a href="<?php echo base_url(); ?>admin/destinations">Manage Destination</a></li>
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
                      <label class="col-sm-2 control-label" for="focusedinput">Destination Name</label>
	                    <div class="col-sm-8">
	                     <input value="<?php if(isset($designation['destinations_name'])){ echo $designation['destinations_name']; }else if( isset($_POST['destinations_name'])) { echo $_POST['destinations_name']; } else{ }  ?>" name="destinations_name" type="text"  placeholder=" Destination Name"   class="form-control" required>
	                    </div>
                     </div>
                      <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput">Destination url</label>
	                    <div class="col-sm-8">
	                    <input value="<?php if(isset($designation['destinations_url'])){ echo $designation['destinations_url']; }else if( isset($_POST['destinations_url'])) { echo $_POST['destinations_url']; } else{ }  ?>" name="destinations_url" type="text"  placeholder="Destinations url"   class="form-control" required>
	                    </div>
                     </div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Description</label>
							<div class="col-sm-8">
							   
							    <textarea  name="description" type="text"  placeholder="Description"   class="form-control" required><?php if(isset($designation['description'])){ echo $designation['description']; }else if( isset($_POST['description'])) { echo $_POST['description']; } else{ }  ?></textarea>
					        </div>
                    </div>
                   
                    <?php if(isset($designation['destinations_image'])){ ?>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Destination Image</label>	
							<div class="col-sm-8">						 
							 <img src="<?php echo base_url()?>images/<?php echo $designation['destinations_image'];?>" height="200" width="400">
							</div>
					</div>								
					<?php } ?>
					<div class="form-group">
					   <label class="col-sm-2 control-label" for="focusedinput">Destination Image</label>	
					    <div class="col-sm-8">					 
					         <input type="file" id="image" name="<?php echo $image;?>" class="file-control" >
					    </div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label" for="	">Destination Status</label>
							<div class="col-sm-8">
								<select name="status" class="form-control">
									<option value="1" <?php if(isset($designation['destinations_status']) and $designation['destinations_status']==1){ ?> selected <?php } ?> >
									 Enable
									</option>
									 <option value="0" <?php if(isset($designation['destinations_status']) and  $designation['destinations_status']==0){ ?> selected <?php } ?> >
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




