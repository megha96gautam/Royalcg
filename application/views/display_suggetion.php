<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $page[0]['url'];?></title>
<link rel="icon" href="<?php echo base_url();?>front_assets/uae-favicon.ico" type="image/ico" sizes="16x16">
<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>

<!--<link href="css/skdslider.css" rel="stylesheet">-->
<link href="<?php echo base_url();?>front_assets/css/master_contact.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/master.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/jquery.carousel.fullscreen.css" />
<link href="<?php echo base_url();?>front_assets/css/font-awesome.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/component.css" />
<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/default.css" />

 <style>
 ul{
   padding-left:0px;
 }
  .error{
	 color:#d89854 !important;
	 
 }
 </style>
 <?php $this->load->view('tamplate/seoscript');?>
</head>
<body>

<div class="main_wrapper">      
<?php /*?><div id="carousel-example-generic" class="carousel slide" data-ride="carousel">



<div class="carousel-inner">
<div class="item active">
<img src="<?php echo base_url();?>front_assets/images/contact/shutterstock_299580728.jpg" alt="" />
<div class="container">
<div class="carousel-caption">

</div>
</div>
</div>
</div>


</div><?php */?>

<div class="inner_bg_content">

<div class="fb_camping">
<div class="container">

<div class="top_Sec">
<div class="col-md-6">
<div class="contact_logo">
<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>front_assets/images/contact/uae_logo.png" /></a>
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




<?php $this->load->view('tamplate/language.php');?>	


<div class="search_icon">

<div id="sb-search" class="sb-search">
<form>
<input class="sb-search-input" placeholder="Search" type="text" value="" name="search" id="search">
<input class="sb-search-submit" type="submit" value="">
<span class="sb-icon-search ser_b_two"><i class="fa fa-search" aria-hidden="true"></i></span>
</form>
</div>

</div>

</div>
</div>
</div>

<div class="conte_bott fb_camping_top" id="style-4">

<div class="main_cont_fb">
<?php echo $page[0]['sug_ldesc'];?>

</div></div>



</div>
</div>
</div></div>




<?php $this->load->view('tamplate/footer');?>

<script src="<?php echo base_url();?>front_assets/js/jquery.carousel.fullscreen.js"></script>

<!-- Just include this Js file -->
<script src="<?php echo base_url();?>front_assets/js/modernizr.custom.js"></script>

<script src="<?php echo base_url();?>front_assets/js/classie.js"></script>
<script src="<?php echo base_url();?>front_assets/js/uisearch.js"></script>
<script>
new UISearch( document.getElementById( 'sb-search' ) );
</script>
<script src="<?php echo base_url();?>assets/js/validate.js"></script>

<!-- jQuery Form Validation code -->
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
email:true
},
city: "required",
contact: "required",
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
city: "Please enter city",
contact: "Please enter contact",
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

</body>
</html>
