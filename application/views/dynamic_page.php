<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $page[0]['meta_title'];?></title>

<META NAME="description" CONTENT="<?php echo $page[0]['meta_discription'];?>">

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
	 body
	 {
		 background: #000000;
	 }
 </style>
 <?php $this->load->view('tamplate/seoscript');?>
</head>
<body>

<div class="main_wrapper">      
	<div class="">
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
                            
                            <?php $this->load->view('tamplate/language');?>	
                            
                            
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
			</div>
            <section>
            	
                	<div class="container">
                    	<div class="row">
                        	<div class="col-md-12">
                            	<div class="invitation-list">
                               <?php echo $page[0]['page_desc'];?>
                               </div>
                            
                            	
                            </div>
                            

                        </div>
                    </div>
                
            </section>
	<br />
    
    <br />
<?php $this->load->view('tamplate/footer');?>

