<link href="<?php echo base_url();?>front_assets/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo base_url();?>front_assets/css/owl.theme.css" rel="stylesheet"> 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
body{
    padding:0px;
    margin:0px;  
}
    #sync1 .item{
        background:#0c83e7;
        padding:0px;
        margin:0px;
        color:#FFF;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius:3px;
        text-align:center;
        height: 100%;
    }
    #sync2 .item{
        background:#C9C9C9;
        padding:0px;
        margin:5px;
        color:#FFF;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius:3px;
        text-align:center;
        cursor:pointer;
        min-height:100px; 
            overflow: hidden;
    }
    #sync2 .item h1{
      font-size:18px;
    }
    #sync2 .synced .item{
      background:#0c83e7;
    }


.mn_bxoImg img {
    width: 100% !important;
    max-width:100% !important; 
  }
.mn_bxo {
  display: inline-block;
  width: 100%;
  overflow: hidden;
  }
.tumb_img img {
    width: 100%;
    height: 100px;
    }
.tumb_img {
    display: inline-block;
    overflow: hidden;
    }

.mn_bxoBtn {
    position: absolute;
    top: 45%;
    z-index: 9999999;
    width: 100%;
    text-shadow:2px 0px 2px rgba(0, 0, 0, 0.99); 
}
.container {
    max-width: 1170px;
    margin: 0px auto;
}
.mn_bxoBtn .container {
    text-align:left;    
    max-width:1600px;
    margin:0px auto;
    width:100%;
}
.mn_bxoImg:after {
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
    left: 0px;
}
.mn_bxoBtn h2 {
    font-size: 34px;
}
button.readmore {
    background:#c5931c;
    border:1px solid #c5931c;
    color:#fff;
    border-radius:2px;
    padding:10px 20px 12px;
    height:auto;
    text-transform:uppercase;
    display:inline-block;
    text-align:center;
    cursor:pointer;
    }
.main_contr .owl-controls{
    display:none !important;  
    }
div#sync2 {
    position:absolute;
    bottom:0px;
    background:rgba(0, 0, 0, 0.3);
    }
.span12 {
    position:relative;
    }
.mn_bxoBtn h3 {
    margin-top: 10px;
    margin-bottom: 15px;
  }
.menu-main {
    position:absolute;
    top:10px;
    right:15px;
  }
.dropbtn {
    background: none;
    color: white;
    padding: 10px;
    font-size: 10px;
    border: none;
    width: 45px;
  }
.dropdown {
  position:relative;
  display:inline-block;
  }
button.dropbtn img{
  width:100%;
  }
.dropdown-content {
  display:none;  
  position:absolute;
  background-color:rgba(255, 255, 255, 0.80);
  min-width:160px;
  box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index:1;
  right:10px;
  }
.dropdown-content a { 
    color:black;
    padding:6px 16px;
    text-decoration:none;
    display:block;
    text-align:left;
    font-size:13px;
    letter-spacing:1px;
    line-height:18px;
}
.dropdown-content a:hover {background-color:#ddd;}
.dropdown:hover .dropdown-content {display:block;}
.dropdown:hover .dropbtn {background:none;}
.dropdown-content:after {
    bottom: 100%;
    left: inherit;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(255, 255, 255, 0);
    border-bottom-color: rgba(255, 255, 255, 0.80);
    border-width: 7px;
    margin-right: 0px;
    right: 5px;
  }
.main_popupData h1 {
    border-bottom:1px solid #e6e5e5;
    padding-bottom:10px;
    margin-bottom:20px;
    font-size:24px;
    margin-top:0px;
  }


.mod_ciEvn button.close {
    opacity: 1;
    padding: 15px;
    position: relative;
    z-index: 9;
        font-weight: 100;
    font-size: 24px;
    color:#fff; 
}

.mod_ciEvn .modal-content {
    background:rgba(197, 147, 28, 0.8);
    color: #fff;
    border-radius: 2px;
    /*box-shadow: 0px 0px 10px #ffffff66;*/
}
.mod_ciEvn .modal-body{  
    text-align:justify;
}

.mn_bxoBtn h1 {
    text-transform: uppercase;
}

</style>




<div id="demo">
    <div class="main_contr">
        <div class="">
            <div class="span12">
              <div id="sync1" class="owl-carousel">

                <?php 
                 if($city_events==array()){ ?>
                   <div class="item">
                    <div class="mn_bxo">
                        <div class="mn_bxoImg">
                            <img alt="img" src="<?php echo base_url(); ?>images/place_events.jpeg">
                        </div>                        
                        <div class="mn_bxoBtn">
                            <div class="container">                            
                                <h1> <?php $dest =$this->db->get_where('tbl_website_translate', array('lang_id' =>43))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $dest->arabic!="") { 
                          echo ucfirst($dest->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $dest->russian!="") { 
                         echo ucfirst($dest->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $dest->chiness!="") { 
                            echo ucfirst($dest->chiness);
                          }else{ 
                          echo ucfirst($dest->title);
                        } 
                ?></h1>
                                 <a href="<?php echo base_url(); ?>" value="" type="button" class="btn btn-info"> <?php $Home =$this->db->get_where('tbl_website_translate', array('lang_id' =>1))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $Home->arabic!="") { 
                          echo ucfirst($Home->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $Home->russian!="") { 
                         echo ucfirst($Home->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $Home->chiness!="") { 
                            echo ucfirst($Home->chiness);
                          }else{ 
                          echo ucfirst($Home->title);
                        } 
                ?></a>
                            </div>
                        </div>
                    </div>
                </div>
               <?php  }else{
                 foreach ($city_events as $event) { ?>
                    <div class="item">
                    <div class="mn_bxo">
                        <div class="mn_bxoImg">
                            <img alt="img" src="<?php echo base_url(); ?>images/<?php echo $event->event_image;?>">
                        </div>
                        <div class="menu-main">
                          <div class="dropdown">
                            <button class="dropbtn">
                              <img alt="img" src="<?php echo base_url(); ?>images/icon_menu.png">
                            </button>
                            <div class="dropdown-content">
                              <a href="<?php echo base_url(); ?>">Home</a>
                              <a href="<?php echo base_url(); ?>about-us">About Us</a>
                              <a href="<?php echo base_url(); ?>contact">Contact US</a>
                            </div>
                          </div>
                        </div>
                        <div class="mn_bxoBtn">
                            <div class="container">                            
                                <h1>
                                  <?php if($_SESSION['Language']== 'arabic' && $event->title_arabic!=""){
                                    echo $event->title_arabic;
                                   }elseif ($_SESSION['Language']== 'russian' && $event->title_russian!="") {
                                     echo $event->title_russian;
                                   }elseif ($_SESSION['Language']== 'chiness' && $event->title_chiness!="") {
                                      echo $event->title_chiness;
                                   } else{
                                      echo $event->event_title;
                                   }?>
                                  </h1>
                                <h3><?php echo date('d M Y',strtotime($event->from_date));?></h3>
                                <button value="" type="button" class="readmore" data-toggle="modal" data-target="#myModal" name="tab" id="test" data-id="<?php echo $event->event_id;?>"> 
                                  <?php if($_SESSION['Language']== 'arabic'){
                                    echo " قراءة المزيد ";
                                   }elseif ($_SESSION['Language']== 'russian') {
                                     echo " Подробнее ";
                                   }elseif ($_SESSION['Language']== 'chiness') {
                                      echo "阅读更多";
                                   } else{
                                      echo "Read More";
                                   }?></button>
                            </div>
                        </div>
                    </div>
                </div>
               <?php } } ?>
                
                             
              </div>
              <div id="sync2" class="owl-carousel">
                  <?php foreach ($city_events as $events) { ?>
                <div class="item" >
                     <div class="tumb_img">
                        <img alt="img" src="<?php echo base_url(); ?>images/<?php echo $events->event_image;?>">
                    </div>
                </div>
            <?php } ?>
              
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- modal megha -->
      <!-- Modal -->
  <div class="modal fade mod_ciEvn" id="myModal" role="dialog">
    <div class="modal-dialog">    
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-body main_popupData" id="events_data">        
        </div>
      </div>      
    </div>
  </div> 
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slick.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>/front_assets/listing/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo base_url();?>front_assets/js/owl.carousel.min.js" ></script>  

  <script>

   /* code by megha */
    $(document).ready(function () {
      /*alert(id);*/
    $('button[name=tab]').click(function(){
        var id = $(this).data("id");
       /*  alert(id);*/
         var results= $.ajax({
                    type: "POST",
                    url: '<?php echo site_url('ajax_get_events').'/';?>',
                    data: {"event_id":id},
                    dataType:"json",
                     async: false
        }).responseText;
         var rowHtml='';  
        obj = JSON.parse(results);
       
        if(obj.events != ''){        
            $.each(obj.events, function(k, v) {  
             var sessName = '<?php echo $_SESSION['Language']?>';

             if(sessName=='arabic' && v.title_arabic!=""){
                var rowHtml='<h3>'+v.title_arabic+'</h3><p>'+v.desc_arabic+'</p><h4>تاريخ  : <span style="font-size:15px;">'+v.from_date+'</span> </h4><h4>حتى تاريخه: <span style="font-size:15px;">'+v.to_date+'</span> </h4><h4>عنوان : <span>'+v.address_arabic+'</h4></span>'
             }else if(sessName=='russian' && v.title_russian!=""){
                 var rowHtml='<h3>'+v.title_russian+'</h3><p>'+v.desc_russian+'</p><h4>свидание : <span style="font-size:15px;">'+v.from_date+'</span> </h4><h4> Встретиться : <span style="font-size:15px;">'+v.to_date+'</span></h4><h4>адрес : <span>'+v.address_russian+'</h4></span>'

             }else if(sessName=='chiness' && v.title_chiness!=""){
                 var rowHtml='<h3>'+v.title_chiness+'</h3><p>'+v.desc_chiness+'</p><h4>日期 : <span style="font-size:15px;">'+v.from_date+'</span> </h4><h4>至今 : <span style="font-size:15px;">'+v.to_date+'</span> </h4><h4>地址 : <span>'+v.address_chiness+'</h4></span>'
             }
              else{
               var rowHtml='<h3>'+v.event_title+'</h3><p>'+v.event_description+'</p><h4>From Date : <span style="font-size:15px;">'+v.from_date+'</span> </h4><h4>To Date: <span style="font-size:15px;">'+v.to_date+'</span> </h4><h4>Address : <span>'+v.address+'</h4></span>'
             }         
              
               
               
                $('#events_data').html(rowHtml);
            });}
         $('#myModal').modal('show');
        
    });
});
   /* code by megha end*/



    $(document).ready(function() {
      var sync1 = $("#sync1");
      var sync2 = $("#sync2");
      sync1.owlCarousel({
        singleItem : true,
        slideSpeed : 1000,
        navigation: true,
        pagination:false,
        afterAction : syncPosition,
        responsiveRefreshRate : 200,
      });
      sync2.owlCarousel({
        items : 8,
        itemsDesktop      : [1199,8],
        itemsDesktopSmall     : [979,8],
        itemsTablet       : [768,6],
        itemsMobile       : [479,3],
        pagination:false,
        responsiveRefreshRate : 100,
        afterInit : function(el){
          el.find(".owl-item").eq(0).addClass("synced");
        }
      });
      function syncPosition(el){
        var current = this.currentItem;
        $("#sync2")
          .find(".owl-item")
          .removeClass("synced")
          .eq(current)
          .addClass("synced")
        if($("#sync2").data("owlCarousel") !== undefined){
          center(current)
        }
      }
      $("#sync2").on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo",number);
      });
      function center(number){
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
        var num = number;
        var found = false;
        for(var i in sync2visible){
          if(num === sync2visible[i]){
            var found = true;
          }
        }
        if(found===false){
          if(num>sync2visible[sync2visible.length-1]){
            sync2.trigger("owl.goTo", num - sync2visible.length+2)
          }else{
            if(num - 1 === -1){
              num = 0;
            }
            sync2.trigger("owl.goTo", num);
          }
        } else if(num === sync2visible[sync2visible.length-1]){
          sync2.trigger("owl.goTo", sync2visible[1])
        } else if(num === sync2visible[0]){
          sync2.trigger("owl.goTo", num-1)
        }
      }
    });

 
    </script>





