<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Concierge</title>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon">

<!-- Font awesome -->
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
<!-- Slick slider -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick.css">
<!-- Date Picker -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.css">
<!-- Gallery Lightbox -->
<link href="<?php echo base_url(); ?>assets/css/magnific-popup.css" rel="stylesheet">
<!-- Theme color -->
<link id="switcher" href="<?php echo base_url(); ?>assets/css/default-theme.css" rel="stylesheet">

<!-- Main style sheet -->
<link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/master.css" rel="stylesheet">
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
              <li class="nav-item"> <a class="nav-link active" href="<?php echo base_url(); ?>">Home</a> </li>
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
  
  <!--     <section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg" style="background-image: url(images/page-top-bg.jpg);">
      <div class="container text-white">
        <h2>Listings</h2>
      </div>
    </section> -->
  
  <div class="site-breadcrumb bottom_remove_pad">
    <div class="container">
      <div class="col-md-12">
      <a href=""><i class="fa fa-home"></i>Home</a> <span><i class="fa fa-angle-right"></i>Featured Listings</span> </div>
      <form action="<?php echo base_url();?>admin/manage_listing" method="post" >
      <div class="row">

      <div class="col-md-3">
       </div>
   
        <div class="col-md-9">
      <!--   <div class="row">
          <div class="col-lg-5 col-md-2">
            <div class="input-group">
               <select class="form-control" id="categoryid" name="categoryid"  onchange="subcategory_data(this.value);">
             
            <option>--Select Category--</option>
            <?php foreach ($category as $cate){ ?>
              <option value="<?php echo $cate['cate_id']; ?>"><?php echo $cate['meta_title'] ?></option>
              <?php }?>
          </select>
        </div>
        </div>
        <div class="col-lg-5 col-md-2">
            <div class="input-group" >
              <select class="form-control" name="subcategoryID" id="subcategoryID">
            <option>--Select Subcategory--</option>
           
          </select>
        </div>
        </div>
         <div class="col-lg-2 col-md-2">
           <input type="button" onclick="Filter_Go();" value="Go" class="form-control btn btn-info" />
             <input  type="submit" value="filter"  name="filter_submit" class="form-control btn btn-info"> 
        </div>
        </div> -->
       </div>
    </div>
    </form>   
  </div>
</div>

  <section class="page-section categories-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="island_filter_left">
            <div class="search-bar">
              <div class="exp_filter_three">
                <div class="main">
                  <div class="main-center">
                    <h5>Search</h5>
                    <form class="" method="post" action="#">
                      <div class="form-group pad_remove">
                        <label for="name" class="ma_remove_search">Destination/Property Name:</label>
                        <div class="input-group">
                          <input type="text" class="form-control" name="name" id="name"  placeholder="Washington"/>
                        </div>
                      </div>
                      <div class="form-group pad_remove">
                        <label for="email" class="ma_remove_search">Check in date</label>
                        <div class="input-group"> <span class="date_co_bac"> <i class="fa fa-calendar-plus-o" aria-hidden="true"></i></span>
                          <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                        </div>
                      </div>
                      <div class="form-group pad_remove">
                        <label for="username" class="ma_remove_search">Check out date</label>
                        <div class="input-group"> <span class="date_co_bac"> <i class="fa fa-calendar-plus-o" aria-hidden="true"></i></span>
                          <input class="form-control" type="date" value="2019-10-19" id="example-date-input">
                        </div>
                      </div>
                      <div class="form-group pad_remove select_pading">
                        <div class="input-group">
                          <select class="form-control" id="sel1">
                            <option>2 adults</option>
                            <option>3 adults</option>
                            <option>4 adults</option>
                            <option>5 adults</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group pad_remove sele_top_mar_serach">
                        <div class="input-group size_slect_box">
                          <select class="form-control" id="sel1">
                            <option>No Children</option>
                            <option>3 adults</option>
                            <option>4 adults</option>
                            <option>5 adults</option>
                          </select>
                        </div>
                        <div class="input-group size_slect_box-1">
                          <select class="form-control" id="sel1">
                            <option>1 Room</option>
                            <option>3 adults</option>
                            <option>4 adults</option>
                            <option>5 adults</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group pad_remove">
                        <div class="input-group ">
                          <div class="checkbox">
                            <input type="checkbox" value="" class="che_mark">
                            <span class="travlling">I am travlling for work <i class="fa fa-question-circle colo_cha_q" aria-hidden="true"></i></span> </div>
                        </div>
                      </div>
                      <button type="Search" class="btn_design pull-right" >Search</button>
                    </form>
                  </div>
                  <!--main-center"--> 
                </div>
                <!--main--> 
              </div>
            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">Experience Types</h4>
                </div>
                <div id="collapseTwo" class="panel-collapse">
                  <div class="body-cover">
                    <div class="panel-body checking" id="check1">
                      <div class="chckbox">
                        <p>
                          <input class="exp_type_check" name="type" type="checkbox" id="my-type_ids_1" value="2">
                          <label for="my-type_ids_1"><span></span> Activities </label>
                        </p>
                      </div>
                      <div class="chckbox">
                        <p>
                          <input class="exp_type_check" name="type" type="checkbox" id="my-type_ids_2" value="3">
                          <label for="my-type_ids_2"> <span></span>Culinary Experiences </label>
                        </p>
                      </div>
                      <div class="chckbox">
                        <p>
                          <input class="exp_type_check" name="type" type="checkbox" id="my-type_ids_3" value="5">
                          <label for="my-type_ids_3"> <span></span>Festivals &amp; Events </label>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel-group" id="" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading9">
                  <h4 class="panel-title"> Travelers </h4>
                </div>
                <div id="collapsemaxnof" class="panel-collapse">
                  <div class="panel-body">
                    <div class="select-lang">
                      <select name="maxnoofgeust" class="form-control nofgeust">
                        <option value="">Travelers</option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                      
                      
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading8">
                  <h4 class="panel-title"> Filter by: </h4>
                </div>
              </div>
            </div>

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div id="collapsecategory" class="panel-collapse">
                  <div class="body-cover">
                    <div class="panel-body checking" id="check12">
                      <h6 class="high_light">Location score</h6>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_1" value="1">
                          <label for="cat_my-type_ids_1"> <span></span> Adventure </label>
                        </p>
                        <span class="number_arting"><h6>144</h6></span>
                      </div>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_2" value="2">
                          <label for="cat_my-type_ids_2"> <span></span> Arts &amp; Design </label>
                        </p>
                        <span class="number_arting"><h6>150</h6></span>
                      </div>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_3" value="4">
                          <label for="cat_my-type_ids_3"> <span></span> Business </label>
                        </p>
                        <span class="number_arting"><h6>184</h6></span>
                      </div>
                      <div class="chckbox">
                        <p class="section_by_raing"> 
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_4" value="6">
                          <label for="cat_my-type_ids_4"> <span></span> Fashion </label>
                        </p>
                        <span class="number_arting"><h6>184</h6></span>
                      </div>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_5" value="8">
                          <label for="cat_my-type_ids_5"> <span></span> History </label>
                        </p>
                        <span class="number_arting"><h6>194</h6></span>
                      </div>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_6" value="9">
                          <label for="cat_my-type_ids_6"> <span></span> Lifestyle </label>
                        </p>
                        <span class="number_arting"><h6>188</h6></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div id="collapsecategory" class="panel-collapse">
                  <div class="body-cover">
                    <div class="panel-body checking" id="check12">
                      <h6 class="high_light">Star rating</h6>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_7" value="10">
                          <label for="cat_my-type_ids_7"> <span></span> Music </label>
                        </p>

                        <span class="number_arting"><h6>244</h6></span>
                      </div>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_8" value="11">
                          <label for="cat_my-type_ids_8"> <span></span> Nature </label>
                        </p>
                        <span class="number_arting"><h6>124</h6></span>
                      </div>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_9" value="12">
                          <label for="cat_my-type_ids_9"> <span></span> Nightlife </label>
                        </p>
                        <span class="number_arting"><h6>134</h6></span>
                      </div>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_10" value="13">
                          <label for="cat_my-type_ids_10"> <span></span> Shopping </label>
                        </p>
                        <span class="number_arting"><h6>224</h6></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div id="collapsecategory" class="panel-collapse">
                  <div class="body-cover">
                    <div class="panel-body checking" id="check12">
                      <h6 class="high_light">Distance from city centre</h6>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_11" value="14">
                          <label for="cat_my-type_ids_11"> <span></span> Sports &amp; Leisure </label>
                        </p>
                        <span class="number_arting"><h6>344</h6></span>
                      </div>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_12" value="15">
                          <label for="cat_my-type_ids_12"> <span></span> Wellness </label>
                        </p>
                        <span class="number_arting"><h6>254</h6></span>
                      </div>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_13" value="17">
                          <label for="cat_my-type_ids_13"> <span></span> Food Tours &amp; Tastings </label>
                        </p>
                        <span class="number_arting"><h6>174</h6></span>
                      </div>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_14" value="18">
                          <label for="cat_my-type_ids_14"> <span></span> Cooking Classes </label>
                        </p>
                        <span class="number_arting"><h6>194</h6></span>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

             <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div id="collapsecategory" class="panel-collapse">
                  <div class="body-cover">
                    <div class="panel-body checking" id="check12">
                      <h6 class="high_light">Fun things to do</h6>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_15" value="19">
                          <label for="cat_my-type_ids_15"> <span></span> Dining </label>
                        </p>
                        <span class="number_arting"><h6>155</h6></span>
                      </div>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_16" value="20">
                          <label for="cat_my-type_ids_16"> <span></span> Other </label>
                        </p>
                        <span class="number_arting"><h6>166</h6></span>
                      </div>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_16" value="20">
                          <label for="cat_my-type_ids_16"> <span></span> Other </label>
                        </p>
                        <span class="number_arting"><h6>194</h6></span>
                      </div>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_16" value="20">
                          <label for="cat_my-type_ids_16"> <span></span> Other </label>
                        </p>
                        <span class="number_arting"><h6>114</h6></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div id="collapsecategory" class="panel-collapse">
                  <div class="body-cover">
                    <div class="panel-body checking" id="check12">
                      <h6 class="high_light">24 hour reception</h6>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_16" value="20">
                          <label for="cat_my-type_ids_16"> <span></span> Other </label>
                        </p>
                        <span class="number_arting"><h6>125</h6></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div id="collapsecategory" class="panel-collapse">
                  <div class="body-cover">
                    <div class="panel-body checking" id="check12">
                      <h6 class="high_light">Property type</h6>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_16" value="20">
                          <label for="cat_my-type_ids_16"> <span></span> Other </label>
                        </p>
                        <span class="number_arting"><h6>134</h6></span>
                      </div>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_16" value="20">
                          <label for="cat_my-type_ids_16"> <span></span> Other </label>
                        </p>
                        <span class="number_arting"><h6>124</h6></span>
                      </div>
                      <div class="chckbox">
                        <p class="section_by_raing">
                          <input class="sel_category" name="type" type="checkbox" id="cat_my-type_ids_16" value="20">
                          <label for="cat_my-type_ids_16"> <span></span> Other </label>
                        </p>
                        <span class="number_arting"><h6>184</h6></span>
                      </div>
                    </div>
                  </div>
                </div>
                
                       
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-9">
          <div class="row">
    <?php
     if($searchingdata){

            if($searchingdata==array()){?>
                <h2>No Search Found</h2>
            <?php }else{ 

            	foreach ($searchingdata as $product){ ?>
            <div class="col-lg-12 col-md-12"> 
              <!-- feature -->
              <div class="feature-item">
                <div class="feature-pic set-bg" data-setbg="<?php echo base_url(); ?>images/listing/<?php echo $product['pro_thumb']; ?>" style="background-image: url(<?php echo base_url(); ?>images/listing/<?php echo $product['pro_thumb']; ?>);"> 
                  <!--  <div class="sale-notic">FOR SALE</div> --> 
                </div>
                <div class="feature-text">
                  <div class="feature-title">
                    <h5><?php echo $product['meta_title'] ?></h5>
                    <p><i class="fa fa-map-marker"></i><?php echo $product['meta_tag']  ?></p>
                  </div>
                  <div class="room-info-warp">
                    <div class="rating-n"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <span><?php echo $product['meta_tag']?></span>
                      <div class="most-pop"><i class="fa fa-trophy" aria-hidden="true"></i> 6th Most Popular 4-Star Hotel in Los Angeles</div>
                      <div class="review"> <span><b><?php echo $product['product_pricing'] ?></b></span> <span><strong>Excellent </strong>(1318 reviews)</span> </div>
                      <div class="servic-n"> <span>Restaurant</span> <span>Free Internet</span> <span>Free Parking</span> </div>
                    </div>
                  </div>
                </div>
                <div class="feature-price">
                  <div class="rating_no">
                  <div class="price-n prince-n1"> <span>Super good</span> </div>
                  <div class="break-fast break-fast-1"> <span>668 reviews</span> </div>
                  </div>
                  <div class="revie_raing">
                    <h6>2.8</h6>
                  </div>
                  <div class="price-n"> <span><del>$1,200</del></span> <span>$1,100</span> </div>
                  <div class="break-fast"> <span>Free breakfast</span> </div>
                  <form >
                    <div class="book-n"> 
                    <input type="hidden" name="pro_id" value="<?php echo $product['pro_id'] ?>">
                    <a href="<?php echo base_url();?>carproduct/<?php echo $product['pro_id']; ?>" class="room-price">View Details</a> 
                  </div>
                    </form>
                </div>
              </div>
            </div>
            <?php } } }else{ 
              if($searchingdata_ship==array()){
                ?>
                 <h2>No Search Found</h2>
                <?php
             
              
              foreach ($searchingdata_ship as $pr){?>

              <div class="col-lg-12 col-md-12"> 
              <!-- feature -->
              <div class="feature-item">
                <div class="feature-pic set-bg" data-setbg="<?php echo base_url(); ?>images/listing/<?php echo $pr['pro_thumb']; ?>" style="background-image: url(<?php echo base_url(); ?>images/listing/<?php echo $pr['pro_thumb']; ?>);"> 
                  <!--  <div class="sale-notic">FOR SALE</div> --> 
                </div>
                <div class="feature-text">
                  <div class="feature-title">
                    <h5><?php echo $pr['meta_title'] ?></h5>
                    <p><i class="fa fa-map-marker"></i><?php echo $pr['meta_tag']  ?></p>
                  </div>
                  <div class="room-info-warp">
                    <div class="rating-n"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <span><?php echo $pr['meta_tag']?></span>
                      <div class="most-pop"><i class="fa fa-trophy" aria-hidden="true"></i> 6th Most Popular 4-Star Hotel in Los Angeles</div>
                      <div class="review"> <span><b><?php echo $pr['product_pricing'] ?></b></span> <span><strong>Excellent </strong>(1318 reviews)</span> </div>
                      <div class="servic-n"> <span>Restaurant</span> <span>Free Internet</span> <span>Free Parking</span> </div>
                    </div>
                  </div>
                </div>
                <div class="feature-price">
                  <div class="rating_no">
                  <div class="price-n prince-n1"> <span>Super good</span> </div>
                  <div class="break-fast break-fast-1"> <span>668 reviews</span> </div>
                  </div>
                  <div class="revie_raing">
                    <h6>2.8</h6>
                  </div>
                  <div class="price-n"> <span><del>$1,200</del></span> <span>$1,100</span> </div>
                  <div class="break-fast"> <span>Free breakfast</span> </div>
                  <form >
                    <div class="book-n"> 
                    <input type="hidden" name="pro_id" value="<?php echo $pr['pro_id'] ?>">
                    <a href="<?php echo base_url();?>carproduct/<?php echo $pr['pro_id']; ?>" class="room-price">View Details</a> 
                  </div>
                    </form>
                </div>
              </div>
            </div>
           <?php } } }?>
           
          </div>
        </div>
      </div>
      <div class="site-pagination"> <span>1</span> <a href="#">2</a> <a href="#">3</a> <a href="#"><i class="fa fa-angle-right"></i></a> </div>
    </div>
  </section>
</div>
<!-- <div class="news-letter">
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
 -->
<!-- Start Footer -->
<footer id="footer">
  <div class="footer-top  wow fadeInDown">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12"> <a href="#"><img src="<?php echo base_url(); ?>assets/images/logo.png"></a> </div>
      </div>
    </div>
  </div>
  <div class="footer-middle  wow fadeInDown">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <h4>Contact Us</h4>
          <div class="footer-address">
            <p><i class="fa fa-map-marker" aria-hidden="true"></i><span>132, My Street, Kingston, New York 12401</span></p>
            <p><i class="fa fa-mobile" aria-hidden="true"></i><span><a href="tel:2701886026">270 - 188 - 6026</a></span></p>
            <p><i class="fa fa-envelope-o" aria-hidden="true"></i><span><a href="mailto:domain@expooler.com">domain@expooler.com</a></span></p>
          </div>
          <div class="social-links">
            <ul>
              <li> <a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
              <li> <a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
              <li> <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li> <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
              <li> <a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="row">
            <div class="col-lg-4 col-md-4">
              <h4>Book Now</h4>
              <ul>
                <li> <a href="#">Flight</a></li>
                <li> <a href="#">Tours</a></li>
                <li> <a href="#">Packages</a></li>
                <li> <a href="#">Transfer</a></li>
                <li> <a href="#">Car Rent</a></li>
                <li> <a href="#">Cruises</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-4">
              <h4>Exploore</h4>
              <ul>
                <li> <a href="#">Madrid Tour</a></li>
                <li> <a href="#">Stockholm City</a></li>
                <li> <a href="#">Roma City</a></li>
                <li> <a href="#">Shanghai City</a></li>
                <li> <a href="#">Tokyo City</a></li>
                <li> <a href="#">Paris City</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-4">
              <h4>Top Deals</h4>
              <ul>
                <li> <a href="#">Edemil HotelAQ</a></li>
                <li> <a href="#">Turhal Hotel</a></li>
                <li> <a href="#">Kadirly Hotel</a></li>
                <li> <a href="#">Sarina Hotel</a></li>
                <li> <a href="#">Amasya Hotel</a></li>
                <li> <a href="#">Matel Hotel</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <h4>Destinations </h4>
          <a href="#"> <img src="<?php echo base_url(); ?>assets/images/desti.jpg"></a> </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <p>Copyright @ 2019 Concierge, All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer --> 

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
            <div class="forget-text">
              <p>Enter your Phone Number below to send you OTP for reset your password.</p>
            </div>
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
            <div class="forget-text">
              <p>A verification code has been sent to your registered Phone Number, Please enter it below</p>
            </div>
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
                  <label class="control control--radio">
                  Male
                  <input type="radio" name="radio" checked="checked"/>
                  <div class="control__indicator"></div>
                  </label>
                  <label class="control control--radio">
                  Female
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
      <!--        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> --> 
      
    </div>
  </div>
</div>

<!-- jQuery library --> 
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script> 
<!-- Slick slider --> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slick.js"></script> 
<!-- Counter --> 
 <!--  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/boot/bootstrap.js"></script>  -->
<!-- Gallery Lightbox --> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script> 
<!-- Date Picker --> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script> 
<!-- Ajax contact form  --> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script> 

<!-- Custom js --> 
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script> 
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
  // subcategory
 function subcategory_data(category)
    {
      /* alert(category);*/
        var results= $.ajax({
        type: "POST",
        url: '<?php echo site_url('ajaxsub').'/';?>',
        data: {"category":category},
        dataType:"json",
        async: false
        }).responseText;
    
        $('#subcategoryID').html('');
        obj = JSON.parse(results);
         /*   alert(results);*/
        $('#subcategoryID').append('<option value="">Select Subcategory</option>');
        if(obj.subcate != '')
        {
            $.each(obj.subcate, function(k, v) { 
                var rowHtml='<option value="'+v.subcate_id+'">'+v.meta_title+'</option>';
                $('#subcategoryID').append(rowHtml);
            });
        }   
    }

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

         function Filter_Go()
    {
        var category = $('#categoryid').val();
        var subcategory = $('#subcategoryID').val();
        alert(subcategory);
         window.location.replace("<?php echo base_url();?>product_list/"+category+"/"+subcategory);
       /* window.location.replace("<?php echo base_url();?>/dashboard/tasks/"+department+"/"+employ+"/"+status+"/"+date);*/
    }
  </script>
</body>
</html>