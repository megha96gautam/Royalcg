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
			<li><a href="<?php echo base_url() ?>admin/template">Manage Template</a></li>



			</ol>
			<div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
			<div class="page-heading">
			<h1 class="heading"><?php echo $heading;?>  </h1>

			</div>
			<div  class="tab-pane active" style="margin-top:20px;">
			<div class="col-sm-2">
			<ul>
			<?php 
              if($page=='edit_template'){
			if($languages){
			$i = 0 ;
			$idd = $this->uri->segment(3);
			$page_id = $this->uri->segment(4);
			 if(empty($idd)){
				 $idd=language;
			 }
			/*foreach($languages as $lang) {*/ ?>
			   <!-- <li>
			   <a class="lang <?php if($idd==$lang['lang_id']) { echo "active1" ; }?>" href="<?php echo base_url();?>admin/edit_page/<?php echo $lang['lang_id'].'/'.$page_id;?>"><?php echo $lang['lang_name']; ?></a>
			   </li> -->
			
			 <?php /*}*/
			}
		  }else{
			  $idd=language;
			  ?>
			 <!--   <li>
			   <a class="lang active1"> English </a>
			   </li> -->
			   <?php 
		     }
			?> 
			</ul>
			</div>
			<div class="col-sm-10">
			<form  action="<?php echo $action ; ?>" method="post" id="page_form" class="form-horizontal">
               
			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> Title 
			</label>
			 <div class="col-sm-10">
				<input type="text" id="title" value="<?php if(isset($pages[0]['title'])){ echo $pages[0]['title'] ; }?>" class="form-control" placeholder="Title" name="title" required>
			 </div> 
			</div>
			
			
			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> Description 
			</label>
			 <div class="col-sm-10">
				<textarea id="summernote" name="description" ><?php if(isset($pages[0]['template'])){ echo $pages[0]['template'] ; }?></textarea>
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
<?php $this->load->view('admin/include/footer'); ?>


    <!-- include summernote css/js-->
<link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
 $('#summernote').summernote({
  height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true ,
   dialogsInBody: true 
  // set focus to editable area after initializing summernote
});
  </script>


<script>

// When the browser is ready...
$(function() {
// Setup form validation on the #register-form element
$("#page_form").validate({

// Specify the validation rules
rules: {
title: "required",
url:{
required: true,
remote: {							
url: "<?php echo base_url();?>admin/uniqueURL",
async:false,
dataType: "json",
type: "post",
data: {
page_id:function()
{
return "<?php echo $this->uri->segment(4);  ?>";
}								   
}

}
},	
title: "required",
description: "required",

},

// Specify the validation error messages
messages: {
title: "Please enter Title",
description: "Please enter  description",
url:{
required:"Please enter  URL",

},

},

submitHandler: function(form) {
form.submit();
}
});

});

</script>