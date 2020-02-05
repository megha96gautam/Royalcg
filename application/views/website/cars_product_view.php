


	<div class="main-section">
		<div class="site-breadcrumb">
			<div class="container">
				<a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> 
				 <?php $home =$this->db->get_where('tbl_website_translate', array('lang_id' =>1))->row(); 
               			if ($_SESSION['Language']== 'arabic' && $home->arabic!="") { 
                          echo ucfirst($home->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $home->russian!="") { 
                         echo ucfirst($home->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $home->chiness!="") { 
                         echo ucfirst($home->chiness);
                          }else{ 
                          echo ucfirst($home->title);
                        } 
                ?></a>
				<span><i class="fa fa-angle-right"></i>
					  <?php if ($_SESSION['Language']== 'arabic') { ?>
                   		  تفاصيل المنتج
                    <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                 		  产品详情
                    <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                		  информация о продукте
                    <?php }else{ ?>
                		   Product Details
                    <?php } ?>
				</span>
			</div>
		</div>	 

		<section class="page-section">
		<div class="container">
			<div class="row">
        		<div class="col-lg-7 col-md-7 single-list-page" id="slider">
		            <div id="myCarousel" class="carousel slide detail-cls">
		                <!-- main slider carousel items -->
		                <div class="carousel-inner">
		                    <div class="active carousel-item" data-slide-number="0">
		                    	<?php   if($product[0]['pro_thumb']!=""){?>
		                        <img src="<?php echo base_url();?>images/listing/<?php echo $product[0]['pro_thumb']; ?>"  class="img-fluid">
		                         <?php } else{?>
                                   <img src="<?php echo base_url(); ?>images/place.png" class="img-fluid">
                                <?php }?>
		                    </div>
		                    <div class="carousel-item" data-slide-number="1">
		                    	<?php   if($product[0]['pro_inner']!=""){?>
		                        <img src="<?php echo base_url();?>images/listing/<?php echo $product[0]['pro_inner']; ?>" class="img-fluid">
		                         <?php } else{?>
                                    <img src="<?php echo base_url(); ?>images/place.png" class="img-fluid">
                                <?php }?>
		                    </div>
		                    <div class="carousel-item" data-slide-number="2">
		                    	<?php   if($product[0]['pro_header']!=""){?>
		                      <img src="<?php echo base_url();?>images/listing/<?php echo $product[0]['pro_header']; ?>" class="img-fluid">
		                       <?php } else{?>
		                       <img src="<?php echo base_url(); ?>images/place.png" class="img-fluid">
		                       <?php }?>
		                    </div>    
		                    <div class="carousel-item" data-slide-number="3">
		                    	 <?php   if($product[0]['image1']!=""){?>
		                        <img src="<?php echo base_url();?>images/listing/<?php echo $product[0]['image1']; ?>" class="img-fluid">
		                         <?php } else{?>
                                   <img src="<?php echo base_url(); ?>images/place.png" class="img-fluid">
                                <?php }?>
		                    </div>    
		                    <div class="carousel-item" data-slide-number="4">
		                    	 <?php   if($product[0]['image2']!=""){?>
		                        <img src="<?php echo base_url();?>images/listing/<?php echo $product[0]['image2']; ?>" class="img-fluid">
		                        <?php } else{?>
                                   <img src="<?php echo base_url(); ?>images/place.png" class="img-fluid">
                                <?php }?>
		                    </div>    
		                    <div class="carousel-item" data-slide-number="5">
		                        
		                        <?php   if($product[0]['image3']!=""){?>
		                           <img src="<?php echo base_url();?>images/listing/<?php echo $product[0]['image3']; ?>" class="img-fluid">
                                <?php } else{?>
                                   <img src="<?php echo base_url(); ?>images/place.png" class="img-fluid">
                                <?php }?>
		                    </div>               
		                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">

		                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

		                        <span class="sr-only">Previous</span>

		                    </a>

		                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">

		                        <span class="carousel-control-next-icon" aria-hidden="true"></span>

		                        <span class="sr-only">Next</span>

		                    </a>



		                </div>

		                <!-- main slider carousel nav controls -->





		                <ul class="carousel-indicators list-inline mx-auto border px-2">

		                    <li class="list-inline-item active">

		                        <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
								 <?php   if($product[0]['pro_thumb']!=""){?>
		                            <img src="<?php echo base_url();?>images/listing/<?php echo $product[0]['pro_thumb']; ?>" class="img-fluid">
		                        <?php }else{ ?>
		                            <img src="<?php echo base_url(); ?>images/place.png" class="img-fluid">
		                            <?php } ?>
		                        </a>

		                    </li>

		                    <li class="list-inline-item">

		                        <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
		                        	<?php   if($product[0]['pro_inner']!=""){?>
		                            <img src="<?php echo base_url();?>images/listing/<?php echo $product[0]['pro_inner']; ?>" class="img-fluid">
		                           
		                             <?php }else{ ?>
		                            <img src="<?php echo base_url(); ?>images/place.png" class="img-fluid">
		                            <?php } ?>

		                        </a>

		                    </li>

		                    <li class="list-inline-item">

		                        <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
								 <?php   if($product[0]['pro_header']!=""){?>
		                            <img src="<?php echo base_url();?>images/listing/<?php echo $product[0]['pro_header']; ?>" class="img-fluid">
		                            <?php } else{?>
                                   <img src="<?php echo base_url(); ?>images/place.png" class="img-fluid">
                                <?php }?>

		                        </a>

		                    </li>
                              <li class="list-inline-item">
                              <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
                                <?php   if($product[0]['image1']!=""){?>
		                            <img src="<?php echo base_url();?>images/listing/<?php echo $product[0]['image1']; ?>" class="img-fluid">
                                <?php } else{?>
                                   <img src="<?php echo base_url(); ?>images/place.png" class="img-fluid">
                                <?php }?>
		                        </a>
		                   
                            </li>
		                    <li class="list-inline-item">
                              <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
                                <?php   if($product[0]['image2']!=""){?>
		                            <img src="<?php echo base_url();?>images/listing/<?php echo $product[0]['image2']; ?>" class="img-fluid">
                                <?php } else{?>
                                   <img src="<?php echo base_url(); ?>images/place.png" class="img-fluid">
                                <?php }?>
		                        </a>
		                   
                            </li>
		                    <li class="list-inline-item">
                              <a id="carousel-selector-5" data-slide-to="5" data-target="#myCarousel">
                                <?php   if($product[0]['image3']!=""){?>
		                            <img src="<?php echo base_url();?>images/listing/<?php echo $product[0]['image3']; ?>" class="img-fluid">
                                <?php } else{?>
                                   <img src="<?php echo base_url(); ?>images/place.png" class="img-fluid">
                                <?php }?>
		                        </a>
		                   
                            </li>

		                </ul>

		            </div>

				</div>

				<!-- sidebar -->

				<div class="col-lg-5 col-md-5 col-md-5 sidebar">

					<div class="sidebar-right">

						<h2><?php 
						 if ($_SESSION['Language']== 'arabic' && $product[0]['title_arabic']!="") { 
                        			  echo ucfirst($product[0]['title_arabic']);
                      			  }elseif ($_SESSION['Language']== 'russian' && $product[0]['title_russian']!="") { 
                       				  echo ucfirst($product[0]['title_russian']);
                       			 }elseif ($_SESSION['Language']== 'chiness' && $product[0]['title_chiness']!="") { 
                        		    echo ucfirst($product[0]['title_chiness']);
                         		 }else{ 
                         		 echo ucfirst($product[0]['meta_title']);
                       			 }   ?></h2>

						
						

   	                    <div class="rank-n">

   	                    	<p><?php 
   	                    	if ($_SESSION['Language']== 'arabic' && $product[0]['desc_arabic']!="") { 
                        			  echo ucfirst($product[0]['desc_arabic']);
                      			  }elseif ($_SESSION['Language']== 'russian' && $product[0]['desc_russian']!="") { 
                       				  echo ucfirst($product[0]['desc_russian']);
                       			 }elseif ($_SESSION['Language']== 'chiness' && $product[0]['desc_chiness']!="") { 
                        		    echo ucfirst($product[0]['desc_chiness']);
                         		 }else{ 
                         		 echo ucfirst($product[0]['meta_discription']);
                       			 } 

   	                    	?></p>

   	                    </div>

   	                    <div class="peice-r">

   	                    	<h3 class="hotel-price">

   	                    		<span>
								   <?php   
								   if($_SESSION['currency'] !='AED' && $_SESSION['currency']!=''){
									$req_url = 'https://api.exchangerate-api.com/v4/latest/AED';
									$response_json = file_get_contents($req_url);
									$response_object = json_decode($response_json);
									$base_price = $product[0]['product_pricing'];
									$currncy_price = round(($base_price * $response_object->rates->$_SESSION['currency']), 2);
                                    echo $currncy_price; ?><span> <?php echo $_SESSION['currency']; ?></span><?php
								   }else{
									echo $product[0]['product_pricing'];?><span> AED</span><?php 
								   }
								    ?></span>
								    
									

   	                    	</h3>

   	                    	

   	                    	<div class="hd-hotel__coupon">
   	                    		<!-- <span class="text-1 hd-hotel__coupon__code"><?php   echo $product[0]['product_pricing']; ?> -->
								
   	                    	<div class="book-n">
                              <h6>
                            </div>    	                    	
            		             	<div class="rating-n">
            		             			<?php										
		                                   
                                                    $z=round($avg_rating[0]['AVGRATE'],1);
				                                     for($j=1; $j<=5; $j++)
													      { ?>
													      	<i class="<?php if($j<=$z){  echo  'fa fa-star'; }else{  echo  'fa fa-star'; } ?>" style="<?php if(round($j,1)<=$z){  echo  'font-size:20px; color: #f6ab3f'; }else{  echo  'font-size:20px; color: #e0e0e0'; } ?>" aria-hidden="true"></i>
													        
												 <?php  } ?>
		                    <span><?php echo $reviews[0]['reviews'] ?>  
		                    <?php $rev =$this->db->get_where('tbl_website_translate', array('lang_id' =>28))->row(); 
             				  if ($_SESSION['Language']== 'arabic' && $rev->arabic!="") { 
             		             echo ucfirst($rev->arabic);
              		          }elseif ($_SESSION['Language']== 'russian' && $rev->russian!="") { 
                			         echo ucfirst($rev->russian);
                 			 }elseif ($_SESSION['Language']== 'chiness' && $rev->chiness!="") { 
                        			 echo ucfirst($rev->chiness);
                      	    }else{ 
                       			   echo ucfirst($rev->title);
                  		      } 
              			  ?></span>
   	                    </div>
   	                   
   	                    	<div class="book-n">
		                    	<a href="#" class="room-price" data-toggle="modal" data-target="#Enquiry_Form">

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
              			  ?></a> 
			                     <span> <a href="#" data-toggle="modal" data-target="#myModal" class="room-price">  
			                <?php $feed =$this->db->get_where('tbl_website_translate', array('lang_id' =>29))->row(); 
             				  if ($_SESSION['Language']== 'arabic' && $feed->arabic!="") { 
             		             echo ucfirst($feed->arabic);
              		          }elseif ($_SESSION['Language']== 'russian' && $feed->russian!="") { 
                			         echo ucfirst($feed->russian);
                 			 }elseif ($_SESSION['Language']== 'chiness' && $feed->chiness!="") { 
                        			 echo ucfirst($feed->chiness);
                      	    }else{ 
                       			   echo ucfirst($feed->title);
                  		      } 
              			  ?></a></span>
			                     <form action="" method="POST" id="personal-info" class="form-group">
			                     <span class="center-s">
			                     	<!-- like user -->

                                  <input type="hidden" id="like_test1" value="<?php echo $this->uri->segment(2); ?>">

			                     	<button type="submit" d="submit-p" id="like_test" class="room-price"><i class="fa fa-heart" aria-hidden="true"></i> <span id="totalLikes"><?php echo $product[0]['product_likes'] ?> </span></button>    								
			                     	</span>
			                     	  </form>
		                   </div>
		                 
		                   <div class="social-links prodect-social">
				              <ul>
				                  <li> <a href="<?php echo $product[0]['fb_url'];?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
				                  <li> <a href="<?php echo $product[0]['tw_url'];?>" class=""><i class="fa fa-twitter"></i></a></li>            
				                  <li> <a href="<?php echo $product[0]['in_url'];?>" class="linkedin"><i class="fa fa-linkedin"></i></a></li>         
				                  <!-- <li> <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li> -->
				                  <li> <a href="<?php echo $product[0]['in_url'];?>" class="instagram"><i class="fa fa-instagram"></i></a></li>        
				              </ul>
				            </div>
   	                    </div>
					</div>
				</div>
			</div>
			<div class="single-page-detail" id="TABS_REVIEWS">				
				<h2> <?php $reviews =$this->db->get_where('tbl_website_translate', array('lang_id' =>28))->row(); 
             				  if ($_SESSION['Language']== 'arabic' && $reviews->arabic!="") { 
             		             echo ucfirst($reviews->arabic);
              		          }elseif ($_SESSION['Language']== 'russian' && $reviews->russian!="") { 
                			         echo ucfirst($reviews->russian);
                 			 }elseif ($_SESSION['Language']== 'chiness' && $reviews->chiness!="") { 
                        			 echo ucfirst($reviews->chiness);
                      	    }else{ 
                       			   echo ucfirst($reviews->title);
                  		      } 
              			  ?> &  
              			  <?php $rat =$this->db->get_where('tbl_website_translate', array('lang_id' =>30))->row(); 
             				  if ($_SESSION['Language']== 'arabic' && $rat->arabic!="") { 
             		             echo ucfirst($rat->arabic);
              		          }elseif ($_SESSION['Language']== 'russian' && $rat->russian!="") { 
                			         echo ucfirst($rat->russian);
                 			 }elseif ($_SESSION['Language']== 'chiness' && $rat->chiness!="") { 
                        			 echo ucfirst($rat->chiness);
                      	    }else{ 
                       			   echo ucfirst($rat->title);
                  		      } 
              			  ?></h2>
					<div class="page-details">
						<div class="all-rating">
							<div class="all-rating-left">
								<h3> 
						 <?php if ($_SESSION['Language']== 'arabic') { ?>
                   		  تقييمات عامة
                        <?php }elseif($_SESSION['Language']== 'chiness'){ ?>
                 		  整体评分
                       <?php }elseif ($_SESSION['Language']== 'russian') { ?>
                	    	  ОБЩИЕ РЕЙТИНГИ
                  		  <?php }else{ ?>
                			  OVERALL RATINGS
                  	  <?php } ?></h3>
										<p>
										<span class="tab-review">
											<?php 
                                                    $z=round($avg_rating[0]['AVGRATE'],1);
				                                     for($j=1; $j<=5; $j++)
													      { ?>
													      	<i class="<?php if($j<=$z){  echo  'fa fa-star'; }else{  echo  'fa fa-star'; } ?>" style="<?php if(round($j,1)<=$z){  echo  'font-size:20px; color: #f6ab3f'; }else{  echo  'font-size:20px; color: #e0e0e0'; } ?>" aria-hidden="true"></i>
													        
												 <?php  } ?>
											<!-- <i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i> -->
										</span>
						<span class="wp-desc-items"> &nbsp; <?php echo round($avg_rating[0]['AVGRATE'],1); ?></span></p>
							</div>



							<div class="all-rating-right">
								<ul>
									<li class="overall-ratings__rating-item text-2 row row--middle">
										<div class="col-1">5</div>
										<div class="col-6">
											<div class="percentage">
												<div class="percentage__fill" style="width: 100%;">
															
												</div>
											</div>
										</div>
										<div class="col-5">
											<?php echo $rating5[0]['rating']; ?>
											<?php $rat1 =$this->db->get_where('tbl_website_translate', array('lang_id' =>30))->row(); 
             				                   if ($_SESSION['Language']== 'arabic' && $rat1->arabic!="") { 
	             		           						  echo ucfirst($rat1->arabic);
	              		    			      }elseif ($_SESSION['Language']== 'russian' && $rat1->russian!="") { 
                			      				   echo ucfirst($rat1->russian);
                 							 }elseif ($_SESSION['Language']== 'chiness' && $rat1->chiness!="") { 
                        						 echo ucfirst($rat1->chiness);
                      	   						 }else{ 
                       						   echo ucfirst($rat1->title);
                  		  				    } 
              							  ?></div>
											</li>
											<li class="overall-ratings__rating-item text-2 row row--middle">
												<div class="col-1">4</div>
												<div class="col-6">
													<div class="percentage">
														<div class="percentage__fill" style="width: 80%;"></div>
													</div></div>
												<div class="col-5"><?php echo $rating4[0]['rating']; ?> 
												<?php $rat2 =$this->db->get_where('tbl_website_translate', array('lang_id' =>30))->row(); 
             				                   if ($_SESSION['Language']== 'arabic' && $rat2->arabic!="") { 
	             		           						  echo ucfirst($rat2->arabic);
	              		    			      }elseif ($_SESSION['Language']== 'russian' && $rat2->russian!="") { 
                			      				   echo ucfirst($rat2->russian);
                 							 }elseif ($_SESSION['Language']== 'chiness' && $rat2->chiness!="") { 
                        						 echo ucfirst($rat2->chiness);
                      	   						 }else{ 
                       						   echo ucfirst($rat2->title);
                  		  				    } 
              							  ?>
											</div>
											</li>
											<li class="overall-ratings__rating-item text-2 row row--middle">
											 <div class="col-1">3</div>
												<div class="col-6">
												 <div class="percentage">
													<div class="percentage__fill" style="width:60%;">
														  	       	   	  	  	 
													</div>
												</div>
											   </div>
												<div class="col-5"><?php echo $rating3[0]['rating']; ?> 
										 <?php $rat3 =$this->db->get_where('tbl_website_translate', array('lang_id' =>30))->row(); 
             				                   if ($_SESSION['Language']== 'arabic' && $rat3->arabic!="") { 
	             		           						  echo ucfirst($rat3->arabic);
	              		    			      }elseif ($_SESSION['Language']== 'russian' && $rat3->russian!="") { 
                			      				   echo ucfirst($rat3->russian);
                 							 }elseif ($_SESSION['Language']== 'chiness' && $rat3->chiness!="") { 
                        						 echo ucfirst($rat3->chiness);
                      	   						 }else{ 
                       						   echo ucfirst($rat3->title);
                  		  				    } 
              							  ?></div>
											</li>
											 <li class="overall-ratings__rating-item text-2 row row--middle">
												 <div class="col-1">2</div>
													 <div class="col-6"><div class="percentage"><div class="percentage__fill" style="width:40%;"></div></div></div>
													<div class="col-5"><?php echo $rating2[0]['rating']; ?> 
										 <?php $rat4 =$this->db->get_where('tbl_website_translate', array('lang_id' =>30))->row(); 
             				                   if ($_SESSION['Language']== 'arabic' && $rat4->arabic!="") { 
	             		           						  echo ucfirst($rat4->arabic);
	              		    			      }elseif ($_SESSION['Language']== 'russian' && $rat4->russian!="") { 
                			      				   echo ucfirst($rat3->russian);
                 							 }elseif ($_SESSION['Language']== 'chiness' && $rat4->chiness!="") { 
                        						 echo ucfirst($rat4->chiness);
                      	   						 }else{ 
                       						   echo ucfirst($rat4->title);
                  		  				    } 
              							  ?></div>
												 </li>
											<li class="overall-ratings__rating-item text-2 row row--middle"><div class="col-1">1</div><div class="col-6"><div class="percentage"><div class="percentage__fill" style="width: 20%;"></div></div></div><div class="col-5"><?php echo $rating1[0]['rating']; ?>  

										<?php $rat5 =$this->db->get_where('tbl_website_translate', array('lang_id' =>30))->row(); 
             				                   if ($_SESSION['Language']== 'arabic' && $rat5->arabic!="") { 
	             		           						  echo ucfirst($rat5->arabic);
	              		    			      }elseif ($_SESSION['Language']== 'russian' && $rat5->russian!="") { 
                			      				   echo ucfirst($rat5->russian);
                 							 }elseif ($_SESSION['Language']== 'chiness' && $rat5->chiness!="") { 
                        						 echo ucfirst($rat5->chiness);
                      	   						 }else{ 
                       						   echo ucfirst($rat5->title);
                  		  				    } 
              							  ?> </div></li></ul>

										</div>

									</div>

							          	 <?php foreach ($comments as $feedback) {

									?>

 

								<div class="review-inner">

								

									<div class="row">

										<div class="col-lg-3 col-md-3">

											<div class="review-inner-img">

												<img src="<?php echo base_url(); ?>assets/images/user.png">

											</div>

										</div>

										<div class="col-lg-9 col-md-9">

											<div class="review-inner-cont">

												<!-- <h4>Good Services</h4> -->

												<span class="tab-review">

												<!-- 	<h4> <?=$feedback['rating'];?><i class="fa fa-star" data-rating="2" style="font-size:20px;color:#f6ab3f;"></i></h4>
 -->
				                                  <?php 
                                                    $k=$feedback['rating'];
				                                     for($j=1; $j<=5; $j++)
													      { ?>
													      	<i class="fa fa-star" style="<?php if($j<=$k){  echo  'font-size:20px; color: #f6ab3f'; }else{  echo  'font-size:20px; color: #e0e0e0'; } ?>" aria-hidden="true"></i>
													        
												 <?php  } ?>
													<!-- <i class="fa fa-star" aria-hidden="true"></i>

													<i class="fa fa-star" aria-hidden="true"></i>

													<i class="fa fa-star" aria-hidden="true"></i>

													<i class="fa fa-star" aria-hidden="true"></i>

													<i class="fa fa-star" aria-hidden="true"></i> -->

												</span>
												 
                                                   <h5><?php if($feedback['username']!=""){
                                                   	echo $feedback['username'];}else{
 														echo "Guest User";
                                                   		} ?></h5><h6 class="country-feedback"><?php 
                                                   	echo $feedback['country'];?></h6>
												<p><?php  if($feedback['comment']!=""){ echo $feedback['comment'];}else{
 														echo "Somthing Write...";
                                                   		}  ?></p>

											</div>

										</div>

									</div>

								<?php } ?>

								</div>



								

							</div>

						</div>

         </div>

	</section>



	</div>




