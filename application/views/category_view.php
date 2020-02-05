<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $category[0]['meta_title'];?></title>

<META NAME="description" CONTENT="<?php echo $category[0]['meta_discription'];?>"/>

<META NAME="keywords" CONTENT="<?php echo  $category[0]['keyword'];?>"/>
 <?php echo $category[0]['other_seo'];?>

 
 <META NAME="robots" CONTENT="index,follow"/>
<META NAME="copyright" CONTENT="Copyright © 2016 UAE TOP 10. All Rights Reserved."/>

<meta name="rating" content="general" />
<meta name="geo.region" content="UAE" />
<meta name="geo.placename" content="United Arab Emirates "/>
<meta name="YahooSeeker" content="index,follow"/>
<meta name="msnbot" content="index,follow"/>
<meta name="googlebot" content="index,follow"/>


<link rel="icon" href="<?php echo base_url();?>front_assets/uae-favicon.ico" type="image/ico" sizes="16x16">
<link rel="canonical" href="<?php echo base_url(uri_string());?>"/> 
<link rel="icon" href="<?php echo base_url();?>front_assets/uae-favicon.ico" type="image/ico" sizes="16x16">

<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<!--<link href="css/skdslider.css" rel="stylesheet">-->
<link href="<?php echo base_url();?>front_assets/css/master.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/master_contact.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front_assets/listing/css/masterslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front_assets/css/style_common.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front_assets/css/style3.css" />	
<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/slidebars.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/slidebars-theme.css">
<link href="<?php echo base_url();?>front_assets/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">	
<script type="text/javascript" src="<?php echo base_url();?>/front_assets/listing/js/jquery-1.11.2.min.js"></script>
 <style>
 #toggle span, #toggle span:after, #toggle span:before
 {
     margin-bottom: 5px;
    padding-bottom: 1px;
 
 }
 .active1{
     color: #d79853 !important; 
	 border-left: 3px solid transparent !important; 
 }
 
 html, body {
  margin: 0;
  padding: 0;
  background:#0c0c0c;
  font-family: 'Open Sans', sans-serif;
  font-style: normal;
  font-weight: 400;
  color: #7b7b7a;
  font-size: 12px;
  line-height: 0px;
}
#sidebar-menu {
  top: 0px;
  width: 100%;
}
#sidebar-menu li { border-bottom: 1px dashed rgba(238, 238, 238, 0.17); }
#sidebar-menu a {
  text-decoration: none;
  color: #595959;
}
#sidebar-menu a:hover {
  text-decoration: none;
  color: #595959;
}
.sb-navbar.sb-slide {
  width: 100% !important;
}
.active nav.main-navigation {
  display: block !important;
}
nav.main-navigation {
  display: none !important;
}
.modal-body-listing.active {
  height: 100vh !important;
}
.modal-body-listing {
    min-height: inherit;
    padding: 50px 5px 10px;
}
.main-navigation ul li a:hover:after {
    width: 2px;
    opacity: 1;
    left: 0px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
}
.main-navigation ul li a:after {
    position: absolute;
    height: 100%;
    width: 4px;
    top: 0;
    left: 25px;
    opacity: 0;
    background-color: #d79853;
    content: '';
    -webkit-box-shadow: 0 0 1px 3px rgba(1, 186, 176, 0.4);
    -moz-box-shadow: 0 0 1px 3px rgba(1, 186, 176, 0.4);
    box-shadow: 0 0 1px 3px rgba(1, 186, 176, 0.4);
    -webkit-transition: all 0.2s ease-out;
    -moz-transition: all 0.2s ease-out;
    -o-transition: all 0.2s ease-out;
    transition: all 0.2s ease-out;
}
.main-navigation ul li a {
    position: relative;
    padding: 2px 35px;
    display: block;
    text-decoration: none;
    -webkit-transition: all 0.2s ease-out;
    -moz-transition: all 0.2s ease-out;
    -o-transition: all 0.2s ease-out;
    transition: all 0.2s ease-out;
    font-family: 'Josefin Sans', sans-serif;
    font-size: 14px;
    letter-spacing: 1px;
    font-weight: 600;
    color: #fff;
}
.main-navigation ul li {
  float: left;
  width: 25%;
  border-right: 1px solid rgba(63, 63, 63, 0.65);
}
.main-navigation ul li.active > a:after, .main-navigation ul li.active > a:focus:after, .main-navigation ul li.current-menu-item > a:after, .main-navigation ul li.current-menu-item > a:focus:after {
    width: 2px;
    opacity: 1;
    left: 0px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
}
.owl-buttons {
    position: absolute;
    width: 100%;
    top: 35%;
}
.owl-prev {
    position: absolute;
    left: 0;
}
.forcategoryslider img {
    max-height: auto;
    width: 100%;
}
.owl-next {
    position: absolute;
    right: 0;
}
@media screen and (max-width: 767px) {
	.modal-body-listing.active {
	    height: 100vh !important;
	    overflow-y: hidden;
	    overflow-x: hidden;
	    max-height: inherit !important;
	    width: 100% !important;
	    max-width: 300px;
	}
	.main-head-pro {
	    max-width: 100%;
	    margin: 0 auto;
	}
	.modal-body-listing.active {
		padding: 60px 0;
	}
}
@media screen and (max-width: 1080px) {
	.forcategoryslider {
	    width: 285px !important;
	}
}
@media screen and (max-width: 1022px) {
	nav.main-navigation ul {
		width: 70%;
	}
}
</style> 
    
    
 
    
</head>

<body>
  <?php $this->load->view('tamplate/seoscript');?>
 <!-- Left Slidebar -->
<div class="lest_slide">
  <nav class="menu-opener">
    <div class="menu-opener-inner"></div>
  </nav>
  <nav class="menu">
    <ul class="menu-inner">
      <div id="content-1" class="modal-body-listing mCustomScrollbar">
        <div class="menu-container">
          <div class="menu-inner">
            <nav class="main-navigation">
            <div class="main-head-pro">
                  <h2>Categories</h2>
                </div>
              <ul>
                <?php if($categories) { 
            foreach($categories as $cat) {
            ?>
                <li class="<?php if($cat['meta_tag']==$this->uri->segment(2)) { ?>active<?php } ?>"> <a href="<?php echo base_url().'category/'.$cat['meta_tag'];?>" > <?php echo $cat['cate_name'];?></a></li>
                <?php } } ?>
              </ul>
            <div class="forcategoryslider"  >
              <div class="my-client-slider">
                <div class="container menu_slide">
                  <div id="demo">
                        <div id="product-slider" class="owl-carousel">
                             <?php 
                          $i = 1; foreach($categories as $f ) {  
                        ?>          
                          <div class="item">
                              <div class="slide-item-div">
                          <div class="slide-pro">
                            <img src="<?php echo base_url();?>images/<?php echo $f['cate_image'];?>">
                            <!--<div class="flag-logo"><img src="images/slide-flag.jpg"></div>-->
                          
                                          <div class="menu_slide_head"><?php echo $f['cate_name'];?></div>
                                          </div>
                           
                        </div>
                          </div>
                    <?php } ?>  
                        </div>
                    </div>
                </div>
              </div>
           </div>
            </nav>

          </div>
      

        </div>
      </div>
      <div class="inner_cont_three"> </div>
    </ul>
  </nav>

</div>
    
<!-- end Left Slidebar --> 
	
        <div class="sb-slidebar sb-left">	
			
		<ul class="sb-menu">
			<?php if($categories) { 
			foreach($categories as $cat) {
			?>	
	   <li>
	   <a href="<?php echo base_url().'category/'.$cat['meta_tag'];?>" class="<?php if($cat['meta_tag']==$this->uri->segment(2)) { ?>active1<?php } ?>"> <?php echo $cat['cate_name'];?></a></li>

			<?php } } ?>
		</ul>
			
		</div>
		
        
       <!-- end Left Slidebar --> 


   <div id="sb-site">

   <div class="main_wrapper">      
<div class="main_inner_thr">
<?php if(isset($category[0]['cate_image2']) and $category[0]['cate_image2'] !='' ){ ?>
<div class="main_inner_bg_thr"   style="background: url('<?php echo base_url();?>images/category/<?php echo $category[0]['cate_image2'];?>');	width: 100%;
	float: left;
	margin: 0px;
	padding: 0px;
	background-size: cover;
	min-height: 775px;
	background-position: 50%;
	">
<?php }else{?>
<div class="main_inner_bg_thr" style="background: url('<?php echo base_url();?>images/category/shutterstock_187814039.jpg');	width: 100%;
	float: left;
	margin: 0px;
	padding: 0px;
	background-size: cover;
	min-height: 775px;
	background-position: 50%;
	">
<?php } ?>

<div class="container-fluid">
<div class="row">
<div class="thr_head">
<div class="col-md-7">
<div class="inner_logo_n">

</div>
</div>

<div class="col-md-5">
<div class="row">
<div class="inner_rig_n single_page">

<!--<div class="inner_menu_se">
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Categories</a></li>
<li><a href="#">Features</a></li>
<li><a href="#">Suggestions</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Contact</a></li>
</ul>
</div>-->


<div class="header">

        <div class="main_top">
          
          <div class="col-md-12">
          
          <div class="inner_top_right"> 
<div class="top_cont">
        
        <div class="top_Sec">
<!--        <div class="col-md-6">
        
        </div>-->
        <div class="col-md-12">
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
            
            
   
          
          </div>
          </div>
        </div>
      
 
  </div>

<?php /*?><div class="thr_logo">
<img src="<?php echo $image; ?>" />

</div><?php */?>

<!--<h2><?php echo $category[0]['cate_name'];?></h2> -->
 <div class="cate_right_cont_Sec">

<?php echo $category[0]['cate_desc2'];?>
<!-- <?php if($this->uri->segment(2)=='property-developers'){?>
<a href="javascript:void(0);" style="margin-top:10px;" id="showdivdata">Explore the Top 10 Jewels of UAE</a>
<div style="float: left;width: 100%;margin-top: 25px;display:none;" class="showafter">

 <input type="password" name="" id="topdeveloper" placeholder="enter password" class="form-control">
  
 <button  class="submitpass btn btn-defaul" style="margin-top:10px;" class="btn btn-defaul">submit</button>
 
 <p class="error showerror"></p>
</div>

<?php } ?> -->







 </div>




</div>
</div></div>

</div>



</div></div>

</div>

</div>

</div>

   


      
        <script src="<?php echo base_url();?>front_assets/js/jquery.flipster.min.js"></script> 
      
        
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="<?php echo base_url();?>front_assets/js/jquery.navside.js"></script>
        
        <script src="<?php echo base_url();?>front_assets/js/menu_toggle.js"></script> 
        <script src="<?php echo base_url();?>front_assets/js/search_box.js"></script> 
        <script src="<?php echo base_url();?>front_assets/js/css3-animate-it.js"></script> 
		<script src="<?php echo base_url();?>front_assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
 		
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front_assets/css/default.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front_assets/css/component.css" />
		<script src="<?php echo base_url();?>front_assets/js/modernizr.custom.js"></script>
		<script src="<?php echo base_url();?>front_assets/js/classie.js"></script>
		<script src="<?php echo base_url();?>front_assets/js/uisearch.js"></script>
		<script>new UISearch( document.getElementById( 'sb-search' ) );</script>
		<script src="<?php echo base_url();?>front_assets/js/owl.carousel.min.js" ></script> 
        
       <!-- <script>
		$(document).ready(function() {
							$(function(){
								$("#navside").navside({
										position         : 'left',   
										scroll           : 'fixed' 
									});
							});
						});
       </script>-->
        
   <script src="<?php echo base_url();?>front_assets/js/slidebars.min.js"></script>
        <script type="text/javascript">
  $(document).ready(function() {
      var owl = $("#product-slider");
      owl.owlCarousel({        
        itemsCustom : [
          [0, 1],
          [450, 1],
          [600, 1],
          [700, 1],
          [1000, 1],
          [1200, 1],
          [1400, 1],
          [1600, 1]
        ],
        navigation : true,
        pagination : true
      });
    });
	 $(".menu-opener").click(function(){
	  $(".menu-opener, .menu-opener-inner, .menu, .modal-body-listing").  toggleClass("active");
	  $(".main-navigation").toggle("show");
	  //$(".forcategoryslider").toggle("show");
	 });
</script>
   <script>
			(function($) {
				$(document).ready(function() {
					$.slidebars();
				});
			}) (jQuery);
		    $("#showdivdata").on("click",function(){
			   $(".showafter").show('slow');
			});
			$(".submitpass").on("click",function(){
			    var pass = $("#topdeveloper").val();
				if(pass=='alpha'){
				  window.location.href='<?php echo base_url();?>listings/<?php echo $category[0]['meta_tag'];?>';
				}else{
				   $(".showerror").html("password not match!");
				}
			});			
		</script> 
        
        
 
  <?php $this->load->view('tamplate/footer');?>
