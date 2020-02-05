<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class content extends CI_Controller {

      function __construct(){
		  parent::__construct();
		  $this->load->model("admin/user");
		  $this->load->model("admin/content_model");
		  $this->load->library('session');
		  /* $sess_array = array(
          'id' => 1,
          'username' => 'Admin'
           ) ;
         $this->session->set_userdata('id', $sess_array);*/
	  }
	  
	  // index method for testimonial module
	public function index()
	{	 
	   
	   if(!$this->session->userdata('id')){
	         redirect("admin/login");
	   }else{
		 $data['testimonials'] = $this->content_model->get_testimonial();
		 $data['page'] ='testimonial';
	     $data['title'] ='manage testimonial';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/managetestimonial_view');
		$this->load->view('admin/include/footer');  
	   }
	}
 
   //add testimonial
  
  function add_testimonial(){
	  
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			if($this->input->post('submit') != false){
				
               if(!empty($_FILES['tasti_image']['name'])){
					 
                $config['upload_path']   = './images/testimonial/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
		  
                $this->load->library('upload', $config);
			
                  if ( ! $this->upload->do_upload('tasti_image')) {
                    $data['error'] =  $this->upload->display_errors(); 
					 $error = 1 ;
                     }else{ 
                         $data1 =  $this->upload->data(); 
					     $image =  $data1['file_name'];
					 }
			        } 	 
			         //print_r($image) die();
			 $result = $this->content_model->add_testimonial($this->input->post(), $image);
			 
		      if($result){
				  
				    $_SESSION['msg'] = 'testimonial added';
					  redirect("admin/testimonial");
				  }else{
					 $data['msg'] = 'Please try again'; 
				  }
			  	 
             
           /*}  */
				  
				
				
		}		
		
		$data['languages'] = $this->user->get_language(1);		
		$data['regions'] = $this->user->get_regions(1);		
		$data['page'] ='add_testimonial';
	    $data['title'] ='add testimonial';
	    $data['heading'] ='add testimonial';
	    $data['image'] ='tasti_image';
		$data['action'] = base_url().'admin/add_testimonial';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_testimonial');
		$this->load->view('admin/include/footer');  
		  
		  
	   }
  }
  
    //edit testimonial
  
   function edit_testimonial($id){
	   
	   if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			  $error = 0 ;
			  $image = '';
			if($this->input->post('submit') != false){
				
				
			   if(!empty($_FILES['edit_tasti_image']['name'])){
					 
                $config['upload_path']   = './images/testimonial/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
		  
                $this->load->library('upload', $config);
			
                  if ( ! $this->upload->do_upload('edit_tasti_image')) {
                    $data['error'] =  $this->upload->display_errors(); 
					 $error = 1 ;
                     }else{ 
                     $data1 =  $this->upload->data(); 
					 $image =  $data1['file_name'];
					 }
			         } 	 
					   if($error==0){
			             $result = $this->content_model->edit_testimonial($this->input->post(),$image,$id);
			 
		               if($result){
				  
				       $_SESSION['msg'] = 'testimonial updated';
					   redirect("admin/testimonial");
				       }else{
					     $data['msg'] = 'Please try again'; 
				        }
					  }
                    	
		        }
			
		
		$data['languages'] = $this->user->get_language(1);
		
		$data['regions'] = $this->user->get_regions(1);
		
		$data['testimonial'] = $this->content_model->get_testimonial_single($id,'null');
		
			
		
		$data['page'] ='edit_testimonial';
	    $data['title'] ='edit testimonial';
	    $data['heading'] ='edit testimonial';
	    $data['image'] ='edit_tasti_image';
		$data['action'] = base_url().'admin/edit_testimonial/'.$id;
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_testimonial');
		$this->load->view('admin/include/footer');  
		  
		  
	   }
	   
	   
    }
	
	 //view testimonial 
	
	   function view_testimonial($id){
	   
	   if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{			

		$data['languages'] = $this->user->get_language(1);		
		$data['regions'] = $this->user->get_regions(1);		
		$data['testimonial'] = $this->content_model->get_testimonial_single($id,'view');		
		$data['page'] ='view_testimonial';
	    $data['title'] ='view testimonial';
	    $data['heading'] ='view testimonial';
	    $data['image'] ='';
		$data['action'] ='';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/view_testimonial');
		$this->load->view('admin/include/footer');  
		  
		  
	   }
	   
	   
    }
    
	
	// delete testimonial function
	
	function delete_testimonial($id){

				 $result = $this->content_model->get_testimonial_single($id);
				//  print_r( $result); die();
				 unlink('./images/testimonial/'.$result[0]['testi_image']);
			      $this->db->where('testi_id', $id);
                  $query = $this->db->delete('testimonial');
                  $this->db->where('testi_id', $id);		  
                  $query = $this->db->delete('testimonial_detail'); 
	              if($query){
		           $_SESSION['msg'] = 'testimonial deleted';
	               redirect("admin/testimonial/");
				  }
		
	}
	
	
	// blog content start 
	
	 function blog(){
		 
		if(!$this->session->userdata('id')){
	         redirect("admin/login");
	    }else{
		 $data['blogs'] = $this->content_model->get_blog();
		 $data['page'] ='blog';
	     $data['title'] ='manage blog';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/manageblog_view');
		$this->load->view('admin/include/footer');  
	   }
	 }
	 
	  // add blog 
	 
	 public function add_blog(){
		 if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			if($this->input->post('submit') != false){
				
          $config['upload_path']   = './images/blog/';
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
		  
          $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('blog_image')) {
            $data['error'] =  $this->upload->display_errors(); 
           }
			
         else { 
             $data1 =  $this->upload->data(); 
			 $result = $this->content_model->add_blog($this->input->post(),$data1['file_name']);
			 
		      if($result){
				  
				    $_SESSION['msg'] = 'blog added';
					  redirect("admin/blog");
				  }else{
					 $data['msg'] = 'Please try again'; 
				  }
			  	 
             
          } 
				  
				
				
		}
			
		
		$data['languages'] = $this->user->get_language(1);
		
		$data['regions'] = $this->user->get_regions(1);
		
		
		
			
		
		$data['page'] ='add_blog';
	    $data['title'] ='add blog';
	    $data['heading'] ='add blog';
	    $data['image'] ='blog_image';
		$data['action'] = base_url().'admin/add_blog';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_blog');
		$this->load->view('admin/include/footer');  
		  
		  
	   }
		 
	 }

	   //view blog 
  
    function view_blog($id){
	  
	  if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{

		$data['languages'] = $this->user->get_language(1);
		
		$data['regions'] = $this->user->get_regions(1);
		
		$data['blog'] = $this->content_model->get_blog_single($id,'view');
		
		
		
			
		
		$data['page'] ='view_blog';
		$data['heading'] ='view blog';
	    $data['title'] ='view blog';
	    $data['image'] ='';
		$data['action'] = '';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/view_blog');
		$this->load->view('admin/include/footer');  
		  
		  
	   }
	  
	  
	  
	  
	  
  }
  
  
  
  
  
  
  // edit blog
  
  function edit_blog($id){
	  
	  if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			$error = 0 ; 
			$image = '';
			if($this->input->post('submit') != false){
				
			  if(!empty($_FILES['edit_blog_image']['name'])){
					 
                $config['upload_path']   = './images/blog/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
		  
                $this->load->library('upload', $config);
			
                  if ( ! $this->upload->do_upload('edit_blog_image')) {
                    $data['error'] =  $this->upload->display_errors(); 
					 $error = 1 ;
                     }else{ 
                     $data1 =  $this->upload->data(); 
					 $image =  $data1['file_name'];
					 }
			         }	 
					   if($error==0){
			             $result = $this->content_model->edit_blog($this->input->post(),$image,$id);
			 
		               if($result){
				  
				       $_SESSION['msg'] = 'blog updated';
					   redirect("admin/blog");
				       }else{
					     $data['msg'] = 'Please try again'; 
				        }
					}			  
				
				
		}
			
		
		$data['languages'] = $this->user->get_language(1);
		
		$data['regions'] = $this->user->get_regions(1);
		
		$data['blog'] = $this->content_model->get_blog_single($id,'null');
		
		
		
			
		
		$data['page'] ='edit_blog';
		$data['heading'] ='edit blog';
	    $data['title'] ='edit blog';
	    $data['image'] ='edit_blog_image';
		$data['action'] = base_url().'admin/edit_blog/'.$id;
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_blog');
		$this->load->view('admin/include/footer');  
		  
		  
	   }
	  
	  
	  
	  
	  
  }
  
  //delete blog 
  
  function delete_blog($id){
	  
	$result = $this->content_model->get_blog_single($id);
	unlink('./images/blog/'.$result[0]['blog_image']);
	$this->db->where('blog_id', $id);
    $query = $this->db->delete('blog');
    $this->db->where('blog_id', $id);		  
    $query = $this->db->delete('blog_detail'); 
	if($query){
	     $_SESSION['msg'] = 'blog deleted';
	      redirect("admin/blog/");
		 }	  
	  
	  
  }
  
  
  // suggation module 
  
  function manage_suggestion(){
	  	if(!$this->session->userdata('id')){
	         redirect("admin/login");
	    }else{
		 $data['sug'] = $this->content_model->get_suggestion();
		 $data['page'] ='suggestion';
	     $data['title'] ='manage suggestion';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/suggestion_view');
		$this->load->view('admin/include/footer');  
	   }
	  
  }
  
  
  
 
   function add_suggestion(){
	  if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			if($this->input->post('submit') != false){
				
    	           $result = $this->content_model->add_suggetion($this->input->post());
				    if($result){
				  
				     $_SESSION['msg'] = 'suggestion  added';
					  redirect("admin/suggestion");
				    }else{
					 $data['msg'] = 'Please try again'; 
				   }
		   }
			
		
		$data['languages'] = $this->user->get_language(1);
		
		$data['regions'] = $this->user->get_regions(1);
		
		
		
			
		
		$data['page'] ='add_suggestion';
	    $data['title'] ='add suggestion';
	    $data['heading'] ='add suggestion';
	    
		$data['action'] = base_url().'admin/add_suggestion';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_suggestion');
		
		  
		  
	   } 
	   
   }
  
  
  
       //view suggation function  
  
       function view_suggestion($id){
	  if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{

			
		
		$data['languages'] = $this->user->get_language(1);
		
		$data['regions'] = $this->user->get_regions(1);
		
		$data['sug'] = $this->content_model->get_suggestion_single($id,'view');
		
		
		
			
		
		$data['page'] ='view_suggestion';
		$data['heading'] ='view_suggestion';
	    $data['title'] ='view suggestion';
	    
		$data['action'] = '';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/view_detail/view_suggestion');
		$this->load->view('admin/include/footer');  
		  
		  
	   } 
	   
	 }
  
  
  
  
  
      //edit suggation 
  
     function edit_suggestion($id){
	  if(!$this->session->userdata('id')){
	         redirect("admin");
	    }else{
			if($this->input->post('submit') != false){
				
    	           $result = $this->content_model->edit_suggestion($this->input->post(),$id);
				    if($result){
				  
				     $_SESSION['msg'] = 'suggestion  added..';
					  redirect("admin/suggestion");
				    }else{
					 $data['msg'] = 'Please try again'; 
				   }
		    }
			
		
		$data['languages'] = $this->user->get_language(1);
		
		$data['regions'] = $this->user->get_regions(1);
		
		$data['sug'] = $this->content_model->get_suggestion_single($id,'null');
		
		
		
			
		
		$data['page'] ='edit_suggestion';
	    $data['title'] ='edit suggestion';
	    $data['heading'] ='edit suggestion';
	    
		$data['action'] = base_url().'admin/edit_suggestion/'.$id;
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/include/inner_header',$data);
		$this->load->view('admin/add_suggestion');
		
		  
		  
	   } 
	   
	 } 
	 
	 
	 //delete suggation

      function delete_suggestion($id){
		  
	      $this->db->where('sug_id', $id);
          $query = $this->db->delete('suggession');
          $this->db->where('sug_id', $id);		  
          $query = $this->db->delete('suggession_detail'); 
	      if($query){
	      $_SESSION['msg'] = 'suggestion deleted';
	      redirect("admin/suggestion/");
		  }	
		  
		  
	  }

  	 function unique_blog(){
	     $url = $this->clean_string($_POST['burl']);
	           $this->db->select("*")
			    ->from("blog") 
				->where("url", $url );
				  
	                     //for edit page 
				     if($_POST['page']=='edit_blog'){
						 
		             $this->db->where("blog_id != ",$_post['main_id'] );	 
					
					 }
				  
 			
		   $query = $this->db->get();
		
		   $count = $query->num_rows();
		
		 if($count>0){
			
			 echo "false";
			 
		 }else{
			
			 echo "true";
		 }
	 }
	 
	 function unique_suggation(){
	  
	          $url = $this->clean_string($_POST['url']);
	              $this->db->select("*")
			      ->from("suggession")
				  ->where("url",$url);
	                     //for edit page 
				     if($_POST['page']=='edit_suggestion'){
						 
		             $this->db->where("sug_id != ",$_POST['main_id'] );	 
					
					 }
				  
 			
		   $query = $this->db->get();
		
		   $count = $query->num_rows();
		
		 if($count>0){
			
			 echo "false";
			 
		 }else{
			
			 echo "true";
		 }
	 }
	 
	
     function clean_string($str){
	   
	   $cleanStr = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $str)));
	   
	   return str_replace(" ","-",$cleanStr);
	   
   }
   function excel(){
   
     
     $header = '';
$data ='';
 
 $this->db->select('email');
			 $this->db->from('fb_campaign');
			 
				$q=$this->db->get();
			 $this->db->last_query();
			 
$export = mysql_query($this->db->last_query()) or die(mysqli_error($con));

while ($fieldinfo=mysql_fetch_field($export))
{
	$header .= $fieldinfo->name."\t";
}
// export data 
while( $row = mysql_fetch_row( $export ) )
{
    $line = '';
    foreach( $row as $value )
    {                                            
        if ( ( !isset( $value ) ) || ( $value == "" ) )
        {
            $value = "\t";
        }
        else
        {
            $value = str_replace( '"' , '""' , $value );
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
    }
    $data .= trim( $line ) . "\n";
}
$data = str_replace( "\r" , "" , $data );
 
if ( $data == "" )
{
    $data = "\nNo Record(s) Found!\n";                        
}
 
// allow exported file to download forcefully
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=booking.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$data";
   }
   
}
