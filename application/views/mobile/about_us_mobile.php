<!DOCTYPE html>
<html lang="en">
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>UAE TOP 10 Brands Club</title>
 <link rel="icon" href="<?php echo base_url();?>/front_assets/uae-favicon.ico" type="image/ico" sizes="16x16">
 <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>

 <!--<link href="css/skdslider.css" rel="stylesheet">-->
 <link href="<?php echo base_url();?>front_assets/css/master_contact.css" rel="stylesheet">
 <link href="<?php echo base_url();?>/front_assets/css/master.css" rel="stylesheet">
 <link href="<?php echo base_url();?>front_assets/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/jquery.carousel.fullscreen.css" />
 <link href="<?php echo base_url();?>front_assets/css/font-awesome.css" rel="stylesheet">
 <link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/component.css" />
 <link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/default.css" />
 <script type="text/javascript" src="<?php echo base_url();?>front_assets/js/jquery-1.10.0.min.js"></script>
 <style>
ul {
	padding-left: 0px;
}
.error {
	color: #d89854 !important;
}
.top_Sec {
	width: 100%;
	float: left;
	margin: 0px;
	padding: 0px;
	/*background: #000;
	border-bottom: 1px solid rgba(213, 150, 81, 0.41);*/
}
.inner_bg_content {
	background: url(../front_assets/images/Inner_back_ground.jpg) fixed;
	background-repeat: no-repeat;
	background-size: cover;
}
.fb_camping {
	width: 100%;
	float: left;
	margin: 0% auto 0;
	padding: 0px;
	background: none;
	height: 100%;
	min-height: 775px;
}
.main_cont_fb p {
	font-size: 13px;
	letter-spacing: 0.5px;
	line-height: 24px;
	text-align: justify;
	padding-right: 0px;
	margin-bottom: 22px;
	font-weight: 500;
}
.main_cont_about {
	float: right;
	padding: 16px;
}
.main_heading_about {
	float: left;
	width: 100%;
	font-size: 25px;
	border-left: solid 5px;
	color: #d59551;
	margin-bottom: 10px;
	margin-top: 10px;
	margin-left: 16px;
}
.main_heading_about h3 {
	padding-left: 15px;
	font-size: 30px;
	font-weight: bold;
	margin-top: 10px;
	margin-bottom: 10px;
}
.conte_bott.fb_camping_top {
	margin-bottom: 0px;
}
.conte_bott.fb_camping_top {
	margin-bottom: 0px;
}
.conte_bott.fb_camping_top {
	margin-top: 0%;
}
.main_about {
	float: right;
	width: 100%;
}
.about_us {
	float: left;
	width: 100%;
	margin: 0px;
	padding: 0px;
}



@media(min-width:320px) and (max-width:991px)
{
.about_us {
    background: rgba(0, 0, 0, 0.89);
}
.about_us .main_cont_about
{
	padding: 15px 0px;	
}
	
}


</style>
 </head>
 <body>
 

<!-- Start Alexa Certify Javascript --> 
 
<!-- End Alexa Certify Javascript -->

<div class="main_wrapper">
   <div class="inner_bg_content">
       <div class="about_us">
        <div class="container">
           <div class="row">
            <div class="conte_bott fb_camping_top" id="style-4">
               <div class="main_cont_fb">
                <div class="col-md-offset-6 col-md-6">
                   <div class="main_about">
                    <div class="main_heading_about">
                       <h3>ABOUT US</h3>
                     </div>
                    <div class="main_cont_about">
                     <?php echo $content ;?>
                     </div>
                  </div>
                 </div>
              </div>
             </div>
          </div>
         </div>
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
  
 </div>

<!-- Placed at the end of the document so the pages load faster --> 
 