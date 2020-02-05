<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {
	 function __construct() {
        parent::__construct();
        $this->load->library('google');
      /*  $this->load->model('User');*/
    }

	public function index(){
		$data['google_login_url']=$this->google->get_login_url();
		$this->load->view('home',$data);
	}

	public function oauth2callback(){
		$google_data=$this->google->validate();
		/*$email='email'=>$google_data['email'];
		print_r($email);*/
		$session_data=array(
				'first_name'=>$google_data['name'],
				'email'=>$google_data['email'],
				'oauth_provider'=>$google_data['id'],
				'oauth_uid'=>'google',
				'profile'=>$google_data['profile_pic'],
				'link'=>$google_data['link'],
				'sess_logged_in'=>1
				);
		       $userID = $this->modal->user->checkUser($session_data);
			$this->session->set_userdata($session_data);
			print_r($session_data);die();
            /* redirect(base_url());*/
	}
	public function logout(){
		session_destroy();
		unset($_SESSION['access_token']);
		$session_data=array(
				'sess_logged_in'=>0);
		$this->session->set_userdata($session_data);
		redirect(base_url());
	}
}
