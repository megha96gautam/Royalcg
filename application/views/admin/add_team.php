<div class="static-content-wrapper">
    <div class="static-content">
       <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
        <li><a href="<?php echo base_url(); ?>admin/team">Manage Team</a></li>
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
                      <label class="col-sm-2 control-label" for="focusedinput"> Name</label>
	                    <div class="col-sm-8">
	                     <input value="<?php if(isset($team['name'])){ echo $team['name']; }else if( isset($_POST['name'])) { echo $_POST['name']; } else{ }  ?>" name="name" type="text"  placeholder="Name"   class="form-control" required>
	                    </div>
                     </div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput"> Name Arabic</label>
	                    <div class="col-sm-8">
	                     <input value="<?php if(isset($team['name_arabic'])){ echo $team['name_arabic']; }else if( isset($_POST['name_arabic'])) { echo $_POST['name_arabic']; } else{ }  ?>" name="name_arabic" type="text"  placeholder="اسم" style="text-align: right;"  class="form-control" required>
	                    </div>
                     </div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput"> Name Russian</label>
	                    <div class="col-sm-8">
	                     <input value="<?php if(isset($team['name_russian'])){ echo $team['name_russian']; }else if( isset($_POST['name_russian'])) { echo $_POST['name_russian']; } else{ }  ?>" name="name_russian" type="text"  placeholder="название"   class="form-control" required>
	                    </div>
                     </div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput"> Name chinese</label>
	                    <div class="col-sm-8">
	                     <input value="<?php if(isset($team['name_chiness'])){ echo $team['name_chiness']; }else if( isset($_POST['name_chiness'])) { echo $_POST['name_chiness']; } else{ }  ?>" name="name_chiness" type="text"  placeholder="名称"   class="form-control" required>
	                    </div>
                     </div>
                      <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput">Description</label>
	                    <div class="col-sm-8">
	                     <textarea  name="description" type="text"  placeholder="Description"   class="form-control" required><?php if(isset($team['description'])){ echo $team['description']; }else if( isset($_POST['description'])) { echo $_POST['description']; } else{ }  ?></textarea>
	                    </div>
                     </div>
                      <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput">Description Arabic</label>
	                    <div class="col-sm-8">
	                     <textarea  name="arabic_description" type="text"  placeholder="وصف" style="text-align: right;"   class="form-control" required><?php if(isset($team['arabic_description'])){ echo $team['arabic_description']; }else if( isset($_POST['arabic_description'])) { echo $_POST['arabic_description']; } else{ }  ?></textarea>
	                    </div>
                     </div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput">Description Russian</label>
	                    <div class="col-sm-8">
	                     <textarea  name="russian_description" type="text"  placeholder="Описание"   class="form-control" required><?php if(isset($team['russian_description'])){ echo $team['russian_description']; }else if( isset($_POST['russian_description'])) { echo $_POST['russian_description']; } else{ }  ?></textarea>
	                    </div>
                     </div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput">Description chinese</label>
	                    <div class="col-sm-8">
	                     <textarea  name="chiness_description" type="text"  placeholder="描述"   class="form-control" required><?php if(isset($team['chiness_description'])){ echo $team['chiness_description']; }else if( isset($_POST['chiness_description'])) { echo $_POST['chiness_description']; } else{ }  ?></textarea>
	                    </div>
                     </div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Designation</label>
							<div class="col-sm-8">
							   <input value="<?php if(isset($team['designation'])){ echo $team['designation']; }else if( isset($_POST['designation'])) { echo $_POST['designation']; } else{ }  ?>" name="designation" type="text"  placeholder="Designation"   class="form-control" required>
					        </div>
                    </div>
                    <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Designation Arabic</label>
							<div class="col-sm-8">
							   <input value="<?php if(isset($team['arabic_designation'])){ echo $team['arabic_designation']; }else if( isset($_POST['arabic_designation'])) { echo $_POST['arabic_designation']; } else{ }  ?>" name="arabic_designation" type="text"  placeholder="وصف" style="text-align: right;"  class="form-control" required>
					        </div>
                    </div>
                    <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Designation Russian</label>
							<div class="col-sm-8">
							   <input value="<?php if(isset($team['russian_designation'])){ echo $team['russian_designation']; }else if( isset($_POST['russian_designation'])) { echo $_POST['russian_designation']; } else{ }  ?>" name="russian_designation" type="text"  placeholder="Описание"   class="form-control" required>
					        </div>
                    </div>
                    <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Designation chinese</label>
							<div class="col-sm-8">
							   <input value="<?php if(isset($team['chiness_designation'])){ echo $team['chiness_designation']; }else if( isset($_POST['chiness_designation'])) { echo $_POST['chiness_designation']; } else{ }  ?>" name="chiness_designation" type="text"  placeholder="描述"   class="form-control" required>
					        </div>
                    </div>
                    <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Facebook</label>
							<div class="col-sm-8">
							   <input value="<?php if(isset($team['facebook'])){ echo $team['facebook']; }else if( isset($_POST['facebook'])) { echo $_POST['facebook']; } else{ }  ?>" name="facebook" type="text"  placeholder="Facebook"   class="form-control" required>
					        </div>
                    </div>
                     <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Gmail</label>
							<div class="col-sm-8">
							   <input value="<?php if(isset($team['gmail'])){ echo $team['gmail']; }else if( isset($_POST['gmail'])) { echo $_POST['gmail']; } else{ }  ?>" name="gmail" type="text"  placeholder="Gmail"   class="form-control" required>
					        </div>
                    </div>
                     <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Instagram</label>
							<div class="col-sm-8">
							   <input value="<?php if(isset($team['insta'])){ echo $team['insta']; }else if( isset($_POST['insta'])) { echo $_POST['insta']; } else{ }  ?>" name="insta" type="text"  placeholder="Instagram"   class="form-control" required>
					        </div>
                    </div>
                    <?php if(isset($team['team_image'])){ ?>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Team Image</label>	
							<div class="col-sm-8">						 
							 <img src="<?php echo base_url()?>images/<?php echo $team['team_image'];?>" height="200" width="400">
							</div>
					</div>								
					<?php } ?>
					<div class="form-group">
					   <label class="col-sm-2 control-label" for="focusedinput">Team Image</label>	
					    <div class="col-sm-8">					 
					         <input type="file" id="image" name="<?php echo $image;?>" class="file-control" >
					    </div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label" for="	">Status</label>
							<div class="col-sm-8">
								<select name="status" class="form-control">
									<option value="1" <?php if(isset($team['status']) and $team['status']==1){ ?> selected <?php } ?> >
									 Enable
									</option>
									 <option value="0" <?php if(isset($team['status']) and  $team['status']==0){ ?> selected <?php } ?> >
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
  <?php $this->load->view('admin/include/footer'); ?>
</div> 

<!-- #page-content -->




