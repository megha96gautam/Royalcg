
<div class="static-content-wrapper">
<div class="static-content">
<ol class="breadcrumb">

<li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
<li><a href="<?php echo base_url(); ?>admin/mobile-offer">manage offer</a></li>
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

<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput">title</label>	 
<div class="col-sm-8">
 
 <input type="test" id="title" value="<?php if(isset($banner['title'])){ echo $banner['title']; } ?>" name="title" class="form-control">
</div>


</div>	

<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput">Description</label>	 
<div class="col-sm-8">
 
 <textarea   id="description" name="desc" class="form-control"><?php if(isset($banner['desc'])){ echo $banner['desc']; } ?></textarea>
</div>


</div>	



<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput">Company name</label>	 
<div class="col-sm-8">
 
 <input type="test" id="company_name" value="<?php if(isset($banner['company_name'])){ echo $banner['company_name']; } ?>" name="company_name" class="form-control">
</div>


</div>

<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput">Company contact</label>	 
<div class="col-sm-8">
 
 <input type="test" id="company_contact" value="<?php if(isset($banner['company_contact'])){ echo $banner['company_contact']; } ?>" name="company_contact" class="form-control">
</div>


</div>

<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput">Company email</label>	 
<div class="col-sm-8">
 
 <input type="test" id="company_email" value="<?php if(isset($banner['company_email'])){ echo $banner['company_email']; } ?>" name="company_email" class="form-control">
</div>


</div>

<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput">Sort</label>	 
<div class="col-sm-8">
 
 <input type="test" id="order_by" value="<?php if(isset($banner['order_by'])){ echo $banner['order_by']; } ?>" name="order_by" class="form-control">
</div>


</div>

<?php if(isset($banner['image'])){ ?>
<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput">image</label>				
<div class="col-sm-8">
 
 <img src="<?php echo base_url()?>images/offer/<?php echo $banner['image'];?>" height="200" width="400">
</div>


</div>								
<?php } ?>



<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput">change image</label>									<div class="col-sm-8">
 
 <input type="file" id="image" name="<?php echo $image;?>" class="file-control">
</div>


</div>	

<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput">Term and conditoin url </label>	 
<div class="col-sm-8">
 
 <input type="text" id="terms_url" value="<?php if(isset($banner['terms_url'])){ echo $banner['terms_url']; } ?>" name="terms_url" class="form-control">
</div>


</div>
 
 	
<div class="form-group">
<label class="col-sm-2 control-label" for="	">Status</label>
<div class="col-sm-8">
<select name="status" class="form-control">
<option value="1" <?php if(isset($banner['status']) and $banner['status']==1){ ?> selected <?php } ?> >
 Enable
</option>
 <option value="0" <?php if(isset($banner['status']) and  $banner['status']==0){ ?> selected <?php } ?> >
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




