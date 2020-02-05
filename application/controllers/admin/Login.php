<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

      function __construct(){
		  parent::__construct();
		  $this->load->model("admin/user");
		  $this->load->library('session');
		
	  }
	public function index()
	{	

		/*$sessionArray = array(
             'is_logged' => TRUE
                );

         $this->session->set_userdata($sessionArray);
         echo $this->session->userdata('is_logged');die();*/
	     $data = array();
	    //print_r($this->session->userdata('pass')); die();
        
		       if($this->session->userdata('id')){
			      redirect("admin/dashboard");
			   
			   }
		  
    
		 if($this->input->post('submit') !=false){
				
				$result = $this->user->login($this->input->post('username'),$this->input->post('password'));
				//$result= $this->db->get_where('')->row();
	           
            // print_r($result); die();
			   if($result)
                   {
             $sess_array = array();
             foreach($result as $row)
             {
          $sess_array = array(
          'id' => $row->id,
          'username' => $row->username
           ) ;
          
             }
            // print_r($sess_array); die();
              $this->session->set_userdata('logged_in', $sess_array);
			 redirect("admin/dashboard");
         
       }else{
		   $data['error'] = 'Invalid username or password';
	   } 
			 
	 }
	    
	     $data['page'] ='login';
	     $data['title'] ='Login';
		     //echo MD5(123456);
			 $this->load->view('admin/login_view',$data);
		
	}


 public function login()
  {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $login = $this->user->login_user_deatils($username,$password);
     // echo "<pre>";
       /* print_r($login);exit;*/
      if($login)
      {
        $data = array(
          'id' => $login->id,
         'username'=>$login->username
        );
        //print_r($data); 

        $this->session->set_userdata($data);
       //$session   = $this->session->userdata('deliverdata',$data);
         /*$this->session->set_userdata($data);*/
       
        $this->session->set_flashdata('message','Login Success');
        redirect('admin/dashboard');
      }else
      {
        $this->session->set_flashdata('message','Wrong credentials');
        redirect('admin/login');
      }
  }  
 //forget Password 
   function forget(){
	   
	   if($this->input->post('submit') != false){
	   
	      		  $this->db->select("*")
				  
		          ->from('tbl_admin')
				  
		          ->where('email',$this->input->post('email'))
				  
		          ->where('fb_id','');
				  
		          $query = $this->db->get();
				  
				  $emailexist = $query->num_rows();
				  
				  if($emailexist==1){
					  
					      $sql = $query->result();
						  $alphabet = 'abcdefghijklmnopqrstuvwxyz0123456789';
						  $password = '';
						  $len = 6;
						  $random = openssl_random_pseudo_bytes($len);
						  $alphabet_length = strlen($alphabet);
                           for ($i = 0; $i < $len; ++$i) {
                                 $password .= $alphabet[ord($random[$i]) % $alphabet_length];
                            }
						  
						  
						    $data = array(
							 'password'=>md5($password)
							);
						
						    $this->db->where('id',$this->input->post('email'));
                            $this->db->update('tbl_admin', $data);
							
					        require 'PHPMailer/PHPMailerAutoload.php';

                     $mail = new PHPMailer;

                     $mail->isSMTP();                                   // Set mailer to use SMTP
                     $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
                     $mail->SMTPAuth = true;                            // Enable SMTP authentication
                     $mail->Username = 'atultiwari9713@gmail.com';          // SMTP username
                     $mail->Password = 'Amit*tiwari'; // SMTP password
                     $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
                     $mail->Port = 587;                                 // TCP port to connect to

                     $mail->setFrom('atultiwari9713@gmail.com', 'Outline');
                     $mail->addReplyTo('atultiwari9713@gmail.com', 'Outline');
                     $mail->addAddress($this->input->post('email'));   // Add a recipient
                     

                     $mail->isHTML(true);  // Set email format to HTML

                    
                     $bodyContent = "<p> Your Password Is $password </p>";

                     $mail->Subject = 'forgetpassword';
                     $mail->Body    = $bodyContent;
                      if(!$mail->send()) {
                       $data['error']= 'Message could not be sent.';
                        //echo 'Mailer Error: ' . $mail->ErrorInfo;
                       } else {
                        $data['suc'] = 'Message has been sent';
                        }
                   
           }else{
			 $data['error'] = 'Email Not Found';
		   }
	}
	 	 $data['page'] ='forgetpassword';
	     $data['title'] ='Reset Your Password';
		 $this->load->view('admin/include/header',$data);
		 $this->load->view('admin/forgetpassword_view',$data);
		 $this->load->view('admin/include/footer');   
	   
   }
   
   //edit admin profile
   function edit_profile(){
	   
	   $data['result'] = $this->user->get_admin();
	            if($this->input->post('submit') != false){
					
					$update['username'] = $this->input->post('username');
					$update['email'] = $this->input->post('email');
					 $id = $this->session->userdata['logged_in']['id'];
					$this->db->where('id',$id);					
					$query = $this->db->update('tbl_admin',$update);					
					if($query){
						$this->session->userdata['logged_in']['username'] = $update['username'] ;
						$data['msg'] = 'Profile update successfully ';
						
					}else{
						$data['msg'] = 'Please try again';
					}
				}
	    
	   	 $data['page'] ='edit_profile';
	     $data['title'] ='edit profile';
	     $data['action'] = base_url().'admin/profile';
		 $this->load->view('admin/include/header',$data);
		 $this->load->view('admin/include/inner_header',$data);
		 $this->load->view('admin/profile_view');
		 $this->load->view('admin/include/footer');  
	   
	   
   }
   
   // change password
   
   function change_password(){
	   
	   	   
		   
	            if($this->input->post('submit') != false){
					
					$old_password = md5($this->input->post('old_password'));
					
					$new_password = md5($this->input->post('password'));
					
					$id = $this->session->userdata['logged_in']['id'];
					
				   $this->db->select("*")
				  
		          ->from('tbl_admin')
				  
		          ->where('password',$old_password)
				  
		          ->where('id',$id);
				  
		          
				  
		          $query = $this->db->get();
				  
				  $passwordexist = $query->num_rows();
				  
				   if($passwordexist){
					
					$update['password'] = $new_password;
					
					$this->db->where('id',$id);					
					
					$query = $this->db->update('tbl_admin',$update); 
					   					
					    if($query){
						
						 $data['msg'] = 'Password change successfully ';
						
					     }else{
							 
						$data['msg'] = 'Please try again';
						
					     }
						 
				   }else{
					   $data['msg'] = 'Old pasword dose not match';
				   }
					
					

				}
	    
	   	 $data['page'] ='change_password';
	     $data['title'] ='change password';
	     $data['action'] = base_url().'admin/change_password';
		 $this->load->view('admin/include/header',$data);
		 $this->load->view('admin/include/inner_header',$data);
		 $this->load->view('admin/changepassword_view');
		 $this->load->view('admin/include/footer'); 
		 
   }
   
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    unset($_SESSION['fb_access_token']);
	 $this->session->unset_userdata('pass');
    session_destroy();
    redirect('admin/dashboard', 'refresh');
  }
   

}
