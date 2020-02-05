
         

                <div class="static-content-wrapper">
                    <div class="static-content">
					<ol class="breadcrumb">
                                
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
				<li><a href="<?php echo base_url(); ?>admin/manage_like_segment">manage like segment</a></li>
                <li><a href="#"><?php echo $page ; ?></a></li>


                            </ol>
				<div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
				  <div class="page-heading">
                      <h1 class="heading"><?php echo $heading;?>  </h1>

                   </div>
                       <div  class="tab-pane active" style="margin-top:20px;">
							<form  action="<?php echo $action;?>"method="post" enctype="multipart/form-data" class="form-horizontal validate_inner">
							 
							  <h4 style="color:green"><?php if(isset($msg)){ echo $msg ;} ?></h4>
							  
							   <div class="form-group">
									<label class="col-sm-2 control-label" for="focusedinput">Range name</label>
									<div class="col-sm-8">
										<input name="name" type="text" placeholder="name" id="name" value = "<?php if(isset($singledata->name)) { echo  $singledata->name;  } ?>" class="form-control">
										<label class="error"><?php echo form_error('name'); ?></label>
									</div>
									
								</div>
							  
								<div class="form-group">
									<label class="col-sm-2 control-label" for="focusedinput">Start range </label>
									<div class="col-sm-8">
										<input name="start_range" type="number" placeholder="range start" id="start_range" value = "<?php if(isset($singledata->start_range)) { echo  $singledata->start_range;  } ?>" class="form-control">
										<label class="error"><?php echo form_error('start_range'); ?></label> 
									</div>
									
								</div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="focusedinput">End range</label>
									<div class="col-sm-8">
										<input name="end_range" type="number" placeholder="range end" id="end_range" value = "<?php if(isset($singledata->end_range)) { echo  $singledata->end_range;  } ?>" class="form-control">
										<label class="error"><?php echo form_error('end_range'); ?></label> 
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
				   </div> </br></br>
				   
				   <!-- #page-content -->
               

        
		 
   

		  
      

    
   