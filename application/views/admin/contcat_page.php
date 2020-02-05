		<style>
		ul{
			list-style:none;
			
		}
		ul li {
			margin-top:10px;
			
		}
		.lang{
			padding:5px 5px 5px 5px;
			text-transform: uppercase;
			border-radius: 1px;
			 border-color 0.2s ease;
			display: block;
			width: 100%; 
			
			
			border-color: #03a9f4 !important;
			box-sizing: border-box;

			border-color: #03a9f4;
				display: block;
		}
		.active1{
			color:blue !important;
		}
		</style>
			<div class="static-content-wrapper">
			<div class="static-content">
			<ol class="breadcrumb">

			<li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>

			<li><a href="#"><?php echo $page ; ?></a></li>


			</ol>
			<div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
			<div class="page-heading">
			<h1 class="heading"><?php echo $heading;?>  </h1>

			</div>
			<div  class="tab-pane active" style="margin-top:20px;">
			<div class="col-sm-3">
			<ul>
			<?php 

			if($languages){
			$i = 0 ;
			$idd = $this->uri->segment(3);
			 if(empty($idd)){
				 $idd=20;
			 }
			foreach($languages as $lang) { ?>
			   <li>
			   <a class="lang <?php if($idd==$lang['lang_id']) { echo "active1" ; }?>" href="<?php echo base_url();?>admin/contact/<?php echo $lang['lang_id']?>"><?php echo $lang['lang_name']; ?></a>
			   </li>
			
			 <?php }
			}
			?>	
			</ul>
			</div>
			<div class="col-sm-8">
			<form  action="<?php echo $action;?>"method="post" class="form-horizontal ">

			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">  Name Label 
			</label>
			 <div class="col-sm-9">
				<input type="text" value="<?php if( isset($cont[0]['name_label'])) { echo $cont[0]['name_label']; } ?>" class="form-control" name="name_label">
			 </div> 
			</div>
			 <div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> name placeholder
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" value="<?php  if(isset($cont[0]['name_place'])) { echo $cont[0]['name_place']; } ?>" name="name_place">
			 </div> 
			</div>
			

			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">  Email  Label
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" value="<?php if(isset($cont[0]['email_label'])) { echo $cont[0]['email_label']; } ?>" name="email_label">
			 </div> 
			</div>
			
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">  Email  plceholder
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" value="<?php if(isset($cont[0]['email_plcae'])) { echo $cont[0]['email_plcae']; } ?>" name="email_plcae">
			 </div> 
			</div>

			
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">  Message Label
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" value="<?php if(isset($cont[0]['msg_label'])) {  echo $cont[0]['msg_label']; } ?>" name="msg_label">
			 </div> 
			</div>
	
	       <div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">  Message Placeholder
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" value="<?php if(isset($cont[0]['msg_place'])) {  echo $cont[0]['msg_place']; } ?>" name="msg_place">
			 </div> 
			</div>
			
			 <div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> Submit label
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" value="<?php if(isset($cont[0]['submit_label'])) {  echo $cont[0]['submit_label']; } ?>" name="submit_label">
			 </div> 
			</div>
		
			
				 <div class="col-sm-11	">
				 <h2> Validation Message</h2>
			 </div></br> 
			 <div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> 
			 Name
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" value="<?php if(isset($cont[0]['valid_name'])) {  echo $cont[0]['valid_name']; } ?>" name="valid_name">
			 </div> 
			</div>
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> 
			 Email
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" value="<?php if(isset($cont[0]['valid_email'])) {  echo $cont[0]['valid_email']; } ?>" name="valid_email">
			 </div> 
			</div>
			
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> 
			 Message
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" value="<?php if(isset($cont[0]['msg_email'])) {  echo $cont[0]['msg_email']; } ?>" name="msg_email">
			 </div> 
			</div>
			
			
			<div class="col-sm-8 col-sm-offset-2">
			<input type="submit"  name="submit" value="Submit"  class="btn-primary btn">

			</div>
			</form>
			</div>
			</div>
			</div>
			</div>
			</div>	
			</div> </br></br>

			<!-- #page-content -->
		<script>
		function chageid(id){
			document.getElementById('language').value = id;
			
		}
		</script>



