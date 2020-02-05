<div class="static-content-wrapper">
    <div class="static-content">
       <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
        <li><a href="<?php echo base_url(); ?>admin/contact_footer/1">Manage Contact</a></li>
        <li><a href="#"><?php echo $page ; ?></a></li>
       </ol>
    <div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
        <div class="page-heading">
          <h1 class="heading"><?php echo $heading;?>  </h1>

        </div>
        <div  class="tab-pane active" style="margin-top:20px;">
            <form  action="<?php echo $action;?>" enctype="multipart/form-data" method="post" id="region_form" class="form-horizontal validate_inner ">
                  <h4 style="color:green"><?php if(isset($msg)){ echo $msg ;} ?></h4>
                   <p style="color:red" ><?php if(isset($error)){ echo $error; }?></p>
                  
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput">Email</label>
	                    <div class="col-sm-8">

	                     <input value="<?php if(isset($data_contact[0]['email'])){ echo $data_contact[0]['email']; }else if( isset($_POST['email'])) { echo $_POST['email']; } else{ }  ?>" name="email" type="text"  placeholder="email"   class="form-control" required>
	                    </div>
                     </div>
                      <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput">Address</label>
	                    <div class="col-sm-8">
	                     <textarea  name="address" type="text"  placeholder="address"   class="form-control" required><?php if(isset($data_contact[0]['address'])){ echo $data_contact[0]['address']; }else if( isset($_POST['address'])) { echo $_POST['address']; } else{ }  ?></textarea>
	                    </div>
                     </div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput">Address Arabic</label>
                      <div class="col-sm-8">
                       <textarea  name="address_arabic" style="text-align: right;" type="text"  placeholder="address"   class="form-control" required><?php if(isset($data_contact[0]['address_arabic'])){ echo $data_contact[0]['address_arabic']; }else if( isset($_POST['address_arabic'])) { echo $_POST['address_arabic']; } else{ }  ?></textarea>
                      </div>
                     </div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput">Address Russian</label>
                      <div class="col-sm-8">
                       <textarea  name="address_russian" type="text"  placeholder="address"   class="form-control" required><?php if(isset($data_contact[0]['address_russian'])){ echo $data_contact[0]['address_russian']; }else if( isset($_POST['address_russian'])) { echo $_POST['address_russian']; } else{ }  ?></textarea>
                      </div>
                     </div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label" for="focusedinput">Address Chinese</label>
                      <div class="col-sm-8">
                       <textarea  name="address_chiness" type="text"  placeholder="address"   class="form-control" required><?php if(isset($data_contact[0]['address_chiness'])){ echo $data_contact[0]['address_chiness']; }else if( isset($_POST['address_chiness'])) { echo $_POST['address_chiness']; } else{ }  ?></textarea>
                      </div>
                     </div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Mobile</label>
							<div class="col-sm-8">
							   <input value="<?php if(isset($data_contact[0]['mobile'])){ echo $data_contact[0]['mobile']; }else if( isset($_POST['mobile'])) { echo $_POST['mobile']; } else{ }  ?>" name="mobile" type="text"  placeholder="mobile"   class="form-control" required>
					        </div>
                    </div>
                    <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Facebook</label>
							<div class="col-sm-8">
							   <input value="<?php if(isset($data_contact[0]['facebook'])){ echo $data_contact[0]['facebook']; }else if( isset($_POST['facebook'])) { echo $_POST['facebook']; } else{ }  ?>" name="facebook" type="text"  placeholder="facebook"  id="url_vlid" class="form-control" required>
							   <div id="statusur" style="color: red;"></div>
					        </div>
                    </div>
                     <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Linkdin</label>
							<div class="col-sm-8">
							   <input value="<?php if(isset($data_contact[0]['linkdin'])){ echo $data_contact[0]['linkdin']; }else if( isset($_POST['linkdin'])) { echo $_POST['linkdin']; } else{ }  ?>" name="linkdin" type="text"  placeholder="linkdin" id="url_vlid1"  class="form-control" required>
							   <div id="statusur1" style="color: red;"></div>
					        </div>
                    </div>
                    <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Instagram</label>
							<div class="col-sm-8">
							   <input value="<?php if(isset($data_contact[0]['insta'])){ echo $data_contact[0]['insta']; }else if( isset($_POST['insta'])) { echo $_POST['insta']; } else{ }  ?>" name="insta" type="text"  placeholder="instagram" id="url_vlid2"  class="form-control" required>
							   <div id="statusur2" style="color: red;"></div>
					        </div>
                    </div>
                    <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Twitter</label>
							<div class="col-sm-8">
							   <input value="<?php if(isset($data_contact[0]['twiter'])){ echo $data_contact[0]['twiter']; }else if( isset($_POST['twiter'])) { echo $_POST['twiter']; } else{ }  ?>" name="twiter" type="text"  placeholder="Twitter" id="url_vlid3"  class="form-control" required>
							   <div id="statusur3" style="color: red;"></div>
					        </div>
                    </div>
                    <div class="form-group">
						<label class="col-sm-2 control-label" for="focusedinput">Gmail</label>
							<div class="col-sm-8">
							   <input value="<?php if(isset($data_contact[0]['gmail'])){ echo $data_contact[0]['gmail']; }else if( isset($_POST['gmail'])) { echo $_POST['gmail']; } else{ }  ?>" name="gmail" type="text"  placeholder="gmail" id="url_vlid4"  class="form-control" required>
							    <div id="statusur4" style="color: red;"></div>
					        </div>
                    </div>
                      <div class="form-group">
						              <label class="col-sm-2 control-label" for="focusedinput">Copy Right</label>
							             <div class="col-sm-8">
							                <input value="<?php if(isset($data_contact[0]['copy_right'])){ echo $data_contact[0]['copy_right']; }else if( isset($_POST['copy_right'])) { echo $_POST['copy_right']; } else{ }  ?>" name="copy_right" type="text"  placeholder="Total Hotels"   class="form-control" required>
					                </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-2 control-label" for="focusedinput">Copy Right Arabic</label>
                           <div class="col-sm-8">
                              <input value="<?php if(isset($data_contact[0]['copy_arabic'])){ echo $data_contact[0]['copy_arabic']; }else if( isset($_POST['copy_arabic'])) { echo $_POST['copy_arabic']; } else{ }  ?>" name="copy_arabic" class="form-control" type="text" style="text-align: right;" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-2 control-label" for="focusedinput">Copy Right Russian</label>
                           <div class="col-sm-8">
                              <input value="<?php if(isset($data_contact[0]['copy_russian'])){ echo $data_contact[0]['copy_russian']; }else if( isset($_POST['copy_russian'])) { echo $_POST['copy_russian']; } else{ }  ?>" name="copy_russian" type="text"    class="form-control" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-2 control-label" for="focusedinput">Copy Right Chinese</label>
                           <div class="col-sm-8">
                              <input value="<?php if(isset($data_contact[0]['copy_chiness'])){ echo $data_contact[0]['copy_chiness']; }else if( isset($_POST['copy_chiness'])) { echo $_POST['copy_chiness']; } else{ }  ?>" name="copy_chiness" type="text"    class="form-control" required>
                          </div>
                      </div>
                   
					
					
					</br></br>
					<div class="panel-footer">
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
							   <input type="submit"  name="submit" id="submit" value="Submit"  class="btn-primary btn">
							</div>
						</div>
					</div>
	        </form>
	    </div>
	</div>
  </div> 
  <?php $this->load->view('admin/include/footer'); ?>
</div> 



    <!-- include summernote css/js-->
<link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

<script type="text/javascript">
	$(document).ready(function() {

        function validateURL(textval) {
          var urlregex = new RegExp( "^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&amp;%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-zA-Z0-9\.\,\?\'\\\+&amp;%\$#\=~_\-]+))*$");
          return urlregex.test(textval);
        }
        
        $('#url_vlid').change(function(){
            var url = $("#url_vlid").val();
            if(!validateURL(url)) {
                $("#statusur").html("Enter valid facebook URL");
                $("#submit").attr("disabled", true);
            }
            else {
                    $("#statusur").hide();
                    $('#submit').removeAttr("disabled");

            }
        }); //event handler

    }); //document.ready

    $(document).ready(function() {

        function validateURL(textval) {
          var urlregex = new RegExp( "^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&amp;%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-zA-Z0-9\.\,\?\'\\\+&amp;%\$#\=~_\-]+))*$");
          return urlregex.test(textval);
        }
        
        $('#url_vlid1').change(function(){
            var url = $("#url_vlid1").val();
            if(!validateURL(url)) {
                $("#statusur1").html("Enter valid linkdin URL");
                $("#submit").attr("disabled", true);
            }
            else {
                    $("#statusur1").hide();
                    $('#submit').removeAttr("disabled");
            }
        }); //event handler
        
    }); //document.ready

     $(document).ready(function() {

        function validateURL(textval) {
          var urlregex = new RegExp( "^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&amp;%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-zA-Z0-9\.\,\?\'\\\+&amp;%\$#\=~_\-]+))*$");
          return urlregex.test(textval);
        }
        
        $('#url_vlid2').change(function(){
            var url = $("#url_vlid2").val();
            if(!validateURL(url)) {
                $("#statusur2").html("Enter valid instagram URL");
                $("#submit").attr("disabled", true);
            }
            else {
                    $("#statusur2").hide();
                    $('#submit').removeAttr("disabled");
            }
        }); //event handler
        
    }); //document.ready


     $(document).ready(function() {

        function validateURL(textval) {
          var urlregex = new RegExp( "^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&amp;%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-zA-Z0-9\.\,\?\'\\\+&amp;%\$#\=~_\-]+))*$");
          return urlregex.test(textval);
        }
        
        $('#url_vlid3').change(function(){
            var url = $("#url_vlid3").val();
            if(!validateURL(url)) {
                $("#statusur3").html("Enter valid Twitter URL");
                $("#submit").attr("disabled", true);
            }
            else {
                    $("#statusur3").hide();
                    $('#submit').removeAttr("disabled");
            }
        }); //event handler
        
    }); //document.ready

        $(document).ready(function() {

        function validateURL(textval) {
          var urlregex = new RegExp( "^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&amp;%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-zA-Z0-9\.\,\?\'\\\+&amp;%\$#\=~_\-]+))*$");
          return urlregex.test(textval);
        }
        
        $('#url_vlid4').change(function(){
            var url = $("#url_vlid4").val();
            if(!validateURL(url)) {
                $("#statusur4").html("Enter valid Gmail URL");
                $("#submit").attr("disabled", true);
            }
            else {
                    $("#statusur4").hide();
                    $('#submit').removeAttr("disabled");
            }
        }); //event handler
        
    }); //document.ready
</script>


