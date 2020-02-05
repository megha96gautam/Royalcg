<style>
.note-btn-group .dropdown-menu{
    height: 273px;
    overflow-y: scroll;
    overflow-x: hidden;
}
</style>
<div class="static-content-wrapper">
<div class="static-content">
<ol class="breadcrumb">

<li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
<li><a href="<?php echo base_url(); ?>admin/category">manage category</a></li>
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



<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput"> Category Name English</label>
<div class="col-sm-8">

<input value="<?php if(isset($cate[0]['meta_title'])){ echo $cate[0]['meta_title']; }else if( isset($_POST['meta_title'])) { echo $_POST['meta_title']; } else{ }  ?>" name="meta_title" type="text"  placeholder="Category Name"   class="form-control" >
</div>


</div>
    <div class="form-group">
       <label class="col-sm-2 control-label" for="focusedinput"> Category Name Arabic</label>
           <div class="col-sm-8">
           <input value="<?php if(isset($cate[0]['title_arabic'])){ echo $cate[0]['title_arabic']; }else if( isset($_POST['title_arabic'])) { echo $_POST['title_arabic']; } else{ }  ?>" name="title_arabic" type="text"  placeholder="اسم التصنيف"   class="form-control" style="text-align: right;" >
           </div>
    </div>
     <div class="form-group">
       <label class="col-sm-2 control-label" for="focusedinput"> Category Name Russian</label>
           <div class="col-sm-8">
           <input value="<?php if(isset($cate[0]['title_russian'])){ echo $cate[0]['title_russian']; }else if( isset($_POST['title_russian'])) { echo $_POST['title_russian']; } else{ }  ?>" name="title_russian" type="text"  placeholder="Название категории"   class="form-control" >
           </div>
    </div>
     <div class="form-group">
       <label class="col-sm-2 control-label" for="focusedinput"> Category Name chinese</label>
           <div class="col-sm-8">
           <input value="<?php if(isset($cate[0]['title_chiness'])){ echo $cate[0]['title_chiness']; }else if( isset($_POST['title_chiness'])) { echo $_POST['title_chiness']; } else{ }  ?>" name="title_chiness" type="text"  placeholder="分类名称"   class="form-control" >
           </div>
    </div>


<!-- 
<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput"> Category description</label>
<div class="col-sm-8">

<textarea name="meta_discription" class="form-control" placeholder="Description"><php if(isset($cate[0]['meta_discription'])){ echo $cate[0]['meta_discription']; }else if( isset($_POST['meta_discription'])) { echo $_POST['meta_discription']; } else{ }  ?></textarea>
</div>


</div> -->


<?php if(isset($cate[0]['cate_image'])){ ?>
<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput">Image</label>	

<div class="col-sm-8">

<img src="<?php echo  base_url();?>images/<?php echo $cate[0]['cate_image'] ; ?>" height="200" width="300">
</div>


</div>

<?php } ?>




<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput">Change image</label>	

<div class="col-sm-8">

<input type="file" id="image" name="<?php echo $image;?>" class="file-control">
</div>
</br>
<div class="miandiv">
<p style="color:red" ><?php if(isset($error)){ echo $error; }?>
</div>

</p>
</div>	

 
<div class="form-group">
<label class="col-sm-2 control-label" for="	">Status</label>
<div class="col-sm-8">
<select name="status" class="form-control">
<option value="1" <?php if(isset($cate[0]['cate_status']) and $cate[0]['cate_status']==1){ ?> selected <?php } ?> >
Enable
</option>
<option value="0" <?php if(isset($cate[0]['cate_status']) and  $cate[0]['cate_status']==0){ ?> selected <?php } ?> >
Disable
</option>
</select>
</div>

</div>


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


