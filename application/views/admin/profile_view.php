
        

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
									<label class="col-sm-2 control-label" for="focusedinput">user name</label>
									<div class="col-sm-8">
										<input name="username" type="text" placeholder="user name" id="" value = "<?php echo $result['username']; ?>" class="form-control">
									</div>
									
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="focusedinput">email</label>
									<div class="col-sm-8">
										<input  name="email" value = "<?php echo $result['email'];?>" type="text" placeholder="email" id="" class="form-control">
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
               

        
		 
   

		  
      

    
   