<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class page extends CI_Controller {

      function __construct(){
		  parent::__construct();

		 $this->load->model('admin/user');
		 $this->load->helper('resize');
		$this->load->library('session');
	  }
	  
	  // index method  for dashboard
	public function index()
	{	 
	   
	   if(!$this->session->userdata('id')){
	         redirect("admin/login");
	    }else{
		 $data['page'] ='mangae page';
	     $data['title'] ='Manage page';
		 $data['pages'] = $this->user->get_page(language);
		 $this->load->view('admin/include/header',$data);
		 $this->load->view('admin/include/inner_header',$data);
		 $this->load->view('admin/page_view');
		 $this->load->view('admin/include/footer');  
	   }
	}
	
	public function add_page(){		
		if(!$this->session->userdata('id')){
	         redirect("admin/login");
	    }else{
			 $error = 0;
			 $image = '';
			  if($this->input->post('submit')!=false){
		 	  	
			           if(!empty($_FILES['add_icon']['name'])){			  
		              	  $config['upload_path']   = './images/service_icons/';
		              	  $config['allowed_types'] = '*';
		              	  /*$config['min_width']     = 1600; 
			              $config['min_height']    = 856;*/
		              	  $this->load->library('upload', $config,'image1');
		              	   $this->image1->initialize($config);
		              	   if ( !$this->image1->do_upload('add_icon')) {
		              			  $data['error'] =  $this->image1->display_errors(); 
								   $error = 1;
		              	   }else { 
		              			 $data1 =  $this->image1->data(); 
		              			 $thumb = './images/banner/thumb/'.$data1['file_name'];
		              			 resize_image($data1,$thumb,200,100); 
		              			 $image = $data1['file_name'];
		              	   }		              	   
		              }
		              if($error == 0){  
		              
				  $insertdata['page_dateadd'] = date("Y-m-d");				
				  $insertdata['meta_tag'] = $this->input->post('title');
				  $insertdata['meta_title'] =$this->input->post('title'); 
				  $insertdata['page_status'] = $this->input->post('status');
				  $insertdata['order_by'] = $this->input->post('order_by');
				  $insertdata1['footer_type'] = $this->input->post('footer_type');
				  $insertdata1['service_icon'] =$image;
				  $insertdata1['page_title'] = $this->input->post('title');
				  $insertdata1['title_arabic'] = $this->input->post('title_arabic');
				  $insertdata1['title_russian'] = $this->input->post('title_russian');
				  $insertdata1['title_chiness'] = $this->input->post('title_chiness');
				  $insertdata1['page_desc'] = $this->input->post('discription');
				  $insertdata1['desc_arabic'] = $this->input->post('desc_arabic');
				  $insertdata1['desc_russian'] = $this->input->post('desc_russian');
				  $insertdata1['desc_chiness'] = $this->input->post('desc_chiness');
				  $insertdata1['page_lang_id'] = 20;
				  $insertdata1['page_heading'] = $this->input->post('heading');
				  $insertdata1['heading_arabic'] = $this->input->post('heading_arabic');
				  $insertdata1['heading_russian'] = $this->input->post('heading_russian');
				  $insertdata1['heading_chiness'] = $this->input->post('heading_chiness');

				  
				  $query = $this->user->add_page($insertdata,$insertdata1);
				   if($query){
					$_SESSION['msg'] = 'Page added';
					  redirect("admin/page");
				   }else{
					 $data['msg'] = 'Please try again'; 
				   }
					   
				 }
				  
			    }
			
		 $data['heading'] = 'Add Page';
		 $data['page'] ='add_page';
		 $data['image'] ='add_icon';
	     $data['title'] ='Add page';
		 $data['languages'] = $this->user->get_language(1);
		 $data['action'] = base_url().'admin/add_page';
		 $this->load->view('admin/include/header',$data);
		 $this->load->view('admin/include/inner_header',$data);
		 $this->load->view('admin/add_page');
		   
	   }
	}
	
	
	function edit_page($lang_id,$page_id){
	if(!$this->session->userdata('id')){
	         redirect("admin/login");
	    }else{
			 $error = 0;
			 $image = '';
			  if($this->input->post('submit')!=false){

			  	  // print_r($this->input->post('edit_service_icon')); die();
				  if(!empty($_FILES['edit_banner']['name'])){			  
		              	  $config['upload_path']   = './images/service_icons/';
		              	  $config['allowed_types'] = '*';
		              	  /*$config['min_width']     = 1600; 
			              $config['min_height']    = 856;*/
		              	  $this->load->library('upload', $config,'image1');
		              	   $this->image1->initialize($config);
		              	   if ( !$this->image1->do_upload('edit_banner')) {
		              			  $data['error'] =  $this->image1->display_errors(); 
								   $error = 1;
		              	   }else { 
		              			 $data1 =  $this->image1->data(); 
		              			 $thumb = './images/banner/thumb/'.$data1['file_name'];
		              			 resize_image($data1,$thumb,200,100); 
		              			 $image = $data1['file_name'];
		              	   }		              	   
		              } 

		           if($error == 0){  	
				   if($lang_id==language){
				  
				  $updatetdata['page_url'] = $this->input->post('url');
				  $updatetdata['meta_tag'] = $this->input->post('title');
				  $updatetdata['meta_title'] = $this->input->post('title');				  
                  $updatetdata['page_status'] = $this->input->post('status');
				  $updatetdata['order_by'] = $this->input->post('order_by');				  
				   }
				  $updatetdata['page_update'] = date("Y-m-d");
				  
				  $updatetdata1['footer_type'] = $this->input->post('footer_type');
				  $updatetdata1['page_heading'] = $this->input->post('heading');
				  if($image !=''){
						 $updatetdata1['service_icon'] =  $image;			
					}
				  $updatetdata1['desc_arabic'] = $this->input->post('desc_arabic');
				  $updatetdata1['desc_russian'] = $this->input->post('desc_russian');
				  $updatetdata1['desc_chiness'] = $this->input->post('desc_chiness');
				  $updatetdata1['title_arabic'] = $this->input->post('title_arabic');
				  $updatetdata1['title_russian'] = $this->input->post('title_russian');
				  $updatetdata1['title_chiness'] = $this->input->post('title_chiness');
				  $updatetdata1['heading_arabic'] = $this->input->post('heading_arabic');
				  $updatetdata1['heading_russian'] = $this->input->post('heading_russian');
				  $updatetdata1['heading_chiness'] = $this->input->post('heading_chiness');
				  $updatetdata1['page_title'] = $this->input->post('title');
				  $updatetdata1['page_desc'] = $this->input->post('discription');
				  $updatetdata1['page_lang_id'] = 20;
				 
				  
				  $query = $this->user->edit_page($updatetdata,$updatetdata1,$page_id);
				   if($query){
					$_SESSION['msg'] = 'Updated Page';
					  redirect("admin/page");
				   }else{
					 $data['msg'] = 'Please try again'; 
				   }
					}
			    }
			
		 $data['heading'] = 'Edit Page';
		 $data['page'] ='edit_page';
		 $data['image'] ='edit_banner';
	     $data['title'] ='Edit page';
		 $data['languages'] = $this->user->get_language(1);
		 $data['pages'] = $this->user->get_page($lang_id,$page_id);
		 /*print_r($data['pages']); die();*/
		 $data['action'] = base_url().'admin/edit_page/'.$lang_id.'/'.$page_id;
		 $this->load->view('admin/include/header',$data);
		 $this->load->view('admin/include/inner_header',$data);
		 $this->load->view('admin/add_page');
		   
	   }	
		
		
	}
	

   
	function delete_page($id){
		
		if($page['page_id']=='19' or $page['page_id']=='20' or $page['page_id']=='21'){
			 $_SESSION['msg'] = 'Page can not deleted';
	          redirect("admin/page/",$msg);
					 } else{ 
		   $this->db->where('page_id', $id);
           $query = $this->db->delete('pages');
           $this->db->where('page_id', $id);		  
          $query = $this->db->delete('pages_detail'); 
	      if($query){
		  $_SESSION['msg'] = 'Page deleted';
	      redirect("admin/page/",$msg); 
		  }
	   }
	}
	
	function uniqueURL(){
		
			 	//this check Page URl id exist or not
			     $url = $_POST['url'];
				 
				 if(empty($_POST['page_id'])){
					
			   	$q = $this->db->get_where('pages', array(
				 'page_url' => $url
                ));
				 }else{
					 
				 $q = $this->db->get_where('pages', array(
				 'page_url' => $url,
				 'page_id !=' => $_POST['page_id'] 
				  ));
				 }
                if($q->num_rows()==0){
                    echo 'true';
				}else{
					echo 'false';
				}
				//echo $this->db->last_query();
				
				// 
	}
	
       function contact($id=language){

		 //echo $id;die;
		 $data = array();
	     if($this->input->post('submit') != false){		  
		 $update['name_label'] = $this->input->post('name_label');		 
		 $update['name_place'] = $this->input->post('name_place');		 
		 $update['email_label'] = $this->input->post('email_label');		 
		 $update['email_plcae'] = $this->input->post('email_plcae');		 
		 $update['msg_label'] = $this->input->post('msg_label');		 
		 $update['msg_place'] = $this->input->post('msg_place');		 
		 $update['submit_label'] = $this->input->post('submit_label');		 
		 $update['valid_name'] = $this->input->post('valid_name');		 
		 $update['valid_email'] = $this->input->post('valid_email');		 
		 $update['msg_email'] = $this->input->post('msg_email');
			  
		   		//this check language id exist or not
			   
			   	$q = $this->db->get_where('contact_page', array(
                 'lang_id' => $id	 
                ));

                if($q->num_rows()==0){
					
					
					    $data12 = array(
                        'lang_id' => $id
                             );
                 $this->db->insert('contact_page', $data12);
				}
				
				//
			  $this->db->where('lang_id',$id);
		      $this->db->update("contact_page",$update);
		     
		  
	      }
		$data['languages'] = $this->user->get_language(1);
		
				    //get content
				    $this->db->select("*")
		           ->from("contact_page");
                   $this->db->where('lang_id',$id);
                   $result = $this->db->get();	
                    
					
                   				   
				   $data['cont'] = $result->result_array();
	         	   ///
		     
		$data['page'] ='Contact';
	    $data['title'] =' Contact page';
	    $data['heading'] ='Edit Contact page';
	   	$data['action'] = base_url().'admin/contact/'.$id;
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/contcat_page');
		$this->load->view('admin/include/footer');

          }	
		  
	function fb_campaign(){
		
		
		//get fb content
		$this->db->select("*")
	   ->from("fb_campaign")
	   ->order_by("id","desc");
	    $result = $this->db->get();	
			   
	   $data['fb_data'] = $result->result_array();
	   ///
		
		$data['page'] ='fb_campaign';
	    $data['title'] ='FB Campaign';
	    $data['heading'] ='FB Campaign page';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/fb_campaign');
		$this->load->view('admin/include/footer'); 
	
	}
	
	function sort_fb_campaign(){
	
			//get fb content
		$this->db->select("*")
	   ->from("fb_campaign")
	   ->order_by("id","desc");
	    $result = $this->db->get();	
			   
	   $data['fb_data'] = $result->result_array();
	   ///
		
		$data['page'] ='fb_campaign';
	    $data['title'] ='FB Campaign';
	    $data['heading'] ='FB Campaign page';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/fb_campaign_sort');
		$this->load->view('admin/include/footer'); 
	
	}
	
	function delete_fb_campaign($id){
		 
		  $this->db->select("*")
	      ->from("fb_campaign")
	      ->where("id",$id);
	      $result = $this->db->get();	
			   
	      $d = $result->result_array();
		
		  unlink('./images/fb_comp/thumb/'.$d[0]['image']);
		 
		   $this->db->where('id', $id);
           $query = $this->db->delete('fb_campaign');
	      if($query){
		  $_SESSION['msg'] = 'FB Campaign Deleted';
	      redirect("admin/fb_campaign/",$msg); 
		
	     }
	}
	
	
	//for offer page 
	
	function offerpage(){
		
		
		 $data = array();
	     if($this->input->post('submit') != false){

		      $update['content1'] = $this->input->post('content1');
		      $update['content2'] = $this->input->post('content2');
		      $update['content3'] = $this->input->post('content3');
			  
			  $this->db->where('id', 1 );
		      $this->db->update("fb_offer_page",$update);
		
	       }
		   
			 $this->db->select("*")
	      ->from("fb_offer_page")
	      ->where("id",1);
	      $result = $this->db->get();	
			   
	    $data['fb_data'] = $result->result_array();   
	    $data['page'] ='offer';
	    $data['title'] =' offer page';
	    $data['heading'] ='offer  page';
	   	$data['action'] = base_url().'admin/offerpage/';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/fb_offer');
		
		
	}
	      function invitaion(){
	 
	   $data = array();
	     if($this->input->post('submit') != false){

		      $update['content1'] = $this->input->post('content1');
		      $update['content2'] = $this->input->post('content2');
		      $update['content3'] = $this->input->post('content3');
		      $update['content4'] = $this->input->post('content4');
		      $update['content5'] = $this->input->post('content5');
		      $update['content6'] = $this->input->post('content6');
		      $update['content7'] = $this->input->post('content7');
			  
			  $this->db->where('id', 2 );
		      $this->db->update("fb_offer_page",$update);
		
	       }
		   
			 $this->db->select("*")
	      ->from("fb_offer_page")
	      ->where("id",2);
	      $result = $this->db->get();	
			   
	    $data['fb_data'] = $result->result_array();   
	    $data['page'] ='invitation';
	    $data['title'] =' invitation page';
	    $data['heading'] ='invitatio  page';
	   	$data['action'] = base_url().'admin/invitaion/';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/invitaion');
	  
	  
	          }
			  
			  function view_invitation(){
	
		  $this->db->select("*")
	      ->from("invitation")
	      ->where("para",0)
		  ->order_by("inviid","desc");
	      $result = $this->db->get();	
		  $data['fb_data'] = $result->result_array();  
	
		$data['page'] ='invitation';
	    $data['title'] ='invitaation';
	    $data['heading'] ='Invitation';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/manage_invitation');
		$this->load->view('admin/include/footer'); 
	
	
	}
	

	  function details_feedback($id){
	 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			
		  $this->db->select("*")
	      ->from("feedback");
		  $this->db->where("feedback_id",$id);
	      $result = $this->db->get();	
		  $data['feedback'] = $result->result_array();  
	    /* print_r($id); die();*/
		$data['page'] ='feedback';
	    $data['title'] ='feedback';
	    $data['heading'] ='feedback';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/detail_feedback');
		$this->load->view('admin/include/footer'); 
	
	}
	}
	  function details_template($id){
	 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			
		  $this->db->select("*")
	      ->from("tbl_templates");
		  $this->db->where("template_id",$id);
	      $result = $this->db->get();	
		  $data['template'] = $result->result_array();  
	    /* print_r($id); die();*/
		$data['page'] ='Template';
	    $data['title'] ='Template';
	    $data['heading'] ='Template';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/detail_template');
		$this->load->view('admin/include/footer'); 
	
	}
	}
	
	function delete_view_invitation($id){
	
		   $this->db->where('inviid', $id);
           $query = $this->db->delete('invitation');
	       if($query){
		   $_SESSION['msg'] = 'invitation Deleted';
	       redirect("admin/view_invitation/",$msg); 
		   }
		

	
	}		
		function delete_template($id){
			
				   $this->db->where('template_id', $id);
		           $query = $this->db->delete('tbl_templates');
			       if($query){
				   $_SESSION['msg'] = 'Template Deleted';
			       redirect("admin/view_templates/",$msg); 
				   }	
			}
         function delete_event($id){
			
				   $this->db->where('event_id', $id);
		           $query = $this->db->delete('tbl_events');
			       if($query){
				   $_SESSION['msg'] = 'Event Deleted';
			       redirect("admin/manage_event/",$msg); 
				   }	
			}
			 function delete_destination($id){
			
				   $this->db->where('id', $id);
		           $query = $this->db->delete('destinations');
			       if($query){
				   $_SESSION['msg'] = 'Destination deleted';
			       redirect("admin/destinations/",$msg); 
				   }	
			}
			 function delete_team($id){
			
				   $this->db->where('team_id', $id);
		           $query = $this->db->delete('teams');
			       if($query){
				   $_SESSION['msg'] = 'Team Deleted';
			       redirect("admin/team/",$msg); 
				   }	
			}
			 function delete_contact($id){
			
				   $this->db->where('id', $id);
		           $query = $this->db->delete('contact_us');
			       if($query){
				   $_SESSION['msg'] = 'Contact us Deleted';
			       redirect("admin/contact_us/",$msg); 
				   }	
			}
		function delete_city($id){
			
				   $this->db->where('city_id', $id);
		           $query = $this->db->delete('tbl_city');
			       if($query){
				   $_SESSION['msg'] = 'City Deleted';
			       redirect("admin/manage_cities/",$msg); 
				   }	
		}

		function delete_service_slider($id){
			
				   $this->db->where('slider_id', $id);
		           $query = $this->db->delete('tbl_serviceslider');
			       if($query){
				   $_SESSION['msg'] = 'Service Slider Deleted';
			       redirect("admin/service_slider/",$msg); 
				   }	
		}
		function delete_subscription($id){
			
				   $this->db->where('subscribe_id', $id);
		           $query = $this->db->delete('tbl_subcribe_email	');
			       if($query){
				   $_SESSION['msg'] = 'Subscription Deleted';
			       redirect("admin/subscription/",$msg); 
				   }	
		}

		function view_home_suggetion(){

		$this->db->select("*")
		->from("invitation")
		->where("para",1)
		->order_by("inviid","desc");
		$result = $this->db->get();	
		$data['fb_data'] = $result->result_array();  

		$data['page'] ='Suggetion';
		$data['title'] ='Suggetion';
		$data['heading'] ='Suggetion';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/managae_home_suggetion');
		$this->load->view('admin/include/footer'); 


		}
	
	function delete_view_home_suggetion($id){
	
		   $this->db->where('inviid', $id);
           $query = $this->db->delete('invitation');
	       if($query){
		   $_SESSION['msg'] = 'invitation Deleted';
	       redirect("admin/view_home_suggetion/",$msg); 
		   }
		

	
	}	
	
	
	function view_listing_suggetion(){
	
		  $this->db->select("*")
	      ->from("listing_form")
		  ->order_by("id","desc");
	      $result = $this->db->get();	
		  $data['listings'] = $result->result_array();  
	
		$data['page'] ='listing_suggetion';
	    $data['title'] ='listing_suggetion';
	    $data['heading'] ='listing_suggetion';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/managelisting_suggetion');
		$this->load->view('admin/include/footer'); 
	
	
	}
	
	function delete_listing_suggetion($id){
	
		   $this->db->where('id', $id);
           $query = $this->db->delete('listing_form');
	       if($query){
		   $_SESSION['msg'] = 'suggetion Deleted';
	       redirect("admin/view_listing_suggetion/",$msg); 
		   }
		

	
	}
	
		function view_question(){
	
		  $this->db->select("*")
	      ->from("questions")
		  ->order_by("id","desc");
	      $result = $this->db->get();	
		  $data['questions'] = $result->result_array();  
	
		$data['page'] ='questions';
	    $data['title'] ='questions';
	    $data['heading'] ='questions';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/manage_questions');
		$this->load->view('admin/include/footer'); 
	
	}
	
		function delete_view_question($id){
	
		   $this->db->where('id', $id);
           $query = $this->db->delete('questions');
	       if($query){
		   $_SESSION['msg'] = 'Question Deleted';
	       redirect("admin/view_question/",$msg); 
		   
		   }
		

	
	}
	
	 public function view_mobile(){
		$data['page'] ='questions';
	    $data['title'] ='questions';
	    $data['heading'] ='questions';	      
		  $this->db->select("*")
	      ->from("app_user")
		  ->order_by("id","desc");
	      $result = $this->db->get();	
		  $data['questions'] = $result->result_array(); 
		  $this->load->view('admin/include/header',$data);
		  $this->load->view('admin/include/inner_header',$data);
		  $this->load->view('admin/manage_mobile_user');
		  $this->load->view('admin/include/footer'); 		  
	 }
	 public function templates(){
	 	$data['page'] ='templates';
	    $data['title'] ='templates';
	    $data['heading'] ='templates';	      
		  $this->db->select("*")
	      ->from("tbl_templates")
		  ->order_by("template_id","desc");
	      $result = $this->db->get();	
		  $data['templates'] = $result->result_array(); 
		  $this->load->view('admin/include/header',$data);
		  $this->load->view('admin/include/inner_header',$data);
		  $this->load->view('admin/templates_list');
		  $this->load->view('admin/include/footer');
	 }
	 public function feedback(){
	 	$data['page'] ='feedback';
	    $data['title'] ='feedback';
	    $data['heading'] ='feedback';	      
		  $this->db->select("f.*,p.meta_title as product_name")
	      ->from("feedback f")
	      ->join("product p","f.product_id=p.pro_id")
		  ->order_by("f.feedback_id","desc");
	      $result = $this->db->get();	
		  $data['feedback'] = $result->result_array(); 
		  $this->load->view('admin/include/header',$data);
		  $this->load->view('admin/include/inner_header',$data);
		  $this->load->view('admin/feedback');
		  $this->load->view('admin/include/footer');
	 }
	  public function view_subscription(){
		$data['page'] ='questions';
	    $data['title'] ='questions';
	    $data['heading'] ='questions';	      
		  $this->db->select("*")
	      ->from("tbl_subcribe_email")
		  ->order_by("subscribe_id","desc");
	      $result = $this->db->get();	
		  $data['questions'] = $result->result_array(); 
		  $this->load->view('admin/include/header',$data);
		  $this->load->view('admin/include/inner_header',$data);
		  $this->load->view('admin/subscription_list');
		  $this->load->view('admin/include/footer'); 		  
	 }
	 
     public function mobile_popup(){
			 $data['page'] ='mobile popup';
			 $data['title'] ='mobile_popup';
			 $data['heading'] ='Mobile popup';
			 $this->db->select("*")
			 ->from("mobile_setting")->where('id',1);
			 $data['result'] = $this->db->get()->result();			
			 $this->load->view('admin/include/header',$data);
			 $this->load->view('admin/include/inner_header',$data);
			 $this->load->view('admin/setting_popup');
			 $this->load->view('admin/include/footer'); 		  
	 }
	 
	 public function set_flag_mobile_popup(){
	       $data['flag'] = $_POST['val']; 
	       $data['create_date'] = date("Y-m-d h:i:s"); 
		   $this->db->where('id',1);
		   $this->db->update('mobile_setting',$data);
		    
	     
	 }
	 
	 public function export_category(){
	 
	      $this->load->dbutil();
          $this->load->helper('file');
          $this->load->helper('download');
          $delimiter = ",";
          $newline = "\r\n";
          $filename = "newsletter_user_list.csv";
          $query = "SELECT  * from app_user";
          $result = $this->db->query($query);
	
			mysql_connect('localhost', 'uaet10_uae', 'uae@!@#');
			mysql_select_db('uaet10_uae');
			$qry = mysql_query("SELECT * FROM category c join category_detail cd on(c.cate_id=cd.cate_id) where cd.cate_langid=20 and c.cate_reaid=14");
			$data = "";
			$data .=  "category_name,Status,Sort_order,mobile_sort_order,\n";
			while($row = mysql_fetch_array($qry)) {
			    
			     if($row['cate_status']==1){
				      $status  ='active';
				  }else{
				      $status  ='inactive';
				  }
			     $data .= $row['cate_name'].",".$status .",".$row['order_by'].",".$row['mob_sort']."\n";
				 
				 	$qry1 = mysql_query("SELECT * FROM product p join product_detail pd on(p.pro_id=pd.pro_id) where pd.pro_langid=20 and p.pro_catid='".$row['cate_id']."' and p.pro_reaid=14")or die(mysql_error());
					if(mysql_num_rows($qry1)){
					$data .=  ",,\n";
					$data .=  ",Listing_name,Status,sort_order,mobile_view,segment\n";
					while($row1 = mysql_fetch_array($qry1)) {
 
							 if($row1['pro_status']==1){
								  $status1  ='active';
							  }else{
								  $status1  ='inactive';
							  }
							  if($row1['s_id']==1){
							     $seg = '1 seg';
							  }
							  if($row1['s_id']==2){
							     $seg = '2 seg';
							  }
							  if($row1['s_id']==3){
							     $seg = '3 seg';
							  }
							  if($row1['s_id']==4){
							     $seg = '4 seg';
							  }							  
							 $data .= ",".$row1['pro_title'].",".$status1 ." , ".$row1['sort'].",".$row1['mobile_view'].",". $seg ." \n";
                              $data .=  ",,\n";							 
					
					}
					}
				 
			}

			header('Content-Type: application/csv');
			header('Content-Disposition: attachement; filename="filename.csv"');
			echo $data; exit();
         
	 }
	 public function bulk_notification(){
		 $data['page'] ='Send notification';
		 $data['title'] ='Send notification';
		 $data['heading'] ='Send notification';
		 $this->db->select("p.*,a.contact_name,a.mobile")
		 ->from("push_notification p")
		 ->join("app_user a","p.device_id=a.device_id","left");
		 $this->db->group_by('p.device_id');
		 $data['result'] = $this->db->get()->result();	
 		
		 $data['notidata'] = $this->db->select("*")
		 ->from("tbl_setting")->where("id",1)->get()->row();
		 
		 
		 $this->load->view('admin/include/header',$data);
		 $this->load->view('admin/include/inner_header',$data);
		 $this->load->view('admin/view_bulk_notification',$data);
		 $this->load->view('admin/include/footer');	     
	 
	 
	 }
	 public function send_notification(){
	     $ids = $_POST['ids'];
	     $ids1 = $_POST['ids1'];
		 
		 $this->db->select("*")
		 ->from("push_notification");
		 $this->db->where_in('id',$ids);
		 $result = $this->db->get()->result();
		 
         $notidata = $this->db->select("*")
		 ->from("tbl_setting")->where("id",1)->get()->row();		 
		 $img = base_url().'images/notification/'.$notidata->image;
         foreach($result as $r){
		     
			 sendNotification($r->registration_key,$notidata->title,$notidata->content,'',$img,3,$r->device_id);
		      //ios($r->device_id,$notidata->title,$notidata->content,0,$img,3,$r->device_id);
		 } 
	 
	 }
	 
     public function save_data_notification(){
	     $error       = 1;
		 $data['title']       = $_POST['title'];
		 $data['content'] = $_POST['description'];
		 if(!empty($_FILES["image"]["name"]))
		 {
			 $data1['upload_path'] = 'images/notification/';
			 $data1['allowed_types'] = 'gif|jpg|jpeg|png';
			 $data1['encrypt_name'] = false;
			 $data1['overwrite'] = true;
			 $this->load->library('upload',$data1);
			 if($this->upload->do_upload('image'))
			 {
				 $imagedata = $this->upload->data();
				 $uploadfile = $imagedata['file_name'];
			     $data['image'] = $uploadfile;
		 
			 }else{
				 $data['imgerror'] = $this->upload->display_errors();
				 $error = 0 ;
				 $return = array(
					"status"=>300,  
					"msg"=>$data['imgerror'] 
				  );
				  
					 
			 }
		} 

         if($error==1){
		       $this->db->where("id",1);
		       $this->db->update("tbl_setting",$data);
			 $return = array(
				 "status"=>300,  
				 "msg"=>'Data updated.' 
			 );
		 }
         echo json_encode($return);		 
	 }	 
	  
 	
    
	
}
