
<div class="static-content-wrapper">
<div class="static-content">
<ol class="breadcrumb">

<li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
<li><a href="<?php echo base_url(); ?>admin/banner">manage banner</a></li>
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
	   <label class="col-sm-2 control-label" for="focusedinput"> Banner title English</label>
	      <div class="col-sm-8">
	        <input value="<?php if(isset($banner['banner_title'])){ echo $banner['banner_title']; }else if( isset($_POST['banner_title'])) { echo $_POST['banner_title']; } else{ }  ?>" name="banner_title" type="text"  placeholder="banner title"   class="form-control" required="">
	    </div>
	</div>
	<div class="form-group">
	   <label class="col-sm-2 control-label" for="focusedinput"> Banner title Arabic</label>
	      <div class="col-sm-8">
	        <input value="<?php if(isset($banner['arabic_title'])){ echo $banner['arabic_title']; }else if( isset($_POST['arabic_title'])) { echo $_POST['arabic_title']; } else{ }  ?>" name="arabic_title" type="text"  placeholder="عنوان الشعار " style="text-align:right"  class="form-control" required="">
	    </div>
	</div>
	<div class="form-group">
	   <label class="col-sm-2 control-label" for="focusedinput"> Banner title chinese</label>
	      <div class="col-sm-8">
	        <input value="<?php if(isset($banner['chiness_title'])){ echo $banner['chiness_title']; }else if( isset($_POST['chiness_title'])) { echo $_POST['chiness_title']; } else{ }  ?>" name="chiness_title" type="text"  placeholder="横幅标题"   class="form-control" required="">
	    </div>
	</div>
	<div class="form-group">
	   <label class="col-sm-2 control-label" for="focusedinput"> Banner title Russian</label>
	      <div class="col-sm-8">
	        <input value="<?php if(isset($banner['russian_title'])){ echo $banner['russian_title']; }else if( isset($_POST['russian_title'])) { echo $_POST['russian_title']; } else{ }  ?>" name="russian_title" type="text"  placeholder="заголовок баннера"   class="form-control" required="">
	    </div>
	</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput"> Banner City</label>
<div class="col-sm-8">
<input value="<?php if(isset($banner['city_name'])){ echo $banner['city_name']; }else if( isset($_POST['city_name'])) { echo $_POST['city_name']; } else{ }  ?>" name="city_name" type="text"  placeholder="city name"   class="form-control" required="" >
</div>


</div>
<?php if(isset($banner['slider_image'])){ ?>
<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput">Banner image</label>				
<div class="col-sm-8">
 
 <img src="<?php echo base_url()?>images/banner/<?php echo $banner['slider_image'];?>" height="200" width="400">
</div>


</div>								
<?php } ?>
<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput">Change image (1600X856)</label>	
<div class="col-sm-8">
 
 <input type="file" id="image" name="<?php echo $image;?>" class="file-control">
</div>
</div>	

<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput"> Sort order</label>
<div class="col-sm-8">
<input value="<?php if(isset($banner['sort_order'])){ echo $banner['sort_order']; }else if( isset($_POST['sort_order'])) { echo $_POST['sort_order']; } else{ }  ?>" name="sort_order" type="number"  placeholder="sort order"   class="form-control">
</div>


</div>	
<div class="form-group">
<label class="col-sm-2 control-label" for="	">Status</label>
<div class="col-sm-8">
<select name="status" class="form-control">
<option value="1" <?php if(isset($banner['slider_status']) and $banner['slider_status']==1){ ?> selected <?php } ?> >
 Enable
</option>
 <option value="0" <?php if(isset($banner['slider_status']) and  $banner['slider_status']==0){ ?> selected <?php } ?> >
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




