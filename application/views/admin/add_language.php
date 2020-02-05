
         

                <div class="static-content-wrapper">
                    <div class="static-content">
					<ol class="breadcrumb">
                                
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
				<li><a href="<?php echo base_url(); ?>admin/manage_language">manage language</a></li>
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
									<label class="col-sm-2 control-label" for="focusedinput">Language name</label>
									<div class="col-sm-8">
										<input name="language_name" type="text" placeholder="Language name" id="focusedinput" value = "<?php if(isset($result['lang_name'])) { echo  $result['lang_name'];  } ?>" class="form-control">
									</div>
									
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="focusedinput">Language code</label>
									<div class="col-sm-8">
										<input  name="language_code" value = "<?php if(isset($result['lang_code'])) { echo $result['lang_code'] ;  } ?>" type="text" placeholder="Language code" id="" class="form-control">
									</div>
									
								</div>
								 <?php if($page=='edit_language'){?>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="focusedinput">Flag</label>
									<div class="col-sm-8">
									<?php if(!empty($result['image'])){ ?>
									<img src="<?php echo base_url().'images/lang/'. $result['image'];?>">
									<?php }else{
                                     ?>
                                     <img src="<?php echo base_url().'images/users.png';?>">
                                     <?php
                                     } ?>
									</div>
								</div>

                               			<?php } ?>						
								<div class="form-group">
									<label class="col-sm-2 control-label" for="focusedinput">Language flag (35X17)</label>
									<div class="col-sm-8">
										<input  name="<?php  echo $name ;?>" type="file"  class="file-control">
									</div>
									<p class="error"><?php if(isset($imgerror)) { echo $imgerror; } ?> </p>
								</div>								
							
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="	">Status</label>
									<div class="col-sm-8">
									 <select name="status" class="form-control">
									    <option value="1" <?php if(isset($result['lang_status']) and $result['lang_status']==1){ ?> selected <?php } ?> >
										 Enable
										</option>
										 <option value="0" <?php if(isset($result['lang_status']) and  $result['lang_status']==0){ ?> selected <?php } ?> >
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
				   </div> </br></br>
				   
				   <!-- #page-content -->
               

        
		 
   

		  
      

    
   