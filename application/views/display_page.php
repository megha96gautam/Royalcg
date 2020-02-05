<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $page[0]['meta_title'];?></title>
<META NAME="description" CONTENT="<?php echo $page[0]['meta_discription'];?>" />
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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <style>
 ul{
   padding-left:0px;
 }
  .error{
	 color:#d89854 !important;
	 
 }
 </style>
 
</head>
<body>
<?php $this->load->view('tamplate/seoscript');?>
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
<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>front_assets/images/contact/uae_logo.png" alt="uae top 10 privacy-policy" /></a>
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
<?php echo $page[0]['page_desc'];?>

</div></div>



</div>
</div>
</div>








<!-- Just include this Js file -->
<script src="<?php echo base_url();?>front_assets/js/modernizr.custom.js"></script>

<script src="<?php echo base_url();?>front_assets/js/classie.js"></script>
<script src="<?php echo base_url();?>front_assets/js/uisearch.js"></script>
<script>
new UISearch( document.getElementById( 'sb-search' ) );
</script>

<!-- jQuery Form Validation code -->

<?php $this->load->view('tamplate/footer');?>