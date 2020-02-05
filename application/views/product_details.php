<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Concierge</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" type="image/x-icon">

    <!-- Font awesome -->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-datepicker.css">   
     <!-- Gallery Lightbox -->
    <link href="<?php echo base_url();?>assets/css/magnific-popup.css" rel="stylesheet"> 
    <!-- Theme color -->
    <link id="switcher" href="<?php echo base_url();?>assets/css/default-theme.css" rel="stylesheet">     
    <!-- Main style sheet -->
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet">    
    <link href="<?php echo base_url();?>assets/css/master.css" rel="stylesheet"> 
    <!-- <link href="css/master1.css" rel="stylesheet">  -->   
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
   
  </head>


  <body>

  <div class="top-menu inner-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12  wow fadeInDown">
          <nav class="navbar navbar-expand-sm bg-dark navbar-dark"> <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/images/logo.png"></a>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-expanded="false"> <span class="navbar-toggler-icon"></span> </button>
          <div class="navbar-collapse collapse" id="collapsibleNavbar" style="">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"> <a class="nav-link active" href="<?php echo base_url();?>">Home</a> </li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>about-us">About us</a> </li>
             <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Services
        </a>
        <ul class="dropdown-menu Drop_down_services_menu" aria-labelledby="navbarDropdownMenuLink">
        <!--  <?php print_r($categories); ?> -->
          <?php foreach ($categories as $cate) {
           ?>
             <li><a class="dropdown-item" href="<?php echo base_url();?>product_list/<?php echo $cate['cate_id']?>"><?php echo $cate['meta_title']?></a></li>
           <?php
          } ?>
        
         
        </ul>
        </li>    
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>contact">Contact</a> </li>
            </ul>
          </div>
        </nav>
        </div>
      </div>
    </div>
  </div>

	<div class="main-section">

<!-- 		<section class="page-top-section set-bg" data-setbg="images/page-top-bg.jpg" style="background-image: url(images/page-top-bg.jpg);">
			<div class="container text-white">
				<h2>Property Detail</h2>
			</div>
		</section> -->

		<div class="site-breadcrumb">
			<div class="container">
				<a href=""><i class="fa fa-home"></i>Home</a>
				<span><i class="fa fa-angle-right"></i>Featured Listings</span>
			</div>
		</div>
		
		<section class="page-section">
		<div class="container">
			<div class="row">
        		<div class="col-lg-7 col-md-7 single-list-page" id="slider">
		            <div id="myCarousel" class="carousel slide">
		                <!-- main slider carousel items -->
		                <div class="carousel-inner">
		                    <div class="active carousel-item" data-slide-number="0">
		                        <img src="<?php echo base_url();?>assets/images/single-list-slider/one.jpg" class="img-fluid">
		                    </div>
		                    <div class="carousel-item" data-slide-number="1">
		                        <img src="<?php echo base_url();?>assets/images/single-list-slider/two.jpg" class="img-fluid">
		                    </div>
		                    <div class="carousel-item" data-slide-number="2">
		                        <img src="<?php echo base_url();?>assets/images/single-list-slider/three.jpg" class="img-fluid">
		                    </div>
		                    <div class="carousel-item" data-slide-number="3">
		                        <img src="<?php echo base_url();?>assets/images/single-list-slider/four.jpg" class="img-fluid">
		                    </div>
		                    <div class="carousel-item" data-slide-number="4">
		                        <img src="<?php echo base_url();?>assets/images/single-list-slider/five.jpg" class="img-fluid">
		                    </div>
		                    <div class="carousel-item" data-slide-number="5">
		                        <img src="<?php echo base_url();?>assets/images/single-list-slider/six.jpg" class="img-fluid">
		                    </div>
		                    <div class="carousel-item" data-slide-number="6">
		                        <img src="<?php echo base_url();?>assets/images/single-list-slider/seven.jpg" class="img-fluid">
		                    </div>
		                    <div class="carousel-item" data-slide-number="7">
		                        <img src="<?php echo base_url();?>assets/images/single-list-slider/eight.jpg" class="img-fluid">
		                    </div>

		                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
		                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		                        <span class="sr-only">Previous</span>
		                    </a>
		                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
		                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
		                        <span class="sr-only">Next</span>
		                    </a>

		                </div>
		                <!-- main slider carousel nav controls -->


		                <ul class="carousel-indicators list-inline mx-auto border px-2">
		                    <li class="list-inline-item active">
		                        <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
		                            <img src="<?php echo base_url();?>assets/images/single-list-slider/t-one.jpg" class="img-fluid">
		                        </a>
		                    </li>
		                    <li class="list-inline-item">
		                        <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
		                            <img src="<?php echo base_url();?>assets/images/single-list-slider/t-two.jpg" class="img-fluid">
		                        </a>
		                    </li>
		                    <li class="list-inline-item">
		                        <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
		                            <img src="<?php echo base_url();?>assets/images/single-list-slider/t-three.jpg" class="img-fluid">
		                        </a>
		                    </li>
		                    <li class="list-inline-item">
		                        <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
		                            <img src="<?php echo base_url();?>assets/images/single-list-slider/t-four.jpg" class="img-fluid">
		                        </a>
		                    </li>
		                    <li class="list-inline-item">
		                        <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
		                            <img src="<?php echo base_url();?>assets/images/single-list-slider/t-five.jpg" class="img-fluid">
		                        </a>
		                    </li>
		                    <li class="list-inline-item">
		                        <a id="carousel-selector-5" data-slide-to="5" data-target="#myCarousel">
		                            <img src="<?php echo base_url();?>assets/images/single-list-slider/t-six.jpg" class="img-fluid">
		                        </a>
		                    </li>
		                    <li class="list-inline-item">
		                        <a id="carousel-selector-6" data-slide-to="6" data-target="#myCarousel">
		                            <img src="<?php echo base_url();?>assets/images/single-list-slider/t-seven.jpg" class="img-fluid">
		                        </a>
		                    </li>
		                    <li class="list-inline-item">
		                        <a id="carousel-selector-7" data-slide-to="7" data-target="#myCarousel">
		                            <img src="<?php echo base_url();?>assets/images/single-list-slider/t-eight.jpg" class="img-fluid">
		                        </a>
		                    </li>
		                </ul>
		            </div>
				</div>
				<!-- sidebar -->
				<div class="col-lg-5 col-md-5 col-md-5 sidebar">
					<div class="sidebar-right">
						<h2>TREEBO TRYST RITU IVY</h2>
						<p class="hotel-address">Kasba, Kolkata</p>
						<div class="certi-n">
							<a href="#">Premium</a><a href="#" class="active">Treebo Certified</a>
							
						</div>
						<div class="rating-n">
		                    <i class="fa fa-star" aria-hidden="true"></i>
		                    <i class="fa fa-star" aria-hidden="true"></i>
		                    <i class="fa fa-star" aria-hidden="true"></i>
		                    <i class="fa fa-star" aria-hidden="true"></i>
		                    <i class="fa fa-star" aria-hidden="true"></i>
		                    <span> 90 reviews</span>
   	                    </div>
   	                    <div class="rank-n">
   	                    	<p>Ranked 42 of 451 hotels in Kolkata (Calcutta)</p>
   	                    </div>
   	                    <div class="peice-r">
   	                    	<h3 class="hotel-price">
   	                    		<span>$ 3205<sub class="refund">Refundable</sub></span>
   	                    	</h3>
   	                    	<p class="text-2">Tax incl. price for 1 night</p>
   	                    	<div class="hd-hotel__coupon"><hr><span class="text-1 hd-hotel__coupon__code">"BOOKTODAY"</span> Coupon Code Pre-applied</div>
   	                    	<div class="book-n">
		                      <a href="#" class="room-price">book now</a>
		                   </div>
   	                    </div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="single-list-page-detail">
						<ul class="hd-details">
							<li><a href="#TABS_ROOM_TYPES"><span>Room types</span></a></li>
							<li><a href="#TABS_REVIEWS"><span>Rating &amp; Reviews</span></a></li>
							<li><a href="#TABS_ABOUT_HOTEL"><span>About Hotel</span></a></li>
							<li><a href="#TABS_FACILITIES"><span>Facilities</span></a></li>
							<li><a href="#TABS_POLICIES"><span>Policies</span></a></li>
							<li><a href="#TABS_NEARBY_PLACES"><span>Nearby Places</span></a></li>
						</ul>

						<div class="single-page-detail" id="TABS_ROOM_TYPES">
							<h2>ROOM TYPES</h2>
							<div class="page-details">
								<h3>Deluxe Room</h3>
								<p><span class="wp-size"></i>210 Sqft</span>
									<span class="wp-desc-items">3 Guests (Max 3 Adults)</span></p>
								<div class="img-inner">
									<div class="row">
										<div class="col-lg-3 col-md-3">
											<img src="<?php echo base_url();?>assets/images/map1.jpg">
										</div>
										<div class="col-lg-3 col-md-3">
											<img src="<?php echo base_url();?>assets/images/map2.jpg">
										</div>
										<div class="col-lg-3 col-md-3">
											<img src="<?php echo base_url();?>assets/images/map3.jpg">
										</div>
										<div class="col-lg-3 col-md-3">
											<img src="<?php echo base_url();?>assets/images/map4.jpg">
										</div>
									</div>
								</div>
								<div class="cont-inner">
									<div class="row">
										<div class="col-lg-4 col-md-4">
											<div class="cont-inner1">
												<h5>Refundable</h5>
												<h4>$ 3205</h4>
												<p>Inclusive of all taxes</p>
											</div>
										</div>
										<div class="col-lg-5 col-md-5">
											<div class="cont-inner2">
												<ul>
													<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Pay now or later at hotel.</li>
													<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Zero cancellation fee if cancelled 24 hours prior to checkin.</li>
												</ul>
											</div>
										</div>
										<div class="col-lg-3 col-md-3">
											<div class="cont-inner3">
												<div class="book-n">
							                      <a href="#" class="room-price">book now</a>
							                   </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="single-page-detail" id="TABS_REVIEWS">
							<h2>TRIPADVISOR RATINGS & REVIEWS</h2>
							<div class="page-details">
								<div class="all-rating">
									<div class="all-rating-left">
										<h3>OVERALL RATINGS</h3>
										<p><span class="tab-review">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</span>
											<span class="wp-desc-items"> &nbsp; 4.5 / 5</span></p>
										</div>
										<div class="all-rating-right">
											
											<ul><li class="overall-ratings__rating-item text-2 row row--middle"><div class="col-1">5</div><div class="col-6"><div class="percentage"><div class="percentage__fill" style="width: 71%;"></div></div></div><div class="col-5">35 Reviews</div></li><li class="overall-ratings__rating-item text-2 row row--middle"><div class="col-1">4</div><div class="col-6"><div class="percentage"><div class="percentage__fill" style="width: 18%;"></div></div></div><div class="col-5">9 Reviews</div></li><li class="overall-ratings__rating-item text-2 row row--middle"><div class="col-1">3</div><div class="col-6"><div class="percentage"><div class="percentage__fill" style="width: 2%;"></div></div></div><div class="col-5">1 Review</div></li><li class="overall-ratings__rating-item text-2 row row--middle"><div class="col-1">2</div><div class="col-6"><div class="percentage"><div class="percentage__fill" style="width: 8%;"></div></div></div><div class="col-5">4 Reviews</div></li><li class="overall-ratings__rating-item text-2 row row--middle"><div class="col-1">1</div><div class="col-6"><div class="percentage"><div class="percentage__fill" style="width: 0%;"></div></div></div><div class="col-5">0 Reviews</div></li></ul>
										</div>
									</div>
								<div class="review-inner">
									<div class="row">
										<div class="col-lg-3 col-md-3">
											<div class="review-inner-img">
												<img src="<?php echo base_url();?>assets/images/user.png">
											</div>
										</div>
										<div class="col-lg-9 col-md-9">
											<div class="review-inner-cont">
												<h4>Clean and comfort</h4>
												<span class="tab-review">
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star-half-o" aria-hidden="true"></i>
												</span>
												<p>Everything fine. I will recommended to everyone. Only problem was water locked in bath room. Food was excellent, very clean and helpful staff. Location is perfect, can't be better than this. Great value for money.</p>
											</div>
										</div>
									</div>
								</div>

								<div class="review-inner">
									<div class="row">
										<div class="col-lg-3 col-md-3">
											<div class="review-inner-img">
												<img src="<?php echo base_url();?>assets/images/user.png">
											</div>
										</div>
										<div class="col-lg-9 col-md-9">
											<div class="review-inner-cont">
												<h4>Good Services</h4>
												<span class="tab-review">
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
												</span>
												<p>Everything fine. I will recommended to everyone. Only problem was water locked in bath room. Food was excellent, very clean and helpful staff. Location is perfect, can't be better than this. Great value for money.</p>
											</div>
										</div>
									</div>
								</div>

								<div class="review-inner">
									<div class="row">
										<div class="col-lg-3 col-md-3">
											<div class="review-inner-img">
												<img src="<?php echo base_url();?>assets/images/user.png">
											</div>
										</div>
										<div class="col-lg-9 col-md-9">
											<div class="review-inner-cont">
												<h4>Very good hotel at reasonable prices</h4>
												<span class="tab-review">
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star-half-o" aria-hidden="true"></i>
												</span>
												<p>Good hotel at very competitive prices. Location is well connected to market place near city centre. The staff and services are prompt and supporting. Rooms are very neat n clean. If booked online, you have to make choices of AP/MAP Plans beforehand. Hotel doesnot modify it at later stages.</p>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>


						<div class="single-page-detail" id="TABS_ABOUT_HOTEL">
							<h2>ABOUT HOTEL</h2>
							<div class="page-details">
								<h3>Address</h3>
								<p><span>79 Hurley Ave, Kingston,New York 12401</span></p>
								<div class="hotel-inner">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11873.263829202333!2d-74.01860332225296!3d41.92906158148756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89dd0f7e361cfebd%3A0xea4938be261ef8f5!2sDaily%20Freeman!5e0!3m2!1sen!2sin!4v1566906240116!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
								</div>									
							</div>
						</div>

						<div class="single-page-detail" id="TABS_FACILITIES">
							<h2>FACILITIES</h2>
							<div class="page-details">		
								<div class="facilities-inner">
									<div class="row">
										<div class="col-lg-4 col-md-4">
											<div class="cont-inner2">
												<h5>In room facilities</h5>
												<ul>
													<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Ac Room</li>
													<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Cable/DTH</li>
													<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Coffee Table</li>
													<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Complimentary Toiletries</li>
												</ul>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="cont-inner2">
												<h5>General</h5>
												<ul>
													<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Elevator</li>
													<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Parking</li>
													<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Wheel Chair</li>
												</ul>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="cont-inner2">
												<h5>Personal Services</h5>
												<ul>
													<li><i class="fa fa-check-square-o" aria-hidden="true"></i>24 hour front desk</li>
													<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Card Payment Accepted</li>
													<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Guest Laundry</li>
													<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Ironing Board</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="single-page-detail" id="TABS_POLICIES">
							<h2>POLICIES</h2>
							<div class="page-details">		
								<div class="policies-inner">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="cont-policies">
												<h5>Child Reservation Policy</h5>
												<p>A maximum of 1 child upto an age of 8 years and an extra infant upto an age of 2 years is allowed free of charge, subject to room occupancy capacity. Breakfast will be included in stay but no extra bed or mattress will be provided. Extra person charges are applicable for anyone above 8 years of age. Extra person charges are also applicable for extra kids during check-in.</p>
												<h5>Identification Card</h5>
												<p>All adults must carry one of these photo ID cards at the time of check-in: Driving License, Voters Card, Passport, Ration Card or Aadhar Card. PAN Cards </p>
												
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>

						<div class="single-page-detail" id="TABS_NEARBY_PLACES">
							<h2>NEARBY PLACES AND LANDMARKS</h2>
							<div class="page-details">		
								<div class="places-inner">
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="cont-inner2">
												<h5>Nearby Malls & Restaurants</h5>
												<ul>
													<li>Mirch Masala Restaurant And Bar <span>1.6 Km</span></li>
													<li>Smoke Shack Restaurant <span>2.2 Km</span></li>
													<li>Arsalan Restaurant <span>3.8 Km</span></li>
													<li>Nu Wan Li Restaurant <span>8.3 Km</span></li>
												</ul>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="cont-inner2">
												<h5>Closest Airport, Railway Station & Bus Stand</h5>
												<ul>
													<li>Chinar Park Bus Stop <span>0.9 Km</span></li>
													<li>Dum Dum Bus Stop <span>2.5 Km</span></li>
													<li>Dum Dum Cantt <span>3.1 Km</span></li>
													<li>Railway Station <span>4.0 Km</span></li>
												</ul>
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
	</section>

	</div>

	<div class="news-letter">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="news-letter-inner wow fadeInDown">
              <h3>Subscribe Exploore to get latest offers and deals today</h3>
              <form action="#" class="news-form">
                <div class="form-group">
                  <input type="text" class="form-control" id="news" placeholder="Write your email">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
              </form>

            </div>
            
          </div>
        </div>
      </div>
</div>  



    <!-- The Modal -->
	<div class="modal account-form" id="login">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Enquiries from</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>
	      <!-- Modal body -->
	      <div class="modal-body">
	        <form class="acunt-form">
	            <div class="row">
	              <div class="col-md-12">
	                <div class="form-group">                       
	                  <input type="text" class="form-control" placeholder="Name">
	                </div>
	              </div>
	              <div class="col-md-12">
	                <div class="form-group">                        
	                  <input type="email" class="form-control" placeholder="Email">
	                </div>
	              </div>
                <div class="col-md-12">
                  <div class="form-group">                        
                    <input type="text" class="form-control" placeholder="Contact">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">                        
                    <select class="form-control" id="sel1">
                      <option>Category</option>
                      <option>Category 1</option>
                      <option>Category 2</option>
                      <option>Category 3</option>
                    </select>
                  </div>
                </div>                
                <div class="col-md-12">
                  <div class="form-group">                        
                    <textarea class="form-control" id="message" placeholder="Message"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group submit-f"> 
	                   <button type="submit" class="submit-btn">Submit</button>
                  </div>
                </div>
	            </div>
	        </form>
	      </div>

	    </div>
	  </div>
	</div>



    <!-- The Modal -->
	<div class="modal account-form" id="forgetPass">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Forgot your password ?</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>
	      <!-- Modal body -->
	      <div class="modal-body">
	        <form class="acunt-form ">
	            <div class="row">
	            	<div class="forget-text"><p>Enter your Phone Number below to send you OTP for reset your password.</p></div>
	              <div class="col-md-12">
	                <div class="form-group">                       
	                  <input type="email" class="form-control" placeholder="Phone Number">
	                  <div class="frm-icon"><i class="fa fa-user"></i></div>
	                </div>
	              </div>
	              <button type="submit" class="submit-btn" data-toggle="modal" data-target="#verifyOTP">Forgot Password</button>
	            </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>

	    <!-- The Modal -->
	<div class="modal account-form" id="verifyOTP">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Verify your Account</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>
	      <!-- Modal body -->
	      <div class="modal-body">
	        <form class="acunt-form ">
	            <div class="row">
	            	<div class="forget-text"><p>A verification code has been sent to your registered Phone Number, Please enter it below</p></div>
	              <div class="col-md-12">
	                <div class="form-group">                       
	                  <input type="email" class="form-control" placeholder="Enter your OTP">
	                  <div class="frm-icon"><i class="fa fa-lock"></i></div>
	                </div>
	              </div>
	              <div class="forget-pass"><a href="#">Resent OPT</a></div>
	              <button type="submit" class="submit-btn">Submit</button>
	            </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>

	  <!-- The Modal -->
	<div class="modal account-form" id="signup">
	  <div class="modal-dialog">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">User <span>Sign in</span></h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	      <!-- Modal body -->
	      <div class="modal-body">
	        <form class="acunt-form ">
                    <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">                       
                          <input type="text" class="form-control" placeholder="Full name">
                          <div class="frm-icon"><i class="fa fa-user"></i></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">                       
                          <input type="email" class="form-control" placeholder="Email">
                          <div class="frm-icon"><i class="fa fa-envelope"></i></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">                       
                          <input type="text" class="form-control" placeholder="Mobile number">
                          <div class="frm-icon"><i class="fa fa-phone"></i></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">                       
                          <input type="text" class="form-control" placeholder="Country Code">
                          <div class="frm-icon"><i class="fa fa-globe"></i></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">                       
                          <input type="text" class="form-control" placeholder="Nationality">
                          <div class="frm-icon"><i class="fa fa-flag"></i></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">                       
                          <input type="text" class="form-control" id="datepicker1" placeholder="Date of Birth">
                          <div class="frm-icon"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">                       
                          <input type="text" class="form-control" id="datepicker2" placeholder="Anniversary Date">
                          <div class="frm-icon"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">                       
                          <input type="text" class="form-control" placeholder="City">
                          <div class="frm-icon"><i class="fa fa-building-o"></i></div>
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="form-group">                       
                          <input type="Password" class="form-control" placeholder="Password">
                          <div class="frm-icon"><i class="fa fa-key"></i></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">                       
                          <input type="Password" class="form-control" placeholder="Confirm Password">
                          <div class="frm-icon"><i class="fa fa-key"></i></div>
                        </div>
                    </div>
                     <div class="col-md-12">
	                    <div class="form-group">                       
	                      <textarea class="form-control" placeholder="Information"></textarea>
	                      <div class="frm-icon textarea-icon"><i class="fa fa-pencil"></i></div>
	                    </div>
	                  </div>
                    <div class="col-md-6">
                        <div class="form-group extra-field">                       
                            <div class="control-group">
							    <Label>Gender</Label>
							    <label class="control control--radio">Male 
							      <input type="radio" name="radio" checked="checked"/>
							      <div class="control__indicator"></div>
							    </label>
							    <label class="control control--radio">Female
							      <input type="radio" name="radio"/>
							      <div class="control__indicator"></div>
							    </label>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group extra-field">    
                          <Label>Upload Photo</Label>                   
                          <input type="file" class="form-control photo-upld">
                        </div>
                    </div>

	                 
                  <div class="col-md-12 signup-foot">
                      <button type="submit" class="submit-btn">Sign In</button>
                  </div>

                    </div>
                  </form>
	      </div>

	      <!-- Modal footer -->
<!-- 	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	      </div> -->

	    </div>
	  </div>
	</div>

  
  <!-- jQuery library -->
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="<?php echo base_url();?>assets/text/javascript" src="js/slick.js"></script>
  <!-- Counter -->
<!--   <script type="text/javascript" src="js/simple-animated-counter.js"></script> -->
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script> 
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/app.js"></script>
 
  <!-- Custom js -->
  <script src="<?php echo base_url();?>assets/js/custom.js"></script>   
  <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>

  <script type="text/javascript">
  	$(function() {
  return $(".modal").on("show.bs.modal", function() {
    var curModal;
    curModal = this;
    $(".modal").each(function() {
      if (this !== curModal) {
        $(this).modal("hide");
      }
    });
  });
});
  </script>
  <script type="text/javascript">
      jQuery(window).scroll(function() {   
      if (jQuery(window).scrollTop() >=75) { 
      if(jQuery('.top-menu').hasClass( "stricy" ))
      {
        //jQuery('#header').removeClass("fixed-theme");
      }
      else
      {
        jQuery('.top-menu').addClass("stricy");
      }
      }
    else{
      jQuery('.top-menu').removeClass("stricy");
    }
   });
  </script>

  <script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1500, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });


});
</script>


  </body>
</html>