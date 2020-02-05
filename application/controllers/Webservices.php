<?php

defined("BASEPATH") OR exit("path not defined");



class Webservices extends CI_Controller{

	function __construct(){

		parent::__construct();

		//$this->load->model('Webservice');

		// $this->load->model('Common_model');

		 $this->load->helper('resize');

		date_default_timezone_set('Asia/Calcutta');

 

	}

	/*

	 * Defult action

	 */

	function index(){

	     echo "Provide proper URL!";

	}

    /*

	 * Category  action

	 */

    function allCategory(){

	      $this->db->select('*');

	      $this->db->from("category c");

	      $this->db->join('category_detail cd', 'c.cate_id = cd.cate_id', 'left');

	      $this->db->where('cd.cate_langid', 20);

	      $this->db->where('c.cate_reaid', 14);

	      $this->db->where('c.cate_status', 1 );

	      $this->db->order_by('c.order_by','asc');   
          $query = $this->db->get();
          $query_result = $query->result_array(); 

          foreach ( $query_result as $row ){

					                    $error['categoryInfo'][] = array(

					                    	'category_id'=>$row['cate_id'],

										    'category_name'=>$row['cate_name'],

										    'category_description'=>$row['cate_desc'],

										    'category_image'=>base_url()."images/mobile_category/".$row['mobile_image'],

									  );

					$error['message'] = "success";

				    $error['status'] = 1;

		  } 



        header('Content-type: application/json');

	    echo json_encode($error);

	} 

  /*

	 * Category details  action

	 */

 function categoryDetails(){



 	       $error='';

 	       $data['category_id']	                =	$this->input->get_post('category_id');	       

 	      if(empty($data['category_id'])){

             $error['errorcode'] = "10001";

		 	 $error['message']="category id:Required parameter missing";

		  }elseif(!empty($data)){



				      $this->db->select('*');

				      $this->db->from("category c");

				      $this->db->join('category_detail cd', 'c.cate_id = cd.cate_id', 'left');

				      $this->db->where('cd.cate_langid', 20);

				      $this->db->where('c.cate_reaid', 14);

				      $this->db->where('c.cate_status', 1 );

				      $this->db->where('c.cate_id',$data['category_id']); 

				      $this->db->order_by('c.order_by','asc');   			           

			          $query = $this->db->get();

			          $query_result = $query->result_array(); 

			          foreach ( $query_result as $row ){

								                    $error['categoryInfo'][] = array(

													    'category_name'=>$row['meta_tag'],

													    'category_image'=>"http://www.uaet10.com/images/".$row['cate_image'],

													    'category_description'=>$row['cate_desc'],

												  );

					

					  }

					 $error['message'] = "success";

				     $error['status'] = 1;

		}			  

        header('Content-type: application/json');

	    echo json_encode($error);

	} 



 /*

	 * Category listing  action

	 */



 function categoryListing(){

 	       $error='';

 	       $data['category_id']	                =	$this->input->get_post('category_id');	     

 	      if(empty($data['category_id'])){

             $error['errorcode'] = "20001";

		 	 $error['message']="category id:Required parameter missing";

		  }elseif(!empty($data)){

		  

		         $query_result1 = $this->private_cat_listing($data['category_id'],1);

		  

                 foreach ( $query_result1 as $row ){

				

				         if($row['pro_title']=='Exploring Gems' or $row['pro_title']=='Exploring Gems'){

							   $error['categoryListingsInfo'][] = array(

							   	     'id'=>$row['pro_id'],

									'name'=>$row['pro_title'],

									'thumb_image'=>base_url()."images/explring_zems/ecplring_zems_tumb_new.jpg",

									'full_image'=>base_url()."images/explring_zems/ecplring_zems_new.jpg",

									'description'=>$row['pro_desc'],

									'contactno'=>$row['pro_contactno'],

									'conatctemail'=>$row['pro_conatctemail'],

									'webname'=>$row['webname'],

									'weburl'=>$row['pro_contactname'],

									'fb_url'=>$row['fb_url'],

									'ln_url'=>$row['ln_url'],

									'tw_url'=>$row['tw_url'],

									'insta_url'=>$row['insta_url'],

									'view'=>(int) $row['mobile_view'],

									'like'=>(int)$row['mobile_like'],

									'coming_soon'=>1,

									'seg'=>$row['s_id'],

									'sort'=>$row['sort'],

								);

							   //print_r("<pre/>");

		                      // print_r($error);

		                       //die;

						}else{

						

							   $error['categoryListingsInfo'][] = array(

							   	     'id'=>$row['pro_id'],

									'name'=>$row['pro_title'],

									'thumb_image'=>"http://www.uaet10.com/images/listing/".$row['pro_thumb'],

									'full_image'=>"http://www.uaet10.com/images/listing/".$row['pro_header'],

									'description'=>$row['pro_desc'],

									'contactno'=>$row['pro_contactno'],

									'conatctemail'=>$row['pro_conatctemail'],

									'webname'=>$row['webname'],

									'weburl'=>$row['pro_contactname'],

									'fb_url'=>$row['fb_url'],

									'ln_url'=>$row['ln_url'],

									'tw_url'=>$row['tw_url'],

									'insta_url'=>$row['insta_url'],

									'view'=>(int) $row['mobile_view'],

									'like'=>(int)$row['mobile_like'],

									'coming_soon'=>0,

									'seg'=>$row['s_id'],

									'sort'=>$row['sort'],

								);						

						

						}

                } 

				

		         /* $query_result2 = $this->private_cat_listing($data['category_id'],2);

		  

                 foreach ( $query_result2 as $row ){

				

				         if($row['pro_title']=='Exploring Gems' or $row['pro_title']=='Exploring Gems'){

							   $error['categoryListingsInfo'][] = array(

									'name'=>$row['pro_title'],

									'thumb_image'=>base_url()."images/explring_zems/ecplring_zems_tumb_new.jpg",

									'full_image'=>base_url()."images/explring_zems/ecplring_zems_new.jpg",

									'description'=>$row['pro_desc'],

									'contactno'=>$row['pro_contactno'],

									'conatctemail'=>$row['pro_conatctemail'],

									'webname'=>$row['webname'],

									'weburl'=>$row['pro_contactname'],

									'fb_url'=>$row['fb_url'],

									'ln_url'=>$row['ln_url'],

									'tw_url'=>$row['tw_url'],

									'insta_url'=>$row['insta_url'],

									'view'=>(int) $row['mobile_view'],

									'coming_soon'=>1,

									'seg'=>$row['s_id'],

								);

							   //print_r("<pre/>");

		                      // print_r($error);

		                       //die;

						}else{

						

							   $error['categoryListingsInfo'][] = array(

									'name'=>$row['pro_title'],

									'thumb_image'=>"http://www.uaet10.com/images/listing/".$row['pro_thumb'],

									'full_image'=>"http://www.uaet10.com/images/listing/".$row['pro_header'],

									'description'=>$row['pro_desc'],

									'contactno'=>$row['pro_contactno'],

									'conatctemail'=>$row['pro_conatctemail'],

									'webname'=>$row['webname'],

									'weburl'=>$row['pro_contactname'],

									'fb_url'=>$row['fb_url'],

									'ln_url'=>$row['ln_url'],

									'tw_url'=>$row['tw_url'],

									'insta_url'=>$row['insta_url'],

									'view'=>(int) $row['mobile_view'],

									'coming_soon'=>0,

									'seg'=>$row['s_id'],

								);						

						

						}

                }

                  



		         $query_result3 = $this->private_cat_listing($data['category_id'],3);

		  

                 foreach ( $query_result3 as $row ){

				

				         if($row['pro_title']=='Exploring Gems' or $row['pro_title']=='Exploring Gems'){

							   $error['categoryListingsInfo'][] = array(

									'name'=>$row['pro_title'],

									'thumb_image'=>base_url()."images/explring_zems/ecplring_zems_tumb_new.jpg",

									'full_image'=>base_url()."images/explring_zems/ecplring_zems_new.jpg",

									'description'=>$row['pro_desc'],

									'contactno'=>$row['pro_contactno'],

									'conatctemail'=>$row['pro_conatctemail'],

									'webname'=>$row['webname'],

									'weburl'=>$row['pro_contactname'],

									'fb_url'=>$row['fb_url'],

									'ln_url'=>$row['ln_url'],

									'tw_url'=>$row['tw_url'],

									'insta_url'=>$row['insta_url'],

									'view'=>(int) $row['mobile_view'],

									'coming_soon'=>1,

									'seg'=>$row['s_id'],

								);

							   //print_r("<pre/>");

		                      // print_r($error);

		                       //die;

						}else{

						

							   $error['categoryListingsInfo'][] = array(

									'name'=>$row['pro_title'],

									'thumb_image'=>"http://www.uaet10.com/images/listing/".$row['pro_thumb'],

									'full_image'=>"http://www.uaet10.com/images/listing/".$row['pro_header'],

									'description'=>$row['pro_desc'],

									'contactno'=>$row['pro_contactno'],

									'conatctemail'=>$row['pro_conatctemail'],

									'webname'=>$row['webname'],

									'weburl'=>$row['pro_contactname'],

									'fb_url'=>$row['fb_url'],

									'ln_url'=>$row['ln_url'],

									'tw_url'=>$row['tw_url'],

									'insta_url'=>$row['insta_url'],

									'view'=>(int) $row['mobile_view'],

									'coming_soon'=>0,

									'seg'=>$row['s_id'],

								);						

						

						}

                }  				

				

				 

				

		         $query_result4 = $this->private_cat_listing($data['category_id'],4);

		  

                 foreach ( $query_result4 as $row ){

				

				         if($row['pro_title']=='Exploring Gems' or $row['pro_title']=='Exploring Gems'){

							   $error['categoryListingsInfo'][] = array(

									'name'=>$row['pro_title'],

									'thumb_image'=>base_url()."images/explring_zems/ecplring_zems_tumb_new.jpg",

									'full_image'=>base_url()."images/explring_zems/ecplring_zems_new.jpg",

									'description'=>$row['pro_desc'],

									'contactno'=>$row['pro_contactno'],

									'conatctemail'=>$row['pro_conatctemail'],

									'webname'=>$row['webname'],

									'weburl'=>$row['pro_contactname'],

									'fb_url'=>$row['fb_url'],

									'ln_url'=>$row['ln_url'],

									'tw_url'=>$row['tw_url'],

									'insta_url'=>$row['insta_url'],

									'view'=>(int) $row['mobile_view'],

									'coming_soon'=>1,

									'seg'=>$row['s_id'],

								);

							   //print_r("<pre/>");

		                      // print_r($error);

		                       //die;

						}else{

						

							   $error['categoryListingsInfo'][] = array(

									'name'=>$row['pro_title'],

									'thumb_image'=>"http://www.uaet10.com/images/listing/".$row['pro_thumb'],

									'full_image'=>"http://www.uaet10.com/images/listing/".$row['pro_header'],

									'description'=>$row['pro_desc'],

									'contactno'=>$row['pro_contactno'],

									'conatctemail'=>$row['pro_conatctemail'],

									'webname'=>$row['webname'],

									'weburl'=>$row['pro_contactname'],

									'fb_url'=>$row['fb_url'],

									'ln_url'=>$row['ln_url'],

									'tw_url'=>$row['tw_url'],

									'insta_url'=>$row['insta_url'],

									'view'=>(int) $row['mobile_view'],

									'coming_soon'=>0,

									'seg'=>$row['s_id'],

								);						

						

						}

                }

				*/



                 $error['message'] = "success";

				 $error['status'] = 1; 

                if(empty($error['categoryListingsInfo'])){

                  $error['message'] = "failed";

				 $error['status'] = 0;

                } 				

			

                                         

		  }



		  //print_r("<pre/>");

		  //print_r($error);

		  //die;

		  header('Content-type: application/json');

	      echo json_encode($error);

 }

 /*

	 * Offer listing action

	 */

  function offerListings(){



	      $this->db->select('*');

	      $this->db->from("offer o");

	      $this->db->where('o.status', 1 );

	      $this->db->order_by('o.order_by','asc');   	

          $query = $this->db->get();

          $query_result = $query->result_array(); 

          foreach ( $query_result as $row ){

                 if($row['offer_id']==54){

						$error['offerInfo'][] = array(

							'id'=>$row['offer_id'],

							'title'=>$row['title'],

							'type'=>$row['type'],

							'description'=>$row['desc'],

							'image'=>"http://www.uaet10.com/images/offer/".$row['image'],

						);					 

					 

				 }else{

						$error['offerInfo'][] = array(

							'id'=>$row['offer_id'],

							'title'=>$row['title'],

							'type'=>$row['type'],

							'description'=>$row['desc'],

							'image'=>"http://www.uaet10.com/images/offer/".$row['image'],

						);					 

					 

					 

				 }			  



					$error['message'] = "success";

				    $error['status'] = 1;

		  } 



		  if(empty($query_result)){

		  	     $error['offerInfo'] = array();

		  	     $error['message'] = "success";

				    $error['status'] = 1;



		  }



        header('Content-type: application/json');

	    echo json_encode($error);

	} 

	

     function offerListings_dev(){



	      $this->db->select('*');

	      $this->db->from("offer o");

	      //$this->db->where('o.status', 1 );

		  $this->db->where('o.offer_id', 55 );

		  //$this->db->or_where('o.offer_id', 56 );

	      $this->db->order_by('o.order_by','asc');   	

          $query = $this->db->get();

          $query_result = $query->result_array(); 

          foreach ( $query_result as $row ){

  

						$error['offerInfo'][] = array(

							'id'=>$row['offer_id'],

							'title'=>$row['title'],

							'type'=>$row['type'],

							'description'=>$row['desc'],

							'image'=>"http://www.uaet10.com/images/offer/".$row['image'],

						);					 

					

					$error['message'] = "success";

				    $error['status'] = 1;

		  } 



		  if(empty($query_result)){

		  	     $error['offerInfo'] = array();

		  	     $error['message'] = "success";

				    $error['status'] = 1;



		  }



        header('Content-type: application/json');

	    echo json_encode($error);

	} 	

	

	

	 /*

	 * privacy policy action

	 */

	function privacy_policy(){



         $url = "privacy-policy";

         $lang_id =  20;        

         $this->db->select("*");

	     $this->db->from("pages p");

		 $this->db->join("pages_detail pd" ,"p.page_id=pd.page_id","left");

		 $this->db->where('page_status',1);

		 $this->db->where('page_url',$url);

	     $result = $this->db->get();	

         $result_array = $result->result_array();

         $data['privacy_policy'] = $result_array[0]['page_desc'];

         header('Content-type: application/json');

	     echo json_encode($data);

	}

	

	 function privacy_policy_new(){

          $page = $this->input->get_post("page");

		  if($page !=''){ 

			  $page_id = $page;

			  $lang_id =  language;        

			  $this->db->select("*");

			  $this->db->from("pages p");

			  $this->db->join("pages_detail pd" ,"p.page_id=pd.page_id","left");

			  $this->db->where('page_status',1);

			  $this->db->where('p.page_id',$page_id);

			  $result = $this->db->get();	

			  $result_array = $result->result_array();

			  $data['content'] = $result_array[0]['page_desc'];

			  //header('Content-type: application/json');

			  //echo json_encode($data);

			   

			   if($page_id==22){

			      $this->load->view('mobile/about_us_mobile',$data);

			  }else{

			      $this->load->view('mobile/display_page_mobile',$data);			  

			  } 



		  }

	 }	

	



	/*

	 * about us action

	 */

	function about_us(){



         $url = "about";

         $this->db->select("*");

	     $this->db->from("pages p");

		 $this->db->join("pages_detail pd" ,"p.page_id=pd.page_id","left");

		 $this->db->where('page_status',1);

		 $this->db->where('page_url',$url);

	     $result = $this->db->get();	

         $result_array = $result->result_array();

         $data['about_us'] = $result_array[0]['page_desc'];

         header('Content-type: application/json');

	     echo json_encode($data);

	}

	/*

	 * terms and condition action

	 */

	function terms_condition(){



         $url = "terms-use";

         $this->db->select("*");

	     $this->db->from("pages p");

		 $this->db->join("pages_detail pd" ,"p.page_id=pd.page_id","left");

		 $this->db->where('page_status',1);

		 $this->db->where('page_url',$url);

	     $result = $this->db->get();	

         $result_array = $result->result_array();

         $data['terms_condition'] = $result_array[0]['page_desc'];

         header('Content-type: application/json');

	     echo json_encode($data);

	}



	/*

	 * copyrights action

	 */

	function copyrights(){



         $url = "copyrights";

         $this->db->select("*");

	     $this->db->from("pages p");

		 $this->db->join("pages_detail pd" ,"p.page_id=pd.page_id","left");

		 $this->db->where('page_status',1);

		 $this->db->where('page_url',$url);

	     $result = $this->db->get();	

         $result_array = $result->result_array();

         $data['copyrights'] = $result_array[0]['page_desc'];

         header('Content-type: application/json');

	     echo json_encode($data);

	}

	

	/*

	 * Contact us action

	 */

	function contact_us(){



	   $error='';

	   $data['name'] = trim($this->input->get_post('name'));

	   $data['email']=trim($this->input->get_post('email'));

	   $data['message']=trim($this->input->get_post('message'));

	   $data['mobile'] =trim($this->input->get_post('mobile_no'));

	   $data['offer_id']=trim($this->input->get_post('offer_id'));

	   $data['device_id']=trim($this->input->get_post('device_id'));



	  if(empty($data['name'])){

	     $error['errorcode'] = "30001";

	 	 $error['message']   ="name:Required parameter missing";

	  }elseif(empty($data['email'])){

	  	$error['errorcode'] = "30002";

	 	$error['message']	=	"email:Required parameter missing";

	  }elseif(empty($data['message'])){

	  	$error['errorcode'] = "30003";

	 	$error['message']	=	"message:Required parameter missing";

	  }elseif(!empty($data)){

 

		  $check_exist = $this->db->get_where("contact_us",array("device_id"=>$data['device_id'],"offer_id"=>$data['offer_id']))->result();

		 

		   if(empty($check_exist)){

				 $this->db->insert("contact_us",$data);

				 $name = $data['name'];

				 $email = $data['email'];

				 $message = $data['message'];

				 $mobile = $data['mobile'];

				 $to      = 'Alpha2inc@outlook.com';

				 $subject = 'contact';

				 $from_email = $email;

				 $msg = '<table>

				 <tr>From App</tr>

				 <tr><th>Name</th><td>'.$name.'</td></tr>

				 <tr><th>Email</th><td>'. $email.' </td></tr>

				 <tr><th>Message</th><td>'.$message.'</td></tr>

				 <tr><th>Mobile No.</th><td>'.$mobile.'</td></tr>

				 </table>';

				 $headers = "MIME-Version: 1.0" . "\r\n";

				 $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

				 $headers .= 'From: "'.$name.'"<"'.$from_email.'">' . "\r\n";



				 mail($to, $subject, $msg,$headers);	

				 $error['status'] .= 1;

				 $error['message'] .= "your request has been  send succesfully ,please check the mail.";				 

			   

		   }else{

				 $error['status'] .= 0;

				 $error['message'] .= "You already sent request for this offer.";			   

					   

		   }



 

	  }

	  header('Content-type: application/json');

	  echo json_encode($error);  

	}

	

	/*

	 * get post action

	 */

	function get_post(){



         $page  = $this->input->get_post('page_no');

         $limit = 10;

         if($page==''){

            $page=1;

         }  

         $start  = ($page-1)*$limit;

         $pages = ceil($total / $limit);

         $blog_db = $this->load->database('wpblog', TRUE);

         $blog_db->where('wp_posts.post_parent', 0);

         $blog_db->where('wp_posts.post_status', 'publish');



         $blog_db->where('wp_posts.post_title!=', 'Mobile Fields');



         $blog_db->where('wp_posts.post_type', 'post');

         $blog_db->limit($limit, $start);

         $blog_db->order_by('post_date', 'DESC');

         $query = $blog_db->get('wp_posts');

         $data = $query->result();

         $post = array();

         for ($i = 0; $i < count($data); $i++) {

            array_push($post, 

                array(

                	'post_id'=>$data[$i]->ID,

                    'post_title' => $data[$i]->post_title,

                    'image' => $this->getPostImages($data[$i]->ID),

                    'link' =>"https://www.uaet10.com/blog/".$data[$i]->post_name,

                )

            );     

        }

        $post_info['post_info'] = $post;     

        $total  =  count($this->get_page());    

        $pages = ceil($total / $limit);

        $post_info['pages'] = $pages;



        //print_r("<pre/>");

        //print_r($post_info);

        //die;





        header('Content-type: application/json');

	    echo json_encode($post_info);       

	}

	function  get_post_details(){



        $data['post_id']                             =    trim($this->input->get_post('post_id'));

        if(empty($data['post_id'])){

	       $error['errorcode'] = "30001";

	 	   $error['message']   ="post id:Required parameter missing";

	    }elseif(!empty($data)){



           $blog_db = $this->load->database('wpblog', TRUE);  

           $blog_db->select("*");	   

           $blog_db->from("wp_posts w");	   

           $blog_db->join("wp_postmeta wp","w.ID=wp.post_id");	   

           $blog_db->where('w.ID', $data['post_id']);

           $blog_db->where('w.post_status', 'publish');          

           $blog_db->where('wp.meta_key', 'mobile_description');          

           $blog_db->order_by('w.post_date', 'DESC'); 

           $query = $blog_db->get('wp_posts');

           $query_result = $query->result_array(); 

		   



		   //print_r("<pre/>");

		   //print_r($query_result);

		   //die;

           foreach ( $query_result as $row ){

					                    //$error['post_details'] = array(

					                    	//'//post_content'=>$row['meta_value']									    

									 // );



					$error['post_details'] = $row['meta_value'];  

					$error['message'] = "success";

				    $error['status'] = 1;

				    $error['link']   = '';

		   }

		   if(empty($error['post_details'])){

		            $error['post_details'] = '';

		            $error['message'] = "success";

				    $error['status'] = 1;

				    $error['link']   = '';

		   }

		   

		}

        header('Content-type: application/json');

	    echo json_encode($error); 

    }

	function get_page(){



		//$page  = $this->input->get_post('page_no');

        // $limit = 5;

         //if($page==''){

            //$page=1;

         //}  

        // $start  = ($page-1)*$limit;

         //$pages = ceil($total / $limit);

         $blog_db = $this->load->database('wpblog', TRUE);

         $blog_db->where('wp_posts.post_parent', 0);

         $blog_db->where('wp_posts.post_status', 'publish');

         //$blog_db->limit($limit, $start);

         $blog_db->order_by('post_date', 'DESC');

         $query = $blog_db->get('wp_posts');

         $data = $query->result();

         $post = array();

         for ($i = 0; $i < count($data); $i++) {

            array_push($post, 

                array(

                	'post_id'=>$data[$i]->ID,

                    'post_title' => $data[$i]->post_title,

                    'image' => $this->getPostImages($data[$i]->ID)

                )

            );     

        }

        return $post;

        //$post_info['post_info'] = $post;   

	}





	function getPostImages ($idPost) {

              

                $post_id = $this->getThumbNailId($idPost);

	 

	 	$blog_db = $this->load->database('wpblog', TRUE);	

	 	$blog_db->select('guid'); 	

        $blog_db->where('post_type', 'attachment');

        $blog_db->where('ID', $post_id  );

        $blog_db->limit($this->imagesPerPost);

        $blog_db->order_by('post_date', 'DESC');

        $image = $blog_db->get('wp_posts');

        return $image->row()->guid;

     }

     function getThumbNailId($idPost){

                $blog_db = $this->load->database('wpblog', TRUE);	

	 	$blog_db->select('meta_value');

                $blog_db->where('meta_key', '_thumbnail_id');

                $blog_db->where('post_id', $idPost); 

                $image = $blog_db->get('wp_postmeta');

                return $image->row()->meta_value; 

            

     }

	

	

	 function homeContent(){

			  $error='';       

			  $this->db->select('*');

			  $this->db->from("slider");

			  $this->db->where('slider_status', 1); 

			  $this->db->order_by('slider_id','desc');  	$query = $this->db->get();

			  $query_result = $query->result_array(); 

			  foreach ( $query_result as $row ){

					$error['banners'][] = array(

					'url'=>base_url().'images/banner/mobile_banner/'.$row['banner_mobile']

					);

			

			  }

			  

			  // feature category 

			  

	      $this->db->select('*');

	      $this->db->from("category c");

	      $this->db->join('category_detail cd', 'c.cate_id = cd.cate_id', 'left');

	      $this->db->where('cd.cate_langid', language);

	      $this->db->where('c.cate_reaid', 14);

	      $this->db->where('c.cate_status', 1 ); 	  

	      $this->db->where('c.mob_feature', 1 ); 	  

	      $this->db->where('c.mob_grid', 1 ); 	

		  $this->db->order_by('c.mob_sort','asc'); 		        	 	

          $query = $this->db->get();

          $query_result = $query->result_array();

		  

          foreach ( $query_result as $row ){

		  

						$error['feature_category'][] = array(

							 'category_id'=>$row['cate_id'],

							 'category_name'=>$row['cate_name'],

							 'category_description'=>$row['cate_desc'],

							 'category_image'=>base_url('images').'/'.$row['cate_image'],

							 'category_rect_image'=>base_url('images').'/'.$row['cate_image'],

							 'category_thumb_image'=>base_url('images').'/'.$row['cate_image'],

						);					 

 					 

					 

					$error['message'] = "success";

				    $error['status'] = 1;

		     }



             // feature listings			 

 

			  

	      $this->db->select('*');

	      $this->db->from("category c");

	      $this->db->join('category_detail cd', 'c.cate_id = cd.cate_id', 'left');

	      $this->db->where('cd.cate_langid', language);

	      $this->db->where('c.cate_reaid', 14);

	      $this->db->where('c.cate_status', 1 ); 	  

	      $this->db->where('c.mob_feature', 1 ); 	  

	      $this->db->where('c.mob_grid', 0 ); 	

		  $this->db->order_by('c.mob_sort','asc'); 		  	   	 	

          $query = $this->db->get();

          $query_result = $query->result_array();

		  

          foreach ( $query_result as $row ){

		  

						$error['feature_listings'][] = array(

							 'category_id'=>$row['cate_id'],

							 'category_name'=>$row['cate_name'],

							 'category_description'=>$row['cate_desc'],

							 'category_image'=>base_url('images').'/category/'.$row['cate_image2'],

							 'category_rect_image'=>base_url('images').'/category/'.$row['cate_image2'],

							 'category_thumb_image'=>base_url('images').'/category/'.$row['cate_image2'],

						);					 

 					 

					 

					$error['message'] = "success";

				    $error['status'] = 1;

		     }		     			  

			  $error['message'] = "success";

			  $error['status'] = 1;

			  

			header('Content-type: application/json');

			echo json_encode($error);

	} 

	function homeContent1(){



			  $error='';       

			  $this->db->select('*');

			  $this->db->from("slider");

			  $this->db->where('slider_status', 1); 

			  $this->db->order_by('slider_id','desc');  	$query = $this->db->get();

			  $query_result = $query->result_array(); 



              //print_r("<pre/>");

              //print_r($query_result);

              //die;



			  foreach ( $query_result as $row ){

					$error['banners'][] = array(

					'url'=>base_url().'images/banner/mobile_banner/'.$row['banner_mobile'],

					'id'=>$row['id'],

					'type'=>$row['type'],

					'name'=>$row['name'],

					'web_url'=>$row['url'],

					

					);

			

			  }





			  

			  // feature category 

			  

	      $this->db->select('*');

	      $this->db->from("category c");

	      $this->db->join('category_detail cd', 'c.cate_id = cd.cate_id', 'left');

	      $this->db->where('cd.cate_langid', language);

	      $this->db->where('c.cate_reaid', 14);

	      $this->db->where('c.cate_status', 1 ); 	  

	      $this->db->where('c.mob_feature', 1 ); 	  

	      $this->db->where('c.mob_grid', 1 ); 	

		  $this->db->order_by('c.mob_sort','asc'); 		        	 	

          $query = $this->db->get();

          $query_result = $query->result_array();

		  

          foreach ( $query_result as $row ){

		  

						$error['feature_category'][] = array(

							 'category_id'=>$row['cate_id'],

							 'category_name'=>$row['cate_name'],

							 'category_description'=>$row['cate_desc'],

							 'category_image'=>base_url('images').'/'.$row['cate_image'],

							 'category_rect_image'=>base_url('images').'/'.$row['cate_image'],

							 'category_thumb_image'=>base_url('images').'/'.$row['cate_image'],

							 'mobile_image'=>base_url('images/mobile_category').'/'.$row['mobile_image2'],

						);					 

 					 

					 

					$error['message'] = "success";

				    $error['status'] = 1;

		     }



             // feature listings			 

 

			  

	      $this->db->select('*');

	      $this->db->from("category c");

	      $this->db->join('category_detail cd', 'c.cate_id = cd.cate_id', 'left');

	      $this->db->where('cd.cate_langid', language);

	      $this->db->where('c.cate_reaid', 14);

	      $this->db->where('c.cate_status', 1 ); 	  

	      $this->db->where('c.mob_feature', 1 ); 	  

	      $this->db->where('c.mob_grid', 0 ); 	

		  $this->db->order_by('c.mob_sort','asc'); 		  	   	 	

          $query = $this->db->get();

          $query_result = $query->result_array();

		  

          foreach ( $query_result as $row ){

		  

						$error['feature_listings'][] = array(

							 'category_id'=>$row['cate_id'],

							 'category_name'=>$row['cate_name'],

							 'category_description'=>$row['cate_desc'],

							 'category_image'=>base_url('images').'/category/'.$row['cate_image2'],

							 'category_rect_image'=>base_url('images').'/category/'.$row['cate_image2'],

							 'category_thumb_image'=>base_url('images').'/category/'.$row['cate_image2'],

							 'mobile_image'=>base_url('images/mobile_category').'/'.$row['mobile_image2'],

						);					 

 					 

					 

					$error['message'] = "success";

				    $error['status'] = 1;

		     }

              $error['video'] = 	'http://www.youtube.com/watch?v=tqMgCowYaGQ';		 

			  $error['message'] = "success";

			  $error['status'] = 1;

			  

			header('Content-type: application/json');

			echo json_encode($error);

	}

	public function listing_suggetion(){

	     $name = $this->input->get_post('name');

	     $email = $this->input->get_post('email');

	     $contact = $this->input->get_post('contact');

	     $category = $this->input->get_post('category');

		 $brand = $this->input->get_post('brand');

 

		 if($name !='' and $email !='' and $contact !='' and $category !='' and $brand !='' ){

		 $array = array(

		   'name'=>$name,

		   'email'=>$email ,

		   'contact'=>$contact,

		   'category'=>$category,

		   'brand'=>$brand

		  );

         $lastid = $this->db->insert('listing_form',$array);

		 if($lastid){

			 $error['message'] = "success";

			 $error['status'] = 1;		 

		 }else{

		 	 $error['message'] = "data not insert please try again";

			 $error['status'] = 0;

		 

		 }

        }else{

		 	 $error['message'] = "all field required";

			 $error['status'] = 0;		

		

		}



			header('Content-type: application/json');

			echo json_encode($error);

		 

	}



    

	

	function search_suggetion(){

	      $tag = $this->input->get_post("seacrh");

		  $language = language;

		  $uae = uae;

		  $sql ="SELECT cd.cate_name as label,cd.unique_name,cd.cate_id as id from category_detail cd join category c ON (cd.cate_id=c.cate_id) where cd.cate_name LIKE '$tag%' and cd.cate_langid = $language and c.cate_reaid=$uae and c.cate_status=1 UNION ALL SELECT pd.pro_title as label,pd.unique_name,pd.pro_id as id from product_detail pd join product p ON(p.pro_id=pd.pro_id) where pd.pro_title LIKE '$tag%' and pd.pro_langid = $language and p.pro_reaid=$uae and pro_status=1" ;

		  $q = $this->db->query($sql);

		  $data =  array() ;

          //echo $this->db->last_query();die;		  

		  //echo"<pre>";

	      if($q->result_array()){

			  foreach ($q->result_array() as $row ){

			     if($row['unique_name']=='lsiting'){

					 $error['search_data'][] = array(

	                     "label"=>$row['label'],

						 "type"=>1,

						 "id"=>(int)$row['id']

					 );				 

				 

				 }else{

					 $error['search_data'][] = array(

	                     "label"=>$row['label'],

						 "type"=>2,

						 "id"=>(int)$row['id']

					 );					 

				 

				 }

				  

			  

			  }

			 $error['message'] = "success";

			 $error['status'] = 1;

		  }else{

		  

			 $error['message'] = "No data found";

			 $error['status'] = 0;		  

		  

		  } 

	

	 

			header('Content-type: application/json');

			echo json_encode($error);	

	

	}

	

	function single_listing(){

		  $id = $this->input->get_post('buisness_id');

		  if(empty($id)){

		  

		  }else{ 

		  $this->db->select("*")  

		  ->from("product p")

		  ->join('product_detail pd', 'p.pro_id = pd.pro_id', 'left');

		  $this->db->where('p.pro_id', $id );

		  $this->db->where('p.pro_reaid', uae );

		  $this->db->where('pd.pro_langid', language );

		  $query = $this->db->get();

		  $query->result_array();

		  $error = '';

		  if($query->result_array()){

		  foreach($query->result_array() as $row){}				  

		  $error['buisness_detail'][] = array(

									'name'=>$row['pro_title'],

									'thumb_image'=>base_url()."images/listing/".$row['pro_thumb'],

									'full_image'=>base_url()."images/listing/".$row['pro_header'],

									'description'=>$row['pro_desc'],

									'contactno'=>$row['pro_contactno'],

									'conatctemail'=>$row['pro_conatctemail'],

									'webname'=>$row['webname'],

									'weburl'=>$row['pro_contactname'],

									'fb_url'=>$row['fb_url'],

									'ln_url'=>$row['ln_url'],

									'tw_url'=>$row['tw_url'],

									'view'=>(int) $row['mobile_view'],

									'like'=>(int)$row['mobile_like'],

									'insta_url'=>$row['insta_url'],

						);	

			 $error['message'] = "success";

			 $error['status'] = 1;                								

		   }else{

				$error['message'] = "No data found";

				$error['status'] = 0;

		   }

			/// echo "<pre>";

			 ///print_r($error);

			 header('Content-type: application/json');

			 echo json_encode($error);

        }	

	}

	

	function mobile_suggestion(){

 		  $name    = $this->input->get_post('name');

		  $email   = $this->input->get_post('email');

		  $contact = $this->input->get_post('contact');

		  $company = $this->input->get_post('suggestion');

		 

		  if($name !='' and $email !='' and $contact !='' and $company !='' ){

			  $array = array(

			  'name'=>$name,

			  'email'=>$email ,

			  'contact'=>$contact,

			  'company'=>$company,

			  'para'=>1

			  );

			  $this->db->insert('invitation',$array);

			  $to      = 'Alpha2inc@outlook.com';

			  $subject = 'Suggestion';

			  $from_email = $email;

			  $msg = "<table>

			  <tr><th>Name</th><td>$name</td></tr>

			  <tr><th>Email</th><td> $email </td></tr>

			  <tr><th>Contact</th><td>$contact</td></tr>

			  <tr><th>Suggetion</th><td>$company</td></tr>";

				 $msg .="</table>";	  

				 $headers = "MIME-Version: 1.0" . "\r\n";

				 $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

				 $headers .= 'From: "'.$name.'"<"'.$from_email.'">' . "\r\n";

				   if(mail($to, $subject, $msg,$headers)){

						  	

				  } 

				 $error['message'] = "Suggestion submited";

				 $error['status'] = 1;

         }else{

			 $error['message'] = "all field required";

			 $error['status'] = 0;	

		 }

			header('Content-type: application/json');

			echo json_encode($error);	 

		 

	

	}

	public function update_view(){



		   //echo "test";die;



             

             $min    = $this->input->get_post('min');

             $max    = $this->input->get_post('max');





		     $this->db->select('*');

	         $this->db->from("product");

	         $query = $this->db->get();

	         $query_result = $query->result_array();

	         foreach ( $query_result as $row ){



	           	  $data['mobile_like'] = rand($min,$max); 

	           	  $this->db->where('pro_id', $row['pro_id']);

                  $this->db->update('product', $data); 

	           }

	}

	public function add_like(){

		$cat_list_id    = $this->input->get_post('cat_list_id');

		$device_id    = $this->input->get_post('device_id');

		if(empty($cat_list_id)){

             $error['errorcode'] = "10001";

		 	 $error['message']="category listing id:Required parameter missing";

		}if(empty($device_id)){

             $error['errorcode'] = "10002";

		 	 $error['message']="device_id:Required parameter missing";

		}elseif(!empty($cat_list_id)){

              

           $this->db->select('*');

           $this->db->from("mobile_like");

           $this->db->where('listing_id', $cat_list_id);

           $this->db->where('device_id', $device_id);

           //$this->db->where('add_date <', date('Y-m-d'));

		   $this->db->order_by("id","desc");

		   $this->db->limit(1);

           $query = $this->db->get();

           $query_result = $query->row();

		   //echo $this->db->last_query();

		   

           if (!empty($query_result)) {

                 $date = date("Y-m-d",strtotime($query_result->add_date));

				 $curl_date = date("Y-m-d");

				  if($date < $curl_date){

				     $this->inser_liks($device_id,$cat_list_id);

				  }else{

						$error['message'] = "you have already like. now you can try after 24 hr.";

						$error['status'] = 0;

				  

				  }

				 

		    }else{

			       $this->inser_liks($device_id,$cat_list_id);

				   $error['message'] = "success";

				   $error['status'] = 1;

		    }   	

		}

		 header('Content-type: application/json');

		 echo json_encode($error);

	}

	public function add_views(){

		$cat_list_id    = $this->input->get_post('cat_list_id');

		$device_id    = $this->input->get_post('device_id');

		if(empty($cat_list_id)){

             $error['errorcode'] = "10001";

		 	 $error['message']="category listing id:Required parameter missing";

		}if(empty($device_id)){

             $error['errorcode'] = "10002";

		 	 $error['message']="device_id:Required parameter missing";

		}elseif(!empty($cat_list_id)){

               $this->insert_views($device_id,$cat_list_id);

				$error['message'] = "success";

				$error['status'] = 1;

           	

		}

		 header('Content-type: application/json');

		 echo json_encode($error);

	}	

	

	function inser_liks($device_id,$cat_list_id){

	   $insert = array(

		  "device_id"=>$device_id,

		  "listing_id"=>$cat_list_id,

		  "add_date"=>date("Y-m-d h:i:s"),

		);

	   $this->db->insert("mobile_like",$insert);

	   $this->db->where('pro_id', $cat_list_id);

	   $this->db->set("mobile_like","mobile_like+1",false);

	   $this->db->update('product');

	

	

	}

	function insert_views($device_id,$cat_list_id){

	   $insert = array(

		  "device_id"=>$device_id,

		  "listing_id"=>$cat_list_id,

		  "add_date"=>date("Y-m-d h:i:s"),

		);

	   $this->db->insert("mobile_views",$insert);

	   $this->db->where('pro_id', $cat_list_id);

	   $this->db->set("mobile_view","mobile_view+1",false);

	   $this->db->update('product');

	

	

	}	

	public function private_cat_listing($category_id,$segment_id){

	

                $this->db->select('*');

                $this->db->from("product p");                

                $this->db->join('product_detail pd', 'p.pro_id = pd.pro_id', 'left');

                

                $this->db->where('pd.pro_langid', 20);



                //$this->db->order_by('p.sort','ASC');



                $this->db->order_by("mobile_view", "DESC");



                $this->db->where('p.pro_reaid', 14);

                $this->db->where('p.pro_status', 1);

                $this->db->where('p.pro_catid', $category_id);

                //$this->db->where('p.s_id',$segment_id);



                

                $query = $this->db->get();

                $query_result = $query->result_array(); 



                //print_r("<pre/>");

                //print_r($query_result);

                //ie;

				return $query_result;

	

	}

	

	public function add_info(){

		   $error='';

		   $data['contact_name']   =        trim($this->input->get_post('name'));

		   $data['mobile'] =        trim($this->input->get_post('mobile'));

		   $data['company_name'] =  trim($this->input->get_post('company_name'));

		   $data['device_id']=	    trim($this->input->get_post('device_id'));





		  if(empty($data['contact_name'])){

			 $error['errorcode'] = "30001";

			 $error['message']   ="name:Required parameter missing";

		  }elseif(empty($data['mobile'])){

			$error['errorcode'] = "30002";

			$error['message']	=	"mobile:Required parameter missing";

		  }elseif(empty($data['company_name'])){

			$error['errorcode'] = "30003";

			$error['message']	=	"company_name:Required parameter missing";

		  }elseif(empty($data['device_id'])){

			$error['errorcode'] = "30004";

			$error['message']	=	"device_id:Required parameter missing";

		  }

		  elseif(!empty($data)){

		     $data['date'] = date('Y-m-d h:i:s');

		      $this->db->insert("app_user",$data);

				$error['status'] = 1;

				$error['message'] = "Thank you for submitting the details. we will get back to you soon!";

				

			  $to      = 'Alpha2inc@outlook.com';

			  $subject = 'Suggestion';

			  $from_email = 'Alpha2inc@outlook.com';

			  $name = $data['contact_name'];

			  $company = $data['company_name'];

			  $mobile = $data['mobile'];

			  

			  $msg = "<table>

			  <tr><th>Name</th><td>$name</td></tr>

			  <tr><th>Email</th><td> $mobile </td></tr>

			  <tr><th>Suggetion</th><td>$company</td></tr>";

				 $msg .="</table>";	  

				 $headers = "MIME-Version: 1.0" . "\r\n";

				 $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

				 $headers .= 'From: "'.$name.'"<"'.$from_email.'">' . "\r\n";

				   mail($to, $subject, $msg,$headers) ;				

		  

		  }

		 header('Content-type: application/json');

		 echo json_encode($error);

		

	}

	

	

	public function device_registration(){

	       //sleep(3);

		   $error='';

           

		   $data['device_id']        =	    trim($this->input->get_post('device_id'));

		   $data['registration_key'] =	    trim($this->input->get_post('key'));

		   $data['phone_type'] =	    trim($this->input->get_post('phone_type'));





		  if(empty($data['registration_key'])){

			 $error['errorcode'] = "30001";

			 $error['message']   ="registration_key:Required parameter missing";

		  }elseif(empty($data['device_id'])){

			$error['errorcode'] = "30004";

			$error['message']	=	"device_id:Required parameter missing";

		  }

		  elseif(!empty($data)){

				 $this->db->select('*');

				$query = $this->db->from("push_notification")

				         ->where("device_id",$data['device_id']) 

				         ->get();

			    if($query->num_rows() > 0 ){

                      $data1['registration_key'] = $data['registration_key'];

                      $data1['phone_type'] = $data['phone_type'];

					  $this->db->where("device_id",$data['device_id']);

                      $this->db->update("push_notification",$data1);					

					  $error['status'] = 1;

					  $error['message'] = " device updated succesfully";

					  $data1['registration_key'] = $data['registration_key'];					

				}else{

					  

		               $this->db->insert("push_notification",$data);

				      $error['status'] = 1;

				      $error['message'] = " device register succesfully"; 				

				}

			 $reg_key = $data['registration_key'];

			 $device_id = $data['device_id'];

			 

			    

              //$this->sendNotification($reg_key,"Welecome to UAET10","welcome",3,'','');				



		  

		  }

		 header('Content-type: application/json');

		 echo json_encode($error);

		 

		

	}

	

	public function device_registration1(){

	       //sleep(3);

		   $error='';

           

		   $data['device_id']        =	    trim($this->input->get_post('device_id'));

		   $data['registration_key'] =	    trim($this->input->get_post('key'));





		  if(empty($data['registration_key'])){

			 $error['errorcode'] = "30001";

			 $error['message']   ="registration_key:Required parameter missing";

		  }elseif(empty($data['device_id'])){

			$error['errorcode'] = "30004";

			$error['message']	=	"device_id:Required parameter missing";

		  }

		  elseif(!empty($data)){

		  $query = $this->db->select('*')

		                  ->from("push_notification")

		                  ->where("device_id",$data['device_id']) 

		                  ->get();

		  $iphone = $query->result();

             

			 $reg_key = $data['registration_key'];

			 $device_id = $data['device_id'];

			     

			    if($iphone[0]->phone_type==0){

					 

				          $this->sendNotification($reg_key,"Welcome to UAET10","Explore the UAE top 10 brands & list your business here.",3,'','',$device_id);

						  

				 }else{

					  

					 $this->ios($device_id,"Welcome to UAET10","Explore the UAE top 10 brands & list your business here.",3,'','',$device_id);

					 

				 }



		  

		  }

		 header('Content-type: application/json');

		 echo json_encode($error);

		 

		

	}	



	 function ios($target, $title, $description,$type,$id,$device_id='') {

           

		$deviceToken = $target;

        

		$ctx = stream_context_create();

		// ck.pem is your certificate file

		$ckpm =  $_SERVER['DOCUMENT_ROOT'].'/ck.pem'; 

		stream_context_set_option($ctx, 'ssl', 'local_cert', $ckpm  );

		stream_context_set_option($ctx, 'ssl', 'passphrase',123456); 



		// Open a connection to the APNS server

		$fp = stream_socket_client(

			'ssl://gateway.sandbox.push.apple.com:2195', $err,

			$errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);



		if (!$fp)

			exit("Failed to connect: $err $errstr" . PHP_EOL);

             $data = array(

				"via"=>"UAET10",

				"title"=>$title,

				"message"=>$description,

				'type'=>$type,

				'image'=>"https://www.uaet10.com/images/notification/welcome_notification.jpg"

			  );

		if($id !=''){

		   $data['id'] = $id;

		}

 		  

			  

		// Create the payload body

		$body['aps'] = array(

			'alert' => $data,

			'sound' => 'default'

		);

        

		// Encode the payload as JSON

		$payload = json_encode($body);



		// Build the binary notification

		$msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;



		// Send it to the server

		$result = fwrite($fp, $msg, strlen($msg));

		 

		// Close the connection to the server

		fclose($fp);



		if (!$result){

			 $insert = array(

		     "title"=>$title,

		     "description"=>$description,

			 "other_id"=>$id,

			 "type"=>$type,

			 "device_id"=>$device_id,

			 "notification_date"=>date("Y-m-d h:i:s"),

		 

		     );

		  $this->db->insert("notification_history",$insert);

		}

		else{

			echo 'Message successfully delivered' . PHP_EOL;

		}





	}

	private function sendNotification($target, $title, $description,$type,$id,$device_id=''){

 

		//FCM API end-point

		$url = 'https://fcm.googleapis.com/fcm/send';

		//api_key available in Firebase Console -> Project Settings -> CLOUD MESSAGING -> Server key

		$server_key = 'AAAA4zlVpjU:APA91bEeJx52QHytWhDEUc3XGZtMal-WhenVsYKmXSWEtMwkLtWV-CmcIaZ6cz8Wlh63mu46pUoV33tL4VlaaNCA9fJldvwS6G0N49iHtxiPywfCR4N0Bx8Y3GC3HOsKR-_uWOtFqg6q';

		$data = array("via"=>"UAET10", "title"=>$title, "message"=>$description,'type'=>$type,'id'=>$id,'image'=>'https://www.uaet10.com/images/notification/welcome_notification.jpg');

		$fields = array();

		$fields['data'] = $data;	

		if(is_array($target)){

			$fields['registration_ids'] = $target;

		}else{

			$fields['to'] = $target;

		}

		//header with content_type api key

		$headers = array(

		'Content-Type:application/json',

		   'Authorization:key='.$server_key

		);

		

		  $insert = array(

		     "title"=>$title,

		     "description"=>$description,

			 "other_id"=>$id,

			 "type"=>$type,

			 "device_id"=>$device_id,

			 "notification_date"=>date("Y-m-d h:i:s"),

		 

		 );

		  $this->db->insert("notification_history",$insert); 

		 		

		//CURL request to route notification to FCM connection server (provided by Google)	

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);

		curl_setopt($ch, CURLOPT_POST, true);

		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

		$result = curl_exec($ch);

		if ($result === FALSE) {

			return false;

		}

		curl_close($ch);

			$jsn =json_decode($result);

		if($jsn->success){

			return true;

		}

		else{

			return true;

		}

		



	}



 

	 public function get_popup_setting(){

			 $this->db->select("*")

			 ->from("mobile_setting")->where('id',1);

			 $result = $this->db->get()->result();	

			 foreach($result as $re){} 

			 $error['status'] = 1;

			 $error['flag'] = $re->flag; 

			 header('Content-type: application/json');

			 echo json_encode($error);

	 }

	 public function offer_voucher_used(){

		   $data['device_id']=trim($this->input->get_post('device_id'));

		   $data['offer_listing_id']=trim($this->input->get_post('offer_id'));	

		  if(empty($data['device_id'])){

			      $error['status'] = "0";

			      $error['message']   ="device_id:Required parameter missing";

		  }elseif(empty($data['offer_listing_id'])){

			     $error['status']   = "0";

			     $error['message']	=	"offer_id:Required parameter missing";

		  }else{

			     $this->db->where("offer_listing_id",$data['offer_listing_id']);

			     $this->db->where("device_id",$data['device_id']);

				 $d['used'] = 1;

				 $this->db->update("offer_voucher",$d);

			     $error['status']   = "1";

			     $error['message']	=	"Thank yoiu for showing your intrest for this Offer.";				 

		  }		

		 header('Content-type: application/json');

		 echo json_encode($error);		  

		 

	 }

	 public function offer_voucher_dev(){

		   $error='';

		   $data['device_id']=trim($this->input->get_post('device_id'));

		   $data['offer_listing_id']=trim($this->input->get_post('offer_id'));





		  if(empty($data['device_id'])){

			 $error['offer_detail']['errorcode'] = "30001";

			 $error['offer_detail']['message']   ="device_id:Required parameter missing";

		  }elseif(empty($data['offer_listing_id'])){

			$error['offer_detail']['errorcode'] = "30002";

			$error['offer_detail']['message']	=	"offer_id:Required parameter missing";

		  }else{

			     $this->db->select("*")

			     ->from("offer_voucher");

			     $this->db->where('offer_listing_id',$data['offer_listing_id']);

			     $this->db->where('device_id',$data['device_id']);

			     $result_count = $this->db->get()->num_rows();

				 

				 

			     $this->db->select("*")

			     ->from("offer_voucher_request");

			     $this->db->where('offer_id',$data['offer_listing_id']);

			     $this->db->where('device_id',$data['device_id']);

				 $this->db->where('status',1);

				 $check_status = $this->db->get()->result();

				 if(!empty($check_status)){

				     $res = 'yes';

				 }else{

				     $res = 'no';

				 }

				 

				 if(($result_count < 1 or $res=='yes')){

 					 $voucher = $this->generateRandomString();

					 $result = $this->check_rendome($voucher);

					 if($result=='1'){

					 

					      include APPPATH . 'third_party/Barcode39.php';

						  

						  // set object 

						  $bc = new Barcode39($voucher); 

                          

						  // set text size 

						  $bc->barcode_text_size = 5; 

                          

						  // set barcode bar thickness (thick bars) 

						  $bc->barcode_bar_thick = 4; 

                          

						  // set barcode bar thickness (thin bars) 

						  $bc->barcode_bar_thin = 2; 

                          

						  // save barcode GIF file 

						  $imgname = md5($voucher);

						  $bc->draw("images/barcode/$imgname.jpg");						  

						  

						  $data['access_date'] = date('Y-m-d h:i:s');

						  $data['voucher'] = $voucher;

						  $this->db->insert("offer_voucher",$data);

						  $this->db->select("*")

						  ->from("offer");

						  $this->db->where('offer_id',$data['offer_listing_id']);

						  $result_listing = $this->db->get()->result();						  

						   

						  foreach($result_listing as $r){}

						  $date = new DateTime($data['access_date'] = date('Y-m-d h:i:s'));

						  $date->modify('+15 day');



						  

						  $error['offer_detail']['status'] = 1;

						  $error['offer_detail']['voucher'] = $voucher;

						  $error['offer_detail']['title'] = $r->title;

						  $error['offer_detail']['desc'] = $r->desc;

						  $error['offer_detail']['company_name'] = $r->company_name;

						  $error['offer_detail']['company_contact'] = $r->company_contact;

						  $error['offer_detail']['company_email'] = $r->company_email;

						  $error['offer_detail']['term_and_condition'] = $r->terms_url;

						  $error['offer_detail']['voucher_image'] = base_url().'images/barcode/'.$imgname.'.jpg';

						  $error['offer_detail']['expiry_date'] = $date->format('Y-m-d');

						  $error['offer_detail']['count_voucher'] =  $result_count;

						  $error['offer_detail']['image'] = base_url().'images/offer/'.$r->image;

						  $error['offer_detail']['image_inner'] = base_url().'images/offer/singel-magesmall.jpg';

						   $error['offer_detail']['used'] = 0;

						  $error['offer_detail']['apply_more'] = 0;

						  $error['offer_detail']['message'] = 'sucsess';

						  

						  

 

									 

					 }else{

							 $this->offer_voucher();

					 }

	 	    }else{

			     /* Dispaly last fifth voucher */

              $this->db->select("*") 

			  ->from("offer");

			  $this->db->where('offer_id',$data['offer_listing_id']);

			  $result_listing = $this->db->get()->result();						  

			   

			  foreach($result_listing as $r){}



			  

			  $this->db->select("*")

			  ->from("offer_voucher");

			  $this->db->where('offer_listing_id',$data['offer_listing_id']);

			  $this->db->where('device_id', $data['device_id']);

			  $this->db->order_by('id','desc');

			  $this->db->limit(1);

			  

			  $offer_voucher = $this->db->get()->result();

			  foreach($offer_voucher as $f){}

			  $date = new DateTime($f->access_date = date('Y-m-d h:i:s'));

			  $date->modify('+15 day');

              $imgname	 = md5($f->voucher);		  

			  $error['offer_detail']['status'] = 1;

			  $error['offer_detail']['voucher'] = $f->voucher;

			  $error['offer_detail']['title'] = $r->title;

			  $error['offer_detail']['desc'] = $r->desc;

			  $error['offer_detail']['company_name'] = $r->company_name;

			  $error['offer_detail']['company_contact'] = $r->company_contact;

			  $error['offer_detail']['company_email'] = $r->company_email;

			  $error['offer_detail']['term_and_condition'] = $r->terms_url;

			  $error['offer_detail']['count_voucher'] =  $result_count;

			  $error['offer_detail']['voucher_image'] = base_url().'images/barcode/'.$imgname.'.jpg';

			  $error['offer_detail']['expiry_date'] = $date->format('Y-m-d');

			  $error['offer_detail']['image_inner'] = base_url().'images/offer/singel-magesmall.jpg';

			  $error['offer_detail']['image'] = base_url().'images/offer/'.$r->image;

			  $error['offer_detail']['apply_more'] = 1;

			  $error['offer_detail']['used'] = $f->used;

			  $error['offer_detail']['message'] = 'sucsess';			  



						  				 

				 /* End Display  fifth voucher  */

			

			    

			

						 

			} 

		  

		  

		  }	 

				header('Content-type: application/json');

			 echo json_encode($error);

	 }	 

	 

	 



	 public function offer_voucher(){

		   $error='';

		   $data['device_id']=trim($this->input->get_post('device_id'));

		   $data['offer_listing_id']=trim($this->input->get_post('offer_id'));





		  if(empty($data['device_id'])){

			 $error['offer_detail']['errorcode'] = "30001";

			 $error['offer_detail']['message']   ="device_id:Required parameter missing";

		  }elseif(empty($data['offer_listing_id'])){

			$error['offer_detail']['errorcode'] = "30002";

			$error['offer_detail']['message']	=	"offer_id:Required parameter missing";

		  }else{

			     $this->db->select("*")

			     ->from("offer_voucher");

			     $this->db->where('offer_listing_id',$data['offer_listing_id']);

			     $this->db->where('device_id',$data['device_id']);

			     $result_count = $this->db->get()->num_rows();

				 

				 

			     $this->db->select("*")

			     ->from("offer_voucher_request");

			     $this->db->where('offer_id',$data['offer_listing_id']);

			     $this->db->where('device_id',$data['device_id']);

				 $this->db->where('status',1);

				 $check_status = $this->db->get()->result();

				 if(!empty($check_status)){

				     $res = 'yes';

				 }else{

				     $res = 'no';

				 }

				 

				 if(($result_count < 5 or $res=='yes') and $result_count < 6 ){ 

					 $voucher = $this->generateRandomString();

					 $result = $this->check_rendome($voucher);

					 if($result=='1'){

					 

					      include APPPATH . 'third_party/Barcode39.php';

						  

						  // set object 

						  $bc = new Barcode39($voucher); 

                          

						  // set text size 

						  $bc->barcode_text_size = 5; 

                          

						  // set barcode bar thickness (thick bars) 

						  $bc->barcode_bar_thick = 4; 

                          

						  // set barcode bar thickness (thin bars) 

						  $bc->barcode_bar_thin = 2; 

                          

						  // save barcode GIF file 

						  $imgname = md5($voucher);

						  $bc->draw("images/barcode/$imgname.jpg");						  

						  

						  $data['access_date'] = date('Y-m-d h:i:s');

						  $data['voucher'] = $voucher;

						  $this->db->insert("offer_voucher",$data);

						  $this->db->select("*")

						  ->from("offer");

						  $this->db->where('offer_id',$data['offer_listing_id']);

						  $result_listing = $this->db->get()->result();						  

						   

						  foreach($result_listing as $r){}

						  $date = new DateTime($data['access_date'] = date('Y-m-d h:i:s'));

						  $date->modify('+15 day');



						  

						  $error['offer_detail']['status'] = 1;

						  $error['offer_detail']['voucher'] = $voucher;

						  $error['offer_detail']['title'] = $r->title;

						  $error['offer_detail']['desc'] = $r->desc;

						  $error['offer_detail']['company_name'] = $r->company_name;

						  $error['offer_detail']['company_contact'] = $r->company_contact;

						  $error['offer_detail']['company_email'] = $r->company_email;

						  $error['offer_detail']['term_and_condition'] = $r->terms_url;

						  $error['offer_detail']['voucher_image'] = base_url().'images/barcode/'.$imgname.'.jpg';

						  $error['offer_detail']['expiry_date'] = $date->format('Y-m-d');

						  $error['offer_detail']['count_voucher'] =  $result_count;

						  $error['offer_detail']['image'] = base_url().'images/offer/'.$r->image;

						  $error['offer_detail']['apply_more'] = 0;

						  $error['offer_detail']['message'] = 'sucsess';

						  

						  

 

									 

					 }else{

							 $this->offer_voucher();

					 }

	 	    }else{

			     /* Dispaly last fifth voucher */

              $this->db->select("*") 

			  ->from("offer");

			  $this->db->where('offer_id',$data['offer_listing_id']);

			  $result_listing = $this->db->get()->result();						  

			   

			  foreach($result_listing as $r){}



			  

			  $this->db->select("*")

			  ->from("offer_voucher");

			  $this->db->where('offer_listing_id',$data['offer_listing_id']);

			  $this->db->where('device_id', $data['device_id']);

			  $this->db->order_by('id','desc');

			  $this->db->limit(1);

			  

			  $offer_voucher = $this->db->get()->result();

			  foreach($offer_voucher as $f){}

			  $date = new DateTime($f->access_date = date('Y-m-d h:i:s'));

			  $date->modify('+15 day');

              $imgname	 = md5($f->voucher);		  

			  $error['offer_detail']['status'] = 1;

			  $error['offer_detail']['voucher'] = $f->voucher;

			  $error['offer_detail']['title'] = $r->title;

			  $error['offer_detail']['desc'] = $r->desc;

			  $error['offer_detail']['company_name'] = $r->company_name;

			  $error['offer_detail']['company_contact'] = $r->company_contact;

			  $error['offer_detail']['company_email'] = $r->company_email;

			  $error['offer_detail']['term_and_condition'] = $r->terms_url;

			  $error['offer_detail']['count_voucher'] =  $result_count;

			  $error['offer_detail']['voucher_image'] = base_url().'images/barcode/'.$imgname.'.jpg';

			  $error['offer_detail']['expiry_date'] = $date->format('Y-m-d');

			  

			  $error['offer_detail']['image'] = base_url().'images/offer/'.$r->image;

			  $error['offer_detail']['apply_more'] = 1;

			  $error['offer_detail']['message'] = 'sucsess';			  



						  				 

				 /* End Display  fifth voucher  */

			

			    

			

						 

			} 

		  

		  

		  }	 

				header('Content-type: application/json');

			 echo json_encode($error);

	 }

	 function check_rendome($voucher){

	         

			 $this->db->select("*")

			 ->from("offer_voucher")->where('voucher',$voucher);

			 $result = $this->db->get()->num_rows();

             if($result >= 1){

			      return '0';

			 }else{

			     return '1';

			 } 		 

	 

	 } 

	 function generateRandomString($length = 10) {

		$characters = '0123456789';

		$charactersLength = strlen($characters);

		$randomString = '';

		for ($i = 0; $i < $length; $i++) {

			$randomString .= $characters[rand(0, $charactersLength - 1)];

		}

		return $randomString;

	}

	

	function voucher_request(){



	   $error='';

	   $data['device_id'] = trim($this->input->get_post('device_id'));

	   $data['offer_id'] = trim($this->input->get_post('offer_id'));

	   $data['name'] = trim($this->input->get_post('name'));

	   $data['email']=trim($this->input->get_post('email'));

	   $data['message']=trim($this->input->get_post('message'));

	   $data['mobile']=	trim($this->input->get_post('mobile_no'));

	  if(empty($data['device_id'])){

	 	 $error['message']   ="device_id:Required parameter missing";

		 $error['status']	=	0;

	  }

	  elseif(empty($data['offer_id'])){

	 	 $error['message']   ="offer_id:Required parameter missing";

		 $error['status']	=	0;

	  }	  

	  elseif(empty($data['name'])){

	 	 $error['message']   ="name:Required parameter missing";

		 $error['status']	=	0;

	  }elseif(empty($data['email'])){

	 	$error['message']	=	"email:Required parameter missing";

		$error['status']	=	0;

	  }elseif(empty($data['message'])){

	 	$error['message']	=	"message:Required parameter missing";

		$error['status']	=	0;

	  }elseif(empty($data['mobile'])){

	 	$error['message']	=	"mobile:Required parameter missing";

		$error['status']	=	0;

	  }

	  elseif(!empty($data)){

	         $q = $this->db->get_where("offer_voucher_request",array("device_id"=>$data['device_id'],"offer_id"=>$data['offer_id']));

			 $check_insert = $q->result();

			  if(empty($check_insert)){

			         $error['message']	=	"your request has been sent! we have received your request and thank you for writing us";

			         $error['status']	=	1;

					 $data['send_date'] = date('Y-m-d h:i:s');

			         $this->db->insert("offer_voucher_request",$data);

			  }else{

			      $error['status']	=	0;

				  $error['message']	=	"Request already sent for this offer";

			  }

               

               

	  }

	  header('Content-type: application/json');

	  echo json_encode($error);  

	}



     function category_item_Share(){

	 

	       redirect('ios-android');

	 }

     function get_all_notification(){

	      $error='';

		  $data['device_id'] = $this->input->get_post('device_id');

		  

		 $page  = $this->input->get_post('page_no');

         $limit = 10;

         if($page==''){

            $page=1;

         }  

         $start  = ($page-1)*$limit;

         $pages = ceil($total / $limit);

		  if(empty($data['device_id'])){

			 $error['message']   ="device_id:Required parameter missing";

			 $error['status']	=	0;

		  }elseif(!empty($data['device_id'])){

		         $device_id = $data['device_id'];

				 

			     $this->db->select("*")

			     ->from("notification_history");

			     $this->db->where("device_id",$device_id);

			     $this->db->order_by('id','desc');

			     $this->db->limit($limit, $start);

			     $results = $this->db->get()->result();

				 

				 

				 /*for counting*/

				 

			     $this->db->select("*")

			     ->from("notification_history");

			     $this->db->where("device_id",$device_id);

			     $this->db->order_by('id','desc');

			     $results12 = $this->db->get()->result();

				 $total_pages = count($results12);

				 /*End counting */

				 if(!empty($results)){

                 foreach($results as $r)			  

		         $error['noti_history'][] = array(

				     "title"=>$r->title,

				     "description"=>$r->description,

				     "image"=>$r->image,

				     "id"=>$r->other_id,

				     "type"=>$r->type,

				     "device_id"=>$r->device_id,

				     "page_no"=>$page,

				     "added_date"=>$r->notification_date,

				      

				 

				 );	

				 }else{

		         $error['noti_history'] = array();				 

				 

				 }

				     

				$pages = ceil($total_pages / $limit);

				$error['pages'] = $pages;

				 

			   

				 $error['status']	=	1;

				 $error['message']	=	"success";

		  }



	     header('Content-type: application/json');

	     echo json_encode($error);		  

 

	        

	 }	 

	 function category_item_share_ios(){

	 

	       redirect('https://itunes.apple.com/WebObjects/MZStore.woa/wa/viewSoftware?id=1251879389&mt=8');

	 }	

	



	

 



}