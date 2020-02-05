


<div class="static-content-wrapper">
     <div class="static-content">
			<ol class="breadcrumb">

			<li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
			<li><a href="<?php echo base_url(); ?>admin/destinations">manage Destination</a></li>
			<li><a href="#"><?php echo $page ; ?></a></li>



			</ol>
          <div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
				<div class="page-heading">
				<h1 class="heading"><?php echo $heading;?>  </h1>

				</div>
<div  class="tab-pane active" style="margin-top:20px;">

			<form  action="<?php echo $action;?>" enctype="multipart/form-data" method="post" id="region_form" class="form-horizontal validate_inner ">

					<h4 style="color:green"><?php if(isset($msg)){ echo $msg ;}
					?></h4>
						<p style="color:red" ><?php if(isset($error)){ echo $error; }?></p>

				<?php  if($languages){ $i = 0 ;
			               foreach($languages as $lang) {
									if(isset($destination[0]['testi_id'])){
										$result = $this->content_model->get_testimonial_by_laguage($lang['lang_id'],$destination[0]['testi_id']);   
									}
				?>		
			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> testimonial name in <?php if(isset($result[0]['lang_name'])) { echo $result[0]['lang_name'] ; } else{ echo $lang['lang_name'] ; }?></label>
			<div class="col-sm-8">
			<input name="language_id[]" type="hidden" value="<?php if(isset($result[0]['lang_id'])) { echo $result[0]['lang_id'] ;  } else {  echo $lang['lang_id']; } ?>"  class="form-control" >
			<input name="destination_name[]" type="text"  placeholder="Destination name" id="testimonial<?php echo $lang['lang_id']; ?>"  value="<?php if(isset($result[0]['testi_name'])){ echo $result[0]['testi_name']; }?>" class="form-control" >
			</div>


			</div>	
			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> testimonial discription in <?php if(isset($result[0]['lang_name'])) { echo $result[0]['lang_name'] ; } else{ echo $lang['lang_name'] ; };?></label>
			<div class="col-sm-8">

			<textarea name="discription[]"  id="discription<?php echo $lang['lang_id']; ?>"  class="form-control" placeholder="Description"><?php if(isset($result[0]['test_desc'])){ echo $result[0]['test_desc']; }?></textarea>
			</div>


			</div>	




			<?php $i++; } } ?>
			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput">Destination title</label>
			<div class="col-sm-8">
			<input name="language_id[]" type="hidden" value="<?php if(isset($result[0]['lang_id'])) { echo $result[0]['lang_id'] ;  } else {  echo $lang['lang_id']; } ?>"  class="form-control" >
			<input name="title" type="text"  placeholder="Destination title" id="testimonial<?php echo $lang['lang_id']; ?>"  value="<?php if(isset($result[0]['testi_name'])){ echo $result[0]['testi_name']; }?>" class="form-control" >
			</div>


			</div>	
			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> Descrition</label>
			<div class="col-sm-8">

			<textarea name="discript"  id="discription<?php echo $lang['lang_id']; ?>"  class="form-control" placeholder="Description"><?php if(isset($result[0]['test_desc'])){ echo $result[0]['test_desc']; }?></textarea>
			</div>


			</div>	

           <div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> Destination URL <?php if(isset($result[0]['lang_name'])) { echo $result[0]['lang_name'] ; } else{ echo $lang['lang_name'] ; };?></label>
			<div class="col-sm-8">

			<textarea name="destination_url"  id="discription<?php echo $lang['lang_id']; ?>"  class="form-control" placeholder="Destination URL"><?php if(isset($result[0]['test_desc'])){ echo $result[0]['test_desc']; }?></textarea>
			</div>


			</div>	
			<?php  if(isset($testimonial[0]['testi_image'])){ ?>
			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput">image</label>				
			<div class="col-sm-8">

			<img src="<?php echo base_url();?>/images/testimonial/<?php echo $testimonial[0]['testi_image']; ?>" height="200" width="200"	>									

			</div>


			</div>

			<?php } ?>

			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> change image</label>		
			<div class="col-sm-8">

			<input type="file" id="image" name="<?php echo $image;?>" class="file-control">
			</div>


			</div>
			<div class="form-group">
			<label class="col-sm-2 control-label" for="	">Status</label>
			<div class="col-sm-8">
			<select name="status" class="form-control">
			<option value="1" <?php if(isset($testimonial[0]['testi_status']) and $testimonial[0]['testi_status']==1){ ?> selected <?php } ?> >
			Enable
			</option>
			<option value="0" <?php if(isset($testimonial[0]['testi_status']) and  $testimonial[0]['testi_status']==0){ ?> selected <?php } ?> >
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




