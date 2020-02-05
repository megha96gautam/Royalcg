<!DOCTYPE html >
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>UAE TOP 10 | Hotels | Restaurant| Mall | Suggestions</title>

<META NAME="description" CONTENT="UAE TOP 10 warmly welcomes all the valuable suggestions from their respected viewers, in order to provide service as per the requirement of every individual.">

<link rel="icon" href="<?php echo base_url();?>front_assets/uae-favicon.ico" type="image/ico" sizes="16x16">
<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>

<!--<link href="css/skdslider.css" rel="stylesheet">-->
<link href="<?php echo base_url();?>front_assets/css/master_contact.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/master.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/jquery.carousel.fullscreen.css" />
<link href="<?php echo base_url();?>front_assets/css/font-awesome.css" rel="stylesheet">
<style>
.suggetion_extra  .form-group.offer_group {
    width: 100%;
    float: left;
    margin: 3% 1%;
}
 
 textarea.form-control.cont_inp_bg {
  border: 1px solid #1f1f1f;
}
   
.suggetion_extra {
padding: 20px 15px;
border: 1px dashed rgba(212, 212, 212, 0.26);
margin-bottom: 50PX;
}
 
 .suggetion_extra .input-group {
    margin-top: 4px;
    width: 100%;
}
.suggetion_extra .input-group {
    margin-top: 4px;
    width: 100%;
	 border: 1px solid #1f1f1f;
}
.suggetion_extra .invifrm-top p {
    color: #adadad;
}
</style>
<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/component.css" />
<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/default.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- jQuery Form Validation code -->
<script src="<?php echo base_url();?>/assets/js/validate.js"></script>
<script>

// When the browser is ready...
$(function() {

// Setup form validation on the #register-form element
$("#contact_form").validate({

// Specify the validation rules
rules: {
name: "required",
message: "required",
agree: "required",
email: {
required: true,
email: true
},
company: "required",
contact:{
required: true,
number: true	
},
password:"required",
old_password:"required",
ConfirmPassword: {
required: true,
equalTo: "#password"
}

},

// Specify the validation error messages
messages: {
name: "Please enter name",
message: "Please enter message",
agree: "Please accept term and condition",
email: {
required: "Please provide a email",
email: "Please provide a valid email"
},
password: "Please provide a password",
company: "Please enter Suggetion",
contact: {
required:"Please enter contact",	
number:"Please enter valid contact"	
}, 
old_password: "Please provide a old password",
ConfirmPassword:"password confirm must be same as password",
ConfirmPassword: {
required: "Please provide a confirm password",
equalTo:"confirm password must be same as new password "

}


},

submitHandler: function(form) {
form.submit();
}
});

});



</script>

 <style>
	 ul{
	 	padding-left:0px;
	 }
	  .error{
		color:#d89854 !important;
	 }
	 body
	 {
		 background: #000000;
	 }
 </style>
 
</head>
<body>
<?php $this->load->view('tamplate/seoscript');?>
<div class="main_wrapper">      
	<div class="">
		<div class="fb_camping">
			<div class="container">
                <div class="top_Sec">
                    <div class="col-md-6">
                        <div class="contact_logo">
                        	<a href="<?php echo base_url(); ?>"><img alt="uae top 10 invitaion"  src="<?php echo base_url();?>front_assets/images/contact/uae_logo.png" /></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-rit-area cont_rig">
                        	<div class="menu-top">                        
                        		<div class="menu-main">
                                    <div class="dropdown ">
                                        <button class="dropbtn "><i class="fa fa-bars" aria-hidden="true"></i></button>
                                        <div class="dropdown-content"> 
										 <?php 
                                              $this->load->view('tamplate/menue');
                                         ?>                        
                                        </div>
                                    </div>                
                                </div>
                            </div>
            
                            <div class="social_icon">
                                <div class="dropdown social">
                                    <button class="dropbtn social"><i class="fa fa-facebook" aria-hidden="true"></i></button>
                                    <div class="dropdown-content social"> 
                                        <?php $this->load->view('tamplate/social');?>				 
                                    </div>
                                </div>
                            </div>
                            
                            <?php $this->load->view('tamplate/language');?>	
                            
                            
                            <div class="search_icon">
                                <div id="sb-search" class="sb-search">
                                    <form>
                                        <input class="sb-search-input" placeholder="Search" type="text" value="" name="search" id="search">
                                        <input class="sb-search-submit" type="submit" value="">
                                        <span class="sb-icon-search ser_b_two"><i class="fa fa-search" aria-hidden="true"></i></span>
                                        <div class="suggesstion-box"></div>
                                    </form>
                                </div>            
                            </div>        
                        </div>
                    </div>
                </div>
			</div>
      
 
                            <div class="container">
							<div  class="row">

							 
                            <div class=" fb_tm col-md-8 col-md-offset-2 suggetion_extra">
       						  <div class="invifrm-top">
								<p>
								To guide us further please provide your suggestions below, if any.Your suggestions are highly valuable to us.
								</p>
                              </div>
							<form   action="<?php echo base_url();?>suggetion" enctype="multipart/form-data" id="contact_form" method="post" novalidate>
							<div class="col-lg-12">
							
							<div class="form-group offer_group">
							<!--<label for="InputName">Your Name</label>-->
							<div class="input-group">
							<input type="text" class="form-control cont_inp_bg" name="name" id="InputName" placeholder="Name">
							<?php echo form_error('name', '<div class="error">', '</div>'); ?>
							</div>
							</div>
							<div class="form-group offer_group">
							<!--<label for="InputEmail"> Email</label>-->
							<div class="input-group">
							<input type="email" class="form-control cont_inp_bg" id="InputEmail" name="email" placeholder="Email">
							<?php echo form_error('email', '<div class="error">', '</div>'); ?>
							</div>
							</div>
							
							<div class="form-group offer_group">
							<!--<label for="InputEmail"> Contact</label>-->
							<div class="input-group">
							<input type="text" class="form-control cont_inp_bg" id="InputContact" name="contact" placeholder="Contact">
							<?php echo form_error('contact', '<div class="error">', '</div>'); ?>
							</div>
							</div>
							
							<div class="form-group offer_group">
							<!--<label for="InputEmail"> City</label>-->
							<div class="input-group">
							<textarea rows="10" class="form-control cont_inp_bg" id="Inputcompany" name="company" placeholder="Suggestion"></textarea>
<?php echo form_error('suggetion', '<div class="error">', '</div>'); ?>
							</div>
							</div>						
							 <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-info btn-lg cont_button offer_button">Submit</button>
							</div>
							</form>
               
						</div>
 
						</div>
						</div>
						
                        </div>
                    </div>
                
            
	<br />
    
    <br />
</div>
</div>

<script src="<?php echo base_url();?>front_assets/js/classie.js"></script> 
<script src="<?php echo base_url();?>front_assets/js/uisearch.js"></script> 
<script>new UISearch( document.getElementById( 'sb-search' ) );</script> 
<script src="<?php echo base_url();?>assets/js/validate.js"></script>
<?php $this->load->view('tamplate/footer'); ?>