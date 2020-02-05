
<div class="static-content-wrapper">
<div class="static-content">
<ol class="breadcrumb">

<li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
<li><a href="<?php echo base_url(); ?>admin/suggestion">manage suggestion</a></li>
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
<label class="col-sm-2 control-label" for="focusedinput"> url </label>
<div class="col-sm-8">
<input name="url" type="text" value="<?php if(isset($sug[0]['url'])) { echo $sug[0]['url'] ;  } ?>"  class="form-control" placeholder="url">

</div>


</div>
<?php 

if($languages){
$i = 0 ;
foreach($languages as $lang) {

if(isset($sug[0]['sug_id'])){

$result = $this->content_model->suggation_by_language($lang['lang_id'],$sug[0]['sug_id']);
} 

?>		



<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput"> suggetion name in <?php if(isset($result[0]['lang_name'])) { echo $result[0]['lang_name']; } else{ echo $lang['lang_name']; } ?></label>
<div class="col-sm-8">
<input name="language_id[]" type="hidden" value="<?php if(isset($result[0]['sug_langid'])) { echo $result[0]['sug_langid'] ;  } else {  echo $lang['lang_id']; } ?>"  class="form-control" >
<input name="sugg_name[]" type="text"  placeholder="suggetion name" id="blog<?php echo $lang['lang_id']; ?>"  value="<?php if(isset($result[0]['sug_title'])){ echo $result[0]['sug_title']; }?>" class="form-control" >
</div>


</div>	
<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput"> suggetion discription in <?php if(isset($result[0]['lang_name'])) { echo $result[0]['lang_name']; } else{ echo $lang['lang_name']; } ?></label>
<div class="col-sm-8">

<textarea name="discription[]"  id="discription<?php echo $lang['lang_id']; ?>"  class="form-control summernote" placeholder="discription"><?php if(isset($result[0]['sug_ldesc'])){ echo $result[0]['sug_ldesc']; }?></textarea>
</div>


</div>	




<?php $i++; } } ?>


<div class="form-group">
<label class="col-sm-2 control-label" for="	">Status</label>
<div class="col-sm-8">
<select name="status" class="form-control">
<option value="1" <?php if(isset($sug[0]['sug_status']) and $sug[0]['blog_status']==1){ ?> selected <?php } ?> >
Enable
</option>
<option value="0" <?php if(isset($sug[0]['sug_status']) and  $sug[0]['sug_status']==0){ ?> selected <?php } ?> >
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
<?php $this->load->view('admin/include/footer');   ?>

 

<!-- #page-content -->

    <!-- include summernote css/js-->
<link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
  <script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
 $('.summernote').summernote({
  height: 200,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true,
  dialogsInBody: true                  // set focus to editable area after initializing summernote
});
  </script>
