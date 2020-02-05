<link href="<?php echo base_url(); ?>assets/css/owl/owl.carousel.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/owl/owl.theme.css" rel="stylesheet">


<style>
#demo{
    margin:0px !important;  
}
    #owl-demo .item{
        margin:3px;
    }
    #owl-demo .item img{
        display:block;
        width:100%;
        height:auto;
    }
    div#owl-demo {
    display: block;
    }
    .container{
        max-width:1170px !important;
        width:100% !important;  
        margin:0px auto !important; 
    }
    </style>




<div id="demo">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div id="owl-demo" class="owl-carousel">
           <div class="item"><img src="images/listing/newmercedes6.png"></div>
              <div class="item"><img src="images/listing/newmercedes6.png"></div>
              <div class="item"><img src="images/listing/newmercedes6.png"></div>
              <div class="item"><img src="images/listing/newmercedes6.png"></div>
              <div class="item"><img src="images/listing/newmercedes6.png"></div>
              <div class="item"><img src="images/listing/newmercedes6.png"></div>
              <div class="item"><img src="images/listing/newmercedes6.png"></div>
              <div class="item"><img src="images/listing/newmercedes6.png"></div>
          </div>              
        </div>
      </div>
    </div>
</div>

 
 
    <script src="http://royalcg.com/demo/assets/js/owl-carousel/jquery-1.9.1.min.js"></script> 
    <script src="http://royalcg.com/demo/assets/js/owl.carousel.js"></script>

    <style>
    #owl-demo .item{
        margin:3px;
    }
    #owl-demo .item img{
        display:block;
        width:100%;
        height:auto;
    }
    </style>
    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });

    });
    </script>