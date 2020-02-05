<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $page[0]['meta_title'];?></title>
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

 

<div class="conte_bott fb_camping_top" id="style-4">

<div class="main_cont_fb">
<?php echo $content;?>

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

<?php //$this->load->view('tamplate/footer');?>