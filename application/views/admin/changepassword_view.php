
        

                <div class="static-content-wrapper">
                    <div class="static-content">
					<ol class="breadcrumb">
                                
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
				
                <li><a href="#"><?php echo $page ; ?></a></li>


                            </ol>
                       <div  class="tab-pane active" style="margin-top:20px;">
							<form  action="<?php echo $action;?>"method="post" class="form-horizontal validate">
							 
							  <h4 style="color:green"><?php if(isset($msg)){ echo $msg ;} ?></h4>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="focusedinput">old password</label>
									<div class="col-sm-8">
										<input name="old_password" type="text" placeholder=" old password" id="old_password" class="form-control">
									</div>
									
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="focusedinput">new password</label>
									<div class="col-sm-8">
										<input  name="password"  type="text" placeholder="new password" id="password" class="form-control">
									</div>
									
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="focusedinput">confirm password</label>
									<div class="col-sm-8">
										<input  name="ConfirmPassword"  type="text" placeholder="confirm Password " class="form-control">
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
				   </div> </br></br>
				   
				   <!-- #page-content -->
               

        
		 
   

		  
      

    
   