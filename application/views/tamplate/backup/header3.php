<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">
<!--<link href='https://fonts.googleapis.com/css?family=Roboto:400,100italic,100,300italic,300,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>-->
<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<title><?php echo $title ; ?> </title>

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url();?>front_assets/css/master.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/animations.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/owl.theme.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/style_common.css" rel="stylesheet"  type="text/css"/>
<link href="<?php echo base_url();?>front_assets/css/style10.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>front_assets/css/demo.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>front_assets/css/set1.css"  rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>front_assets/js/jquery.flipster.min.css" rel="stylesheet">


<link href="<?php echo base_url();?>front_assets/css/skin_modern_silver.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>front_assets/css/html_content.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>front_assets/css/full-slider.css" rel="stylesheet" type="text/css"/>
<?php /*?><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front_assets/css/component-menu.css" /><?php */?>

<!--<link rel="stylesheet" href="css/jquery.carousel.fullscreen.css" />-->

</head>
<body>
<div class="main_wrapper">
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="main_top">
          <div class="col-md-7">
            <div class="main_logo"> <a href="#"><img src="<?php echo $logo; ?>"></a> </div>
          </div>
          <div class="col-md-5">
          <div class="top-rit-area">
          	<div class="menu-top">
            	
               <div class="menu-main">
              <div class="dropdown ">
                <button class="dropbtn "><i class="fa fa-bars" aria-hidden="true"></i></button>
                <div class="dropdown-content"> 
				<ul>
                  <li><a href="<?php echo base_url();?>coming_soon">Home</a></li>
                  <li><a href="<?php echo base_url();?>coming_soon">About</a></li>
				   <li><a href="<?php echo base_url();?>coming_soon">Categories</a></li>
				   <li><a href="<?php echo base_url();?>coming_soon">Features</a></li>
				    <li><a href="<?php echo base_url();?>coming_soon">Suggestions</a></li>	
				   
				  <li><a href="<?php echo base_url();?>coming_soon">Blog</a></li>
				  <li><a href="<?php echo base_url();?>coming_soon">Contact</a></li>
                  
                 			
                 
                
                </ul>
				 
                </div>
              </div>
              
              
            </div>
            </div>
            <?php /*?><div class="menu_top"> <a href="#menu" id="toggle"><span></span></a>
              <div id="menu">
                  <?php $this->load->view('tamplate/menue3');?>
              </div>
            </div><?php */?>
            <div class="social_icon">
  <!--            <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>-->
              <div class="dropdown social">
                <button class="dropbtn social"><i class="fa fa-facebook" aria-hidden="true"></i></button>
                <div class="dropdown-content social"> 

				 <?php $this->load->view('tamplate/social3');?>
				 
                </div>
              </div>
              
              
            </div>
            
            
        <?php $this->load->view('tamplate/language3');?>
            
            
            
            <div class="search_icon">
              <form class="searchbox">
                <input type="search" placeholder="Search......" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
                <input type="submit" class="searchbox-submit" value="GO">
                <span class="searchbox-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
              </form>
            </div>
            </div>
          </div>
        </div>
        <div class="banner_text">
          <h1>Welcome to</h1>
          <h2> <?php echo $banner_text ; ?></h2>
        </div>
      </div>
    </div>
  </div>