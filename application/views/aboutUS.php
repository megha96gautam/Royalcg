
  <section class="bcrumb-sec wow fadeInDown">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="bc-heading">
            <h1>
             <?php if ($_SESSION['Language']== 'arabic') { ?>
                معلومات عنا
             <?php  }elseif($_SESSION['Language']== 'russian'){?>
                  О нас
               <?php }elseif($_SESSION['Language']== 'chiness'){?>
                  关于我们
                <?php }else{?>
               About Us
               <?php  } ?>
            </h1>
          </div>
        </div>
      </div>
    </div>
  </section>
    <?php if ($_SESSION['Language']== 'arabic' && $about[0]['desc_arabic']!="") {
         echo $about[0]['desc_arabic'];
       }elseif($_SESSION['Language']== 'russian' && $about[0]['desc_russian']!=""){
        echo $about[0]['desc_russian'];
       }elseif($_SESSION['Language']== 'chiness' && $about[0]['desc_chiness']!=""){
         echo $about[0]['desc_chiness'];
       }else{
        echo $about[0]['page_desc'];
       }
       ?>

    <div class="box_mainTeam wow fadeInDown">
  <div class="container">
    <div class="row">
        <div class="col-md-12 wow fadeInUp">
          <div class="heading-sec">
            <h2><?php $cit =$this->db->get_where('tbl_website_translate', array('lang_id' =>18))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $cit->arabic!="") { 
                          echo ucfirst($cit->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $cit->russian!="") { 
                         echo ucfirst($cit->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $cit->chiness!="") { 
                            echo ucfirst($cit->chiness);
                          }else{ 
                          echo ucfirst($cit->title);
                        } 
                ?></h2>
          </div>          
        </div>
      </div>
    <div class="row">
      <?php foreach ($teams as $team) { ?>
     
      <div class="col-sm-6 col-md-4">
        <div class="main_team">
          <div class="team-image">
            <img src="<?php echo base_url(); ?>images/<?php echo $team->team_image ?>" alt="">
          </div>
          <div class="team-holder">
            <h6 class="team-name">
                <?php if ($_SESSION['Language']== 'arabic' && $team->name_arabic) {
                   echo $team->name_arabic;
                  }elseif($_SESSION['Language']== 'russian' && $team->name_russian){
                    echo $team->name_russian;
                 }elseif($_SESSION['Language']== 'chiness' && $team->name_chiness){
                    echo $team->name_chiness;
                 }else{
                     echo $team->name;
                  }
                 ?>
              </h6>
            <h6 class="team-position">(
              <?php if ($_SESSION['Language']== 'arabic' && $team->arabic_designation) {
                   echo ucfirst($team->arabic_designation);
                  }elseif($_SESSION['Language']== 'russian' && $team->russian_designation){
                    echo ucfirst($team->russian_designation);
                 }elseif($_SESSION['Language']== 'chiness' && $team->chiness_designation){
                    echo ucfirst($team->chiness_designation);
                 }else{
                    echo ucfirst($team->designation);
                  }
                 ?>)</h6>
            <p> <?php if ($_SESSION['Language']== 'arabic' && $team->arabic_description) {
                   echo $team->arabic_description;
                  }elseif($_SESSION['Language']== 'russian' && $team->russian_description){
                    echo $team->russian_description;
                 }elseif($_SESSION['Language']== 'chiness' && $team->chiness_description){
                    echo $team->chiness_description;
                 }else{
                   echo $team->description ;
                  }
                 ?></p>
          </div>
          <ul class="list_teamSoci">
            <li>
              <a href="<?php echo $team->facebook; ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="<?php echo $team->insta; ?>"><i class="fa fa-linkedin-square"></i></a>
            </li> 
            <li>
              <a href="<?php echo $team->gmail; ?>"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
            </li>            
          </ul>
        </div>
      </div>
         <?php
      } ?>
      
              
    </div>
   <!--  <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="main_team">
          <div class="team-image">
            <img src="https://deploy.mikado-themes.com/wp-content/uploads/2015/12/team-2.jpg" alt="">
          </div>
          <div class="team-holder">
            <h6 class="team-name">Edward Kim</h6>
            <h6 class="team-position">(Marketing Manager)</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
          </div>
          <ul class="list_teamSoci">
            <li>
              <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href=""><i class="fa fa-linkedin-square"></i></a>
            </li> 
            <li>
              <a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
            </li>            
          </ul>
        </div>
      </div> -->
     <!--  <div class="col-sm-6 col-md-4">
        <div class="main_team">
          <div class="team-image">
            <img src="https://deploy.mikado-themes.com/wp-content/uploads/2015/12/team-6.jpg" alt="">
          </div>
          <div class="team-holder">
            <h6 class="team-name">Edward Kim</h6>
            <h6 class="team-position">(Marketing Manager)</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
          </div>
          <ul class="list_teamSoci">
            <li>
              <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href=""><i class="fa fa-linkedin-square"></i></a>
            </li> 
            <li>
              <a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
            </li>            
          </ul>
        </div>
      </div>  
      <div class="col-sm-6 col-md-4">
        <div class="main_team">
          <div class="team-image">
            <img src="https://deploy.mikado-themes.com/wp-content/uploads/2015/12/team-7.jpg" alt="">
          </div>
          <div class="team-holder">
            <h6 class="team-name">Edward Kim</h6>
            <h6 class="team-position">(Marketing Manager)</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
          </div>
          <ul class="list_teamSoci">
            <li>
              <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href=""><i class="fa fa-linkedin-square"></i></a>
            </li> 
            <li>
              <a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
            </li>            
          </ul>
        </div>
      </div>              
    </div> -->
  </div>
</div>



  <div class="main-section">
    <!-- <div class="site-breadcrumb">
      <div class="container co_bac_con">
        <a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Home</a>
        <span><i class="fa fa-angle-right"></i>About Us</span>
      </div>
    </div> -->

    <!-- <section class="page-section">
    <div class="container">
      <div class="row" id="contatti">
      <div class="row">

            <div class="col-md-12">

              <div class="bn_img">

                 <img class="box_sha" alt="" src="<?php echo base_url(); ?>assets/images/about.jpg">

              </div>

            </div>

            <div class="col-md-12">

               <div class="event-content ad-content">
                </div> 

                 <?php echo $about[0]['page_desc']; ?>

               



                  <div class="bx_des">

                  <h> 

                  </div>



            </div>
          </div>
      </div>
   </div>
    </section> -->



  </div>



 

 

  <!-- End Footer -->
<!-- 
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>  
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jqueryui-1.10.3.min.js"></script> 
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slick.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script> 
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/validate.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>   
  <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
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