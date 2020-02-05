<div id="demo" class="carousel slide home-slider" data-ride="carousel">

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
          <?php
          $user_name=str_replace(" ","%20",$banners_val['city_name']);
          $city= $banners_val['city_name'];
          
             $url = "http://api.weatherstack.com/current?access_key=e17919b18ad114e4be90288ad1f2f73a&query=$user_name";
                $json=file_get_contents($url);
                $data=json_decode($json,true);
           ?>
        <ul class="list_namWeather">
          <li>
            <span><?php echo $data['current']['temperature']; ?>°C</span>  
          </li>
          <li><span><?php echo $data['location']['localtime']; ?></span></li> 
          <li><span><?php echo  $data['location']['name']; ?></span></li>          
        </ul>

        <img src="<?php echo base_url();?>images/banner/<?php echo $banners_val['slider_image']; ?>" alt="slider1">
        <div class="carousel-caption">




          <?php if($_SESSION['Language']== 'russian'){
             ?>
          <h3 <?php if($i==0){?>  class="wow slideInDown" data-wow-delay="0.2s" <?php } $i++; ?>><?php echo $banners_val['russian_title'];?></h3> 
          <?php }elseif ($_SESSION['Language']== 'arabic') { ?>
           <h3 <?php if($i==0){?>  class="wow slideInDown" data-wow-delay="0.2s" <?php } $i++; ?>><?php echo $banners_val['arabic_title'];?></h3> 
        <?php   }elseif ($_SESSION['Language']== 'chiness') { ?>
           <h3 <?php if($i==0){?>  class="wow slideInDown" data-wow-delay="0.2s" <?php } $i++; ?>><?php echo $banners_val['chiness_title'];?></h3> 
        <?php   } else{
          ?>
           <h3 <?php if($i==0){?>  class="wow slideInDown" data-wow-delay="0.2s" <?php } $i++; ?>><?php echo $banners_val['banner_title'];?></h3>
          <?php } ?>       
        </div>
      </div> 
      <?php }?>   
    </div>
        <div class="carousel-caption">
          <ul <?php if($i==0){ ?> class="wow slideInDown" data-wow-delay="1.1s" <?php } $i++; ?>>
            <li><a href="tel:<?php echo $footer->mobile;  ?>"><i class="fa fa-phone" aria-hidden="true"></i> <span><!-- <?php //echo $footer->mobile;  ?> --> </span></a></li>
            <li><a href="mailto:info@royalcg.com"  ><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span><!-- <?php //echo $footer->email;  ?> --></span></a></li>
          </ul>          
          <form action="" enctype="multipart/form-data" method="post" class="search-form" id="region_form">
      <!-- <form action="https://www.partner.viator.com/en/16964/travel-tips/Royal-Concierge/ttd" target="_blank" class="search-form"> -->
          <a href="https://www.partner.viator.com/en/16964/travel-tips/Royal-Concierge/ttd" target="_blank">

            <div class="form-group">              
                <input type="text"  class="form-control"  name="search" placeholder="  <?php $Tour =$this->db->get_where('tbl_website_translate', array('lang_id' =>34))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $Tour->arabic!="") { 
                          echo ucfirst($Tour->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $Tour->russian!="") { 
                         echo ucfirst($Tour->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $Tour->chiness!="") { 
                            echo ucfirst($Tour->chiness);
                          }else{ 
                          echo ucfirst($Tour->title);
                        } 
                ?>">
                <i class="fa fa-map-marker" aria-hidden="true"></i>              
            </div></a>
            
             <button type="submit"  name="submit"  class="btn btn-primary"><a href="https://www.partner.viator.com/en/16964/travel-tips/Royal-Concierge/ttd" target="_blank">
                 <?php $serch =$this->db->get_where('tbl_website_translate', array('lang_id' =>6))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $serch->arabic!="") { 
                          echo ucfirst($serch->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $serch->russian!="") { 
                         echo ucfirst($serch->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $serch->chiness!="") { 
                            echo ucfirst($serch->chiness);
                          }else{ 
                          echo ucfirst($serch->title);
                        } 
                ?>
              </a></button>
          
          </form>
          <div class="view-detail-btn">
              <a href="https://www.partner.viator.com/en/16964/travel-tips/Royal-Concierge/ttd" target="_blank">
                  <?php $view =$this->db->get_where('tbl_website_translate', array('lang_id' =>5))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $view->arabic!="") { 
                          echo ucfirst($view->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $view->russian!="") { 
                         echo ucfirst($view->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $view->chiness!="") { 
                            echo ucfirst($view->chiness);
                          }else{ 
                          echo ucfirst($view->title);
                        } 
                ?>
             </a>
          </div>
          <div class="view-detail-down">
              <a href="https://www.partner.viator.com/en/16964/travel-tips/Royal-Concierge/ttd" target="_blank"> <img src="assets/images/down-arrow.png"></a>
          </div>
        </div> 
  </div>    

<?php

// Function to get the client IP address
function getLocationInfoByIp(){
   $client  = @$_SERVER['HTTP_CLIENT_IP'];
   $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
   $remote  = @$_SERVER['REMOTE_ADDR'];
   $result  = array('country'=>'', 'city'=>'');
   if(filter_var($client, FILTER_VALIDATE_IP)){
       $ip = $client;
   }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
       $ip = $forward;
   }else{
       $ip = $remote;
   }
   $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
   if($ip_data && $ip_data->geoplugin_countryName != null){
    //$result['all']=$ip_data;
       $result['country'] = $ip_data->geoplugin_countryCode;
       $result['city'] = $ip_data->geoplugin_city;
       $result['currency'] = $ip_data->geoplugin_currencyCode;
   }
   return $result;
}

$ip=getLocationInfoByIp();
//print_r($ip);
$res_cur=$ip['currency'];

//echo ip($ip, "Country"); // United States
?>
<!-- <div class="time-main-sec">
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
                          <a href="javascript:void(0)" onclick="return false;" style="text-decoration: none" class="clock24" id="tz24-1569483595-c1136-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzZiNGJhMGVhZiJ9" title="current time in London"  rel="nofollow">
                           <?php if ($_SESSION['Language']== 'arabic') { ?>
                         لندن
                          <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                          伦敦
                          <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                           Лондон
                          <?php }else{ ?>
                           London
                         <?php } ?></a>
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
                  <img src="assets/images/flag-2.png"><a href="javascript:void(0)" style="text-decoration: none" class="clock24" id="tz24-1569483719-c1195-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzZiYzc5ZTg1MiJ9" title="Paris - Clock"  rel="nofollow"> <?php if ($_SESSION['Language']== 'arabic') { ?>
                       باريس
                          <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                           巴黎
                          <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                           Париж
                          <?php }else{ ?>
                           Paris
                         <?php } ?></a></td></tr>
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
                          <a href="javascript:void(0)" style="text-decoration: none" class="clock24" id="tz24-1569484382-c12-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzZlNWVkOTdiZSJ9" title="time in Abu Dhabi" rel="nofollow">
                         <?php if ($_SESSION['Language']== 'arabic') { ?>
                             ابو ظبي
                          <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                           阿布扎比
                          <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                            Абу Даби
                          <?php }else{ ?>
                          Abu Dhabi
                         <?php } ?></a></td></tr>
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
                <a href="javascript:void(0)" style="text-decoration: none" class="clock24" id="tz24-1569484444-c1268-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzZlOWNlZTZhZSJ9" title="Zurich local time"  rel="nofollow">
                     <?php if ($_SESSION['Language']== 'arabic') { ?>
                           زيوريخ
                          <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                          苏黎世
                          <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                           Цюрих
                          <?php }else{ ?>
                         Zurich
                         <?php } ?>
                </a></td></tr>
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
                <a href="javascript:void(0)" style="text-decoration: none" class="clock24" id="tz24-1569484510-c1168-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzZlZGU1OGMwMiJ9" title="clock Munich"  rel="nofollow">
                    <?php if ($_SESSION['Language']== 'arabic') { ?>
                           ميونيخ
                          <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                          慕尼黑
                          <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                           Цюрих
                          <?php }else{ ?>
                         Мюнхен
                         <?php } ?>
                </a></td></tr>
          </table>
                  </div>
                

                </a>
            </li>
            <li class="wow fadeInUp" data-wow-delay="0.6s"><a href="#">

                  <div class="watch-img">
             <table>
              <tr><td style="text-align: center;"><canvas id="canvas_tt5d8c6f8c4c0b9" width="100" height="100"></canvas></td></tr>
              <tr><td style="text-align: center; font-weight: bold">
                <img src="assets/images/flag-6.png"><a href="javascript:void(0)" style="text-decoration: none" class="clock24" id="tz24-1569484684-c1204-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzZmOGM0YzBiOSJ9" title="what time Prague"  rel="nofollow"> 
                     <?php if ($_SESSION['Language']== 'arabic') { ?>
                            براغ
                          <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                          布拉格
                          <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                           Прага
                          <?php }else{ ?>
                         Prague
                    <?php } ?></a></td></tr>
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
                <a href="javascript:void(0)" style="text-decoration: none" class="clock24" id="tz24-1569484764-c1107-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzZmZGMwMjBmMSJ9" title="time zone Istanbul"  rel="nofollow">
                  <?php if ($_SESSION['Language']== 'arabic') { ?>
                            اسطنبول
                          <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                          伊斯坦堡
                          <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                           Стамбул
                          <?php }else{ ?>
                         Istanbul
                    <?php } ?></a></td></tr>
          </table>
                  </div>
                </a>

            </li>

            <li class="wow fadeInUp" data-wow-delay="0.8s"><a href="#">

                  <div class="watch-img">

                    <table>
              <tr><td style="text-align: center;"><canvas id="canvas_tt5d8c7b2f62c14" width="100" height="100"></canvas></td></tr>
              <tr><td style="text-align: center; font-weight: bold"><img src="assets/images/flag-2.png"><a href="javascript:void(0)" style="text-decoration: none" class="clock24" id="tz24-1569487663-c1259-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzdiMmY2MmMxNCJ9" title="Vienna - Clock"  rel="nofollow">
                    <?php if ($_SESSION['Language']== 'arabic') { ?>
                            فيينا
                          <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                          维也纳
                          <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                           Вена
                          <?php }else{ ?>
                         Vienna
                    <?php } ?></a></td></tr>
          </table>

                     

                  </div>

                  

                

                </a>

            </li>

            <li class="wow fadeInUp" data-wow-delay="0.9s">
              <a href="#">
              <div class="watch-img">
                <table>
                  <tr><td style="text-align: center;"><canvas id="canvas_tt5d8c7bd84b8b2" width="100" height="100"></canvas></td></tr>
                  <tr><td style="text-align: center; font-weight: bold">
                  <img src="assets/images/flag-3.png"><a href="javascript:void(0)" style="text-decoration: none" class="clock24" id="tz24-1569487832-c131-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzdiZDg0YjhiMiJ9" title="actual time Barcelona"  rel="nofollow">
                     <?php if ($_SESSION['Language']== 'arabic') { ?>
                      برشلونة
                    <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                    巴塞罗纳
                    <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                  Барселона
                    <?php }else{ ?>
                   Barcelona
                    <?php } ?>
                  </a></td></tr>
                </table>
              </div>
                </a>

            </li>

            <li class="wow fadeInUp" data-wow-delay="1s">
              <a href="#">
                <div class="watch-img">
                  <table>
                      <tr><td style="text-align: center;"><canvas id="canvas_tt5d8c7c1dd4f3e" width="100" height="100"></canvas></td></tr>
                      <tr><td style="text-align: center; font-weight: bold"> <img src="assets/images/flag-4.png"><a href="javascript:void(0)" style="text-decoration: none" class="clock24" id="tz24-1569487901-c1214-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IkZGRkZGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ4YzdjMWRkNGYzZSJ9" title="Riyadh timezone"  rel="nofollow">
                        <?php if ($_SESSION['Language']== 'arabic') { ?>
                       مدينة الرياض     
                    <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                      利雅得
                    <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                   Рияд
                    <?php }else{ ?>
                    Riyadh
                    <?php } ?>
                      </a></td></tr>
                  </table>         

                  </div>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div> -->
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
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#Hotels">
                   <?php if ($_SESSION['Language']== 'arabic') { ?>
                        لفنادق <img style="float:right" src="assets/images/booking2.png">
                    <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                     <img  src="assets/images/booking2.png"> 旅馆
                    <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                     <img  src="assets/images/booking2.png"> отели
                    <?php }else{ ?>
                      <img  src="assets/images/booking2.png"> Hotels
                    <?php } ?>
              </a>
              </li>
              <li>
                <a class="nav-link" data-toggle="tab" href="#Cruise" onClick="window.location='#targetCruise'">
                  
                   <?php if ($_SESSION['Language']== 'arabic') { ?>
                       رحلة بحرية  <img style="float:right" src="assets/images/booking4.png">
                    <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                     <img  src="assets/images/booking4.png"> 巡航
                    <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                     <img  src="assets/images/booking4.png"> Морское путешествие
                    <?php }else{ ?>
                     <img src="assets/images/booking4.png">Cruise
                    <?php } ?>
                    </a>
              </li>
              <li>
                <a class="nav-link" data-toggle="modal" data-target="#carmodal" href="#Cars">
                     <?php if ($_SESSION['Language']== 'arabic') { ?>
                       رتأجير السيارات  <img style="float:right" src="assets/images/booking3.png">
                    <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                     <img src="assets/images/booking3.png"> 租车
                    <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                     <img src="assets/images/booking3.png"> Прокат автомобилей
                    <?php }else{ ?>
                     <img src="assets/images/booking3.png">Cars Rentals
                    <?php } ?>
                </a>

              </li>              
              <li>
                <a class="nav-link active" data-toggle="tab" href="#Flight" onClick="window.location='#targetjet'">
                   <?php if ($_SESSION['Language']== 'arabic') { ?>
                       الطائرات الفاخرة   <img style="float:right" src="assets/images/booking1.png">
                    <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                     <img src="assets/images/booking1.png"> 豪华飞机
                    <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                     <img src="assets/images/booking1.png"> Роскошные самолеты
                    <?php }else{ ?>
                     <img src="assets/images/booking1.png">Luxury Jets
                    <?php } ?>
               </a>
              </li>
              <li>
                <a class="nav-link"  href="details/35">
                 
                     <?php if ($_SESSION['Language']== 'arabic') { ?>
                      جولة     <i class="fa fa-th-large" aria-hidden="true" style="float:right" ></i>
                    <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                    <i class="fa fa-th-large" aria-hidden="true"></i> 游览
                    <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                     <i class="fa fa-th-large" aria-hidden="true"></i> Тур 
                    <?php }else{ ?>
                     <i class="fa fa-th-large" aria-hidden="true"></i>Tour
                    <?php } ?></a>
              </li>
              <li>
                <a class="nav-link" href="details/21">
                     <?php if ($_SESSION['Language']== 'arabic') { ?>
                    السفر الطبي  <i class="fa fa-user-md" aria-hidden="true"style="float:right" ></i> 
                    <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                      <i class="fa fa-user-md" aria-hidden="true"></i>医疗旅行
                    <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                      <i class="fa fa-user-md" aria-hidden="true"></i> Медицинское Путешествие
                    <?php }else{ ?>
                    <i class="fa fa-user-md" aria-hidden="true"></i> Medical Travel
                    <?php } ?>
                </a>
              </li>
              <li>
                <a class="nav-link" href="details/22">
                    <?php if ($_SESSION['Language']== 'arabic') { ?>
                    التعليم <i class="fa fa-user-md" aria-hidden="true"style="float:right" ></i> 
                    <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                      <i class="fa fa-user-md" aria-hidden="true"></i>教育
                    <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                      <i class="fa fa-user-md" aria-hidden="true"></i>образование
                    <?php }else{ ?>
                   <i class="fa fa-graduation-cap" aria-hidden="true"></i>Education
                    <?php } ?>
                  </a>
              </li>
              <li>
                <a class="nav-link" href="details/39">
                   <?php if ($_SESSION['Language']== 'arabic') { ?>
                   مطاعم  <i class="fa fa-cutlery" aria-hidden="true" style="float:right" ></i> 
                    <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                      <i class="fa fa-cutlery" aria-hidden="true"></i>餐馆
                    <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                      <i class="fa fa-cutlery" aria-hidden="true"></i>ресторан
                    <?php }else{ ?>
                     <i class="fa fa-cutlery" aria-hidden="true"></i>Restaurants
                    <?php } ?>
                 </a>
              </li>
              <li>
                <a class="nav-link" href="details/38">
                  <?php if ($_SESSION['Language']== 'arabic') { ?>
                  حراس الأمن   <i class="fa fa-user-secret" aria-hidden="true" style="float:right" ></i> 
                    <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                      <i class="fa fa-user-secret" aria-hidden="true"></i>保安员
                    <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                      <i class="fa fa-user-secret" aria-hidden="true"></i>Охранники
                    <?php }else{ ?>
                     <i class="fa fa-user-secret" aria-hidden="true"></i> Security Guards
                    <?php } ?>
                </a>
              </li>
                 <li>
                <a class="nav-link" href="details/26">
                  <?php if ($_SESSION['Language']== 'arabic') { ?>
                  حراس الأمن   <i class="fa fa-user-secret" aria-hidden="true" style="float:right" ></i> 
                    <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                      <i class="fa fa-user-secret" aria-hidden="true"></i>保安员
                    <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                      <i class="fa fa-user-secret" aria-hidden="true"></i>Охранники
                    <?php }else{ ?>
                     <i class="fa fa-user-secret" aria-hidden="true"></i> Yacths
                    <?php } ?>
                </a>
              </li>
                 <li>
                <a class="nav-link" href="details/65">
                  <?php if ($_SESSION['Language']== 'arabic') { ?>
                  حراس الأمن   <i class="fa fa-user-secret" aria-hidden="true" style="float:right" ></i> 
                    <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                      <i class="fa fa-user-secret" aria-hidden="true"></i>保安员
                    <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                      <i class="fa fa-user-secret" aria-hidden="true"></i>Охранники
                    <?php }else{ ?>
                     <i class="fa fa-user-secret" aria-hidden="true"></i> Business
                    <?php } ?>
                </a>
              </li>
                 <li>
                <a class="nav-link" href="details/66">
                  <?php if ($_SESSION['Language']== 'arabic') { ?>
                  حراس الأمن   <i class="fa fa-user-secret" aria-hidden="true" style="float:right" ></i> 
                    <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                      <i class="fa fa-user-secret" aria-hidden="true"></i>保安员
                    <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                      <i class="fa fa-user-secret" aria-hidden="true"></i>Охранники
                    <?php }else{ ?>
                     <i class="fa fa-user-secret" aria-hidden="true"></i> Aviation
                    <?php } ?>
                </a>
              </li>
            </ul>
            <div class="btn_form">
              <a href="#"  data-toggle="modal" data-target="#Enquiry_Form">

               <?php $inq =$this->db->get_where('tbl_website_translate', array('lang_id' =>7))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $inq->arabic!="") { 
                          echo ucfirst($inq->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $inq->russian!="") { 
                         echo ucfirst($inq->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $inq->chiness!="") { 
                            echo ucfirst($inq->chiness);
                          }else{ 
                          echo ucfirst($inq->title);
                        } 
                ?></a>
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
          <h4> 
            <?php  
                       if ($_SESSION['Language']== 'arabic' && $hotel[0]['title_arabic']!="") { 
                          echo ucfirst($hotel[0]['title_arabic']);
                        }elseif ($_SESSION['Language']== 'russian' && $hotel[0]['title_russian']!="") { 
                         echo ucfirst($hotel[0]['title_russian']);
                        }elseif ($_SESSION['Language']== 'chiness' && $hotel[0]['title_chiness']!="") { 
                            echo ucfirst($hotel[0]['title_chiness']);
                          }else{ 
                          echo ucfirst($hotel[0]['meta_title']);
                        } 
                ?>

         </h4>
        </div>
      </a>
         </div>
         <div class="booking-right-cont">
          <form action="" method="POST" id="personal-info" class="form-group">
          <ul>
            <li>
              <span class="left-s">
                 <?php  
                       if ($_SESSION['Language']== 'arabic' && $hotel[0]['city_arabic']!="") { 
                          echo ucfirst($hotel[0]['city_arabic']);
                        }elseif ($_SESSION['Language']== 'russian' && $hotel[0]['city_russian']!="") { 
                         echo ucfirst($hotel[0]['city_russian']);
                        }elseif ($_SESSION['Language']== 'chiness' && $hotel[0]['city_chiness']!="") { 
                            echo ucfirst($hotel[0]['city_chiness']);
                          }else{ 
                          echo ucfirst($hotel[0]['city']);
                        } 
                ?>
              </span>
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
             <span class="right-s"><?php echo $reviews[0]['reviews'] ?>  
             <?php $rew =$this->db->get_where('tbl_website_translate', array('lang_id' =>28))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $rew->arabic!="") { 
                          echo ucfirst($rew->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $rew->russian!="") { 
                         echo ucfirst($rew->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $rew->chiness!="") { 
                            echo ucfirst($rew->chiness);
                          }else{ 
                          echo ucfirst($rew->title);
                        } 
                ?></span>
              </li>             
                <li><span class="left-s"> 
                <?php   
								   if($_SESSION['currency'] !='AED' && $_SESSION['currency']!=''){
									$req_url = 'https://api.exchangerate-api.com/v4/latest/AED';
									$response_json = file_get_contents($req_url);
									$response_object = json_decode($response_json);
									$base_price = $hotel[0]['product_pricing'];
									$currncy_price = round(($base_price * $response_object->rates->$_SESSION['currency']), 2);
                                    echo $currncy_price; ?><span> <?php echo $_SESSION['currency']; ?></span><?php
								   }else{
									echo $hotel[0]['product_pricing'];?><span> AED</span><?php 
								   }
								    ?></span><span class="right-s"><button type="submit" id="submit-p" class="like-product"><i class="fa fa-heart" style="color: red;" aria-hidden="true"></i></button><span id="totalLikes"><?php echo $hotel[0]['product_likes']?></span></span>
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

            

               <div class="col-lg-12 col-md-12">

                <ul class="nav nav-tabs wow fadeInDown">
                  <?php
                    $i=1;

                    foreach ($car_tree as $category => $val) {
                      ?>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#jssor_<?php echo $i; ?>"> 

                            <?php echo $category; ?></a>
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
           
           <div class="" id="product_cars">
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
                                      <h4>
                                       <?php  
                                           if ($_SESSION['Language']== 'arabic' && $value['title_arabic']!="") { 
                                              echo ucfirst($value['title_arabic']);
                                            }elseif ($_SESSION['Language']== 'russian' && $value['title_russian']!="") { 
                                             echo ucfirst($value['title_russian']);
                                            }elseif ($_SESSION['Language']== 'chiness' && $value['title_chiness']!="") { 
                                                echo ucfirst($value['title_chiness']);
                                              }else{ 
                                              echo ucfirst($value['meta_title']);
                                            } 
                                            ?>
                                       </h4>
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
              <h3>
                 <?php $recom =$this->db->get_where('tbl_website_translate', array('lang_id' =>8))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $recom->arabic!="") { 
                          echo ucfirst($recom->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $recom->russian!="") { 
                         echo ucfirst($recom->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $recom->chiness!="") { 
                            echo ucfirst($recom->chiness);
                          }else{ 
                          echo ucfirst($recom->title);
                        } 
                      ?>

            </h3>
            </div>
          </div>
        </div>
        <div class="destinations">
            <div class="row">
            <?php foreach ($recommended_city as  $city) {      
                 ?> 
                 <div class="col-lg-3 col-md-3">
                <article class="one-fourth wow fadeInUp" data-wow-delay="0.1s">
                  <figure><a target="_blank" href="<?php echo $city['city_link']; ?>" title=""><img src="<?php echo base_url(); ?>images/<?php echo $city['city_image']; ?>" alt=""></a></figure>
                  <div class="details">
                    <a target="_blank" href="<?php echo $city['city_link']; ?>" title="View all" class="gradient-button">
                       <?php $viewall =$this->db->get_where('tbl_website_translate', array('lang_id' =>9))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $viewall->arabic!="") { 
                          echo ucfirst($viewall->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $viewall->russian!="") { 
                         echo ucfirst($viewall->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $viewall->chiness!="") { 
                            echo ucfirst($viewall->chiness);
                          }else{ 
                          echo ucfirst($viewall->title);
                        } 
                      ?>
                   </a>
                    <h4>
                      <?php if ($_SESSION['Language']== 'arabic') { ?>
                         <?php  echo $city['city_arabic']?>
                      <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                        <?php  echo $city['city_chiness']?>
                      <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                        <?php  echo $city['city_russian']?>
                      <?php }else{ ?>
                         <?php  echo $city['city_name']?>
                       <?php } ?>

                        
                      </h4>   
                    <span class="count">
                      <?php $hot =$this->db->get_where('tbl_website_translate', array('lang_id' =>10))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $hot->arabic!="") { 
                          echo ucfirst($hot->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $hot->russian!="") { 
                         echo ucfirst($hot->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $hot->chiness!="") { 
                            echo ucfirst($hot->chiness);
                          }else{ 
                          echo ucfirst($hot->title);
                        } 
                      ?>
                      <?php  echo$city['total_hotels']?></span>
                    <div class="ribbon">
                      <div class="half hotel">
                        <a href="<?php echo $city['city_link']; ?>" title="View all">
                          <span class="small"> 
                      <?php $from =$this->db->get_where('tbl_website_translate', array('lang_id' =>24))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $from->arabic!="") { 
                          echo ucfirst($from->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $from->russian!="") { 
                         echo ucfirst($from->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $from->chiness!="") { 
                            echo ucfirst($from->chiness);
                          }else{ 
                          echo ucfirst($from->title);
                        } 
                ?></span>
                          <span class="price">
                          <?php   
                              if($_SESSION['currency'] !='AED' && $_SESSION['currency']!=''){
                              $req_url = 'https://api.exchangerate-api.com/v4/latest/AED';
                              $response_json = file_get_contents($req_url);
                              $response_object = json_decode($response_json);
                              $base_price = $city['from_price'];
                              $currncy_price = round(($base_price * $response_object->rates->$_SESSION['currency']), 2);
                             echo $currncy_price; ?><span> 
                             <?php echo $_SESSION['currency']; ?></span>
                             <?php
                              }else{
                              echo $city['from_price'];  
                              }
                                ?> AED</span>
                        </a>
                      </div>
                      <div class="half flight">
                        <a href="<?php echo $city['city_link']; ?>" title="View all">
                          <span class="small">
                           <?php  
                       if ($_SESSION['Language']== 'arabic' && $from->arabic!="") { 
                          echo ucfirst($from->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $from->russian!="") { 
                         echo ucfirst($from->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $from->chiness!="") { 
                            echo ucfirst($from->chiness);
                          }else{ 
                          echo ucfirst($from->title);
                        } 
                ?></span>
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
              <h3> <?php $jett =$this->db->get_where('tbl_website_translate', array('lang_id' =>11))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $jett->arabic!="") { 
                          echo ucfirst($jett->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $jett->russian!="") { 
                         echo ucfirst($jett->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $jett->chiness!="") { 
                            echo ucfirst($jett->chiness);
                          }else{ 
                          echo ucfirst($jett->title);
                        } 
                ?></h3>
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active"  href="details/34"> 
                    <?php $way =$this->db->get_where('tbl_website_translate', array('lang_id' =>12))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $way->arabic!="") { 
                          echo ucfirst($way->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $way->russian!="") { 
                         echo ucfirst($way->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $way->chiness!="") { 
                            echo ucfirst($way->chiness);
                          }else{ 
                          echo ucfirst($way->title);
                        } 
                ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="details/34">  
                    <?php $rout =$this->db->get_where('tbl_website_translate', array('lang_id' =>13))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $rout->arabic!="") { 
                          echo ucfirst($rout->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $rout->russian!="") { 
                         echo ucfirst($rout->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $rout->chiness!="") { 
                            echo ucfirst($rout->chiness);
                          }else{ 
                          echo ucfirst($rout->title);
                        } 
                ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="details/34">
                    <?php $mult =$this->db->get_where('tbl_website_translate', array('lang_id' =>14))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $mult->arabic!="") { 
                          echo ucfirst($mult->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $mult->russian!="") { 
                         echo ucfirst($mult->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $mult->chiness!="") { 
                            echo ucfirst($mult->chiness);
                          }else{ 
                          echo ucfirst($mult->title);
                        } 
                ?></a>
                </li>
              </ul>
              <!-- Tab panes -->

              <div class="tab-content">
                <div id="menu1" class="tab-pane active">
                    <form action="#" class="cruise-form">
                      
                      <div class="cruise1 cruise-form-main">
                         <a href="details/34" target="_blank">
                        <input type="text" class="form-control" id="from" placeholder=" <?php 
                       if ($_SESSION['Language']== 'arabic' && $from->arabic!="") { 
                          echo ucfirst($from->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $from->russian!="") { 
                         echo ucfirst($from->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $from->chiness!="") { 
                            echo ucfirst($from->chiness);
                          }else{ 
                          echo ucfirst($from->title);
                        } 
                ?>"></a>
                      </div>
                      <div class="cruise2 cruise-form-main"><a href="details/34">
                        <input type="text" class="form-control" id="to" placeholder="<?php $TO =$this->db->get_where('tbl_website_translate', array('lang_id' =>31))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $TO->arabic!="") { 
                          echo ucfirst($TO->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $TO->russian!="") { 
                         echo ucfirst($TO->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $TO->chiness!="") { 
                            echo ucfirst($TO->chiness);
                          }else{ 
                          echo ucfirst($TO->title);
                        } 
                ?>"></a>
                      </div>
                      <div class="cruise3 cruise-form-main">
                       
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <a href="details/34">
                        <input type="text" class="form-control" value="<?php echo date('d  M Y') ?>" id="date" ></a>
                        
                      </div>                   
                     <div class="cruise4 cruise-form-main"> <a href="details/34">
                         <i class="fa fa-user" aria-hidden="true"></i>
                        <span>2</span></a>
                      </div>
                      <div class="cruise5 cruise-form-main">
                        <a href="details/34"> <i class="fa fa-briefcase" aria-hidden="true"></i></a>
                      </div>
                      <div class="cruise6 cruise-form-main">
                        <button type="submit" class="btn btn-primary"><a href="details/34"> <?php $srr =$this->db->get_where('tbl_website_translate', array('lang_id' =>6))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $srr->arabic!="") { 
                          echo ucfirst($srr->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $srr->russian!="") { 
                         echo ucfirst($srr->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $srr->chiness!="") { 
                            echo ucfirst($srr->chiness);
                          }else{ 
                          echo ucfirst($srr->title);
                        } 
                ?></a></button>
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
    <div class="col-md-12">
      <div class="carousel slide multi-item-carousel" id="theCarousel">
        <div class="carousel-inner">
          <?php 
              $y=1;
          foreach ($luxury_jet as  $jet) {
             if($y==1)
                {
                   $class="active";
                   } else {
                    $class="";
               }
            ?>
          <div class="item <?php echo $class; ?>">
            <div class="col-xs-4"><a href="<?php echo base_url(); ?>carproduct/<?php echo $jet->pro_id; ?>"><img src="images/listing/<?php echo $jet->pro_thumb;?>" class="img-responsive"><h4>
                             <?php  
                                 if ($_SESSION['Language']== 'arabic' && $jet->title_arabic!="") { 
                                       echo ucfirst($jet->title_arabic);
                                }elseif ($_SESSION['Language']== 'russian' && $jet->title_russian!="") { 
                                        echo ucfirst($jet->title_russian);
                                 }elseif ($_SESSION['Language']== 'chiness' && $jet->title_chiness!="") { 
                                        echo ucfirst($jet->title_chiness);
                                 }else{ 
                                       echo ucfirst($jet->meta_title);
                                  } 
                                ?></h4></a></div>

          </div>
        <?php  $y++; } 
         
          if($y < '4'){
             
                   ?>
              <div class="item">
                 <div class="col-xs-4"><a href="<?php echo base_url(); ?>carproduct/1"><img src="<?php echo base_url(); ?>images/place.png" class="img-responsive"> <h4></h4></a></div>
                </div>
               <?php   } ?>
        </div>
        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div>

    
      </div>
    </div> 
    <div class="cruise-main-sec cruise-rent" id="targetCruise">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="cruise-main-sec-inner wow fadeInDown">
              <h3>
                  <?php $crus =$this->db->get_where('tbl_website_translate', array('lang_id' =>15))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $crus->arabic!="") { 
                          echo ucfirst($crus->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $crus->russian!="") { 
                         echo ucfirst($crus->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $crus->chiness!="") { 
                            echo ucfirst($crus->chiness);
                          }else{ 
                          echo ucfirst($crus->title);
                        } 
                ?>
              </h3>
              <ul class="nav nav-tabs" role="tablist">
                  <!--   <ul class="nav nav-tabs" role="tablist"> -->
                <li class="nav-item">
                  <a class="nav-link active"  href="<?php echo base_url(); ?>details/24">  <?php $one =$this->db->get_where('tbl_website_translate', array('lang_id' =>12))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $one->arabic!="") { 
                          echo ucfirst($one->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $one->russian!="") { 
                         echo ucfirst($one->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $one->chiness!="") { 
                            echo ucfirst($one->chiness);
                          }else{ 
                          echo ucfirst($one->title);
                        } 
                ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>details/24">
                    <?php $rount =$this->db->get_where('tbl_website_translate', array('lang_id' =>13))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $rount->arabic!="") { 
                          echo ucfirst($rount->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $rount->russian!="") { 
                         echo ucfirst($rount->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $rount->chiness!="") { 
                            echo ucfirst($rount->chiness);
                          }else{ 
                          echo ucfirst($rount->title);
                        } 
                ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>details/24">
                     <?php $multi =$this->db->get_where('tbl_website_translate', array('lang_id' =>14))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $multi->arabic!="") { 
                          echo ucfirst($multi->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $multi->russian!="") { 
                         echo ucfirst($multi->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $multi->chiness!="") { 
                            echo ucfirst($multi->chiness);
                          }else{ 
                          echo ucfirst($multi->title);
                        } 
                ?>
                  </a>
                </li>
     

              </ul>



              <!-- Tab panes -->

              <div class="tab-content">

                <div class="tab-pane active">
                   <form action="#" class="cruise-form">

                      <div class="cruise1 cruise-form-main">
                           <a href="<?php echo base_url(); ?>details/24">
                        <input type="text" class="form-control" id="from" placeholder="<?php 
                       if ($_SESSION['Language']== 'arabic' && $from->arabic!="") { 
                          echo ucfirst($from->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $from->russian!="") { 
                         echo ucfirst($from->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $from->chiness!="") { 
                            echo ucfirst($from->chiness);
                          }else{ 
                          echo ucfirst($from->title);
                        } 
                ?>">
                          </a>
                      </div>

                      <div class="cruise2 cruise-form-main">
                           <a href="<?php echo base_url(); ?>details/24">
                        <input type="text" class="form-control" id="to" placeholder=" <?php 
                       if ($_SESSION['Language']== 'arabic' && $TO->arabic!="") { 
                          echo ucfirst($TO->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $TO->russian!="") { 
                         echo ucfirst($TO->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $TO->chiness!="") { 
                            echo ucfirst($TO->chiness);
                          }else{ 
                          echo ucfirst($TO->title);
                        } 
                ?>">
                          </a>
                      </div>

                      <div class="cruise3 cruise-form-main">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <a href="<?php echo base_url(); ?>details/24">                         
                        <input type="text" class="form-control" id="date" value="<?php echo date('d  M Y ') ?>">
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
                        <button type="submit" class="btn btn-primary">
                          <a href="<?php echo base_url(); ?>details/24"> 
                          <?php $sr =$this->db->get_where('tbl_website_translate', array('lang_id' =>6))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $sr->arabic!="") { 
                          echo ucfirst($sr->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $sr->russian!="") { 
                         echo ucfirst($sr->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $sr->chiness!="") { 
                            echo ucfirst($sr->chiness);
                          }else{ 
                          echo ucfirst($sr->title);
                        } 
                ?></a></button>
                      </div>                   
                    </form>

                </div>       
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<div class="container">
  <div class="cruise-slider">
      <div class="row">
          <div class="col-md-12">
            <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
              <div class="carousel-inner">
                <?php 
                          $m=1;
                      foreach ($ship as $ships) {
                         if($m == 1)
                            {
                               $class="active";
                               } else {
                                $class="";
                           }
                        ?>
                <div class="item <?php echo $class; ?>">
                  <div class="col-md-4 col-sm-6 col-xs-12"><a href="<?php echo base_url(); ?>carproduct/<?php echo $ships['pro_id']; ?>"><img src="<?php echo base_url(); ?>images/listing/<?php echo $ships['pro_thumb']?>" class="img-responsive"> <h4>
                           <?php  
                                 if ($_SESSION['Language']== 'arabic' && $ships['title_arabic']!="") { 
                                       echo ucfirst($ships['title_arabic']);
                                }elseif ($_SESSION['Language']== 'russian' && $ships['title_russian']!="") { 
                                        echo ucfirst($ships['title_russian']);
                                 }elseif ($_SESSION['Language']== 'chiness' && $ships['title_chiness']!="") { 
                                        echo ucfirst($ships['title_chiness']);
                                 }else{ 
                                       echo ucfirst($ships['meta_title']);
                                  } 
                                ?>

                   </h4></a></div>
                </div>
               <?php  $m++; }
              
                  if($m < '4'){
             
                   ?>
                     <div class="item">
                  <div class="col-md-4 col-sm-6 col-xs-12"><a href="<?php echo base_url(); ?>carproduct/1"><img src="<?php echo base_url(); ?>images/place.png" class="img-responsive"> <h4></h4></a></div>
                </div>
               <?php   } ?>
                
              </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
          </div>
      </div>
    </div>
</div>
<!-- <div class="cruise-sec cruise-rent-img">
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
</div>  -->
<div class="map-sec">
     <div class="container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="map-sec-inner wow fadeInUp">
           <!--  <ins class="bookingaff" data-aid="1875410" data-target_aid="1875410" data-prod="map" data-width="927" data-height="500" data-lang="ualng" data-dest_id="0" data-dest_type="landmark" data-latitude="24.453884" data-longitude="54.3773438" data-landmark_name="Abu Dhabi - United Arab Emirates" data-mwhsb="0" data-checkin="2019-10-01" data-checkout="2019-10-31" data-address="Abu Dhabi - United Arab Emirates"> -->
    <!-- Anything inside will go away once widget is loaded. -->
         <!--    <a href="//www.booking.com?aid=1875410"></a>
          </ins>
          <script type="text/javascript">
              (function(d, sc, u) {
                var s = d.createElement(sc), p = d.getElementsByTagName(sc)[0];
                s.type = 'text/javascript';
                s.async = true;
                s.src = u + '?v=' + (+new Date());
                p.parentNode.insertBefore(s,p);
                })(document, 'script', '//aff.bstatic.com/static/affiliate_base/js/flexiproduct.js');
          </script> -->
          <ins class="bookingaff" data-aid="1875410" data-target_aid="1875410" data-prod="map" data-width="927" data-height="500" data-lang="ualng" data-dest_id="0" data-dest_type="landmark" data-latitude="24.453884" data-longitude="54.3773438" data-landmark_name="Abu Dhabi - United Arab Emirates" data-mwhsb="0" data-checkin="2019-10-01" data-checkout="2019-10-31" data-address="Abu Dhabi - United Arab Emirates">
    <!-- Anything inside will go away once widget is loaded. -->
        <a href="//www.booking.com?aid=1875410">Booking.com</a>
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
              <h3>
                 <?php $news =$this->db->get_where('tbl_website_translate', array('lang_id' =>16))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $news->arabic!="") { 
                          echo ucfirst($news->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $news->russian!="") { 
                         echo ucfirst($news->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $news->chiness!="") { 
                            echo ucfirst($news->chiness);
                          }else{ 
                          echo ucfirst($news->title);
                        } 
                ?>
              </h3>
              <form action="<?php echo base_url().'Subscribe';?>" enctype="multipart/form-data" method="post" class="news-form" id="">
             <!--  <form action="#" class=""> -->
                <div class="form-group">
                  <input type="email" class="form-control" id="Eemail" name="email" placeholder="<?php $write =$this->db->get_where('tbl_website_translate', array('lang_id' =>35))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $write->arabic!="") { 
                          echo ucfirst($write->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $write->russian!="") { 
                         echo ucfirst($write->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $write->chiness!="") { 
                            echo ucfirst($write->chiness);
                          }else{ 
                          echo ucfirst($write->title);
                        } 
                ?>" required="">
                     <div  id="email_result1" style="color: red;  margin-left: 28px;"></div> 
                  <div class="msgg error" style="" ><b>
                    <?php if($_SESSION['Language'] =="arabic"){
                              echo " البريد الإلكتروني غير صالح ";
                            }elseif($_SESSION['Language'] =="arabic"){
                              echo " Недействительный адрес электронной почты ";
                            }elseif($_SESSION['Language'] == "chiness"){
                               echo "无效的电子邮件地址";
                            }else{ echo "Not a valid email address" ;} ?></b></div>
                </div>
                <button type="submit" value="submit" id="submit" class="btn btn-primary" data-toggle="modal" href="#ignismyModal" disabled=""><i class="fa fa-angle-right" aria-hidden="true"></i></button>
              </form>
            </div>
            </div>
        </div>
      </div>
</div>  

<style type="text/css">
 .msgg {
    margin-left: 28px;
    display: none;
}
.error {
    color: red;
}
.success {
    color: green;
}
  
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



<div class="bpo_bx">            
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Hotels</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <!--   <div id="Hotels" class="tab-pane fade"> -->
                       <ins class="bookingaff" data-aid="1875065" data-target_aid="1875065" data-prod="nsb" data-width="500" data-height="330" data-lang="en">
                    <!-- Anything inside will go away once widget is loaded. -->
                              <a href="//www.booking.com?aid=1875065">Booking.com</a>
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
                     <!--  </div> -->
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
 <div class="bpo_bx">            
              <div class="modal fade" id="carmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Cars Rental</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                   <div id="rc-connect-container"></div> 
                    <script id='rc-connect' src='https://www.rentalcars.com/partners/integrations/connect/connect.js' data-container='rc-connect-container' data-preflang='en' data-enable-return-checkbox='true' data-target='parent' data-rcid='_ga=2.233370967.831205629.1570520779-779480426.1569924132' data-hide-header='true'></script>
                     <!--  </div> -->
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>


