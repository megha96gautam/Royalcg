

<div class="static-content-wrapper">
<div class="static-content">
<ol class="breadcrumb">

<li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
<li><a href="<?php echo base_url(); ?>admin/website_transulate">Manage Static Content</a></li>
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
	   <label class="col-sm-2 control-label" for="focusedinput"> English</label>
	      <div class="col-sm-8">
	        <input value="<?php echo  $static->title ?>" name="title" type="text"    class="form-control" required="">
	    </div>
	  </div>
       <div class="form-group">
	   <label class="col-sm-2 control-label" for="focusedinput"> Arabic</label>
	      <div class="col-sm-8">
	        <input value="<?php echo $static->arabic ?>" name="arabic" type="text"   style="text-align:right"  class="form-control" required="">
	    </div>
	  </div>
	  <div class="form-group">
	   <label class="col-sm-2 control-label" for="focusedinput"> Russian</label>
	     	 <div class="col-sm-8">
	        	<input value="<?php echo $static->russian ?>" name="russian" type="text"    class="form-control" required="">
	   		 </div>
	  </div>
	  <div class="form-group">
	   <label class="col-sm-2 control-label" for="focusedinput"> Chinese</label>
	      <div class="col-sm-8">
	        <input value="<?php echo $static->chiness ?>" name="chiness" type="text"    class="form-control" required="">
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




