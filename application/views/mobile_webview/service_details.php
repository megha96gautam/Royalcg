
<?php $lang = $this->uri->segment(3); 
   //print_r($lang); die();
 ?>
<div class="welcome-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-12 wow fadeInUp">
				<div class="heading-sec">

					<h2><?php
                  if($lang == 'ar' && $details->title_arabic!=""){
                        echo ucfirst($details->title_arabic);
                  }elseif($lang == 'ru' && $details->title_russian!=""){
                      echo ucfirst($details->title_russian);
                  }elseif($lang == 'zh' && $details->title_chiness!=""){
                      echo ucfirst($details->title_chiness);
                  }else{
                    echo ucfirst($details->page_title);
                  } ?>
                    
          </h2>
				</div>
				<div class="des_box">
             <p><?php
                  if($lang == 'ar' && $details->heading_arabic!=""){
                        echo ucfirst($details->heading_arabic);
                  }elseif($lang == 'ru' && $details->heading_russian!=""){
                      echo ucfirst($details->heading_russian);
                  }elseif($lang == 'zh' && $details->heading_chiness!=""){
                      echo ucfirst($details->heading_chiness);
                  }else{
                    echo ucfirst($details->page_heading);
                  } ?>
					</p>
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
               <?php
                  if($lang == 'ar' && $details->desc_arabic!=""){
                        echo $details->desc_arabic;
                  }elseif($lang == 'ru' && $details->desc_russian!=""){
                      echo $details->desc_russian;
                  }elseif($lang == 'zh' && $details->desc_chiness!=""){
                      echo $details->desc_chiness;
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
  					<figure><img src="<?php echo base_url(); ?>assets/images/icon_real.png" alt=""></figure>
  					<h2> <?php if ($lang == 'ar') { ?>
                      تحقيق
                   <?php }elseif($lang == 'zh'){ ?>
                          查询
                  <?php }elseif ($lang == 'ru') { ?>
                        запрос
                  <?php }else{ ?>
                      Inquiry
                      <?php } ?></h2>
  					<p><?php $qutes =$this->db->get_where('tbl_website_translate', array('lang_id' =>37))->row(); 
                       if ($lang == 'ar' && $qutes->arabic!="") { 
                          echo ucfirst($qutes->arabic);
                        }elseif ($lang == 'ru' && $qutes->russian!="") { 
                         echo ucfirst($qutes->russian);
                        }elseif ($lang == 'zh' && $qutes->chiness!="") { 
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
                       if ($lang == 'ar' && $detail->arabic!="") { 
                          echo ucfirst($detail->arabic);
                        }elseif ($lang == 'ru' && $detail->russian!="") { 
                         echo ucfirst($detail->russian);
                        }elseif ($lang == 'zh' && $detail->chiness!="") { 
                            echo ucfirst($detail->chiness);
                          }else{ 
                          echo ucfirst($detail->title);
                        } 
                 
                if($lang == 'ar' && $details->title_arabic!=""){
                        echo ucfirst($details->title_arabic);
                  }elseif ($lang == 'ru' && $details->title_russian!="") {
                    echo ucfirst($details->title_russian);
                }elseif ($lang == 'zh' && $details->title_chiness!="") {
                  echo ucfirst($details->title_chiness);
                } else {
                  echo ucfirst($details->page_title);
                }
                  ?></h4>
  					 <form action="<?php echo base_url().'webapi/enquiry_mobile';?>" enctype="multipart/form-data" method="post" class="form-horizontal" id="page_form">
  					 	<?php $cate_id= $this->uri->segment(4);?>
              <input type="hidden" value="<?php echo $cate_id; ?>" name="cate_id">
  					 	<input type="hidden" value="<?php echo $lang; ?>" name="lang">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">                     
                      <input type="text" class="form-control" id="name" name="name" placeholder="<?php $nm =$this->db->get_where('tbl_website_translate', array('lang_id' =>27))->row(); 
                       if ($lang == 'ar' && $nm->arabic!="") { 
                          echo ucfirst($nm->arabic);
                        }elseif ($lang== 'ru' && $nm->russian!="") { 
                         echo ucfirst($nm->russian);
                        }elseif ($lang== 'zh' && $nm->chiness!="") { 
                            echo ucfirst($nm->chiness);
                          }else{ 
                          echo ucfirst($nm->title);
                        } 
                ?>" required="">
                      
                    </div>
                  </div>
                  <div class="col-md-12">
                   <!--  <span id="email_result1"></span> -->
                    <div class="form-group">
                      <input type="text" class="form-control"  name="email" placeholder="<?php $em =$this->db->get_where('tbl_website_translate', array('lang_id' =>26))->row(); 
                       if ($lang == 'ar' && $em->arabic!="") { 
                          echo ucfirst($em->arabic);
                        }elseif ($lang== 'ru' && $em->russian!="") { 
                         echo ucfirst($em->russian);
                        }elseif ($lang== 'zh' && $em->chiness!="") { 
                            echo ucfirst($em->chiness);
                          }else{ 
                          echo ucfirst($em->title);
                        } 
                ?>" required="">
                    </div>
                  </div>
                 
                  <div class="col-md-12">
                  <div class="form-group">                     
                  <select name="city_id" id="city_id"  class="form-control" required="">
                  <option value=""><?php $city =$this->db->get_where('tbl_website_translate', array('lang_id' =>38))->row(); 
                       if ($lang == 'ar' && $city->arabic!="") { 
                          echo ucfirst($city->arabic);
                        }elseif ($lang== 'ru' && $city->russian!="") { 
                         echo ucfirst($city->russian);
                        }elseif ($lang== 'zh' && $city->chiness!="") { 
                            echo ucfirst($city->chiness);
                          }else{ 
                          echo ucfirst($city->title);
                        } 
                ?></option>
                  <?php  
                  foreach($cities as $cite){
                  ?>
                  <option value="<?php echo $cite->city_name;?>">
                    <?php   
                    if ($lang == 'ar' && $cite->city_arabic!="") { 
                          echo ucfirst($cite->city_arabic);
                        }elseif ($lang== 'ru' && $cite->city_russian!="") { 
                         echo ucfirst($cite->city_russian);
                        }elseif ($lang== 'zh' && $cite->city_chiness!="") { 
                            echo ucfirst($cite->city_chiness);
                          }else{ 
                          echo ucfirst($cite->city_name);
                        } ?> </option>
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
  	                    <input type="number" maxlength="14" minlength="7" id="UserPhone" class="form-control" name="contact" placeholder="<?php $contact =$this->db->get_where('tbl_website_translate', array('lang_id' =>4))->row(); 
                       if ($lang== 'ar' && $contact->arabic!="") { 
                          echo ucfirst($contact->arabic);
                        }elseif ($lang == 'ru' && $contact->russian!="") { 
                         echo ucfirst($contact->russian);
                        }elseif ($lang == 'zh' && $contact->chiness!="") { 
                            echo ucfirst($contact->chiness);
                          }else{ 
                          echo ucfirst($contact->title);
                        } 
                ?>" required="">
  	                  </div>
  	                </div>
  	               <?php if($details->id==34){ ?>
  	                <div class="col-md-6">
  	                  <div class="form-group">                        
  	                    <input type="number" class="form-control" placeholder="No of Passengers" name="no_passengers" required="">
  	                  </div>
  	                </div> 
  	                  <?php }elseif($details->id==24){?> 
  	                  <div class="col-md-6">
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
                      if ($lang== 'ar' && $mess->arabic!="") { 
                             echo ucfirst($mess->arabic);
                            }elseif ($lang== 'ru' && $mess->russian!="") { 
                               echo ucfirst($mess->russian);
                       }elseif ($lang== 'zh' && $mess->chiness!="") { 
                               echo ucfirst($mess->chiness);
                            }else{ 
                               echo ucfirst($mess->title);
                            } 
                      ?>" required=""></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group submit-f"> 
                       <button type="submit" name="submit" class="submit-btn"><?php $submit =$this->db->get_where('tbl_website_translate', array('lang_id' =>25))->row(); 
                       if ($lang == 'ar' && $submit->arabic!="") { 
                          echo ucfirst($submit->arabic);
                        }elseif ($lang == 'ru' && $submit->russian!="") { 
                         echo ucfirst($submit->russian);
                        }elseif ($lang == 'zh' && $submit->chiness!="") { 
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
             
            <h4 style="color: green; margin-left: 150px;"> <?php
            if($this->session->flashdata('msg')!="") {
              echo $this->session->flashdata('msg');
            }?>
          </h4>
          <h4 style="color: red;"><?php 
             if($this->session->flashdata('error')!="") {
              echo $this->session->flashdata('error');
            }
            ?>  </h4>  
  				</div>			
  			</div>
  		</div>
  	</div>
  </section>
</div>

<script type="text/javascript">
	$('.alert').alert()
</script>


