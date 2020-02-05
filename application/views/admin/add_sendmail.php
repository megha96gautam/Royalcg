	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
			<li><a href="<?php echo base_url() ?>admin/template">Manage Email</a></li>



			</ol>
			<div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
			<div class="page-heading">
			<h1 class="heading"><?php echo $heading;?>  </h1>

			</div>
			<div  class="tab-pane active" style="margin-top:20px;">
			<div class="col-sm-2">
			
			</div>
			<div class="col-sm-10">
			<form  action="<?php echo $action ; ?>" method="post" id="page_form" class="form-horizontal">
              <div class="form-group">
				 <label class="col-sm-2 control-label" for="focusedinput"> Select email template </label>
					<div class="col-sm-8">
						<select name="template_id" id="template_id" class="form-control" required="">
						<option value="">select email template</option>
							<?php  foreach($templates as $template){?>
                               <option value="<?php echo $template['template_id'];?>"> <?php echo $template['title'];?> </option>
							<?php } ?>
						</select>
                    </div>
				</div>
                  
			 <div class="form-group">
				 <label class="col-sm-2 control-label" for="focusedinput"> Select Email Users </label>
					<div class="col-sm-8">
						 <div class="form-group form-float">
                                        <div class="form-line">
                                             <input  type="radio" id="radio1" class="with-gap" value="Subscribe" name="super" checked onclick="showselectusers(0);" />
                                            
                                             <label for="radio1">Subscribe Users</label>
                                              <input name="super" type="radio" id="radio2" class="with-gap" value="Inquiry" onclick="showselectusers(1);" />
                                             <label for="radio2">Inquiry Users</label>
                                             <input name="super" type="radio" id="radio3" class="with-gap" value="Contact" onclick="showselectusers(2);" />
                                             <label for="radio3">Contact Users</label>
                                            
                                           
                                        </div>
                                    </div>
						<!-- <select name="template_id" id="template_id" class="form-control" >
						<option value="">Select Email Users </option>
							
                               <option value="1">Subscribe Users</option>
                               <option value="2">Contact Users</option>
                               <option value="3">inquiry Users</option>
							
						</select> -->
                    </div>
				</div>	

    <div class="form-group" id="subusers_div" >
        <label class="col-sm-2 control-label" for=""> Select Subscribe users</label>
          <div class="col-sm-8">
               <select name="subs_users[]" id="users" class="form-control" multiple="multiple" data-live-search="true">
                     <option value=""  >select users</option>
						<?php  foreach($users_sub as $sub){ ?>
									<option value="<?php echo $sub['subscribe_id'];?>"> <?php echo $sub['email'];?></option>
						<?php } ?>
                </select>
           </div>
       </div>
        <div class="form-group" id="inqusers_div"  style="display: none;">
        <label class="col-sm-2 control-label" for=""> Select Inquiry Users</label>
          <div class="col-sm-8">
               <select name="users[]" id="users" class="form-control" multiple="multiple" data-live-search="true">
                     <option value=""  >Select Inqiury users</option>
						<?php  foreach($users_inquiry as $inq){ ?>
									<option value="<?php echo $inq['id'];?>"> <?php echo $inq['name'];?> </option>
						<?php } ?>
                </select>
           </div>
       </div>
        <div class="form-group" id="contusers_div"  style="display: none;">
        <label class="col-sm-2 control-label" for=""> Select Contact-us user</label>
          <div class="col-sm-8">
               <select name="contact_users[]" id="users" class="form-control" multiple="multiple" data-live-search="true">
                     <option value=""  >select users</option>
						<?php  foreach($users_contact as $user){ ?>
									<option value="<?php echo $user['id'];?>"> <?php echo $user['first_name'];?> <?php echo $user['last_name'];?></option>
						<?php } ?>
                </select>
           </div>
       </div>

		<div class="form-group">
		  <label class="col-sm-2 control-label" for="focusedinput">Subject</label>
			 <div class="col-sm-8">
				<input type="text" value="" class="form-control" name="subject" required="">
			 </div> 
		</div>
		<div class="col-sm-8 col-sm-offset-2">
			<input type="submit"  name="submit" value="Send Email"  class="btn-primary btn">

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

function showselectusers(val){
    if(val!=1 & val!=2){
    	 document.getElementById('subusers_div').style.display = 'block';
    
    }else{
        document.getElementById('subusers_div').style.display = 'none';
    }
   if(val!=0 & val!=2){
         document.getElementById('inqusers_div').style.display = 'block';  
    }
    else{
      document.getElementById('inqusers_div').style.display = 'none';   
    }
    if(val!=0 & val!=1){
         document.getElementById('contusers_div').style.display = 'block';  
    }
    else{
      document.getElementById('contusers_div').style.display = 'none';   
    }
} 



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
description: "Please enter  discription",
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