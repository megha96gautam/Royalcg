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
	
			</ul>
			</div>
			<div class="col-sm-8">
			<form  action="<?php echo $action;?>"method="post" class="form-horizontal ">

			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">  congrtulation text  
			</label>
			 <div class="col-sm-9">
				<textarea class="form-control editor" name="content1"><?php echo $fb_data[0]['content1'] ?></textarea>
			 </div> 
			</div>
			
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">  Bummper prize text  
			</label>
			 <div class="col-sm-9">
				<textarea class="form-control editor" name="content2"><?php echo $fb_data[0]['content2'] ?></textarea>
			 </div> 
			</div>
			
			<div class="form-group">
			<label class="col-sm-3 control-label " for="focusedinput">  Lucky Winner text  
			</label>
			 <div class="col-sm-9">
				<textarea class="form-control editor" name="content3"><?php echo $fb_data[0]['content3'] ?></textarea>
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
<?php $this->load->view('admin/include/footer'); ?>
			<!-- #page-content -->
		<script>
		function chageid(id){
			document.getElementById('language').value = id;
			
		}
		</script>

    <!-- include summernote css/js-->
<link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
  <script>
    $(document).ready(function() {
        $('.editor').summernote();
   
 $('.editor').summernote({
  height: 200,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  
  dialogsInBody: true ,
  focus: true,
  

 });
});
  </script>
