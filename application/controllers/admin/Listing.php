<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class listing extends CI_Controller {

      function __construct(){

		  parent::__construct();
		   $this->load->model("admin/user");
		   $this->load->model('admin/Common_model');
		   $this->load->helper('resize');
		   $this->load->library('email');
		   $this->load->library('session');
		  /*  $sess_array = array(
          'id' => 1,
          'username' => 'Admin'
           ) ;
         $this->session->set_userdata('id', $sess_array);*/
	  }
	  
	  // index method for manage category function  
	public function index()
	{	 
	  
	   if(!$this->session->userdata('id')){
	         redirect("admin/login");
	   }else{
		   
		  $data['categories'] = $this->user->get_category(0);
		 $data['page'] ='Dashboard';
	     $data['title'] ='Dashboard';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/managecategory_view');
		$this->load->view('admin/include/footer');  
	   }
	}
	

	function manage_cities(){
		 if(!$this->session->userdata('id')){
	         redirect("admin/login");
	   }else{
		   
		     $data['cities'] = $this->user->get_cities();
			 $data['page'] ='Cities';
		     $data['title'] ='Cities';
			$this->load->view('admin/include/header',$data);
			$this->load->view('admin/include/inner_header',$data);
			$this->load->view('admin/manage_cities');
			$this->load->view('admin/include/footer');  
	   }
	}
	function website_transulate(){
		 if(!$this->session->userdata('id')){
	         redirect("admin/login");
	   }else{
		   
		     $data['translate'] = $this->db->get('tbl_website_translate')->result();
			 $data['page'] ='Website Static Content';
		     $data['title'] ='Website Static Content';
			$this->load->view('admin/include/header',$data);
			$this->load->view('admin/include/inner_header',$data);
			$this->load->view('admin/static_website_content');
			$this->load->view('admin/include/footer');  
	   }
	}
	function destinations(){
		 if(!$this->session->userdata('id')){
	         redirect("admin/login");
	   }else{
		   
		     $data['destinations'] = $this->user->get_destinations();
			 $data['page'] ='Destinations';
		     $data['title'] ='Destinations';
			$this->load->view('admin/include/header',$data);
			$this->load->view('admin/include/inner_header',$data);
			$this->load->view('admin/manage_destinations');
			$this->load->view('admin/include/footer');  
	   }
	}
	function teams(){
		 if(!$this->session->userdata('id')){
	         redirect("admin/login");
	   }else{
		   
		     $data['teams'] = $this->user->get_team();
			 $data['page'] ='Team';
		     $data['title'] ='Team';
			$this->load->view('admin/include/header',$data);
			$this->load->view('admin/include/inner_header',$data);
			$this->load->view('admin/team_list');
			$this->load->view('admin/include/footer');  
	   }
	}

	public function service_slider(){
		
		 if(!$this->session->userdata('id')){
	         redirect("admin/login");
	   }else{
		   
		     $data['slider'] = $this->user->get_service_slider();
			 $data['page'] ='Service slider';
		     $data['title'] ='Service slider';
			$this->load->view('admin/include/header',$data);
			$this->load->view('admin/include/inner_header',$data);
			$this->load->view('admin/service_slider_list');
			$this->load->view('admin/include/footer');  
	   }
	}
	function manage_events(){
		 if(!$this->session->userdata('id')){
	         redirect("admin/login");
	   }else{		   
		     $data['cities'] = $this->user->get_cities();
		     $data['events'] = $this->user->get_evnets();
			 $data['page'] ='events';
		     $data['title'] ='events';
			$this->load->view('admin/include/header',$data);
			$this->load->view('admin/include/inner_header',$data);
			$this->load->view('admin/event_list');
			$this->load->view('admin/include/footer');  
	   }
	}
	function contact_us(){
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
		
			
		
		$data['languages'] = $this->user->get_language(1);
		
		$data['regions'] = $this->user->get_regions(1);
		
		$data['cate'] = $this->user->get_category_single($id,'view');
	    $data['contact'] = $this->user->getcontactus();
		$data['page'] ='view_category';
	    $data['title'] ='view category';
	    $data['heading'] ='view category';
	    $data['image'] ='';
		$data['action'] = '';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/contact_us');
		$this->load->view('admin/include/footer');  
		  
		  
	   }
	}
	function contact_footer($id){
		
	   if(!$this->session->userdata('id')){
	         redirect("admin/login");
	   }else{


	   	           if($this->input->post('submit') != false){
                    			                
		   	    	 					  
				        $result = $this->user->edit_contact_footer($this->input->post(),$id);
						if($result){
				        $_SESSION['msg'] = 'Contact updated';
					  redirect("admin/contact_footer/1");
				      }else{
					  $data['msg'] = 'Please try again'; 
				     }  				   
				
		       }		 		
		   
		     $data['data_contact'] =$this->user->footer_contact($id);
		     $data['action'] = base_url().'admin/contact_footer/'.$id;
			 $data['page'] ='contact';
		     $data['title'] ='contact';
			$this->load->view('admin/include/header',$data);
			$this->load->view('admin/include/inner_header',$data);
			$this->load->view('admin/contact_edit', $data);
			/*$this->load->view('admin/include/footer'); */ 
	   }
  }
	


     public function email_history(){
	 	$data['page'] ='Emails';
	    $data['title'] ='Emails';
	    $data['heading'] ='Emails';	      
		  $this->db->select("f.*,p.title")
	      ->from("email_send_record f")
	      ->join("tbl_templates p","p.template_id=f.template_id")
		  ->order_by("f.email_id","desc");
	      $result = $this->db->get();	
		  $data['emails'] = $result->result_array(); 
		  $this->load->view('admin/include/header',$data);
		  $this->load->view('admin/include/inner_header',$data);
		  $this->load->view('admin/email_send_list');
		  $this->load->view('admin/include/footer');
	 }
	 function delete_email_history($id){  
		
			$this->db->where('email_id', $id);
            $query = $this->db->delete('email_send_record');
	      if($query){
		  $_SESSION['msg'] = 'Email History deleted';
	      redirect("admin/email_history"); 
	      }

	}


	 public function add_sendemail(){
	 	if(!$this->session->userdata('id')){
	         redirect("admin/login");
	    }else{
			
			  if($this->input->post('submit')!=false){
				    
                 
                $temp_id=$this->input->post('template_id');
                $Templatedata = $this->user->get_template_details($temp_id);
                $subs_users=$this->input->post('subs_users');
                $user_id = $this->input->post('users');
                $contact_users = $this->input->post('contact_users');
                 $data['pages'] = $this->user->get_template($temp_id);
                	 //    print_r($Templatedata[0]['template']);die();
               // var_dump($subs_users); die();

                if($user_id!=""){
                   foreach ($user_id as  $value) {

                	   $data= $this->db->get_where('enquiries_form', array('id'=> $value))->row();
                	  

		                	$this->email->set_mailtype("html");
		                    $this->email->from('group@roylacg.com', 'RoyalCg');
							$this->email->to($data->email);
							$this->email->cc('another@another-example.com');
							$this->email->bcc('them@their-example.com');
					        $this->email->subject($this->input->post('subject'));
                            $body = $Templatedata[0]['template'];
                            $this->email->message($Templatedata[0]['template']);                 
                            $this->email->send();
                             $insertdata['created_at'] = date("Y-m-d H:i:s");
                             $insertdata['sender_type'] = 'Inquiry-users';
				  			 $insertdata['users_id'] =$value;
				  			 $insertdata['email_subject'] = $this->input->post('subject');
				  			 $insertdata['template_id'] = $this->input->post('template_id');
				  			 $insertdata['template_detail']= $Templatedata[0]['template'];
				 			 $insertdata['status'] = 1;
				  			$query=$this->db->insert("email_send_record",$insertdata);
                    }
                }elseif ($subs_users!="") {
                     foreach ($subs_users as  $val) {

                	   $subdata= $this->db->get_where('tbl_subcribe_email', array('subscribe_id'=> $val))->row();
                	     // print_r($data->subscribe_id);die();

		                	 $this->email->set_mailtype("html");
		                    $this->email->from('group@roylacg.com', 'RoyalCg');
							$this->email->to($subdata->email);
							$this->email->cc('another@another-example.com');
							$this->email->bcc('them@their-example.com');
					        $this->email->subject($this->input->post('subject'));
                            $body = $Templatedata[0]['template'];
                            $this->email->message($Templatedata[0]['template']);                 
                            $this->email->send();

                             $insertdata['created_at'] = date("Y-m-d H:i:s");
                             $insertdata['sender_type'] = 'Subscriber';
				  			 $insertdata['users_id'] =$val;
				  			 $insertdata['template_detail']= $Templatedata[0]['template'];
				  			 $insertdata['email_subject'] = $this->input->post('subject');
				  			 $insertdata['template_id'] = $this->input->post('template_id');
				 			 $insertdata['status'] = 1;
				  			$query=$this->db->insert("email_send_record",$insertdata);
                    }
                }else{
                	 foreach ($contact_users as  $us) {

                	   $data= $this->db->get_where('contact_us', array('id'=> $us))->row();
                	      //print_r($data->email);

		                	 $this->email->set_mailtype("html");
		                    $this->email->from('group@roylacg.com', 'RoyalCg');
							$this->email->to($data->email);
							$this->email->cc('another@another-example.com');
							$this->email->bcc('them@their-example.com');
					        $this->email->subject($this->input->post('subject'));
                            $body = $Templatedata[0]['template'];
                            $this->email->message($Templatedata[0]['template']);                 
                            $this->email->send();

                             $insertdata['created_at'] = date("Y-m-d H:i:s");
                             $insertdata['sender_type'] = 'contact';
				  			 $insertdata['users_id'] = $us;
				  			 $insertdata['template_detail']= $Templatedata[0]['template'];
				  			 $insertdata['email_subject'] = $this->input->post('subject');
				  			 $insertdata['template_id'] = $this->input->post('template_id');
				 			 $insertdata['status'] = 1;
				  			$query=$this->db->insert("email_send_record",$insertdata);
                    }
                }
                
              
				 /* print_r($insertdata); die();*/
				   if($query){
				  /* 	  print_r($query); die();*/
					$_SESSION['msg'] = 'Send Email';
					  redirect("admin/email_history");
				   }else{
					 $data['msg'] = 'Please try again'; 
				   }
				
			    }
			
		 $data['heading'] = 'Send Email';
		 $data['page'] ='end_email';
	     $data['title'] ='Send Email';
		 $data['templates'] = $this->user->templates();
		 $data['users_contact'] = $this->user->contact_users();
		 $data['users_inquiry'] = $this->user->inquiry_users();
		 $data['users_sub'] = $this->user->subs_users();
		 $data['action'] = base_url().'admin/add_sendemail';
		 $this->load->view('admin/include/header',$data);
		 $this->load->view('admin/include/inner_header',$data);
		 $this->load->view('admin/add_sendmail');
		   
	   }
	 }
	// add category function 
	/*function add_destination(){
		
		
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			if($this->input->post('submit') != false){
	
              $filename2 ='';
			if(!empty($_FILES['image']['name'])){		
		  $config['upload_path']   = './images/';
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
         $this->load->library('upload', $config,'image2');
         $this->image2->initialize($config);
			
         if ( ! $this->image2->do_upload('image')) {
         
			
		  $error1 =  $this->image2->display_errors(); 
          
            $data['error2'] = $error1;
			$error = 1;
           }
			
         else { 
             $data2 =  $this->image2->data();
			 $filename2 = $data2['file_name'];
				
			}
	      }
           			
         else { 
			 
			 $result = $this->User->add_destination($this->input->post(),$filename2);
		      if($result){				  
				     $_SESSION['msg'] = 'Category added';
					  redirect("admin/destinations");
				  }else{
					 $data['msg'] = 'Please try again'; 
				  }
				} 		  				
		}
		
		$data['page'] ='add_category';
	    $data['title'] ='add category';
	    $data['heading'] ='add category';
	    $data['image'] ='image';
	    
	   
		$data['action'] = base_url().'admin/add_destination';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_destination');
		  
		  
		  
	   }
    }*/

 function add_destination(){
	  	  if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			if($this->input->post('submit') != false){
	
		if ($_FILES["userfile"]['name'] != '') 
          {
           if ($_FILES["userfile"] !== "")
           {
             // $namearr = $_FILES["userfile"]["name"];
               $this->load->library('upload');
               $config['upload_path']= './images/';
               $config['max_size']=1024;
               $config['file_name']= $_FILES["userfile"]["name"];
               $config['overwrite'] = TRUE;
               $config['allowed_types'] = 'doc|docx|jpg|jpeg|png|gif';
               $this->upload->initialize($config);
              if(!$this->upload->do_upload('userfile'))
                {
              
                }else{
                  $file_path= $this->upload->data('file_name');
                }
            }else{
               $file_path = "";
            }
        }else
        {
          // $file_path = "";
            $file_path = "";
        }
                $data_to_store = array(
                   'destinations_name' => $this->input->post('destinations_name'),
                   'description' =>$this->input->post('description'),
                   'destinations_url' =>$this->input->post('destinations_url'),                     
                   'destinations_image' => $file_path,
                   'created' =>date('Y-m-d'),
                   'destinations_status' =>$this->input->post('status'),
                );
                $result=$this->db->insert('destinations',$data_to_store);

                if($result){
				  
				     $_SESSION['msg'] = 'Destination added';
					  redirect("admin/destinations");
				  }else{
					 $data['msg'] = 'Please try again'; 
				  }
				}

				$data['page'] ='add_destination';
			    $data['title'] ='add Destination';
			    $data['heading'] ='add Destination';
			    $data['image'] ='userfile';			    
				$data['action'] = base_url().'admin/add_destination';
				$this->load->view('admin/include/header',$data);
				$this->load->view('admin/include/inner_header',$data);
				$this->load->view('admin/add_destination');
	   }
	  }

  function view_destination($id) {
			
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{		
		$data['designation'] = $this->user->get_destination_id($id);		
		$data['page'] ='view_destination';
	    $data['title'] ='view destination';
	    $data['heading'] ='view destination';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/view_destination');
		$this->load->view('admin/include/footer');  
		  
		  
	   }
	}

	function view_email_history($id) {
			
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{		
		$data['email_data'] = $this->user->view_email_history($id);		
		$data['page'] ='view_email_history';
	    $data['title'] ='view email_history';
	    $data['heading'] ='view email_history';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/view_email_history');
		$this->load->view('admin/include/footer');  
		  
		  
	   }
	}
	   function view_event($id) {
			
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{		
		$data['data_event'] = $this->user->get_event_id($id);
		//print_r($data['data_event']); die();	
		$data['page'] ='view_event';
	    $data['title'] ='view event';
	    $data['heading'] ='view event';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/view_event');
		$this->load->view('admin/include/footer');  
		  
		  
	   }			  
				  
	}
	  function edit_destination($id){
	  	  if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			 $error = 0;
			 $image = '';
			 $image2 = '';
			if($this->input->post('submit') != false){
                   
			         if ($_FILES["userfile"]['name'] != '') 
			          {
			           if ($_FILES["userfile"] !== "")
			           {
			             // $namearr = $_FILES["userfile"]["name"];
			               $this->load->library('upload');
			               $config['upload_path']= './images/';
			               $config['max_size']=1024;
			               $config['file_name']= $_FILES["userfile"]["name"];
			               $config['overwrite'] = TRUE;
			               $config['allowed_types'] = 'doc|docx|jpg|jpeg|png|gif';
			               $this->upload->initialize($config);
			              if(!$this->upload->do_upload('userfile'))
			                {
			              
			                }else{
			                  $file_path= $this->upload->data('file_name');
			                }
			            }else{
			               $file_path = "";
			            }
			        }else
			        {
			          // $file_path = "";
			            $file_path = "";
			        }			                
		   	    	 					  
				        $result = $this->user->edit_destination($this->input->post(),$file_path,$id);
						if($result){
				        $_SESSION['msg'] = 'Destination Updated';
					  redirect("admin/destinations");
				      }else{
					  $data['msg'] = 'Please try again'; 
				     }  				   
				
		}		 		
		
		$data['designation'] = $this->user->get_destination_id($id);
		$data['page'] ='Edit Destination';
	    $data['title'] ='Edit Destination ';
	    $data['heading'] ='Edit Destination ';
	    $data['image'] ='userfile';	    
		$data['action'] = base_url().'admin/edit_destination/'.$id;
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_destination');
		$this->load->view('admin/include/footer');		  
	  }	  
  }
/*code by megha destination*/
	function add_category(){
		
		
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			if($this->input->post('submit') != false){
	
              $filename2 ='';
			 
		     //second  image upload code
			 
			if($_FILES['cate_image2']['name'] !=""){
		
		  $config['upload_path']   = './images/category/';
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
		  
         $this->load->library('upload', $config,'image2');
         $this->image2->initialize($config);
			
         if ( ! $this->image2->do_upload('cate_image2')) {
         
			
		  $error1 =  $this->image2->display_errors(); 
          //$error1 .= '<p>(Dimention must be less then 380*330)</p>'; 
			 
            $data['error2'] = $error1;
			$error = 1;
           }
			
         else { 
             $data2 =  $this->image2->data();
			 $filename2 = $data2['file_name'];
				
			}
	      }
			 //end second image upload code 
			
          $config['upload_path']   = './images/';
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
		  // $config['max_size']      = 100000; 
    //       $config['max_width']     = 381; 
    //       $config['max_height']    = 331; 
       
         $this->load->library('upload', $config,'image1');
		 $this->image1->initialize($config);
         if ( ! $this->image1->do_upload('image')) {

					
		  $error1 =  $this->image1->display_errors(); 
          $error1 .= '<p>(Dimention must be less then 380*330)</p>'; 
			 
          $data['error'] = $error1;
			
			
           }
			
         else {
             $data1 =  $this->image1->data(); 
			 
			    $filename3 = '';
				if($_FILES['mobileimg']['name'] !=""){

					$config['upload_path']   = './images/mobile_category/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['encrypt_name'] = true;
					//$config['max_size']      = 100000; 
					//$config['max_width']     = 381; 
					//$config['max_height']    = 331; 

					$this->load->library('upload', $config,'image3');
					$this->image3->initialize($config);

					if ( ! $this->image3->do_upload('mobileimg')) {


						$error1 =  $this->image3->display_errors(); 
						//$error1 .= '<p>(Dimention must be less then 380*330)</p>'; 

						$data['error2'] = $error1;
						$error = 1;
					}

					else { 
						$data2 =  $this->image3->data();
						$filename3 = $data2['file_name'];

					}
				}

                $filename4 = '';
				if($_FILES['mobile_image2']['name'] !=""){

					$config['upload_path']   = './images/mobile_category/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['encrypt_name'] = true;
					//$config['max_size']      = 100000; 
					//$config['max_width']     = 381; 
					//$config['max_height']    = 331; 

					$this->load->library('upload', $config,'image4');
					$this->image4->initialize($config);

					if ( ! $this->image4->do_upload('mobile_image2')) {


						$error1 =  $this->image4->display_errors(); 
						//$error1 .= '<p>(Dimention must be less then 380*330)</p>'; 

						$data['error2'] = $error1;
						$error = 1;
					}

					else { 
						$data2 =  $this->image4->data();
						$filename4 = $data2['file_name'];

					}
				}				
			 
			 
			 $result = $this->user->add_category($this->input->post(),$data1['file_name'],$filename2,$filename3,$filename4);

		      if($result){
				  
				     $_SESSION['msg'] =  $filename2;
					  redirect("admin/category");
				  }else{
					 $data['msg'] = 'Please try again'; 
				  }
			  	 
             
           } 
				  
 
			 
			
				
		}
			
		
		$data['languages'] = $this->user->get_language(1);
		
		$data['regions'] = $this->user->get_regions(1);
		
			
		
		$data['page'] ='Add category';
	    $data['title'] ='Add category';
	    $data['heading'] ='Add category';
	    $data['image'] ='image';
	    $data['image2'] ='cate_image2';
	    $data['image3'] ='mobileimg';
	    $data['image4'] ='mobile_image2';
		$data['action'] = base_url().'admin/add_category';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_category');
		  
		  
		  
	   }
    }
	
	


/* end*/

	function  add_city(){
	if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			if($this->input->post('submit') != false){
	
		if ($_FILES["userfile"]['name'] != '') 
          {
           if ($_FILES["userfile"] !== "")
           {
             // $namearr = $_FILES["userfile"]["name"];
               $this->load->library('upload');
               $config['upload_path']= './images/';
               $config['max_size']=0;
               $config['file_name']= $_FILES["userfile"]["name"];
               $config['overwrite'] = TRUE;
               $config['allowed_types'] = 'doc|docx|jpg|jpeg|png|gif';
               $this->upload->initialize($config);
              if(!$this->upload->do_upload('userfile'))
                {
              
                }else{
                  $file_path= $this->upload->data('file_name');
                }
            }else{
               $file_path = "";
            }
        }else
        {
          // $file_path = "";
            $file_path = "";
        }

                if ($_FILES["city_icon"] !== "")
           {
             // $namearr = $_FILES["userfile"]["name"];
               $this->load->library('upload');
               $config['upload_path']= './images/city_icons/';
               $config['max_size']=1024;
               $config['file_name']= $_FILES["city_icon"]["name"];
               $config['overwrite'] = TRUE;
               $config['allowed_types'] = '*';
               $this->upload->initialize($config);
              if(!$this->upload->do_upload('city_icon'))
                {
              
                }else{
                  $city_icon= $this->upload->data('file_name');
                }
            }else{
               $city_icon = "";
            }
                $data_to_store = array(
                   'city_name' => $this->input->post('city_name'),
                   'city_arabic' => $this->input->post('city_arabic'),
                   'city_chiness' => $this->input->post('city_chiness'),
                   'city_russian' => $this->input->post('city_russian'),
                   'city_link' => $this->input->post('city_link'),
                   'total_hotels' =>$this->input->post('total_hotels'),
                   'to_price' =>$this->input->post('total_cars'),                    
                   'city_image' => $file_path,
                   'city_icon' => $city_icon,
                   'create_date' =>date('Y-m-d'),
                   'city_status' => 1
                );
                $result=$this->db->insert('tbl_city',$data_to_store);

                if($result){
				  
				     $_SESSION['msg'] = 'City added';
					  redirect("admin/manage_cities");
				  }else{
					 $data['msg'] = 'Please try again'; 
				  }
				}

				$data['page'] ='add_city';
			    $data['title'] ='add City';
			    $data['heading'] ='add city';
			    $data['image'] ='userfile';	
			    $data['city_icon'] ="city_icon";	    
				$data['action'] = base_url().'admin/add_city';
				$this->load->view('admin/include/header',$data);
				$this->load->view('admin/include/inner_header',$data);
				$this->load->view('admin/add_city');
	   }
	}

	  function add_team(){
	  	  if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			if($this->input->post('submit') != false){
	
		if ($_FILES["userfile"]['name'] != '') 
          {
           if ($_FILES["userfile"] !== "")
           {
             // $namearr = $_FILES["userfile"]["name"];
               $this->load->library('upload');
               $config['upload_path']= './images/';
               $config['max_size']=1024;
               $config['file_name']= $_FILES["userfile"]["name"];
               $config['overwrite'] = TRUE;
               $config['allowed_types'] = 'doc|docx|jpg|jpeg|png|gif';
               $this->upload->initialize($config);
              if(!$this->upload->do_upload('userfile'))
                {
              
                }else{
                  $file_path= $this->upload->data('file_name');
                }
            }else{
               $file_path = "";
            }
        }else
        {
          // $file_path = "";
            $file_path = "";
        }
                $data_to_store = array(
                   'name' => $this->input->post('name'),
                   'name_arabic' => $this->input->post('name_arabic'),
                   'name_russian' => $this->input->post('name_russian'),
                   'name_chiness' => $this->input->post('name_chiness'),
                   'arabic_description' => $this->input->post('arabic_description'),
                   'russian_description' => $this->input->post('russian_description'),
                   'chiness_description' => $this->input->post('chiness_description'),
                   'description' => $this->input->post('description'),
                   'designation' =>$this->input->post('designation'),
                   'arabic_designation' =>$this->input->post('arabic_designation'),
                   'russian_designation' =>$this->input->post('russian_designation'),
                   'chiness_designation' =>$this->input->post('chiness_designation'),
                   'facebook' =>$this->input->post('facebook'),  
                   'insta' =>$this->input->post('insta'), 
                   'gmail' =>$this->input->post('gmail'),                   
                   'team_image' => $file_path,
                   'created_date' =>date('Y-m-d'),
                   'status' => 1
                );
                $result=$this->db->insert('teams',$data_to_store);

                if($result){
				  
				     $_SESSION['msg'] = 'Team added';
					  redirect("admin/team");
				  }else{
					 $data['msg'] = 'Please try again'; 
				  }
				}

				$data['page'] ='add_team';
			    $data['title'] ='add Team';
			    $data['heading'] ='add Team';
			    $data['image'] ='userfile';			    
				$data['action'] = base_url().'admin/add_team';
				$this->load->view('admin/include/header',$data);
				$this->load->view('admin/include/inner_header',$data);
				$this->load->view('admin/add_team');
	   }
	  }
	
	     //view single category detail
		function view_category($id){
		
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
		
			
		
		$data['languages'] = $this->user->get_language(1);
		
		$data['regions'] = $this->user->get_regions(1);
		
		$data['cate'] = $this->user->get_category_single($id,'view');
		
		$data['page'] ='View category';
	    $data['title'] ='view category';
	    $data['heading'] ='view category';
	    $data['image'] ='';
		$data['action'] = '';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/view_category');
		 
	   }
    }


	
	// edit category function  
	
	function edit_category($id){
			
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			$error = 0 ;
			$file =array();
		if($this->input->post('submit') != false){
			
			if($_FILES['edit_image']['name']!=""){				
		  $config['upload_path']   = './images/';
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
		 // $config['max_size']      = 100000; 
          $config['max_width']     = 381; 
          $config['max_height']    = 331; 
       
         $this->load->library('upload', $config,'image1');
		 $this->image1->initialize($config);
         if ( ! $this->image1->do_upload('edit_image')) {         
			
		  $error1 =  $this->image1->display_errors(); 
          $error1 .= '<p>(Dimention must be less then 380*330)</p>'; 
			 
            $data['error'] = $error1;
			$error = 1;
           }			
         else { 
             $data1 =  $this->image1->data();
			 $file['file_name'] = $data1['file_name'];
				
			}
	      }	 	   

				 $result = $this->user->edit_category($this->input->post(),$file,$id);	 
		      if($result){				  
				    $_SESSION['msg'] = 'Category updated';
					 redirect("admin/category");
				  }else{
					 $data['msg'] = 'Please try again'; 
				  }
			/*}  */	 
             
         } 
			
		$data['cate'] = $this->user->get_category_single($id,'null');		
		$data['languages'] = $this->user->get_language(1);		
		$data['regions'] = $this->user->get_regions(1);		
		$data['page'] ='Edit category';
		$data['heading'] ='edit category';
	    $data['title'] ='edit category';
	    $data['image'] ='edit_image';
	    $data['image2'] ='cate_image2';
		$data['action'] = base_url().'admin/edit_category/'.$id;
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_category');	  
		  
	   }
		
		
	}
	
	  //delete category
	   
	function delete_category($id){
		       /*  $result = $this->user->get_category_single($id);
				 unlink('./images/'.$result[0]['cate_image']);
		         unlink('./images/category/'.$result[0]['cate_image2']);
		         unlink('./images/mobile_category/'.$result[0]['cate_image2']);*/
		
			$this->db->where('cate_id', $id);
            $query = $this->db->delete('category');
          /*  $this->db->where('cate_id', $id);		  
            $query = $this->db->delete('category_detail');*/ 
	      if($query){
		  $_SESSION['msg'] = 'category deleted';
	      redirect("admin/category"); 
	      }

	}

	// manage view subcategory 

	function status_category($id){
			$result = $this->db->get_where('category',array('cate_id'=>$id))->row();

			$status=$result->cate_status;
           // print_r($status);die();
			if($status==1){

				$status_data=0;
             }else{
                $status_data=1;
			 }
   
	      $update['cate_status'] = $status_data;
		  $this->db->where("cate_id",$id);
		  $query = $this->db->update("category",$update);
          if($query){
		  $_SESSION['msg'] = 'Category Status Updated';
	      redirect("admin/category"); 
	      }
		
		
	}
	function status_event($id){
			$result = $this->db->get_where('tbl_events',array('event_id'=>$id))->row();
			$status=$result->event_status;
           // print_r($status);die();
			if($status==1){

				$status_data=0;
             }else{
                $status_data=1;
			 }   
	      $update['event_status'] = $status_data;
		  $this->db->where("event_id",$id);
		  $query = $this->db->update("tbl_events",$update);
          if($query){
		  $_SESSION['msg'] = 'Event Status Updated';
	      redirect("admin/manage_event"); 
	      }		
	}
	function status_team($id){
			$result = $this->db->get_where('teams',array('team_id'=>$id))->row();
			$status=$result->status;
           // print_r($status);die();
			if($status==1){

				$status_data=0;
             }else{
                $status_data=1;
			 }   
	      $update['status'] = $status_data;
		  $this->db->where("team_id",$id);
		  $query = $this->db->update("teams",$update);
          if($query){
		  $_SESSION['msg'] = 'Team Status Updated';
	      redirect("admin/team"); 
	      }		
	}
	function status_service_slider($id){
			$result = $this->db->get_where('tbl_serviceslider',array('slider_id'=>$id))->row();
			$status=$result->slider_status;
           // print_r($status);die();
			if($status==1){

				$status_data=0;
             }else{
                $status_data=1;
			 }   
	      $update['slider_status'] = $status_data;
		  $this->db->where("slider_id",$id);
		  $query = $this->db->update("tbl_serviceslider",$update);
          if($query){
		  $_SESSION['msg'] = 'Service Slider Status Updated';
	      redirect("admin/service_slider"); 
	      }		
	}
	function menu_status($id){
			$result = $this->db->get_where('pages_detail',array('id'=>$id))->row();
			$status=$result->menu_status;
           // print_r($status);die();
			if($status==1){

				$status_data=0;
             }else{
                $status_data=1;
			 }   
	      $update['menu_status'] = $status_data;
		  $this->db->where("id",$id);
		  $query = $this->db->update("pages_detail",$update);
          if($query){
		  $_SESSION['msg'] = 'Page Status Updated';
	      redirect("admin/page"); 
	      }		
	}
	function footer_status($id){
			$result = $this->db->get_where('pages_detail',array('id'=>$id))->row();
			$status=$result->footer_status;
           // print_r($status);die();
			if($status==1){

				$status_data=0;
             }else{
                $status_data=1;
			 }   
	      $update['footer_status'] = $status_data;
		  $this->db->where("id",$id);
		  $query = $this->db->update("pages_detail",$update);
          if($query){
		  $_SESSION['msg'] = 'Footer Status Updated';
	      redirect("admin/page"); 
	      }		
	}
	function status_destination($id){
			$result = $this->db->get_where('destinations',array('id'=>$id))->row();
			$status=$result->destinations_status;
           // print_r($status);die();
			if($status==1){

				$status_data=0;
             }else{
                $status_data=1;
			 }   
	      $update['destinations_status'] = $status_data;
		  $this->db->where("id",$id);
		  $query = $this->db->update("destinations",$update);
          if($query){
		  $_SESSION['msg'] = 'Destination Status Updated';
	      redirect("admin/destinations"); 
	      }		
	}
	
	function status_city($id){
				$result = $this->db->get_where('tbl_city',array('city_id'=>$id))->row();
				$status=$result->city_status;
	           // print_r($status);die();
				if($status==1){

					$status_data=0;
	             }else{
	                $status_data=1;
				 }   
		      $update['city_status'] = $status_data;
			  $this->db->where("city_id",$id);
			  $query = $this->db->update("tbl_city",$update);
	          if($query){
			  $_SESSION['msg'] = 'City Status Updated';
		      redirect("admin/manage_cities"); 
		      }		
		}
	
	public function subcategory()
	{	 
	   
	   if(!$this->session->userdata('id')){
	         redirect("admin/login");
	   }else{
		   /*if($this->input->post('filter_submit') != false){
			
			$data['listings'] = $this->user->get_subcategory_filter($this->input->post());	
			
		}else{

		$data['listings'] = $this->user->get_subcategory();	

		} */

		 $data['subcategories'] = $this->user->get_subcategory(0);
		 // $data['categories'] =  $this->user->category_by_region(uae);
		 $data['page'] ='Subcategory';
	     $data['title'] ='Subcategory';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/managesubcategory_view');
		$this->load->view('admin/include/footer');  
	   }
	}
     
    
	// add subcategory function 
	function add_subcategory(){
		
		
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			if($this->input->post('submit')!=""){
	
              $result = $this->user->add_subcategory($this->input->post());

		      if($result){
				  
				     $_SESSION['msg'] =  "Added Subcategory";
					  redirect("admin/subcategory");
				  }else{
					 $data['msg'] = 'Please try again'; 
				  }
			  	 
           }
	
		$data['page'] ='Add subcategory';
	    $data['title'] ='Add subcategory';
	    $data['heading'] ='Add subcategory';
	    
		$data['action'] = base_url().'admin/add_subcategory';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_subcategory');
		  
		  
		  
	   }
    }


	// manage view subcategory 
		function view_subcategory($id){
		
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
		
			
		
		$data['languages'] = $this->user->get_language(1);
		
		$data['regions'] = $this->user->get_regions(1);
		
		$data['cate'] = $this->user->get_subcategory_single($id,'view');
		

		$data['page'] ='view_subcategory';
	    $data['title'] ='view subcategory';
	    $data['heading'] ='view subcategory';
	    $data['image'] ='';
		$data['action'] = '';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/view_subcategory');
		  
	   }
    }

    // edit category function  
	
	function edit_subcategory($id){
			
		/* if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{*/
			$error = 0 ;
			$file =array();
		if($this->input->post('submit') != false){
			
			if($_FILES['edit_image']['name'] !=""){
				
		  $config['upload_path']   = './images/';
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
		 // $config['max_size']      = 100000; 
          $config['max_width']     = 381; 
          $config['max_height']    = 331; 
       
         $this->load->library('upload', $config,'image1');
		 $this->image1->initialize($config);
         if ( ! $this->image1->do_upload('edit_image')) {
         
			
		  $error1 =  $this->image1->display_errors(); 
          $error1 .= '<p>(Dimention must be less then 380*330)</p>'; 
			 
            $data['error'] = $error1;
			$error = 1;
           }
			
         else { 
             $data1 =  $this->image1->data();
			 $file['file_name'] = $data1['file_name'];
				
			}
	      }			
           
		   
		     //second  image upload code
			 
			if($_FILES['subcate_image2']['name'] !=""){
			
		  $config['upload_path']   = './images/subcategory/';
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
		  //$config['max_size']      = 10000000; 
         // $config['max_width']     = 3811; 
          //$config['max_height']    = 3311; 
       
         $this->load->library('upload', $config,'image2');
         $this->image2->initialize($config);
			
         if ( ! $this->image2->do_upload('subcate_image2')) {
         
		
		    $error1 =  $this->image2->display_errors(); 
			
			
          //$error1 .= '<p>(Dimention must be less then 380*330)</p>'; 
			 
            $data['error2'] = $error1;
			$error = 1;
           }
			
         else { 
             $data2 =  $this->image2->data();
			 $file['file_name2'] = $data2['file_name'];
				
			}
	      }
	 //end second image upload code 
			 
			    $filename3 = '';
				if($_FILES['mobileimg']['name'] !=""){

					$config['upload_path']   = './images/mobile_subcategory/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['encrypt_name'] = true;
					//$config['max_size']      = 100000; 
					//$config['max_width']     = 381; 
					//$config['max_height']    = 331; 

					$this->load->library('upload', $config,'image3');
					$this->image3->initialize($config);

					if ( ! $this->image3->do_upload('mobileimg')) {


						$error1 =  $this->image3->display_errors(); 
						//$error1 .= '<p>(Dimention must be less then 380*330)</p>'; 

						$data['error2'] = $error1;
						$error = 1;
					}

					else { 
						$data2 =  $this->image3->data();
						$filename3 = $data2['file_name'];
						$file['filename3'] = $filename3;
					}
				}
				
			 //end second image upload code 
			 
			    $filename4 = '';
				if($_FILES['mobile_image2']['name'] !=""){

					$config['upload_path']   = './images/mobile_subcategory/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['encrypt_name'] = true;
					//$config['max_size']      = 100000; 
					//$config['max_width']     = 381; 
					//$config['max_height']    = 331; 

					$this->load->library('upload', $config,'image4');
					$this->image4->initialize($config);

					if ( ! $this->image4->do_upload('mobile_image2')) {


						$error1 =  $this->image4->display_errors(); 
						//$error1 .= '<p>(Dimention must be less then 380*330)</p>'; 

						$data['error2'] = $error1;
						$error = 1;
					}

					else { 
						$data2 =  $this->image4->data();
						$filename4 = $data2['file_name'];
						$file['filename4'] = $filename4;
					}
				}
				
			if($error == 0 ){
				 $result = $this->user->edit_subcategory($this->input->post(),$id);
			 
		      if($result){
				  
				    $_SESSION['msg'] = 'subcategory updated';
					 redirect("admin/subcategory");
				  }else{
					 $data['msg'] = 'Please try again'; 
				  }
			}  	 
             
         } 
			
		$data['cate'] = $this->user->get_subcategory_single($id,'null');
		
		
		$data['languages'] = $this->user->get_language(1);
		
		$data['regions'] = $this->user->get_regions(1);


		
			
		
		$data['page'] ='Edit subcategory';
		$data['heading'] ='Edit subcategory';
	    $data['title'] ='Edit subcategory';
	    $data['image'] ='edit_image';
	    $data['image2'] ='subcate_image2';
		$data['image3'] ='mobileimg';
		$data['image4'] ='mobile_image2';
		$data['action'] = base_url().'admin/edit_subcategory/'.$id;
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_subcategory');
		 
		  
		  
	  // }
		
		
	}
	
	  //delete category
	   
	function delete_subcategory($id){
		      $result = $this->db->get_where('subcategory',array('subcate_id'=>$id))->row();
                /* unlink('./images/'.$result[0]['cate_image']);
		         unlink('./images/subcategory/'.$result[0]['cate_image2']);
		         unlink('./images/mobile_subcategory/'.$result[0]['cate_image2']);*/
		
			$this->db->where('subcate_id', $id);
            $query = $this->db->delete('subcategory');
           /* $this->db->where('subcate_id', $id);		  
            $query = $this->db->delete('subcategory_detail'); */
	      if($query){
		  $_SESSION['msg'] = 'subcategory deleted';
	      redirect("admin/subcategory/"); 
	      }

	}

function delete_feedback($id){
		    
			$this->db->where('feedback_id', $id);
            $query = $this->db->delete('feedback');
          
	      if($query){
		  $_SESSION['msg'] = 'Feedback deleted';
	      redirect("admin/feedback/"); 
	      }

	}
	function status_subcategory($id){
			$result = $this->db->get_where('subcategory',array('subcate_id'=>$id))->row();
			$status=$result->subcate_status;
			if($status==1){
				$status_data=0;
             }else{
                $status_data=1;
			 }
   
	      $update['subcate_status'] = $status_data;
		  $this->db->where("subcate_id",$id);
		  $query = $this->db->update("subcategory",$update);
          if($query){
		  $_SESSION['msg'] = 'Subcategory Status Updated';
	      redirect("admin/subcategory/"); 
	      }
		
		
	}

	function status_page($id){
	        $result = $this->db->get_where('pages',array('page_id'=>$id))->row();
			$status=$result->page_status;

			if($status==1){

				$status_data=0;
             }else{
                $status_data=1;
			 }
   
	      $update['page_status'] = $status_data;
		  $this->db->where("page_id",$id);
		  $query = $this->db->update("pages",$update);
          if($query){
		  $_SESSION['msg'] = 'Page Status Updated';
	      redirect("admin/page/"); 
	      }	
	}

function status_template($id){
	        $result = $this->user->get_template_single($id);
			$status=$result[0]['status'];

			if($status==1){

				$status_data=0;
             }else{
                $status_data=1;
			 }
   
	      $update['status'] = $status_data;
		  $this->db->where("template_id",$id);
		  $query = $this->db->update("tbl_templates",$update);
          if($query){
		  $_SESSION['msg'] = 'Template Status Updated';
	      redirect("admin/view_templates/"); 
	      }	
	}

	function status_feedback($id){
	        $result = $this->user->get_feedback_single($id);
			$status=$result[0]['feedback_status'];

			if($status==1){

				$status_data=0;
             }else{
                $status_data=1;
			 }
   
	      $update['feedback_status'] = $status_data;
		  $this->db->where("feedback_id",$id);
		  $query = $this->db->update("feedback",$update);
          if($query){
		  $_SESSION['msg'] = 'Feedback Status Updated';
	      redirect("admin/feedback/"); 
	      }	
	}
	//listing module start
	// manage listing 
	
	 function manage_listing(){
		  
	   if(!$this->session->userdata('id')){
	         redirect("admin/login");
	   }else{
		if($this->input->post('filter_submit') != false){
			
			$data['listings'] = $this->user->get_listing_filter($this->input->post());		
		}else{
		$data['listings'] = $this->user->get_listing();		} 
		$data['regions'] = $this->user->get_regions(1);//for filter		
        $data['subcategories'] =  $this->user->subcategory_by_region(uae);
		$data['segment'] = $this->Common_model->getAll("segment"); 
		$data['page'] ='Dashboard';
	    $data['title'] ='Dashboard';
	    $data['heading'] ='Dashboard';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/managelisting_view');
		$this->load->view('admin/include/footer');  
	   }
	 }
	
  //add listing

  	
	function add_listing(){
		
			 $error = 0;
			 $image = array();
			if($this->input->post('submit') != false){	


		        $config['upload_path'] = './images/listing/';
		        $config['allowed_types'] = 'jpg|jpeg|png|gif';
		        $config['overwrite'] = false;
		        $this->load->library('upload',$config,'image1');
		        $this->image1->initialize($config);
				$image['thumbimage'] ='';
					if($_FILES['thumbimage']['name'] !=""){
				      if ($this->image1->do_upload('thumbimage'))
		                {
		                    $data = $this->image1->data();
							
							$image['thumbimage'] = $data['file_name'];
		                   
		                }
	                else
	                {
	                    $data['error'] = $this->image1->display_errors();
	                    $error=1;
	                }
	              }
        		//end thumb image uploading
				
				//header image
				$image['headerimage'] ='';	
				if($_FILES['thumbimage']['name'] !=""){				
				if ($this->image1->do_upload('headerimage'))
                {
                    $data = $this->image1->data();
					$image['headerimage'] = $data['file_name'];
                   
                }
                else
                {
                    $data['error'] = $this->image1->display_errors();
                    $error=1;
                }
			    }
				//end header image 
				//full image
				$image['fullimage'] ='';
				if($_FILES['fullimage']['name'] !=""){
				
		         $config['upload_path'] = './images/listing/';
                 $config['allowed_types'] = 'jpg|jpeg|png|gif';
                 $config['overwrite'] = false;
                 $this->load->library('upload',$config,'image2');
                 $this->image2->initialize($config);
			     if ($this->image2->do_upload('fullimage'))
                   {
                    $data = $this->image2->data();
					$image['fullimage'] = $data['file_name'];
                   
                   }
                  else
                   {
                    $data['error'] = $this->image2->display_errors();
                    $error=1;
                  }
                 }				
			
 					$config['upload_path'] = './images/listing/';
			        $config['allowed_types'] = 'jpg|jpeg|png|gif';
			        $config['overwrite'] = false;
			        $this->load->library('upload',$config,'image1');
			        $this->image1->initialize($config);
					$image['imageone'] ='';
					if($_FILES['imageone']['name'] !=""){
				      if ($this->image1->do_upload('imageone'))
		                {
		                    $data = $this->image1->data();
							
							$image['imageone'] = $data['file_name'];
		                   
		                }
	                else
	                {
	                    $data['error'] = $this->image1->display_errors();
	                    $error=1;
	                }
	              }

	             /* $config['upload_path'] = './images/listing/';
			        $config['allowed_types'] = 'jpg|jpeg|png|gif';
			        $config['overwrite'] = false;
			        $this->load->library('upload',$config,'image1');
			        $this->image1->initialize($config);
					$image['imagetwo'] ='';
					if(!empty($_FILES['imagetwo']['name'])){
				      if ($this->image1->do_upload('imagetwo'))
		                {
		                    $data = $this->image1->data();
							
							$image['imagetwo'] = $data['file_name'];
		                   
		                }
	                else
	                {
	                    $data['error'] = $this->image1->display_errors();
	                    $error=1;
	                }
	              }*/
	               $config['upload_path'] = './images/listing/';
			        $config['allowed_types'] = 'jpg|jpeg|png|gif';
			        $config['overwrite'] = false;
			        $this->load->library('upload',$config,'image1');
			        $this->image1->initialize($config);
					$image['imagethree'] ='';
					if($_FILES['imagethree']['name'] !=""){
				      if ($this->image1->do_upload('imagethree'))
		                {
		                    $data = $this->image1->data();
							
							$image['imagethree'] = $data['file_name'];
		                   
		                }
	                else
	                {
	                    $data['error'] = $this->image1->display_errors();
	                    $error=1;
	                }
	              }

	               $config['upload_path'] = './images/listing/';
			        $config['allowed_types'] = 'jpg|jpeg|png|gif';
			        $config['overwrite'] = false;
			        $this->load->library('upload',$config,'image1');
			        $this->image1->initialize($config);
					$image['imagetwo'] ='';
					if($_FILES['imagetwo']['name'] !=""){
				      if ($this->image1->do_upload('imagetwo'))
		                {
		                    $data = $this->image1->data();
							
							$image['imagetwo'] = $data['file_name'];
		                   
		                }
	                else
	                {
	                    $data['error'] = $this->image1->display_errors();
	                    $error=1;
	                }
	              }

					/* end image*/
				if($error==0){					
					$result = $this->user->add_listing($this->input->post(),$image);
					     if($result){				  
				           $_SESSION['msg'] = 'Product added';
					       redirect("admin/manage_listing");
				            }else{
					        $data['msg'] = 'Please try again'; 
				         }
				}
			}
	
		$data['page'] ='Add product';
	    $data['title'] ='Add Product';
	    $data['heading'] ='Add Product';
	    $data['thumbimage'] ='thumbimage';
	    $data['headerimage'] ='headerimage';
	    $data['imageone'] ='imageone';
	    $data['imagetwo'] ='imagetwo';
	    $data['imagethree'] ='imagethree';
	    $data['fullimage'] ='fullimage';
		$data['action'] = base_url().'admin/add_listing';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_listing');
		
	}
	 
	 //view listing 
	 
	 function view_listing($id) {
			
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			 
		$data['languages'] = $this->user->get_language(1);
		
		$data['regions'] = $this->user->get_regions(1);
		
		
		$data['listing'] = $this->user->get_listing_single($id,'view');
		
			
		
		$data['page'] ='view product';
	    $data['title'] ='view Product';
	    $data['heading'] ='view Product';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/view_listing');
		  
		  
	   }			  
				  
	}
	

	/* maneger page details view */

	 function details_page($id) {
			
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			
		
		$data['pages'] = $this->user->get_page_details($id,'view');
		
		$data['page'] ='view_listing';
	    $data['title'] ='view listing';
	    $data['heading'] ='view listing';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/view_details_page');
		  
	   }			  
				  
	}

	 function details_template($id) {
			
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{		
		$data['template'] = $this->user->get_template_details($id);		
		$data['page'] ='view_template';
	    $data['title'] ='view template';
	    $data['heading'] ='view template';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/view_template');
		$this->load->view('admin/include/footer');  
		  
		  
	   }			  
				  
	}
	

 function edit_template($id){
 	if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
		 if($this->input->post('submit') != false){
			 
				$updat['title'] = $this->input->post('title');
				$updat['template'] = $this->input->post('description');
				$updat['status'] = $this->input->post('status');
				$updat['created_at'] = date("Y-m-d H:i:s");
				$result = $this->user->edit_template($updat,$id);
				 if($result){
					
					 $_SESSION['msg'] = 'Template updated';
					 redirect("admin/view_templates/",$msg);
					 
				 }else{
					  $data['msg'] = 'Please try again';
				 }	
			 
		 }
		$data['pages'] = $this->user->get_template($id);
		$data['page'] ='edit_template';
		$data['name'] ='edit_flag';
		$data['heading'] ='edit template';
	    $data['title'] ='edit template';
		$data['action'] = base_url().'admin/edit_template/'.$id;
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_template');
		$this->load->view('admin/include/footer'); 
		
		}
	 }


	 function edit_static($id){
 	if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
		 if($this->input->post('submit') != false){
			 
				$updat['title'] = $this->input->post('title');
				$updat['arabic'] = $this->input->post('arabic');
				$updat['russian'] = $this->input->post('russian');
				$updat['chiness'] = $this->input->post('chiness');
				$result = $this->user->edit_static($updat,$id);
				 if($result){
					
					 $_SESSION['msg'] = 'Static Content updated';
					 redirect("admin/website_transulate/",$msg);
					 
				 }else{
					  $data['msg'] = 'Please try again';
				 }	
			 
		 }
		$data['static'] = $this->db->get_where('tbl_website_translate',array('lang_id' =>$id))->row();
		/*print_r($data['static']); die();*/
		$data['page'] ='static Content';
		$data['heading'] ='static Content';
	    $data['title'] ='Edit static Content';
		$data['action'] = base_url().'admin/edit_static/'.$id;
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/edit_static', $data);	 
		
		}
	 }


     //edit listing function	
		function edit_listing($id){
		
	 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			 
		       $error = 0;
			   $image = array();
			if($this->input->post('submit') != false){
			
			//upload thumimage 
              
                
              $config['upload_path'] = './images/listing/';
              $config['allowed_types'] = 'jpg|jpeg|png|gif';
              $this->load->library('upload',$config,'image1');
              $this->image1->initialize($config);
			  
			  //thumb image uploading
			  
             if($_FILES['edit_thumbimage']['name'] !=""){ 
			 
		      if ($this->image1->do_upload('edit_thumbimage'))
                 {
                    $data = $this->image1->data();
					
					$image['thumbimage'] = $data['file_name'];
                   
                }
                else
                {
                    $data['error'] = $this->image1->display_errors();
                    $error=1;
                }
			 }
        		//end thumb image uploading
				
				//header image
				
			 if($_FILES['edit_headerimage']['name'] !=""){ 
				
				if ($this->image1->do_upload('edit_headerimage'))
                {
                    $data = $this->image1->data();
					$image['headerimage'] = $data['file_name'];
                   
                }
                else
                {
                    $data['error'] = $this->image1->display_errors();
                    $error=1;
                }
			 }
				//end header image 
				
				//full image
				
		if($_FILES['edit_fullimage']['name'] !=""){ 

			 $config['upload_path'] = './images/listing/';
             $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $this->load->library('upload',$config,'image2');
             $this->image2->initialize($config); 
			 if ($this->image2->do_upload('edit_fullimage'))
                {
                    $data = $this->image2->data();
					$image['fullimage'] = $data['file_name'];
                   
                }
                else
                {
                    $data['error'] = $this->image2->display_errors();
                    $error=1;
                }

	       	}	


	       	if($_FILES['edit_imageone']['name'] !=""){ 

			 $config['upload_path'] = './images/listing/';
             $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $this->load->library('upload',$config,'image2');
             $this->image2->initialize($config); 
			 if ($this->image2->do_upload('edit_imageone'))
                {
                    $data = $this->image2->data();
					$image['imageone'] = $data['file_name'];
                   
                }
                else
                {
                    $data['error'] = $this->image2->display_errors();
                    $error=1;
                }

	       	}	
	       	if($_FILES['edit_imagetwo']['name'] !=""){ 

			 $config['upload_path'] = './images/listing/';
             $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $this->load->library('upload',$config,'image2');
             $this->image1->initialize($config); 
			 if ($this->image1->do_upload('edit_imagetwo'))
                {
                    $data = $this->image1->data();
					$image['imagetwo'] = $data['file_name'];
                   
                }
                else
                {
                    $data['error'] = $this->image1->display_errors();
                    $error=1;
                }

	       	}
	       	if($_FILES['edit_imagethree']['name'] !=""){ 

			 $config['upload_path'] = './images/listing/';
             $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $this->load->library('upload',$config,'image2');
             $this->image1->initialize($config); 
			 if ($this->image1->do_upload('edit_imagethree'))
                {
                    $data = $this->image1->data();
					$image['imagethree'] = $data['file_name'];
                   
                }
                else
                {
                    $data['error'] = $this->image1->display_errors();
                    $error=1;
                }

	       	}				
				//end full image
				
				if($error==0){
				//print_r($image);die();
					
					$result = $this->user->edit_listing($this->input->post(),$image,$id);
					     if($result){
				  
				           $_SESSION['msg'] = 'Product updated';
					       redirect("admin/manage_listing");
				            }else{
					        $data['msg'] = 'Please try again'; 
				         }
						 
						 
				    }
					
			  }
		$data['languages'] = $this->user->get_language(1);
		$data['regions'] = $this->user->get_regions(1);
		$data['listing'] = $this->user->get_listing_single($id,'null');
		$data['page'] ='Edit product';
		$data['heading'] ='Edit Product';
	    $data['title'] ='Edit Product';
	    $data['thumbimage'] ='edit_thumbimage';
	    $data['headerimage'] ='edit_headerimage';
	    $data['fullimage'] ='edit_fullimage';
	    $data['imageone'] ='edit_imageone';
	    $data['imagetwo'] ='edit_imagetwo';
	    $data['imagethree'] ='edit_imagethree';
		$data['action'] = base_url().'admin/edit_listing/'.$id;
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_listing');
		  
	   }
	   
	}
	
	
	//delete function 
	
	function delete_listing($id){
			/*$result = $this->user->get_listing_single($id);
			unlink('./images/listing/'.$result[0]['pro_thumb']);
			unlink('./images/listing/'.$result[0]['pro_header']);
			unlink('./images/listing/'.$result[0]['pro_inner']);
		
		*/
			$this->db->where('pro_id', $id);
            $query = $this->db->delete('product');
            
	      if($query){
		  $_SESSION['msg'] = 'Product Deleted';
	      redirect("admin/manage_listing/"); 
	      }
		
		
	}
	
	//end listing module
	function status_listing($id){
		//echo "string";
            $result = $this->db->get_where('product',array('pro_id'=>$id))->row();
			$status=$result->pro_status;
			if($status==1){
				$status_data=0;
             }else{
                $status_data=1;
			 }
   
	      $update['pro_status'] = $status_data;
		  $this->db->where("pro_id",$id);
		  $query = $this->db->update("product",$update);
          if($query){
		  $_SESSION['msg'] = 'Product Status Updated';
	      redirect("admin/manage_listing/"); 
	      }	
	}
	function status_subscription($id){
            $result = $this->user->get_subscription_single($id);
           /* print_r($result); die();*/
			$status=$result[0]['status'];

			if($status==1){
				$status_data=0;
             }else{
                $status_data=1;
			 }
   
	      $update['status'] = $status_data;
		  $this->db->where("subscribe_id",$id);
		  $query = $this->db->update("tbl_subcribe_email",$update);
          if($query){
		  $_SESSION['msg'] = 'Subscription Status Updated';
	      redirect("admin/subscription/"); 
	      }
		
		
	}
	
	function status_testimonisal($id){
            $result = $this->user->get_testimonisal_single($id);
			$status=$result[0]['testi_status'];

			if($status==1){

				$status_data=0;
             }else{
                $status_data=1;
			 }
   
	      $update['testi_status'] = $status_data;
		  $this->db->where("testi_id",$id);
		  $query = $this->db->update("testimonial",$update);
          if($query){
		  $_SESSION['msg'] = 'Testimonial Status Updated';
	      redirect("admin/testimonial/"); 
	      }
		
	}
	
	 //get category 
	 //ajax function
	function get_subcategory(){
		$id = $_POST['id'];
		
		
		$subcategories = $this->user->subcategory_by_region($id);
		echo "<option value=''>select subcategory</option>";
		foreach($subcategories as $cat){
			
			?>
			<option value="<?php echo $cat['subcate_id'];?>" > <?php echo $cat['subcate_name'];?> </option>
		<?php } 
			
	}
	
	//for unique url 

   function clean_string($str){
	   
	   $cleanStr = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $str)));
	   
	   return str_replace(" ","-",$cleanStr);
	   
   }

	
 function uniqueTitle(){
	 $region = uae;
	 

		 
	
	 $main_id = $_POST['main_id'];
	 
	 $meta = $this->clean_string($_POST['meta_tag']);
	 
	  //for category 
	 if($_POST['page']=='add_category' or $_POST['page']=='edit_category')
	 {

		 
		$this->db->select("*")
                  ->from("category")
				  ->where("cate_reaid",$region)
				  ->where("meta_tag",$meta);
				  
				        //for edit page 
				     if($_POST['page']=='edit_category'){
						 
		             $this->db->where("cate_id != ",$main_id );	 
					
					 }
				  
 			
		   $query = $this->db->get();
		
		   $count = $query->num_rows();
		
		 if($count>0){
			
			 echo "false";
			 
		 }else{
			
			 echo "true";
		 }
	 }

	 //subcategory page condition
	 
	 
	if($_POST['page']=='add_subcategory' or $_POST['page']=='edit_subcategory')
	 {
		 header('Content-type: application/json');
		  $meta = str_replace(" ","-",$meta);
		  $main_id = $_POST['main_id'];
		 
		$this->db->select("*")
                  ->from("subcategory")
				  ->where("subcate_reaid",$region)
				  ->where("meta_tag",$meta);
				  
				        //for edit page 
				     if($_POST['page']=='edit_subcategory'){
						 
		             $this->db->where("subcate_id != ",$main_id );	 
					
					 }
				  
 			
		   $query = $this->db->get();
		
		   $count = $query->num_rows();
		
		 if($count>0){
			
			
			 echo "false";
			 
		 }else{
			
			
			 echo "true";
		 }
	 }
	 //listing page condition
	 
	 
	if($_POST['page']=='add_listing' or $_POST['page']=='edit_listing')
	 {
		 header('Content-type: application/json');
		  $meta = str_replace(" ","-",$meta);
		  $main_id = $_POST['main_id'];
		 
		$this->db->select("*")
                  ->from("product")
				  ->where("pro_reaid",$region)
				  ->where("meta_tag",$meta);
				  
				        //for edit page 
				     if($_POST['page']=='edit_listing'){
						 
		             $this->db->where("pro_id != ",$main_id );	 
					
					 }
				  
 			
		   $query = $this->db->get();
		
		   $count = $query->num_rows();
		
		 if($count>0){
			
			
			 echo "false";
			 
		 }else{
			
			
			 echo "true";
		 }
	 }
	 
		 
      
 }
 
  public function manage_listing_order(){
  
         $data =array(
		 'sort'=>$_POST['val']
		 ); 
		  $where = array(
		 'pro_id'=>$_POST['list_id']
		 );
		 
		$this->db->update("product", $data, $where);
	 
  
  }
  
 public function manage_listing_home (){
 
 		$this->db->select("*")
                  ->from("product")
				  ->where("home_page",1);
		 $query = $this->db->get();
		 $count1 = $query->num_rows();
		  
		 if($count1 >2 and $_POST['value']==1){
		   echo "0";
		 
		 }else{ 
			  $data =array(
			 'home_page'=>$_POST['value']
			 ); 
			  $where = array(
			 'pro_id'=>$_POST['list_id']
			 );
			 
			$this->db->update("product", $data, $where);
        }
 }

  public function mobile_order(){
		 $key	  = $_POST['stuff']['key'];
		 $val      = $_POST['stuff']['val'];
		 $id       = $_POST['id']; 
		 $where = array(
		     "cate_id"=>$id 
		 );
	    
	     $array = array(
	         $key  => $val,
	     );
         $this->db->update("category", $array, $where);
	 
  } 


  public function add_segment_to(){
 
		 $pro_id       = $_POST['pro_id']; 
		 $range        = $_POST['range']; 
		 $where = array(
		     "pro_id"=>$pro_id 
		 );
	    
	     $array = array(
	         "s_id"  => $range,
	     );
         $this->db->update("product", $array, $where);
	 
  }
  public function listing_like(){
		 $this->db->select("Count(*) as tot_like")  
		 ->from("product p")
		 ->join('product_detail pd', 'p.pro_id = pd.pro_id') 
		 ->join('mobile_like ml', 'p.pro_id = ml.listing_id') 
		 ->where('ml.device_id !=','(null)') 
		 //->group_by('ml.listing_id') 
		/* ->group_by(array("ml.device_id", "ml.listing_id")) */
		 ->order_by('ml.id','desc');
		 
         $data['listingcount'] = $this->db->get()->result();
		 
		  
		   //echo $this->db->last_query();die;
			$data['page'] ='view_listing_count';
			$data['heading'] ='view listing count';
			$data['title'] ='view listing count';
			$this->load->view('admin/include/header',$data);
			$this->load->view('admin/include/inner_header',$data);
			$this->load->view('admin/view_listing_count');
			$this->load->view('admin/include/footer'); 		  
		  
         		  
  } 
  public function send_notification(){
 
		 $id       = $_POST['id']; 
		 $type        = $_POST['type']; 
		 $cate = $this->user->get_category_single($id,'null');
		 
         $result = $this->user-> get_category_by_laguage(language,$id); 
	    
		 $this->db->select('*');
		 $query = $this->db->from("push_notification")
		 ->get()->result();
         $image = base_url().'images/'.$cate[0]['cate_image'];
		 $desc =  $result[0]['cate_desc'];
		 
		 foreach($query as $q){
			    sendNotification($q->registration_key,$result[0]['cate_name'],$desc ,$id,$image,$type,$q->device_id);
                 
		 }  
  }

/* add template */
public function add_template(){		
		if(!$this->session->userdata('id')){
	         redirect("admin/login");
	    }else{
			
			  if($this->input->post('submit')!=false){
				  
				  
				  $insertdata['created_at'] = date("Y-m-d H:i:s");
				
				  $insertdata['title'] = $this->input->post('title');
				  $insertdata['template'] = $this->input->post('description');
				  
				  $insertdata['status'] = 1;
				   /*$query =$this->db->insert("tbl_templates",$insertdata);*/
				/*  $query = $this->user->add_template($insertdata);*/
				
				   if($query=$this->db->insert("tbl_templates",$insertdata)){
				  /* 	  print_r($query); die();*/
					$_SESSION['msg'] = 'Template added';
					  redirect("admin/view_templates");
				   }else{
					 $data['msg'] = 'Please try again'; 
				   }
					   
				 
				  
			    }
			
		 $data['heading'] = 'Add Template';
		 $data['page'] ='add_template';
	     $data['title'] ='Add Template';
		 $data['languages'] = $this->user->get_language(1);
		 $data['action'] = base_url().'admin/add_template';
		 $this->load->view('admin/include/header',$data);
		 $this->load->view('admin/include/inner_header',$data);
		 $this->load->view('admin/add_template');
		   
	   }
	}
}
