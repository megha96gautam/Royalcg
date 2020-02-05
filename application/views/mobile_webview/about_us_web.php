<style>
  .box_mainTeam {
    padding:50px 0px 0px;  
  }
</style>

  <section class="bcrumb-sec wow fadeInDown">
<?php  $lang = $this->uri->segment(3);  ?>
    <div class="container">

      <div class="row">

        <div class="col-md-12">

          <div class="bc-heading">

            <h1> <?php if ($lang == 'ar') { ?>
                معلومات عنا
             <?php  }elseif($lang == 'ru'){?>
                  О нас
               <?php }elseif($lang== 'zh'){?>
                  关于我们
                <?php }else{?>
               About Us
               <?php  } ?></h1>

          </div>

        </div>

      </div>

    </div>

  </section>

        <?php   if ($lang == 'ar' && $about->desc_arabic!=""){
            echo $about->desc_arabic;
        }elseif($lang == 'ru' && $about->desc_russian!=""){
            echo $about->desc_russian;
        }elseif($lang == 'zh' && $about->desc_chiness!=""){
            echo $about->desc_chiness;
        }else{  echo $about->page_desc; }?>



    <div class="box_mainTeam wow fadeInDown">

  <div class="container">

    <div class="row">

        <div class="col-md-12 wow fadeInUp">

          <div class="heading-sec">

            <h2><?php $cit =$this->db->get_where('tbl_website_translate', array('lang_id' =>18))->row(); 
                       if ($lang == 'ar' && $cit->arabic!="") { 
                          echo ucfirst($cit->arabic);
                        }elseif ($lang == 'ru' && $cit->russian!="") { 
                         echo ucfirst($cit->russian);
                        }elseif ($lang == 'zh' && $cit->chiness!="") { 
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
              <?php if ($lang == 'ar' && $team->name_arabic) {
                   echo $team->name_arabic;
                  }elseif($lang == 'ru' && $team->name_russian){
                    echo $team->name_russian;
                 }elseif($lang == 'zh' && $team->name_chiness){
                    echo $team->name_chiness;
                 }else{
                     echo $team->name;
                  }
                 ?></h6>

            <h6 class="team-position">(<?php if ($lang == 'ar' && $team->arabic_designation) {
                   echo ucfirst($team->arabic_designation);
                  }elseif($lang == 'ru' && $team->russian_designation){
                    echo ucfirst($team->russian_designation);
                 }elseif($lang == 'zh' && $team->chiness_designation){
                    echo ucfirst($team->chiness_designation);
                 }else{
                    echo ucfirst($team->designation);
                  }
                 ?>)</h6>

            <p><?php if ($lang == 'ar' && $team->arabic_description) {
                   echo $team->arabic_description;
                  }elseif($lang == 'ru' && $team->russian_description){
                    echo $team->russian_description;
                 }elseif($lang == 'zh' && $team->chiness_description){
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









