
                <div class="static-content-wrapper">
                    <div class="static-content">
					<ol class="breadcrumb">
                                
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
				<li><a href="<?php echo base_url(); ?>admin/manage_region">manage region</a></li>
                <li><a href="#"><?php echo $page ; ?></a></li>


                 </ol>
				<div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
				 	 <div class="page-heading">
                      <h1 class="heading"><?php echo $heading;?>  </h1>

                     </div>
                       <div  class="tab-pane active" style="margin-top:20px;">
					        
							<form  action="<?php echo $action;?>"method="post" id="region_form" class="form-horizontal validate_inner ">
							 
							  <h4 style="color:green"><?php if(isset($msg)){ echo $msg ;} ?></h4>

							    <?php 
								 
								 
						       if($languages){
								   $i = 0 ;
								   
								
							   foreach($languages as $lang) {
								   
								   if(isset($id) and $id !=''){
									$result = $this->user->get_region_by_laguage($lang['lang_id'],$id);   
								   }
                                
								
								
								 
								?>		
							     <div class="form-group">
									<label class="col-sm-2 control-label" for="focusedinput"> Region name in <?php if(isset($result[0]['lang_name'])) { echo $result[0]['lang_name']; } else { echo $lang['lang_name']; }?></label>
									<div class="col-sm-8">
									     <input name="language_id[]" type="hidden" value="<?php if(isset($result[0]['rea_langid'])) { echo $result[0]['rea_langid'] ;  } else {  echo $lang['lang_id']; } ?>"  class="form-control" >
										 <input name="region_name[]" type="text" value="<?php if(isset($result[0]['rea_name'])) { echo $result[0]['rea_name']; }  ?>" placeholder="Region name" id="Region<?php echo $lang['lang_id']; ?>"  class="form-control" >
									</div>
									
								</div>	
										
										
										
										
							   <?php $i++; } } ?>
									 
				
								<div class="form-group">
									<label class="col-sm-2 control-label" for="	">Status</label>
									<div class="col-sm-8">
									 <select name="status" class="form-control">
									    <option value="1" <?php if(isset($regions[0]['rea_status']) and $regions[0]['rea_status']==1){ ?> selected <?php } ?> >
										 Enable
										</option>
										 <option value="0" <?php if(isset($regions[0]['rea_status']) and  $regions[0]['lang_status']==0){ ?> selected <?php } ?> >
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
               

        
		 
  