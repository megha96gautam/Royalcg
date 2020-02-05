
  <div class="main-section">
    <div class="site-breadcrumb">
      <div class="container co_bac_con">
        <a href="http://royalcg.com/demo/"><i class="fa fa-home"></i>
          <?php $us =$this->db->get_where('tbl_website_translate', array('lang_id' =>1))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $us->arabic!="") { 
                          echo ucfirst($us->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $us->russian!="") { 
                         echo ucfirst($us->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $us->chiness!="") { 
                            echo ucfirst($us->chiness);
                          }else{ 
                          echo ucfirst($us->title);
                        } 
                ?></a>
        <span><i class="fa fa-angle-right"></i>
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
                ?></span>
      </div>
    </div>
    <section class="page-section">
    <div class="container">
      <div class="row" id="contatti">
<div class="container mt-3" >
    <div class="row" style="height:515px;">
      <div class="col-md-6 maps" >
       <iframe width="640" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Khalifa%20Park%2C%20Abu%20Dhabi%20UAE&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>
      <div class="col-md-6">
      
        <h2 class="text-uppercase font-weight-bold  mt-2">
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
                ?></h2>
         <form name="addcontact" method="post"  id="page_form" action="add_contact" class="form-horizontal" style="margin: 20px;">

      <!--   <form action="<?php echo base_url().'enquiry';?>" enctype="multipart/form-data" method="post" class="form-horizontal" id="page_form"> -->
              <div class="row">
               
                <div class="col-md-12">
                 <!--  <span id="email_result1"></span> -->
                  <div class="">
                    <input type="email" class="form-control" id="email" name="email" placeholder="<?php $em =$this->db->get_where('tbl_website_translate', array('lang_id' =>26))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $em->arabic!='') { 
                          echo ucfirst($em->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $em->russian!='') { 
                         echo ucfirst($em->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $em->chiness!='') { 
                            echo ucfirst($em->chiness);
                          }else{ 
                          echo ucfirst($em->title);
                        } 
                ?>"  required="">
                  </div>
                </div>
              </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="">                     
                      <input type="text" class="form-control" id="name" name="name" placeholder="<?php $name =$this->db->get_where('tbl_website_translate', array('lang_id' =>27))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $name->arabic!='') { 
                          echo ucfirst($name->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $name->russian!='') { 
                         echo ucfirst($name->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $name->chiness!='') { 
                            echo ucfirst($name->chiness);
                          }else{ 
                          echo ucfirst($name->title);
                        } 
                ?>" required="">
                       <div class="msgname errorname" style="" ><b><?php $alp =$this->db->get_where('tbl_website_translate', array('lang_id' =>44))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $alp->arabic!="") { 
                          echo ucfirst($alp->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $alp->russian!="") { 
                         echo ucfirst($alp->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $alp->chiness!="") { 
                            echo ucfirst($alp->chiness);
                          }else{ 
                          echo ucfirst($alp->title);
                        } 
                ?></b></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="">                     
                      <input type="text" maxlength="14" class="phone form-control" id="contact"  name="contact" placeholder="<?php $contact =$this->db->get_where('tbl_website_translate', array('lang_id' =>4))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $contact->arabic!='') { 
                          echo ucfirst($contact->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $contact->russian!='') { 
                         echo ucfirst($contact->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $contact->chiness!='') { 
                            echo ucfirst($contact->chiness);
                          }else{ 
                          echo ucfirst($contact->title);
                        } 
                ?>"  required=""></input>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="">                     
                      <select name="cate_id" id="cate_id"  class="form-control" required="">
                        <option ><?php $service =$this->db->get_where('tbl_website_translate', array('lang_id' =>39))->row(); 
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
                   <?php  foreach ($pages_cate as $cate){  ?>
                        <option value="<?php echo $cate['id'];?>">
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
                   ?> </option>
                        <?php 
                        } 
                        ?>
                      </select>
                    </div>
                  </div> 
                </div>              

                <div class="row">
                  <div class="col-md-12">
                    <div class="">                       
                    <textarea class="form-control" id="message" name="message" placeholder="Message"  required="">                     
                    </textarea>
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
                ?></button>
                    </div>
                  </div>
                </div>
         <!--  </form> -->
        </form>
            <h4  style="margin-left: 87px; color: green;"> <?php
          if($this->session->flashdata('msg')!="") {
            echo $this->session->flashdata('msg');
          } ?>
          </h4>
          <h4 style="color: red;"><?php 
           if($this->session->flashdata('error')!="") {
            echo $this->session->flashdata('error');
          }
          ?> </h4>
        <ul class="address-cls">   
          <li>
       <i class="fa fa-phone mt-3"></i> <a href="tel:+">971 2 644 4514</a></li>
       <li> <i class="fa fa-envelope"></i> <a href="">info@royalcg.com</a></li>
       <li> <i class="fa fa-globe"></i>
        <?php   if ($_SESSION['Language']== 'arabic' && $footer->address_arabic!="") { 
                          echo $footer->address_arabic;
                        }elseif ($_SESSION['Language']== 'russian' && $footer->address_russian!="") { 
                         echo $footer->address_russian;
                        }elseif ($_SESSION['Language']== 'chiness' && $footer->address_chiness!="") { 
                            echo $footer->address_chiness;
                          }else{ 
                          echo  $footer->address;
                        } ?>
               <br>
      </ul>
              </div>
    </div>
</div>     

    </div>

    </section>
  </div>

