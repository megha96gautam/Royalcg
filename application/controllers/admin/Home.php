<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

      function __construct(){
		  parent::__construct();
		  $this->load->model("admin/user");
		  $this->load->helper('resize');
          $this->load->library('session');
		 /* $sess_array = array(
          'id' => 1,
          'username' => 'Admin'
           ) ;
         $this->session->set_userdata('id', $sess_array);*/
		 
	  }
	  
	  // index method  for dashboard
	public function index()
	{	 
	   echo "Welcome Royalcg"; 
	   if(!$this->session->userdata('username')){
	         redirect("admin/login");
	   }else{
	   	 $data['category_count'] =$this->user->get_category(0);
	   	 $data['city_count'] =$this->user->get_cities();
	   	 $data['product_count'] = $this->user->get_listing();	
	   	 $data['services_count'] = $this->user->get_page(language);
		 $data['page'] ='Dashboard';
	     $data['title'] ='Dashboard';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/home_view');
		 
	   }
	}

     // language module start
	// manage language 
	 public function language(){
		if(!$this->session->userdata('id')){
	         redirect("admin");
	   }else{
		 
		$data['languages'] = $this->user->get_language(0);
		
		$data['page'] ='language';
	    $data['title'] ='manage language';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/language_view');
		$this->load->view('admin/include/footer');  
	   } 
		 
	 }
	 
	 // add language here
	 public function add_language(){
		if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			if($this->input->post('submit') != false){
				$insertdata['lang_name'] = $this->input->post('language_name');
				$insertdata['lang_code'] = $this->input->post('language_code');
				$insertdata['lang_status'] = $this->input->post('status');
				$insertdata['lang_dateadd'] = date("Y-m-d");
				if(!empty($_FILES['add_flag']['name'])){
				          $config['upload_path']   = './images/lang/';
						  $config['allowed_types'] = 'jpg|jpeg|png|gif';
						  $config['max_size']      = 100000; 
						  $config['max_width']     = 35; 
						  $config['max_height']    = 17; 
       
                        $this->load->library('upload', $config);
						
                   if ( ! $this->upload->do_upload('add_flag')) {
                    $data['imgerror'] =  $this->upload->display_errors(); 
					$error = 1;
                    }else {
						
                        $data1 =  $this->upload->data();
   				
						
						$insertdata['image'] = $data1['file_name'];
						
				    
					} 
                  }
				
				$result = $this->user->add_language($insertdata);
				 if($result){
				
					 $_SESSION['msg'] = 'Language Added..';
					 redirect("admin/manage_language/",$msg);
					 
				 }else{
					  $data['msg'] = 'Please try again';
				 }
				
			}
			
			
			
		$data['page'] ='add_language';
		$data['name'] ='add_flag';
		$data['heading'] ='add language';
	    $data['title'] ='add language';
		$data['action'] = base_url().'admin/add_language';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_language');
		$this->load->view('admin/include/footer');  
	   } 
		 
	 }
	 
	 
	  //edit language function
	   
	 function edit_language($id){
		 if($this->input->post('submit') != false){
			 
				$updat['lang_name'] = $this->input->post('language_name');
				$updat['lang_code'] = $this->input->post('language_code');
				$updat['lang_status'] = $this->input->post('status');
				$updat['lang_update'] = date("Y-m-d");
				
				 if(!empty($_FILES['edit_flag']['name'])){
				          $config['upload_path']   = './images/lang/';
						  $config['allowed_types'] = 'jpg|jpeg|png|gif';
						  $config['max_size']      = 100000; 
						  $config['max_width']     = 200; 
						  $config['max_height']    = 200; 
       
                         $this->load->library('upload', $config);
						
                   if ( ! $this->upload->do_upload('edit_flag')) {
                    $data['imgerror'] =  $this->upload->display_errors(); 
					$error = 1;
                    }else {
						
                        $data1 =  $this->upload->data();
   				
						
						$updat['image'] = $data1['file_name'];
						
				    
					} 
                  }
				
				 $result = $this->user->edit_language($updat,$id);
				 if($result){
					
					 $_SESSION['msg'] = 'Language updated';
					 redirect("admin/manage_language/",$msg);
					 
				 }else{
					  $data['msg'] = 'Please try again';
				 }	
			 
		 }
		$data['result'] = $this->user->get_edit_language($id);
		$data['page'] ='edit_language';
		$data['name'] ='edit_flag';
		$data['heading'] ='edit language';
	    $data['title'] ='edit language';
		$data['action'] = base_url().'admin/edit_language/'.$id;
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_language');
		$this->load->view('admin/include/footer'); 
		
		 
	 }


      // view language detail
 function view_language($id){
	
// echo '<pre>'; print_r($id); echo '</pre>';
// die;
	            if(!$this->session->userdata('id')){
	             redirect("admin");
	            }else{
			      			 
		$data['language'] = $this->user->get_lang_id($id);
		
		$data['id'] = $id;
		$data['page'] ='view_language';
	    $data['title'] ='view language';
		$data['heading'] ='view language';
		$data['action'] = '';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/view_language');
		$this->load->view('admin/include/footer');      
	
	
	
            }
		}	
	
	 
	  //delete  language
	 
	 function delete_language($id){
		 
	  if($id != language) {
		  
	  $this->db->where('lang_id', $id);
      $query = $this->db->delete('language'); 
	  //delete data from blog table
	  $this->db->where('blog_langid', $id);
      $this->db->delete('blog_detail'); 
	  
	  //delete data from category_detail
	  $this->db->where('cate_langid', $id);
      $this->db->delete('category_detail'); 
	  
	  // delete from product_detail
	  $this->db->where('pro_langid', $id);
      $this->db->delete('product_detail'); 
	  
	  // delete from product_detail
	  $this->db->where('rea_langid', $id);
      $this->db->delete('reason_detail'); 
	  
 	  // delete from suggession_detail
	  $this->db->where('sug_langid', $id);
      $this->db->delete('suggession_detail'); 
	  
	  // delete from testimonial_detail
	  $this->db->where('testi_langid', $id);
      $this->db->delete('testimonial_detail'); 
	  
	  if($query){
		  $_SESSION['msg'] = 'Language deleted';
	      redirect("admin/manage_language/",$msg); 
		  
	  }
	 }else{
		 
		 $_SESSION['msg'] = 'Language can not delete its default language';
		 redirect("admin/manage_language/",$msg);  
		 
	 }
	  	 
	 }

	 //region module start
	 //manage language  module
public function region()
	{	 
	   
	   if(!$this->session->userdata('id')){
	         redirect("admin");
	   }else{
		$data['regions'] = $this->user->get_regions(0); 
		
		$data['page'] ='region';
	    $data['title'] ='Manage Region';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/region_view');
		$this->load->view('admin/include/footer');  
	   }
	}
	  function add_region(){
		  if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			
			if($this->input->post('submit') != false){
                   
				  
				   
			       $result = $this->user->add_region($this->input->post());    
				 
				  if($result){
					  
					  $_SESSION['msg'] = 'Region added';
					  redirect("admin/manage_region");
				  }else{
					 $data['msg'] = 'Please try again'; 
				  }
				
				
			 }
			
		
		$data['languages'] = $this->user->get_language(1);
			
		$data['heading'] ='add region';
		$data['page'] ='add_region';
	    $data['title'] ='add region';
		$data['action'] = base_url().'admin/add_region';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_region');
		$this->load->view('admin/include/footer');  
		  
		  
	  }
}
 
      // view single region  detail
 function view_region($id){
	
	            if(!$this->session->userdata('id')){
	             redirect("admin");
	            }else{
			      			 
		$data['languages'] = $this->user->get_language(1);
		
		
		$data['regions'] = $this->user->get_region_single($id);
			
		$data['id'] = $id;
		$data['page'] ='view_region';
	    $data['title'] ='view region';
		$data['heading'] ='view region';
		$data['action'] = '';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/view_region');
		$this->load->view('admin/include/footer');      
	
	
	
            }
		}	
	


 function view_testimonial($id){
	
	            if(!$this->session->userdata('id')){
	             redirect("admin");
	            }else{
			      			 
		$data['languages'] = $this->user->get_language(1);
		
		
		$data['testi'] = $this->user->get_testimonial_id($id);
			
		$data['id'] = $id;
		$data['page'] ='view_region';
	    $data['title'] ='view region';
		$data['heading'] ='view region';
		$data['action'] = '';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/view_region');
		$this->load->view('admin/include/footer');      
	
	
	
            }
		}	
	



   // edit region  

	function edit_region($id){

		  if(!$this->session->userdata('id')){
			   redirect("admin");
		  }
		  else
		  {
			 if($this->input->post('submit') != false){
			   
				 $result = $this->user->edit_region($this->input->post(),$id);  

				 if($result){
				   $_SESSION['msg'] = 'Region updated';
					  redirect("admin/manage_region");
				  }else{
					 $data['msg'] = 'Please try again'; 
				  }
				 
			 }				 
	 
			$data['languages'] = $this->user->get_language(1);


			///$data['regions'] = $this->user->get_region_single($id);

			$data['id'] = $id;
			$data['page'] ='edit_region';
			$data['title'] ='edit region';
			$data['heading'] ='edit region';
			$data['action'] = base_url().'admin/edit_region/'.$id;
			$this->load->view('admin/include/header',$data);
			$this->load->view('admin/include/inner_header',$data);
			$this->load->view('admin/add_region');
			$this->load->view('admin/include/footer');      



		}
	}	

		//delete region 
		function delete_region($id){
			
		   $this->db->where('rea_id', $id);
           $query = $this->db->delete('reason');
           $this->db->where('rea_id', $id);		  
          $query = $this->db->delete('reason_detail'); 
	      if($query){
		  $_SESSION['msg'] = 'region deleted';
	      redirect("admin/manage_region/",$msg); 
		  
	  }
			
	}
   //end region module		
      
	  
	   //nanner module start 
	  // manage banner function 
	  function banner(){
		   if(!$this->session->userdata('id')){
	         redirect("admin");
	   }else{
		$data['banners'] = $this->user->get_banners(0); 
		

		$data['page'] ='region';
	    $data['title'] ='Manage Region';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/banner_view');
		$this->load->view('admin/include/footer');  
	   }
		  
	  }
	  
	   //add banner function 
	  
	  function add_banner(){
		  if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			if($this->input->post('submit') != false){
              $filename1 = '';
			  $filename2 = '';

         if(!empty($_FILES['banner']['name'])){			  
			  $config['upload_path']   = './images/banner/';
			  $config['allowed_types'] = 'jpg|jpeg|png|gif';
			  $config['min_width']     = 0; 
			  $config['min_height']    = 0; 
			  $this->load->library('upload', $config,'image1');
			  $this->image1->initialize($config);

			   if ( ! $this->image1->do_upload('banner')) {
					  $data['error'] =  $this->image1->display_errors(); 

			   }else { 
					 $data1 =  $this->image1->data(); 
					 $thumb = './images/banner/thumb/'.$data1['file_name'];
					 resize_image($data1,$thumb,200,100); 
					 $filename1 = $data1['file_name'];
			   }
			   
		 } 

         if(!empty($_FILES['banner_mobile']['name'])){			  
			  $config['upload_path']   = './images/banner/mobile_banner/';
			  $config['allowed_types'] = 'jpg|jpeg|png|gif';
			  $this->load->library('upload', $config,'image2');
			   $this->image2->initialize($config);
			   if ( ! $this->image2->do_upload('banner_mobile')) {
					  $data['error'] =  $this->image2->display_errors(); 
			   }else { 
					 $data1 =  $this->image2->data(); 
					 $filename2 = $data1['file_name'];
			   }
			   
		 } 		 
		   
			$result = $this->user->add_banner($this->input->post(),$filename1,$filename2);


			if($result){
			      $_SESSION['msg'] = 'Banner added';
			      redirect("admin/banner");
			}else{
			      $data['msg'] = 'Please try again'; 
			}
		}		   
		

		$data['regions'] = $this->user->get_regions(1);
		$data['page'] ='Add banner';
	    $data['title'] ='Add banner';
	    $data['heading'] ='Add banner';
	    $data['image'] ='banner';
	    $data['image2'] ='banner_mobile';
		$data['action'] = base_url().'admin/add_banner';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_banner');
		
	  }
		  
		  
  }
  
  
   // edit banner function start
  
  function edit_banner($id){
	  	  if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			 $error = 0;
			 $image = '';
			 $image2 = '';
			if($this->input->post('submit') != false){
                   
                      if(!empty($_FILES['edit_banner']['name'])){			  
		              	  $config['upload_path']   = './images/banner/';
		              	  $config['allowed_types'] = 'jpg|jpeg|png|gif';
		              	  $config['min_width']     = 0; 
			              $config['min_height']    = 0;
		              	  $this->load->library('upload', $config,'image1');
		              	   $this->image1->initialize($config);
		              	   if ( ! $this->image1->do_upload('edit_banner')) {
		              			  $data['error'] =  $this->image1->display_errors(); 
								   $error = 1;
		              	   }else { 
		              			 $data1 =  $this->image1->data(); 
		              			 $thumb = './images/banner/thumb/'.$data1['file_name'];
		              			 resize_image($data1,$thumb,200,100); 
		              			 $image = $data1['file_name'];
		              	   }
		              	   
		              } 

			          if(!empty($_FILES['banner_mobile']['name'])){			  
			          	  $config['upload_path']   = './images/banner/mobile_banner/';
			          	  $config['allowed_types'] = 'jpg|jpeg|png|gif';
			          	  $this->load->library('upload', $config,'image2');
			          	   $this->image2->initialize($config);
			          	   if ( ! $this->image2->do_upload('banner_mobile')) {
			          			  $data['error'] =  $this->image2->display_errors(); 
								   $error = 1;
			          	   }else { 
			          			 $data1 =  $this->image2->data(); 
			          			 $image2 = $data1['file_name'];
			          	   }
			          	   
			          }      
		   	    	  if($error == 0){
						  
				        $result = $this->user->edit_banner($this->input->post(),$image,$id,$image2);
						
						if($result){
				        $_SESSION['msg'] = 'Banner updated';
					  redirect("admin/banner");
				      }else{
					  $data['msg'] = 'Please try again'; 
				     }  
					   
				}
		}		   
		
		$data['regions'] = $this->user->get_regions(1);
		$data['banner'] = $this->user->get_banner_single($id);
		$data['page'] ='edit_banner';
	    $data['title'] ='edit banner';
	    $data['heading'] ='edit banner';
	    $data['image'] ='edit_banner';
	    $data['image2'] ='banner_mobile';
		$data['action'] = base_url().'admin/edit_banner/'.$id;
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_banner');
		$this->load->view('admin/include/footer');  
		  
		  
	  }
	  
  }
   //view banner
	 
	 function view_banner($id) {
			
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			 
		$data['languages'] = $this->user->get_language(1);
		
		$data['regions'] = $this->user->get_regions(1);
		
		
		$data['banner'] = $this->user->get_banner_single($id,'view');
		
			
		
		$data['page'] ='view_banner';
	    $data['title'] ='view banner';
	    $data['heading'] ='view banner';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/view_banner');
		$this->load->view('admin/include/footer');  
		  
		  
	   }			  
				  
	}

	/* function view_city($id){
	   
	   if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{			

			
	    $data['city'] = $this->user->get_city_id($id);		
		$data['page'] ='view_city';
	    $data['title'] ='view city';
	    $data['heading'] ='view city';
	    $data['image'] ='';
		$data['action'] ='';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/city_details');
		$this->load->view('admin/include/footer');  
		  
		  
	   }
    }*/
       //delete the banner
  
    function delete_banner($id){
		
		    $result = $this->user->get_banner_single($id);
			
			
			unlink('./images/banner/'.$result['slider_image']);
			unlink('./images/banner/thumb/'.$result['slider_image']);
			
		
		
			$this->db->where('slider_id', $id);
            $query = $this->db->delete('slider');
           
	      if($query){
		  $_SESSION['msg'] = 'banner deleted';
	      redirect("admin/banner/"); 
	      }
		
	}
	function status_laguage($id){
			$result = $this->db->get_where('language', array('lang_id' =>$id))->row();
            //print_r($result->lang_status); die();
			$status=$result->lang_status;
           if($status==1){

				$status_data=0;
             }else{
                $status_data=1;
			 }
   
	      $update['lang_status'] = $status_data;
		  $this->db->where("lang_id",$id);
		  $query = $this->db->update("language",$update);
          if($query){
		  $_SESSION['msg'] = 'Language Status Updated';
	      redirect("admin/manage_language/"); 
	      }
		
	}
	
	function status_banner($id){
			$result = $this->user->get_banner_single($id);

			$status=$result['slider_status'];
           if($status==1){

				$status_data=0;
             }else{
                $status_data=1;
			 }
   
	      $update['slider_status'] = $status_data;
		  $this->db->where("slider_id",$id);
		  $query = $this->db->update("slider",$update);
          if($query){
		  $_SESSION['msg'] = 'Slider Status Updated';
	      redirect("admin/banner/"); 
	      }
		
	}
	
      
      function add_event(){
		  if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			if($this->input->post('submit') != false){
              $filename1 = '';
			  $filename2 = '';
         if(!empty($_FILES['banner']['name'])){			  
			  $config['upload_path']   = './images/';
			  $config['allowed_types'] = 'jpg|jpeg|png|gif';
			 /* $config['min_width']     = 1600; 
			  $config['min_height']    = 856; */
			  $this->load->library('upload', $config,'image1');
			  $this->image1->initialize($config);
			   if ( ! $this->image1->do_upload('banner')) {
					  $data['error'] =  $this->image1->display_errors(); 
			   }else { 
					  $data1 =  $this->image1->data(); 
					 $thumb = './images/banner/thumb/'.$data1['file_name'];
					 resize_image($data1,$thumb,200,100); 
					 $filename1 = $data1['file_name'];
			   }			   
		 }  	   
			$result = $this->user->add_event($this->input->post(),$filename1);
			if($result){
			      $_SESSION['msg'] = 'Event added';
			      redirect("admin/manage_event");
			}else{
			      $data['msg'] = 'Please try again'; 
			}
		}		
		$data['page'] ='add_event';
	    $data['title'] ='add event';
	    $data['heading'] ='add event';
	    $data['image'] ='banner';
		$data['action'] = base_url().'admin/add_event';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_event');
			  
	  }		  
  }

  function add_service_slider(){
		  if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			if($this->input->post('submit') != false){
              $filename1 = '';
			  $filename2 = '';
         if(!empty($_FILES['banner']['name'])){			  
			  $config['upload_path']   = './assets/images/';
			  $config['allowed_types'] = 'jpg|jpeg|png|gif';
			 /* $config['min_width']     = 1600; 
			  $config['min_height']    = 856; */
			  $this->load->library('upload', $config,'image1');
			  $this->image1->initialize($config);
			   if ( ! $this->image1->do_upload('banner')) {
					  $data['error'] =  $this->image1->display_errors(); 
			   }else { 
					  $data1 =  $this->image1->data(); 
					 $thumb = './images/banner/thumb/'.$data1['file_name'];
					 resize_image($data1,$thumb,200,100); 
					 $filename1 = $data1['file_name'];
			   }			   
		 }  	   
			$result = $this->user->add_service_slider($this->input->post(),$filename1);
			if($result){
			      $_SESSION['msg'] = 'Service Slider added';
			      redirect("admin/service_slider");
			}else{
			      $data['msg'] = 'Please try again'; 
			}
		}		
		$data['page'] ='Add Service_Slider';
	    $data['title'] ='Add Service Slider';
	    $data['heading'] ='Add Service Slider';
	    $data['image'] ='banner';
		$data['action'] = base_url().'admin/add_service_slider';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_service_slider');
			  
	  }		  
  }

 function edit_service_slider($id){
	  	  if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			 $error = 0;
			 $image = '';
			 $image2 = '';
			if($this->input->post('submit') != false){
                   
                      if(!empty($_FILES['edit_banner']['name'])){			  
		              	  $config['upload_path']   = './assets/images/';
		              	  $config['allowed_types'] = 'jpg|jpeg|png|gif';
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
				        $result = $this->user->edit_service_slider($this->input->post(),$image,$id);
						if($result){
				        $_SESSION['msg'] = 'Service Slider updated';
					  redirect("admin/service_slider");
				      }else{
					  $data['msg'] = 'Please try again'; 
				     }  				   
				}
		}		 		
		
		$data['slider'] = $this->user->get_service_slider_id($id);
		$data['page'] ='Service slider';
	    $data['title'] ='Service Slider';
	    $data['heading'] ='Service Slider';
	    $data['image'] ='edit_banner';	    
		$data['action'] = base_url().'admin/edit_service_slider/'.$id;
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_service_slider');
		$this->load->view('admin/include/footer');		  
	  }	  
  }

  function view_service_slider($id) {
			
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{		
	    $data['slider'] = $this->user->get_service_slider_id($id);
		//print_r($data['data_event']); die();	
		$data['page'] ='view_service_slider';
	    $data['title'] ='view service slider';
	    $data['heading'] ='view Service Slider';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/view_service_slider');
		  
	   }			  
				  
	}
  function edit_event($id){
	  	  if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			 $error = 0;
			 $image = '';
			 $image2 = '';
			if($this->input->post('submit') != false){
                   
                      if(!empty($_FILES['edit_banner']['name'])){			  
		              	  $config['upload_path']   = './images/';
		              	  $config['allowed_types'] = 'jpg|jpeg|png|gif';
		              	  $config['min_width']     = 0; 
			              $config['min_height']    = 0;
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
				        $result = $this->user->edit_event($this->input->post(),$image,$id);
						if($result){
				        $_SESSION['msg'] = 'Event updated';
					  redirect("admin/manage_event");
				      }else{
					  $data['msg'] = 'Please try again'; 
				     }  				   
				}
		}		 		
		
		$data['banner'] = $this->user->get_event_id($id);
		$data['page'] ='edit_event';
	    $data['title'] ='edit event';
	    $data['heading'] ='edit event';
	    $data['image'] ='edit_banner';	    
		$data['action'] = base_url().'admin/edit_event/'.$id;
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_event');
		$this->load->view('admin/include/footer');		  
	  }	  
  }
  function edit_city($id){
	  	  if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			 $error = 0;
			 $image = '';
			 $image1 = '';
			if($this->input->post('submit') != false){
                   
			         if ($_FILES["edit_userfile"]['name'] != '') 
			          {
			           if ($_FILES["edit_userfile"] !== "")
			           {
			             // $namearr = $_FILES["userfile"]["name"];
			               $this->load->library('upload');
			               $config['upload_path']= './images/';
			               $config['max_size']=1024;
			               $config['file_name']= $_FILES["edit_userfile"]["name"];
			               $config['overwrite'] = TRUE;
			               $config['allowed_types'] = 'doc|docx|jpg|jpeg|png|gif';
			               $this->upload->initialize($config);
			              if(!$this->upload->do_upload('edit_userfile'))
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

			        if ($_FILES["edit_icon"] !== "")
			           {
			             // $namearr = $_FILES["userfile"]["name"];
			               $this->load->library('upload');
			               $config['upload_path']= './images/city_icons/';
			               $config['max_size']=1024;
			               $config['file_name']= $_FILES["edit_icon"]["name"];
			               $config['overwrite'] = TRUE;
			               $config['allowed_types'] = 'doc|docx|jpg|jpeg|png|gif';
			               $this->upload->initialize($config);
			              if(!$this->upload->do_upload('edit_icon'))
			                {
			              
			                }else{
			                  $file_path1= $this->upload->data('file_name');
			                }
			            }else{
			               $file_path1 = "";
			            }			                
		   	    	 		//print_r($file_path1); die();			  
				        $result = $this->user->edit_city($this->input->post(),$file_path,$file_path1,$id);
						if($result){
				        $_SESSION['msg'] = 'City updated';
					  redirect("admin/manage_cities");
				      }else{
					  $data['msg'] = 'Please try again'; 
				     }  				   
				
		}		 		
		
		$data['city_data'] = $this->user->get_city_id($id);
		$data['page'] ='edit_city';
	    $data['title'] ='edit city';
	    $data['heading'] ='edit City';
	    $data['image'] ='edit_userfile';	    
	    $data['city_icon'] ='edit_icon';	    
		$data['action'] = base_url().'admin/edit_city/'.$id;
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_city');
		$this->load->view('admin/include/footer');		  
	  }	  
  }

   function edit_team($id){
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
		   	    	 					  
				        $result = $this->user->edit_team($this->input->post(),$file_path,$id);
						if($result){
				        $_SESSION['msg'] = 'Team updated';
					  redirect("admin/team");
				      }else{
					  $data['msg'] = 'Please try again'; 
				     }  				   
				
		}		 		
		
		$data['team'] = $this->user->get_team_id($id);
		$data['page'] ='edit_team';
	    $data['title'] ='edit team';
	    $data['heading'] ='edit team';
	    $data['image'] ='userfile';	    
		$data['action'] = base_url().'admin/edit_team/'.$id;
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_team');
		$this->load->view('admin/include/footer');		  
	  }	  
  }


   function view_team($id) {
			
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			 
		$data['team'] = $this->user->get_team_id($id);
		//print_r($data['team']); die();
		$data['page'] ='view_team';
	    $data['title'] ='view team';
	    $data['heading'] ='view team';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/view_team');
		$this->load->view('admin/include/footer');  
		  
		  
	   }			  
				  
	}
	 function view_city($id) {
			
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			 
		$data['city_data'] = $this->user->get_city_id($id);
		//print_r($data['team']); die();
		$data['page'] ='view_city';
	    $data['title'] ='view city';
	    $data['heading'] ='view city';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/city_details');
		$this->load->view('admin/include/footer');  
		  
		  
	   }			  
				  
	}
	  // manage banner function 
	  function mobile_offer(){
		   if(!$this->session->userdata('id')){
	         redirect("admin");
	   }else{
		$query = $this->db->select('*')->from('offer')->get(); 
		$data['banners'] = $query->result_array();
		 
		$data['page'] ='Mobile offer';
	    $data['title'] ='Manage offer';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/mobile_offer_view');
		$this->load->view('admin/include/footer');  
	   }
		  
	  }
	  
	   //add banner function 
	  
	  function add_mobile_offer(){
		  if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			if($this->input->post('submit') != false){
              $filename1 = '';
            if(!empty($_FILES['image']['name'])){			  
			  $config['upload_path']   = './images/offer/';
			  $config['allowed_types'] = 'jpg|jpeg|png|gif';
			  $this->load->library('upload', $config,'image1');
			   $this->image1->initialize($config);
			   if ( ! $this->image1->do_upload('image')) {
					  $data['error'] =  $this->image1->display_errors(); 
			   }else { 
					 $data1 =  $this->image1->data(); 
					 $filename1 = $data1['file_name'];
			   }
			   
		 }

         $insert['title'] = 	$_POST['title'];	 
         $insert['desc'] = 	    $_POST['desc'];	 
         $insert['company_name'] = 	$_POST['company_name'];	 
         $insert['company_contact'] = 	$_POST['company_contact'];	 
         $insert['company_email'] = 	$_POST['company_email'];		 
         $insert['order_by'] = 	$_POST['order_by'];	 
         $insert['status'] = 	$_POST['status'];	 
         $insert['image'] = 	$filename1;	 
         $insert['terms_url'] = $_POST['terms_url'];	 
         $result = $this->db->insert("offer",$insert);
			if($result){
			      $_SESSION['msg'] = 'Mobile offer added';
			      redirect("admin/mobile-offer");
			}else{
			      $data['msg'] = 'Please try again'; 
			}
		}		   
		$data['page'] ='add_offer';
	    $data['title'] ='add offer';
	    $data['heading'] ='add offer';
	    $data['image'] ='image';
		$data['action'] = base_url().'admin/add_mobile_offer';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/mobile_offer');
		$this->load->view('admin/include/footer');  
		  
		  
	  }
		  
		  
  }
  
  
   // edit banner function start
  
  function edit_mobile_offer($id){
 		  if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			if($this->input->post('submit') != false){
              $filename1 = '';
            if(!empty($_FILES['image_edit']['name'])){			  
			  $config['upload_path']   = './images/offer/';
			  $config['allowed_types'] = 'jpg|jpeg|png|gif';
			  $this->load->library('upload', $config,'image1');
			   $this->image1->initialize($config);
			   if ( ! $this->image1->do_upload('image_edit')) {
					  $data['error'] =  $this->image1->display_errors(); 
			   }else { 
					 $data1 =  $this->image1->data(); 
					 $filename1 = $data1['file_name'];
			   }
			   
		 }

         $insert['title'] = 	$_POST['title'];	 
         $insert['desc'] = 	    $_POST['desc'];	 
         $insert['order_by'] = 	$_POST['order_by'];	 
         $insert['company_name'] = 	$_POST['company_name'];	 
         $insert['company_contact'] = 	$_POST['company_contact'];	 
         $insert['company_email'] = 	$_POST['company_email'];	 
         $insert['terms_url'] = $_POST['terms_url'];	 
         $insert['status'] = 	$_POST['status'];
         if($filename1 != ''){
		     $insert['image'] = 	$filename1;	 
		 }		 
         $this->db->where('offer_id',$id);
         $result = $this->db->update("offer",$insert);
			if($result){
			      $_SESSION['msg'] = 'Mobile offer edited';
			      redirect("admin/mobile-offer");
			}else{
			      $data['msg'] = 'Please try again'; 
			}
		}		   
		$data['page'] ='edit_offer';
	    $data['title'] ='edit offer';
	    $data['heading'] ='edit offer';
	    $data['image'] ='image_edit';
		$data['action'] = base_url().'admin/edit_mobile_offer/'.$id;
		$result =  $this->db->get_where("offer",array('offer_id'=>$id));
		foreach($result->result_array() as  $r){}
		$data['banner'] = $r;
		 
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/mobile_offer');
		$this->load->view('admin/include/footer');  
		  
		  
	  }
  }
  
       //delete the banner
  
    function delete_mobile_offer($id){
		
		    $result =  $this->db->get_where("offer",array('offer_id'=>$id));
			
			foreach($result as  $r){}
			unlink('./images/offer/'.$r->image);
			 
			
		
		
			$this->db->where('offer_id', $id);
            $query = $this->db->delete('offer');
           
	      if($query){
		  $_SESSION['msg'] = 'offer deleted';
	      redirect("admin/mobile-offer/"); 
	      }
		
	}
	
	
	
	
	
	
	
	
	
	
	
	 //site setting

     function homecontent($id=20){
		 //echo $id;die;
		 $data = array();
	     if($this->input->post('submit') != false){
		  
		      $updatedata['heading'] = $this->input->post('heading');
			  
		      $updatedata['category_heading'] = $this->input->post('category_heading');
			  
		      $updatedata['category_dis'] = $this->input->post('category_dis');
			  
		      $updatedata['fetur_category_heading'] = $this->input->post('fetur_category_heading');
			  
		      $updatedata['feature_category_dis'] = $this->input->post('feature_category_dis');
			  
		      $updatedata['suggetion_heading'] = $this->input->post('suggetion_heading');
			  
		      $updatedata['suggetion_dis'] = $this->input->post('suggetion_dis');
			  
		      $updatedata['testi_title'] = $this->input->post('testi_title');
			  
		      $updatedata['blog_title'] = $this->input->post('blog_title');
			  
		      $updatedata['blog_dis'] = $this->input->post('blog_dis');
			  
		      $updatedata['visit_title'] = $this->input->post('visit_title');
			  
		      $updatedata['category_text'] = $this->input->post('category_text');
			  
		      $updatedata['info_text'] = $this->input->post('info_text');
			  
		      $updatedata['news_title'] = $this->input->post('news_title');
			  
		      $updatedata['news_dis'] = $this->input->post('news_dis');
			  
		      $updatedata['copy_right'] = $this->input->post('copy_right');
			  
		      $updatedata['privacy'] = $this->input->post('privacy');
			  
		      $updatedata['term'] = $this->input->post('term');
			  
		      $updatedata['copy_policy'] = $this->input->post('copy_policy');
			  
		      $updatedata['readmore'] = $this->input->post('readmore');
			  
		      $updatedata['region'] = $this->input->post('region');
			  
		      $updatedata['home'] = $this->input->post('home');
			  
		      $updatedata['about'] = $this->input->post('about');
			  
		      $updatedata['blog'] = $this->input->post('blog');
			  
		      $updatedata['contact'] = $this->input->post('contact');
			  
		      $updatedata['features'] = $this->input->post('features');
			  
		      $updatedata['suggestions'] = $this->input->post('suggestions');
			  
		      $updatedata['categories_m'] = $this->input->post('categories_m');
			  
		      $updatedata['search'] = $this->input->post('search');
		      $updatedata['meta_title'] = $this->input->post('meta_title');
		      $updatedata['meta_description'] = $this->input->post('meta_description');
			  
		   		//this check language id exist or not
			   
			   	$q = $this->db->get_where('home_content', array(
                 'language_id' => $id	 
                ));

                if($q->num_rows()==0){
					
					
					    $data12 = array(
                        'language_id' => $id
                             );
                 $this->db->insert('home_content', $data12);
				}
				
				//
			  $this->db->where('language_id',$id);
		      $this->db->update("home_content",$updatedata);
		     
		  
	      }
		$data['languages'] = $this->user->get_language(1);
		
				    //get content
				    $this->db->select("*")
		            ->from("home_content");
                    $this->db->where('language_id',$id);
                    $result = $this->db->get();	
                    		   
				   $data['home_content'] = $result->result_array();
	         	   ///
		     
		$data['page'] ='home content';
	    $data['title'] ='home content';
	    $data['heading'] ='Edit Home Content';
	   
		$data['action'] = base_url().'admin/homecontent/'.$id;
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/home_content');
		$this->load->view('admin/include/footer');  
		  
	    
	   
      } 
	  
	  public function manage_segment(){
	  
		$data['page'] ='Manage segemnt';
	    $data['title'] ='Manage segemnt';
	    $data['heading'] ='Manage segemnt'; 
		$this->db->select("*")
		->from("segment");
		$result = $this->db->get();	
		$data['segment'] = $result->result_array();
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/manage_segemnt');
		$this->load->view('admin/include/footer'); 
	  
	  
	  }
	  
	  
	  public function managae_like_segment(){
	  
		$data['page'] ='Manage like segemnt';
	    $data['title'] ='Manage like segemnt';
	    $data['heading'] ='Manage like segemnt'; 
		$this->db->select("*")
		->from("view_segment");
		$result = $this->db->get();	
		$data['segment'] = $result->result_array();
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/manage_view_segemnt');
		$this->load->view('admin/include/footer'); 
	  
	  
	  }

	  public function edit_like_segment($id){
	        
	        $this->load->model('admin/Common_model');
	        $this->load->library('form_validation');
		     $data['singledata'] = $this->Common_model->getsingle("view_segment",array("seg_id"=>$id));
			 
		   	$this->form_validation->set_rules('name','Name','trim|required');
		    $this->form_validation->set_rules('start_range','Start range','trim|required');
		    $this->form_validation->set_rules('end_range','End range','trim|required');
			if($this->form_validation->run() == 'true')
            {
               		 $array['name'] = $this->input->post('name',true);
		             $array['start_range'] = $min = $this->input->post('start_range',true);
		             $array['end_range'] =   $max =$this->input->post('end_range',true);
		             $this->Common_model->updateData('view_segment',$array,array("seg_id"=>$id));
			         $this->update_like_count($min,$max,$id);
			         redirect('admin/managae_like_segment');
					 $_SESSION['msg'] ='Segment edited sucsessfully';
		              			
			
			}			

			
			$data['page'] ='edit_like_segment';
			$data['name'] ='edit_like_segment';
			$data['heading'] ='edit like segment';
			$data['title'] ='edit like segment';
			$data['action'] = base_url().'admin/edit_like_segment/'.$id;
			$this->load->view('admin/include/header',$data);
			$this->load->view('admin/include/inner_header',$data);
			$this->load->view('admin/add_view_segment',$data);
			$this->load->view('admin/include/footer'); 
	  }
	  
	  
	  public function edit_segment($id){
	        
	        $this->load->model('admin/Common_model');
	        $this->load->library('form_validation');
		     $data['singledata'] = $this->Common_model->getsingle("segment",array("seg_id"=>$id));
			 
		   	$this->form_validation->set_rules('name','Name','trim|required');
		    $this->form_validation->set_rules('start_range','Start range','trim|required');
		    $this->form_validation->set_rules('end_range','End range','trim|required');
			if($this->form_validation->run() == 'true')
            {
               		 $array['name'] = $this->input->post('name',true);
		             $array['start_range'] = $min = $this->input->post('start_range',true);
		             $array['end_range'] =   $max =$this->input->post('end_range',true);
		             $this->Common_model->updateData('segment',$array,array("seg_id"=>$id));
			         $this->update_view($min,$max,$id);
			         redirect('admin/manage_segment');
					 $_SESSION['msg'] ='Segment edited sucsessfully';
		              			
			
			}			

			
			$data['page'] ='edit_segment';
			$data['name'] ='edit_segment';
			$data['heading'] ='edit segment';
			$data['title'] ='edit segment';
			$data['action'] = base_url().'admin/edit_segment/'.$id;
			$this->load->view('admin/include/header',$data);
			$this->load->view('admin/include/inner_header',$data);
			$this->load->view('admin/add_segment',$data);
			$this->load->view('admin/include/footer'); 
	  }
	
	public function update_view($min,$max,$seg){
		     $this->db->select('*');
	         $this->db->from("product");
	         $this->db->where("s_id",$seg);
	         $query = $this->db->get();
	         $query_result = $query->result_array();
	         foreach ( $query_result as $row ){

	           	  $data['mobile_view'] = rand($min,$max); 
	           	  $this->db->where('pro_id', $row['pro_id']);
                  $this->db->update('product', $data); 
	           }
	}

	public function update_like_count($min,$max,$seg){
		     $this->db->select('*');
	         $this->db->from("product");
	         $this->db->where("like_s_id",$seg);
	         $query = $this->db->get();
	         $query_result = $query->result_array();
			 
	         foreach ( $query_result as $row ){

	           	  $data['mobile_like'] = rand($min,$max); 
	           	  $this->db->where('pro_id', $row['pro_id']);
                  $this->db->update('product', $data); 
	           }  
			 
			   
			 /*$this->db->select('*');
	         $this->db->from("product");
	         // $this->db->where("mobile_like < and > 300",200);
	         $query = $this->db->get();
	         $query_result = $query->result_array();
			 echo "<pre>";
			 
	         foreach ( $query_result as $row ){
				 
                      if($row['mobile_like'] < 200 ){
							 $data['like_s_id'] = 1; 
							$this->db->where('pro_id', $row['pro_id']);
							$this->db->update('product', $data);  
					  }
					  if($row['mobile_like'] < 300 and $row['mobile_like'] >= 200){
							 $data['like_s_id'] = 2; 
							 $this->db->where('pro_id', $row['pro_id']);
							 $this->db->update('product', $data);
                        
						  
						  
					  }  
					  if($row['mobile_like'] < 400 and $row['mobile_like'] >= 300){
							 $data['like_s_id'] = 3; 
							$this->db->where('pro_id', $row['pro_id']);
							$this->db->update('product', $data);
                      							
						  
						  
					  } 
					  if($row['mobile_like'] < 500 and $row['mobile_like'] >= 400){
							 $data['like_s_id'] = 4; 
							$this->db->where('pro_id', $row['pro_id']);
							$this->db->update('product', $data);						  
						    print_r($row);
						  
					  }
					   

	           } */ 
	}
	
	  function mobile_voucher(){
      if(!$this->session->userdata('id')){
	         redirect("admin");
	   }else{
		$query = $this->db->select('*')
		              ->from('offer_voucher ov')
					  ->join('offer o','ov.offer_listing_id=o.offer_id')
					  ->order_by('ov.id desc')->get(); 
		$data['vouchers']  = $query->result_array();
		$data['page'] ='Mobile offer vouchers ';
	    $data['title'] ='Manage offer vouchers ';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/offer_voucher_view');
		$this->load->view('admin/include/footer');   
	   }
		  
	  }	
	  function mobile_request(){
      if(!$this->session->userdata('id')){
	         redirect("admin");
	   }else{
		$query = $this->db->select('ov.*,o.title')
		              ->from('offer_voucher_request ov')
					  ->join('offer o','ov.offer_id=o.offer_id')
					  ->order_by('ov.id desc')->get(); 
		$data['vouchers']  = $query->result_array();
		$data['page'] ='Mobile offer vouchers request';
	    $data['title'] ='Manage offer vouchers request';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/voucher_request_view');
		$this->load->view('admin/include/footer');   
	   }
		  
	  }
      //enquiry section
	  public function enquiry()
	{	 
	   
	   if(!$this->session->userdata('id')){
	         redirect("admin/login");
	   }else{
	    $data['enquiries'] = $this->user->get_enquiry(); 
	   /* print_r($data['enquiries']); die();*/
		$data['page'] ='Enquiry';
	    $data['title'] ='Enquiry';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/enquiry_listing',$data);
		$this->load->view('admin/include/footer');  
	   }
	}

	// manage view enquiry 
		function view_enquiry($id){
		
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
		 // print_r($id); die();
		$data['enquiries'] = $this->user->get_enquiry_single($id);
		
           //print_r($data['enquiries']); die();
		$data['page'] ='view_enquiry';
	    $data['title'] ='view enquiry';
	    $data['heading'] ='view enquiry';
	    $data['image'] ='';
		$data['action'] = '';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/view_enquiry');
		$this->load->view('admin/include/footer');  
		  
		  
	   }
    }
     
  //delete enquiry
	   
	function delete_enquiry($id){
		        
		$data= array(
			'Deleted' => 0
		);		 
		 $this->db->where('id', $id);
         $query = $this->db->update('enquiries_form',$data);
         if($query){
		  $_SESSION['msg'] = 'enquiry deleted';
	      redirect("admin/enquiry"); 
	      }

	}


     public function view_single_voucher(){
	       $id =  $_POST['val'];
		   $query = $this->db->select('ov.*,o.title')
		              ->from('offer_voucher_request ov')
					  ->join('offer o','ov.offer_id=o.offer_id')
					  ->where('ov.id',$id)->get(); 
		   $vouchers = $query->result();
            foreach($vouchers as $v){}
			   if($v->status=='0'){
			          $status = 'pending';
			    }elseif($v->status=='1'){
				     $status = 'aprove';
				}else{
				     $status = 'canceled';
				} 
          $table = '';
          $table .= '<table class="table table-striped table-bordered" ><tbody><tr><td>Device_id</td><td>'.$v->	device_id .'</td></tr>';		  
          $table .= '<tr><td>offer listing name</td><td>'.$v->title .'</td></tr>';		  
          $table .= '<tr><td>name</td><td>'.$v->name .'</td></tr>';		  
          $table .= '<tr><td>email</td><td>'.$v->email .'</td></tr>';		  
          $table .= '<tr><td>mobile</td><td>'.$v->mobile .'</td></tr>';		  
          $table .= '<tr><td>message</td><td>'.$v->message .'</td></tr>';		  
          $table .= '<tr><td>status</td><td>'.$status .'</td></tr><tbody></table>';
		  
		  echo $table;
	 
	 }

		public function chnage_status_voucher(){
             $id =  $_POST['id'];
			 $this->db->where("id",$id);
			 $data['status'] = $_POST['val'];
			 $this->db->update("offer_voucher_request",$data);

		    $query = $this->db->select('ov.*,o.title,o.image')
		              ->from('offer_voucher_request ov')
					  ->join('offer o','ov.offer_id=o.offer_id')
					  ->where('ov.id',$id)->get(); 
		    $vouchers = $query->result();


			
			
            foreach($vouchers as $v){}	
			$mss = '';
			$mss_n ='';
		    $query1 = $this->db->select('*')
		              ->from('push_notification')
					  ->where('device_id',$v->device_id)->get(); 
		    $notification = $query1->result();
			
			   if($v->status=='0'){
			         $st = 'pending';
					
			    }elseif($v->status=='1'){
				     $st = 'aprove';
					 $mss = 'Congratulations! Your request has been approved for additional vouchers.';
					 $mss_n = 'Your voucher request has been approved';
				}else{
				     $st = 'canceled';
					 $mss = 'Your voucher request has been canceled';
				}              			
			 $username = $v->name;	
			 $to         = $v->email;
			 $subject    = 'Voucher request';
			 $from_email = 'Alpha2inc@outlook.com';			 
			 $headers    = "MIME-Version: 1.0" . "\r\n";
			 $name       = "UAET10";
			 $msg = '<table><tr>';
			 $msg .= '<td data-bgcolor="bg-block" class="holder" style="padding:58px 60px 52px;" bgcolor="#f9f9f9">
			 <table width="100%" cellpadding="0" cellspacing="0">
			 <tbody><tr><td data-color="title" data-size="size title" data-min="25" data-max="45" data-link-color="link title color" data-link-style="text-decoration:none; color:#292c34;" class="title" align="center" style="font:35px/38px Arial, Helvetica, sans-serif; color:#292c34; padding:0 0 24px;">Voucher Request</td></tr><tr><td data-color="text" data-size="size text" data-min="10" data-max="26" data-link-color="link text color" data-link-style="font-weight:bold; text-decoration:underline; color:#40aceb;" align="center" style="font:bold 16px/25px Arial, Helvetica, sans-serif; color:#888; padding:0 0 23px;">Hello '.$username.' ,</br>  '.$mss.' </td></tr><tr><td style="padding:0 0 20px;"><table width="134" align="center" style="margin:0 auto;" cellpadding="0" cellspacing="0"><tbody><tr><td data-bgcolor="bg-button" data-size="size button" data-min="10" data-max="16" class="btn" align="center" style="font:12px/14px Arial, Helvetica, sans-serif; color:#f8f9fb; text-transform:uppercase; mso-padding-alt:12px 10px 10px; border-radius:2px;" bgcolor="#7bb84f"> </td></tr></tbody></table></td></tr></tbody></table></td></tr></table>'; 
			 $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			 $headers .= 'From: "'.$name.'"<"'.$from_email.'">' . "\r\n";
			 
			 if($v->status != '0'){
				mail($to, $subject, $msg,$headers) ;
			 
				 if(!empty($notification)){
				 $m = 'Your voucher request has '.$st;
				 
						 foreach($notification as $n1) {} 
						  sendNotification($n1->registration_key,$v->title,$m,$v->offer_id,base_url().'images/offer/'.$v->image,3,$n1->device_id);
				 }
			 }
			 		 
		}
     /*
	private function sendNotification($target, $title, $description,$id,$image,$type=3){
		//FCM API end-point
		$url = 'https://fcm.googleapis.com/fcm/send';
		//api_key available in Firebase Console -> Project Settings -> CLOUD MESSAGING -> Server key
		$server_key = 'AAAA4zlVpjU:APA91bEeJx52QHytWhDEUc3XGZtMal-WhenVsYKmXSWEtMwkLtWV-CmcIaZ6cz8Wlh63mu46pUoV33tL4VlaaNCA9fJldvwS6G0N49iHtxiPywfCR4N0Bx8Y3GC3HOsKR-_uWOtFqg6q';
		$data = array("via"=>"UAET10", "title"=>$title, "message"=>$description,'id'=>$id,'image'=>$image,'type'=>$type);
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
	} */		
	  
}
