<?php
class Hasspassword extends CI_Controller
{
     function __construct(){
		  
		  parent::__construct();
		}
	  
	  public function index(){
	       if($this->session->userdata("pass")){
		        redirect('admin');
		      }

 	         $data['title'] = 'Password';
			 $pas = sha1("alphaadt10beta");
			  if($this->input->post("submit") != false)
				{
				 $password = sha1($this->input->post("password"));
	               if($pas === $password){
				   	$this->session->set_userdata( 'pass', $password );
					 if(isset($_SESSION['pass']))
				    {
				       redirect(base_url('admin'));
				    }
				    else
				    {
				    	echo "Session is not set";die;
				    }
					 
				  
				  }else{
				  $data['error'] = 'Password not matched';
				   }
				  }

			   $this->load->view('admin/haspassword',$data);
		  
	  }
	
}

?>