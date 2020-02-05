<div id="demo" class="carousel slide" data-ride="carousel">

    <ul class="carousel-indicators">

       <?php $i=0; foreach ($banners as $banners_val) {

        ?>

      <li data-target="#demo" data-slide-to="<?php  echo $i;?>"<?php if($i==0){?> class="active" <?php } $i++; ?>></li>
      <?php }?> 
      <!-- <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li> -->

    </ul>

    <div class="carousel-inner">
   <?php $i=0; foreach ($banners as $banners_val) {
        ?>
      <div class="carousel-item <?php if($i==0){?> active <?php } $i++; ?>">
        <img src="<?php echo base_url();?>images/banner/<?php echo $banners_val['slider_image']; ?>" alt="slider1"> 
      </div> 
      <?php }?>   
    </div>
        <div class="carousel-caption">
          <ul <?php if($i==0){ ?> class="wow slideInDown" data-wow-delay="1.1s" <?php } $i++; ?>>
            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> <span><?php  echo $banners_val['banner_contact'];?> </span></a></li>
           <li><a href="mailto:info@royalcg.com"  ><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>info@royalcg.com </span></a></li>
          </ul>
          <h3 <?php if($i==0){?>  class="wow slideInDown" data-wow-delay="0.2s" <?php } $i++; ?>><?php echo $banners_val['banner_title'];?></h3>
           <form action="" enctype="multipart/form-data" method="post" class="search-form" id="region_form">
      <!-- <form action="https://www.partner.viator.com/en/16964/travel-tips/Royal-Concierge/ttd" target="_blank" class="search-form"> -->
          <a href="https://www.partner.viator.com/en/16964/travel-tips/Royal-Concierge/ttd" target="_blank">

            <div class="form-group">              
                <input type="text"  class="form-control"  name="search" placeholder="Explore Tour And Travel">
                <i class="fa fa-map-marker" aria-hidden="true"></i>              
            </div></a>
            
             <button type="submit"  name="submit"  class="btn btn-primary"><a href="https://www.partner.viator.com/en/16964/travel-tips/Royal-Concierge/ttd" target="_blank">Search </a></button>
          
          </form>
          <div class="view-detail-btn">
              <a href="https://www.partner.viator.com/en/16964/travel-tips/Royal-Concierge/ttd" target="_blank">View Deals</a>
          </div>
          <div class="view-detail-down">
              <a href="https://www.partner.viator.com/en/16964/travel-tips/Royal-Concierge/ttd" target="_blank"> <img src="assets/images/down-arrow.png"></a>
          </div>
        </div> 
  </div>    

<div class="time-main-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="time-inner">
          <ul>
            <li class="wow fadeInUp" data-wow-delay="0.1s">
              <a href="#">
                  <div class="watch-img">
                     <table>
                        <tr>
                          <td style="text-align: center;"><canvas id="canvas_tt5d8c6b4ba0eaf" width="100" height="100"></canvas></td>
                        </tr>
                        <tr>
                          <td style="text-align: center; font-weight: bold">
                          <img src="assets/images/flag-1.png">
                          <a href="#" style="text-decoration: none" class="clock24" id="tz24-1569483595-c1136-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzZiNGJhMGVhZiJ9" title="current time in London" target="_blank" rel="nofollow">London</a>
                        </td>
                        </tr>
                     </table>
                      <script type="text/javascript" src="//w.24timezones.com/l.js" async></script>
                </div>
              </a>
            </li>
            <li class="wow fadeInUp" data-wow-delay="0.2s">
              <a href="#">                     
                  <div class="watch-img">
                    <table>
              <tr><td style="text-align: center;"><canvas id="canvas_tt5d8c6bc79e852" width="100" height="100"></canvas></td></tr>
              <tr><td style="text-align: center; font-weight: bold">
                  <img src="assets/images/flag-2.png"><a href="" style="text-decoration: none" class="clock24" id="tz24-1569483719-c1195-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzZiYzc5ZTg1MiJ9" title="Paris - Clock" target="_blank" rel="nofollow">Paris</a></td></tr>
          </table>       

                  </div>
                </a>
            </li>
            <li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#">
                  <div class="watch-img">
                        <table>
                           <tr><td style="text-align: center;"><canvas id="canvas_tt5d8c6e5ed97be" width="100" height="100"></canvas></td></tr>
                          <tr><td style="text-align: center; font-weight: bold">
                          <img src="assets/images/flag-3.png">
                          <a href="//24timezones.com/world_directory/time_in_abu_dhabi.php" style="text-decoration: none" class="clock24" id="tz24-1569484382-c12-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzZlNWVkOTdiZSJ9" title="time in Abu Dhabi" target="_blank" rel="nofollow">Abu Dhabi</a></td></tr>
                       </table>
                  </div>

                </a>

            </li>

            <li class="wow fadeInUp" data-wow-delay="0.4s"><a href="#">
             <div class="watch-img">
              <table>
              <tr><td style="text-align: center;"><canvas id="canvas_tt5d8c6e9cee6ae" width="100" height="100"></canvas></td></tr>
              <tr><td style="text-align: center; font-weight: bold">
                  <img src="assets/images/flag-5.png"> 
                <a href="//24timezones.com/world_directory/time_in_zurich.php" style="text-decoration: none" class="clock24" id="tz24-1569484444-c1268-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzZlOWNlZTZhZSJ9" title="Zurich local time" target="_blank" rel="nofollow">Zurich</a></td></tr>
          </table>

                  </div>

                </a>

            </li>

            <li class="wow fadeInUp" data-wow-delay="0.5s"><a href="#">

                  <div class="watch-img">

                  <table>
              <tr><td style="text-align: center;"><canvas id="canvas_tt5d8c6ede58c02" width="100" height="100"></canvas></td></tr>
              <tr><td style="text-align: center; font-weight: bold">
                <img src="assets/images/flag-4.png">
                <a href="//24timezones.com/world_directory/time_in_munich.php" style="text-decoration: none" class="clock24" id="tz24-1569484510-c1168-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzZlZGU1OGMwMiJ9" title="clock Munich" target="_blank" rel="nofollow">Munich</a></td></tr>
          </table>
                  </div>
                 <!--  <h4>Zurich</h4> -->

                </a>
            </li>
            <li class="wow fadeInUp" data-wow-delay="0.6s"><a href="#">

                  <div class="watch-img">
             <table>
              <tr><td style="text-align: center;"><canvas id="canvas_tt5d8c6f8c4c0b9" width="100" height="100"></canvas></td></tr>
              <tr><td style="text-align: center; font-weight: bold">
                <img src="assets/images/flag-6.png"><a href="//24timezones.com/world_directory/time_in_prague.php" style="text-decoration: none" class="clock24" id="tz24-1569484684-c1204-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzZmOGM0YzBiOSJ9" title="what time Prague" target="_blank" rel="nofollow">Prague</a></td></tr>
          </table>

                  </div>             

                 
                </a>

            </li>

            <li class="wow fadeInUp" data-wow-delay="0.7s"><a href="#">

                  <div class="watch-img">
               <table>
              <tr><td style="text-align: center;"><canvas id="canvas_tt5d8c6fdc020f1" width="100" height="100"></canvas></td></tr>
              <tr><td style="text-align: center; font-weight: bold">
                  <img src="assets/images/flag-1.png">
                <a href="//24timezones.com/world_directory/time_in_istanbul.php" style="text-decoration: none" class="clock24" id="tz24-1569484764-c1107-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzZmZGMwMjBmMSJ9" title="time zone Istanbul" target="_blank" rel="nofollow">Istanbul</a></td></tr>
          </table>
                  </div>
                </a>

            </li>

            <li class="wow fadeInUp" data-wow-delay="0.8s"><a href="#">

                  <div class="watch-img">

                    <table>
              <tr><td style="text-align: center;"><canvas id="canvas_tt5d8c7b2f62c14" width="100" height="100"></canvas></td></tr>
              <tr><td style="text-align: center; font-weight: bold"><img src="assets/images/flag-2.png"><a href="//24timezones.com/world_directory/time_in_vienna.php" style="text-decoration: none" class="clock24" id="tz24-1569487663-c1259-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzdiMmY2MmMxNCJ9" title="Vienna - Clock" target="_blank" rel="nofollow">Vienna</a></td></tr>
          </table>

                     

                  </div>

                  

                 <!--  <h4>Paris</h4> -->

                </a>

            </li>

            <li class="wow fadeInUp" data-wow-delay="0.9s">
              <a href="#">
              <div class="watch-img">
                <table>
                  <tr><td style="text-align: center;"><canvas id="canvas_tt5d8c7bd84b8b2" width="100" height="100"></canvas></td></tr>
                  <tr><td style="text-align: center; font-weight: bold">
                  <img src="assets/images/flag-3.png"><a href="//24timezones.com/world_directory/time_in_barcelona.php" style="text-decoration: none" class="clock24" id="tz24-1569487832-c131-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzdiZDg0YjhiMiJ9" title="actual time Barcelona" target="_blank" rel="nofollow">Barcelona</a></td></tr>
                </table>
              </div>
                </a>

            </li>

            <li class="wow fadeInUp" data-wow-delay="1s">
              <a href="#">
                <div class="watch-img">
                  <table>
                      <tr><td style="text-align: center;"><canvas id="canvas_tt5d8c7c1dd4f3e" width="100" height="100"></canvas></td></tr>
                      <tr><td style="text-align: center; font-weight: bold"> <img src="assets/images/flag-4.png"><a href="//24timezones.com/world_directory/time_in_riyadh.php" style="text-decoration: none" class="clock24" id="tz24-1569487901-c1214-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzdjMWRkNGYzZSJ9" title="Riyadh timezone" target="_blank" rel="nofollow">Riyadh</a></td></tr>
                  </table>         

                  </div>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="booking-main-sec">
  <div class="container">
  <div class="row">
  <div class="col-lg-8 col-md-8">
    <div class="booking-left wow fadeInLeft">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <ul class="nav nav-tabs list_mainTab">
              <li>
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#Hotels"><img src="assets/images/booking2.png">Hotels</a>
              </li>
              <li>
                <a class="nav-link" data-toggle="tab" href="#Cruise" onClick="window.location='#targetCruise'"><img src="assets/images/booking4.png">Cruise</a>
              </li>
              <li>
                <a class="nav-link" data-toggle="modal" data-target="#carmodal" href="#Cars"><img src="assets/images/booking3.png">Cars Rentals</a>
              </li>              
              <li>
                <a class="nav-link active" data-toggle="tab" href="#Flight" onClick="window.location='#targetjet'"><img src="assets/images/booking1.png"> Luxury Jets</a>
              </li>
              <li>
                <a class="nav-link"  href="details/35"><i class="fa fa-th-large" aria-hidden="true"></i>Tour</a>
              </li>
              <li>
                <a class="nav-link" href="details/21"><i class="fa fa-user-md" aria-hidden="true"></i> Medical Travel</a>
              </li>
              <li>
                <a class="nav-link" href="details/22"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Education</a>
              </li>
              <li>
                <a class="nav-link" href="details/39"><i class="fa fa-cutlery" aria-hidden="true"></i>Restaurants</a>
              </li>
              <li>
                <a class="nav-link" href="details/38"><i class="fa fa-user-secret" aria-hidden="true"></i>Security Guards</a>
              </li>
            </ul>
            <div class="btn_form">
              <a href="contact">Enquiry Form</a>
            </div>
           


          </div>
        </div>

        <div class="booking-main-sec-cont">
            <div class="row">
              <div class="col-lg-12 col-md-12">
              <div class="tab-content">           
              </div>
              </div>
            </div>
        </div>  
      </div>
    </div>
  </div>
   <div class="col-lg-4 col-md-4">
    <div class="booking-right wow fadeInRight">
      <div class="booking-right-img">
        <!-- <span class="center-som"><a href="<?php echo base_url(); ?>login"><i class="fa fa-heart" aria-hidden="true"></i></a></span> -->
        <a href="<?php echo base_url();?>carproduct/13">
        <img src="images/listing/hiltone">
        <div class="booking-right-img-cont">
          <h4>The Ritz London</h4>
        </div>
      </a>
         </div>
         <div class="booking-right-cont">
          <form action="" method="POST" id="personal-info" class="form-group">
          <ul>
            <li>
              <span class="left-s"><?php echo $hotel[0]['city']?></span>
             <span class="right-s"><i class="fa fa-map-marker" aria-hidden="true"></i></span>

            </li>
            <li>
              <span class="left-s">
                <ul class="list_rati">
                  <li><?php echo round($avg_rating[0]['AVGRATE'],1);?><i style="color: yellow;" class="fa fa-star"  aria-hidden="true"></i></li>
                 <!--  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li> -->
                </ul>
              </span>
             <span class="right-s"><?php echo $reviews[0]['reviews'] ?> Reviews</span>
              </li>             
                <li><span class="left-s"><?php echo $hotel[0]['product_pricing']?></span><span class="right-s"><button type="submit" id="submit-p" class="like-product"><i class="fa fa-heart" style="color: red;" aria-hidden="true"></i></button><span id="totalLikes"><?php echo $hotel[0]['product_likes']?></span></span>
                    </li>          
           
          </ul>  
          </form>  
         </div> 
         </div>
   </div>
  </div>
  </div>
</div>  
<div class="tour-main-sec">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <ul class="nav nav-tabs wow fadeInDown">

              <!-- <php foreach ($subcategories as $subcate) { ?>

                <li class="nav-item">

                <a class="nav-link" data-toggle="tab"  href="javascript:void(0);" onclick="product_data(<php echo $subcate['subcate_id']?>);"><php echo $subcate['meta_title'] ?></a>

              </li>

           <php   } ?> -->

               <div class="col-lg-12 col-md-12">

                <ul class="nav nav-tabs wow fadeInDown">
                  <?php
                    $i=1;
                    foreach ($car_tree as $category => $val) {
                      ?>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#jssor_<?php echo $i; ?>"><?php echo $category; ?></a>
                        </li>
                      <?php
                      $i++;
                    }
                    ?>
                   <?php /*foreach ($subdata as $data) { ?>
                 
                
                   <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="javascript:void(0);" onclick="product_car(<php echo $data->subcate_id;?>);"><php echo $data->meta_title;?></a>
                  </li>
                    <php  }*/ ?>
                </ul>
              </div>
            </ul>
          </div>
        </div>
        <div class="tour-main-sec-cont"  >




            <div class="col-md-12 col-md-offset-3">
              
              
              </div>











           <div class="row" id="product_cars">
              <div class="tab-content" >

                <?php
                  if (!empty($car_tree)) {
                    $z=1;
                    foreach ($car_tree as $category => $val) {
                      if($z == 1)
                      {
                        $class = " in active show";
                      } else {
                        $class = "";
                      }
                      ?>
                      <div id="jssor_<?php echo $z; ?>" class="tab-pane fade<?php echo $class; ?>">
                        <div class="carousel slide" id="myCarousel<?php echo $z; ?>">
                            <div class="carousel-inner">

                              <?php 
                              $y=1;
                              foreach ($val as $value) 
                              { 
                                if($y==1)
                                {
                                  $class="active";
                                } else {
                                  $class="";
                                }
                                ?>
                                <div class="item <?php echo $class; ?>">
                                  <div class="col-md-4">
                                    <a href="<?php echo base_url(); ?>carproduct/<?php echo $value['pro_id'] ?>">
                                      <img src="<?php echo base_url(); ?>images/listing/<?php echo $value['pro_thumb']?>" class="img-responsive">
                                      <?php echo $value['meta_title']; ?>
                                    </a>
                                  </div>
                                </div>

                                 <?php  
                                 $y++;
                               } ?>

                            
                            </div>
                            <a class="left carousel-control" href="#myCarousel<?php echo $z; ?>" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                            <a class="right carousel-control" href="#myCarousel<?php echo $z; ?>" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                        </div>
                      </div>
                      <?php
                      $z++;
                    }
                    
                  }
                  ?>

              

              </div>             
            </div>
        </div> 
      </div>
</div>



<div class="recommended-main-sec" id="targetrecommended">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="recommended-sec-inner wow fadeInDown">
              <h3>Recommended for you</h3>
            </div>
          </div>
        </div>
        <div class="destinations">
            <div class="row">
            <?php foreach ($cities as  $city) {      
                 ?> 
                 <div class="col-lg-3 col-md-3">
                <article class="one-fourth wow fadeInUp" data-wow-delay="0.1s">
                  <figure><a target="_blank" href="<?php echo $city['city_link']; ?>" title=""><img src="<?php echo base_url(); ?>images/<?php echo $city['city_image']; ?>" alt=""></a></figure>
                  <div class="details">
                    <a target="_blank" href="<?php echo $city['city_link']; ?>" title="View all" class="gradient-button">View all</a>
                    <h4><?php  echo$city['city_name']?></h4>   
                    <span class="count">Hotels <?php  echo$city['total_hotels']?></span>
                    <div class="ribbon">
                      <div class="half hotel">
                        <a href="<?php echo $city['city_link']; ?>" title="View all">
                          <span class="small">from</span>
                          <span class="price">$ <?php echo $city['from_price'];?></span>
                        </a>
                      </div>
                      <div class="half flight">
                        <a href="<?php echo $city['city_link']; ?>" title="View all">
                          <span class="small">from</span>
                          <span class="price">$  <?php echo $city['to_price'];?></span>
                        </a>
                      </div>
                    </div>                 
                  </div>
                </article>
              </div>
              <?php } ?>           
            </div>
        </div>
      </div>

</div>
<div class="cruise-main-sec jet-rent" id="targetjet">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="cruise-main-sec-inner wow fadeInDown">
              <h3>Luxury Jet Rentals</h3>
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active"  href="details/34">One-way</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="details/34">Rount Trip</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="details/34">Multi Leg</a>
                </li>
              </ul>
              <!-- Tab panes -->

              <div class="tab-content">
                <div id="menu1" class="tab-pane active">
                    <form action="#" class="cruise-form">
                      
                      <div class="cruise1 cruise-form-main">
                         <a href="details/34" target="_blank">
                        <input type="text" class="form-control" id="from" placeholder="From"></a>
                      </div>
                      <div class="cruise2 cruise-form-main"><a href="details/34">
                        <input type="text" class="form-control" id="to" placeholder="To"></a>
                      </div>
                      <div class="cruise3 cruise-form-main">
                       
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <a href="details/34">
                        <input type="text" class="form-control" id="date" placeholder="Mon, Aug 12 2019"></a>
                        
                      </div>                   
                     <div class="cruise4 cruise-form-main"> <a href="details/34">
                         <i class="fa fa-user" aria-hidden="true"></i>
                        <span>2</span></a>
                      </div>
                      <div class="cruise5 cruise-form-main">
                        <a href="details/34"> <i class="fa fa-briefcase" aria-hidden="true"></i></a>
                      </div>
                      <div class="cruise6 cruise-form-main">
                        <button type="submit" class="btn btn-primary"><a href="details/34">Search</a></button>
                      </div>        
                    </form>
                </div>              
              </div>
            </div>
          </div>
        </div>
      </div>
</div> 
<div class="cruise-sec jet-rent-img">
      <div class="container">
        <div class="row">
          <?php foreach ($luxury_jet as  $jet) {?>
       
          <div class="col-lg-4 col-md-4">
            <div class="cruise-sec-inner wow slideInLeft">
              <div class="cruise-sec-inner-img">
                <a href="<?php echo base_url(); ?>carproduct/<?php echo $jet->pro_id; ?>">
                  <img src="images/listing/<?php echo $jet->pro_thumb;?>">
                </a>
              </div>
              <div class="cruise-sec-cont">
                <h4><?php echo $jet->meta_title;?> </h4>
              </div>
            </div>
          </div>
            <?php } ?>
         
        </div>
      </div>
    </div> 
    <div class="cruise-main-sec cruise-rent" id="targetCruise">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="cruise-main-sec-inner wow fadeInDown">
              <h3>Destination Cruise Ship Bookings</h3>
              <ul class="nav nav-tabs" role="tablist">
                  <!--   <ul class="nav nav-tabs" role="tablist"> -->
                <li class="nav-item">
                  <a class="nav-link active"  href="<?php echo base_url(); ?>details/24">One-way</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>details/24">Rount Trip</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>details/24">Multi Leg</a>
                </li>
      <!--         </ul> -->
               <!--  <li class="nav-item">

                  <a class="nav-link active" data-toggle="tab" href="#menu11"  href="javascript:void(0);" onclick="product_data(16);">Cruise Ship Bookings</a>

                </li> -->

               <!--  <li class="nav-item">

                  <a class="nav-link" data-toggle="tab"  href="javascript:void(0);"></a>

                </li> -->

              <!--   <li class="nav-item">

                  <a class="nav-link" data-toggle="tab" href="javascript:void(0);">Security Gurd</a>

                </li> -->

              </ul>



              <!-- Tab panes -->

              <div class="tab-content">

                <div class="tab-pane active">
                   <form action="#" class="cruise-form">

                      <div class="cruise1 cruise-form-main">
                           <a href="<?php echo base_url(); ?>details/24">
                        <input type="text" class="form-control" id="from" placeholder="From">
                          </a>
                      </div>

                      <div class="cruise2 cruise-form-main">
                           <a href="<?php echo base_url(); ?>details/24">
                        <input type="text" class="form-control" id="to" placeholder="To">
                          </a>
                      </div>

                      <div class="cruise3 cruise-form-main">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <a href="<?php echo base_url(); ?>details/24">                         
                        <input type="text" class="form-control" id="date" placeholder="Mon, Aug 12 2019">
                        </a>
                      </div>

                      <div class="cruise4 cruise-form-main">
                       <a href="<?php echo base_url(); ?>details/24">
                         <i class="fa fa-user" aria-hidden="true"></i>

                        <span>2</span>
                      </a>
                      </div>

                      <div class="cruise5 cruise-form-main"> <a href="<?php echo base_url(); ?>details/24">
                        <i class="fa fa-briefcase" aria-hidden="true"></i></a>
                      </div>
                      <div class="cruise6 cruise-form-main">
                        <button type="submit" class="btn btn-primary"><a href="<?php echo base_url(); ?>details/24">Search</a></button>
                      </div>                   
                    </form>

                   <!-- <form action="<?php echo base_url().'datasearching';?>" enctype="multipart/form-data" method="post" class="search-form cruise-form" id="region_form">

                      <div class="cruise1 cruise-form-main">

                        <input type="text" class="form-control" name="pro_name" id="from" placeholder="Product Name">

                      </div>

                      <div class="cruise2 cruise-form-main">

                        <input type="text" name="country" class="form-control" id="to" placeholder="Country">

                      </div>

                      <div class="cruise3 cruise-form-main">
                       <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="text" name="city" class="form-control" id="date" placeholder="City">

                      </div>                   

                      <div class="cruise6 cruise-form-main">
                        <button type="submit" class="btn btn-primary">Search</button>
                      </div>                     
                    </form> -->
                </div>       
              </div>
            </div>
          </div>
        </div>
      </div>
</div>



<div class="cruise-sec cruise-rent-img">
      <div class="container">
        <div class="row"  >
          <?php  foreach ($ship as $ships)  { ?>
         <div class="col-lg-4 col-md-4" id="filter_cars">
            <div class="cruise-sec-inner wow slideInLeft">
              <a href="<?php echo base_url(); ?>carproduct/<?php echo $ships['pro_id'] ?>"><img src="<?php echo base_url(); ?>images/listing/<?php echo $ships['pro_thumb']?>"></a>
            </div>
          </div>
          <?php  } ?> 
        </div>
      </div>
</div> 
<div class="map-sec">
     <div class="container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="map-sec-inner wow fadeInUp">
            <ins class="bookingaff" data-aid="1875410" data-target_aid="1875410" data-prod="map" data-width="927" data-height="500" data-lang="ualng" data-dest_id="0" data-dest_type="landmark" data-latitude="24.453884" data-longitude="54.3773438" data-landmark_name="Abu Dhabi - United Arab Emirates" data-mwhsb="0" data-checkin="2019-10-01" data-checkout="2019-10-31" data-address="Abu Dhabi - United Arab Emirates">
    <!-- Anything inside will go away once widget is loaded. -->
            <a href="//www.booking.com?aid=1875410"></a>
          </ins>
          <script type="text/javascript">
              (function(d, sc, u) {
                var s = d.createElement(sc), p = d.getElementsByTagName(sc)[0];
                s.type = 'text/javascript';
                s.async = true;
                s.src = u + '?v=' + (+new Date());
                p.parentNode.insertBefore(s,p);
                })(document, 'script', '//aff.bstatic.com/static/affiliate_base/js/flexiproduct.js');
          </script>

            </div>

          </div>
             <div class="col-lg-4 col-md-4 col-sm-12">
                 <div class="map-sec-inner wow fadeInUp">
              <ins class="bookingaff" data-aid="1875416" data-target_aid="1875416" data-prod="dfl2" data-width="360" data-height="500" data-lang="en" data-df_num_properties="3">
    <!-- Anything inside will go away once widget is loaded. -->
        <a href="//www.booking.com?aid=1875416">Booking.com</a>
          </ins>
          <script type="text/javascript">
              (function(d, sc, u) {
                var s = d.createElement(sc), p = d.getElementsByTagName(sc)[0];
                s.type = 'text/javascript';
                s.async = true;
                s.src = u + '?v=' + (+new Date());
                p.parentNode.insertBefore(s,p);
                })(document, 'script', '//aff.bstatic.com/static/affiliate_base/js/flexiproduct.js');
          </script>
             </div>
           </div>
        </div>

      </div>

</div>    
</div>
<div class="news-letter">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="news-letter-inner wow fadeInDown">
              <h3>Subscribe Explore to get latest offers and deals today</h3>
              <form action="<?php echo base_url().'Subscribe';?>" enctype="multipart/form-data" method="post" class="news-form" id="">
             <!--  <form action="#" class=""> -->
                <div class="form-group">
                  <input type="email" class="form-control" id="Eemail" name="email" placeholder="Write your email" required="">
                </div>
                <button type="submit" class="btn btn-primary" data-toggle="modal" href="#ignismyModal"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
              </form>
            </div>
            </div>
        </div>
      </div>
</div>  
<style type="text/css">
  
  .thank-you-pop{
  width:100%;
  padding:20px;
  text-align:center;
}
.thank-you-pop img{
  width:76px;
  height:auto;
  margin:0 auto;
  display:block;
  margin-bottom:25px;
}

.thank-you-pop h1{
  font-size: 42px;
    margin-bottom: 25px;
  color:#5C5C5C;
}
.thank-you-pop p{
  font-size: 20px;
    margin-bottom: 27px;
  color:#5C5C5C;
}
.thank-you-pop h3.cupon-pop{
  font-size: 25px;
    margin-bottom: 40px;
  color:#222;
  display:inline-block;
  text-align:center;
  padding:10px 20px;
  border:2px dashed #222;
  clear:both;
  font-weight:normal;
}
.thank-you-pop h3.cupon-pop span{
  color:#03A9F4;
}
.thank-you-pop a{
  display: inline-block;
    margin: 0 auto;
    padding: 9px 20px;
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    background-color: #8BC34A;
    border-radius: 17px;
}
.thank-you-pop a i{
  margin-right:5px;
  color:#fff;
}
#ignismyModal .modal-header{
    border:0px;
}
</style>

 <div class="modal fade" id="ignismyModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                     </div>
          
                    <div class="modal-body">
                       
            <div class="thank-you-pop">
              <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
              <h1>Thank You!</h1>
              <p>Your submission is received and we will contact you soon</p>          
              
            </div>
                         
                    </div>
          
                </div>
            </div>
        </div>




    
    <script src="http://royalcg.com/demo/assets/js/jssor.slider.min.js"></script>    
    <script type="text/javascript">
        jssor_1_slider_init = function() {
            var jssor_1_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 3,
              $SlideDuration: 160,
              $SlideWidth: 380,
              $SlideSpacing: 3,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            var MAX_WIDTH = 1170;
            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;
                if (containerWidth) {
                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);            
        };
    </script>
    <script type="text/javascript">jssor_1_slider_init();</script>



