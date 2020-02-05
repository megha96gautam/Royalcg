
  
  <!--  <div class="main_banner"> <img src="images/main_banner.jpg"> </div>-->
  <div class="main_banner">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
	  
	   <?php $i = 0 ; foreach( $banners as $ban ) { ?>
	   <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" <?php if($i==0) { ?> class="active" <?php } ?> ></li>

	   <?php $i++ ;} ?>
      </ol>
      <div class="carousel-inner" role="listbox">
	  <?php $i = 0 ; foreach( $banners as $ban ) { ?>
        <div class="item <?php if($i==0) { ?> active <?php } ?>"> <img src="<?php echo base_url()?>images/banner/<?php echo $ban['slider_image'] ; ?>"> </div>

		<?php $i++ ; } ?>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="sr-only">Next</span> </a> </div>
</div>
<div class="main_content">
  <div class="container">
    <div class="row animatedParent">
      <div class="main_content_one  animated bounceInDown" data-id='1'>
        <h1 class="animated bounceInDown go">YOUR GUIDE TO ABU DHABI'S TOP BRANDS</h1>
        <p class=" animated growIn slowest go">Abu Dhabi Top 10 is a prestigious one-stop online guide to the finest local brands and elite service providers in key industries in Abu Dhabi
</p>
      </div>
    </div>
  </div>
</div>
<div class="main_content_two">
  <div class="row1 animatedParent">
    <div class="main_content_one">
      <h1 class=" animated bounceInDown go">Premium brands you can trust</h1>
	    <p class=" animated growIn slowest go">Abu Dhabi Top 10 only puts its stamp of approval on the most exclusive and superior local brands and companies in Abu Dhabi. You can trust Abu Dhabi Top 10 accredited members, because we only endorse the best in the business – like these fine establishments… </p>
      <div class="main_content_two_inner">
     
     
     <div id="myDiv"></div>
		
		<div id="dockMenuData" style="display: none;">
			
			
			<ul data-cat="Category one">
				
                     <?php 
				 
				$i = 1; foreach($fetures as $f ) { ?>
                <ul>
				
					<li data-type="none"></li>
					<li data-tooltip-text="">
						<p class="largeLabel">CUSTOM PRESS THUMBNAIL ACTION</p>
						<p class="smallLabel">When a thumbnail is pressed the grid can open a browser window or the lightbox.</p>
					</li>
					<li data-html-content="">
					<a href="javascript:void(0)"> <!--href="<?php echo base_url();?>abudhabi/listing/<?php echo base64_encode($f['cate_id']);?>"> -->
					   <div class="thumb1Div" style="background-image:url('<?php echo base_url();?>images/<?php echo $f['cate_image'];?>');" >
							<p class="thumb1P">
								<!--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at pulvinar arcu, quis lacinia massa. Sociis natoque est. <a href="http://www.google.com" target="_blank">Read more.</a>-->
							</p>
						</div> 
					</a>
					</li>
					
				</ul>
				
				<?php } ?>
			

                
			</ul>
            
            
			
			<!--<ul data-cat="Category two">
				<ul>
					<li data-type="none"></li>
					<li data-tooltip-text="">
						<p class="largeLabel">RESPONSIVE LAYOUT</p>
						<p class="smallLabel">The dockmenu has responsive layout.</p>
					</li>
					<li data-html-content="">
						<div class="thumb1Div">
							<p class="thumb1P">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at pulvinar arcu, quis lacinia massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut dictum, justo sed vestibulum tincidunt est. <a href="http://www.google.com" target="_blank">Read more.</a>
							</p>
						</div>
					</li>
				</ul>
			
				<ul>
					<li data-type="none"></li>
					<li data-tooltip-text="">
						<p class="largeLabel">CUSTOM PRESS THUMBNAIL ACTION</p>
						<p class="smallLabel">When a thumbnail is pressed the grid can open a browser window or the lightbox.</p>
					</li>
					<li data-html-content="">
						<div class="thumb2Div">
							<p class="thumb2P">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at pulvinar arcu, quis lacinia massa. Sociis natoque est. <a href="http://www.google.com" target="_blank">Read more.</a>
							</p>
						</div>
					</li>
				</ul>
				
				<ul>
					<li data-type="none"></li>
					<li data-tooltip-text="">
						<p class="largeLabel">SUPPORT FOR OLDER BROWSERS</p>
						<p class="smallLabel">On an older browser that doesn't have canvas support, the dockmenu can't display the reflection, the all other functionalities remain the same.</p>
					</li>
					<li data-html-content="">
						<div class="thumb3Div">
							<p class="thumb3P">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at pulvinar arcu, quis lacinia massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut dictum est. <a href="http://www.google.com" target="_blank">Read more.</a>
							</p>
						</div>
					</li>
				</ul>
			</ul>-->
			
		</div>
     
     
     
     
     
     
     
     
     
     
     
     
     
        <!--<div id="demo">
          <div id="owl-demo" class="owl-carousel">
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/hotels.jpg" />
                <div class="mask">
                  <h2>Hotels</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="inner_page_one.html" class="info">View Hotels</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/Restaurants.jpg" />
                <div class="mask">
                  <h2>Restaurants</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">View Restaurants</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/Spas.jpg" />
                <div class="mask">
                  <h2>Spas / Beauty / Salons</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">Spas / Beauty / Salons</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/Financial-Institutions.jpg" />
                <div class="mask">
                  <h2>Financial Institutions</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">Financial Institutions</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/Colleges.jpg" />
                <div class="mask">
                  <h2>Colleges</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">View Colleges</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/Universities.jpg" />
                <div class="mask">
                  <h2>Universities</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">View Universities</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/Airlines.jpg" />
                <div class="mask">
                  <h2>Airlines</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">View Airlines</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/Schools.jpg" />
                <div class="mask">
                  <h2>Schools</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">View Schools</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/mall.jpg" />
                <div class="mask">
                  <h2>Malls</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">View Malls</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/Commercial-Towers.jpg" />
                <div class="mask">
                  <h2>Commercial Towers</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">Commercial Towers</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/Residential-Towers.jpg" />
                <div class="mask">
                  <h2>Residential Towers</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">Residential Towers</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/Hospitals.jpg" />
                <div class="mask">
                  <h2>Hospitals</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">View Hospitals</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/Clinics.jpg" />
                <div class="mask">
                  <h2>Clinics</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">View Clinics</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/Attractions.jpg" />
                <div class="mask">
                  <h2>Attractions</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">View Attractions</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/Jewelry-Watches.jpg" />
                <div class="mask">
                  <h2>Jewelry / Watches</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">Jewelry / Watches</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/Water-Beverages.jpg" />
                <div class="mask">
                  <h2>Water & Beverages</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">Water & Beverages</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/Construction_Companies.jpg" />
                <div class="mask">
                  <h2>Construction Companies</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">Construction Companies</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/Insurance-Companies.jpg" />
                <div class="mask">
                  <h2>Insurance Companies</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">Insurance Companies</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/Free-Zones.jpg" />
                <div class="mask">
                  <h2>Free Zones</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">Free Zones</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="view view-tenth"> <img src="images/cate/Currency-Exchanges.jpg" />
                <div class="mask">
                  <h2>Currency Exchanges</h2>
                  <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings. </p>
                  <a href="#" class="info">Currency Exchanges</a> </div>
              </div>
            </div>
          </div>
        </div>-->
        
        
        
        
        
      </div>
    </div>
  </div>
</div>
<section class="module parallax parallax-2">
  <div class="container">
  <div class="pouplar_head">
    <h1>Popular Destinations </h1>
	<p>Every week we highlight the most popular products and places you've searched for on Abu Dhabi Top 10. This week's top searches include…
</p>
</div>
  </div>
</section>
<div class="main_content_three">
  <div class="container-fluid">
    <div class="row animatedParent">
      <div class="main_content_the_o">
	   <div class="top_text_head">
			<h1 class=" animated bounceInDown go">This week’s top</h1>
			<p class=" animated growIn slowest go">With so many awesome places, products and brands to choose from, we’ve filtered out the rest and left you with the best…

		</p>
		</div>
        <div class="grid">
          <div class="main_content_top_c">
            <figure class="effect-marley"> <img src="<?php echo base_url()?>front_assets/images/abu-dhabi_4_one.jpg" alt="img11"/>
              <figcaption>
                <h2>abu dhabi <span>HOTElS</span></h2>
                <p>We have an impressive list of luxurious five-star hotels where you will be treated like royalty.
<br>
				<a href="#" class="four_readmore">Read more</a></p>
                <a href="#">View more</a> </figcaption>
            </figure>
          </div>
          <div class="main_content_top_c">
            <figure class="effect-marley"> <img src="<?php echo base_url()?>front_assets/images/abu-dhabi_4_two.jpg" alt="img11"/>
              <figcaption>
                <h2>abu dhabi <span>MALL</span></h2>
<p>Abu Dhabi Top 10 Malls are the cream of the crop. These cherry picked malls house an enviable range of trendy... 
  <br>
                <a href="#" class="four_readmore">Read more</a></p>
                <a href="#">View more</a> </figcaption>
            </figure>
          </div>
          <div class="main_content_top_c">
            <figure class="effect-marley"> <img src="<?php echo base_url()?>front_assets/images/abu-dhabi_4_three.jpg" alt="img11"/>
              <figcaption>
                <h2>abu dhabi <span>Restaurants</span></h2>
                <p>Our selection of superb restaurants are globally acclaimed for their stylish, exclusive ambience... .
<br>
                <a href="#" class="four_readmore">Read more</a></p>
                <a href="#">View more</a> </figcaption>
            </figure>
          </div>
          <div class="main_content_top_c">
            <figure class="effect-marley"> <img src="<?php echo base_url()?>front_assets/images/abu-dhabi_4_four.jpg" alt="img11"/>
              <figcaption>
                <h2>abu dhabi <span>Famous / Main Attractions</span></h2>
                <p>Abu Dhabi's picturesque cultural landmarks and tourist attractions are a not-to-be-missed, must-see experience.

				<br>
                <a href="#" class="four_readmore">Read more</a></p>
                <a href="#">View more</a> </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="main_content_six">
  <div class="container">
    <div class="row animatedParent">
      <div class="main_Suggestions animated fadeInRight" data-id='1'>
        <h1 class="animated fadeInLeftBig go">Awesome Suggestions For You</h1>
        <p class="Suggestions_hed">Abu Dhabi is one of the safest and exotic holiday destinations in the world. However, the local laws and customs are very different to those of the western world. The following tips are designed to help you understand and adhere to the laws and customs while visiting Abu Dhabi . 
</p>
        <div class="sugg_top">
	    <?php foreach($suggation as $sug) {  ?>
          <div class="col-md-4">
		  
		   
            <div class="sugg_top_one">
              <div class="sugg_top_one_l"><i class="fa fa-leaf" aria-hidden="true"></i></div>
              <div class="sugg_top_one_r">
                <h2><?php echo $sug['sug_title'];?></h2>
                <p><?php echo $sug['sug_ldesc'];?></p>
              </div>
            </div>
          </div>
		  
		   <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="main_content_four animatedParent">
  <div class="container">
    <div class="row">
      <div class="testimonials">
        <h1>Rate Abu Dhabi  Top 10</h1>
       <div id="myCarousel1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
		  
		     <?php 
			 
			 $i=0; foreach($testimonial as $t) { ?>
            <div class="item <?php if($i==0) { ?> active <?php } ?>">

			<img src="<?php echo base_url();?>/images/testimonial/<?php echo $t['testi_image']; ?>">

			<span> 
			<?php echo $t['test_desc'];?>
			</span> 
			
			<strong>
			<?php echo $t['testi_name'];?>
			
			</strong> 
			
			</div>
			
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
<div class="main_content_five">
  <div class="container">
    <div class="row animatedParent">
      <div class="main_blog animated fadeInLeft" data-id='1'>
        <h1 class="animated fadeInLeftBig go">Straight from the Blog</h1>
        <span  class="blog_he animated fadeInLeftBig slowest go">Your bucket list isn't complete if it doesn't have Abu Dhabi on it. Here are some places you have to see and experience on your trip to Abu Dhabi.
</span>
        <div class="main_bl_sec animated fadeInRightBig slowest go">
			<?php foreach($blog as $b) { ?>
          <div class="col-md-4 col-sm-3 col-xs-4">
		  
            <div class="blog_one"> <img src="<?php echo base_url();?>images/blog/<?php echo $b['blog_image'];?>">
             
              <h3><?php echo $b['blog_title'];?></h3>
              <!--<p><i class="fa fa-clock-o" aria-hidden="true"></i> on 30 May,2016 <i class="fa fa-user" aria-hidden="true"></i> Posted By Admin</p>-->
              <span class="about_dub"> 
			  
			   <?php echo $b['blog_desc'];?>
			  
			   <br>
               <a href="#" class="blog_readmore">Read More</a>
             </span> 
			</div>
			
          </div>
		   <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>



