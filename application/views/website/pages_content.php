<section class="bcrumb-sec wow fadeInDown">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="bc-heading">
          <?php  if($_SESSION['Language']== 'arabic' && $details->title_arabic!=""){ ?>
            <h1><?php echo ucfirst($details->title_arabic); ?></h1>
            <?php }elseif ($_SESSION['Language']== 'russian' && $details->title_russian!="") {  ?>
               <h1><?php echo ucfirst($details->title_russian); ?></h1>
					<?php }elseif($_SESSION['Language']== 'chiness' && $details->title_chiness!=""){ ?>
            <h1><?php echo ucfirst($details->title_chiness); ?></h1>
         <?php }else{?>
            <h1><?php echo ucfirst($details->page_title); ?></h1>
         <?php } ?>
				 </div>				
			</div>
		</div>
	</div>
</section>

<div class="welcome-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-12 wow fadeInUp">
				<div class="heading-sec">
					 <?php  if($_SESSION['Language']== 'arabic' && $details->title_arabic!=""){ ?>
            <h2><?php echo ucfirst($details->title_arabic); ?></h2>
            <?php }elseif ($_SESSION['Language']== 'russian' && $details->title_russian!="") {  ?>
               <h2><?php echo ucfirst($details->title_russian); ?></h2>
          <?php }elseif($_SESSION['Language']== 'chiness' && $details->title_chiness!=""){ ?>
            <h2><?php echo ucfirst($details->title_chiness); ?></h2>
         <?php }else{?>
            <h2><?php echo ucfirst($details->page_title); ?></h2>
         <?php } ?>
				</div>
				<div class="des_box">
           <?php  if($_SESSION['Language']== 'arabic' && $details->heading_arabic!=""){ ?>
            <p><?php echo ucfirst($details->heading_arabic); ?></p>
            <?php }elseif ($_SESSION['Language']== 'russian' && $details->heading_russian!="") {  ?>
              <p><?php echo ucfirst($details->heading_russian); ?></p>

          <?php }elseif($_SESSION['Language']== 'chiness' && $details->heading_chiness!=""){ ?>
           <p><?php echo ucfirst($details->heading_chiness); ?></p>
         <?php }else{?>
           <p><?php echo ucfirst($details->page_heading); ?></p>
         <?php } ?>
					
				</div>
			</div>
		</div>
		<div class="row abt_main">			
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="carousel carousel-showmanymoveone slide detail-slider" id="carousel123">
              <div class="carousel-inner">
        	      <?php 
                          $m=1;
                      foreach ($slider as $slid) {
                         if($m == 1)
                            {
                               $class="active";
                               } else {
                                $class="";
                           }
                        ?>
                <div class="item <?php echo $class; ?>">
                  <div class="col-xs-12 col-sm-6 col-md-4"><a href="#">
                    <?php if($slid->image!=""){ ?>
            	       <img src="<?php echo base_url(); ?>assets/images/<?php echo $slid->image; ?>" class="img-responsive">
                    <?php }else{ ?>
            	       <img src="<?php echo base_url(); ?>images/place.png" class="img-responsive">
                    <?php  } ?>
                    </a>
                  </div>
                </div>
                <?php $m++; } ?>               
              </div>
              <a class="left carousel-control" href="#carousel123" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
              <a class="right carousel-control" href="#carousel123" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
	  </div>
  </div>
  <section class="box_ben mani_ben wow fadeInDown">
  		<div class="">
        <?php  if($_SESSION['Language']== 'arabic' && $details->desc_arabic!=""){ 
             echo ucfirst($details->desc_arabic); 
             }elseif ($_SESSION['Language']== 'russian' && $details->desc_russian!="") { 
             echo ucfirst($details->desc_russian);
             }
              elseif($_SESSION['Language']== 'chiness' && $details->desc_chiness!=""){  echo ucfirst($details->desc_chiness); 
              }else{
                echo $details->page_desc; 
            } ?>
  			
  			</div>
  </section>
  <section class="box_fm wow fadeInDown">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-5">
  				<div id="left_form">
  					<figure><img src="http://royalcg.com/demo/assets/images/icon_real.png" alt=""></figure>
  					<h2>
                 <?php if ($_SESSION['Language']== 'arabic') { ?>
                      تحقيق
                   <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                          查询
                  <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                        запрос
                  <?php }else{ ?>
                      Inquiry
                      <?php } ?></h2>
  					<p> <?php $qutes =$this->db->get_where('tbl_website_translate', array('lang_id' =>37))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $qutes->arabic!="") { 
                          echo ucfirst($qutes->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $qutes->russian!="") { 
                         echo ucfirst($qutes->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $qutes->chiness!="") { 
                            echo ucfirst($qutes->chiness);
                          }else{ 
                          echo ucfirst($qutes->title);
                        } 
                ?></p>				
  				</div>
  			</div>
  			<div class="col-md-7">
  				<div class="bx_right">
      
  					<h4><?php $detail =$this->db->get_where('tbl_website_translate', array('lang_id' =>36))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $detail->arabic!="") { 
                          echo ucfirst($detail->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $detail->russian!="") { 
                         echo ucfirst($detail->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $detail->chiness!="") { 
                            echo ucfirst($detail->chiness);
                          }else{ 
                          echo ucfirst($detail->title);
                        } 
                ?>
                 <?php 
                  if ($_SESSION['Language']== 'arabic' && $details->title_arabic!="") { 
                          echo ucfirst($details->title_arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $details->title_russian!="") { 
                         echo ucfirst($details->title_russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $details->title_chiness!="") { 
                            echo ucfirst($details->title_chiness);
                          }else{ 
                          echo ucfirst($details->page_title);
                        }
                  ?></h4>
  					 <form action="<?php echo base_url().'enquiry';?>" enctype="multipart/form-data" method="post" class="form-horizontal" id="page_form">
  					 	<?php $cate_id= $this->uri->segment(2);?>
  					 	<input type="hidden" value="<?php echo $cate_id; ?>" name="cate_id">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">                     
                      <input type="text" class="form-control" id="name" name="name" placeholder="<?php $nm =$this->db->get_where('tbl_website_translate', array('lang_id' =>27))->row(); 
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
                  <div class="col-md-12">
                   <!--  <span id="email_result1"></span> -->
                    <div class="form-group">
                      <input type="email" class="form-control" id="Eemail" name="email" placeholder="<?php $email =$this->db->get_where('tbl_website_translate', array('lang_id' =>26))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $email->arabic!="") { 
                          echo ucfirst($email->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $email->russian!="") { 
                         echo ucfirst($email->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $email->chiness!="") { 
                            echo ucfirst($email->chiness);
                          }else{ 
                          echo ucfirst($email->title);
                        } 
                ?>" required="">
                      <!-- <div class="msgg error" style="" ><b>Not a valid email address</b></div> -->
                    </div>
                  </div>
                 
                  <div class="col-md-12">
                  <div class="form-group">                     
                  <select name="city_id" id="category_data"  class="form-control" required="">
                  <option value="">
                    <?php $cit =$this->db->get_where('tbl_website_translate', array('lang_id' =>38))->row(); 
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
                  <?php foreach($cities as $city){ ?>
                  <option value="<?php echo $city['city_name'];?>">
                    <?php 
                       if ($_SESSION['Language']== 'arabic' && $city['city_arabic']!="") { 
                          echo $city['city_arabic'];
                        }elseif ($_SESSION['Language']== 'russian' &&   $city['city_russian']!="") { 
                          echo $city['city_russian'];
                        }elseif ($_SESSION['Language']== 'chiness' && $city['city_chiness']!="") { 
                           echo $city['city_chiness'];
                          }else{ 
                          echo $city['city_name'];
                        } 
                   ?>
                    </option>
                 <?php 
                  } 
                 ?>
                 </select>
                  </div>
                  </div>
                   <?php if($details->id==34){ ?>
  		              <div class="col-md-6">
  		                <div class="form-group">                       
  		                  <input type="text" class="form-control" placeholder="From Trip" name="from_trip" required="">
  		                </div>
  		              </div>
  		              <div class="col-md-6">
  		                <div class="form-group">                        
  		                  <input type="text" class="form-control" placeholder="To Trip" name="to_trip" required="">
  		                </div>
  		              </div>
  		     
  		          <?php }?>
  	                <div class="col-md-12">
  	                  <div class="form-group">                        
  	                    <input type="text" maxlength="14"  id="UserPhone" class="phone form-control" name="contact" placeholder="<?php $contact =$this->db->get_where('tbl_website_translate', array('lang_id' =>4))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $contact->arabic!="") { 
                          echo ucfirst($contact->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $contact->russian!="") { 
                         echo ucfirst($contact->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $contact->chiness!="") { 
                            echo ucfirst($contact->chiness);
                          }else{ 
                          echo ucfirst($contact->title);
                        } 
                ?>" required=""></input>
  	                  </div>
  	                </div>
  	               <?php if($details->id==34){ ?>
  	                <div class="col-md-6">
  	                  <div class="form-group">                        
  	                    <input type="number" class="form-control" placeholder="No of Passengers" name="no_passengers" required="">
  	                  </div>
  	                </div> 
  	                  <?php }elseif($details->id==24){?> 
  	                  <div class="col-md-12">
  			             <div class="form-group">                     
  			                <select name="accommodation" id="category_data"  class="form-control" >
  			                     <option value="Family">Select Accommodation</option>
  			                     <option value="Inside">Inside</option>
  			                     <option value="Outside">Outside</option>
  			                     <option value="Balcony">Balcony</option>
  			                     <option value="Family">Family</option>
  			               </select>
  			                </div>
                        </div>
  	                  <?php } ?>        
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
                      ?>" required=""></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group submit-f"> 
                       <button type="submit" value="submit" id="submit" class="submit-btn" ><?php $submit =$this->db->get_where('tbl_website_translate', array('lang_id' =>25))->row(); 
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
            </form>
             
            <h4 style="color: green; margin-left: 150px;"> <?php
            if(!empty($this->session->flashdata('msg'))) {
              echo $this->session->flashdata('msg');
            }?>
          </h4>
          <h4 style="color: red;"><?php 
             if(!empty($this->session->flashdata('error'))) {
              echo $this->session->flashdata('error');
            }
            ?>  </h4>  
  				</div>			
  			</div>
  		</div>
  	</div>
  </section>
</div>
<style type="text/css">
   .msgg {
    margin-left: 0px;
    display: none;
}
.error {
    color: red;
}
.success {
    color: green;
}
</style>
<script type="text/javascript">
	$('.alert').alert()
</script>


