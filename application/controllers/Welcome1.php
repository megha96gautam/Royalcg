<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
        public $siteLang ='';
        public $siteLang_id ='';
      function __construct(){
		  
		  parent::__construct();
		  $this->load->model('main_model');
		 if(!$this->session->userdata('language')){
			   
			  $this->session->set_userdata('language',language); 
			  $this->session->set_userdata('language_name',language_name); 
			
			   
		   }
		   $this->siteLang = strtoupper($this->session->userdata('language_name'));
		   $this->siteLang_id = $this->session->userdata('language');
		   

	  }

	public function index()
	{	
		
	  
        $data['banners'] = $this->user->get_banners(0); 

		// $data['logo'] = base_url().'front_assets/images/uae_logo.png';
	    $data['title'] ='Royalcg';
	    $data['banner_text'] ='Royalcg';
		$data['footer_copy']="Copyright © Royalcg 2016";
		$this->load->view('tamplate/header' , $data);
		// $this->load->view('home_uae');
		$this->load->view('welcome');
		$this->load->view('tamplate/footer',$data);
		
	
	}	
	
	
}
