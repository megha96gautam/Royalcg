<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
 <title><?php echo  $listingmeta[0]->meta_title;?></title>
 <meta name="viewport" content="width=device-width, initial-scale=1" >
<META NAME="description" CONTENT="<?php echo  $listingmeta[0]->meta_discription;?>" />
<META NAME="keywords" CONTENT="<?php echo  $listingmeta[0]->meta_keyword;?>" />
<?php echo  $listingmeta[0]->other_seo;?>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<META NAME="robots" CONTENT="index,follow" />
<META NAME="copyright" CONTENT="Copyright © 2016 UAE TOP 10. All Rights Reserved." />

<meta name="rating" content="general"/>
<meta name="geo.region" content="UAE"/>
<meta name="geo.placename" content="United Arab Emirates "/>
<meta name="YahooSeeker" content="index,follow"/>
<meta name="msnbot" content="index,follow"/>
<meta name="googlebot" content="index,follow"/>

<link rel="icon" href="<?php echo base_url();?>front_assets/uae-favicon.ico" type="image/ico" sizes="16x16">
<link rel="canonical" href="<?php echo base_url(uri_string());?>"/> 

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,900,900italic,700italic,400italic%7CFjalla+One' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url();?>/front_assets/css/font-awesome.css" type="text/css" media="screen" />
<link href="<?php echo base_url();?>/front_assets/css/master.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/master_contact.css" rel="stylesheet">
<link href="<?php echo base_url();?>/front_assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url();?>/front_assets/listing/css/masterslider.css" type="text/css">
<link href="<?php echo base_url();?>front_assets/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url();?>/front_assets/listing/css/main.css" type="text/css">
<script type="text/javascript" src="<?php echo base_url();?>/front_assets/listing/js/modernizr.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/front_assets/listing/js/pace.min.js"></script>
<?php 
  if($this->uri->segment(3) == 'ih-insure-and-win'){
?>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-82270843-1');
</script>
<?php } ?>
<style>
.ms-bullets.ms-dir-v {
    display: none;
}
@media (max-width: 767px) and (min-width: 320px) {
  body.pace-running.pace-done.loaded {
      overflow-y: scroll;
      background-color: #000;
  }
  .menu.active {
      width: -webkit-calc(100% - 0.5rem);
      width: 300px;
  }
  .modal-body-listing.active {
      width: 100% !important;
      max-width: 300px;
  }
  .menu {
      background: #000;
      color: transparent;
      height: 100%;
      position: fixed;
      top: 0;
      left: 0%;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      width: 0rem;
      z-index: -1;
      bottom: 0;
      visibility: visible;
  }
}
.mang-nxt-prv {
    float: left;
    display: block;
    position: absolute;
    right: 4px;
    bottom: 31px;
    z-index: 99;
}
.mang-nxt-prv a {
    background-color: rgba(0, 0, 0, 0.29);
    /* padding: 5px 10px; */
    opacity: 1;
    color: #fff;
    float: left;
    margin-right: 10px;
    border-radius: 5px;
}
.mang-nxt-prv a:hover i.fa {
    background-color: #d79853;
}
.mang-nxt-prv a i.fa {
    font-size: 20px;
    padding: 4px 12px;
    border-radius: 5px;
}
.ms-nav-next {
    display: none;
}
.ms-nav-prev {
    display: none;
}

a.onlyContact {
position: fixed;
top: 0;
bottom: 0;
left: 0;
right: 0;
}
</style>
</head>
<body class="loaded">
<div id="page-loader" >
  <div class="loader-square loader-square-1">
    <div class="loader-square-content">
      <div class="loader-square-inner bg-pattern dark-screen"></div>
    </div>
  </div>
  <div class="loader-square loader-square-2">
    <div class="loader-square-content">
      <div class="loader-square-inner bg-pattern dark-screen"></div>
    </div>
  </div>
  <div class="loader-square loader-square-3">
    <div class="loader-square-content">
      <div class="loader-square-inner bg-pattern dark-screen"></div>
    </div>
  </div>
  <div class="loader-square loader-square-4">
    <div class="loader-square-content">
      <div class="loader-square-inner bg-pattern dark-screen"></div>
    </div>
  </div>
  <div class="loader-square loader-square-5">
    <div class="loader-square-content">
      <div class="loader-square-inner bg-pattern dark-screen"></div>
    </div>
  </div>
  <div class="loader-square loader-square-6">
    <div class="loader-square-content">
      <div class="loader-square-inner bg-pattern dark-screen"></div>
    </div>
  </div>
  <div class="loader-square loader-square-7">
    <div class="loader-square-content">
      <div class="loader-square-inner bg-pattern dark-screen"></div>
    </div>
  </div>
  <div class="loader-square loader-square-8">
    <div class="loader-square-content">
      <div class="loader-square-inner bg-pattern dark-screen"></div>
    </div>
  </div>
  <div class="loader-square loader-square-9">
    <div class="loader-square-content">
      <div class="loader-square-inner bg-pattern dark-screen"></div>
    </div>
  </div>
  <div class="loader-container">
    <div class="loader-content"> <img class="loader-logo" alt="uae listing" src="<?php echo base_url(); ?>front_assets/images/uae_logo.png">
      <div id="loader"></div>
    </div>
  </div>
  <!-- .loader-container -->
  <div class="loader-footer"> </div>
</div>
<!-- #page-loader --> 

<!-- header -->

<div class="header listingHeader list_head_s">
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

<!-- end of header -->

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
	            		<h1>Categories</h1>
	            	</div>
              <ul>
                <?php if($categories) { 
						foreach($categories as $cat) {
						?>
                <li class="<?php if($cat['meta_tag']==$this->uri->segment(2)) { ?>active<?php } ?>"> <a href="<?php echo base_url().'listings/'.$cat['meta_tag'];?>" > <?php echo $cat['cate_name'];?></a></li>
                <?php } } ?>
              </ul>
  		<div class="forcategoryslider"  >
		<div class="my-client-slider">
			<div class="container menu_slide">
				<div id="demo">
			        <div id="owl-demo" class="owl-carousel">
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
<!--
<div class="mang-nxt-prv"> 
<a href="<?php echo $prev;?>"><i class="fa fa-angle-left"></i></a>
<a href="<?php echo $next;?>" ><i class="fa fa-angle-right"></i></a>
</div>-->
<div id="all">
  <div id="menu-trigger"> <i class="fa fa-reorder"></i> </div>
  <div class="ms-fullscreen-template" id="slider1-wrapper"> 
    <!-- masterslider -->
    <div class="master-slider ms-skin-default has-thumbnails" id="masterslider">
      <?php $j = 0; foreach ($lists as $l) {
	  
	     if($this->uri->segment(3)== $l['meta_tag'] ) {
	  
	  ?>
      <div class="ms-slide ms-slide1" data-delay="0">
    
        <div class="ms-slide-pattern bg-pattern dark-screen"></div>
		<?php if($l['pro_title']=='Exploring Gems' or $l['pro_title']=='Exploring Gems') { ?>
        <img src="<?php echo base_url();?>/front_assets/listing/images/blank.gif" data-src="<?php echo base_url();?>images/explring_zems/ecplring_zems_new.jpg" alt="lorem ipsum dolor sit">
		 <?php } else{?>
		 <img src="<?php echo base_url();?>/front_assets/listing/images/blank.gif" data-src="<?php echo base_url();?>images/listing/<?php echo $l['pro_header']; ?>" alt="lorem ipsum dolor sit">
		 <?php }?>
        <div class="ms-layer ms-layer1 ms-text-size3 text-uppercase" data-type="text" data-effect="rotate3dtop(70,0,0,180)" data-duration="2000" data-ease="easeInOutQuint">
            <?php if($l['pro_id'] == 831){
        echo '<a href="http://www.votivetech.com/" class="onlyContact">&nbsp;</a>';
  
         }

         if($l['pro_id'] == 891){
        echo '<a href="http://www.insurancehouse.ae/insure-and-win/" class="onlyContact">&nbsp;</a>';
  
         } ?>
          <div class="container">
            <h2> <?php echo $l['pro_title']; ?></h2>
          </div>
        </div>
        <div class="ms-layer ms-layer2 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type="text" data-effect="rotate3dbottom(-70,0,0,180)" data-duration="2000" data-ease="easeInOutQuint">
          <div class="container">
            <?php 

                 $word1 =100;	
				 
				 $count = strlen($l['pro_desc']);
   				
				 
				 $string = mb_substr($l['pro_desc'],0,$word1,'utf-8');
                  
				 
				  //echo $string;
				
				  if($count >= $word1 )
				    {
				   
				   // echo '...'; 
                    
					}?>
            </p>
            <div id="modal_content<?php echo $l['pro_id']; ?>" style="display:none"> <?php echo $l['pro_desc'] ?> </div>
            <input type="hidden" id="modal_email<?php echo $l['pro_id']; ?>" value="<?php echo $l['pro_conatctemail']; ?>">
            <input type="hidden" id="modal_contact<?php echo $l['pro_id']; ?>" value="<?php echo $l['pro_contactno']; ?>">
            <input type="hidden" id="modal_name<?php echo $l['pro_id']; ?>" value="<?php echo $l['pro_contactname']; ?>">
            <input type="hidden" id="modal_title<?php echo $l['pro_id']; ?>" value="<?php echo $l['pro_title']; ?>">
            <input type="hidden" id="modal_fb<?php echo $l['pro_id']; ?>" value="<?php echo $l['fb_url']; ?>">
            <input type="hidden" id="modal_tw<?php echo $l['pro_id']; ?>" value="<?php echo $l['tw_url']; ?>">
            <input type="hidden" id="modal_ln<?php echo $l['pro_id']; ?>" value="<?php echo $l['ln_url']; ?>">
            <input type="hidden" id="modal_webname<?php echo $l['pro_id']; ?>" value="<?php echo $l['webname']; ?>">
            <input type="hidden" id="modal_insta<?php echo $l['pro_id']; ?>" value="<?php echo $l['insta_url']; ?>">
          </div>
        </div>
        <div class="ms-layer ms-layer3 ms-text-size7 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type="text" data-effect="rotate3dbottom(-70,0,0,180)" data-duration="3000" data-delay="3000" data-ease="easeInOutQuint">
          <div class="container">
            <?php if($l['pro_title']=='Exploring Gems' or $l['pro_title']=='Exploring Gems') { ?>
            <button    type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_suggetion">Read More</button>
            <?php } else{ ?>
            <button  value="<?php echo $l['pro_id']; ?>" type="button" class=" readmore btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
            <?php } ?>
            
            <!-- <a class="button" href="#">Read More <i class="fa fa-angle-double-right"></i></a>--> 
          </div>
        </div>
 
      </div>
      <?php $j++; } } ?>
	  
	  <div class="modal fade listing" id="myModal" role="dialog">
  <div class="modal-dialog listing"> 
    
    <!-- Modal content-->
    <div class="modal-content listing">
      <div class="modal-header listing">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title listing modal_titld"></h4>
      </div>
      <div class="modal-body listing">
        <p class="contentd"> </p>
        <div class="inner_cont_two">
          <p class="phoneno" > </p>
          <p class="emaild"> </p>
          <p class="websited"></p>
          <p class="modalfbd"> </p>
        </div>
      </div>
      <div class="modal-footer listing"> 
        <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--> 
      </div>
    </div>
  </div>
</div>
	  
	  
    </div>
    <!-- end of masterslider --> 
  </div>
  <!-- .ms-fullscreen-template --> 
  
</div>



    <div class="thumb-slid">
      <div id="demo">
        <div class="th-sl">
          <div id="owl-thumb-demo" class="owl-carousel">
		   <?php $j = 0; foreach ($lists as $l) {?>
		  
            <div class="item"  >
              <div class="t-img-main">
			    <?php if($l['pro_title']=='Exploring Gems' or $l['pro_title']=='Exploring Gems') { ?>
			  
                <a  href="javascript:;" data="<?php echo $this->uri->segment(2);?>" data-target="<?php echo $l['meta_tag'];?>" class="<?php if($this->uri->segment(3)==$l['meta_tag']) { echo "active";} ?>  hitcount_in" id="<?php echo $l['pro_id'];?>" >
                  <img   alt="img" src="<?php echo base_url();?>images/explring_zems/ecplring_zems_tumb_new.jpg">
                  <h3><?php echo $l['pro_title']; ?></h3>
                  <span class="search-i"><i class="fa fa-search"></i></span>
                </a>
				<?php }else{ ?>
				
				<a href="javascript:;" data="<?php echo $this->uri->segment(2);?>" data-target="<?php echo $l['meta_tag'];?>" class="<?php if($this->uri->segment(3)==$l['meta_tag']) { echo "active";} ?>  hitcount_in" id="<?php echo $l['pro_id'];?>"  >
				    <img  alt="img" src="<?php echo base_url();?>images/listing/<?php echo $l['pro_thumb'];?>">
				  	<h3><?php echo $l['pro_title']; ?></h3>
				  	<span class="search-i"><i class="fa fa-search"></i></span>
				</a>				
				
				<?php } ?>
              </div>
            </div>
 
  <?php } ?>
 

          </div>
        </div>
      </div>
    </div>
<!-- #all --> 

<!-- Modal -->



<!-- suggetion popup -->
<div class="modal fade listing" id="myModal_suggetion" role="dialog">
  <div class="modal-dialog listing"> 
    
    <!-- Modal content-->
    <div class="modal-content listing">
      <div class="modal-header listing">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title listing ">Predict and Win</h4>
      </div>
      <div class="modal-body listing">
        <div class="inner_cont_two">
          <p class="contentd-form">UAE TOP 10 gives you an amazing opportunity to predict names of our future partners and WIN exciting prizes. On guessing the right name you get a chance to win FREE dinner vouchers, cruise trips and spa visits.</p>
          <div class="form-for-usr">
            <form method="post" id="listingFormSuggetion">
            	
              <select id="category_data-list" name="category" class="form-control">
                <option value=""> select category </option>
                  <?php if($categories) { 
						foreach($categories as $cat) {
						?>
						 <option> <?php echo $cat['cate_name'];?> </option>
    
                <?php } } ?>
              </select>
              <input type="text" class="form-control" name="brand" id="brand" placeholder="Brand/Company/Business Name"/>
              <input type="text" name="name" id="name"  class="form-control" placeholder="Your Name"/>
              <input type="text" name="contact"  id="contact" class="form-control" placeholder="Contact Number"/>
              <input type="text" name="email" id="email" class="form-control" placeholder="Email"/>
              <div class="lisn-btn">
              	<button type="submit" id="submit" >Submit</button>
              </div>
			  <div class="lisn-btn sucsessbu">
              
              </div>
			  
            </form>
          </div>
          <p class="contentd-form">We will get back to You if your predicted name, makes it to the Top 10 list. 
            For more exciting offers visit:</p>
        </div>
      </div>
      <div class="modal-footer listing"> 
        <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--> 
      </div>
    </div>
  </div>
</div>
<!-- end suggetion popup --> 

<script type="text/javascript" src="<?php echo base_url();?>/front_assets/listing/js/jquery-1.11.2.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>/front_assets/listing/js/bootstrap.min.js"></script> 
<!-- <script type="text/javascript" src="js/jquery.easing.min.js"></script>--> 

<script type="text/javascript" src="<?php echo base_url();?>/front_assets/listing/js/masterslider.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>/front_assets/listing/js/jquery.nicescroll.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>/front_assets/listing/js/custom1.js"></script> 
<script src="<?php echo base_url();?>front_assets/js/search_box.js"></script> 
<script src="<?php echo base_url();?>front_assets/js/css3-animate-it.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front_assets/css/component.css" />
<script src="<?php echo base_url();?>front_assets/js/classie.js"></script> 
<script src="<?php echo base_url();?>front_assets/js/uisearch.js"></script> 
<script src="<?php echo base_url();?>front_assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>new UISearch( document.getElementById( 'sb-search' ) );</script> 
<script src="<?php echo base_url();?>assets/js/validate.js"></script>
<script src="<?php echo base_url();?>front_assets/js/owl.carousel.min.js" ></script> 
<script type="text/javascript">

	$(document).ready(function() {
    $(".sb-search-input").bind("keyup change", function(){
      var val = $(this).val().length;
      if(val >=4){
        $.ajax({
          url: window.location.origin+"/home/suggestCategory/"+$(this).val(),
          dataType: "json",
          type: "POST",
          // async:false,
          success: function(data){
            $(".suggesstion-box").html(data.msg);
            $(".suggesstion-box").find(".search-result").trigger("click");
          }
        });        
      }
      else{
        $(".suggesstion-box").html("");
      }
    });
	
	
	      var owl = $("#owl-thumb-demo");
        owl.owlCarousel({        
          itemsCustom : [
            [0, 3],
            [450, 3],
            [600, 5],
            [700, 7],
            [1000, 8],
            [1200, 9],
            [1400, 10],
            [1600, 10]
          ],
          navigation : true,
          pagination : false,
          autoPlay : false
        });
	
	
	
	
      var owl = $("#owl-demo");
      owl.owlCarousel({        
        itemsCustom : [
          [0, 1],
          [450, 2],
          [600, 2],
          [700, 2],
          [1000, 1],
          [1200, 1],
          [1400, 1],
          [1600, 1]
        ],
        navigation : true,
        pagination : true
      });
    });
</script>
<script>

$(document).on('click', '.hitcount_in', function (e) {
    e.preventDefault();
	 var val =  $(this).attr("id");
		 $.ajax({
	url: "<?php echo base_url();?>listing_hitcount",
	type: "post",
	data:({listing_id:val}),
	dataType : 'html',
	beforeSend: function(){
 
	  }, 
	 success: function (data) {
	   
 
	  } 

  });
  
	 
	   var category =  $(this).attr("data");
	   var listing =  $(this).attr("data-target");
	   	   setTimeout(function(){
			window.location.href="<?php echo base_url();?>listings/"+category+"/"+listing;
	    }, 300);  
	 

});

$(document).ready(function() {
	
	setTimeout(function(){
		$('body').addClass('loaded');
		$('h1').css('color','#222222');
	}, 3000);
	
});
	
	$(".menu-opener").click(function(){
      $(".menu-opener, .menu-opener-inner, .menu, .modal-body-listing").  toggleClass("active");
      $(".main-navigation").toggle("show");
      //$(".forcategoryslider").toggle("show");
     });
	 
	 $(document).ready(function(){
	 $(".main-navigation").hide();
	 })
	 $(".readmore").on("click",function(){
	 
	        /* first empty old data */
		    $(".emaild").html('');
		   
 
		   $(".websited").html(''); 
		 
		 
		   $(".phoneno").html('');
		   
		   $(".modalfbd").html('');
		 
	 	   $(".contentd").html('');
		 
		 
		   $(".modal_titld").html('');
	 
	        /* */
	 
	      $(".modalfbd").html('');
	     
		   
		   var text = '';
		   var email = '';
		   var contact = '';
		   var name = '';
		   var modal_title = '';
		   
		   var modal_webname = '';
		   
		   var fb = '';
		   var tw = '';
		   var ln = '';
		   var insta = '';   
	   
	   
	   
	   
	       var val = $(this).val();
		   
		   var text = $("#modal_content"+val).html();
		   var email = $("#modal_email"+val).val();
		   var contact = $("#modal_contact"+val).val();
		   var name = $("#modal_name"+val).val();
		   var modal_title = $("#modal_title"+val).val();
		   
		   var modal_webname = $("#modal_webname"+val).val();
		   
		   var fb = $("#modal_fb"+val).val();
		   var tw = $("#modal_tw"+val).val();
		   var ln = $("#modal_ln"+val).val();
		   var insta = $("#modal_insta"+val).val();
		   
		 
		   $(".contentd").html(text);
		   $(".modal_titld").html(modal_title);
		   if(email !=''){
		   $(".emaild").html('<i class="fa fa-envelope" aria-hidden="true"></i>'+ email);
		   }
		   if(name !=''){ 
          var str = name;
          var res = str.split(":");
          if(res[0]=='http' || res[0]=='https'){
            $(".websited").html('<i class="fa fa-globe" aria-hidden="true"></i><a target="_blank" href="'+name+'">'+ name +'</a>');
          }else{
            $(".websited").html('<i class="fa fa-globe" aria-hidden="true"></i><a target="_blank" href="http://'+name+'">'+ modal_webname +'</a>');
          }    
		   }
		   if(contact !=''){
		   $(".phoneno").html('<i class="fa fa-phone" aria-hidden="true"></i>'+ contact);
		   }
		   
		    if(fb){
		   $(".modalfbd").append('<a href="'+ fb +'" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>');
		   }
		  
		   if(insta){
		  
		   $(".modalfbd").append('<a href="'+ insta +'" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>');
		   }
		   
		   if(tw){
		   $(".modalfbd").append('<a href="'+ tw +'" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>');
		    }
			if(ln){
		   
		   $(".modalfbd").append('<a href="'+ ln +'" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>');
		   }
		   
	 
	 });


   
   /*$(".menu-opener").on("click",function(){
   
   $(".sidepopupsociald").html('');
       var val =  $(".ms-thumb-frame-selected .ms-thumb").attr("id");
		   var text = $("#modal_content"+val).html();
		   var email = $("#modal_email"+val).val();
		   var contact = $("#modal_contact"+val).val();
		   var name = $("#modal_name"+val).val();
		   var modal_title = $("#modal_title"+val).val();
		   
		   var modal_webname = $("#modal_webname"+val).val();
			
		   var fb = $("#modal_fb"+val).val();
		   var tw = $("#modal_tw"+val).val();
		   var ln = $("#modal_ln"+val).val(); 
		   
		   
		    $(".sidepopupdata").html(text);
		    $(".side_title").html(modal_title);
			if(email !=''){
		   $(".side_email").html('<i class="fa fa-envelope" aria-hidden="true"></i>'+ email);
		   }
		   if(name !=''){
		   $(".side_website").html('<i class="fa fa-globe" aria-hidden="true"></i><a target="_blank" href="http://'+name+'">'+ modal_webname +'</a>');
		   }
		   if(contact !=''){
		   $(".side_contcat").html('<i class="fa fa-phone" aria-hidden="true"></i>'+ contact);
		   }
		   		    if(fb!=''){
		   $(".sidepopupsociald").append('<a href="'+ fb +'" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>');
		   }
		   
		   if(tw !=''){
		   $(".sidepopupsociald").append('<a href="'+ tw +'" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>');
		    }
			if(ln !=''){
		   
		   $(".sidepopupsociald").append('<a href="'+ ln +'" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>');
		   }
		   
		   
		   
   });*/
   
   $(function() {

// Setup form validation on the #register-form element
$("#listingFormSuggetion").validate({

// Specify the validation rules
rules: {
name: "required",
message: "required",
brand: "required",
email: {
required: true,
email: true
},
category: "required",
contact:{
required: true,
number: true	
} 

},

// Specify the validation error messages
messages: {
name: "Please enter name",
message: "Please enter message",
brand: "Please enter brand name",
email: {
required: "Please provide a email",
email: "Please provide a valid email"
},
password: "Please provide a password",
category: "Please select category ",
contact: {
required:"Please enter contact",	
number:"Please enter valid contact"	
} 


},

submitHandler: function(form) {
      
	 form.submit();
	 
}
});

});

 
$(document).on('submit',"#listingFormSuggetion",function(e){
	
	e.preventDefault();
	var formData = new FormData(this);
	$.ajax({
	url: "<?php echo base_url();?>listing_suggetion_form",
	type: "post",
	data:formData,
	cache:false,
	contentType: false,
	dataType : 'html',
	processData: false,
	 beforeSend: function(){
	$("#submit").button("disable");
	$("#submit").html("please wait.....");
	}, 
	success: function (data) {
	   
	  if(data=='true'){
	  
	     $(".sucsessbu").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Thunk You ..</strong></div>');
		 
		  $('#listingFormSuggetion').trigger("reset");
	  
	   }else{
	   
	     $(".sucsessbu").html('<div class="alert alert-warning alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>please try again.</strong></div>');
	   
	   }
	  
	  $("#submit").removeAttr("disable");
	  $("#submit").html("submit");
	  } 


  });  });
  
$(document).ready(function(){
 setTimeout(function(){ 
      $("#masterslider").trigger('mouseover');
 }, 500);

 $("#masterslider").on("mouseleave",function(){
 setTimeout(function(){ 
       $("#masterslider").trigger('mouseover');
 }, 100);
      
	   
 });});
 var onlyready = 1; 
 $(document).ready(function(){
	//front slider
	if(typeof MasterSlider == 'function') {
		front_slider = new MasterSlider();
	
		front_slider.control('arrows', { autohide:false });			//add arrows
		front_slider.control('bullets', { dir:'v', autohide:false });		//add vertical bullets
		front_slider.control('timebar', { autohide:false, align:'top', color:'#d79853' });		//add top timebar
		front_slider.control('thumblist' , { autohide:false, align:"bottom", inset:true, width:150, height:104 });	//add thumbnails
	    front_slider.control('scrollbar' , {dir:"v",width:0});
		front_slider.setup('masterslider', {
			width:1400,
			height:800,
			space:0,
			view:'basic',
			layout:'fullscreen',
			speed:100,
			swipe:false,
			autoplay:false,
			overPause:true
		});
		front_slider.api.pause();	
 
	front_slider.api.addEventListener(MSSliderEvent.CHANGE_START, function(){
		 if(onlyready==1){
		    if($(".ms-thumb").hasClass("thisismyactive")){
		    var slidee = $(".thisismyactive").attr("data-target");
		     front_slider.api.gotoSlide(slidee); 
		 
             if(slidee>6){
               var transform = '';
                transform = 60*slidee;
  			    transform = transform+'px';
			    $(".ms-thumbs-cont").css("transform","translateX(-"+transform+") translateZ(0px)");
			 }			  
			  
		     onlyready = 0;	
			} }else{
			 $(".ms-slide").hide();
			
			}
	}); 
  
 
		  
	}
   

 
	
 
}); 


 
</script>
</body>
</html>