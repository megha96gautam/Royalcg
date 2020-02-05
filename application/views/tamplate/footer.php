 <style>
   label {
    display: inline-block;
    margin-bottom: .5rem;
    color: red;
}
 </style>
  <!-- Start Footer -->

<footer id="footer">
    <div class="footer-top  wow fadeInDown">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <a href="<?php echo base_url(); ?>" class="footer-logo" ><img src="<?php echo base_url(); ?>assets/images/logo.png"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-middle  wow fadeInDown">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3">
           <h4>
            <?php $us =$this->db->get_where('tbl_website_translate', array('lang_id' =>23))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $us->arabic!="") { 
                          echo ucfirst($us->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $us->russian!="") { 
                         echo ucfirst($us->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $us->chiness!="") { 
                            echo ucfirst($us->chiness);
                          }else{ 
                          echo ucfirst($us->title);
                        } 
                ?></h4>
            <div class="footer-address">

              <p><i class="fa fa-map-marker" aria-hidden="true"></i><span>
              <?php   if ($_SESSION['Language']== 'arabic' && $footer->address_arabic!="") { 
                          echo $footer->address_arabic;
                        }elseif ($_SESSION['Language']== 'russian' && $footer->address_russian!="") { 
                         echo $footer->address_russian;
                        }elseif ($_SESSION['Language']== 'chiness' && $footer->address_chiness!="") { 
                            echo $footer->address_chiness;
                          }else{ 
                          echo  $footer->address;
                        } ?>
               
                  
                </span></p>
              <p><i class="fa fa-mobile" aria-hidden="true"></i><span><a href="tel:2701886026"><?php echo $footer->mobile;  ?></a></span></p>
              <p><i class="fa fa-envelope-o" aria-hidden="true"></i><span><a href="mailto:<?php echo $footer->email;  ?>"><?php echo $footer->email;  ?></a></span></p>
            </div>
            <div class="social-links">
              <ul>
                  <li><a href="<?php echo $footer->facebook;  ?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="<?php echo $footer->twiter;  ?>" class="twitter"><i class="fa fa-twitter"></i></a></li>            
                  <li><a href="<?php echo $footer->linkdin;  ?>" class="linkedin"><i class="fa fa-linkedin"></i></a></li>         
                  <li><a href="<?php echo $footer->gmail;  ?>" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="<?php echo $footer->insta;  ?>" class="instagram"><i class="fa fa-instagram"></i></a></li>        
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="row">
              <div class="col-lg-4 col-md-4">
                <h4>
                  <?php $book =$this->db->get_where('tbl_website_translate', array('lang_id' =>20))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $book->arabic!="") { 
                          echo ucfirst($book->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $book->russian!="") { 
                         echo ucfirst($book->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $book->chiness!="") { 
                            echo ucfirst($book->chiness);
                          }else{ 
                          echo ucfirst($book->title);
                        } 
                ?>
                </h4>
                <ul>

                  <?php 
                 /* var_dump($footer_booknow); die();*/
                  foreach ($footer_booknow as $book) { ?>
                  
                  <li> <a href="<?php echo base_url(); ?>details/<?php echo $book['id']; ?>" > 
                            <?php if ($_SESSION['Language']== 'arabic' && $book['title_arabic']!="") {
                                   echo ucfirst($book['title_arabic']);
                                  }elseif ($_SESSION['Language']== 'russian' && $book['title_russian']!="") {
                                   echo ucfirst($book['title_russian']);
                                 }elseif ($_SESSION['Language']== 'chiness' && $book['title_chiness']!="") {
                                  echo ucfirst($book['title_chiness']);
                                 }else{
                                  echo ucfirst($book['page_title']);
                                 } ?></a></li>
                <?php } ?>
                 
                </ul>
              </div>
              <div class="col-lg-4 col-md-4">
                <h4>  
                  <?php $exp =$this->db->get_where('tbl_website_translate', array('lang_id' =>21))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $exp->arabic!="") { 
                          echo ucfirst($exp->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $exp->russian!="") { 
                         echo ucfirst($exp->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $exp->chiness!="") { 
                            echo ucfirst($exp->chiness);
                          }else{ 
                          echo ucfirst($exp->title);
                        } 
                ?></h4>
                <ul>
                   <?php 
                 /* var_dump($footer_booknow); die();*/
                  foreach ($footer_explore as $Explore) { ?>
                  
                  <li> <a href="<?php echo base_url(); ?>details/<?php echo $Explore['id']; ?>" >
                           <?php if ($_SESSION['Language']== 'arabic' && $Explore['title_arabic']!="") {
                                   echo ucfirst($Explore['title_arabic']);
                                  }elseif ($_SESSION['Language']== 'russian' && $Explore['title_russian']!="") {
                                   echo ucfirst($Explore['title_russian']);
                                 }elseif ($_SESSION['Language']== 'chiness' && $Explore['title_chiness']!="") {
                                  echo ucfirst($Explore['title_chiness']);
                                 }else{
                                  echo ucfirst($Explore['page_title']);
                                 } ?>
                          </a></li>
                     <?php } ?>
                <li> <a href="<?php echo base_url(); ?>terms_and_condition" >
                  <?php if ($_SESSION['Language']== 'arabic') { ?>
                       الشروط والأحكام
                        <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                        条款与协议
                       <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                          Правила и условия
                        <?php }else{ ?>
                        Terms&Condition
                      <?php } ?>
               </a></li>
                <li> <a href="<?php echo base_url(); ?>privacy_policy" >
                  <?php if ($_SESSION['Language']== 'arabic') { ?>
                      سياسة الخصوصية
                        <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                       隐私政策
                       <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                         политика конфиденциальности
                        <?php }else{ ?>
                      Privacy Policy
                      <?php } ?></a></li>
                 
                </ul>
              </div>
              <div class="col-lg-4 col-md-4">
                <h4> <?php $deal =$this->db->get_where('tbl_website_translate', array('lang_id' =>22))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $deal->arabic!="") { 
                          echo ucfirst($deal->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $deal->russian!="") { 
                         echo ucfirst($deal->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $deal->chiness!="") { 
                            echo ucfirst($deal->chiness);
                          }else{ 
                          echo ucfirst($deal->title);
                        } 
                ?></h4>
                <ul>  <?php foreach ($footer_deals as $deals) { ?>
                  <li>
                    <a href="<?php echo base_url(); ?>details/<?php echo $deals['id']; ?>">
                                  <?php if ($_SESSION['Language']== 'arabic' && $deals['title_arabic']!="") {
                                   echo ucfirst($deals['title_arabic']);
                                  }elseif ($_SESSION['Language']== 'russian' && $deals['title_russian']!="") {
                                   echo ucfirst($deals['title_russian']);
                                 }elseif ($_SESSION['Language']== 'chiness' && $deals['title_chiness']!="") {
                                  echo ucfirst($deals['title_chiness']);
                                 }else{
                                  echo ucfirst($deals['page_title']);
                                 } ?>

                     </a></li>
                   <?php } ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3">
            <h4> <?php $dest =$this->db->get_where('tbl_website_translate', array('lang_id' =>17))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $dest->arabic!="") { 
                          echo ucfirst($dest->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $dest->russian!="") { 
                         echo ucfirst($dest->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $dest->chiness!="") { 
                            echo ucfirst($dest->chiness);
                          }else{ 
                          echo ucfirst($dest->title);
                        } 
                ?> </h4>
            <ul class="list_dis">
              <?php    foreach ($destinations as $destination) {  ?>
              <li>
                <a href="<?php echo $destination['destinations_url']; ?>"> <img src="<?php echo base_url(); ?>images/<?php echo $destination['destinations_image']; ?>"></a>
              </li>
            <?php } ?>
           
            </ul>          
          </div>
        </div>
       </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <p>
              <?php 
                     if ($_SESSION['Language']== 'arabic' && $footer->copy_arabic!="") { 
                          echo ucfirst($footer->copy_arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $footer->copy_russian!="") { 
                         echo ucfirst($footer->copy_russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $footer->copy_chiness!="") { 
                            echo ucfirst($footer->copy_chiness);
                          }else{ 
                          echo ucfirst($footer->copy_right);
                        } ?>
                          
            </p>
          </div>
        </div>
      </div>
    </div>
</footer>

             

  <!-- End Footer -->
  <div class="modal account-form inqury-modal" id="Enquiry_Form">
    <div class="modal-dialog">
      <div class="modal-content">  
        <div class="modal-header">
          <h4 class="modal-title"> 
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
                ?></h4>
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
         <form action="<?php echo base_url().'enquiry';?>" enctype="multipart/form-data" method="post" class="form-horizontal" id="page_form">
          
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">                     
                    <input type="text" class="form-control" id="name" name="name" placeholder="<?php $name =$this->db->get_where('tbl_website_translate', array('lang_id' =>27))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $name->arabic!="") { 
                          echo ucfirst($name->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $name->russian!="") { 
                         echo ucfirst($name->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $name->chiness!="") { 
                            echo ucfirst($name->chiness);
                          }else{ 
                          echo ucfirst($name->title);
                        } 
                ?>" required="">
                     <div class="msgname errorname" style="" ><?php $alp =$this->db->get_where('tbl_website_translate', array('lang_id' =>44))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $alp->arabic!="") { 
                          echo ucfirst($alp->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $alp->russian!="") { 
                         echo ucfirst($alp->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $alp->chiness!="") { 
                            echo ucfirst($alp->chiness);
                          }else{ 
                          echo ucfirst($alp->title);
                        } 
                ?></div>
                  </div>
                </div>
                <div class="col-md-12">
                  
                  <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="<?php $email =$this->db->get_where('tbl_website_translate', array('lang_id' =>26))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $email->arabic!="") { 
                          echo ucfirst($email->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $email->russian!="") { 
                         echo ucfirst($email->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $email->chiness!="") { 
                            echo ucfirst($email->chiness);
                          }else{ 
                          echo ucfirst($email->title);
                        } 
                ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">                     
                    <input type="number" maxlength="14" minlength="7" class="form-control" id="contact" name="contact" placeholder="<?php $contact =$this->db->get_where('tbl_website_translate', array('lang_id' =>4))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $contact->arabic!="") { 
                          echo ucfirst($contact->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $contact->russian!="") { 
                         echo ucfirst($contact->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $contact->chiness!="") { 
                            echo ucfirst($contact->chiness);
                          }else{ 
                          echo ucfirst($contact->title);
                        } 
                ?>" required="">
                  </div>
                </div>
                <div class="col-md-12">
                <div class="form-group">                     
                <select name="city_id" id="city_id"  class="form-control" required="">
                <option value=""><?php $cit =$this->db->get_where('tbl_website_translate', array('lang_id' =>38))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $cit->arabic!="") { 
                          echo ucfirst($cit->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $cit->russian!="") { 
                         echo ucfirst($cit->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $cit->chiness!="") { 
                            echo ucfirst($cit->chiness);
                          }else{ 
                          echo ucfirst($cit->title);
                        } 
                ?></option>
                <?php  
                foreach($cities as $city){
                ?>
                    <option value="<?php echo $city['city_id'];?>"><?php 
                       if ($_SESSION['Language']== 'arabic' && $city['city_arabic']!="") { 
                          echo $city['city_arabic'];
                        }elseif ($_SESSION['Language']== 'russian' &&   $city['city_russian']!="") { 
                          echo $city['city_russian'];
                        }elseif ($_SESSION['Language']== 'chiness' && $city['city_chiness']->chiness!="") { 
                           echo $city['city_chiness'];
                          }else{ 
                          echo $city['city_name'];
                        } 
                   ?> </option>
                   <?php 
                    } 
                   ?>
               </select>
                </div>
                </div>  
                <div class="col-md-12">
                <div class="form-group">                     
                <select name="cate_id" id="cate_id"  class="form-control" required="">
                <option value=""><?php $service =$this->db->get_where('tbl_website_translate', array('lang_id' =>39))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $service->arabic!="") { 
                          echo ucfirst($service->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $service->russian!="") { 
                         echo ucfirst($service->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $service->chiness!="") { 
                            echo ucfirst($service->chiness);
                          }else{ 
                          echo ucfirst($service->title);
                        } 
                ?></option>
                <?php  foreach ($pages_cate as $cate){
                ?>
                    <option value="<?php echo ucfirst($cate['id']);?>">
                      <?php 
                       if ($_SESSION['Language']== 'arabic' && $cate['title_arabic']!="") { 
                          echo $cate['title_arabic'];
                        }elseif ($_SESSION['Language']== 'russian' &&   $cate['title_russian']!="") { 
                          echo $cate['title_russian'];

                        }elseif ($_SESSION['Language']== 'chiness' && $cate['title_chiness']!="") { 
                           echo ucfirst($cate['title_chiness']);
                          }else{ 
                          echo ucfirst($cate['page_title']);
                        } 
                   ?>
                     </option>
                   <?php 
                    } 
                   ?>
               </select>
                </div>
                </div>             
                <div class="col-md-12">
                  <div class="form-group">                       
                    <textarea class="form-control" id="message" name="message" placeholder="<?php $mess =$this->db->get_where('tbl_website_translate', array('lang_id' =>32))->row(); 
                      if ($_SESSION['Language']== 'arabic' && $mess->arabic!="") { 
                             echo ucfirst($mess->arabic);
                            }elseif ($_SESSION['Language']== 'russian' && $mess->russian!="") { 
                               echo ucfirst($mess->russian);
                       }elseif ($_SESSION['Language']== 'chiness' && $mess->chiness!="") { 
                               echo ucfirst($mess->chiness);
                            }else{ 
                               echo ucfirst($mess->title);
                            } 
                      ?>"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group submit-f"> 
                     <button type="submit" name="submit" class="submit-btn">
             <?php $submit =$this->db->get_where('tbl_website_translate', array('lang_id' =>25))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $submit->arabic!="") { 
                          echo ucfirst($submit->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $submit->russian!="") { 
                         echo ucfirst($submit->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $submit->chiness!="") { 
                            echo ucfirst($submit->chiness);
                          }else{ 
                          echo ucfirst($submit->title);
                        } 
                ?>
                     </button>
                  </div>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
      </div>
  
</div>
<!-- feedback rating -->
  

<div class="modal fade feedback-modal" id="myModal" role="dialog">
    <div class="modal-dialog">  
      <!-- Modal content-->

      <div class="modal-content" >
        <div class="modal-header">
          <h4 class="modal-title"><?php $feed =$this->db->get_where('tbl_website_translate', array('lang_id' =>29))->row(); 
                      if ($_SESSION['Language']== 'arabic' && $feed->arabic!="") { 
                             echo ucfirst($feed->arabic);
                            }elseif ($_SESSION['Language']== 'russian' && $feed->russian!="") { 
                               echo ucfirst($feed->russian);
                       }elseif ($_SESSION['Language']== 'chiness' && $feed->chiness!="") { 
                               echo ucfirst($feed->chiness);
                            }else{ 
                               echo ucfirst($feed->title);
                            } 
                      ?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>      
        </div>
        <div class="modal-body">
      <form action="<?php echo base_url().'feedback';?>" enctype="multipart/form-data" method="post" class="form-horizontal" id="feedback_form">
         <?php $product_id=$this->uri->segment(2);

    //print_r($product_id);  ?> 
        <input type="hidden" name="product_id" id="product_id" value="<?php echo $product_id ?>" >                 
         <span class="star-rating">
            <input type="radio" name="rating" value="1" ><i></i>
            <input type="radio" name="rating" value="2"><i></i>
            <input type="radio" name="rating" value="3"><i></i>
            <input type="radio" name="rating" value="4"><i></i>
            <input type="radio" name="rating" value="5" checked><i></i>
          </span>
          <div class="row">
           <div class="col-md-6">

                  <div class="">                        

                    <input class="form-control" id="user_name" name="username" placeholder="<?php $nm =$this->db->get_where('tbl_website_translate', array('lang_id' =>27))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $nm->arabic!="") { 
                          echo ucfirst($nm->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $nm->russian!="") { 
                         echo ucfirst($nm->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $nm->chiness!="") { 
                            echo ucfirst($nm->chiness);
                          }else{ 
                          echo ucfirst($nm->title);
                        } 
                ?>" required="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="">      
                    <input class="form-control" id="country" name="country" placeholder="<?php $country =$this->db->get_where('tbl_website_translate', array('lang_id' =>33))->row(); 
                      if ($_SESSION['Language']== 'arabic' && $country->arabic!="") { 
                             echo ucfirst($country->arabic);
                            }elseif ($_SESSION['Language']== 'russian' && $country->russian!="") { 
                               echo ucfirst($country->russian);
                       }elseif ($_SESSION['Language']== 'chiness' && $country->chiness!="") { 
                               echo ucfirst($country->chiness);
                            }else{ 
                               echo ucfirst($country->title);
                            } 
                      ?>" required="">
                  </div>
                </div>
              </div>
         <div class="row">
         <div class="col-md-12">
                  <div class="">                      
                    <textarea class="form-control" id="comment" name="comment" placeholder="<?php 
                      if ($_SESSION['Language']== 'arabic' && $mess->arabic!="") { 
                             echo ucfirst($mess->arabic);
                            }elseif ($_SESSION['Language']== 'russian' && $mess->russian!="") { 
                               echo ucfirst($mess->russian);
                       }elseif ($_SESSION['Language']== 'chiness' && $mess->chiness!="") { 
                               echo ucfirst($mess->chiness);
                            }else{ 
                               echo ucfirst($mess->title);
                            } 
                      ?>" required=""></textarea>
                  </div>
                </div></div>
        <div class="modal-footer">
          <button type="submit" name="submit" class="feedback-submit-btn"><?php if ($_SESSION['Language']== 'arabic' && $submit->arabic!="") { 
                          echo ucfirst($submit->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $submit->russian!="") { 
                         echo ucfirst($submit->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $submit->chiness!="") { 
                            echo ucfirst($submit->chiness);
                          }else{ 
                          echo ucfirst($submit->title);
                        } 
                ?></button>
         <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        </div>
    </from>
</div>
      </div>     

    </div>

  </div>
  <!-- jQuery library -->

  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>  
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jqueryui-1.10.3.min.js"></script>              <!-- Load jQueryUI -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slick.js"></script>
 
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script>
<!--   <script type="text/javascript" src="<php echo base_url(); ?>assets/js/validate.js"></script> -->
  <!-- Custom js -->
  <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>   
<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script type="text/javascript">


 $('form input[id="Eemail"]').blur(function () {
    var email = $(this).val();
var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;
if (re.test(email)) {
    $('.msgg').hide();
    $('.success').show();
    $('button:submit').attr('disabled',false); 
} else {
    $('.msgg').hide();
    $('.error').show();
     $('button:submit').attr('disabled',true); 
}

});

 /*string*/
   $(function () {
      $('#name').keydown(function (e) {
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });
  });
/*email validation*/

var component = {
    input   : $('input[name="email"]'),
    mensage : {
        fields  : $('.msgg'),
        success : $('.success'),
        error   : $('.error')
    }
},
    regex  = /^[a-z][a-zA-Z0-9_]*(\.[a-zA-Z][a-zA-Z0-9_]*)?@[a-z][a-zA-Z-0-9]*\.[a-z]+(\.[a-z]+)?$/;

component.input.blur(function () {
    component.mensage.fields.hide();
    regex.test(component.input.val()) ? component.mensage.success.show() : component.mensage.error.show();
});
/*modal value dissmiss*/
$('[data-dismiss=modal]').on('click', function (e) {
    var $t = $(this),
        target = $t[0].href || $t.data("target") || $t.parents('.modal') || [];
    
  $(target)
    .find("input,textarea,select")
       .val('')
       .end()
  
      
})
/* email validation */

 $(document).ready(function(){  

      $('#Eemail').change(function(){  
           var email = $('#Eemail').val();  
          // alert(email);
           if(email != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>check_email_avalibility",  
                     method:"POST",
                     data:{email:email}, 

                     success:function(data){ 

                     if(data!=''){ 
                          $('#email_result1').html(data);                         
                          $('button:submit').attr('disabled',true); 
                     }                     
                      else{
                         $('#email_result1').html(data); 
                         $('button:submit').attr('disabled',false);                         

                      }                 

                 }
                });  
           }  
      });  
 }); 

 
</script>


<script type="text/javascript">
  $('#email_sub').bind('keyup', function() {
      if(allFilled()) $('#megha').removeAttr('disabled');
  });
  function allFilled() {
      var filled = true;
      $('body input').each(function() {
          if($(this).val() == '') filled = false;
      });
      return filled;
  }     
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myDIV *").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
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

     function product_data(subcate)

    { 
        var results= $.ajax({
        type: "POST",
        url: '<?php echo site_url('ajaxcarsproducts').'/';?>',
        data: {"subcate":subcate},
        dataType:"json",
        async: false
        }).responseText;
        $('#filter_cars').html('');
        obj = JSON.parse(results);
      /*  alert(results);*/
  
        if(obj.carproducts != '')

        {
         // alert(obj.carproducts.length);
            $.each(obj.carproducts, function(k, v) {        

                var rowHtml='<div class="cruise-sec-inner wow slideInLeft"><a href="<?php echo base_url(); ?>carproduct/'+v.pro_id+'"><img src="<?php echo base_url(); ?>images/listing/'+v.pro_thumb+'"></a></div>';

                $('#filter_cars').append(rowHtml);

            });
        } 
    }



    /* car tree*/

       function product_car(subcate)

    { 
        var results= $.ajax({
        type: "POST",
        url: '<?php echo site_url('ajaxcarsproducts').'/';?>',
        data: {"subcate":subcate},
        dataType:"json",
        async: false
        }).responseText;
        $('#product_cars').html('');
        obj = JSON.parse(results);
       // alert(results);      

        if(obj.carproducts != '')
        {
         // alert(obj.carproducts.length);       

            $.each(obj.carproducts, function(k, v) {
                 /* var rowHtml='<div class="col-lg-4 col-md-4"><div class="tour-tab-sec-cont wow fadeInUp" data-wow-delay="0.1s"><div class="tour-tab-sec-cont-img"><a href="<?php echo base_url(); ?>carproduct/'+v.pro_id+'"><img src="<?php echo base_url(); ?>images/listing/'+v.pro_thumb+'"></a></div></div></div>';*/
                var rowHtml='<div class="col-lg-4 col-md-4"><div class="tour-tab-sec-cont wow fadeInUp" data-wow-delay="0.1s"><div class="tour-tab-sec-cont-img"><a href="<?php echo base_url(); ?>carproduct/'+v.pro_id+'"><img src="<?php echo base_url(); ?>images/listing/'+v.pro_thumb+'"></a></div><div class="tour-tab-sec-cont-inner"><p><b>'+v.meta_title+'</b></p></div></div></div>';

                $('#product_cars').append(rowHtml);

            });
        }  

    }

    /*end*/

    $(document).ready(function(){

  $("#myInput").on("keyup", function() {

    var value = $(this).val().toLowerCase();

    $("#myDIVV *").filter(function() {

      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

    });

  });

  });



/* add like */
    $(document).ready(function(){
        $("#personal-info").submit(function(e){
            e.preventDefault();
            var likes =parseInt($("#totalLikes").text());
            var a1 = $('#like_test1').val();
            //alert(likes);
            console.log(likes);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>/add_like',
                data: {a1:a1},
              //alert(data);
                success:function()
                {
                    likes++;
                    console.log(likes);
                    $("#totalLikes").text(likes);
                    //alert('SUCCESS!!');
                },
                error:function(erroe)
                {
                    console.log(erroe);
                    alert('fail');
                }
            });
        });
    });

    $(':radio').change(
  function(){
    $('.choice').text( this.value + ' stars' );
  } 
)
</script>


<!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript">
    <?php
    if (!empty($car_tree)) {
      $x=1;
      foreach ($car_tree as $category => $val) {
          ?>
          $('#myCarousel<?php echo $x; ?>').carousel({
            interval: 100000
          })

          $('#myCarousel<?php echo $x; ?> .item').each(function(){
            var next = $(this).next();
            if (!next.length) {
              next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
            
            if (next.next().length>0) {
              next.next().children(':first-child').clone().appendTo($(this));
            }
            else {
              $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
            }
          });
          <?php
          $x++;
      }
    }
    ?>
 // Instantiate the Bootstrap carousel
$('.multi-item-carousel').carousel({
  interval: 100000
});

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});

//Allows bootstrap carousels to display 3 items per page rather than just one
$('.carousel.carousel-multi .item').each(function () {
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().attr("aria-hidden", "true").appendTo($(this));

  if (next.next().length > 0) {
    next.next().children(':first-child').clone().attr("aria-hidden", "true").appendTo($(this));
  }
  else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0; i<1; i++) {
    next=next.next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    
    next.children(':first-child').clone().appendTo($(this));
  }
});




(function(){
  // setup your carousels as you normally would using JS
  // or via data attributes according to the documentation
  // https://getbootstrap.com/javascript/#carousel
  $('#carousel123').carousel({ interval: 100000 });
  $('#carouselABC').carousel({ interval: 100000 });
}());

(function(){
  $('.carousel-showmanymoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<3;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
}());

 

 </script>


  
    <script>
        $(document).ready(function(){  //alert();

          $.validator.addMethod("alphabetsnspace", function(value, element) {
              return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
            });

          $.validator.addMethod("nowhitespace", function(value, element) {
            return this.optional(element) || /^\S+$/i.test(value);
          }, "Blank space is not required.");


          jQuery.validator.addMethod("alphanumeric", function(value, element) {
           return this.optional(element) || /^[\w.]+$/i.test(value);
          }, "Letters, numbers, and underscores only please.");

          jQuery.validator.addMethod("emails", function(value, element) {
           return this.optional(element) || /^[a-z][a-zA-Z0-9_]*(\.[a-zA-Z][a-zA-Z0-9_]*)?@[a-z][a-zA-Z-0-9]*\.[a-z]+(\.[a-z]+)?$/i.test(value);
          }, "Please enter valid email.");


function phoneFormatter() {

 $('.phone').on('input', function() {
   var number = $(this).val().replace(/[^\d]/g, '')
   if (number.length == 7) {
     number = number.replace(/(\d{3})(\d{4})/, "$1-$2");
   } else if (number.length == 14) {
     number = number.replace(/(\d{3})(\d{3})(\d{8})/, "($1) $2-$3");
   }
   $(this).val(number)
 });
};

$(phoneFormatter);

$("#name").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z ]*$') ) {
        $('.msgname').hide();
        $('.success').show();
    } else {
        $('.msgname').hide();
       $('.errorname').show();
    }
});
         


          $("#page_form").validate({
            // Specify validation rules
            ignore: [],
              debug: false,
            rules: {
            
             
            email: {
              required:true,
               email: true,
               emails:true,
              nowhitespace: true
            },
            contact: {
              minlength: 7,
              maxlength: 14,
              required: true
            },
            name: {
              required: true              
            },
             cate_id: {
              required: true
            },
              city_id: {
              required: true
            },
            message:{
              required:true
            }
        
         },
            messages: {
              name: {
              required: "<?php if ($_SESSION['Language']== 'arabic') { 
                               echo " مطلوب اسم. ";
                            }elseif ($_SESSION['Language']== 'russian') { 
                               echo "Имя обязательно.";
                       }elseif ($_SESSION['Language']== 'chiness') { 
                               echo "名称为必填项。";
                            }else{ 
                               echo "Name is required.";
                            } 
                      ?>"
             
             },
               cate_id: {
              required: "<?php if ($_SESSION['Language']== 'arabic') { 
                               echo " يرجى اختيار الخدمة. ";
                            }elseif ($_SESSION['Language']== 'russian') { 
                               echo "Пожалуйста, выберите сервис.";
                       }elseif ($_SESSION['Language']== 'chiness') { 
                               echo "请选择服务。";
                            }else{ 
                               echo "Please Select Service.";
                            } 
                      ?>",
             
             },
             city_id: {
              required: "<?php if ($_SESSION['Language']== 'arabic') { 
                               echo " .الرجاء اختيار المدينة ";
                            }elseif ($_SESSION['Language']== 'russian') { 
                               echo "Пожалуйста, выберите город.";
                       }elseif ($_SESSION['Language']== 'chiness') { 
                               echo "请选择城市 .";
                            }else{ 
                               echo "Please Select City.";
                            } 
                      ?>"
             
             },
             message: {
              required: "<?php if ($_SESSION['Language']== 'arabic') { 
                               echo " .الرسالة المطلوبة ";
                            }elseif ($_SESSION['Language']== 'russian') { 
                               echo "Требуется сообщение.";
                       }elseif ($_SESSION['Language']== 'chiness') { 
                               echo "需要留言 .";
                            }else{ 
                               echo "Message required.";
                            } 
                      ?>"
             
             },
             
             email: {
              required: "<?php $email =$this->db->get_where('tbl_website_translate', array('lang_id' =>40))->row(); 
                      if ($_SESSION['Language']== 'arabic' && $email->arabic!="") { 
                             echo ucfirst($email->arabic);
                            }elseif ($_SESSION['Language']== 'russian' && $email->russian!="") { 
                               echo ucfirst($email->russian);
                       }elseif ($_SESSION['Language']== 'chiness' && $email->chiness!="") { 
                               echo ucfirst($email->chiness);
                            }else{ 
                               echo ucfirst($email->title);
                            } 
                      ?>",
               emails: "<?php $emails =$this->db->get_where('tbl_website_translate', array('lang_id' =>41))->row(); 
                      if ($_SESSION['Language']== 'arabic' && $emails->arabic!="") { 
                             echo ucfirst($emails->arabic);
                            }elseif ($_SESSION['Language']== 'russian' && $emails->russian!="") { 
                               echo ucfirst($emails->russian);
                       }elseif ($_SESSION['Language']== 'chiness' && $emails->chiness!="") { 
                               echo ucfirst($emails->chiness);
                            }else{ 
                               echo ucfirst($emails->title);
                            } 
                      ?>",
                       email: "<?php $emailss =$this->db->get_where('tbl_website_translate', array('lang_id' =>41))->row(); 
                      if ($_SESSION['Language']== 'arabic' && $emailss->arabic!="") { 
                             echo ucfirst($emailss->arabic);
                            }elseif ($_SESSION['Language']== 'russian' && $emailss->russian!="") { 
                               echo ucfirst($emailss->russian);
                       }elseif ($_SESSION['Language']== 'chiness' && $emailss->chiness!="") { 
                               echo ucfirst($emailss->chiness);
                            }else{ 
                               echo ucfirst($emailss->title);
                            } 
                      ?>",
                      
             },
             
             contact: {
              minlength: "<?php if ($_SESSION['Language']== 'arabic') { 
                               echo "الحد الأدنى للطول هو";
                            }elseif ($_SESSION['Language']== 'russian') { 
                               echo "Минимальная длина";
                       }elseif ($_SESSION['Language']== 'chiness') { 
                               echo "最小长度为";
                            }else{ 
                               echo "Minimum length is";
                            } 
                      ?> 7",
              maxlength: "<?php if ($_SESSION['Language']== 'arabic') { 
                               echo " الحد الأقصى للطول هو ";
                            }elseif ($_SESSION['Language']== 'russian') { 
                               echo "Максимальная длина";
                       }elseif ($_SESSION['Language']== 'chiness') { 
                               echo "最大长度为";
                            }else{ 
                               echo "Max length is";
                            } 
                      ?>  14.",              
              required: "<?php $phone =$this->db->get_where('tbl_website_translate', array('lang_id' =>42))->row(); 
                      if ($_SESSION['Language']== 'arabic' && $phone->arabic!="") { 
                             echo ucfirst($phone->arabic);
                            }elseif ($_SESSION['Language']== 'russian' && $phone->russian!="") { 
                               echo ucfirst($phone->russian);
                       }elseif ($_SESSION['Language']== 'chiness' && $phone->chiness!="") { 
                               echo ucfirst($phone->chiness);
                            }else{ 
                               echo ucfirst($phone->title);
                            } 
                      ?>",

             },
 
             
            },
         
          });

         

    });


     $(function() {
// Setup form validation on the #register-form element
$("#feedback_form").validate({

// Specify the validation rules
rules: {
rating: "required",  
username: "required",
country: "required",
},

// Specify the validation error messages
messages: {
rating: "Please enter Ratting",
username: "Please enter Name",
country: "Please Select country",

},

submitHandler: function(form) {
form.submit();
}
});

});  
  </script>



<style type="text/css">
.msgname {
    
    display: none;
}
.errorname {
    color: red;
}
.success {
    color: green;
}





  /* override position and transform in 3.3.x */
.carousel-inner .item.left.active {
  transform: translateX(-33%);
}
.carousel-inner .item.right.active {
  transform: translateX(33%);
}

.carousel-inner .item.next {
  transform: translateX(33%)
}
.carousel-inner .item.prev {
  transform: translateX(-33%)
}

.carousel-inner .item.right,
.carousel-inner .item.left { 
  transform: translateX(0);
}


.carousel-control.left,.carousel-control.right {background-image:none;}



/*3*/
.carousel-control        { width:  4%; }
.carousel-control.left,.carousel-control.right {margin-left:15px;background-image:none;}

@media (min-width: 767px) and (max-width: 992px ) {
  .carousel-inner .active.left { left: -50%; }
  .carousel-inner .next        { left:  50%; }
  .carousel-inner .prev    { left: -50%; } 
  .active > div:first-child { display:block; }
  .active > div:first-child + div { display:block; }
}
@media (min-width: 992px ) {
  .carousel-inner .active.left { left: -25%; }
  .carousel-inner .next        { left:  25%; }
  .carousel-inner .prev    { left: -25%; }  
}

</style>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
  </body>

</html>
