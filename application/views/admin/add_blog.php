


<div class="static-content-wrapper">
<div class="static-content">
<ol class="breadcrumb">

<li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
<li><a href="<?php echo base_url(); ?>admin/blog">manage blog</a></li>
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
<label class="col-sm-2 control-label" for="focusedinput"> url  </label>
<div class="col-sm-8">

<input name="burl" type="text" value="<?php if(isset($blog[0]['url'])) { echo $blog[0]['url'] ;  }   ?>"  class="form-control" >

</div>


</div>	
<?php 

if($languages){
$i = 0 ;
foreach($languages as $lang) {

if(isset($blog[0]['blog_id'])){
$result = $this->content_model->get_blog_by_laguage($lang['lang_id'],$blog[0]['blog_id']);   
} 


?>		
<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput"> blog name in <?php if(isset($result[0]['lang_name'])) { echo $result[0]['lang_name'] ;  } else {  echo $lang['lang_name']; } ?></label>
<div class="col-sm-8">
<input name="language_id[]" type="hidden" value="<?php if(isset($result[0]['blog_langid'])) { echo $result[0]['blog_langid'] ;  } else {  echo $lang['lang_id']; } ?>"  class="form-control" >
<input name="blog_name[]" type="text"  placeholder="blog name" id="blog<?php echo $lang['lang_id']; ?>"  value="<?php if(isset($result[0]['blog_title'])){ echo $result[0]['blog_title']; }?>" class="form-control" >
</div>


</div>	
<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput"> blog discription in <?php  if(isset($result[0]['lang_name'])) { echo $result[0]['lang_name'] ;  } else {  echo $lang['lang_name']; } ?></label>
<div class="col-sm-8">

<textarea name="discription[]"  id="discription<?php echo $lang['lang_id']; ?>"  class="form-control" placeholder="discription"><?php if(isset($result[0]['blog_desc'])){ echo $result[0]['blog_desc']; }?></textarea>
</div>


</div>	




<?php $i++; } } ?>

<?php if(isset($blog[0]['blog_image'])){ ?>
<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput">image</label>				
<div class="col-sm-8">

<img src="<?php echo  base_url()?>images/blog/<?php echo $blog[0]['blog_image']?>" height="200" width="200" >

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
<option value="1" <?php if(isset($blog[0]['blog_status']) and $blog[0]['blog_status']==1){ ?> selected <?php } ?> >
Enable
</option>
<option value="0" <?php if(isset($blog[0]['blog_status']) and  $blog[0]['blog_status']==0){ ?> selected <?php } ?> >
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




