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
			<li><a href="<?php echo base_url() ?>admin/page">Manage  page</a></li>

			<li><a href="#"><?php echo $page ; ?></a></li>


			</ol>
			<div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
			<div class="page-heading">
			<h1 class="heading"><?php echo $heading;?>  </h1>

			</div>
			<div  class="tab-pane active" style="margin-top:20px;">
			<div class="col-sm-2">
			<ul>
			 <?php 
              if($page=='edit_page'){
			
		  }
			?> 	
			</ul>
			</div>
			<div class="col-sm-12">
			<form  action="<?php echo $action ; ?>" method="post" enctype="multipart/form-data" id="page_form" class="form-horizontal">
				<h4 style="color:green"><?php if(isset($msg)){ echo $msg ;} ?></h4>
                   <p style="color:red" ><?php if(isset($error)){ echo $error; }?></p>
                <input type="hidden" value="<?php echo $idd ; ?>"name="language">

    <div class="row">
	    <div class="col-sm-6">
			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> Title English
			</label>
			 <div class="col-sm-10">
				<input type="text" value="<?php if(isset($pages[0]['page_title'])){ echo $pages[0]['page_title'] ; }?>" class="form-control" name="title">
			 </div> 
			</div>
		</div>
		<div class="col-sm-6">
           <div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> Title Arabic
			</label>
			 <div class="col-sm-10">
				<input type="text"  style="text-align: right" value="<?php if(isset($pages[0]['title_arabic'])){ echo $pages[0]['title_arabic'] ; }?>" class="form-control" name="title_arabic">
			 </div> 
			</div>
		</div>
	</div>
	<div class="row">
	    <div class="col-sm-6">		
			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> Title Russian
			</label>
			 <div class="col-sm-10">
				<input type="text" value="<?php if(isset($pages[0]['title_russian'])){ echo $pages[0]['title_russian'] ; }?>" class="form-control" name="title_russian">
			 </div> 
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> Title Chinese 
			</label>
			 <div class="col-sm-10">
				<input type="text" value="<?php if(isset($pages[0]['title_chiness'])){ echo $pages[0]['title_chiness'] ; }?>" class="form-control" name="title_chiness">
			 </div> 
			</div>
			
		   </div>
		</div>	
   <div class="row">
	    <div class="col-sm-6">	
			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> Heading 
			</label>
			 <div class="col-sm-10">				
				<textarea class="form-control" name="heading" ><?php if(isset($pages[0]['page_heading'])){ echo $pages[0]['page_heading'] ; }?></textarea>
			 </div> 
			</div>
		</div>
		 <div class="col-sm-6">
			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> Heading Arabic
			</label>
			 <div class="col-sm-10">				
				<textarea class="form-control" style="text-align: right"   name="heading_arabic" ><?php if(isset($pages[0]['heading_arabic'])){ echo $pages[0]['heading_arabic'] ; }?></textarea>
			 </div> 
			</div>
		</div>
	</div>
	 <div class="row">
	    <div class="col-sm-6">	
			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> Heading Russian
			</label>
			 <div class="col-sm-10">				
				<textarea class="form-control" name="heading_russian" ><?php if(isset($pages[0]['heading_russian'])){ echo $pages[0]['heading_russian'] ; }?></textarea>
			 </div> 
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> Heading Chinese
			</label>
			 <div class="col-sm-10">				
				<textarea class="form-control" name="heading_chiness" ><?php if(isset($pages[0]['heading_chiness'])){ echo $pages[0]['heading_chiness'] ; }?></textarea>
			 </div> 
			</div>
		</div>
	</div>
	<div class="row">
	    <div class="col-sm-6">
				<?php if(isset($pages[0]['service_icon'])){ ?>
				<div class="form-group">
				<label class="col-sm-2 control-label" for="focusedinput"></label>			
				<div class="col-sm-10">				 
				 <img src="<?php echo base_url()?>images/service_icons/<?php echo $pages[0]['service_icon'];?>" height="100" width="200">
				</div>
					</div>								
					<?php } ?>
					<div class="form-group">
					<label class="col-sm-2 control-label" for="focusedinput">Icon image </label>									
					<div class="col-sm-10">
					 <input type="file" id="image1" name="<?php echo $image;?>" class="file-control">
					</div>
                  </div>
			</div>

	    <div class="col-sm-6">	
				 <div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> Sort order 
			</label>
			 <div class="col-sm-10">
				<input type="number"  value="<?php if(isset($pages[0]['order_by'])){ echo $pages[0]['order_by'] ; }?>" class="form-control" name="order_by">
			 </div> 
			</div>
        </div>
    </div>
       <div class="row">
		  	<div class="col-sm-6">
			<div class="form-group">
				<label class="col-sm-2 control-label" for="	">Status</label>
				<div class="col-sm-10">
				<select name="status" class="form-control">
				<option value="1" <?php if(isset($pages[0]['page_status']) and $pages[0]['page_status']==1){ ?> selected <?php } ?> >
				 Enable
				</option>
				 <option value="0" <?php if(isset($pages[0]['page_status']) and  $pages[0]['page_status']==0){ ?> selected <?php } ?> >
				 Disable
				</option>
				</select>
				</div>
				</div>
	        </div>
		<div class="col-sm-6">	
			<div class="form-group">
				<label class="col-sm-2 control-label" for="	">Footer Manu</label>
				<div class="col-sm-10">
				<select name="footer_type" class="form-control">
				<option value="BookNow"  <?php if(isset($pages[0]['footer_type']) and $pages[0]['footer_type']=='BookNow'){ ?> selected <?php } ?> >BookNow</option>
				 <option value="Explore" <?php if(isset($pages[0]['footer_type']) and $pages[0]['footer_type']=='Explore'){ ?> selected <?php } ?> >Explore</option>				 
				 <option value="Deals"  <?php if(isset($pages[0]['footer_type']) and $pages[0]['footer_type']=='Deals'){ ?> selected <?php } ?> >Deals</option>				 
				</select>
				</div>
	        </div>
	     </div>
		</div>
		
		<div class="row">
			<div class="col-sm-12">
			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> Description 
			</label>
			 <div class="col-sm-10">
				<textarea id="summernote" name="discription" ><?php if(isset($pages[0]['page_desc'])){ echo $pages[0]['page_desc'] ; }?></textarea>
			 </div> 
			</div>
          </div>
      </div>
			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> Description Arabic
			</label>
			 <div class="col-sm-10">
				<textarea id="desc_arabic" style="text-align: right" name="desc_arabic" ><?php if(isset($pages[0]['desc_arabic'])){ echo $pages[0]['desc_arabic'] ; }?></textarea>
			 </div> 
			</div>

            <div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> Description Russian
			</label>
			 <div class="col-sm-10">
				<textarea id="desc_russian" name="desc_russian" ><?php if(isset($pages[0]['desc_russian'])){ echo $pages[0]['desc_russian'] ; }?></textarea>
			 </div> 
			</div>
			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> Description Chinese
			</label>
			 <div class="col-sm-10">
				<textarea id="desc_chiness" name="desc_chiness" ><?php if(isset($pages[0]['desc_chiness'])){ echo $pages[0]['desc_chiness'] ; }?></textarea>
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
     $(document).ready(function() {
        $('#desc_chiness').summernote();
    });
      $(document).ready(function() {
        $('#desc_russian').summernote();
    });
       $(document).ready(function() {
        $('#desc_arabic').summernote();
    });
 $('#summernote').summernote({
  height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: false ,
   dialogsInBody: true 
  // set focus to editable area after initializing summernote
});
  $('#desc_arabic').summernote({
  height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: false ,
  direction: 'rtl',
   dialogsInBody: true 
  // set focus to editable area after initializing summernote
});
   $('#desc_russian').summernote({
  height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: false ,
   dialogsInBody: true 
  // set focus to editable area after initializing summernote
});
    $('#desc_chiness').summernote({
  height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: false ,
   dialogsInBody: true 
  // set focus to editable area after initializing summernote
});
  </script>


<script>
$(document).ready(function() {

        function validateURL(textval) {
          var urlregex = new RegExp( "^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&amp;%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-zA-Z0-9\.\,\?\'\\\+&amp;%\$#\=~_\-]+))*$");
          return urlregex.test(textval);
        }
        
        $('#page_url').change(function(){
            var url = $("#page_url").val();
            if(!validateURL(url)) {
                $("#statusurl").html("enter Valid URL");
            }
            else {
                    $("#statusurl").hide();
            }
        }); //event handler
    }); //document.ready
// When the browser is ready...
$(function() {
// Setup form validation on the #register-form element
$("#page_form").validate({

// Specify the validation rules
rules: {
title: "required",	
meta_tag: "required",
meta_title: "required",
meta_discription: "required",
add_icon:"required",
heading: "required"
},

// Specify the validation error messages
messages: {
title: "Please enter Title",
meta_tag: "Please enter Meta tag",
add_icon: "Please Select icon image",
heading: "Please enter heading",
meta_title: "Please enter Meta title",
meta_discription: "Please enter Meta description",
url:{
required:"Please enter  URL",
remote:"This URL is already in exist"
},

},

submitHandler: function(form) {
form.submit();
}
});

});

</script>