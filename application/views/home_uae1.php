<div class="main_banner">
  <ul class="cb-slideshow">
    <li><span   ></span>
      <div>
       
      </div>
    </li>
    <li><span  ></span>
      <div>
      
      </div>
    </li>
    <li><span  ></span>
      <div>
        
      </div>
    </li>
    <li><span></span>
      <div>
        
      </div>
    </li>
    <li><span  ></span>
      <div>
      
      </div>
    </li>
    <li><span  ></span>
      <div>
       
      </div>
    </li>
  </ul>
</div>
<div class="main_content">
  <div class="container">
    <div class="row animatedParent">
      <div class="main_content_one  animated bounceInDown" data-id='1'>
        <h2 class="animated bounceInDown go">
          <?php  if(isset($home_content[0]['category_heading'])) { echo $home_content[0]['category_heading']; } ?>
        </h2>
        <p class=" animated growIn slowest go">
          <?php if(isset($home_content[0]['category_dis'])) {  echo $home_content[0]['category_dis']; } ?>
        </p>
      </div>
    </div>
  </div>
</div>

		<div class="my-client-slider">
			<div class="container-fluid">
				<div id="demo">
			        <div id="owl-demo" class="owl-carousel">
            <?php 
				  $mall_dis='';
				  $mall_heading = '' ;
				  $mall_url = '' ;
				  $resto_dis='';
				  $resto_heading='';
				  $resto_url='';
				  $hotel_dis='';
				  $hotel_heading ='';
				  $hotel_url='';
				  $attr_dis='';
				  $attr_heading ='';
				  $attr_url='';
				$i = 1; foreach($fetures as $f ) {
                    if($f['cate_id']=='91'){
						 $mall_dis = $f['cate_desc']; 
						 $mall_heading = $f['cate_name']; 
						 $mall_url = $f['meta_tag']; 
					   }
					  if($f['cate_id']=='99'){
						  $hotel_dis = $f['cate_desc']; 
						$hotel_heading = $f['cate_name']; 
						$hotel_url = $f['meta_tag']; 
					  }
				      if($f['cate_id']=='82'){
						 $resto_dis = $f['cate_desc'];
                         $resto_heading = $f['cate_name'];				 
                         $resto_url = $f['meta_tag']; 						 
					  }
					  if($f['cate_id']=='87'){
						 $attr_dis = $f['cate_desc']; 
						 $attr_heading = $f['cate_name']; 
						 $attr_url = $f['meta_tag']; 
					  } 
                  
				?>					
				        <div class="item">
		          			<div class="slide-item-div">
								<div class="slide-pro">
									<a href="<?php echo base_url();?>category/<?php echo $f['meta_tag'];?>"><img alt="uae category <?php echo $f['cate_name'];?>" src="<?php echo base_url();?>images/<?php echo $f['cate_image'];?>">
									</a>
									<!--<div class="flag-logo"><img src="images/slide-flag.jpg"></div>-->
								</div>
								<div class="pro-brands">
									<h2><img alt="uae small logo" src="<?php echo base_url();?>front_assets/images/small_logo.png">
									<span class="text-right"><a href="<?php echo base_url();?>category/<?php echo $f['meta_tag'];?>"><?php echo $f['cate_name'];?></a> </span>
									</h2>
								</div>
							</div>
				        </div>
					<?php } ?>	
			        </div>
			    </div>
			</div>
		</div>

<section class="main-link-div">
	    <div class="container">
	        <div class="row">
	            <div class="f_middle">
	            	<div class="col-md-12 col-sm-12">
	            	<div class="main-head-pro">
	            		<h2><?php if(isset($home_content[0]['category_text'])) { echo $home_content[0]['category_text']; } ?></h2>
	            	</div>
	            	</div>
	                <div class="col-md-12 col-sm-12">
	                	<div class="f_heading">
						  <ul class="">
						   <?php $i = 1 ; foreach($categories as $cat) { ?>
							<li><a href="<?php echo base_url();?>category/<?php echo $cat['meta_tag']; ?>"> <?php echo $cat['cate_name']; ; ?></a></li>
						   <?php
							  if($i==10) {?>
							    
						   <?php } $i++; } ?>

						  </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<div class="main_content_three  <?php if($_SESSION['language_name']=='arabic' or $_SESSION['language_name'] =='Arabic' or $_SESSION['language_name'] =='ARABIC' ) { ?> arabic_top_four <?PHP } ?>">
  <div class="container-fluid">
    <div class="row animatedParent">
      <div class="main_content_the_o">
        <div class="top_text_head">
          <h2 class=" animated bounceInDown go">This week’s top</h2>
          <p class=" animated growIn slowest go">With so many awesome places, products and brands to choose from, we’ve filtered out the rest and left you with the best… </p>
        </div>
        <div class="grid">
          <div class="main_content_top_c">
            <figure class="effect-marley"> <img alt="top ten things to do in uae"  src="<?php echo base_url()?>front_assets/images/shutterstock_147123398.jpg" />
              <figcaption>
                <h2>
                  <?php  if(isset($home_content[0]['region'])) {  echo $home_content[0]['region'];} ?>
                  <span> <?php echo $hotel_heading; ?> </span> </h2>
                <p> <span class="main_4_cate">
                  <?php 
			echo  $hotel_dis;
				?>
                  </span><br>
                  <a href="<?php echo base_url().'category/'.$hotel_url;?>" class="four_readmore">
                  <?php  if(isset($home_content[0]['readmore'])) {  echo $home_content[0]['readmore'];} ?>
                  </a></p>
              </figcaption>
            </figure>
          </div>
          <div class="main_content_top_c">
            <figure class="effect-marley"> <img alt="uae top 10" src="<?php echo base_url()?>front_assets/images/shutterstock_192391052.jpg" />
              <figcaption>
                <h2>
                  <?php  if(isset($home_content[0]['region'])) {  echo $home_content[0]['region'];} ?>
                  <span>
                  <?php   echo $mall_heading; ?>
                  </span> </h2>
                <p><span class="main_4_cate">
                  <?php 
			echo $mall_dis;
				?>
                  </span> <br>
                  <a href="<?php echo base_url().'category/'.$mall_url;?>" class="four_readmore">
                  <?php  if(isset($home_content[0]['readmore'])) {  echo $home_content[0]['readmore'];} ?>
                  </a></p>
              </figcaption>
            </figure>
          </div>
          <div class="main_content_top_c">
            <figure class="effect-marley"> <img alt="uae top attractions" src="<?php echo base_url()?>front_assets/images/shutterstock_328584395.jpg" />
              <figcaption>
                <h2>
                  <?php  if(isset($home_content[0]['region'])) {  echo $home_content[0]['region'];} ?>
                  <span>
                  <?php   echo $resto_heading; ?>
                  </span> </h2>
                <p><span class="main_4_cate">
                  <?php 
			     echo  $resto_dis ;
				?>
                  </span><br>
                  <a href="<?php echo base_url().'category/'.$resto_url;?>" class="four_readmore">
                  <?php  if(isset($home_content[0]['readmore'])) {  echo $home_content[0]['readmore'];} ?>
                  </a></p>
              </figcaption>
            </figure>
          </div>
          <div class="main_content_top_c">
            <figure class="effect-marley"> <img alt="10 places to visit in uae" src="<?php echo base_url()?>front_assets/images/listingimg.jpg" />
              <figcaption>
                <h2>
                  <?php  if(isset($home_content[0]['region'])) {  echo $home_content[0]['region'];} ?>
                  <span>
                  <?php   echo $featur_listings[0]['pro_title']; ?>
                  </span> 
				  </h2>
                <p><span class="main_4_cate">
                  <?php 
			       echo substr($featur_listings[0]['pro_desc'],0,200);

				   ?> 
				 
                  </span> <br>
                  <a href="<?php echo base_url().'listings/aldar-properties/'. $featur_listings[0]['meta_tag'];?>" class="four_readmore">
                  <?php  if(isset($home_content[0]['readmore'])) {  echo $home_content[0]['readmore'];} ?>
                  </a></p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="main_content_four animatedParent">
  <div class="container">
    <div class="row">
      <div class="testimonials  <?php if($_SESSION['language_name']=='arabic' or $_SESSION['language_name'] =='Arabic' or $_SESSION['language_name'] =='ARABIC' ) { ?> arabic_testimonials <?PHP } ?>">
        <h2>
          <?php  if(isset($home_content[0]['testi_title'])) {  echo $home_content[0]['testi_title']; } ?>
        </h2>
        <div id="myCarousel1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <?php 
			 
			 $i=0; foreach($testimonial as $t) { ?>
            <div class="item <?php if($i==0) { ?> active <?php } ?>"> 
              
              <!--<img src="<?php echo base_url();?>/images/testimonial/<?php echo $t['testi_image']; ?>">--> 
              
              <span> <?php echo $t['test_desc'];?> </span> <strong> <?php echo $t['testi_name'];?> </strong> </div>
            <?php $i++ ;} ?>
          </div>
          <ol class="carousel-indicators">
            <?php 
		   	$i=0; foreach($testimonial as $t) { ?>
            <li data-target="#myCarousel1" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0) { ?>active <?php } ?>"></li>
            <?php $i++ ;} ?>
          </ol>
        </div>
        <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
    </div>
  </div>
</div>
<div class="main_content_five  <?php if($_SESSION['language_name']=='arabic' or $_SESSION['language_name'] =='Arabic' or $_SESSION['language_name'] =='ARABIC' ) { ?> arabic_five_s <?PHP } ?>">
  <div class="container">
    <div class="row animatedParent">
      <div class="main_blog animated fadeInLeft" data-id='1'>
        <h2 class="animated fadeInLeftBig go">
          <?php  if(isset($home_content[0]['blog_title'])) {  echo $home_content[0]['blog_title']; } ?>
        </h2>
        <span  class="blog_he animated fadeInLeftBig slowest go">
        <?php if(isset($home_content[0]['blog_dis'])) { echo $home_content[0]['blog_dis']; } ?>
        </span>
        <div class="main_bl_sec animated fadeInRightBig slowest go">
          
		   <?php   $this->load->view('wp_blog'); ?>
       
        </div>
      </div>
    </div>
  </div>
</div>
<div class="other_link">
  <div class="other_link_head">
    <div class="container">
      <h2>
        <?php if(isset($home_content[0]['visit_title'])) { echo $home_content[0]['visit_title']; } ?>
      </h2>
    </div>
  </div>
  <div class="other_link_cont">
    <div class="container">
      <div class="row">
        <div class="other_link_main">
          <div class="col-md-6">
            <div   class="effects">
              <div class="other_link_main_left"> <a href="http://usat10.com/" class="hvr-pulse" target="_blank"><img alt="top 10 things to do in uae"  src="<?php echo base_url();?>images/usa_logo.png" class="like_other"/><br />
                </a> </div>
            </div>
          </div>
          <div class="col-md-6">
            <div   class="effects">
              <div class="other_link_main_left"> <a href="http://ukt10.com/" class="hvr-pulse" target="_blank"><img alt="top 10 places to visit in uae" src="<?php echo base_url();?>images/logo_uk.png"  class="like_other"/><br />
                </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php /*?><div class="modal fade" style="z-index:10000"  id="myModal" role="dialog">
  <div class="modal-dialog mega_cont"> 
    <!-- Modal content-->
    <div class="modal-content mega_cont">
      <div class="modal-header mega_cont">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div  class="modal-body mega_cont"> <span class="popup_logo"> <a href="#"><img alt="uae mega contest" src="<?php echo $logo; ?>"></a> </span>
        <h2 id="thx">MEGA-CONTEST</h2>
        <P id="testttt" class="click_here_sec" > Win a FREE Night Stay at your Favourite Hotel <br>
        
        
		<a href="<?php echo base_url();?>offer"> Click here </a></p>
      
      </div>
    </div>
  </div>
</div><?php */?>

 <div class="modal fade" style="z-index:10000"  id="myModal" role="dialog">
  <div class="modal-dialog mega_cont"> 
  
    <div class="modal-content mega_cont">
      <div class="modal-header mega_cont">
        <button type="button" class="close" style="color: #191818;" data-dismiss="modal">&times;</button>
       
      </div>
      <div  class="modal-body mega_cont">
      
      	<div class="on-first-pop">
         
          
            <a href="<?php echo base_url('listings/Offers/ih-insure-and-win');?>"><img alt="" src="<?php echo base_url();?>images/screnimg_n.jpg"  class="like_other"/>
            
            	<!-- <span><em>Showcase</em>  your Brand</span>
                <p>Fill the form for assessment.</p> -->
            </a>
            
        </div>  
        
		      <a class="mega_cont_link" href="<?php echo base_url();?>listings/Offers/ih-insure-and-win"> Click here </a> 
      
      </div>
    </div>
  </div>
</div> 

<script>
   $(document).ready(function(){
         //$('#myModal').modal('show'); 
       
     setTimeout(function(){ redirect() }, 3000);
 
	 var Link = document.createElement('link'); Link.rel = 'stylesheet'; Link.href = 'https://fonts.googleapis.com/css?family=Arimo'; 
	 var Link1 = document.createElement('link'); Link.rel = 'stylesheet'; Link.href = 'https://fonts.googleapis.com/css?family=Righteous1'; 
	 var Link2 = document.createElement('link'); Link.rel = 'stylesheet'; Link.href = 'https://fonts.googleapis.com/css?family=Raleway2'; 
	 var Link3 = document.createElement('link'); Link.rel = 'stylesheet'; Link.href = '<?php echo base_url();?>front_assets/css/font-awesome.css'; 
	 
	 var Head = document.getElementsByTagName('head')[0]; Head.parentNode.insertBefore(Link, Head); 
	 Head.parentNode.insertBefore(Link1, Head);
	 Head.parentNode.insertBefore(Link2, Head);
	 Head.parentNode.insertBefore(Link3, Head);
	 
    });

	
	function redirect() {
	 $('.main_banner').css('display','block');
	 
	}
</script> 
<script src="<?php echo base_url();?>front_assets/js/owl.carousel.min.js" ></script> 
<script>
	$(document).ready(function() {
      var owl = $("#owl-demo");
      owl.owlCarousel({        
        itemsCustom : [
          [0, 1],
          [450, 2],
          [600, 2],
          [700, 3],
          [1000, 4],
          [1200, 5],
          [1400, 5],
          [1600, 5]
        ],
        navigation : true,
        pagination : true
      });
    });
</script>
<script>

$("#slide").click(function() {
    $('html,body').animate({
        scrollTop: $(".main_content_one").offset().top},
        2000);
});

</script> 
 
         
<script>
$(document).ready(function() {
	$('body').css('overflow','auto');
	$('body').css('overflow-x','hidden');
	$('#myModal').css('overflow','hidden');      
});    
</script>         
<?php $this->load->view('tamplate/footer'); ?>